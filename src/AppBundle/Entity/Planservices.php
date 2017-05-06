<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Planservices
 *
 * @ORM\Table(name="planservices", indexes={@ORM\Index(name="PlanID", columns={"PlanID", "ServiceID"}), @ORM\Index(name="FK_planservices_services", columns={"ServiceID"}), @ORM\Index(name="IDX_B9C5481C70573491", columns={"PlanID"})})
 * @ORM\Entity
 */
class Planservices
{
    /**
     * @var integer
     *
     * @ORM\Column(name="planserviceID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $planserviceid;

    /**
     * @var \AppBundle\Entity\Plans
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Plans")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="PlanID", referencedColumnName="PlanID")
     * })
     */
    private $planid;

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
     * Get planserviceid
     *
     * @return integer
     */
    public function getPlanserviceid()
    {
        return $this->planserviceid;
    }

    /**
     * Set planid
     *
     * @param \AppBundle\Entity\Plans $planid
     *
     * @return Planservices
     */
    public function setPlanid(\AppBundle\Entity\Plans $planid = null)
    {
        $this->planid = $planid;
    
        return $this;
    }

    /**
     * Get planid
     *
     * @return \AppBundle\Entity\Plans
     */
    public function getPlanid()
    {
        return $this->planid;
    }

    /**
     * Set serviceid
     *
     * @param \AppBundle\Entity\Services $serviceid
     *
     * @return Planservices
     */
    public function setServiceid(\AppBundle\Entity\Services $serviceid = null)
    {
        $this->serviceid = $serviceid;
    
        return $this;
    }

    /**
     * Get serviceid
     *
     * @return \AppBundle\Entity\Services
     */
    public function getServiceid()
    {
        return $this->serviceid;
    }
}
