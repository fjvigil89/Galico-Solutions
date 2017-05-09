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


}

