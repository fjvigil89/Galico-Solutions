<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Payments
 *
 * @ORM\Table(name="payments", indexes={@ORM\Index(name="SubscriptionID", columns={"SubscriptionID"})})
 * @ORM\Entity
 */
class Payments
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="PaymentDate", type="date", nullable=false)
     */
    private $paymentdate;

    /**
     * @var string
     *
     * @ORM\Column(name="Amount", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $amount;

    /**
     * @var string
     *
     * @ORM\Column(name="tax", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $tax;

    /**
     * @var string
     *
     * @ORM\Column(name="InvoiceNumber", type="string", length=15, nullable=false)
     */
    private $invoicenumber;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=200, nullable=false)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="PaymentID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $paymentid;

    /**
     * @var \AppBundle\Entity\Subscriptions
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Subscriptions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="SubscriptionID", referencedColumnName="SubscriptionID")
     * })
     */
    private $subscription;

    /**
     * @return \DateTime
     */
    public function getPaymentdate()
    {
        return $this->paymentdate;
    }

    /**
     * @param \DateTime $paymentdate
     */
    public function setPaymentdate($paymentdate)
    {
        $this->paymentdate = $paymentdate;
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
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return int
     */
    public function getPaymentid()
    {
        return $this->paymentid;
    }

    /**
     * @param int $paymentid
     */
    public function setPaymentid($paymentid)
    {
        $this->paymentid = $paymentid;
    }

    /**
     * @return Subscriptions
     */
    public function getSubscription()
    {
        return $this->subscription;
    }

    /**
     * @param Subscriptions $subscription
     */
    public function setSubscription($subscription)
    {
        $this->subscription = $subscription;
    }


}

