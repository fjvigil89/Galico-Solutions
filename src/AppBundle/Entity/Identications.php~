<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Identications
 *
 * @ORM\Table(name="identications", indexes={@ORM\Index(name="CustomerID", columns={"CustomerID"}), @ORM\Index(name="TechnicianID", columns={"TechnicianID"})})
 * @ORM\Entity
 */
class Identications
{
    /**
     * @var string
     *
     * @ORM\Column(name="IDType", type="string", length=30, nullable=false)
     */
    private $idtype;

    /**
     * @var string
     *
     * @ORM\Column(name="IDNumber", type="string", length=50, nullable=false)
     */
    private $idnumber;

    /**
     * @var string
     *
     * @ORM\Column(name="Picture", type="string", length=50, nullable=false)
     */
    private $picture;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdenticationID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $identicationid;

    /**
     * @var \AppBundle\Entity\Customers
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Customers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CustomerID", referencedColumnName="CustomerID")
     * })
     */
    private $customerid;

    /**
     * @var \AppBundle\Entity\Technicians
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Technicians")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="TechnicianID", referencedColumnName="TechnicianID")
     * })
     */
    private $technicianid;


}

