<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Customers;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
class EmailController extends Controller
{
    /**
 * @Route("/send-register-email/{customerId}",name="sendRegisterEmail")
 */
    public function sendRegisterThankYouEmail($customerId)
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Customers');
        $customer = $repository->find($customerId);
        $fullname = $customer->getFirstname() . " " . $customer->getLastname();

        # Setup the message
        $message = \Swift_Message::newInstance()
            ->setSubject("Thank you for choosing General Pro")
            ->setFrom('info@general-pro.com',"General Pro")
            ->setTo($customer->getEmail())
            ->setBody(
                $this->renderView('website/template-thank-you.html.twig',array("customerFullname"=>$fullname)),
                'text/html'

            );

        # Send the message
        $this->get('mailer')
            ->send($message);
        //var_dump($customer->getEmail()); die("");

        return $this->redirectToRoute("app_user_showmydashboard",['customerId' => $customer->getCustomerid()]);
    }

    /**
     * @Route("/view-register-email/{customerId}")
     */
    public function viewRegisterThankYouEmail($customerId)
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Customers');
        $customer = $repository->find($customerId);
        $fullname = $customer->getFirstname() . " " . $customer->getLastname();

        return $this->render('website/template-thank-you.html.twig',array("customerFullname"=>$fullname));
    }
}
