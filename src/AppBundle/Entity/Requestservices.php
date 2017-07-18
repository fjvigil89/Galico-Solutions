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
     * @return int
     */
    public function getRequestserviceid()
    {
        return $this->requestserviceid;
    }

    /**
     * @param int $requestserviceid
     */
    public function setRequestserviceid($requestserviceid)
    {
        $this->requestserviceid = $requestserviceid;
    }

    /**
     * @return Requests
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param Requests $request
     */
    public function setRequest($request)
    {
        $this->request = $request;
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


}

