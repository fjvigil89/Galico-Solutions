<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Techservices
 *
 * @ORM\Table(name="techservices", indexes={@ORM\Index(name="TechnicianID", columns={"TechnicianID", "ServiceID"}), @ORM\Index(name="FK_techservices_service", columns={"ServiceID"}), @ORM\Index(name="IDX_B661E451E894D557", columns={"TechnicianID"})})
 * @ORM\Entity
 */
class Techservices
{
    /**
     * @var integer
     *
     * @ORM\Column(name="TechServiceID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $techserviceid;

    /**
     * @var \AppBundle\Entity\Services
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Services")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ServiceID", referencedColumnName="ServiceID")
     * })
     */
    private $serviceid;

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

