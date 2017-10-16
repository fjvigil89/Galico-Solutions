<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Customers;
use AppBundle\Entity\Admins;
use AppBundle\Entity\Houses;
use AppBundle\Entity\Localnumbers;
use AppBundle\Entity\Technicians;
use AppBundle\Entity\Requests;
use AppBundle\Entity\Prices;
use AppBundle\Entity\Payments;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;



class AdminController extends Controller
{

    /**
     * @Route("/admin/signin",name="rte_admin_signin")
     */
    public function showSigninAdminAction()
    {
        return $this->render('website/admin-signin.html.twig');
    }

    /**
     * @Route("/admin/customers" ,name="rte_admin_customers")
     */
    public function getCustomersAction(Request $request)
    {
        $connectedAdminId = $this->get('session')->get('adminId');

        if(!$connectedAdminId)
        {
            return $this->redirectToRoute('rte_admin_signin');
        }

        $repository = $this->getDoctrine()->getRepository(Admins::class);
        $admin = $repository->find($connectedAdminId);

        $country = $admin->getLocalnumber()->getCountry()->getCountry();

        $repository = $this->getDoctrine()->getRepository(Houses::class);

        if($admin->isIssuperadmin())
        {
            $repository = $this->getDoctrine()->getRepository(Customers::class);
            $customers = $repository->findAll();
        }
        else
        {
            $houses = $repository->findByCountry($country);

            $customers = array();
            foreach($houses as $house)
            {
                if(!in_array($house->getCustomer(), $customers, TRUE)) {
                    $customers[] = $house->getCustomer();
                }
            }
        }


        $repository = $this->getDoctrine()->getRepository('AppBundle:Countries');
        $countries = $repository->findAll();

       return $this->render('website/admin-customers.html.twig', array(
         'customers' =>  $customers,
         'countries' => $countries
       ));

    }

    /**
     * @Route("/admin/customer/save", name="rte_admin_customer_save")
     * @param Request $request
     * @param UserPasswordEncoderInterface $passwordEncoder
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function createCustomerAction(Request $request)
    {
        $data = $request->request->all();
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

        //return $this->redirectToRoute("rte_admin_customers");
        return $this->json(array('id'=> $customer->getCustomerid()));


    }

    /**
     * @Route("/admin/customer/update", name="rte_admin_customer_update")
     */
    public function updateCustomerAction(Request $request)
    {
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

            /*$response['customerId'] = $customer->getCustomerid();
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
            */

        }
        //$response['updateStatus'] = $updateStatus;


        return $this->redirectToRoute("rte_admin_customers");

    }

    /**
     * @Route("/admin/customer/new", name="rte_admin_customer_new" )
     */
    public function addAdminCustomersAction()
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Countries');
        $countries = $repository->findAll();

        $repository = $this->getDoctrine()->getRepository('AppBundle:Plans');
        $plans = $repository->findAll();

        $today = date('Y-m-d');

        return $this->render('website/admin-add-customer.html.twig',array(
            'countries'=> $countries,
            'plans'=> $plans,
            'today'=>$today
        ));
    }



    /**
     * @Route("/admin/houses", name="rte_admin_houses" )
     */
    public function showAdminHousesAction()
    {

        $connectedAdminId = $this->get('session')->get('adminId');

        if(!$connectedAdminId)
        {
            return $this->redirectToRoute('rte_admin_signin');
        }

        $repository = $this->getDoctrine()->getRepository(Admins::class);
        $admin = $repository->find($connectedAdminId);

        $country = $admin->getLocalnumber()->getCountry()->getCountry();

        $repository = $this->getDoctrine()->getRepository(Houses::class);

        if($admin->isIssuperadmin())
        {
            $houses = $repository->findAll();
        }
        else
        {
            $houses = $repository->findByCountry($country);
        }

        $customerHouses = array();
        foreach($houses as $house)
        {
            $subscriptions = $house->getSubscriptions();
            $index = count($subscriptions)-1;

            if($index>=0)
            {
                $hs = array();
                $hs['id'] =$house->getHouseid();
                $hs['plan'] = $subscriptions[$index]->getPrice()->getPlan()->getPlanname();
                $hs['subscriptionDate'] = date_format($subscriptions[$index]->getSubscriptiondate(), 'Y-m-d');
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


        }



        return $this->render('website/admin-houses.html.twig', array('houses'=>$customerHouses));
    }

    /**
     * @Route("/admin/house/{id}", name="rte_admin_house" )
     */
    public function showHouseDetailsAction($id)
    {

        $connectedAdminId = $this->get('session')->get('adminId');
        $customerHouse = array();

        if($connectedAdminId)
        {
            $repository = $this->getDoctrine()->getRepository(Houses::class);
            $house = $repository->find($id);

            $subscriptions = $house->getSubscriptions();
            $index = count($subscriptions)-1;

            if($index>=0)
            {
                $customerHouse['id'] =$house->getHouseid();
                $customerHouse['plan'] = $subscriptions[$index]->getPrice()->getPlan()->getPlanname();
                $customerHouse['subscriptionDate'] = date_format($subscriptions[$index]->getSubscriptiondate(), 'Y-m-d');
                $customerHouse['phonePrimary'] = $house->getPhoneprimary();
                $customerHouse['phoneAlternate'] = $house->getPhonealternate();
                $customerHouse['country'] = $house->getCountry();
                $customerHouse['state'] = $house->getState();
                $customerHouse['city'] = $house->getCity();
                $customerHouse['address'] = $house->getAddress();
                $customerHouse['contactLastName'] = $house->getLastname();
                $customerHouse['contactFirstName'] = $house->getFirstname();
                $customerHouse['agentNumber'] = $this->getLocalAgentNumber($customerHouse['country'],$customerHouse['city']);

            }
        }

        return $this->json($customerHouse);

    }

    /**
     * @Route("/admin/requests", name="rte_admin_requests")
     */
    public function showRequestsAction()
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Requests');
        $requests = $repository->findAll();

        $allRequests = array();
        foreach($requests as $request)
        {
            $req = array();

            $reqService = $request->getRequestServices();
            $req['requestDate'] = date_format($request->getRequestdate(), 'Y-m-d');
            $req['totalAmount'] = $request->getAmount() + $request->getTax();
            $cust = $request->getHouse()->getCustomer();
            $req['customer'] = $cust->getLastname() . " " . $cust->getFirstname();

            $req['status'] = $request->getStatus();
            $req['requestId'] = $request->getRequestid();
            $req['details'] = $request->getDetails();
            $req['service'] = count($reqService)>0? $reqService[0]->getService()->getServicename() : "";

            $allRequests[] = $req;
        }

        return $this->render('website/admin-requests.html.twig',array('requests'=>$allRequests) );
    }

    /**
     * @Route("/admin/payments/{houseId}", name="rte_admin_payments")
     */
    public function showPaymentsAction($houseId)
    {
        $connectedAdminId = $this->get('session')->get('adminId');
        $allPayments = array();

        if($connectedAdminId)
        {
            $repository = $this->getDoctrine()->getRepository('AppBundle:Houses');
            $house = $repository->find($houseId);

            $repository = $this->getDoctrine()->getRepository('AppBundle:Requests');
            $requests = $repository->findByHouse($house);


            $repository = $this->getDoctrine()->getRepository('AppBundle:Payments');
            foreach($requests as $req)
            {
                $payments = $repository->findByRequest($req);
                $allPayments = array_merge($allPayments,$payments);
            }
        }

        return $this->json($allPayments);
    }

    /**
     * @Route("/admin/prices", name="rte_admin_prices" )
     */
    public function showPricesAction()
    {

        $repository = $this->getDoctrine()->getRepository(Prices::class);
        $prices = $repository->findAll();

        return $this->render('website/admin-prices.html.twig', array(
            'prices' =>  $prices,
        ));

    }

    /**
     * @Route("/admin/send-email-form", name="rte_admin_send_email_form")
     */
    public function sendEmailAction()
    {

        $repository = $this->getDoctrine()->getRepository('AppBundle:Customers');
        $customers = $repository->findAll();
        $repository = $this->getDoctrine()->getRepository('AppBundle:Requests');
        $requests = $repository->findAll();


        {
            return $this->render('website/admin-send-email.html.twig',array(
            'customers' =>  $customers, 'requests' =>  $requests,
        ));
    }

    }


    private function getRandomImage()
    {
        $images = array("services-01","services-04","services-05","services-11","services-022");
        $index = rand(0,4);
        return $images[$index];
    }
    /**
     * @Route("/admin/send-email-client", name="rte_admin_send_email_client")
     */
    public function sendEmailClientAction(Request $request)
    {

        $content = $request->request->get('content');
        $subject = $request->request->get('subject');
        $email = $request->request->get('email');
        $image = $this->getRandomImage();
        $attachment= $request->files->get('file');
        $resourcesFolderPath = $this->get('kernel')->getRootDir() . '/Resources/proformas/';
         $attachment->move($resourcesFolderPath ,$attachment->getClientOriginalName());
        $namefile = $attachment->getClientOriginalName();


            # Setup the message
            $message = \Swift_Message::newInstance()
                ->setSubject("$subject")
                ->setFrom("info@general-pro.com", "INFO GENERAL PRO")
                ->setTo($email)
               ->attach(\Swift_Attachment::fromPath($resourcesFolderPath.$namefile))
               // ->attach(\Swift_Attachment::fromPath('images/page-home/services-032.jpg'))
                ->setBody($this->renderView('website/template-email.html.twig', array("messageBody" => $content, "image" => $image)),
                    'text/html'

                );

            # Send the message
            $this->get('mailer')
                ->send($message);


            //--


        return $this->redirectToRoute("rte_admin_send_email_form");

    }


    /**
     * @Route("/admin/authenticate", name="rte_admin_authenticate")
     */
    public function authenticateAdminAction(Request $request)
    {
        $email = $request->request->get('email');
        $pwd = $request->request->get('pwd');

        $repository = $this->getDoctrine()->getRepository('AppBundle:Admins');

        $admin = $repository->findOneByEmail($email);

        $adminId = -1;
        if($admin)
        {
            $encoder = $this->container->get('security.password_encoder');
            $isValid = $encoder->isPasswordValid($admin, $pwd);

            if($isValid)
            {
                $adminId = $admin->getAdminid();
                $isSuperAdmin = $admin->isIssuperadmin();
                $this->get('session')->set('adminId', $adminId);
                $this->get('session')->set('isSuperAdmin', $isSuperAdmin);
            }
        }

        return $this->json(array('adminId' => $adminId));
    }

    /**
     * @Route("/admin")
     */
    public function showAdminAction()
    {
        return $this->redirectToRoute('rte_admin_signin');
    }

    /**
     * @Route("/admin/")
     */
    public function goToAdminAction()
    {
        return $this->redirectToRoute('rte_admin_signin');
    }

    /**
     * @Route("/admin/send-email", name="rte_admin_send_email")
     */
    public function showSendEmailFormAction()
    {
        return $this->render('website/admin-send-email.html.twig');
    }

    /**
     * @Route("/admin/request/open/{requestId}", name="rte_admin_request_open")
     */
    public function openRequestAction($requestId)
    {
        $statusChanged = false;
        $repository = $this->getDoctrine()->getRepository('AppBundle:Requests');
        $request = $repository->find($requestId);
        if($request && $request->getStatus()=="PENDING")
        {
            $request->setStatus("OPEN");
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            $statusChanged = true;
        }

        return $this->json(array('statusChanged'=>$statusChanged));
    }

    /**
     * @Route("/admin/proforma/attachment", name="rte_admin_proforma_attachment")
     */
    public function attachProformaAction($request)
    {
        $requestId = $request->request->get('requestId');
        $amount = $request->request->get('amount');
        $tax = $request->request->get('tax');
        $filename = $request->request->get('filename');


        $attachment= $request->files->get('filename');
        $resourcesFolderPath = $this->get('kernel')->getRootDir() . '/Resources/proformas/';
        $attachment->move($resourcesFolderPath ,$attachment->getClientOriginalName());

        $repository = $this->getDoctrine()->getRepository('AppBundle:Requests');
        $serviceRequest = $repository->find($requestId);

        $serviceRequest->setAmount($amount);
        $tax->setTax($tax);

        $em = $this->getDoctrine()->getManager();
        $em->flush();

        return $this->redirectToRoute('rte_admin_requests');
    }

    //TO REMOVE AND PLACE IN A SERVICE
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
}
