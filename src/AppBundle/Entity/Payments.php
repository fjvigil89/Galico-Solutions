<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Payments
 *
 * @ORM\Table(name="payments", indexes={@ORM\Index(name="SubscriptionID", columns={"SubscriptionID"})})
 * @ORM\Entity
 */
class Payments
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="PaymentDate", type="date", nullable=false)
     */
    private $paymentdate;

    /**
     * @var string
     *
     * @ORM\Column(name="Amount", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $amount;

    /**
     * @var string
     *
     * @ORM\Column(name="tax", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $tax = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="InvoiceNumber", type="string", length=15, nullable=false)
     */
    private $invoicenumber;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=200, nullable=false)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="PaymentID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $paymentid;

    /**
     * @var \AppBundle\Entity\Subscriptions
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Subscriptions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="SubscriptionID", referencedColumnName="SubscriptionID")
     * })
     */
    private $subscriptionid;


}

