<?php
/**
 * Created by PhpStorm.
 * User: ANTONIO
 * Date: 2017-05-02
 * Time: 20:13
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class UserController extends Controller
{
    /**
     * @Route("/client-edit")
     */
    public function showMyProfileAction()
    {
        return $this->render('website/client-edit.html.twig');
    }

    /**
     * @Route("/client-resume")
     */
    public function showMyAcountAction()
    {
        return $this->render('website/client-resume.html.twig');
    }
}