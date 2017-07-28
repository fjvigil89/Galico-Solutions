<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Customers;
use AppBundle\Entity\Admins;
use AppBundle\Entity\Houses;
use AppBundle\Entity\Technicians;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class AdminConsoleController extends Controller
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
}
