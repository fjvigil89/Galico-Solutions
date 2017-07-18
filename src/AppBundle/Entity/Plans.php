<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Plans
 *
 * @ORM\Table(name="plans", indexes={@ORM\Index(name="SubPlanID", columns={"SubPlanID"})})
 * @ORM\Entity
 */
class Plans
{
    /**
     * @var string
     *
     * @ORM\Column(name="PlanName", type="string", length=50, nullable=false)
     */
    private $planname;

    /**
     * @var integer
     *
     * @ORM\Column(name="PlanID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $planid;

    /**
     * @var \AppBundle\Entity\Plans
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Plans")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="SubPlanID", referencedColumnName="PlanID")
     * })
     */
    private $subplanid;


    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Prices", mappedBy="plan")
     */
    private $prices;

    public function __construct()
    {
        $this->prices = new ArrayCollection();
    }

    /**
     * @return string
     */
    public function getPlanname()
    {
        return $this->planname;
    }

    /**
     * @param string $planname
     */
    public function setPlanname($planname)
    {
        $this->planname = $planname;
    }

    /**
     * @return int
     */
    public function getPlanid()
    {
        return $this->planid;
    }

    /**
     * @param int $planid
     */
    public function setPlanid($planid)
    {
        $this->planid = $planid;
    }

    /**
     * @return Plans
     */
    public function getSubplanid()
    {
        return $this->subplanid;
    }

    /**
     * @param Plans $subplanid
     */
    public function setSubplanid($subplanid)
    {
        $this->subplanid = $subplanid;
    }


    /**
     * Add price
     *
     * @param \AppBundle\Entity\Prices $price
     *
     * @return Plans
     */
    public function addPrice(\AppBundle\Entity\Prices $price)
    {
        $this->prices[] = $price;

        return $this;
    }

    /**
     * Remove price
     *
     * @param \AppBundle\Entity\Prices $price
     */
    public function removePrice(\AppBundle\Entity\Prices $price)
    {
        $this->prices->removeElement($price);
    }

    /**
     * Get prices
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPrices()
    {
        return $this->prices;
    }

}

