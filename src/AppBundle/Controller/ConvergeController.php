<?php

namespace AppBundle\Controller;

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
        $houseCountry = $request->request->get('country');
        $houseState = $request->request->get('state');
        $houseCity = $request->request->get('city');
        $houseAddress = $request->request->get('address');
        $houseZipCode = $request->request->get('zipCode');

        $cFirstName = $request->request->get('firstName');
        $cLastName = $request->request->get('lastName');
        $cPhonePrimary = $request->request->get('phonePrimary');
        $cPhoneAlternate = $request->request->get('phoneAlternate');


        $tax = $this->getTaxPercentage($houseCountry) * $amount;

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

            $invoiceNumber = $this->getNextInvoiceNumber();

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
                    'ssl_invoice_number' => 'INV-0012',
                    'ssl_customer_code'=> $customerId,
                )
            );


        }



// Display Converge API response
        //print('ConvergeApi->ccaddrecurring Response:' . "\n\n");
        //print_r($response);

        return $this->json(array('response' => $response,'cardNumber'=>$cardNumber )); //
    }

    private function getIso3FromCountry($countryName)
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Countries');
        $country = $repository->findOneByCountry("$countryName");
        return $country->getCountryiso3();
    }

    private function getNextInvoiceNumber($countryName)
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Countries');
        $country = $repository->findOneByCountry("$countryName");

        $em = $this->getDoctrine()->getManager();
        $qb = $em->createQueryBuilder();

        $qb->select('p')
            ->from('Payments', 'p')
            ->where('p.InvoiceNumber LIKE :identifier')
            ->orderBy('p.InvoiceNumber', 'ASC')
            ->setParameter('identifier', 'INV-'.$country->getCountryid());
    }

    private function getTaxPercentage($countryName)
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Countries');
        $country = $repository->findOneByCountry("$countryName");

        $repository = $this->getDoctrine()->getRepository('AppBundle:Prices');
        $price = $repository->findOneByCountry($country);

        return $price->getTaxpercentage();
    }
}
