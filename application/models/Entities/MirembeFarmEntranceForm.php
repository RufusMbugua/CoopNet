<?php


namespace models\Entities;
//use Doctrine\Mapping as ORM;

/**
 * MirembeFarmEntranceForm
 *
 * @Table(name="mirembe_farm_entrance_form")
 * @Entity
 */
class MirembeFarmEntranceForm
{
    /**
     * @var integer
     *
     * @Column(name="farmEntranceFormID", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $farmentranceformid;

    /**
     * @var integer
     *
     * @Column(name="farmerID", type="integer", nullable=false)
     */
    private $farmerid;

    /**
     * @var string
     *
     * @Column(name="pcCrop", type="string", length=45, nullable=true)
     */
    private $pccrop;

    /**
     * @var float
     *
     * @Column(name="pcAcres", type="float", nullable=true)
     */
    private $pcacres;

    /**
     * @var integer
     *
     * @Column(name="pcNoOfPlants", type="integer", nullable=true)
     */
    private $pcnoofplants;

    /**
     * @var float
     *
     * @Column(name="pcYieldsEstimate", type="float", nullable=true)
     */
    private $pcyieldsestimate;

    /**
     * @var string
     *
     * @Column(name="pcLastUsedChemical", type="string", length=45, nullable=true)
     */
    private $pclastusedchemical;

    /**
     * @var string
     *
     * @Column(name="pcFarmingType", type="string", length=45, nullable=true)
     */
    private $pcfarmingtype;

    /**
     * @var string
     *
     * @Column(name="pcComments", type="string", length=45, nullable=true)
     */
    private $pccomments;

    /**
     * @var string
     *
     * @Column(name="acCrop", type="string", length=45, nullable=true)
     */
    private $accrop;

    /**
     * @var float
     *
     * @Column(name="acAcres", type="float", nullable=true)
     */
    private $acacres;

    /**
     * @var string
     *
     * @Column(name="acSourceOfSeeds", type="string", length=45, nullable=true)
     */
    private $acsourceofseeds;

    /**
     * @var string
     *
     * @Column(name="acLastSeason", type="string", length=45, nullable=true)
     */
    private $aclastseason;

    /**
     * @var string
     *
     * @Column(name="acFarmingType", type="string", length=45, nullable=true)
     */
    private $acfarmingtype;

    /**
     * @var string
     *
     * @Column(name="acComments", type="string", length=255, nullable=true)
     */
    private $accomments;

    /**
     * @var \DateTime
     *
     * @Column(name="dateOfEntrance", type="date", nullable=true)
     */
    private $dateofentrance;

    /**
     * @var string
     *
     * @Column(name="facilitatorName", type="string", length=45, nullable=true)
     */
    private $facilitatorname;

    /**
     * @var string
     *
     * @Column(name="approvedBy", type="string", length=45, nullable=true)
     */
    private $approvedby;

    /**
     * @var \DateTime
     *
     * @Column(name="dateOfApproval", type="date", nullable=true)
     */
    private $dateofapproval;

    /**
     * @var \DateTime
     *
     * @Column(name="createdAt", type="datetime", nullable=true)
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
     * Get farmentranceformid
     *
     * @return integer 
     */
    public function getFarmentranceformid()
    {
        return $this->farmentranceformid;
    }

    /**
     * Set farmerid
     *
     * @param integer $farmerid
     * @return MirembeFarmEntranceForm
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
     * Set pccrop
     *
     * @param string $pccrop
     * @return MirembeFarmEntranceForm
     */
    public function setPccrop($pccrop)
    {
        $this->pccrop = $pccrop;
    
        return $this;
    }

    /**
     * Get pccrop
     *
     * @return string 
     */
    public function getPccrop()
    {
        return $this->pccrop;
    }

    /**
     * Set pcacres
     *
     * @param float $pcacres
     * @return MirembeFarmEntranceForm
     */
    public function setPcacres($pcacres)
    {
        $this->pcacres = $pcacres;
    
        return $this;
    }

    /**
     * Get pcacres
     *
     * @return float 
     */
    public function getPcacres()
    {
        return $this->pcacres;
    }

    /**
     * Set pcnoofplants
     *
     * @param integer $pcnoofplants
     * @return MirembeFarmEntranceForm
     */
    public function setPcnoofplants($pcnoofplants)
    {
        $this->pcnoofplants = $pcnoofplants;
    
        return $this;
    }

    /**
     * Get pcnoofplants
     *
     * @return integer 
     */
    public function getPcnoofplants()
    {
        return $this->pcnoofplants;
    }

    /**
     * Set pcyieldsestimate
     *
     * @param float $pcyieldsestimate
     * @return MirembeFarmEntranceForm
     */
    public function setPcyieldsestimate($pcyieldsestimate)
    {
        $this->pcyieldsestimate = $pcyieldsestimate;
    
        return $this;
    }

    /**
     * Get pcyieldsestimate
     *
     * @return float 
     */
    public function getPcyieldsestimate()
    {
        return $this->pcyieldsestimate;
    }

    /**
     * Set pclastusedchemical
     *
     * @param string $pclastusedchemical
     * @return MirembeFarmEntranceForm
     */
    public function setPclastusedchemical($pclastusedchemical)
    {
        $this->pclastusedchemical = $pclastusedchemical;
    
        return $this;
    }

    /**
     * Get pclastusedchemical
     *
     * @return string 
     */
    public function getPclastusedchemical()
    {
        return $this->pclastusedchemical;
    }

    /**
     * Set pcfarmingtype
     *
     * @param string $pcfarmingtype
     * @return MirembeFarmEntranceForm
     */
    public function setPcfarmingtype($pcfarmingtype)
    {
        $this->pcfarmingtype = $pcfarmingtype;
    
        return $this;
    }

    /**
     * Get pcfarmingtype
     *
     * @return string 
     */
    public function getPcfarmingtype()
    {
        return $this->pcfarmingtype;
    }

    /**
     * Set pccomments
     *
     * @param string $pccomments
     * @return MirembeFarmEntranceForm
     */
    public function setPccomments($pccomments)
    {
        $this->pccomments = $pccomments;
    
        return $this;
    }

    /**
     * Get pccomments
     *
     * @return string 
     */
    public function getPccomments()
    {
        return $this->pccomments;
    }

    /**
     * Set accrop
     *
     * @param string $accrop
     * @return MirembeFarmEntranceForm
     */
    public function setAccrop($accrop)
    {
        $this->accrop = $accrop;
    
        return $this;
    }

    /**
     * Get accrop
     *
     * @return string 
     */
    public function getAccrop()
    {
        return $this->accrop;
    }

    /**
     * Set acacres
     *
     * @param float $acacres
     * @return MirembeFarmEntranceForm
     */
    public function setAcacres($acacres)
    {
        $this->acacres = $acacres;
    
        return $this;
    }

    /**
     * Get acacres
     *
     * @return float 
     */
    public function getAcacres()
    {
        return $this->acacres;
    }

    /**
     * Set acsourceofseeds
     *
     * @param string $acsourceofseeds
     * @return MirembeFarmEntranceForm
     */
    public function setAcsourceofseeds($acsourceofseeds)
    {
        $this->acsourceofseeds = $acsourceofseeds;
    
        return $this;
    }

    /**
     * Get acsourceofseeds
     *
     * @return string 
     */
    public function getAcsourceofseeds()
    {
        return $this->acsourceofseeds;
    }

    /**
     * Set aclastseason
     *
     * @param string $aclastseason
     * @return MirembeFarmEntranceForm
     */
    public function setAclastseason($aclastseason)
    {
        $this->aclastseason = $aclastseason;
    
        return $this;
    }

    /**
     * Get aclastseason
     *
     * @return string 
     */
    public function getAclastseason()
    {
        return $this->aclastseason;
    }

    /**
     * Set acfarmingtype
     *
     * @param string $acfarmingtype
     * @return MirembeFarmEntranceForm
     */
    public function setAcfarmingtype($acfarmingtype)
    {
        $this->acfarmingtype = $acfarmingtype;
    
        return $this;
    }

    /**
     * Get acfarmingtype
     *
     * @return string 
     */
    public function getAcfarmingtype()
    {
        return $this->acfarmingtype;
    }

    /**
     * Set accomments
     *
     * @param string $accomments
     * @return MirembeFarmEntranceForm
     */
    public function setAccomments($accomments)
    {
        $this->accomments = $accomments;
    
        return $this;
    }

    /**
     * Get accomments
     *
     * @return string 
     */
    public function getAccomments()
    {
        return $this->accomments;
    }

    /**
     * Set dateofentrance
     *
     * @param \DateTime $dateofentrance
     * @return MirembeFarmEntranceForm
     */
    public function setDateofentrance($dateofentrance)
    {
        $this->dateofentrance = $dateofentrance;
    
        return $this;
    }

    /**
     * Get dateofentrance
     *
     * @return \DateTime 
     */
    public function getDateofentrance()
    {
        return $this->dateofentrance;
    }

    /**
     * Set facilitatorname
     *
     * @param string $facilitatorname
     * @return MirembeFarmEntranceForm
     */
    public function setFacilitatorname($facilitatorname)
    {
        $this->facilitatorname = $facilitatorname;
    
        return $this;
    }

    /**
     * Get facilitatorname
     *
     * @return string 
     */
    public function getFacilitatorname()
    {
        return $this->facilitatorname;
    }

    /**
     * Set approvedby
     *
     * @param string $approvedby
     * @return MirembeFarmEntranceForm
     */
    public function setApprovedby($approvedby)
    {
        $this->approvedby = $approvedby;
    
        return $this;
    }

    /**
     * Get approvedby
     *
     * @return string 
     */
    public function getApprovedby()
    {
        return $this->approvedby;
    }

    /**
     * Set dateofapproval
     *
     * @param \DateTime $dateofapproval
     * @return MirembeFarmEntranceForm
     */
    public function setDateofapproval($dateofapproval)
    {
        $this->dateofapproval = $dateofapproval;
    
        return $this;
    }

    /**
     * Get dateofapproval
     *
     * @return \DateTime 
     */
    public function getDateofapproval()
    {
        return $this->dateofapproval;
    }

    /**
     * Set createdat
     *
     * @param \DateTime $createdat
     * @return MirembeFarmEntranceForm
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
     * @return MirembeFarmEntranceForm
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
     * @return MirembeFarmEntranceForm
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
