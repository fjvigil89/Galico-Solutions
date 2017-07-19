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

        if($userId)
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
         'CustomersAdmin' =>  $cust, 'houses' => $houses,  'technicians' => $technicians
       ));


    }



    /**
     * @Route("/showHouseInfo" ,name="ShowHouseInfo")
     */
    public function showhouseAction(Request $request)
    {

        $repository = $this->getDoctrine()->getRepository(Houses::class);
        $houses = $repository->findAll();



    }



}
