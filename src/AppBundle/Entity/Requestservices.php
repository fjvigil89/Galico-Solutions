<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Requestservices
 *
 * @ORM\Table(name="requestservices", indexes={@ORM\Index(name="RequestID", columns={"RequestID", "ServiceID"}), @ORM\Index(name="FK_Requestservices_services", columns={"ServiceID"}), @ORM\Index(name="IDX_2D5E724318FCD26A", columns={"RequestID"})})
 * @ORM\Entity
 */
class Requestservices
{
    /**
     * @var integer
     *
     * @ORM\Column(name="RequestServiceID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $requestserviceid;

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
     * @var \AppBundle\Entity\Services
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Services")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ServiceID", referencedColumnName="ServiceID")
     * })
     */
    private $serviceid;



    /**
     * Get requestserviceid
     *
     * @return integer
     */
    public function getRequestserviceid()
    {
        return $this->requestserviceid;
    }

    /**
     * Set requestid
     *
     * @param \AppBundle\Entity\Requests $requestid
     *
     * @return Requestservices
     */
    public function setRequestid(\AppBundle\Entity\Requests $requestid = null)
    {
        $this->requestid = $requestid;
    
        return $this;
    }

    /**
     * Get requestid
     *
     * @return \AppBundle\Entity\Requests
     */
    public function getRequestid()
    {
        return $this->requestid;
    }

    /**
     * Set serviceid
     *
     * @param \AppBundle\Entity\Services $serviceid
     *
     * @return Requestservices
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
