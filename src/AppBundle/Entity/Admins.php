<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Admins
 *
 * @ORM\Table(name="admins", indexes={@ORM\Index(name="LocalNumberID", columns={"LocalNumberID"})})
 * @ORM\Entity
 */
class Admins
{
    /**
     * @var string
     *
     * @ORM\Column(name="FirstName", type="string", length=50, nullable=false)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="LastName", type="string", length=50, nullable=false)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=100, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="Password", type="string", length=150, nullable=false)
     */
    private $password;

    /**
     * @var boolean
     *
     * @ORM\Column(name="IsSuperAdmin", type="boolean", nullable=false)
     */
    private $issuperadmin = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="AdminID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $adminid;

    /**
     * @var \AppBundle\Entity\Localnumbers
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Localnumbers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="LocalNumberID", referencedColumnName="LocalNumberID")
     * })
     */
    private $localnumberid;


}

