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
     * @Route("/sendEmail", name="send_email")
     */
    public function SendEmailAction(Request $request)
    {
        $cname = $request->query->get('cname');
        $phone = $request->query->get('phone');
        $email = $request->query->get('email');
        $message = $request->query->get('message');



        $messagesend = \Swift_Message::newInstance()
            ->setSubject('contact us - From GP')
            ->setFrom("$email")
            ->setTo('antofuchong@gmail.com')
            ->setBody('message');

        $this->get('mailer')->send($message);




        return $this->render('website/plans.html.twig');
    }
}
