<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Prices
 *
 * @ORM\Table(name="prices", indexes={@ORM\Index(name="CountryID", columns={"CountryID"}), @ORM\Index(name="PlanID", columns={"PlanID"})})
 * @ORM\Entity
 */
class Prices
{
    /**
     * @var string
     *
     * @ORM\Column(name="Price", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="TaxPercentage", type="decimal", precision=10, scale=3, nullable=false)
     */
    private $taxpercentage;

    /**
     * @var integer
     *
     * @ORM\Column(name="PriceID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $priceid;

    /**
     * @var \AppBundle\Entity\Countries
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Countries")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CountryID", referencedColumnName="CountryID")
     * })
     */
    private $country;

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
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Subscriptions", mappedBy="price")
     */
    private $subscriptions;


    public function __construct()
    {
        $this->subscriptions = new ArrayCollection();
    }

    /**
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param string $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getTaxpercentage()
    {
        return $this->taxpercentage;
    }

    /**
     * @param string $taxpercentage
     */
    public function setTaxpercentage($taxpercentage)
    {
        $this->taxpercentage = $taxpercentage;
    }

    /**
     * @return int
     */
    public function getPriceid()
    {
        return $this->priceid;
    }

    /**
     * @param int $priceid
     */
    public function setPriceid($priceid)
    {
        $this->priceid = $priceid;
    }

    /**
     * @return Countries
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param Countries $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return Plans
     */
    public function getPlan()
    {
        return $this->plan;
    }

    /**
     * @param Plans $plan
     */
    public function setPlan($plan)
    {
        $this->plan = $plan;
    }

    /**
     * Add subscription
     *
     * @param \AppBundle\Entity\Subscriptions $subscription
     *
     * @return Prices
     */
    public function addSubscription(\AppBundle\Entity\Subscriptions $subscription)
    {
        $this->subscriptions[] = $subscription;

        return $this;
    }

    /**
     * Remove subscription
     *
     * @param \AppBundle\Entity\Subscriptions $subscription
     */
    public function removeSubscription(\AppBundle\Entity\Subscriptions $subscription)
    {
        $this->subscriptions->removeElement($subscription);
    }

    /**
     * Get subscriptions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSubscriptions()
    {
        return $this->subscriptions;
    }


}

