<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
    private $houseid;

    /**
     * @var \AppBundle\Entity\Plans
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Plans")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="PlanID", referencedColumnName="PlanID")
     * })
     */
    private $planid;



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
     * Set houseid
     *
     * @param \AppBundle\Entity\Houses $houseid
     *
     * @return Subscriptions
     */
    public function setHouseid(\AppBundle\Entity\Houses $houseid = null)
    {
        $this->houseid = $houseid;
    
        return $this;
    }

    /**
     * Get houseid
     *
     * @return \AppBundle\Entity\Houses
     */
    public function getHouseid()
    {
        return $this->houseid;
    }

    /**
     * Set planid
     *
     * @param \AppBundle\Entity\Plans $planid
     *
     * @return Subscriptions
     */
    public function setPlanid(\AppBundle\Entity\Plans $planid = null)
    {
        $this->planid = $planid;
    
        return $this;
    }

    /**
     * Get planid
     *
     * @return \AppBundle\Entity\Plans
     */
    public function getPlanid()
    {
        return $this->planid;
    }
}
