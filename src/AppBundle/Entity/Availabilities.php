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
     * @return string
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * @param string $day
     */
    public function setDay($day)
    {
        $this->day = $day;
    }

    /**
     * @return \DateTime
     */
    public function getStarttime()
    {
        return $this->starttime;
    }

    /**
     * @param \DateTime $starttime
     */
    public function setStarttime($starttime)
    {
        $this->starttime = $starttime;
    }

    /**
     * @return \DateTime
     */
    public function getEndtime()
    {
        return $this->endtime;
    }

    /**
     * @param \DateTime $endtime
     */
    public function setEndtime($endtime)
    {
        $this->endtime = $endtime;
    }

    /**
     * @return int
     */
    public function getAvailabilityid()
    {
        return $this->availabilityid;
    }

    /**
     * @param int $availabilityid
     */
    public function setAvailabilityid($availabilityid)
    {
        $this->availabilityid = $availabilityid;
    }

    /**
     * @return Technicians
     */
    public function getTechnicianid()
    {
        return $this->technicianid;
    }

    /**
     * @param Technicians $technicianid
     */
    public function setTechnicianid($technicianid)
    {
        $this->technicianid = $technicianid;
    }


}

