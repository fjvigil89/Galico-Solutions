<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
    private $houseid;



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
     * Set houseid
     *
     * @param \AppBundle\Entity\Houses $houseid
     *
     * @return Requests
     */
    public function setHouseid(\AppBundle\Entity\Houses $houseid = null)
    {
        $this->houseid = $houseid;
    
        return $this;
    }

    /**
     * Get houseid
     *
     * @return \AppBundle\Entity\Houses
     */
    public function getHouseid()
    {
        return $this->houseid;
    }
}
