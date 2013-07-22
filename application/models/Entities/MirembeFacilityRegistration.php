<?php


namespace models\Entities;
//use Doctrine\Mapping as ORM;

/**
 * MirembeFacilityRegistration
 *
 * @Table(name="mirembe_facility_registration")
 * @Entity
 */
class MirembeFacilityRegistration
{
    /**
     * @var integer
     *
     * @Column(name="facilityID", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="AUTO")
     */
    private $facilityid;

    /**
     * @var string
     *
     * @Column(name="facilityName", type="string", length=45, nullable=false)
     */
    private $facilityname;

    /**
     * @var string
     *
     * @Column(name="facilityCode", type="string", length=45, nullable=false)
     */
    private $facilitycode;

    /**
     * @var string
     *
     * @Column(name="subFacilityName", type="string", length=45, nullable=true)
     */
    private $subfacilityname;

    /**
     * @var string
     *
     * @Column(name="subFacilcityCode", type="string", length=45, nullable=true)
     */
    private $subfacilcitycode;

    /**
     * @var string
     *
     * @Column(name="facilityPurpose", type="string", length=255, nullable=true)
     */
    private $facilitypurpose;

    /**
     * @var string
     *
     * @Column(name="facilityOwner", type="string", length=45, nullable=true)
     */
    private $facilityowner;

    /**
     * @var string
     *
     * @Column(name="sizeOfBuilding", type="string", length=255, nullable=true)
     */
    private $sizeofbuilding;

    /**
     * @var string
     *
     * @Column(name="buildingMaterialsUsed", type="string", length=255, nullable=true)
     */
    private $buildingmaterialsused;

    /**
     * @var string
     *
     * @Column(name="personReponsible", type="string", length=45, nullable=false)
     */
    private $personreponsible;

    /**
     * @var integer
     *
     * @Column(name="infoCollectedBy", type="integer", nullable=false)
     */
    private $infocollectedby;

    /**
     *  
     *
     * @Column(name="dateOfInfoCollection", type="string", nullable=true)
     */
    private $dateofinfocollection;

    /**
     * 
     *
     * @Column(name="infoVerifiedBy", type="string", length=45, nullable=true)
     */
    private $infoverifiedby;

    /**
     * 
     *
     * @Column(name="dateOfVerification", type="string", nullable=true)
     */
    private $dateofverification;

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
     * 
     *
     * @Column(name="createdAt", type="string", nullable=true)
     */
    private $createdat;


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
     * Set facilityname
     *
     * @param string $facilityname
     * @return MirembeFacilityRegistration
     */
    public function setFacilityname($facilityname)
    {
        $this->facilityname = $facilityname;
    
        return $this;
    }

    /**
     * Get facilityname
     *
     * @return string 
     */
    public function getFacilityname()
    {
        return $this->facilityname;
    }

    /**
     * Set facilitycode
     *
     * @param string $facilitycode
     * @return MirembeFacilityRegistration
     */
    public function setFacilitycode($facilitycode)
    {
        $this->facilitycode = $facilitycode;
    
        return $this;
    }

    /**
     * Get facilitycode
     *
     * @return string 
     */
    public function getFacilitycode()
    {
        return $this->facilitycode;
    }

    /**
     * Set subfacilityname
     *
     * @param string $subfacilityname
     * @return MirembeFacilityRegistration
     */
    public function setSubfacilityname($subfacilityname)
    {
        $this->subfacilityname = $subfacilityname;
    
        return $this;
    }

    /**
     * Get subfacilityname
     *
     * @return string 
     */
    public function getSubfacilityname()
    {
        return $this->subfacilityname;
    }

    /**
     * Set subfacilcitycode
     *
     * @param string $subfacilcitycode
     * @return MirembeFacilityRegistration
     */
    public function setSubfacilcitycode($subfacilcitycode)
    {
        $this->subfacilcitycode = $subfacilcitycode;
    
        return $this;
    }

    /**
     * Get subfacilcitycode
     *
     * @return string 
     */
    public function getSubfacilcitycode()
    {
        return $this->subfacilcitycode;
    }

    /**
     * Set facilitypurpose
     *
     * @param string $facilitypurpose
     * @return MirembeFacilityRegistration
     */
    public function setFacilitypurpose($facilitypurpose)
    {
        $this->facilitypurpose = $facilitypurpose;
    
        return $this;
    }

    /**
     * Get facilitypurpose
     *
     * @return string 
     */
    public function getFacilitypurpose()
    {
        return $this->facilitypurpose;
    }

    /**
     * Set facilityowner
     *
     * @param string $facilityowner
     * @return MirembeFacilityRegistration
     */
    public function setFacilityowner($facilityowner)
    {
        $this->facilityowner = $facilityowner;
    
        return $this;
    }

    /**
     * Get facilityowner
     *
     * @return string 
     */
    public function getFacilityowner()
    {
        return $this->facilityowner;
    }

    /**
     * Set sizeofbuilding
     *
     * @param string $sizeofbuilding
     * @return MirembeFacilityRegistration
     */
    public function setSizeofbuilding($sizeofbuilding)
    {
        $this->sizeofbuilding = $sizeofbuilding;
    
        return $this;
    }

    /**
     * Get sizeofbuilding
     *
     * @return string 
     */
    public function getSizeofbuilding()
    {
        return $this->sizeofbuilding;
    }

    /**
     * Set buildingmaterialsused
     *
     * @param string $buildingmaterialsused
     * @return MirembeFacilityRegistration
     */
    public function setBuildingmaterialsused($buildingmaterialsused)
    {
        $this->buildingmaterialsused = $buildingmaterialsused;
    
        return $this;
    }

    /**
     * Get buildingmaterialsused
     *
     * @return string 
     */
    public function getBuildingmaterialsused()
    {
        return $this->buildingmaterialsused;
    }

    /**
     * Set personreponsible
     *
     * @param string $personreponsible
     * @return MirembeFacilityRegistration
     */
    public function setPersonreponsible($personreponsible)
    {
        $this->personreponsible = $personreponsible;
    
        return $this;
    }

    /**
     * Get personreponsible
     *
     * @return string 
     */
    public function getPersonreponsible()
    {
        return $this->personreponsible;
    }

    /**
     * Set infocollectedby
     *
     * @param integer $infocollectedby
     * @return MirembeFacilityRegistration
     */
    public function setInfocollectedby($infocollectedby)
    {
        $this->infocollectedby = $infocollectedby;
    
        return $this;
    }

    /**
     * Get infocollectedby
     *
     * @return integer 
     */
    public function getInfocollectedby()
    {
        return $this->infocollectedby;
    }

    /**
     * Set dateofinfocollection
     *
     * @param \DateTime $dateofinfocollection
     * @return MirembeFacilityRegistration
     */
    public function setDateofinfocollection($dateofinfocollection)
    {
        $this->dateofinfocollection = $dateofinfocollection;
    
        return $this;
    }

    /**
     * Get dateofinfocollection
     *
     * @return \DateTime 
     */
    public function getDateofinfocollection()
    {
        return $this->dateofinfocollection;
    }

    /**
     * Set infoverifiedby
     *
     * @param string $infoverifiedby
     * @return MirembeFacilityRegistration
     */
    public function setInfoverifiedby($infoverifiedby)
    {
        $this->infoverifiedby = $infoverifiedby;
    
        return $this;
    }

    /**
     * Get infoverifiedby
     *
     * @return string 
     */
    public function getInfoverifiedby()
    {
        return $this->infoverifiedby;
    }

    /**
     * Set dateofverification
     *
     * @param \DateTime $dateofverification
     * @return MirembeFacilityRegistration
     */
    public function setDateofverification($dateofverification)
    {
        $this->dateofverification = $dateofverification;
    
        return $this;
    }

    /**
     * Get dateofverification
     *
     * @return \DateTime 
     */
    public function getDateofverification()
    {
        return $this->dateofverification;
    }

    /**
     * Set createdby
     *
     * @param \DateTime $createdby
     * @return MirembeFacilityRegistration
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
     * @return MirembeFacilityRegistration
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
     * Set createdat
     *
     * @param \DateTime $createdat
     * @return MirembeFacilityRegistration
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
}
