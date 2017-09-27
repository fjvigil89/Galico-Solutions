<?php
/**
 * Created by PhpStorm.
 * User: ANTONIO
 * Date: 2017-09-25
 * Time: 21:45
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Technicians;

class TechnicianController extends Controller
{

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

        return $this->redirectToRoute("ListCustomers");
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
}