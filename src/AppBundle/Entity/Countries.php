<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @ORM\Column(name="CountryCode", type="string", length=5, nullable=false)
     */
    private $countrycode;

    /**
     * @var string
     *
     * @ORM\Column(name="CurrencyCode", type="string", length=5, nullable=true)
     */
    private $currencycode;

    /**
     * @var string
     *
     * @ORM\Column(name="Price", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $price = '0.00';

    /**
     * @var integer
     *
     * @ORM\Column(name="CountryID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $countryid;



    /**
     * Set country
     *
     * @param string $country
     *
     * @return Countries
     */
    public function setCountry($country)
    {
        $this->country = $country;
    
        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set countrycode
     *
     * @param string $countrycode
     *
     * @return Countries
     */
    public function setCountrycode($countrycode)
    {
        $this->countrycode = $countrycode;
    
        return $this;
    }

    /**
     * Get countrycode
     *
     * @return string
     */
    public function getCountrycode()
    {
        return $this->countrycode;
    }

    /**
     * Set currencycode
     *
     * @param string $currencycode
     *
     * @return Countries
     */
    public function setCurrencycode($currencycode)
    {
        $this->currencycode = $currencycode;
    
        return $this;
    }

    /**
     * Get currencycode
     *
     * @return string
     */
    public function getCurrencycode()
    {
        return $this->currencycode;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return Countries
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
     * Get countryid
     *
     * @return integer
     */
    public function getCountryid()
    {
        return $this->countryid;
    }
}
