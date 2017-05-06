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
    private $subscriptionid;



    /**
     * Set paymentdate
     *
     * @param \DateTime $paymentdate
     *
     * @return Payments
     */
    public function setPaymentdate($paymentdate)
    {
        $this->paymentdate = $paymentdate;
    
        return $this;
    }

    /**
     * Get paymentdate
     *
     * @return \DateTime
     */
    public function getPaymentdate()
    {
        return $this->paymentdate;
    }

    /**
     * Set amount
     *
     * @param string $amount
     *
     * @return Payments
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    
        return $this;
    }

    /**
     * Get amount
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Get paymentid
     *
     * @return integer
     */
    public function getPaymentid()
    {
        return $this->paymentid;
    }

    /**
     * Set subscriptionid
     *
     * @param \AppBundle\Entity\Subscriptions $subscriptionid
     *
     * @return Payments
     */
    public function setSubscriptionid(\AppBundle\Entity\Subscriptions $subscriptionid = null)
    {
        $this->subscriptionid = $subscriptionid;
    
        return $this;
    }

    /**
     * Get subscriptionid
     *
     * @return \AppBundle\Entity\Subscriptions
     */
    public function getSubscriptionid()
    {
        return $this->subscriptionid;
    }
}