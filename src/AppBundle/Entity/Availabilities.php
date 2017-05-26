<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Availabilities
 *
 * @ORM\Table(name="availabilities", indexes={@ORM\Index(name="TechnicianID", columns={"TechnicianID"})})
 * @ORM\Entity
 */
class Availabilities
{
    /**
     * @var string
     *
     * @ORM\Column(name="Day", type="string", length=15, nullable=false)
     */
    private $day;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="StartTime", type="time", nullable=false)
     */
    private $starttime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="EndTime", type="time", nullable=false)
     */
    private $endtime;

    /**
     * @var integer
     *
     * @ORM\Column(name="AvailabilityID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $availabilityid;

    /**
     * @var \AppBundle\Entity\Technicians
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Technicians")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="TechnicianID", referencedColumnName="TechnicianID")
     * })
     */
    private $technicianid;



    /**
     * Set day
     *
     * @param string $day
     *
     * @return Availabilities
     */
    public function setDay($day)
    {
        $this->day = $day;
    
        return $this;
    }

    /**
     * Get day
     *
     * @return string
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * Set starttime
     *
     * @param \DateTime $starttime
     *
     * @return Availabilities
     */
    public function setStarttime($starttime)
    {
        $this->starttime = $starttime;
    
        return $this;
    }

    /**
     * Get starttime
     *
     * @return \DateTime
     */
    public function getStarttime()
    {
        return $this->starttime;
    }

    /**
     * Set endtime
     *
     * @param \DateTime $endtime
     *
     * @return Availabilities
     */
    public function setEndtime($endtime)
    {
        $this->endtime = $endtime;
    
        return $this;
    }

    /**
     * Get endtime
     *
     * @return \DateTime
     */
    public function getEndtime()
    {
        return $this->endtime;
    }

    /**
     * Get availabilityid
     *
     * @return integer
     */
    public function getAvailabilityid()
    {
        return $this->availabilityid;
    }

    /**
     * Set technicianid
     *
     * @param \AppBundle\Entity\Technicians $technicianid
     *
     * @return Availabilities
     */
    public function setTechnicianid(\AppBundle\Entity\Technicians $technicianid = null)
    {
        $this->technicianid = $technicianid;
    
        return $this;
    }

    /**
     * Get technicianid
     *
     * @return \AppBundle\Entity\Technicians
     */
    public function getTechnicianid()
    {
        return $this->technicianid;
    }
}
