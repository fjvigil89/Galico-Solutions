<?php
/**
 * Created by PhpStorm.
 * User: ANTONIO
 * Date: 2017-09-25
 * Time: 21:47
 */

namespace AppBundle\Controller;


class SettingController
{
    /**
     * @Route("/admin/agence/save", name="rte_admin_agence_save")
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
     * @Route("/admin/price/save", name="rte_admin_price_save")
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

}