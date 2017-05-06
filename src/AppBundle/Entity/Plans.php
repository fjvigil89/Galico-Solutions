<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @var string
     *
     * @ORM\Column(name="Price", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="Currency", type="string", length=10, nullable=false)
     */
    private $currency;

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
     * Set planname
     *
     * @param string $planname
     *
     * @return Plans
     */
    public function setPlanname($planname)
    {
        $this->planname = $planname;
    
        return $this;
    }

    /**
     * Get planname
     *
     * @return string
     */
    public function getPlanname()
    {
        return $this->planname;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return Plans
     */
    public function setPrice($price)
    {
        $this->price = $price;
    
        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set currency
     *
     * @param string $currency
     *
     * @return Plans
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    
        return $this;
    }

    /**
     * Get currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Get planid
     *
     * @return integer
     */
    public function getPlanid()
    {
        return $this->planid;
    }

    /**
     * Set subplanid
     *
     * @param \AppBundle\Entity\Plans $subplanid
     *
     * @return Plans
     */
    public function setSubplanid(\AppBundle\Entity\Plans $subplanid = null)
    {
        $this->subplanid = $subplanid;
    
        return $this;
    }

    /**
     * Get subplanid
     *
     * @return \AppBundle\Entity\Plans
     */
    public function getSubplanid()
    {
        return $this->subplanid;
    }
}
