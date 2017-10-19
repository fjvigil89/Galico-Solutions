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
        $imageName = $this->getRandomImage();

        # Setup the message
        $message = \Swift_Message::newInstance()
            ->setSubject("Thank you for choosing General Pro")
            ->setFrom('info@general-pro.com', "General Pro")
            ->setTo($customer->getEmail())
            ->setBody(
                $this->renderView('website/template-thank-you.html.twig', array("customerFullname" => $fullname, "image" => $imageName)),
                'text/html'

            );

        # Send the message
        $this->get('mailer')
            ->send($message);
        //var_dump($customer->getEmail()); die("");

        return $this->redirectToRoute("rte_houses", ['customerId' => $customer->getCustomerid()]);
    }

    /**
     * @Route("/view-register-email/{customerId}")
     */
    public function viewRegisterThankYouEmail($customerId)
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Customers');
        $customer = $repository->find($customerId);
        $fullname = $customer->getFirstname() . " " . $customer->getLastname();
        $images = array("services-01", "services-04", "services-05", "services-11", "services-022");
        $index = rand(0, 4);
        $imageName = $images[$index];

        return $this->render('website/template-thank-you.html.twig', array("customerFullname" => $fullname, "image" => $imageName));
    }

    /**
     * @Route("/xinvoice/{customerId}") //xInvoice must be replaced
     */
    public function viewInvoice($customerId)
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Customers');
        $customer = $repository->find($customerId);
        $fullname = $customer->getFirstname() . " " . $customer->getLastname();
        $address = $customer->getAddress();
        $telephone = $customer->getPhoneprimary();
        $email = $customer->getEmail();

        return $this->render('website/template-invoice.html.twig', array("customerFullname" => $fullname, "address" => $address, "telephone" => $telephone, "email" => $email));
    }

    /**
     * @Route("/subscription/{customerId}")
     */
    public function viewSubscription($customerId)
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Customers');
        $customer = $repository->find($customerId);
        $fullname = $customer->getFirstname() . " " . $customer->getLastname();
        $address = $customer->getAddress();
        $telephone = $customer->getPhoneprimary();
        $email = $customer->getEmail();

        return $this->render('website/template-subscription.html.twig', array("customerFullname" => $fullname, "address" => $address, "telephone" => $telephone, "email" => $email));
    }


    public function sendEmail($from, $fromName, $to, $subject, $body, $image)
    {
        # Setup the message
        $message = \Swift_Message::newInstance()
            ->setSubject("$subject")
            ->setFrom("$from", "$fromName")
            ->setTo($to)
            ->setBody(
                $this->renderView('website/template-email.html.twig', array("messageBody" => $body, "image" => $image)),
                'text/html'

            );

        # Send the message
        $this->get('mailer')
            ->send($message);
    }

    public function getRandomImage()
    {
        $images = array("services-01","services-04","services-05","services-11","services-022");
        $index = rand(0,4);
        return $images[$index];
    }

}
