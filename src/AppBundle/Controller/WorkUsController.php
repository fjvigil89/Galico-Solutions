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



class WorkUsController extends Controller
{

    private function getRandomImage()
    {
        $images = array("services-01","services-04","services-05","services-11","services-022");
        $index = rand(0,4);
        return $images[$index];
    }
    /**
     * @Route("/sendinfoCareers", name="sendinfoCareers")
     */
    public function sendinfoCareersAction(Request $request)
    {

        $name = $request->request->get('cnamework');
        $phone = $request->request->get('phonework');
        $email = $request->request->get('emailwork');
        $local = $request->request->get('local');
        $service = $request->request->get('servicework');
        $image = $this->getRandomImage();
        $messagedetails= $request->request->get('messagework');
        $cvfile = $request->files->get('cvfile');
        $resourcesFolderPath = $this->get('kernel')->getRootDir() . '/Resources/resumes/';
        $cvfile->move($resourcesFolderPath,$cvfile->getClientOriginalName());

        $cvFileName = $cvfile->getClientOriginalName();

        $body = "\n\n CAREERS\n";
        $body .= "------------------------------\n\n";
        $body .= "DATE  : " . date("Y-m-d H:i:s") . "\n\n";
        $body .= "CUSTOMER : $name \n\n";
        $body .= "CUSTOMER EMAIL  : $email\n\n";
        $body .= "PHONENUMBER  : $phone\n\n";
        $body .= "LOCAL  : $local\n\n";
        $body .= "SERVICE  : $service\n\n";
        $body .= "MESSAGE  : $messagedetails\n\n";


        # Setup the message
        $message = \Swift_Message::newInstance()
            ->setSubject("CV-$service: $name")
            ->setFrom("info@general-pro.com", "INFO GENERAL PRO")
            ->setCc("$email")
            ->setTo("request@general-pro.com")
            ->attach(\Swift_Attachment::fromPath($resourcesFolderPath.$cvFileName))
            ->setBody($this->renderView('website/template-email.html.twig', array("messageBody" => $body, "image" => $image)),
                'text/html'


            );

        # Send the message
        $this->get('mailer')
            ->send($message);




        return $this->render('website/home.html.twig');

    }
}
