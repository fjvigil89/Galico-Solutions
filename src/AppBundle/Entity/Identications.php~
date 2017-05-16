<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Identications
 *
 * @ORM\Table(name="identications", indexes={@ORM\Index(name="CustomerID", columns={"CustomerID"}), @ORM\Index(name="TechnicianID", columns={"TechnicianID"})})
 * @ORM\Entity
 */
class Identications
{
    /**
     * @var string
     *
     * @ORM\Column(name="IDType", type="string", length=30, nullable=false)
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
     * @ORM\Column(name="Picture", type="string", length=50, nullable=false)
     */
    private $picture;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdenticationID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $identicationid;

    /**
     * @var \AppBundle\Entity\Customers
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Customers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CustomerID", referencedColumnName="CustomerID")
     * })
     */
    private $customerid;

    /**
     * @var \AppBundle\Entity\Technicians
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Technicians")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="TechnicianID", referencedColumnName="TechnicianID")
     * })
     */
    private $technicianid;



    /**
     * Set idtype
     *
     * @param string $idtype
     *
     * @return Identications
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
     * @return Identications
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
     * Set picture
     *
     * @param string $picture
     *
     * @return Identications
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;
    
        return $this;
    }

    /**
     * Get picture
     *
     * @return string
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Get identicationid
     *
     * @return integer
     */
    public function getIdenticationid()
    {
        return $this->identicationid;
    }

    /**
     * Set customerid
     *
     * @param \AppBundle\Entity\Customers $customerid
     *
     * @return Identications
     */
    public function setCustomerid(\AppBundle\Entity\Customers $customerid = null)
    {
        $this->customerid = $customerid;
    
        return $this;
    }

    /**
     * Get customerid
     *
     * @return \AppBundle\Entity\Customers
     */
    public function getCustomerid()
    {
        return $this->customerid;
    }

    /**
     * Set technicianid
     *
     * @param \AppBundle\Entity\Technicians $technicianid
     *
     * @return Identications
     */
    public function setTechnicianid(\AppBundle\Entity\Technicians $technicianid = null)
    {
        $this->technicianid = $technicianid;
    
        return $this;
    }

    /**
     * Get technicianid
     *
     * @return \AppBundle\Entity\Technicians
     */
    public function getTechnicianid()
    {
        return $this->technicianid;
    }
}
