<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Plans
 *
 * @ORM\Table(name="plans", indexes={@ORM\Index(name="SubPlanID", columns={"SubPlanID"})})
 * @ORM\Entity
 */
class Plans
{
    /**
     * @var string
     *
     * @ORM\Column(name="PlanName", type="string", length=50, nullable=false)
     */
    private $planname;

    /**
     * @var integer
     *
     * @ORM\Column(name="PlanID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $planid;

    /**
     * @var \AppBundle\Entity\Plans
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Plans")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="SubPlanID", referencedColumnName="PlanID")
     * })
     */
    private $subplanid;


}

