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

class UserController extends Controller
{
    /**
     * @Route("/my-profile")
     */
    public function showMyProfileAction()
    {
        return $this->render('website/my-profile.html.twig');
    }

    /**
     * @Route("/my-dashboard")
     */
    public function showMyDashboardAction(Request $request)
    {
        $data = $request->request->all();
        $email = $data['email'];
        $pwd = $data['pwd'];

        $repository = $this->getDoctrine()->getRepository('AppBundle:Customers');

        // query for a single product matching the given name and price
        $customer = $repository->findOneBy(
            array('email' => $email, 'password' => $pwd)
        );


        if (!$customer) {
            $error =  "Login failed : email or password is invalid";
            return $this->redirectToRoute('app_pagenavigation_showsignin',array('error' => $error));
        }

        return $this->render('website/my-dashboard.html.twig');
    }


    /**
     * @Route("/create-customer")
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

        return $this->redirectToRoute("app_user_showmydashboard");

    }

    /**
     * @Route("/client-resume")
     */
    public function showMyAcountAction()
    {
        return $this->render('website/client-resume.html.twig');
    }
}