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
     * Set interventiondate
     *
     * @param \DateTime $interventiondate
     *
     * @return Interventions
     */
    public function setInterventiondate($interventiondate)
    {
        $this->interventiondate = $interventiondate;
    
        return $this;
    }

    /**
     * Get interventiondate
     *
     * @return \DateTime
     */
    public function getInterventiondate()
    {
        return $this->interventiondate;
    }

    /**
     * Set comments
     *
     * @param string $comments
     *
     * @return Interventions
     */
    public function setComments($comments)
    {
        $this->comments = $comments;
    
        return $this;
    }

    /**
     * Get comments
     *
     * @return string
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Get interventionid
     *
     * @return integer
     */
    public function getInterventionid()
    {
        return $this->interventionid;
    }

    /**
     * Set request
     *
     * @param \AppBundle\Entity\Requests $request
     *
     * @return Interventions
     */
    public function setRequest(\AppBundle\Entity\Requests $request = null)
    {
        $this->request = $request;
    
        return $this;
    }

    /**
     * Get request
     *
     * @return \AppBundle\Entity\Requests
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Set technician
     *
     * @param \AppBundle\Entity\Technicians $technician
     *
     * @return Interventions
     */
    public function setTechnician(\AppBundle\Entity\Technicians $technician = null)
    {
        $this->technician = $technician;
    
        return $this;
    }

    /**
     * Get technician
     *
     * @return \AppBundle\Entity\Technicians
     */
    public function getTechnician()
    {
        return $this->technician;
    }
}
