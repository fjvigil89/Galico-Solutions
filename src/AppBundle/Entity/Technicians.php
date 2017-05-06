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
     * @ORM\Column(name="ServiceProvided", type="string", length=100, nullable=false)
     */
    private $serviceprovided;

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
     * Set firstname
     *
     * @param string $firstname
     *
     * @return Technicians
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    
        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return Technicians
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    
        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Technicians
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set phoneprimary
     *
     * @param string $phoneprimary
     *
     * @return Technicians
     */
    public function setPhoneprimary($phoneprimary)
    {
        $this->phoneprimary = $phoneprimary;
    
        return $this;
    }

    /**
     * Get phoneprimary
     *
     * @return string
     */
    public function getPhoneprimary()
    {
        return $this->phoneprimary;
    }

    /**
     * Set phonealternate
     *
     * @param string $phonealternate
     *
     * @return Technicians
     */
    public function setPhonealternate($phonealternate)
    {
        $this->phonealternate = $phonealternate;
    
        return $this;
    }

    /**
     * Get phonealternate
     *
     * @return string
     */
    public function getPhonealternate()
    {
        return $this->phonealternate;
    }

    /**
     * Set profession
     *
     * @param string $profession
     *
     * @return Technicians
     */
    public function setProfession($profession)
    {
        $this->profession = $profession;
    
        return $this;
    }

    /**
     * Get profession
     *
     * @return string
     */
    public function getProfession()
    {
        return $this->profession;
    }

    /**
     * Set serviceprovided
     *
     * @param string $serviceprovided
     *
     * @return Technicians
     */
    public function setServiceprovided($serviceprovided)
    {
        $this->serviceprovided = $serviceprovided;
    
        return $this;
    }

    /**
     * Get serviceprovided
     *
     * @return string
     */
    public function getServiceprovided()
    {
        return $this->serviceprovided;
    }

    /**
     * Set idtype
     *
     * @param string $idtype
     *
     * @return Technicians
     */
    public function setIdtype($idtype)
    {
        $this->idtype = $idtype;
    
        return $this;
    }

    /**
     * Get idtype
     *
     * @return string
     */
    public function getIdtype()
    {
        return $this->idtype;
    }

    /**
     * Set idnumber
     *
     * @param string $idnumber
     *
     * @return Technicians
     */
    public function setIdnumber($idnumber)
    {
        $this->idnumber = $idnumber;
    
        return $this;
    }

    /**
     * Get idnumber
     *
     * @return string
     */
    public function getIdnumber()
    {
        return $this->idnumber;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return Technicians
     */
    public function setCode($code)
    {
        $this->code = $code;
    
        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return Technicians
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
    
        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return Technicians
     */
    public function setCountry($country)
    {
        $this->country = $country;
    
        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set state
     *
     * @param string $state
     *
     * @return Technicians
     */
    public function setState($state)
    {
        $this->state = $state;
    
        return $this;
    }

    /**
     * Get state
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Technicians
     */
    public function setCity($city)
    {
        $this->city = $city;
    
        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return Technicians
     */
    public function setAddress($address)
    {
        $this->address = $address;
    
        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set zipcode
     *
     * @param string $zipcode
     *
     * @return Technicians
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;
    
        return $this;
    }

    /**
     * Get zipcode
     *
     * @return string
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * Get technicianid
     *
     * @return integer
     */
    public function getTechnicianid()
    {
        return $this->technicianid;
    }
}
