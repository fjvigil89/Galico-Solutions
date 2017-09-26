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
        $houses = $repository->findByCountry($country);

        $customers = array();
        foreach($houses as $house)
        {
            if(!in_array($house->getCustomer(), $customers, TRUE))
            {
                $customers[] = $house->getCustomer();
            }

        }

       return $this->render('website/admin-customers.html.twig', array(
         'Customers' =>  $customers
       ));

    }



    /**
     * @Route("/admin/customer/save", name="rte_admin_customer_save")
     * @param Request $request
     * @param UserPasswordEncoderInterface $passwordEncoder
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function createNewCustomerAction(Request $request)
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

        return $this->redirectToRoute("rte_admin_customers");

    }

    /**
     * @Route("/admin/customer/update", name="rte_admin_customer_update")
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
        if($this->isCustomerValid($customerId))
        {
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
        }

        return $this->redirectToRoute("rte_admin_customers");

    }

    /**
     * @Route("/admin/technician-information/{technicianId}",name="rte_admin_technician_information")
     */

    public function getTechnicianInformationAction($technicianId){
        $repository = $this->getDoctrine()->getRepository('AppBundle:Technicians');
        $technician = $repository->find($technicianId);

        $tech = array();
        $tech['technicianid'] = $technician->getTechnicianid();
        $tech['firstName'] = $technician->getFirstname();
        $tech['lastName'] = $technician->getLastname();
        $tech['email'] = $technician->getEmail();
        $tech['phonePrimary'] = $technician->getPhoneprimary();
        $tech['phoneAlternate'] = $technician->getPhonealternate();
        $tech['profession'] = $technician->getProfession();
        $tech['idtype'] = $technician->getIdtype();
        $tech['idnumber'] = $technician->getIdnumber();
        $tech['code'] = $technician->getCode();
        $tech['country'] = $technician->getCountry();
        $tech['state'] = $technician->getState();
        $tech['city'] = $technician->getCity();
        $tech['address'] = $technician->getAddress();
        $tech['zipCode'] = $technician->getZipcode();

        return $this->json($tech);
    }


    /**
     * @Route("/admin/technician/save",name="rte_admin_technician_save")
     */
    public function addtechnicianAction(Request $request){

        $data = $request->request->all();
        //var_dump($data); die("");
        $firstName = $data['newTechFirstname'];
        $lastName = $data['newTechLastname'];
        $email = $data['newTechEmail'];
        $phonePrimary = $data['newTechPhonePrimary'];
        $phoneAlternate = $data['newTechPhonealternate'];
        $profession = $data['newTechProfesion'];
        $idType = $data['newTechIDType'];
        $code = $data['newTechCode'];
        $country = $data['newTechCountry'];
        $state = $data['newTechState'];
        $city = $data['addTechCity'];
        $address = $data['newTechAddress'];
        $zipCode = $data['newTechZipCode'];

        $technician = new Technicians();
        $technician->setFirstname($firstName);
        $technician->setLastname($lastName);
        $technician->setEmail($email);
        $technician->setPhoneprimary($phonePrimary);
        $technician->setPhonealternate($phoneAlternate);
        $technician->setProfession($profession);
        $technician->setIdtype($idType);
        $technician->setCode($code);
        $technician->setCountry($country);
        $technician->setState($state);
        $technician->setCity($city);
        $technician->setAddress($address);
        $technician->setZipcode($zipCode);
        $technician->setIdnumber(2);
        $technician->setPhoto("photo");

        $em = $this->getDoctrine()->getManager();
        $em->persist($technician);
        $em->flush();

        return $this->redirectToRoute("rte_admin_technicians");
    }

    /**
     * @Route("/admin/agent/save", name="rte_admin_agent_save")
     */
    public function createAgentAction(Request $request)
    {
        $data = $request->request->all();
        //var_dump($data); die("");
       //$country = $data['countryAgence'];
        $city = $data['cityAgence'];
        $phone = $data['phoneAgence'];
        $address = $data['adresseAgence'];

        $agence = new Localnumbers();
      //$agence->setCountry($country);
        $agence->setCity($city);
        $agence->setPhone($phone);
        $agence->setAddress($address);

        $em = $this->getDoctrine()->getManager();
        $em->persist($agence);
        $em->flush();

        return $this->redirectToRoute("ListCustomers");
    }


    /**
     * @Route("/admin/price/save", name="rte_admin_price_save")
     */
    public function createPricesAction(Request $request)
    {
        $data = $request->request->all();
        //var_dump($data); die("");
        //$country = $data['PriceCountry'];
        $prices = $data['price'];
        $tax = $data['tax'];
        //$plan = $data['plan'];


        $price = new Prices();
        //$agence->setCountry($country);
        $price->setPrice($prices);
        $price->setTaxpercentage($tax);
        //$price->setPlan($plan);



        $em = $this->getDoctrine()->getManager();
        $em->persist($price);
        $em->flush();

        return $this->redirectToRoute("ListCustomers");
    }



    /**
     * @Route("/admin/customer/new", name="rte_admin_customer_new" )
     */
    public function addAdminCustomersAction()
    {
         return $this->render('website/admin-add-customer.html.twig');
    }

    /**
     * @Route("/admin/houses", name="rte_admin_houses" )
     */
    public function showAdminHousesAction()
    {
        {
            return $this->render('website/admin-houses.html.twig');
        }
    }

    /**
     * @Route("/admin/technicians", name="rte_admin_technicians" )
     */
    public function showListTechniciansAction()
    {

        $repository = $this->getDoctrine()->getRepository(Technicians::class);
        $technicians = $repository->findAll();


        return $this->render('website/admin-technicians.html.twig', array(
            'technicians' => $technicians,
        ));

         }


    /**
     * @Route("/admin/agences", name="rte_admin_agences" )
     */
    public function showLocalAgencesAction()
    {

        $repository = $this->getDoctrine()->getRepository(Localnumbers::class);
        $locals = $repository->findAll();


        {
                return $this->render('website/admin-local-agences.html.twig', array(
            'locals' =>  $locals,
        ));
            }



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
     * @Route("/admin/price/new", name="rte_admin_price_new" )
     */
    public function addPricesAction()
    {
        {
            return $this->render('website/admin-add-price.html.twig');
        }
    }


    /**
     * @Route("/admin/agence/new", name="rte_admin_agence_new" )
     */
    public function addLocalAgencesAction()
    {
        {
            return $this->render('website/admin-add-local-agences.html.twig');
        }
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
         $attachment->move($resourcesFolderPath ,$attachment->getClientOriginalName()

        );
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
     * @Route("/admin/technician/update", name="rte_admin_technician_update")
     */
    public function updateTechnicianAction(Request $request)
    {

        $technicianId = $request->request->get('technicianId');
        $firstName = $request->request->get('firstName');
        $lastName = $request->request->get('lastName');
        $email = $request->request->get('email');
        $phonePrimary = $request->request->get('phonePrimary');
        $phoneAlternate = $request->request->get('phoneAlternate');
        $profession = $request->request->get('$profession');
        $country = $request->request->get('country');
        $state = $request->request->get('state');
        $city = $request->request->get('city');
        $address = $request->request->get('address');
        $zipCode = $request->request->get('zipCode');

        //return $this->json(array('updateStatus' => "customer id : " . $request->query->get('email')));
        $updateStatus = -1;
        $response = array();

            $repository = $this->getDoctrine()->getRepository('AppBundle:Technicians');
            $technician = $repository->find($technicianId);

            if($technician)
            {
                $technician->setFirstname($firstName);
                $technician->setLastname($lastName);
                $technician->setEmail($email);

                $technician->setPhoneprimary($phonePrimary);
                $technician->setPhonealternate($phoneAlternate);

                $technician->setCountry($country);
                $technician->setState($state);
                $technician->setCity($city);
                $technician->setAddress($address);
                $technician->setZipcode($zipCode);

                $em = $this->getDoctrine()->getManager();
                $em->flush();
                $updateStatus = 1;

                $response['customerId'] = $technician->getCustomerid();
                $response['firstName'] = $technician->getFirstname();
                $response['lastName'] = $technician->getLastname();
                $response['email'] = $technician->getEmail();
                $response['phonePrimary'] = $technician->getPhoneprimary();
                $response['phoneAlternate'] = $technician->getPhonealternate();
                $response['country'] = $technician->getCountry();
                $response['state'] = $technician->getState();
                $response['city'] = $technician->getCity();
                $response['address'] = $technician->getAddress();
                $response['zipCode'] = $technician->getZipcode();

            }
            $response['updateStatus'] = $updateStatus;


        return $this->json($response);

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
    public function showMenuAdminAction()
    {
        {
            return $this->render('website/sidemenu-admin.html.twig');
        }
    }

    /**
     * @Route("/admin/technician/new",name="rte_admin_technician_new")
     */
    public function addAdminTechniciansAction()
    {

            return $this->render('website/admin-add-technician.html.twig');

    }

    /**
     * @Route("/admin/request", name="rte_admin_request")
     */
    public function showTechRequestAction()
    {

            return $this->render('website/admin-tech-request.html.twig');

    }


    /**
     * @Route("/admin/send-email", name="rte_admin_send_email")
     */
    public function showsendEmailAction()
    {

        return $this->render('website/admin-send-email.html.twig');




    }
}
