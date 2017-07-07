<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Controller\ConvergeApi;


class ConvergeController extends Controller
{
    /**
     * @Route("/ccaddrecurring")
     */
    public function addRecurringAction(Request $request)
    {
        //---GET ALL REQUEST VARIABLES
        $amount = $request->request->get('amount');
        $cardNumber = $request->request->get('cardNumber');
        $cvv = $request->request->get('cvv');
        $expirationDate = $request->request->get('expirationDate');

        //-- END


        $converge = new ConvergeApi( '007128',
            'webpage',
            'CL7NIF',
            false);
        // Submit a recurring payment
        $response = $converge->ccaddrecurring(
            array(
                'ssl_amount' => $amount,
                'ssl_card_number' => $cardNumber,
                'ssl_cvv2cvc2' => $cvv,
                'ssl_exp_date' => $expirationDate,
                'ssl_avs_address' => '1759 Henri Bourassa E.',//$signup['data']['cc_address1'] . isset($signup['data']['cc_address1']) ? $signup['data']['cc_address1'] : '',
                'ssl_avs_zip' => 'H2C 1J6',//$signup['data']['cc_postal_code'],
                'ssl_city' => 'Montreal',//$signup['data']['city'],
                'ssl_state' => 'QC',//$signup['data']['state'],
                'ssl_country' => 'CAN',//$signup['data']['country'],
                'ssl_email' => 'jrhodelyr@gmail.com',//$signup['data']['email'],
                'ssl_phone' => '5147894512',//$signup['data']['phone'],
                'ssl_first_name' => 'Antonio',//$signup['data']['cc_firstname'],
                'ssl_last_name' => 'FU',//$signup['data']['cc_lastname'],
                'ssl_cardholder_ip' => '213.14.25.65',//$signup['data']['ip_address'],
                'ssl_next_payment_date' => '07/08/2017', //$profile_start_date,
                'ssl_billing_cycle' => 'MONTHLY',
                'vita_name_on_card' => 'Antonio FU'
            )
        );
// Display Converge API response
        //print('ConvergeApi->ccaddrecurring Response:' . "\n\n");
        //print_r($response);

        return $this->json(array('response' => $response,'cardNumber'=>$cardNumber ));
    }
}
