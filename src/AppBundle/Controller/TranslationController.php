<?php
/**
 * Created by PhpStorm.
 * User: Rhood
 * Date: 2017-05-11
 * Time: 8:06 PM
 */

namespace AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class TranslationController extends Controller
{
    public function homeIntroAction($lang)
    {
        //var_dump($lang);
        return $this->render('website/long-translations/home-intro-en.html.twig');
    }
}