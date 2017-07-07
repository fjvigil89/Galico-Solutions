<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Controller\ConvergeApi;


class ConvergeController extends Controller
{
    /**
     * @Route("/ccaddrecurring")
     */
    public function addRecurringAction(Request $request)
    {
        // Create new PaymentProcessor object
        /*$PaymentProcessor = new \markroland\Converge\ConvergeApi(
            '007128',
            'webpage',
            'CL7NIF',
            false
        );*/
        $converge = new ConvergeApi( '007128',
            'webpage',
            'CL7NIF',
            false);


        return $this->json(array('result' =>'0' ));
    }
}
