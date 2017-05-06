<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Interventions
 *
 * @ORM\Table(name="interventions", indexes={@ORM\Index(name="TechnicianID", columns={"TechnicianID", "RequestID"}), @ORM\Index(name="FK_interventions_requests", columns={"RequestID"}), @ORM\Index(name="IDX_5ADBAD7FE894D557", columns={"TechnicianID"})})
 * @ORM\Entity
 */
class Interventions
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="InterventionDate", type="date", nullable=false)
     */
    private $interventiondate;

    /**
     * @var string
     *
     * @ORM\Column(name="Comments", type="text", length=65535, nullable=false)
     */
    private $comments;

    /**
     * @var integer
     *
     * @ORM\Column(name="InterventionID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $interventionid;

    /**
     * @var \AppBundle\Entity\Requests
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Requests")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="RequestID", referencedColumnName="RequestID")
     * })
     */
    private $requestid;

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

