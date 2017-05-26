<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * States
 *
 * @ORM\Table(name="states", indexes={@ORM\Index(name="CountryID", columns={"CountryID"})})
 * @ORM\Entity
 */
class States
{
    /**
     * @var string
     *
     * @ORM\Column(name="State", type="string", length=50, nullable=false)
     */
    private $state;

    /**
     * @var string
     *
     * @ORM\Column(name="StateCode", type="string", length=5, nullable=false)
     */
    private $statecode;

    /**
     * @var integer
     *
     * @ORM\Column(name="StateID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $stateid;

    /**
     * @var \AppBundle\Entity\Countries
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Countries")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CountryID", referencedColumnName="CountryID")
     * })
     */
    private $countryid;



    /**
     * Set state
     *
     * @param string $state
     *
     * @return States
     */
    public function setState($state)
    {
        $this->state = $state;
    
        return $this;
    }

    /**
     * Get state
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set statecode
     *
     * @param string $statecode
     *
     * @return States
     */
    public function setStatecode($statecode)
    {
        $this->statecode = $statecode;
    
        return $this;
    }

    /**
     * Get statecode
     *
     * @return string
     */
    public function getStatecode()
    {
        return $this->statecode;
    }

    /**
     * Get stateid
     *
     * @return integer
     */
    public function getStateid()
    {
        return $this->stateid;
    }

    /**
     * Set countryid
     *
     * @param \AppBundle\Entity\Countries $countryid
     *
     * @return States
     */
    public function setCountryid(\AppBundle\Entity\Countries $countryid = null)
    {
        $this->countryid = $countryid;
    
        return $this;
    }

    /**
     * Get countryid
     *
     * @return \AppBundle\Entity\Countries
     */
    public function getCountryid()
    {
        return $this->countryid;
    }
}
