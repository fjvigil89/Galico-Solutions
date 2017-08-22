<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
/**
 * Admins
 *
 * @ORM\Table(name="admins", indexes={@ORM\Index(name="LocalNumberID", columns={"LocalNumberID"})})
 * @ORM\Entity
 */
class Admins implements UserInterface, \Serializable
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


    //Mandatory implementation (UserInterface)
    public function getUsername()
    {
        return null;
    }

    public function getSalt()
    {
        // you *may* need a real salt depending on your encoder
        // see section on salt below
        return null;
    }


    public function getRoles()
    {
        return array('ROLE_ADMIN');
    }

    public function eraseCredentials()
    {
    }


    /**
     * String representation of object
     * @link http://php.net/manual/en/serializable.serialize.php
     * @return string the string representation of the object or null
     * @since 5.1.0
     */
    public function serialize()
    {
        return serialize(array(
            $this->adminid,
            $this->email,
            $this->password,
            // see section on salt below
            // $this->salt,
        ));
    }

    /**
     * Constructs the object
     * @link http://php.net/manual/en/serializable.unserialize.php
     * @param string $serialized <p>
     * The string representation of the object.
     * </p>
     * @return void
     * @since 5.1.0
     */
    public function unserialize($serialized)
    {
        list (
            $this->customerid,
            $this->email,
            $this->password,
            // see section on salt below
            // $this->salt
            ) = unserialize($serialized);
    }
}


