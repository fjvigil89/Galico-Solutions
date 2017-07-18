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
    private $country;

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return int
     */
    public function getLocalnumberid()
    {
        return $this->localnumberid;
    }

    /**
     * @param int $localnumberid
     */
    public function setLocalnumberid($localnumberid)
    {
        $this->localnumberid = $localnumberid;
    }

    /**
     * @return Countries
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param Countries $countryid
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }


}

