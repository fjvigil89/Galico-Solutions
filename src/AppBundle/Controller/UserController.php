<?php
/**
 * Created by PhpStorm.
 * User: ANTONIO
 * Date: 2017-05-02
 * Time: 20:13
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Customers;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

$session = new Session();
class UserController extends Controller
{



    /**
     * @Route("/authenticate")
     */
    public function authenticateAction(Request $request)
    {
        $email = $request->query->get('email');
        $pwd = $request->query->get('pwd');

        $repository = $this->getDoctrine()->getRepository('AppBundle:Customers');

        $customer = $repository->findOneBy(
            array('email' => $email, 'password' => $pwd)
        );
        $userId = -1;
        if($customer)
        {
            $userId = $customer->getCustomerid();

            $this->get('session')->set('userId', $userId);
        }
        /*
        if (!$customer) {
            //$error =  "Login failed : email or password is invalid";
            //return $this->redirectToRoute('app_pagenavigation_showsignin',array('error' => $error));
        }
        */

        return $this->json(array('userId' => $userId));
    }

    /**
     * @Route("/my-dashboard/{customerId}")
     */
    public function showMyDashboardAction($customerId)
    {
       $userId = $this->get('session')->get('userId');
       if(!$userId || $customerId!=$userId)
       {
           return $this->redirectToRoute('app_pagenavigation_showsignin');
       }

        $repository = $this->getDoctrine()->getRepository('AppBundle:Customers');
        $customer = $repository->find($customerId);

        if(!$customer)
        {
            return $this->redirectToRoute('app_pagenavigation_showsignin');
        }


        return $this->render('website/my-dashboard.html.twig', array('customer'=>$customer));
    }


    /**
     * @Route("/create-customer", name="createCustomer")
     * @param Request $request
     */
    public function createCustomerAction(Request $request)
    {
        $data = $request->request->all();
        //var_dump($data); die("");
        $firstName = $data['firstName'];
        $lastName = $data['lastName'];
        $email = $data['email'];
        $pwd = $data['pwd'];
        $cPwd = $data['cPwd'];
        $phonePrimary = $data['phonePrimary'];
        $phoneAlternate = $data['phoneAlternate'];
        $country = $data['country'];
        $state = $data['state'];
        $city = $data['city'];
        $address = $data['address'];
        $zipCode = $data['zipCode'];

        $customer = new Customers();
        $customer->setFirstname($firstName);
        $customer->setLastname($lastName);
        $customer->setEmail($email);
        $customer->setPassword($pwd);
        $customer->setPhoneprimary($phonePrimary);
        $customer->setPhonealternate($phoneAlternate);
        $customer->setCountry($country);
        $customer->setState($state);
        $customer->setCity($city);
        $customer->setAddress($address);
        $customer->setZipcode($zipCode);

        $em = $this->getDoctrine()->getManager();
        $em->persist($customer);
        $em->flush();

        $this->get('session')->set('userId', $customer->getCustomerid());
        return $this->redirectToRoute("app_user_showmydashboard/".$customer->getCustomerid());

    }

    /**
     * @Route("/client-resume")
     */
    public function showMyAcountAction()
    {
        return $this->render('website/client-resume.html.twig');
    }

    /**
     * @Route("/administrator")
     */
    public function showAdministratorAction()
    {
        return $this->render('website/administator.html.twig');
    }

}