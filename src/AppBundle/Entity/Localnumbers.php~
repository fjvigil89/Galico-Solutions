<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Localnumbers
 *
 * @ORM\Table(name="localnumbers", indexes={@ORM\Index(name="CountryID", columns={"CountryID"})})
 * @ORM\Entity
 */
class Localnumbers
{
    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=100, nullable=false)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=15, nullable=false)
     */
    private $phone;

    /**
     * @var integer
     *
     * @ORM\Column(name="LocalNumberID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $localnumberid;

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
     * Set city
     *
     * @param string $city
     *
     * @return Localnumbers
     */
    public function setCity($city)
    {
        $this->city = $city;
    
        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return Localnumbers
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    
        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Get localnumberid
     *
     * @return integer
     */
    public function getLocalnumberid()
    {
        return $this->localnumberid;
    }

    /**
     * Set countryid
     *
     * @param \AppBundle\Entity\Countries $countryid
     *
     * @return Localnumbers
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
