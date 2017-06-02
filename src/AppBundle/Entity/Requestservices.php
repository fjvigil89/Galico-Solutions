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
    private $request;

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
     * Get requestserviceid
     *
     * @return integer
     */
    public function getRequestserviceid()
    {
        return $this->requestserviceid;
    }

    /**
     * Set request
     *
     * @param \AppBundle\Entity\Requests $request
     *
     * @return Requestservices
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
     * Set service
     *
     * @param \AppBundle\Entity\Services $service
     *
     * @return Requestservices
     */
    public function setService(\AppBundle\Entity\Services $service = null)
    {
        $this->service = $service;
    
        return $this;
    }

    /**
     * Get service
     *
     * @return \AppBundle\Entity\Services
     */
    public function getService()
    {
        return $this->service;
    }
}
