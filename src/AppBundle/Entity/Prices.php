<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prices
 *
 * @ORM\Table(name="prices", indexes={@ORM\Index(name="CountryID", columns={"CountryID"}), @ORM\Index(name="PlanID", columns={"PlanID"})})
 * @ORM\Entity
 */
class Prices
{
    /**
     * @var string
     *
     * @ORM\Column(name="Price", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $price = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="TaxPercentage", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $taxpercentage = '0.00';

    /**
     * @var integer
     *
     * @ORM\Column(name="PriceID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $priceid;

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
     * @var \AppBundle\Entity\Plans
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Plans")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="PlanID", referencedColumnName="PlanID")
     * })
     */
    private $planid;


}

