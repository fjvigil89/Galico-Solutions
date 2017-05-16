<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Houses
 *
 * @ORM\Table(name="houses", indexes={@ORM\Index(name="CustomerID", columns={"CustomerID"})})
 * @ORM\Entity
 */
class Houses
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
     * @ORM\Column(name="Address", type="text", length=65535, nullable=false)
     */
    private $address;

    /**
     * @var integer
     *
     * @ORM\Column(name="HouseID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $houseid;

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
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Subscriptions", mappedBy="house")
     */
    private $subscriptions;

    public function __construct()
    {
        $this->subscriptions = new ArrayCollection();
    }



    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return Houses
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
     * @return Houses
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
     * Set phoneprimary
     *
     * @param string $phoneprimary
     *
     * @return Houses
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
     * @return Houses
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
     * Set country
     *
     * @param string $country
     *
     * @return Houses
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
     * @return Houses
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
     * @return Houses
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
     * @return Houses
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
     * Get houseid
     *
     * @return integer
     */
    public function getHouseid()
    {
        return $this->houseid;
    }

    /**
     * Set customerid
     *
     * @param \AppBundle\Entity\Customers $customerid
     *
     * @return Houses
     */
    public function setCustomer(\AppBundle\Entity\Customers $customer = null)
    {
        $this->customer = $customer;
    
        return $this;
    }

    /**
     * Get customerid
     *
     * @return \AppBundle\Entity\Customers
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Add subscription
     *
     * @param \AppBundle\Entity\Subscriptions $subscription
     *
     * @return Houses
     */
    public function addSubscription(\AppBundle\Entity\Subscriptions $subscription)
    {
        $this->subscriptions[] = $subscription;
    
        return $this;
    }

    /**
     * Remove subscription
     *
     * @param \AppBundle\Entity\Subscriptions $subscription
     */
    public function removeSubscription(\AppBundle\Entity\Subscriptions $subscription)
    {
        $this->subscriptions->removeElement($subscription);
    }

    /**
     * Get subscriptions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSubscriptions()
    {
        return $this->subscriptions;
    }
}
