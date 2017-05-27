<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Subscriptions
 *
 * @ORM\Table(name="subscriptions", indexes={@ORM\Index(name="CustomerID", columns={"HouseID", "PlanID"}), @ORM\Index(name="FK_subscriptions_plans", columns={"PlanID"}), @ORM\Index(name="IDX_4778A014584412C", columns={"HouseID"})})
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
     * @var \AppBundle\Entity\Plans
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Plans")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="PlanID", referencedColumnName="PlanID")
     * })
     */
    private $plan;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Payments", mappedBy="subscription")
     */
    private $payments;

    public function __construct()
    {
        $this->payments = new ArrayCollection();
    }


    /**
     * Set subscriptiondate
     *
     * @param \DateTime $subscriptiondate
     *
     * @return Subscriptions
     */
    public function setSubscriptiondate($subscriptiondate)
    {
        $this->subscriptiondate = $subscriptiondate;
    
        return $this;
    }

    /**
     * Get subscriptiondate
     *
     * @return \DateTime
     */
    public function getSubscriptiondate()
    {
        return $this->subscriptiondate;
    }

    /**
     * Get subscriptionid
     *
     * @return integer
     */
    public function getSubscriptionid()
    {
        return $this->subscriptionid;
    }

    /**
     * Set house
     *
     * @param \AppBundle\Entity\Houses $house
     *
     * @return Subscriptions
     */
    public function setHouse(\AppBundle\Entity\Houses $house = null)
    {
        $this->house = $house;
    
        return $this;
    }

    /**
     * Get house
     *
     * @return \AppBundle\Entity\Houses
     */
    public function getHouse()
    {
        return $this->house;
    }

    /**
     * Set plan
     *
     * @param \AppBundle\Entity\Plans $plan
     *
     * @return Subscriptions
     */
    public function setPlan(\AppBundle\Entity\Plans $plan = null)
    {
        $this->plan = $plan;
    
        return $this;
    }

    /**
     * Get plan
     *
     * @return \AppBundle\Entity\Plans
     */
    public function getPlan()
    {
        return $this->plan;
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
     * @param \AppBundle\Entity\Payments payment
     */
    public function removeHouse(\AppBundle\Entity\Payments $payment)
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
}
