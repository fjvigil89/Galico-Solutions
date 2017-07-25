<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Subscriptions
 *
 * @ORM\Table(name="subscriptions", indexes={@ORM\Index(name="CustomerID", columns={"HouseID"}), @ORM\Index(name="PriceID", columns={"PriceID"})})
 * @ORM\Entity
 */
class Subscriptions
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="SubscriptionDate", type="date", nullable=false)
     */
    private $subscriptiondate;

    /**
     * @var string
     *
     * @ORM\Column(name="TransactionID", type="string", length=100, nullable=false)
     */
    private $transactionid;

    /**
     * @var string
     *
     * @ORM\Column(name="CC", type="string", length=20, nullable=false)
     */
    private $cc;

    /**
     * @var integer
     *
     * @ORM\Column(name="SubscriptionID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $subscriptionid;

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
     * @var \AppBundle\Entity\Prices
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Prices")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="PriceID", referencedColumnName="PriceID")
     * })
     */
    private $price;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Payments", mappedBy="subscription")
     */
    private $payments;

    public function __construct()
    {
        $this->payments = new ArrayCollection();
    }



    /**
     * @return \DateTime
     */
    public function getSubscriptiondate()
    {
        return $this->subscriptiondate;
    }

    /**
     * @param \DateTime $subscriptiondate
     */
    public function setSubscriptiondate($subscriptiondate)
    {
        $this->subscriptiondate = $subscriptiondate;
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
    public function getSubscriptionid()
    {
        return $this->subscriptionid;
    }

    /**
     * @param int $subscriptionid
     */
    public function setSubscriptionid($subscriptionid)
    {
        $this->subscriptionid = $subscriptionid;
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
     * @return Prices
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param Prices $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * Add payment
     *
     * @param \AppBundle\Entity\Payments $payment
     *
     * @return Subscriptions
     */
    public function addPayment(\AppBundle\Entity\Payments $payment)
    {
        $this->payments[] = $payment;

        return $this;
    }

    /**
     * Remove payment
     *
     * @param \AppBundle\Entity\Payments $payment
     */
    public function removePayment(\AppBundle\Entity\Payments $payment)
    {
        $this->payments->removeElement($payment);
    }

    /**
     * Get payments
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPayments()
    {
        return $this->payments;
    }

    /**
     * @return string
     */
    public function getCc()
    {
        return $this->cc;
    }

    /**
     * @param string $cc
     */
    public function setCc($cc)
    {
        $this->cc = $cc;
    }

}

