<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Technicians
 *
 * @ORM\Table(name="technicians")
 * @ORM\Entity
 */
class Technicians
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
     * @ORM\Column(name="PhonePrimary", type="string", length=15, nullable=false)
     */
    private $phoneprimary;

    /**
     * @var string
     *
     * @ORM\Column(name="PhoneAlternate", type="string", length=15, nullable=false)
     */
    private $phonealternate;

    /**
     * @var string
     *
     * @ORM\Column(name="Profession", type="string", length=50, nullable=false)
     */
    private $profession;

    /**
     * @var string
     *
     * @ORM\Column(name="IDType", type="string", length=50, nullable=false)
     */
    private $idtype;

    /**
     * @var string
     *
     * @ORM\Column(name="IDNumber", type="string", length=50, nullable=false)
     */
    private $idnumber;

    /**
     * @var string
     *
     * @ORM\Column(name="Code", type="string", length=15, nullable=false)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="Photo", type="text", length=65535, nullable=false)
     */
    private $photo;

    /**
     * @var string
     *
     * @ORM\Column(name="Country", type="string", length=50, nullable=false)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="State", type="string", length=50, nullable=false)
     */
    private $state;

    /**
     * @var string
     *
     * @ORM\Column(name="City", type="string", length=50, nullable=false)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="Address", type="string", length=50, nullable=false)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="ZipCode", type="string", length=10, nullable=false)
     */
    private $zipcode;

    /**
     * @var integer
     *
     * @ORM\Column(name="TechnicianID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $technicianid;

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
    public function getPhoneprimary()
    {
        return $this->phoneprimary;
    }

    /**
     * @param string $phoneprimary
     */
    public function setPhoneprimary($phoneprimary)
    {
        $this->phoneprimary = $phoneprimary;
    }

    /**
     * @return string
     */
    public function getPhonealternate()
    {
        return $this->phonealternate;
    }

    /**
     * @param string $phonealternate
     */
    public function setPhonealternate($phonealternate)
    {
        $this->phonealternate = $phonealternate;
    }

    /**
     * @return string
     */
    public function getProfession()
    {
        return $this->profession;
    }

    /**
     * @param string $profession
     */
    public function setProfession($profession)
    {
        $this->profession = $profession;
    }

    /**
     * @return string
     */
    public function getIdtype()
    {
        return $this->idtype;
    }

    /**
     * @param string $idtype
     */
    public function setIdtype($idtype)
    {
        $this->idtype = $idtype;
    }

    /**
     * @return string
     */
    public function getIdnumber()
    {
        return $this->idnumber;
    }

    /**
     * @param string $idnumber
     */
    public function setIdnumber($idnumber)
    {
        $this->idnumber = $idnumber;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param string $photo
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * @param string $zipcode
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;
    }

    /**
     * @return int
     */
    public function getTechnicianid()
    {
        return $this->technicianid;
    }

    /**
     * @param int $technicianid
     */
    public function setTechnicianid($technicianid)
    {
        $this->technicianid = $technicianid;
    }


}

