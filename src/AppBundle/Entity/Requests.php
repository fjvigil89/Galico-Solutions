<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Requests
 *
 * @ORM\Table(name="requests", indexes={@ORM\Index(name="HouseID", columns={"HouseID"})})
 * @ORM\Entity
 */
class Requests
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="RequestDate", type="date", nullable=false)
     */
    private $requestdate;

    /**
     * @var string
     *
     * @ORM\Column(name="Details", type="text", length=65535, nullable=false)
     */
    private $details;

    /**
     * @var string
     *
     * @ORM\Column(name="Status", type="string", length=20, nullable=false)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="RequestID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $requestid;

    /**
     * @var \AppBundle\Entity\Houses
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Houses")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="HouseID", referencedColumnName="HouseID")
     * })
     */
    private $house;

    /**
 * @ORM\OneToMany(targetEntity="AppBundle\Entity\Interventions", mappedBy="request")
 */
    private $interventions;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Requestservices", mappedBy="request")
     */
    private $requestservices;

    public function __construct()
    {
        $this->interventions = new ArrayCollection();
        $this->requestservices = new ArrayCollection();
    }

    /**
     * Set requestdate
     *
     * @param \DateTime $requestdate
     *
     * @return Requests
     */
    public function setRequestdate($requestdate)
    {
        $this->requestdate = $requestdate;
    
        return $this;
    }

    /**
     * Get requestdate
     *
     * @return \DateTime
     */
    public function getRequestdate()
    {
        return $this->requestdate;
    }

    /**
     * Set details
     *
     * @param string $details
     *
     * @return Requests
     */
    public function setDetails($details)
    {
        $this->details = $details;
    
        return $this;
    }

    /**
     * Get details
     *
     * @return string
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Requests
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Get requestid
     *
     * @return integer
     */
    public function getRequestid()
    {
        return $this->requestid;
    }

    /**
     * Set house
     *
     * @param \AppBundle\Entity\Houses $houseid
     *
     * @return Requests
     */
    public function setHouse(\AppBundle\Entity\Houses $house = null)
    {
        $this->house = $house;
    
        return $this;
    }

    /**
     * Get house
     *
     * @return \AppBundle\Entity\Houses
     */
    public function getHouse()
    {
        return $this->house;
    }

    /**
     * Add intervention
     *
     * @param \AppBundle\Entity\Interventions $intervention
     *
     * @return Requests
     */
    public function addIntervention(\AppBundle\Entity\Interventions $intervention)
    {
        $this->interventions[] = $intervention;

        return $this;
    }

    /**
     * Remove intervention
     *
     * @param \AppBundle\Entity\Interventions $intervention
     */
    public function removeIntervention(\AppBundle\Entity\Interventions $intervention)
    {
        $this->interventions->removeElement($intervention);
    }

    /**
     * Get interventions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getInterventions()
    {
        return $this->interventions;
    }


    /**
     * Add requestservice
     *
     * @param \AppBundle\Entity\Requestservices $requestservice
     *
     * @return Requests
     */
    public function addRequestService(\AppBundle\Entity\Requestservices $requestservice)
    {
        $this->requestservices[] = $requestservice;

        return $this;
    }

    /**
     * Remove requestservice
     *
     * @param \AppBundle\Entity\Requestservices $requestservice
     */
    public function removeRequestService(\AppBundle\Entity\Interventions $requestservice)
    {
        $this->requestservices->removeElement($requestservice);
    }

    /**
     * Get requestservices
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRequestServices()
    {
        return $this->requestservices;
    }

}
