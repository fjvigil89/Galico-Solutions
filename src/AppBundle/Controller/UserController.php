<?php
/**
 * Created by PhpStorm.
 * User: ANTONIO
 * Date: 2017-05-02
 * Time: 20:13
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Customers;
use AppBundle\Entity\Houses;
use AppBundle\Entity\Subscriptions;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

use Symfony\Component\Routing\Generator\UrlGeneratorInterface;




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
        /*$customer = $repository->findOneBy(
            array('email' => $email, 'password' => $pwd)
        );*/
        $customer = $repository->findOneByEmail($email);

        $userId = -1;
        if($customer)
        {
            $encoder = $this->container->get('security.password_encoder');
            $isValid = $encoder->isPasswordValid($customer, $pwd);
            if($isValid)
            {
                $userId = $customer->getCustomerid();
                $this->get('session')->set('userId', $userId);
            }
        }

        return $this->json(array('userId' => $userId));
    }
	
	/**
     * @Route("/reset-password-requested",name="resetPasswordRequested")
     */
    public function resetPasswordRequestedAction(Request $request)
    {
        $msg = "The password could not be reset. Please try again.";
		$email = $request->query->get('email');
        $customerId = $request->query->get('code');
		$repository = $this->getDoctrine()->getRepository('AppBundle:Customers');
        
		//die($email);
        $customer = $repository->find($customerId);
		
		if($customer)
		{
			$randomPwd = $this->getRandomPassword();
			$encoder = $this->container->get('security.password_encoder');
            $password = $encoder->encodePassword($customer, $randomPwd);
			$customer->setPassword($password);
			
			$em = $this->getDoctrine()->getManager();
            $em->flush();
			
			$fullname = $customer->getFirstname() . " " . $customer->getLastname();
			$content = "Dear $fullname, \n\n\n";
			$content .= "Your temporary password is : $randomPwd\n\n";
			$content .= "Please make sure you change it the next time you log into your account.\n\n";
			$content .= "Thanks,\n\n\n";
			$content .= "GENERAL PRO";
			$sendStatus = -1;
			//$response = array();

			# Setup the message
			$message = \Swift_Message::newInstance()
			->setSubject("Password reset")
			->setFrom("do-not-reply@general-pro.com")
			->setTo($email)
			->setBody( $content );

			# Send the message
			$this->get('mailer')
			->send($message);
			
			
			$msg = "A temporary password has been sent to your email";
			$sendStatus = 1;
			
		}
        
		//echo($msg);

        //return $this->json(array('actionStatus' => $sendStatus));
        return $this->json($msg);
    }
	
	/**
     * @Route("/reset-password")
     */
    public function resetPasswordAction(Request $request)
    {
        $email = $request->query->get('email');
        
        $repository = $this->getDoctrine()->getRepository('AppBundle:Customers');
        
        $customer = $repository->findOneByEmail($email);

        $actionStatus = -1;
        if($customer)
        {
            $requestId = $this->getRandomPassword();
			$requestId .= $this->getRandomPassword();
			$requestId .= $this->getRandomPassword();
			
			$fullname = $customer->getFirstname() . " " . $customer->getLastname();
			
			$url = $this->generateUrl('resetPasswordRequested', array('email'=>$email,'code'=>$customer->getCustomerid(),'requestId'=>$requestId), UrlGeneratorInterface::ABSOLUTE_URL);
			
			$content = "Dear $fullname, \n\n\n";
			$content .= "Please follow the link below to reset your password\n\n";
			$content .= "$url\n\n";
			$content .= "If you didn’t ask to reset your password, you can ignore this email.\n\n";
			$content .= "Thanks,\n\n\n";
			$content .= "GENERAL PRO";
			$sendStatus = -1;
			//$response = array();

			# Setup the message
			$message = \Swift_Message::newInstance()
			->setSubject("Password reset")
			->setFrom("do-not-reply@general-pro.com")
			->setTo($email)
			->setBody( $content );

			# Send the message
			$this->get('mailer')
			->send($message);
			
			 $actionStatus = 1;
			//END
			
        }

        return $this->json(array('actionStatus' => $actionStatus));
    }
	
	private function getRandomPassword()
	{
		$alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
		$pass = array(); //remember to declare $pass as an array
		$alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
		for ($i = 0; $i < 12; $i++) {
			$n = rand(0, $alphaLength);
			$pass[] = $alphabet[$n];
		}
		return implode($pass); //turn the array into a string
	}


    /**
     * @Route("/logout")
     */
    public function signOutAction(Request $request)
    {
        $this->get('session')->remove('userId');
        $this->get('session')->invalidate();
        $this->get('session')->clear();

        return $this->redirectToRoute('home');
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

        $repository = $this->getDoctrine()->getRepository('AppBundle:Plans');
        $plans = $repository->findAll();

        $repository = $this->getDoctrine()->getRepository('AppBundle:Countries');
        $countries = $repository->findAll();

        if(!$customer)
        {
            return $this->redirectToRoute('app_pagenavigation_showsignin');
        }

        return $this->render('website/my-dashboard.html.twig', array('customer'=>$customer,'plans'=>$plans,'countries'=>$countries));
    }


    /**
     * @Route("/customer-information/{customerId}",name="customerInformation")
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
     * @param Request $request
     * @param UserPasswordEncoderInterface $passwordEncoder
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
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

        $encoder = $this->container->get('security.password_encoder');
        $password = $encoder->encodePassword($customer, $customer->getPassword());
        $customer->setPassword($password);

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
        //$postData = $request->request->get('contact');
        //$request->request->get('data'); // for post
        //$request->query->get('data'); // for get
        //$data = $request->request->all();
        //var_dump($data);
       $customerId = $request->query->get('customerId'); //$data['firstName'];
        $firstName = $request->query->get('firstName'); //$data['firstName'];
        $lastName = $request->query->get('lastName');//$data['lastName'];
        $email = $request->query->get('email');//$data['email'];
        $phonePrimary = $request->query->get('phonePrimary');//$data['phonePrimary'];
        $phoneAlternate = $request->query->get('phoneAlternate');//$data['phoneAlternate'];
        $country = $request->query->get('country');//$data['country'];
        $state = $request->query->get('state');//$data['state'];
        $city = $request->query->get('city');//$data['city'];
        $address = $request->query->get('address');//$data['address'];
        $zipCode = $request->query->get('zipCode');//$data['zipCode'];

        //return $this->json(array('updateStatus' => "customer id : " . $request->query->get('email')));
        $updateStatus = -1;
        $response = array();
        $repository = $this->getDoctrine()->getRepository('AppBundle:Customers');
        $customer = $repository->find($customerId);

        if($customer)
        {
            $customer->setFirstname($firstName);
            $customer->setLastname($lastName);
            $customer->setEmail($email);
            //$customer->setPassword($pwd);
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

            $response['customerId'] = $customer->getCustomerid();
            $response['firstName'] = $customer->getFirstname();
            $response['lastName'] = $customer->getLastname();
            $response['email'] = $customer->getEmail();
            $response['phonePrimary'] = $customer->getPhoneprimary();
            $response['phoneAlternate'] = $customer->getPhonealternate();
            $response['country'] = $customer->getCountry();
            $response['state'] = $customer->getState();
            $response['city'] = $customer->getCity();
            $response['address'] = $customer->getAddress();
            $response['zipCode'] = $customer->getZipcode();

        }
        $response['updateStatus'] = $updateStatus;

        return $this->json($response);

    }

    /**
     * @Route("/update-password", name="updatePassword")
     */
    public function updatePasswordAction(Request $request)
    {
        $customerId = $request->query->get('customerId');
        $oldPassword = $request->query->get('oldPassword');
        $newPassword = $request->query->get('newPassword');
        $cNewPassword = $request->query->get('cNewPassword');

        $updateStatus = -1;
        $response = array();

        if($newPassword==$cNewPassword)
        {
            $repository = $this->getDoctrine()->getRepository('AppBundle:Customers');
            $customer = $repository->find($customerId);

            if($customer)
            {
                $encoder = $this->container->get('security.password_encoder');
                $isValid = $encoder->isPasswordValid($customer, $oldPassword);

                if($isValid)
                {
                    $customer->setPassword($newPassword);
                    $encoder = $this->container->get('security.password_encoder');
                    $password = $encoder->encodePassword($customer, $newPassword);
                    $customer->setPassword($password);


                    $em = $this->getDoctrine()->getManager();
                    $em->flush();
                    $updateStatus = 1;
                }
                else
                {
                    $updateStatus = -2; //old password incorrect
                }

            }
        }



        $response['updateStatus'] = $updateStatus;

        return $this->json($response);

    }

    /**
     * @Route("/houses-informations/{customerId}")
     */
    public function getHousesAction($customerId)
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Customers');
        $customer = $repository->find($customerId);

        $repository = $this->getDoctrine()->getRepository('AppBundle:Houses');
        $houses = $repository->findByCustomer($customer);

        $customerHouses = array();
        foreach($houses as $house)
        {
            $subscriptions = $house->getSubscriptions();
            $index = count($subscriptions)-1;

            $hs = array();
            $hs['id'] =$house->getHouseid();
            $hs['plan'] = $subscriptions[$index]->getPlan()->getPlanname();
            $hs['subscriptionDate'] = date_format($subscriptions[$index]->getSubscriptiondate(), 'Y-m-d');
            //$hs['dueDate'] = $this->getDueDate($hs['subscriptionDate']);
            //$hs['contact'] = $house->getFirstname() . " " . $house->getLastname();
            $hs['phonePrimary'] = $house->getPhoneprimary();
            $hs['phoneAlternate'] = $house->getPhonealternate();
            $hs['country'] = $house->getCountry();
            $hs['state'] = $house->getState();
            $hs['city'] = $house->getCity();
            $hs['address'] = $house->getAddress();
            $hs['contactFullName'] = $house->getFirstname() . " " . $house->getLastname();
            $hs['agentNumber'] = $this->getLocalAgentNumber($hs['country'],$hs['city']);

            $customerHouses[] = $hs;

        }
        return $this->json($customerHouses);
    }

    private function getDueDate($subscriptionDate)
    {

    }

    private function getLocalAgentNumber($country,$city)
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Countries');
        $country = $repository->findOneByCountry("$country");
        $localNumbers = $country->getLocalNumbers();


        $phoneNumber = "";
        foreach ($localNumbers as $localNumber)
        {
            //echo strtoupper($localNumber->getCity()) . "  " . strtoupper($city) . "\n";
            if(strtoupper($localNumber->getCity())==strtoupper($city))
            {
                $phoneNumber = $localNumber->getPhone();
                break;
            }
        }

        return $phoneNumber;
    }

    /**
 * @Route("/payments-history/{houseId}")
 */
    public function getPaymentsHistoryAction($houseId)
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Houses');
        $house = $repository->find($houseId);

        $repository = $this->getDoctrine()->getRepository('AppBundle:Subscriptions');
        $subscriptions = $repository->findByHouse($house);

        $housePayments = array();
        foreach($subscriptions as $subscription)
        {
            $sub = array();

            $sub['subscriptionDate'] = date_format($subscription->getSubscriptiondate(), 'Y-m-d');
            $sub['plan'] = $subscription->getPlan()->getPlanname();
            //$sub['title']
            $paymnt = array();
            foreach($subscription->getPayments() as $payment)
            {
                $pay = array();
                $pay['paymentDate'] = date_format($payment->getPaymentdate(), 'Y-m-d');
                $pay['amount'] = $payment->getAmount();
                $paymnt[] = $pay;
            }
            $sub['payments'] = $paymnt;

            $housePayments[] = $sub;

        }
        return $this->json($housePayments);
    }

    /**
     * @Route("/house-requests/{houseId}")
     */
    public function getHouseRequestsAction($houseId)
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Houses');
        $house = $repository->find($houseId);

        $repository = $this->getDoctrine()->getRepository('AppBundle:Requests');
        $requests = $repository->findByHouse($house);

        $houseRequests = array();
        foreach($requests as $request)
        {
            $req = array();

            $reqService = $request->getRequestServices();
            $req['requestDate'] = date_format($request->getRequestdate(), 'Y-m-d');
            $req['status'] = $request->getStatus();
            $req['requestId'] = $request->getRequestid();
            $req['details'] = $request->getDetails();
            $req['service'] = count($reqService)>0? $reqService[0]->getService()->getServicename() : "";
            $interventions = array();
            foreach($request->getInterventions() as $intervention)
            {
                $interv = array();
                $interv['interventionDate'] = date_format($intervention->getInterventiondate(), 'Y-m-d');
                $interv['technician'] = $intervention->getTechnician()->getFirstname() . " " . $intervention->getTechnician()->getLastname();
                $interv['comments'] = $intervention->getComments();

                $interventions[] = $interv;
            }
            $req['interventions'] = $interventions;

            $houseRequests[] = $req;

        }
        return $this->json($houseRequests);
    }

    /**
     * @Route("/subscribe-house", name="subscribeHouse")
     */
    public function subscribeHouseAction(Request $request)
    {

        $customerId = $request->query->get('customerId');
        $planId = $request->query->get('planId');
        $firstName = $request->query->get('firstName');
        $lastName = $request->query->get('lastName');
        $phonePrimary = $request->query->get('phonePrimary');
        $phoneAlternate = $request->query->get('phoneAlternate');
        $country = $request->query->get('country');
        $state = $request->query->get('state');
        $city = $request->query->get('city');
        $address = $request->query->get('address');
        $zipCode = $request->query->get('zipCode');

        $subscriptionStatus = -1;
        $response = array();
        $repository = $this->getDoctrine()->getRepository('AppBundle:Customers');
        $customer = $repository->find($customerId);

        if($customer)
        {
            $house = new Houses();
            $house->setFirstname($firstName);
            $house->setLastname($lastName);
            $house->setPhoneprimary($phonePrimary);
            $house->setPhonealternate($phoneAlternate);
            $house->setCountry($country);
            $house->setState($state);
            $house->setCity($city);
            $house->setAddress($address);
            $house->setZipcode($zipCode);
            $house->setCustomer($customer);

            $em = $this->getDoctrine()->getManager();
            $em->persist($house);
            $em->flush();

            $repository = $this->getDoctrine()->getRepository('AppBundle:Plans');
            $plan = $repository->find($planId);

            //$today = date("Y-m-d");//(new \DateTime())->format('Y-m-d');
            $subscription = new Subscriptions();
            $subscription->setHouse($house);
            $subscription->setPlan($plan);
            $subscription->setSubscriptiondate(new \DateTime('now'));

            $em = $this->getDoctrine()->getManager();
            $em->persist($subscription);
            $em->flush();

            $subscriptionStatus = 1;
            $response['agentNumber'] = $this->getLocalAgentNumber($country,$city);
            $response['houseId'] = $house->getHouseid();
            $response['subscriptionDate'] = date_format($subscription->getSubscriptiondate(), 'Y-m-d');;
            $response['plan'] = $plan->getPlanname();

        }
        $response['subscriptionStatus'] = $subscriptionStatus;

        return $this->json($response);

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