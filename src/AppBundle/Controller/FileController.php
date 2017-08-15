<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class FileController extends Controller
{
    /**
     * @Route("/proforma/{referenceNumber}", name="rte_proforma")
     */
    public function showProformaAction($referenceNumber)
    {
        $resourcesFolderPath = $this->get('kernel')->getRootDir() . '/Resources/proformas/';
        $filename = $referenceNumber.".pdf";
        if(file_exists($filename))
        {
            return new BinaryFileResponse($resourcesFolderPath.$filename);
        }
        else
        {
            return new Response("FILE DOES NOT EXIST");
        }


    }
}
