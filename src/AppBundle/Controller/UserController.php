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

use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;




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
     * @Route("/customer-information/{customerId}")
     */
    public function getCustomerInformationAction($customerId)
    {
        $userId = $this->get('session')->get('userId');
        $customer = "";
        /*if(!$userId || $customerId!=$userId){}

        else*/
        {
            $repository = $this->getDoctrine()->getRepository('AppBundle:Customers');
            $customer = $repository->find($customerId);
        }

        $cust = array();
        $cust['customerId'] = $customer->getCustomerid();
        $cust['firstName'] = $customer->getFirstname();
        $cust['lastName'] = $customer->getLastname();
        $cust['email'] = $customer->getEmail();
        $cust['phonePrimary'] = $customer->getPhoneprimary();
        $cust['phoneAlternate'] = $customer->getPhonealternate();
        $cust['country'] = $customer->getCountry();
        $cust['state'] = $customer->getState();
        $cust['city'] = $customer->getCity();
        $cust['address'] = $customer->getAddress();
        $cust['zipCode'] = $customer->getZipcode();

        /*$encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());

        $serializer = new Serializer($normalizers, $encoders);
        $jsonContent = $serializer->serialize($cust, 'json');*/

// $jsonContent contains {"name":"foo","age":99,"sportsman":false}

        //echo $jsonContent; // or re
        return $this->json($cust);
    }


    /**
     * @Route("/create-customer", name="createCustomer")
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
        return $this->redirectToRoute("app_user_showmydashboard",['customerId' => $customer->getCustomerid()]);

    }

    /**
     * @Route("/update-customer", name="updateCustomer")
     */
    public function updateCustomerAction(Request $request)
    {
        $postData = $request->request->get('contact');
        //$request->request->get('data'); // for post
        //$request->query->get('data'); // for get
        $data = $request->request->all();
        var_dump($data);
        $customerId = $request->request->get('customerId'); //$data['firstName'];
        $firstName = $request->request->get('firstName'); //$data['firstName'];
        $lastName = $request->request->get('lastName');//$data['lastName'];
        $email = $request->request->get('email');//$data['email'];
        $phonePrimary = $request->request->get('phonePrimary');//$data['phonePrimary'];
        $phoneAlternate = $request->request->get('phoneAlternate');//$data['phoneAlternate'];
        $country = $request->request->get('country');//$data['country'];
        $state = $request->request->get('state');//$data['state'];
        $city = $request->request->get('city');//$data['city'];
        $address = $request->request->get('address');//$data['address'];
        $zipCode = $request->request->get('zipCode');//$data['zipCode'];

        //die($customerId);
        return $this->json(array('updateStatus' => "ok : " . $request->query->get('email')));
        $updateStatus = -1;
        $repository = $this->getDoctrine()->getRepository('AppBundle:Customers');
        $customer = $repository->find($customerId);

        if($customer)
        {
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
            $em->flush();
            $updateStatus = 1;
        }

        return $this->json(array('updateStatus' => $updateStatus));

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