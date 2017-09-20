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
     * @Route("/testDate")
     */
    public function testDate(Request $request)
    {
        $nextPaymentDate = new \DateTime();
        $nextPaymentDate->add(new \DateInterval('P1D'));
        $conditionalMonths = array("04-30","06-30","09-30","11-30","02-28","02-29");
        $str = $nextPaymentDate->format('Y-m-d H:i:s');
        $startPDate = substr($str,5,5);
        return $this->json(in_array($startPDate, $conditionalMonths));
    }

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

        $tax = 0;
        if($houseCountryISO=="USA" || $houseCountryISO=="CAN" )
        {
            $tax = ($this->getTaxPercentage($houseCountryISO) * $amount) /100;
        }

        $totalAmount = $amount + $tax;

        $repository = $this->getDoctrine()->getRepository('AppBundle:Customers');
        $customer = $repository->find($customerId);

        $result = array();
		$result['transType'] = 'Recurring';
        $result['platform'] = 'DEMO';

        if($customer)
        {

            try
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
                $nextPaymentDate->add(new \DateInterval('P1D'));

                $invoiceNumber = $this->getNextInvoiceNumber($customer->getCountry());

                //$converge = new ConvergeApi( '007128','webpage','TXM3J2',false); // demo api
                //$result['platform'] = 'DEMO';
                $converge = new ConvergeApi( '789406','apiuser','TZLKOM08UH3DB7AI3RP636NSVP9R7Y1NVWYMX1A9Y7LO506EZQJ18GFOOVCVK1VP',true);
                //$totalAmount = 1.00;
                $result['platform'] = 'LIVE';

                // Submit a recurring payment
                $paymentParams = array(
                    'ssl_amount' => $totalAmount,
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
                    //'ssl_cardholder_ip' => $_SERVER['REMOTE_ADDR'],//$this->container->get('request')->getClientIp(),
                    'ssl_next_payment_date' => $nextPaymentDate->format('m/d/Y'),
                    'ssl_billing_cycle' => 'MONTHLY',
                    'vita_name_on_card' => $nameOnCard,
                    'ssl_invoice_number' => $invoiceNumber,
                    'ssl_customer_code'=> $customerId,
                );
                //-- conditional payment dates
                $conditionalDates = array("04-30","06-30","09-30","11-30","02-28","02-29");
                $str = $nextPaymentDate->format('Y-m-d H:i:s');
                $startPDate = substr($str,5,5);
                if(in_array($startPDate, $conditionalDates))
                {
                    $paymentParams['ssl_end_of_month'] = 'Y';
                }

                $response = $converge->ccaddrecurring($paymentParams) ;

                // Display Converge API response
                //print('ConvergeApi->ccaddrecurring Response:' . "\n\n");
                //print_r($response);

                if(array_key_exists("errorCode",$response)) // Transaction failed
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

                    //$em = $this->getDoctrine()->getManager();
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
                    $payment->setTransactionid($response['ssl_recurring_id']);
                    $payment->setCc($response['ssl_card_number']);
                    $payment->setSubscription($subscription);

                    $em->persist($payment);
                    $em->flush();

                    //-- END :: PAYMENT INFO

                    $result['errorName'] = '';
                    $result['outcome'] = "SUCCESS";
                }


            }
                //end : try
            catch(Exception $e)
            {
                    $result['outcome'] = 'FAILURE';
                    $result['errorCode'] = '-2';
                    $result['errorName'] = 'TRANSACTION_FAILED';
            }

        }
        else
        {
            $result['outcome'] = 'FAILURE';
            $result['errorCode'] = '-1';
            $result['errorName'] = 'CUSTOMER_INVALID';
        }
        //--END : IF CUSTOMER

        return $this->json($result);
    }

    /**
     * @Route("/ccupdaterecurring")
     */
    public function updateRecurringAction(Request $request)
    {

        //---GET ALL REQUEST VARIABLES
        $customerId = $request->request->get('customerId');
        $cardNumber = $request->request->get('cardNumber');
        $cvv = $request->request->get('cvv');
        $expirationDate = $request->request->get('expirationDate');
        $nameOnCard = $request->request->get('nameOnCard');

        $response = null;

        $repository = $this->getDoctrine()->getRepository('AppBundle:Customers');
        $customer = $repository->find($customerId);
        if($customer)
        {
            $repository = $this->getDoctrine()->getRepository('AppBundle:Houses');
            $houses = $repository->findByCustomer($customer);

            if(count($houses)>0)
            {
                $subscriptions = $houses[0]->getSubscriptions();
                $lastSubscription = $subscriptions[count($subscriptions)-1];
                $recurringId = $lastSubscription->getTransactionid();

                //$converge = new ConvergeApi( '007128','webpage','CL7NIF',false);
                $converge = new ConvergeApi( '789406','apiuser','TZLKOM08UH3DB7AI3RP636NSVP9R7Y1NVWYMX1A9Y7LO506EZQJ18GFOOVCVK1VP',true);

                //$totalAmount = '1.00';
                // Update recurring
                $response = $converge->ccupdaterecurring(
                    array(
                        'ssl_recurring_id' => $recurringId,
                        'ssl_card_number' => $cardNumber,
                        'ssl_exp_date' => $expirationDate,
                        'ssl_cvv2cvc2' => $cvv,
                        'vita_name_on_card' => $nameOnCard
                    )
                );
            }

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
            $result['outcome'] = "SUCCESS";
        }

        return $this->json($result); //
        //return $this->json($response); //
    }


    /**
     * @Route("/ccsale")
     */
    public function makeSaleAction(Request $request)
    {

        //---GET ALL REQUEST VARIABLES
        $customerId = $request->request->get('customerId');
        $requestId = $request->request->get('requestId');
        $existingCC = $request->request->get('existingCC');
        $cc = $request->request->get('cc');
        $cardNumber = $request->request->get('cardNumber');
        $cvv = $request->request->get('cvv');
        $expirationDate = $request->request->get('expirationDate');
        $nameOnCard = $request->request->get('nameOnCard');

        //---------- service info---------------
        $repository = $this->getDoctrine()->getRepository('AppBundle:Requests');
        $request = $repository->find($requestId);
        //$house = $request->getHouse();
        //$subscription = $house->getSubscriptions()[0];
        //$payment = $subscription->getPayments()[0];

        $requestService = $request->getRequestServices()[0];
        $serviceName = $requestService->getService()->getServicename();


        //--------end :: service info-----------



        $response = array();

        $repository = $this->getDoctrine()->getRepository('AppBundle:Customers');
        $customer = $repository->find($customerId);

        $result = array();
		$result['transType'] = 'Sale';
		
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
            //$countryISO = $this->getIso3FromCountry($country);

            $invoiceNumber = $this->getNextInvoiceNumber($customer->getCountry());
            $amount = $request->getAmount();
            $tax = ($country=='USA' || $country=='CAN')? $request->getTax() : 0.00;
            $totalAmount = $amount + $tax;
            $transDescription = 'Payment for  : ' . $serviceName;

            //$converge = new ConvergeApi( '007128','webpage','TXM3J2',false); // demo api
            $converge = new ConvergeApi( '789406','apiuser','TZLKOM08UH3DB7AI3RP636NSVP9R7Y1NVWYMX1A9Y7LO506EZQJ18GFOOVCVK1VP',true);
            //$totalAmount = 1.00;
            //$tax = 0.00;

            if($existingCC=='1')
            {

            }
            else
            {
                $response = $converge->ccsale(
                    array(
                        'ssl_amount' => $totalAmount,
                        'ssl_salestax' => $tax,
                        //'ssl_transaction_currency' => 'USD',
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
                        'ssl_card_present' => 'Y',
                        'vita_name_on_card' => $nameOnCard,
                        'ssl_invoice_number' => $invoiceNumber,
                        'ssl_customer_code'=> $customerId,
                        'ssl_description' => $transDescription
                    )
                );

                // Display Converge API response
                //print('ConvergeApi->ccaddrecurring Response:' . "\n\n");
                //print_r($response);

                if(array_key_exists("errorCode",$response)) // Transaction failed
                {
                    $result['errorCode'] = $response['errorCode'];
                    $result['errorName'] = $this->getTransactionErrorName($response['errorName']);
                    $result['outcome'] = "FAILURE";
                }
                else
                {
                    $result['errorCode'] = 0;
                    $request->setInvoicetype("INVOICE");

                    $em = $this->getDoctrine()->getManager();
                    $em->flush();

                    $dateNow = new \DateTime('now');


                    //-- ADD PAYMENT INFO
                    $payment = new Payments();
                    $payment->setPaymentdate($dateNow);
                    $payment->setAmount($amount);
                    $payment->setTax($tax);
                    $payment->setDescription($transDescription);
                    $payment->setInvoicenumber($invoiceNumber);
                    $payment->setCc($response['ssl_card_number']);
                    $payment->setTransactionid($response['ssl_txn_id']);
                    $payment->setRequest($request);

                    $em = $this->getDoctrine()->getManager();
                    $em->persist($payment);
                    $em->flush();

                    //-- END :: PAYMENT INFO

                    $result['errorName'] = '';
                    $result['outcome'] = "SUCCESS";
                }
            }

        }
        else
        {
            $result['outcome'] = 'FAILURE';
            $result['errorCode'] = '-1';
            $result['errorName'] = 'CUSTOMER_INVALID';
        }
        //--END : IF CUSTOMER

        return $this->json($result); //
    }


    private function getTransactionErrorName($convergeErrorName)
    {
        $errorList = array(
            'Exp Date Invalid'=>'EXP_DATE_INVALID',
            'Credit Card Number Invalid'=>'CC_NUMBER_INVALID',
            'Not Permitted'=> 'NOT_PERMITTED'
        );

        $error = array_key_exists($convergeErrorName,$errorList)? $errorList[$convergeErrorName] : $convergeErrorName;

        return $error;
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

        $substr = "GP-INV-" . $country->getCountryid() . "-";
        $query = $em->createQuery( 'SELECT Max(p.invoicenumber) AS invNumber FROM AppBundle:Payments p WHERE p.invoicenumber LIKE :inv' );
        $query->setParameter('inv', '%' . $substr . '%');
        $invoiceNumber = $query->getSingleResult();
        $maxInvoiceNumber = $invoiceNumber['invNumber'];
        if($maxInvoiceNumber)
        {
            $split = explode('-',$maxInvoiceNumber);
            $number = (int) $split[3];
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