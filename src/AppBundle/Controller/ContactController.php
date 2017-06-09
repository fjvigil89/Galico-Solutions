<?php
/**
 * Created by PhpStorm.
 * User: ANTONIO
 * Date: 2017-05-23
 * Time: 21:22
 */

namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Translation\Translator;
use Symfony\Component\Translation\Loader\ArrayLoader;
use Symfony\Component\HttpFoundation\Request;



class ContactController extends Controller
{
    /**
     * @Route("/send-email", name="sendEmail")
     */
    public function SendEmailAction(Request $request)
    {
        $cname = $request->query->get('cname');
        $phone = $request->query->get('phone');
        $email = $request->query->get('email');
        $msg = $request->query->get('message');

        $content = "FROM : $cname\n\n";
        $content .= "EMAIL : $email\n\n";
        $content .= "PHONE : $phone\n\n";
        $content .= "$msg";
        $sendStatus = -1;
        $response = array();

    # Setup the message
    $message = \Swift_Message::newInstance()
        ->setSubject("Contact - From General Pro's website")
        ->setFrom($email)
        ->setTo('jrhodelyr@gmail.com')
        ->setBody( $content );

    # Send the message
    $this->get('mailer')
        ->send($message);


        $sendStatus = 1;
        $response['sendStatus'] = $sendStatus;
        return $this->json($response);
    }
}
