<?php


namespace models\Entities;
//use Doctrine\\Mapping as ;

/**
 * MirembeFacilityDeclaration
 *
 * @\Table(name="mirembe_facility_declaration")
 * @\Entity
 */
class MirembeFacilityDeclaration
{
    /**
     * @var integer
     *
     * @\Column(name="declarationID", type="integer", nullable=false)
     * @\Id
     * @\GeneratedValue(strategy="IDENTITY")
     */
    private $declarationid;

    /**
     * @var integer
     *
     * @Column(name="facilityID", type="integer", nullable=false)
     */
    private $facilityid;

    /**
     * @var string
     *
     * @Column(name="process", type="string", length=255, nullable=true)
     */
    private $process;

    /**
     * @var string
     *
     * @Column(name="personResponsible", type="string", length=45, nullable=false)
     */
    private $personresponsible;

    /**
     * @var integer
     *
     * @Column(name="supervisedBy", type="integer", nullable=false)
     */
    private $supervisedby;

    /**
     * @var DateTime
     *
     * @Column(name="dateOfSupervision", type="date", nullable=true)
     */
    private $dateofsupervision;

    /**
     * @var string
     *
     * @Column(name="aStoring", type="string", length=45, nullable=true)
     */
    private $astoring;

    /**
     * @var DateTime
     *
     * @Column(name="aStoringStartDate", type="date", nullable=true)
     */
    private $astoringstartdate;

    /**
     * @var DateTime
     *
     * @Column(name="aStoringEndDate", type="date", nullable=true)
     */
    private $astoringenddate;

    /**
     * @var string
     *
     * @Column(name="aOtherUse", type="string", length=45, nullable=true)
     */
    private $aotheruse;

    /**
     * @var DateTime
     *
     * @Column(name="aOtherUseStartDate", type="date", nullable=true)
     */
    private $aotherusestartdate;

    /**
     * @var DateTime
     *
     * @Column(name="aOtherUseEndDate", type="date", nullable=true)
     */
    private $aotheruseenddate;

    /**
     * @var string
     *
     * @Column(name="aStoreManager", type="string", length=45, nullable=false)
     */
    private $astoremanager;

    /**
     * @var DateTime
     *
     * @Column(name="aStoreManagerSignDate", type="date", nullable=true)
     */
    private $astoremanagersigndate;

    /**
     * @var integer
     *
     * @Column(name="aVerifiedBy", type="integer", nullable=false)
     */
    private $averifiedby;

    /**
     * @var DateTime
     *
     * @Column(name="aDateOfVerification", type="date", nullable=true)
     */
    private $adateofverification;

    /**
     * @var DateTime
     *
     * @Column(name="createdAt", type="datetime", nullable=true)
     */
    private $createdat;

    /**
     * @var DateTime
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
     * Get declarationid
     *
     * @return integer 
     */
    public function getDeclarationid()
    {
        return $this->declarationid;
    }

    /**
     * Set facilityid
     *
     * @param integer $facilityid
     * @return MirembeFacilityDeclaration
     */
    public function setFacilityid($facilityid)
    {
        $this->facilityid = $facilityid;
    
        return $this;
    }

    /**
     * Get facilityid
     *
     * @return integer 
     */
    public function getFacilityid()
    {
        return $this->facilityid;
    }

    /**
     * Set process
     *
     * @param string $process
     * @return MirembeFacilityDeclaration
     */
    public function setProcess($process)
    {
        $this->process = $process;
    
        return $this;
    }

    /**
     * Get process
     *
     * @return string 
     */
    public function getProcess()
    {
        return $this->process;
    }

    /**
     * Set personresponsible
     *
     * @param string $personresponsible
     * @return MirembeFacilityDeclaration
     */
    public function setPersonresponsible($personresponsible)
    {
        $this->personresponsible = $personresponsible;
    
        return $this;
    }

    /**
     * Get personresponsible
     *
     * @return string 
     */
    public function getPersonresponsible()
    {
        return $this->personresponsible;
    }

    /**
     * Set supervisedby
     *
     * @param integer $supervisedby
     * @return MirembeFacilityDeclaration
     */
    public function setSupervisedby($supervisedby)
    {
        $this->supervisedby = $supervisedby;
    
        return $this;
    }

    /**
     * Get supervisedby
     *
     * @return integer 
     */
    public function getSupervisedby()
    {
        return $this->supervisedby;
    }

    /**
     * Set dateofsupervision
     *
     * @param DateTime $dateofsupervision
     * @return MirembeFacilityDeclaration
     */
    public function setDateofsupervision($dateofsupervision)
    {
        $this->dateofsupervision = $dateofsupervision;
    
        return $this;
    }

    /**
     * Get dateofsupervision
     *
     * @return DateTime 
     */
    public function getDateofsupervision()
    {
        return $this->dateofsupervision;
    }

    /**
     * Set astoring
     *
     * @param string $astoring
     * @return MirembeFacilityDeclaration
     */
    public function setAstoring($astoring)
    {
        $this->astoring = $astoring;
    
        return $this;
    }

    /**
     * Get astoring
     *
     * @return string 
     */
    public function getAstoring()
    {
        return $this->astoring;
    }

    /**
     * Set astoringstartdate
     *
     * @param DateTime $astoringstartdate
     * @return MirembeFacilityDeclaration
     */
    public function setAstoringstartdate($astoringstartdate)
    {
        $this->astoringstartdate = $astoringstartdate;
    
        return $this;
    }

    /**
     * Get astoringstartdate
     *
     * @return DateTime 
     */
    public function getAstoringstartdate()
    {
        return $this->astoringstartdate;
    }

    /**
     * Set astoringenddate
     *
     * @param DateTime $astoringenddate
     * @return MirembeFacilityDeclaration
     */
    public function setAstoringenddate($astoringenddate)
    {
        $this->astoringenddate = $astoringenddate;
    
        return $this;
    }

    /**
     * Get astoringenddate
     *
     * @return DateTime 
     */
    public function getAstoringenddate()
    {
        return $this->astoringenddate;
    }

    /**
     * Set aotheruse
     *
     * @param string $aotheruse
     * @return MirembeFacilityDeclaration
     */
    public function setAotheruse($aotheruse)
    {
        $this->aotheruse = $aotheruse;
    
        return $this;
    }

    /**
     * Get aotheruse
     *
     * @return string 
     */
    public function getAotheruse()
    {
        return $this->aotheruse;
    }

    /**
     * Set aotherusestartdate
     *
     * @param DateTime $aotherusestartdate
     * @return MirembeFacilityDeclaration
     */
    public function setAotherusestartdate($aotherusestartdate)
    {
        $this->aotherusestartdate = $aotherusestartdate;
    
        return $this;
    }

    /**
     * Get aotherusestartdate
     *
     * @return DateTime 
     */
    public function getAotherusestartdate()
    {
        return $this->aotherusestartdate;
    }

    /**
     * Set aotheruseenddate
     *
     * @param DateTime $aotheruseenddate
     * @return MirembeFacilityDeclaration
     */
    public function setAotheruseenddate($aotheruseenddate)
    {
        $this->aotheruseenddate = $aotheruseenddate;
    
        return $this;
    }

    /**
     * Get aotheruseenddate
     *
     * @return DateTime 
     */
    public function getAotheruseenddate()
    {
        return $this->aotheruseenddate;
    }

    /**
     * Set astoremanager
     *
     * @param string $astoremanager
     * @return MirembeFacilityDeclaration
     */
    public function setAstoremanager($astoremanager)
    {
        $this->astoremanager = $astoremanager;
    
        return $this;
    }

    /**
     * Get astoremanager
     *
     * @return string 
     */
    public function getAstoremanager()
    {
        return $this->astoremanager;
    }

    /**
     * Set astoremanagersigndate
     *
     * @param DateTime $astoremanagersigndate
     * @return MirembeFacilityDeclaration
     */
    public function setAstoremanagersigndate($astoremanagersigndate)
    {
        $this->astoremanagersigndate = $astoremanagersigndate;
    
        return $this;
    }

    /**
     * Get astoremanagersigndate
     *
     * @return DateTime 
     */
    public function getAstoremanagersigndate()
    {
        return $this->astoremanagersigndate;
    }

    /**
     * Set averifiedby
     *
     * @param integer $averifiedby
     * @return MirembeFacilityDeclaration
     */
    public function setAverifiedby($averifiedby)
    {
        $this->averifiedby = $averifiedby;
    
        return $this;
    }

    /**
     * Get averifiedby
     *
     * @return integer 
     */
    public function getAverifiedby()
    {
        return $this->averifiedby;
    }

    /**
     * Set adateofverification
     *
     * @param DateTime $adateofverification
     * @return MirembeFacilityDeclaration
     */
    public function setAdateofverification($adateofverification)
    {
        $this->adateofverification = $adateofverification;
    
        return $this;
    }

    /**
     * Get adateofverification
     *
     * @return DateTime 
     */
    public function getAdateofverification()
    {
        return $this->adateofverification;
    }

    /**
     * Set createdat
     *
     * @param DateTime $createdat
     * @return MirembeFacilityDeclaration
     */
    public function setCreatedat($createdat)
    {
        $this->createdat = $createdat;
    
        return $this;
    }

    /**
     * Get createdat
     *
     * @return DateTime 
     */
    public function getCreatedat()
    {
        return $this->createdat;
    }

    /**
     * Set updatedat
     *
     * @param DateTime $updatedat
     * @return MirembeFacilityDeclaration
     */
    public function setUpdatedat($updatedat)
    {
        $this->updatedat = $updatedat;
    
        return $this;
    }

    /**
     * Get updatedat
     *
     * @return DateTime 
     */
    public function getUpdatedat()
    {
        return $this->updatedat;
    }

    /**
     * Set createdby
     *
     * @param string $createdby
     * @return MirembeFacilityDeclaration
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
