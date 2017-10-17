<?php
/**
 * Created by PhpStorm.
 * User: ANTONIO
 * Date: 2017-09-25
 * Time: 21:47
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Countries;
use AppBundle\Entity\Plans;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Prices;
use AppBundle\Entity\Localnumbers;

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
        $countryId = $data['countryAgence'];

        $repository = $this->getDoctrine()->getRepository(Countries::class);
        $country = $repository->find($countryId);


        $agence = new Localnumbers();
        //$agence->setCountry($country);
        $agence->setCity($city);
        $agence->setPhone($phone);
        $agence->setAddress($address);
        $agence->setCountry($country);


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
            return $this->render('website/admin-local-agents.html.twig', array(
                'locals' => $locals,
            ));
        }

    }

    /**
     * @Route("/admin/agent/new", name="rte_admin_agent_new" )
     */
    public function addLocalAgentAction()
    {
        return $this->render('website/admin-add-local-agent.html.twig');
    }

    /**
     * @Route("/admin/prices", name="rte_admin_prices" )
     */
    public function showPricesAction()
    {

        $repository = $this->getDoctrine()->getRepository(Prices::class);
        $prices = $repository->findAll();


        return $this->render('website/admin-prices.html.twig', array(
            'prices' => $prices,
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
       $plan = $data['PricePlan'];
        $countryId = $data['PriceCountry'];
        $repository = $this->getDoctrine()->getRepository(Countries::class);
        $country = $repository->find($countryId);

        $repository = $this->getDoctrine()->getRepository(Plans::class);
        $planPrices = $repository->find($plan);

        $price = new Prices();
        //$agence->setCountry($country);
        $price->setPrice($prices);
        $price->setTaxpercentage($tax);
        $price->setCountry($country);
        $price->setPlan($planPrices);
        //$price->setPlan($plan);

        $em = $this->getDoctrine()->getManager();
        $em->persist($price);
        $em->flush();

        return $this->redirectToRoute("rte_admin_prices");

    }


    /**
     * @Route("/admin/agent/update", name="rte_admin_agent_update")
     */
    public function updateAgentAction(Request $request)
    {
        $localnumberid = $request->request->get('localnumberid');
        $country = $request->request->get('subagCountry');
        $city = $request->request->get('cityAgence');
        $phone = $request->request->get('phoneAgence');
        $address = $request->request->get('adresseAgence');


        $updateStatus = -1;
        $response = array();

        $repository = $this->getDoctrine()->getRepository('AppBundle:Localnumbers');
        $localnumber = $repository->find($localnumberid);

        if ($localnumberid) {
            $localnumber->setCountry($country);
            $localnumber->setCity($city);
            $localnumber->setPhone($phone);
            $localnumber->setAddress($address);


            $em = $this->getDoctrine()->getManager();
            $em->flush();
            $updateStatus = 1;


        }
        //$response['updateStatus'] = $updateStatus;


        return $this->redirectToRoute("rte_admin_customers");

    }


    /**
     * @Route("/admin/agent/{id}",name="rte_admin_agent")
     */
    public function getAgentInformationAction($id)
    {


        $repository = $this->getDoctrine()->getRepository('AppBundle:Localnumbers');
        $agentlocal = $repository->find($id);

        $agent = array();
        $agent['localnumberid'] = $agentlocal->getLocalnumberid();
        $agent['country'] = $agentlocal->getCountry();
        $agent['city'] = $agentlocal->getCity();
        $agent['phone'] = $agentlocal->getPhone();
        $agent['address'] = $agentlocal->getAddress();


        return $this->json($agent);
    }

}