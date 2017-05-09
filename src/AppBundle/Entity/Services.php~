<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Services
 *
 * @ORM\Table(name="services")
 * @ORM\Entity
 */
class Services
{
    /**
     * @var string
     *
     * @ORM\Column(name="ServiceName", type="string", length=50, nullable=false)
     */
    private $servicename;

    /**
     * @var string
     *
     * @ORM\Column(name="Price", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $price;

    /**
     * @var integer
     *
     * @ORM\Column(name="ServiceID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $serviceid;


}

