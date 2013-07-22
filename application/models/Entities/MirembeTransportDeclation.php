<?php


namespace models\Entities;
//use Doctrine\Mapping as ORM;

/**
 * MirembeTransportDeclation
 *
 * @Table(name="mirembe_transport_declation")
 * @Entity
 */
class MirembeTransportDeclation
{
    /**
     * @var integer
     *
     * @Column(name="transDeclarationID", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="AUTO")
     */
    private $transdeclarationid;

    /**
     * 
     *
     * @Column(name="dateOfTransportation", type="string", nullable=false)
     */
    private $dateoftransportation;

    /**
     * 
     *
     * @Column(name="vehicleRegistration", type="string", length=45, nullable=false)
     */
    private $vehicleregistration;

    /**
     * 
     *
     * @Column(name="loadingSite", type="string", length=45, nullable=false)
     */
    private $loadingsite;

    /**
     * @var string
     *
     * @Column(name="destination", type="string", length=45, nullable=true)
     */
    private $destination;

    /**
     * @var string
     *
     * @Column(name="commodity", type="string", length=45, nullable=false)
     */
    private $commodity;

    /**
     * @var float
     *
     * @Column(name="tonnage", type="float", nullable=true)
     */
    private $tonnage;

    /**
     * @var integer
     *
     * @Column(name="supervisorID", type="integer", nullable=true)
     */
    private $supervisorid;

    /**
     * 
     *
     * @Column(name="dateOfSupervision", type="string", nullable=true)
     */
    private $dateofsupervision;

    /**
     * 
     *
     * @Column(name="createdAt", type="date", nullable=true)
     */
    private $createdat;

    /**
     * @var \DateTime
     *
     * @Column(name="updatedAt", type="datetime", nullable=true)
     */
    private $updatedat;

    /**
     * @var string
     *
     * @Column(name="createdBy", type="string", length=45, nullable=true)
     */
    private $createdby;


    /**
     * Get transdeclarationid
     *
     * @return integer 
     */
    public function getTransdeclarationid()
    {
        return $this->transdeclarationid;
    }

    /**
     * Set dateoftransportation
     *
     * @param \DateTime $dateoftransportation
     * @return MirembeTransportDeclation
     */
    public function setDateoftransportation($dateoftransportation)
    {
        $this->dateoftransportation = $dateoftransportation;
    
        return $this;
    }

    /**
     * Get dateoftransportation
     *
     * @return \DateTime 
     */
    public function getDateoftransportation()
    {
        return $this->dateoftransportation;
    }

    /**
     * Set vehicleregistration
     *
     * @param string $vehicleregistration
     * @return MirembeTransportDeclation
     */
    public function setVehicleregistration($vehicleregistration)
    {
        $this->vehicleregistration = $vehicleregistration;
    
        return $this;
    }

    /**
     * Get vehicleregistration
     *
     * @return string 
     */
    public function getVehicleregistration()
    {
        return $this->vehicleregistration;
    }

    /**
     * Set loadingsite
     *
     * @param string $loadingsite
     * @return MirembeTransportDeclation
     */
    public function setLoadingsite($loadingsite)
    {
        $this->loadingsite = $loadingsite;
    
        return $this;
    }

    /**
     * Get loadingsite
     *
     * @return string 
     */
    public function getLoadingsite()
    {
        return $this->loadingsite;
    }

    /**
     * Set destination
     *
     * @param string $destination
     * @return MirembeTransportDeclation
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;
    
        return $this;
    }

    /**
     * Get destination
     *
     * @return string 
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Set commodity
     *
     * @param string $commodity
     * @return MirembeTransportDeclation
     */
    public function setCommodity($commodity)
    {
        $this->commodity = $commodity;
    
        return $this;
    }

    /**
     * Get commodity
     *
     * @return string 
     */
    public function getCommodity()
    {
        return $this->commodity;
    }

    /**
     * Set tonnage
     *
     * @param float $tonnage
     * @return MirembeTransportDeclation
     */
    public function setTonnage($tonnage)
    {
        $this->tonnage = $tonnage;
    
        return $this;
    }

    /**
     * Get tonnage
     *
     * @return float 
     */
    public function getTonnage()
    {
        return $this->tonnage;
    }

    /**
     * Set supervisorid
     *
     * @param integer $supervisorid
     * @return MirembeTransportDeclation
     */
    public function setSupervisorid($supervisorid)
    {
        $this->supervisorid = $supervisorid;
    
        return $this;
    }

    /**
     * Get supervisorid
     *
     * @return integer 
     */
    public function getSupervisorid()
    {
        return $this->supervisorid;
    }

    /**
     * Set dateofsupervision
     *
     * @param \DateTime $dateofsupervision
     * @return MirembeTransportDeclation
     */
    public function setDateofsupervision($dateofsupervision)
    {
        $this->dateofsupervision = $dateofsupervision;
    
        return $this;
    }

    /**
     * Get dateofsupervision
     *
     * @return \DateTime 
     */
    public function getDateofsupervision()
    {
        return $this->dateofsupervision;
    }

    /**
     * Set createdat
     *
     * @param \DateTime $createdat
     * @return MirembeTransportDeclation
     */
    public function setCreatedat($createdat)
    {
        $this->createdat = $createdat;
    
        return $this;
    }

    /**
     * Get createdat
     *
     * @return \DateTime 
     */
    public function getCreatedat()
    {
        return $this->createdat;
    }

    /**
     * Set updatedat
     *
     * @param \DateTime $updatedat
     * @return MirembeTransportDeclation
     */
    public function setUpdatedat($updatedat)
    {
        $this->updatedat = $updatedat;
    
        return $this;
    }

    /**
     * Get updatedat
     *
     * @return \DateTime 
     */
    public function getUpdatedat()
    {
        return $this->updatedat;
    }

    /**
     * Set createdby
     *
     * @param string $createdby
     * @return MirembeTransportDeclation
     */
    public function setCreatedby($createdby)
    {
        $this->createdby = $createdby;
    
        return $this;
    }

    /**
     * Get createdby
     *
     * @return string 
     */
    public function getCreatedby()
    {
        return $this->createdby;
    }
}
