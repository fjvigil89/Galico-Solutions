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


}

