<?php


namespace models\Entities;
//use Doctrine\Mapping as ORM;

/**
 * MirembeCoffeePurchmentInspection
 *
 * @Table(name="mirembe_coffee_purchment_inspection")
 * @Entity
 */
class MirembeCoffeePurchmentInspection
{
    /**
     * @var integer
     *
     * @Column(name="purchmentID", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="AUTO")
     */
    private $purchmentid;

    /**
     * @var \DateTime
     *
     * @Column(name="dateOfDelivery", type="string", nullable=true)
     */
    private $dateofdelivery;

    /**
     * @var integer
     *
     * @Column(name="parishCode", type="integer", nullable=false)
     */
    private $parishcode;

    /**
     * @var integer
     *
     * @Column(name="cropID", type="integer", nullable=false)
     */
    private $cropid;

    /**
     * @var float
     *
     * @Column(name="moistureContent", type="float", nullable=true)
     */
    private $moisturecontent;

    /**
     * @var float
     *
     * @Column(name="defectPercentage", type="float", nullable=true)
     */
    private $defectpercentage;

    /**
     * @var boolean
     *
     * @Column(name="approvedOrRejected", type="boolean", nullable=false)
     */
    private $approvedorrejected;

    /**
     * @var string
     *
     * @Column(name="reasonsForDecision", type="string", length=255, nullable=true)
     */
    private $reasonsfordecision;

    /**
     * @var integer
     *
     * @Column(name="coffeeGradedBy", type="integer", nullable=false)
     */
    private $coffeegradedby;

    /**
     * @var integer
     *
     * @Column(name="certificationOfficer", type="integer", nullable=false)
     */
    private $certificationofficer;


    /**
     * Get purchmentid
     *
     * @return integer 
     */
    public function getPurchmentid()
    {
        return $this->purchmentid;
    }

    /**
     * Set dateofdelivery
     *
     * @param \DateTime $dateofdelivery
     * @return MirembeCoffeePurchmentInspection
     */
    public function setDateofdelivery($dateofdelivery)
    {
        $this->dateofdelivery = $dateofdelivery;
    
        return $this;
    }

    /**
     * Get dateofdelivery
     *
     * @return \DateTime 
     */
    public function getDateofdelivery()
    {
        return $this->dateofdelivery;
    }

    /**
     * Set parishcode
     *
     * @param integer $parishcode
     * @return MirembeCoffeePurchmentInspection
     */
    public function setParishcode($parishcode)
    {
        $this->parishcode = $parishcode;
    
        return $this;
    }

    /**
     * Get parishcode
     *
     * @return integer 
     */
    public function getParishcode()
    {
        return $this->parishcode;
    }

    /**
     * Set cropid
     *
     * @param integer $cropid
     * @return MirembeCoffeePurchmentInspection
     */
    public function setCropid($cropid)
    {
        $this->cropid = $cropid;
    
        return $this;
    }

    /**
     * Get cropid
     *
     * @return integer 
     */
    public function getCropid()
    {
        return $this->cropid;
    }

    /**
     * Set moisturecontent
     *
     * @param float $moisturecontent
     * @return MirembeCoffeePurchmentInspection
     */
    public function setMoisturecontent($moisturecontent)
    {
        $this->moisturecontent = $moisturecontent;
    
        return $this;
    }

    /**
     * Get moisturecontent
     *
     * @return float 
     */
    public function getMoisturecontent()
    {
        return $this->moisturecontent;
    }

    /**
     * Set defectpercentage
     *
     * @param float $defectpercentage
     * @return MirembeCoffeePurchmentInspection
     */
    public function setDefectpercentage($defectpercentage)
    {
        $this->defectpercentage = $defectpercentage;
    
        return $this;
    }

    /**
     * Get defectpercentage
     *
     * @return float 
     */
    public function getDefectpercentage()
    {
        return $this->defectpercentage;
    }

    /**
     * Set approvedorrejected
     *
     * @param boolean $approvedorrejected
     * @return MirembeCoffeePurchmentInspection
     */
    public function setApprovedorrejected($approvedorrejected)
    {
        $this->approvedorrejected = $approvedorrejected;
    
        return $this;
    }

    /**
     * Get approvedorrejected
     *
     * @return boolean 
     */
    public function getApprovedorrejected()
    {
        return $this->approvedorrejected;
    }

    /**
     * Set reasonsfordecision
     *
     * @param string $reasonsfordecision
     * @return MirembeCoffeePurchmentInspection
     */
    public function setReasonsfordecision($reasonsfordecision)
    {
        $this->reasonsfordecision = $reasonsfordecision;
    
        return $this;
    }

    /**
     * Get reasonsfordecision
     *
     * @return string 
     */
    public function getReasonsfordecision()
    {
        return $this->reasonsfordecision;
    }

    /**
     * Set coffeegradedby
     *
     * @param integer $coffeegradedby
     * @return MirembeCoffeePurchmentInspection
     */
    public function setCoffeegradedby($coffeegradedby)
    {
        $this->coffeegradedby = $coffeegradedby;
    
        return $this;
    }

    /**
     * Get coffeegradedby
     *
     * @return integer 
     */
    public function getCoffeegradedby()
    {
        return $this->coffeegradedby;
    }

    /**
     * Set certificationofficer
     *
     * @param integer $certificationofficer
     * @return MirembeCoffeePurchmentInspection
     */
    public function setCertificationofficer($certificationofficer)
    {
        $this->certificationofficer = $certificationofficer;
    
        return $this;
    }

    /**
     * Get certificationofficer
     *
     * @return integer 
     */
    public function getCertificationofficer()
    {
        return $this->certificationofficer;
    }
}
