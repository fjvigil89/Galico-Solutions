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
    private $customer;

    /**
     * @var \AppBundle\Entity\Technicians
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Technicians")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="TechnicianID", referencedColumnName="TechnicianID")
     * })
     */
    private $technician;

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
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * @param string $picture
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;
    }

    /**
     * @return int
     */
    public function getIdenticationid()
    {
        return $this->identicationid;
    }

    /**
     * @param int $identicationid
     */
    public function setIdenticationid($identicationid)
    {
        $this->identicationid = $identicationid;
    }

    /**
     * @return Customers
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param Customers $customer
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;
    }

    /**
     * @return Technicians
     */
    public function getTechnician()
    {
        return $this->technician;
    }

    /**
     * @param Technicians $technician
     */
    public function setTechnician($technician)
    {
        $this->technician = $technician;
    }


}

