<?php


namespace models\Entities;
//use Doctrine\Mapping as ORM;

/**
 * MirembeExcessDelivery
 *
 * @Table(name="mirembe_excess_delivery")
 * @Entity
 */
class MirembeExcessDelivery
{
    /**
     * @var integer
     *
     * @Column(name="excessDeliveryReportID", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $excessdeliveryreportid;

    /**
     * @var integer
     *
     * @Column(name="farmerID", type="integer", nullable=false)
     */
    private $farmerid;

    /**
     * @var integer
     *
     * @Column(name="cropID", type="integer", nullable=true)
     */
    private $cropid;

    /**
     * 
     *
     * @Column(name="dateOfReporting", type="string", nullable=true)
     */
    private $dateofreporting;

    /**
     * 
     *
     * @Column(name="dateOfInspection", type="string", nullable=true)
     */
    private $dateofinspection;

    /**
     * @var integer
     *
     * @Column(name="facilitatorID", type="integer", nullable=false)
     */
    private $facilitatorid;

    /**
     * @var string
     *
     * @Column(name="reasonsForExcessDelivery", type="string", length=255, nullable=true)
     */
    private $reasonsforexcessdelivery;

    /**
     * @var boolean
     *
     * @Column(name="reasonForExcessProductionValid", type="boolean", nullable=true)
     */
    private $reasonforexcessproductionvalid;

    /**
     * @var boolean
     *
     * @Column(name="anyRisks", type="boolean", nullable=true)
     */
    private $anyrisks;

    /**
     * @var string
     *
     * @Column(name="actionsTaken", type="string", length=255, nullable=true)
     */
    private $actionstaken;

    /**
     * @var boolean
     *
     * @Column(name="excessProductionAcceptable", type="boolean", nullable=true)
     */
    private $excessproductionacceptable;


    /**
     * Get excessdeliveryreportid
     *
     * @return integer 
     */
    public function getExcessdeliveryreportid()
    {
        return $this->excessdeliveryreportid;
    }

    /**
     * Set farmerid
     *
     * @param integer $farmerid
     * @return MirembeExcessDelivery
     */
    public function setFarmerid($farmerid)
    {
        $this->farmerid = $farmerid;
    
        return $this;
    }

    /**
     * Get farmerid
     *
     * @return integer 
     */
    public function getFarmerid()
    {
        return $this->farmerid;
    }

    /**
     * Set cropid
     *
     * @param integer $cropid
     * @return MirembeExcessDelivery
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
     * Set dateofreporting
     *
     * @param \DateTime $dateofreporting
     * @return MirembeExcessDelivery
     */
    public function setDateofreporting($dateofreporting)
    {
        $this->dateofreporting = $dateofreporting;
    
        return $this;
    }

    /**
     * Get dateofreporting
     *
     * @return \DateTime 
     */
    public function getDateofreporting()
    {
        return $this->dateofreporting;
    }

    /**
     * Set dateofinspection
     *
     * @param \DateTime $dateofinspection
     * @return MirembeExcessDelivery
     */
    public function setDateofinspection($dateofinspection)
    {
        $this->dateofinspection = $dateofinspection;
    
        return $this;
    }

    /**
     * Get dateofinspection
     *
     * @return \DateTime 
     */
    public function getDateofinspection()
    {
        return $this->dateofinspection;
    }

    /**
     * Set facilitatorid
     *
     * @param integer $facilitatorid
     * @return MirembeExcessDelivery
     */
    public function setFacilitatorid($facilitatorid)
    {
        $this->facilitatorid = $facilitatorid;
    
        return $this;
    }

    /**
     * Get facilitatorid
     *
     * @return integer 
     */
    public function getFacilitatorid()
    {
        return $this->facilitatorid;
    }

    /**
     * Set reasonsforexcessdelivery
     *
     * @param string $reasonsforexcessdelivery
     * @return MirembeExcessDelivery
     */
    public function setReasonsforexcessdelivery($reasonsforexcessdelivery)
    {
        $this->reasonsforexcessdelivery = $reasonsforexcessdelivery;
    
        return $this;
    }

    /**
     * Get reasonsforexcessdelivery
     *
     * @return string 
     */
    public function getReasonsforexcessdelivery()
    {
        return $this->reasonsforexcessdelivery;
    }

    /**
     * Set reasonforexcessproductionvalid
     *
     * @param boolean $reasonforexcessproductionvalid
     * @return MirembeExcessDelivery
     */
    public function setReasonforexcessproductionvalid($reasonforexcessproductionvalid)
    {
        $this->reasonforexcessproductionvalid = $reasonforexcessproductionvalid;
    
        return $this;
    }

    /**
     * Get reasonforexcessproductionvalid
     *
     * @return boolean 
     */
    public function getReasonforexcessproductionvalid()
    {
        return $this->reasonforexcessproductionvalid;
    }

    /**
     * Set anyrisks
     *
     * @param boolean $anyrisks
     * @return MirembeExcessDelivery
     */
    public function setAnyrisks($anyrisks)
    {
        $this->anyrisks = $anyrisks;
    
        return $this;
    }

    /**
     * Get anyrisks
     *
     * @return boolean 
     */
    public function getAnyrisks()
    {
        return $this->anyrisks;
    }

    /**
     * Set actionstaken
     *
     * @param string $actionstaken
     * @return MirembeExcessDelivery
     */
    public function setActionstaken($actionstaken)
    {
        $this->actionstaken = $actionstaken;
    
        return $this;
    }

    /**
     * Get actionstaken
     *
     * @return string 
     */
    public function getActionstaken()
    {
        return $this->actionstaken;
    }

    /**
     * Set excessproductionacceptable
     *
     * @param boolean $excessproductionacceptable
     * @return MirembeExcessDelivery
     */
    public function setExcessproductionacceptable($excessproductionacceptable)
    {
        $this->excessproductionacceptable = $excessproductionacceptable;
    
        return $this;
    }

    /**
     * Get excessproductionacceptable
     *
     * @return boolean 
     */
    public function getExcessproductionacceptable()
    {
        return $this->excessproductionacceptable;
    }
}
