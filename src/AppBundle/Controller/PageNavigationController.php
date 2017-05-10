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


class PageNavigationController extends Controller
{
    /**
     * @Route("/")
     */
    public function showHomeAction()
    {
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
    public function showSigninAction($error='')
    {
        return $this->render('website/signin.html.twig',array('error' => $error));
    }

    /**
     * @Route("/register")
     */
    public function showRegisterAction()
    {
        return $this->render('website/register.html.twig');
    }
}