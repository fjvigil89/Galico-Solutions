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
        $tax = 0.0;

        $repository = $this->getDoctrine()->getRepository('AppBundle:Customers');
        $customer = $repository->find($customerId);
        if($customer)
        {
            $firstName = $customer->getFirstname();
            $lastName = $customer->getLastname();
            $phonePrimary = $customer->getPhoneprimary();
            $country = $customer->getCountry();
            $email = $customer->getEmail();
            $state = $customer->getState();
            $city = $customer->getCity();
            $address =$customer->getAddress();
            $zipcode =$customer->getZipcode();


        }



        $converge = new ConvergeApi( '007128',
            'webpage',
            'CL7NIF',
            false);
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
                'ssl_state' => $state,//'QC',
                'ssl_country' => $country,
                'ssl_email' => $email,
                'ssl_phone' => $phonePrimary,
                'ssl_first_name' => $firstName,
                'ssl_last_name' =>  $lastName,
                'ssl_cardholder_ip' => '213.14.25.65',
                'ssl_next_payment_date' => '07/08/2017',
                'ssl_billing_cycle' => 'MONTHLY',
                'vita_name_on_card' => $nameOnCard,
                'ssl_invoice_number' => 'INV-0012',
                'ssl_customer_code'=> 'CU-2201 ',
            )
        );
// Display Converge API response
        //print('ConvergeApi->ccaddrecurring Response:' . "\n\n");
        //print_r($response);

        return $this->json(array('response' => $response,'cardNumber'=>$cardNumber ));
    }
}
