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
       //var_dump($request); ["REQUEST_URI"]

        $translated = $this->get('translator')->trans('Home');
        //die($request->getLocale());
        return $this->render('website/home.html.twig',array(
            'lang' => $request->getLocale()
        ));
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
    public function showSigninAction($error='')
    {
        echo "$error<br>";
        return $this->render('website/signin.html.twig',array('error' => $error));
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
     * @Route("/translate/{lang}")
     */
    public function translateAction($lang, Request $request)
    {
        $request->setLocale('es');

        $_SESSION['lang'] = $lang;
        die($request->getLocale());

    }



}