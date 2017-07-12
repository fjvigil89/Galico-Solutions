<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Requests
 *
 * @ORM\Table(name="requests", indexes={@ORM\Index(name="HouseID", columns={"HouseID"})})
 * @ORM\Entity
 */
class Requests
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="RequestDate", type="date", nullable=false)
     */
    private $requestdate;

    /**
     * @var string
     *
     * @ORM\Column(name="Details", type="text", length=65535, nullable=false)
     */
    private $details;

    /**
     * @var string
     *
     * @ORM\Column(name="Status", type="string", length=20, nullable=false)
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="InvoiceDate", type="date", nullable=true)
     */
    private $invoicedate;

    /**
     * @var string
     *
     * @ORM\Column(name="InvoiceNumber", type="string", length=15, nullable=false)
     */
    private $invoicenumber;

    /**
     * @var string
     *
     * @ORM\Column(name="Amount", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $amount = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="Tax", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $tax = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="InvoiceType", type="string", length=10, nullable=true)
     */
    private $invoicetype;

    /**
     * @var string
     *
     * @ORM\Column(name="TransactionID", type="string", length=100, nullable=true)
     */
    private $transactionid;

    /**
     * @var integer
     *
     * @ORM\Column(name="RequestID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $requestid;

    /**
     * @var \AppBundle\Entity\Houses
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Houses")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="HouseID", referencedColumnName="HouseID")
     * })
     */
    private $houseid;


}

