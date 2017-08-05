<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Customers;
use AppBundle\Entity\Admins;
use AppBundle\Entity\Houses;
use AppBundle\Entity\Localnumbers;
use AppBundle\Entity\Technicians;
use AppBundle\Entity\Prices;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

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
     * @Route("/sendEmail")
     */
    public function sendEmailAction()
    {
        {
            return $this->render('website/admin-send-email.html.twig');
        }
    }


}
