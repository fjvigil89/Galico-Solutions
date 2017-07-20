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
    private $service;

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
     * @return int
     */
    public function getTechserviceid()
    {
        return $this->techserviceid;
    }

    /**
     * @param int $techserviceid
     */
    public function setTechserviceid($techserviceid)
    {
        $this->techserviceid = $techserviceid;
    }

    /**
     * @return Services
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * @param Services $service
     */
    public function setService($service)
    {
        $this->service = $service;
    }

    /**
     * @return Technicians
     */
    public function getTechnician()
    {
        return $this->technician;
    }

    /**
     * @param Technicians $technician
     */
    public function setTechnician($technician)
    {
        $this->technician = $technician;
    }


}

