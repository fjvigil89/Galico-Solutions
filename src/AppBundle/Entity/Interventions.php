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
    private $request;

    /**
     * @var \AppBundle\Entity\Technicians
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Technicians")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="TechnicianID", referencedColumnName="TechnicianID")
     * })
     */
    private $technician;

    /**
     * @return \DateTime
     */
    public function getInterventiondate()
    {
        return $this->interventiondate;
    }

    /**
     * @param \DateTime $interventiondate
     */
    public function setInterventiondate($interventiondate)
    {
        $this->interventiondate = $interventiondate;
    }

    /**
     * @return string
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @param string $comments
     */
    public function setComments($comments)
    {
        $this->comments = $comments;
    }

    /**
     * @return int
     */
    public function getInterventionid()
    {
        return $this->interventionid;
    }

    /**
     * @param int $interventionid
     */
    public function setInterventionid($interventionid)
    {
        $this->interventionid = $interventionid;
    }

    /**
     * @return Requests
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param Requests $request
     */
    public function setRequest($request)
    {
        $this->request = $request;
    }

    /**
     * @return Technicians
     */
    public function getTechnician()
    {
        return $this->technician;
    }

    /**
     * @param Technicians $technicianid
     */
    public function setTechnician($technician)
    {
        $this->technician = $technician;
    }


}

