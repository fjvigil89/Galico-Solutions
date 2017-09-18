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
     * @Route("/list-customers" ,name="ListCustomers")
     */
    public function getCustomersAction(Request $request)
    {
        $userId = $this->get('session')->get('userId');

        if(!$userId)
        {
            return $this->redirectToRoute('adminSignin');
        }

        $repository = $this->getDoctrine()->getRepository(Customers::class);
        $cust = $repository->findAll();

        $repository = $this->getDoctrine()->getRepository(Houses::class);
        $houses = $repository->findAll();

        $repository = $this->getDoctrine()->getRepository(Technicians::class);
        $technicians = $repository->findAll();

       return $this->render('website/admin-console.html.twig', array(
         'Customers' =>  $cust, 'houses' => $houses,  'technicians' => $technicians
       ));


    }





    /**
     * @Route("/technician-information/{technicianId}",name="technicianInformation")
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
     * @Route("/create-technician",name="createTechnician")
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

        return $this->redirectToRoute("ListCustomers");
    }

    /**
     * @Route("/create-agence", name="createAgence")
     * @param Request $request
     */
    public function createAgenceAction(Request $request)
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
     * @Route("/create-price", name="createPrice")
     * @param Request $request
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
     * @Route("/admin")
     */
    public function showMenuAdminAction()
    {
        {
            return $this->render('website/sidemenu-admin.html.twig');
        }
    }

    /**
     * @Route("/adminCustomers" )
     */
    public function showAdminCustomersAction()
    {

        $userId = $this->get('session')->get('userId');

        if(!$userId)
        {
            return $this->redirectToRoute('adminSignin');
        }

        $repository = $this->getDoctrine()->getRepository(Customers::class);
        $cust = $repository->findAll();


        return $this->render('website/admin-customers.html.twig', array(
            'Customers' =>  $cust,
        ));
    }
    /**
     * @Route("/addAdminCustomers")
     */
    public function addAdminCustomersAction()
    {
        {
            return $this->render('website/admin-add-customers.html.twig');
        }

    }

    /**
     * @Route("/adminHouses")
     */
    public function showAdminHousesAction()
    {
        {
            return $this->render('website/admin-houses.html.twig');
        }
    }

    /**
     * @Route("/adminTechnicians" )
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
     * @Route("/adminaddTechnicians")
     */
    public function addAdminTechniciansAction()
    {
        {
            return $this->render('website/admin-add-technicians.html.twig');
        }
    }

    /**
     * @Route("/adminTechRequest")
     */
    public function showTechRequestAction()
    {
        {
            return $this->render('website/admin-tech-request.html.twig');
        }
    }

    /**
     * @Route("/localAgence")
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
     * @Route("/prices")
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
     * @Route("/addPrices")
     */
    public function addPricesAction()
    {
        {
            return $this->render('website/admin-add-prices.html.twig');
        }
    }


    /**
     * @Route("/addLocalAgence")
     */
    public function addLocalAgencesAction()
    {
        {
            return $this->render('website/admin-add-local-agences.html.twig');
        }
    }

    /**
     * @Route("/sendEmailForm", name="rte_sendEmailForm")
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
     * @Route("/sendEmailClient", name="sendEmailClient")
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


        return $this->redirectToRoute("rte_sendEmailForm");

        }


    /**
     * @Route("/update-technician", name="updateTechnician")
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
     * @Route("/admin/authenticate")
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
                $this->get('session')->set('adminId', $adminId);
            }
        }

        return $this->json(array('adminId' => $adminId));
    }



}
