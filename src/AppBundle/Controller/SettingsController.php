<?php
/**
 * Created by PhpStorm.
 * User: ANTONIO
 * Date: 2017-09-25
 * Time: 21:47
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class SettingsController extends Controller
{
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

        return $this->redirectToRoute("rte_admin_agents");
    }

    /**
     * @Route("/admin/agents", name="rte_admin_agents" )
     */
    public function showLocalAgentsAction()
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
     * @Route("/admin/agent/new", name="rte_admin_agent_new" )
     */
    public function addLocalAgentAction()
    {
        return $this->render('website/admin-add-local-agences.html.twig');
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
        return $this->render('website/admin-add-price.html.twig');
    }

    /**
     * @Route("/admin/price/save", name="rte_admin_price_save")
     */
    public function createPriceAction(Request $request)
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

}