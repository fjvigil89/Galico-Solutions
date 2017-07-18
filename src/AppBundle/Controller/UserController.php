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
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Translation\Translator;
use Symfony\Component\Translation\Loader\ArrayLoader;

$session = new Session();


class UserController extends Controller
{



    /**
     * @Route("/authenticate")
     */
    public function authenticateAction(Request $request)
    {
        $email = $request->request->get('email');
        $pwd = $request->request->get('pwd');

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
        //--SET UP TRANSLATION
		$lang = $this->get('session')->get('lang');
		$translator = new Translator($lang);
		$translator->addLoader('array', new ArrayLoader());
		
		$translator->addResource('array', array('Reset_failed' => 'Le mot de passse n\'a pas pu être réinitialisé.Veuillez réessayer.',), 'fr');
		$translator->addResource('array', array('Reset_failed' => 'The password could not be reset. Please try again.',), 'en');
		$translator->addResource('array', array('Reset_failed' => 'La contraseña no puede ser reiniciado. Por favor, inténtelo de nuevo',), 'es');
		$resetFailed = $translator->trans('Reset_failed');
		
		$translator->addResource('array', array('Link_expired' => 'Le lien a expiré. Veuillez faire une autre demande de réinitialisation de mot de passe.',), 'fr');
		$translator->addResource('array', array('Link_expired' => 'The link has expired. Please submit another request.',), 'en');
		$translator->addResource('array', array('Link_expired' => 'El enlace ha caducado. Por favor, haga otra solicitud de restablecimiento de contraseña',), 'es');
		$linkExpired = $translator->trans('Link_expired');
		
		$translator->addResource('array', array('Hi' => 'Bonjour',), 'fr');
		$translator->addResource('array', array('Hi' => 'Hello',), 'en');
		$translator->addResource('array', array('Hi' => 'Hola',), 'es');
		$hi = $translator->trans('Hi');
		
		$translator->addResource('array', array('TemporaryPassword' => 'Votre mot de passe temporaire est',), 'fr');
		$translator->addResource('array', array('TemporaryPassword' => 'Your temporary password is',), 'en');
		$translator->addResource('array', array('TemporaryPassword' => 'Su contraseña temporal es',), 'es');
		$temporaryPassword = $translator->trans('TemporaryPassword');
		
		$translator->addResource('array', array('ChangeRequired' => 'Assurez-vous de le modifier la prochaine fois que vous vous connectez à votre compte',), 'fr');
		$translator->addResource('array', array('ChangeRequired' => 'Please make sure you change it the next time you log into your account',), 'en');
		$translator->addResource('array', array('ChangeRequired' => 'Asegúrese de cambiarla la próxima vez que inicie sesión en su cuenta',), 'es');
		$changeRequired = $translator->trans('ChangeRequired');
		
		$translator->addResource('array', array('ThankYou' => 'Merci',), 'fr');
		$translator->addResource('array', array('ThankYou' => 'Thank you',), 'en');
		$translator->addResource('array', array('ThankYou' => 'Gracias',), 'es');
		$thankYou = $translator->trans('ThankYou');
		
		$translator->addResource('array', array('PasswordSent' => 'Un mot de passe temporaire vous a été envoyé par courriel',), 'fr');
		$translator->addResource('array', array('PasswordSent' => 'A temporary password has been sent to your email',), 'en');
		$translator->addResource('array', array('PasswordSent' => 'Una contraseña temporal se ha enviado a su correo electrónico',), 'es');
		$passwordSent = $translator->trans('PasswordSent');
		
		$translator->addResource('array', array('PasswordReset' => 'Réinitialisation de mot de passe',), 'fr');
		$translator->addResource('array', array('PasswordReset' => 'Password reset',), 'en');
		$translator->addResource('array', array('PasswordReset' => 'restablecimiento de contraseña',), 'es');
		$passwordReset = $translator->trans('PasswordReset');
	
		
		//--END ::
		
		
		$msg = $resetFailed;
		$email = $request->query->get('email');
        $customerId = $request->query->get('code');
        $requestTime = $request->query->get('tstamp');
		$repository = $this->getDoctrine()->getRepository('AppBundle:Customers');
        
		$now = time();
		if($now-$requestTime>3600) //The request link is for an hour
		{
			$msg = $linkExpired;
		}
		else
		{
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
				$content = "$hi $fullname, \n\n\n";
				$content .= "$temporaryPassword : $randomPwd\n\n";
				$content .= "$changeRequired.\n\n";
				$content .= "$thankYou,\n\n\n";
				$content .= "GENERAL PRO";
				$sendStatus = -1;
				//$response = array();

				# Setup the message
				$message = \Swift_Message::newInstance()
				->setSubject($passwordReset)
				->setFrom("do-not-reply@general-pro.com")
				->setTo($email)
				->setBody($content);

				# Send the message
				$this->get('mailer')
				->send($message);
				
				
				$msg = $passwordSent;
				$sendStatus = 1;
			}
		}
        
        
        return new Response("<h3>$msg</h3>");
    }
	
		
	/**
     * @Route("/reset-password")
     */
    public function resetPasswordAction(Request $request)
    {
               //--SET UP TRANSLATION
		$lang = $this->get('session')->get('lang');
		$translator = new Translator($lang);
		$translator->addLoader('array', new ArrayLoader());
		
		$translator->addResource('array', array('Click_Link' => 'Cliquez sur le lien ci-dessous pour réinitialiser votre mot de passe..',), 'fr');
		$translator->addResource('array', array('Click_Link' => 'Please click on the link below to reset your password.',), 'en');
		$translator->addResource('array', array('Click_Link' => 'Haga clic en el enlace de abajo para restablecer su contraseña.',), 'es');
		$clickLink = $translator->trans('Click_Link');
		
		$translator->addResource('array', array('Reset_Password' => 'Si vous n avez pas demandé de réinitialiser votre mot de passe, vous pouvez ignorer ce courrier électronique.',), 'fr');
		$translator->addResource('array', array('Reset_Password' => 'If you didn’t ask to reset your password, you can ignore this email.',), 'en');
		$translator->addResource('array', array('Reset_Password' => 'Si no solicitó que restableciera su contraseña, puede ignorar este correo electrónico.',), 'es');
		$resetPassword = $translator->trans('Reset_Password');
		
		$translator->addResource('array', array('Hi' => 'Bonjour',), 'fr');
		$translator->addResource('array', array('Hi' => 'Hello',), 'en');
		$translator->addResource('array', array('Hi' => 'Hola',), 'es');
		$hi = $translator->trans('Hi');
		
		$translator->addResource('array', array('Expire_Password' => 'Veuillez noter que ce lien expirera dans une heure.',), 'fr');
		$translator->addResource('array', array('Expire_Password' => 'Please note that this link will expire in an hour.',), 'en');
		$translator->addResource('array', array('Expire_Password' => 'Tenga en cuenta que este enlace expirará en una hora.',), 'es');
		$expirePassword = $translator->trans('Expire_Password');
				
		$translator->addResource('array', array('ThankYou' => 'Merci',), 'fr');
		$translator->addResource('array', array('ThankYou' => 'Thank you',), 'en');
		$translator->addResource('array', array('ThankYou' => 'Gracias',), 'es');
		$thankYou = $translator->trans('ThankYou');
	
		
		//--END ::



	   $email = $request->query->get('email');
        
        $repository = $this->getDoctrine()->getRepository('AppBundle:Customers');
        
        $customer = $repository->findOneByEmail($email);

        $actionStatus = -1;
        if($customer)
        {
            $requestId = $this->getRandomPassword();
			$requestId .= $this->getRandomPassword();
			$requestId .= $this->getRandomPassword();
			
			$timestamp = time();
			
			$fullname = $customer->getFirstname() . " " . $customer->getLastname();
			
			$url = $this->generateUrl('resetPasswordRequested', array('email'=>$email,'code'=>$customer->getCustomerid(),'tstamp'=>$timestamp,'requestId'=>$requestId), UrlGeneratorInterface::ABSOLUTE_URL);
			
			$content = "$hi $fullname, \n\n\n";
			$content .= "$clickLink\n\n";
			$content .= "$url\n\n";
			$content .= "$resetPassword\n\n";
			$content .= "$expirePassword\n\n";
			$content .= "$thankYou,\n\n\n";
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
		
		//--
		$today = date('Y-m-d');
		//--
		

        return $this->render('website/my-dashboard.html.twig', array('customer'=>$customer,'plans'=>$plans,'countries'=>$countries,'today'=>$today));
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
        $customerId = $request->request->get('customerId');
        $oldPassword = $request->request->get('oldPassword');
        $newPassword = $request->request->get('newPassword');
        $cNewPassword = $request->request->get('cNewPassword');

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
            $hs['plan'] = $subscriptions[$index]->getPrice()->getPlan()->getPlanname();
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
            $sub['plan'] = $subscription->getPrice()->getPlan()->getPlanname();
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
     * @Route("/plan-price", name="planPrice")
     */
    public function getPlanPriceAction(Request $request)
    {
        $countryISO3 = $request->query->get('countryISO3');
        $planId = $request->query->get('planId');

        $repository = $this->getDoctrine()->getRepository("AppBundle:Plans");
        $plan = $repository->find($planId);

        $repository = $this->getDoctrine()->getRepository("AppBundle:Countries");
        $country = $repository->findOneByCountryiso3($countryISO3);

        $repository = $this->getDoctrine()->getRepository("AppBundle:Prices");
        $planPrice = $repository->findOneBy(array('country'=>$country,'plan'=>$plan));

        return $this->json(array("planName" => $plan->getPlanname(),"price" => $planPrice->getPrice(),"currency"=>$country->getCurrencyiso()));
    }

    /**
     * @Route("/subscribe-house", name="subscribeHouse")
     */
    public function subscribeHouseAction(Request $request)
    {

        $customerId = $request->request->get('customerId');
        $planId = $request->request->get('planId');
        $firstName = $request->request->get('firstName');
        $lastName = $request->request->get('lastName');
        $phonePrimary = $request->request->get('phonePrimary');
        $phoneAlternate = $request->request->get('phoneAlternate');
        $country = $request->request->get('country');
        $state = $request->request->get('state');
        $city = $request->request->get('city');
        $address = $request->request->get('address');
        $zipCode = $request->request->get('zipCode');

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

}