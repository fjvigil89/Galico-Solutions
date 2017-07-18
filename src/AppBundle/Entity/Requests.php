<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

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
    private $amount;

    /**
     * @var string
     *
     * @ORM\Column(name="Tax", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $tax;

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
    private $house;


    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Interventions", mappedBy="request")
     */
    private $interventions;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Requestservices", mappedBy="request")
     */
    private $requestservices;

    public function __construct()
    {
        $this->interventions = new ArrayCollection();
        $this->requestservices = new ArrayCollection();
    }


    /**
     * @return \DateTime
     */
    public function getRequestdate()
    {
        return $this->requestdate;
    }

    /**
     * @param \DateTime $requestdate
     */
    public function setRequestdate($requestdate)
    {
        $this->requestdate = $requestdate;
    }

    /**
     * @return string
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * @param string $details
     */
    public function setDetails($details)
    {
        $this->details = $details;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return \DateTime
     */
    public function getInvoicedate()
    {
        return $this->invoicedate;
    }

    /**
     * @param \DateTime $invoicedate
     */
    public function setInvoicedate($invoicedate)
    {
        $this->invoicedate = $invoicedate;
    }

    /**
     * @return string
     */
    public function getInvoicenumber()
    {
        return $this->invoicenumber;
    }

    /**
     * @param string $invoicenumber
     */
    public function setInvoicenumber($invoicenumber)
    {
        $this->invoicenumber = $invoicenumber;
    }

    /**
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param string $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return string
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * @param string $tax
     */
    public function setTax($tax)
    {
        $this->tax = $tax;
    }

    /**
     * @return string
     */
    public function getInvoicetype()
    {
        return $this->invoicetype;
    }

    /**
     * @param string $invoicetype
     */
    public function setInvoicetype($invoicetype)
    {
        $this->invoicetype = $invoicetype;
    }

    /**
     * @return string
     */
    public function getTransactionid()
    {
        return $this->transactionid;
    }

    /**
     * @param string $transactionid
     */
    public function setTransactionid($transactionid)
    {
        $this->transactionid = $transactionid;
    }

    /**
     * @return int
     */
    public function getRequestid()
    {
        return $this->requestid;
    }

    /**
     * @param int $requestid
     */
    public function setRequestid($requestid)
    {
        $this->requestid = $requestid;
    }

    /**
     * @return Houses
     */
    public function getHouse()
    {
        return $this->house;
    }

    /**
     * @param Houses $house
     */
    public function setHouse($house)
    {
        $this->house = $house;
    }


    /**
     * Add intervention
     *
     * @param \AppBundle\Entity\Interventions $intervention
     *
     * @return Requests
     */
    public function addIntervention(\AppBundle\Entity\Interventions $intervention)
    {
        $this->interventions[] = $intervention;

        return $this;
    }

    /**
     * Remove intervention
     *
     * @param \AppBundle\Entity\Interventions $intervention
     */
    public function removeIntervention(\AppBundle\Entity\Interventions $intervention)
    {
        $this->interventions->removeElement($intervention);
    }

    /**
     * Get interventions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getInterventions()
    {
        return $this->interventions;
    }


    /**
     * Add requestservice
     *
     * @param \AppBundle\Entity\Requestservices $requestservice
     *
     * @return Requests
     */
    public function addRequestService(\AppBundle\Entity\Requestservices $requestservice)
    {
        $this->requestservices[] = $requestservice;

        return $this;
    }

    /**
     * Remove requestservice
     *
     * @param \AppBundle\Entity\Requestservices $requestservice
     */
    public function removeRequestService(\AppBundle\Entity\Requestservices $requestservice)
    {
        $this->requestservices->removeElement($requestservice);
    }

    /**
     * Get requestservices
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRequestServices()
    {
        return $this->requestservices;
    }


}

