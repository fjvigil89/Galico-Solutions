<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Countries
 *
 * @ORM\Table(name="countries")
 * @ORM\Entity
 */
class Countries
{
    /**
     * @var string
     *
     * @ORM\Column(name="Country", type="string", length=50, nullable=false)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="CountryISO2", type="string", length=5, nullable=false)
     */
    private $countryiso2;

    /**
     * @var string
     *
     * @ORM\Column(name="CountryISO3", type="string", length=5, nullable=false)
     */
    private $countryiso3;

    /**
     * @var string
     *
     * @ORM\Column(name="CurrencyISO", type="string", length=5, nullable=true)
     */
    private $currencyiso;

    /**
     * @var integer
     *
     * @ORM\Column(name="CountryID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $countryid;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Localnumbers", mappedBy="country")
     */
    private $localNumbers;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Prices", mappedBy="country")
     */
    private $prices;


    public function __construct()
    {
        $this->localNumbers = new ArrayCollection();
        $this->prices = new ArrayCollection();
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return string
     */
    public function getCountryiso2()
    {
        return $this->countryiso2;
    }

    /**
     * @param string $countryiso2
     */
    public function setCountryiso2($countryiso2)
    {
        $this->countryiso2 = $countryiso2;
    }

    /**
     * @return string
     */
    public function getCountryiso3()
    {
        return $this->countryiso3;
    }

    /**
     * @param string $countryiso3
     */
    public function setCountryiso3($countryiso3)
    {
        $this->countryiso3 = $countryiso3;
    }

    /**
     * @return string
     */
    public function getCurrencyiso()
    {
        return $this->currencyiso;
    }

    /**
     * @param string $currencyiso
     */
    public function setCurrencyiso($currencyiso)
    {
        $this->currencyiso = $currencyiso;
    }

    /**
     * @return int
     */
    public function getCountryid()
    {
        return $this->countryid;
    }

    /**
     * @param int $countryid
     */
    public function setCountryid($countryid)
    {
        $this->countryid = $countryid;
    }

    /**
     * Add localNumber
     *
     * @param \AppBundle\Entity\Localnumbers $localNumber
     *
     * @return Countries
     */
    public function addLocalNumber(\AppBundle\Entity\Localnumbers $localNumber)
    {
        $this->localNumbers[] = $localNumber;

        return $this;
    }

    /**
     * Remove localNumber
     *
     * @param \AppBundle\Entity\Localnumbers $localNumber
     */
    public function removeLocalNumber(\AppBundle\Entity\Localnumbers $localNumber)
    {
        $this->localNumbers->removeElement($localNumber);
    }

    /**
     * Get localNumbers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLocalNumbers()
    {
        return $this->localNumbers;
    }

    /**
     * Add price
     *
     * @param \AppBundle\Entity\Prices $price
     *
     * @return Countries
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

