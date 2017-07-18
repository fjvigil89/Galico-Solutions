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
     * @var \AppBundle\Entity\Services
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Services")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ServiceID", referencedColumnName="ServiceID")
     * })
     */
    private $serviceid;

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
     * @return int
     */
    public function getPlanserviceid()
    {
        return $this->planserviceid;
    }

    /**
     * @param int $planserviceid
     */
    public function setPlanserviceid($planserviceid)
    {
        $this->planserviceid = $planserviceid;
    }

    /**
     * @return Services
     */
    public function getServiceid()
    {
        return $this->serviceid;
    }

    /**
     * @param Services $serviceid
     */
    public function setServiceid($serviceid)
    {
        $this->serviceid = $serviceid;
    }

    /**
     * @return Plans
     */
    public function getPlanid()
    {
        return $this->planid;
    }

    /**
     * @param Plans $planid
     */
    public function setPlanid($planid)
    {
        $this->planid = $planid;
    }


}

