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
    private $issuperadmin;

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

    /**
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return bool
     */
    public function isIssuperadmin()
    {
        return $this->issuperadmin;
    }

    /**
     * @param bool $issuperadmin
     */
    public function setIssuperadmin($issuperadmin)
    {
        $this->issuperadmin = $issuperadmin;
    }

    /**
     * @return int
     */
    public function getAdminid()
    {
        return $this->adminid;
    }

    /**
     * @param int $adminid
     */
    public function setAdminid($adminid)
    {
        $this->adminid = $adminid;
    }

    /**
     * @return Localnumbers
     */
    public function getLocalnumberid()
    {
        return $this->localnumberid;
    }

    /**
     * @param Localnumbers $localnumberid
     */
    public function setLocalnumberid($localnumberid)
    {
        $this->localnumberid = $localnumberid;
    }


}

