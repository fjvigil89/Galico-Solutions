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
     * @var string
     *
     * @ORM\Column(name="TaxPercentage", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $taxpercentage;

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
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return string
     */
    public function getStatecode()
    {
        return $this->statecode;
    }

    /**
     * @param string $statecode
     */
    public function setStatecode($statecode)
    {
        $this->statecode = $statecode;
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
    public function getStateid()
    {
        return $this->stateid;
    }

    /**
     * @param int $stateid
     */
    public function setStateid($stateid)
    {
        $this->stateid = $stateid;
    }

    /**
     * @return Countries
     */
    public function getCountryid()
    {
        return $this->countryid;
    }

    /**
     * @param Countries $countryid
     */
    public function setCountryid($countryid)
    {
        $this->countryid = $countryid;
    }


}

