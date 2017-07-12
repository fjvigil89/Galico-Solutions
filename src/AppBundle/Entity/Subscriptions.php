<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Subscriptions
 *
 * @ORM\Table(name="subscriptions", indexes={@ORM\Index(name="CustomerID", columns={"HouseID"}), @ORM\Index(name="PriceID", columns={"PriceID"})})
 * @ORM\Entity
 */
class Subscriptions
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="SubscriptionDate", type="date", nullable=false)
     */
    private $subscriptiondate;

    /**
     * @var string
     *
     * @ORM\Column(name="TransactionID", type="string", length=100, nullable=false)
     */
    private $transactionid;

    /**
     * @var integer
     *
     * @ORM\Column(name="SubscriptionID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $subscriptionid;

    /**
     * @var \AppBundle\Entity\Houses
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Houses")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="HouseID", referencedColumnName="HouseID")
     * })
     */
    private $houseid;

    /**
     * @var \AppBundle\Entity\Prices
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Prices")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="PriceID", referencedColumnName="PriceID")
     * })
     */
    private $priceid;


}

