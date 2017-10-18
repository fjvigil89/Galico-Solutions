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
        $countryId = $request->request->get('subagCountry');
        $city = $request->request->get('cityAgence');
        $phone = $request->request->get('phoneAgence');
        $address = $request->request->get('adresseAgence');

        $repository = $this->getDoctrine()->getRepository(Countries::class);
        $country = $repository->find($countryId);
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


        return $this->redirectToRoute("rte_admin_agents");

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
        $agent['countryId'] = "".$agentlocal->getCountry()->getCountryid();
        $agent['country'] = $agentlocal->getCountry()->getCountry();
        $agent['city'] = $agentlocal->getCity();
        $agent['phone'] = $agentlocal->getPhone();
        $agent['address'] = $agentlocal->getAddress();


        return $this->json($agent);
    }



    /**
     * @Route("/admin/price/{id}",name="rte_admin_price")
     */
    public function getPriceInformationAction($id)
    {


        $repository = $this->getDoctrine()->getRepository('AppBundle:Prices');
        $priceObject = $repository->find($id);

        $price = array();
        $price['priceid'] = $priceObject->getPriceid();
        $price['country'] = $priceObject->getCountry()->getCountry();
        $price['taxpercentage'] = $priceObject->getTaxpercentage();
        $price['plan'] = $priceObject->getPlan()->getPlanname();
        $price['price'] = $priceObject->getPrice();



        return $this->json($price);
    }

    /**
     * @Route("/admin/price/update", name="rte_admin_price_update")
     */
    public function updatePriceAction(Request $request)
    {
        $priceid = $request->request->get('priceid');
        $priceCountryId = $request->request->get('priceCountry');
        $pricePrice = $request->request->get('pricePrice');
        $priceTax = $request->request->get('priceTax');
        $pricePlan = $request->request->get('pricePlan');

        $repository = $this->getDoctrine()->getRepository(Prices::class);
        $price = $repository->find($priceid);
        $updateStatus = -1;
        $response = array();

        $repository = $this->getDoctrine()->getRepository(Countries::class);
        $priceCountry = $repository->find($priceCountryId);


        if ($priceid) {
            $price->setPrice($pricePrice);
            $price->setTaxpercentage($priceTax);
            $price->setPlan($pricePlan);
            $price->setCountry($priceCountry);


            $em = $this->getDoctrine()->getManager();
            $em->flush();
            $updateStatus = 1;


        }
        //$response['updateStatus'] = $updateStatus;


        return $this->redirectToRoute("rte_admin_prices");

    }
}