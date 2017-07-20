<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Payments;
use AppBundle\Entity\Requestservices;
use AppBundle\Entity\Houses;
use AppBundle\Entity\Subscriptions;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Controller\ConvergeApi;
use AppBundle\Entity\Customers;
use Symfony\Component\HttpFoundation\Session\Session;


class ConvergeController extends Controller
{
    /**
     * @Route("/ccaddrecurring")
     */
    public function addRecurringAction(Request $request)
    {
        //---GET ALL REQUEST VARIABLES
        $customerId = $request->request->get('customerId');
        $amount = $request->request->get('amount');
        $cardNumber = $request->request->get('cardNumber');
        $cvv = $request->request->get('cvv');
        $expirationDate = $request->request->get('expirationDate');
        $nameOnCard = $request->request->get('nameOnCard');
        $cardType = $request->request->get('cardType');
        $planName = $request->request->get('planName');
        $houseCountryISO = $request->request->get('country');
        $houseState = $request->request->get('state');
        $houseCity = $request->request->get('city');
        $houseAddress = $request->request->get('address');
        $houseZipCode = $request->request->get('zipCode');

        $cFirstName = $request->request->get('firstName');
        $cLastName = $request->request->get('lastName');
        $cPhonePrimary = $request->request->get('phonePrimary');
        $cPhoneAlternate = $request->request->get('phoneAlternate');

        $tax = ($this->getTaxPercentage($houseCountryISO) * $amount) /100;

        $response = null;

        $repository = $this->getDoctrine()->getRepository('AppBundle:Customers');
        $customer = $repository->find($customerId);
        if($customer)
        {
            $firstName = $customer->getFirstname();
            $lastName = $customer->getLastname();
            $phonePrimary = $customer->getPhoneprimary();
            $country = $this->getIso3FromCountry($customer->getCountry());
            $email = $customer->getEmail();
            $state = $customer->getState();
            $city = $customer->getCity();
            $address =$customer->getAddress();
            $zipcode =$customer->getZipcode();

            $nextPaymentDate = new \DateTime();
            $nextPaymentDate->add(new \DateInterval('P30D'));

            $invoiceNumber = $this->getNextInvoiceNumber($customer->getCountry());

            $converge = new ConvergeApi( '007128','webpage','CL7NIF',false);
            // Submit a recurring payment
            $response = $converge->ccaddrecurring(
                array(
                    'ssl_amount' => $amount,
                    'ssl_salestax' => $tax,
                    'ssl_card_number' => $cardNumber,
                    'ssl_cvv2cvc2' => $cvv,
                    'ssl_exp_date' => $expirationDate,
                    'ssl_avs_address' => $address,
                    'ssl_avs_zip' => $zipcode,
                    'ssl_city' => $city,
                    'ssl_state' => $state,
                    'ssl_country' => $country,
                    'ssl_email' => $email,
                    'ssl_phone' => $phonePrimary,
                    'ssl_first_name' => $firstName,
                    'ssl_last_name' =>  $lastName,
                    'ssl_cardholder_ip' => $_SERVER['REMOTE_ADDR'],//$this->container->get('request')->getClientIp(),
                    'ssl_next_payment_date' => $nextPaymentDate->format('m/d/Y'),
                    'ssl_billing_cycle' => 'MONTHLY',
                    'vita_name_on_card' => $nameOnCard,
                    'ssl_invoice_number' => $invoiceNumber,
                    'ssl_customer_code'=> $customerId,
                )
            );


        }



// Display Converge API response
        //print('ConvergeApi->ccaddrecurring Response:' . "\n\n");
        //print_r($response);
        $result = array();
        if(array_key_exists("errorCode",$response))
        {
            $result['errorCode'] = $response['errorCode'];
            $result['errorName'] = $this->getTransactionErrorName($response['errorName']);
            $result['outcome'] = "FAILURE";
        }
        else
        {
            $result['errorCode'] = 0;
            $dateNow = new \DateTime('now');

            //---SUBSCRIBE HOUSE
            $houseCountry = $this->getCountryByIso3($houseCountryISO);

            $house = new Houses();
            $house->setFirstname($cFirstName);
            $house->setLastname($cLastName);
            $house->setPhoneprimary($cPhonePrimary);
            $house->setPhonealternate($cPhoneAlternate);
            $house->setCountry($houseCountry->getCountry());
            $house->setState($houseState);
            $house->setCity($houseCity);
            $house->setAddress($houseAddress);
            $house->setZipcode($houseZipCode);
            $house->setCustomer($customer);

            $em = $this->getDoctrine()->getManager();
            $em->persist($house);
            $em->flush();

            $price = $this->getPrice($houseCountryISO,$planName);
            $subscription = new Subscriptions();
            $subscription->setHouse($house);
            $subscription->setPrice($price);
            $subscription->setSubscriptiondate($dateNow);
            $subscription->setTransactionid($response['ssl_recurring_id']);

            $em = $this->getDoctrine()->getManager();
            $em->persist($subscription);
            $em->flush();

            //---END : SUSCRIBE HOUSE

            //-- ADD PAYMENT INFO
            $payment = new Payments();
            $payment->setPaymentdate($dateNow);
            $payment->setAmount($amount);
            $payment->setTax($tax);
            $payment->setDescription($planName . " subscription");
            $payment->setInvoicenumber($invoiceNumber);
            $payment->setSubscription($subscription);


            //-- END :: PAYMENT INFO


            $result['outcome'] = "SUCCESS";
        }

        return $this->json($result); //
    }

    private function getTransactionErrorName($convergeErrorName)
    {
        $errorList = array('Exp Date Invalid'=>'EXP_DATE_INVALID','Credit Card Number Invalid'=>'CC_NUMBER_INVALID');
        return $errorList[$convergeErrorName];
    }


    private function getIso3FromCountry($countryName)
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Countries');
        $country = $repository->findOneByCountry("$countryName");
        return $country->getCountryiso3();
    }
    private function getCountryByIso3($countryIso3)
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Countries');
        $country = $repository->findOneByCountryiso3("$countryIso3");
        return $country;
    }

    private function getNextInvoiceNumber($countryName)
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Countries');
        $country = $repository->findOneByCountry("$countryName");

        $em = $this->getDoctrine()->getManager();

        $substr = "inv-" . $country->getCountryid() . "-";
        $query = $em->createQuery( 'SELECT Max(p.invoicenumber) AS invNumber FROM AppBundle:Payments p WHERE p.invoicenumber LIKE :inv' );
        $query->setParameter('inv', '%' . $substr . '%');
        $invoiceNumber = $query->getSingleResult();
        $maxInvoiceNumber = $invoiceNumber['invNumber'];
        if($maxInvoiceNumber)
        {
            $split = explode('-',$maxInvoiceNumber);
            $number = (int) $split[2];
            $nextInvoiceNumber = $substr . ($number+1);
        }
        else
        {
            $nextInvoiceNumber = $substr . "1";
        }
        return $nextInvoiceNumber;
    }

    private function getTaxPercentage($countryIso3)
    {

        $country = $this->getCountryByIso3($countryIso3);
        $repository = $this->getDoctrine()->getRepository('AppBundle:Prices');
        $price = $repository->findOneByCountry($country);

        return $price->getTaxpercentage();
    }

    private function getPrice($countryIso3,$planName)
    {

        $country = $this->getCountryByIso3($countryIso3);

        $repository = $this->getDoctrine()->getRepository('AppBundle:Plans');
        $plan = $repository->findOneByPlanname($planName);

        $repository = $this->getDoctrine()->getRepository('AppBundle:Prices');
        $price = $repository->findOneBy(array('country'=>$country,'plan'=>$plan));

        return $price;
    }
}
