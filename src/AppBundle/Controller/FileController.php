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
        $proforma = $resourcesFolderPath . $filename;
        if(file_exists($proforma))
        {
            return new BinaryFileResponse($proforma);
        }
        else
        {
            return new Response("THE PROFORMA IS NOT AVAILABLE YET. PLEASE TRY AGAIN LATER");
        }

    }

    /**
     * @Route("/viewInvoice/{invoiceNumber}", name="rte_view_invoice")
     */
    public function showInvoiceAction($invoiceNumber)
    {
        $resourcesFolderPath = $this->get('kernel')->getRootDir() . '/Resources/invoices/';
        $filename = $invoiceNumber.".pdf";
        $invoice = $resourcesFolderPath . $filename;
        if(file_exists($invoice))
        {
            return new BinaryFileResponse($invoice);
        }
        else
        {
            return new Response("THE INVOICE IS NOT AVAILABLE YET. PLEASE TRY AGAIN LATER");
        }

    }
}
