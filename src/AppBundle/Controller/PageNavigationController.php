<?php
/**
 * Created by PhpStorm.
 * User: Rhood
 * Date: 2017-05-01
 * Time: 11:27 PM
 */

namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Translation\Translator;
use Symfony\Component\Translation\Loader\ArrayLoader;
use Symfony\Component\HttpFoundation\Request;






class PageNavigationController extends Controller
{
    /**
     * @Route("/",name="home")
     */
    public function showHomeAction(Request $request)
    {
       //$this->container->get('session')->isStarted()
        $session = $request->getSession();
        if (!$session->has('lang'))
        {
            $this->get('session')->set('lang', 'en');
        }

        return $this->render('website/home.html.twig');
    }

    /**
     * @Route("/services")
     */
    public function showServicesAction()
    {
        return $this->render('website/services-list.html.twig');
    }

    /**
     * @Route("/plans")
     */
    public function showPlansAction()
    {
        return $this->render('website/plans.html.twig');
    }

    /**
     * @Route("/contact")
     */
    public function showContactUsAction()
    {
        return $this->render('website/contact.html.twig');
    }

    /**
     * @Route("/about")
     */
    public function showAboutUsAction()
    {
        return $this->render('website/about.html.twig');
    }

    /**
     * @Route("/signin")
     */
    public function showSigninAction()
    {
       return $this->render('website/signin.html.twig');
    }

    /**
     * @Route("/register")
     */
    public function showRegisterAction()
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Countries');
        $countries = $repository->findAll();
        return $this->render('website/register.html.twig',array(
            'countries'=> $countries
        ));
    }

    /**
     * @Route("/translate/{lang}",name="page_translation")
     */
    public function translateAction($lang, Request $request)
    {
        $this->get('session')->set('lang', $lang);
        return $this->redirect($request->headers->get('referer'));
    }

    /**
     * @Route("/conditions")
     */
    public function showConditionsAction()
    {
        {
            return $this->render('website/conditions.html.twig');
        }
    }



}