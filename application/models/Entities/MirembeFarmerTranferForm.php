<?php


namespace models\Entities;
//use Doctrine\Mapping as ORM;

/**
 * MirembeFarmerTranferForm
 *
 * @Table(name="mirembe_farmer_tranfer_form")
 * @Entity
 */
class MirembeFarmerTranferForm
{
    /**
     * @var integer
     *
     * @Column(name="recordID", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="AUTO")
     */
    private $recordid;

    /**
     * @var integer
     *
     * @Column(name="transferredFrom", type="integer", nullable=false)
     */
    private $transferredfrom;

    /**
     * @var integer
     *
     * @Column(name="cropID", type="integer", nullable=false)
     */
    private $cropid;

    /**
     * @var integer
     *
     * @Column(name="transferReceivedBy", type="integer", nullable=false)
     */
    private $transferreceivedby;

    /**
     * @var string
     *
     * @Column(name="transferWitnessedBy", type="string", length=45, nullable=true)
     */
    private $transferwitnessedby;

    /**
     * 
     *
     * @Column(name="dateFilled", type="string", length=45, nullable=true)
     */
    private $datefilled;

    /**
     * @var float
     *
     * @Column(name="cropWeight", type="float", nullable=true)
     */
    private $cropweight;

    /**
     * @var float
     *
     * @Column(name="cropMoistureContent", type="float", nullable=true)
     */
    private $cropmoisturecontent;

    /**
     * 
     *
     * @Column(name="dateOfWitness", type="string", nullable=true)
     */
    private $dateofwitness;

    /**
     * 
     *
     * @Column(name="createdAt", type="datetime", nullable=true)
     */
    private $createdat;

    /**
     * @var \DateTime
     *
     * @Column(name="createdBy", type="datetime", nullable=true)
     */
    private $createdby;

    /**
     * @var \DateTime
     *
     * @Column(name="updatedAt", type="datetime", nullable=true)
     */
    private $updatedat;


    /**
     * Get recordid
     *
     * @return integer 
     */
    public function getRecordid()
    {
        return $this->recordid;
    }

    /**
     * Set transferredfrom
     *
     * @param integer $transferredfrom
     * @return MirembeFarmerTranferForm
     */
    public function setTransferredfrom($transferredfrom)
    {
        $this->transferredfrom = $transferredfrom;
    
        return $this;
    }

    /**
     * Get transferredfrom
     *
     * @return integer 
     */
    public function getTransferredfrom()
    {
        return $this->transferredfrom;
    }

    /**
     * Set cropid
     *
     * @param integer $cropid
     * @return MirembeFarmerTranferForm
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
     * Set transferreceivedby
     *
     * @param integer $transferreceivedby
     * @return MirembeFarmerTranferForm
     */
    public function setTransferreceivedby($transferreceivedby)
    {
        $this->transferreceivedby = $transferreceivedby;
    
        return $this;
    }

    /**
     * Get transferreceivedby
     *
     * @return integer 
     */
    public function getTransferreceivedby()
    {
        return $this->transferreceivedby;
    }

    /**
     * Set transferwitnessedby
     *
     * @param string $transferwitnessedby
     * @return MirembeFarmerTranferForm
     */
    public function setTransferwitnessedby($transferwitnessedby)
    {
        $this->transferwitnessedby = $transferwitnessedby;
    
        return $this;
    }

    /**
     * Get transferwitnessedby
     *
     * @return string 
     */
    public function getTransferwitnessedby()
    {
        return $this->transferwitnessedby;
    }

    /**
     * Set datefilled
     *
     * @param string $datefilled
     * @return MirembeFarmerTranferForm
     */
    public function setDatefilled($datefilled)
    {
        $this->datefilled = $datefilled;
    
        return $this;
    }

    /**
     * Get datefilled
     *
     * @return string 
     */
    public function getDatefilled()
    {
        return $this->datefilled;
    }

    /**
     * Set cropweight
     *
     * @param float $cropweight
     * @return MirembeFarmerTranferForm
     */
    public function setCropweight($cropweight)
    {
        $this->cropweight = $cropweight;
    
        return $this;
    }

    /**
     * Get cropweight
     *
     * @return float 
     */
    public function getCropweight()
    {
        return $this->cropweight;
    }

    /**
     * Set cropmoisturecontent
     *
     * @param float $cropmoisturecontent
     * @return MirembeFarmerTranferForm
     */
    public function setCropmoisturecontent($cropmoisturecontent)
    {
        $this->cropmoisturecontent = $cropmoisturecontent;
    
        return $this;
    }

    /**
     * Get cropmoisturecontent
     *
     * @return float 
     */
    public function getCropmoisturecontent()
    {
        return $this->cropmoisturecontent;
    }

    /**
     * Set dateofwitness
     *
     * @param \DateTime $dateofwitness
     * @return MirembeFarmerTranferForm
     */
    public function setDateofwitness($dateofwitness)
    {
        $this->dateofwitness = $dateofwitness;
    
        return $this;
    }

    /**
     * Get dateofwitness
     *
     * @return \DateTime 
     */
    public function getDateofwitness()
    {
        return $this->dateofwitness;
    }

    /**
     * Set createdat
     *
     * @param \DateTime $createdat
     * @return MirembeFarmerTranferForm
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
     * Set createdby
     *
     * @param \DateTime $createdby
     * @return MirembeFarmerTranferForm
     */
    public function setCreatedby($createdby)
    {
        $this->createdby = $createdby;
    
        return $this;
    }

    /**
     * Get createdby
     *
     * @return \DateTime 
     */
    public function getCreatedby()
    {
        return $this->createdby;
    }

    /**
     * Set updatedat
     *
     * @param \DateTime $updatedat
     * @return MirembeFarmerTranferForm
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
}
