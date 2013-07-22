<?php


namespace models\Entities;
//use Doctrine\Mapping as ORM;

/**
 * MirembeOfficers
 *
 * @Table(name="mirembe_officers")
 * @Entity
 */
class MirembeOfficers
{
    /**
     * 
     *
     * @Column(name="officerID", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="AUTO")
     */
    private $officerid;

    /**
     * @var string
     *
     * @Column(name="officerFirstName", type="string", length=26, nullable=false)
     */
    private $officerfirstname;

    /**
     * @var string
     *
     * @Column(name="officerLastName", type="string", length=26, nullable=false)
     */
    private $officerlastname;

    /**
     * @var string
     *
     * @Column(name="officerDesignation", type="string", length=45, nullable=false)
     */
    private $officerdesignation;

    /**
     * @var string
     *
     * @Column(name="createdBy", type="string", length=45, nullable=true)
     */
    private $createdby;

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
     * Get officerid
     *
     * @return integer 
     */
    public function getOfficerid()
    {
        return $this->officerid;
    }

    /**
     * Set officerfirstname
     *
     * @param string $officerfirstname
     * @return MirembeOfficers
     */
    public function setOfficerfirstname($officerfirstname)
    {
        $this->officerfirstname = $officerfirstname;
    
        return $this;
    }

    /**
     * Get officerfirstname
     *
     * @return string 
     */
    public function getOfficerfirstname()
    {
        return $this->officerfirstname;
    }

    /**
     * Set officerlastname
     *
     * @param string $officerlastname
     * @return MirembeOfficers
     */
    public function setOfficerlastname($officerlastname)
    {
        $this->officerlastname = $officerlastname;
    
        return $this;
    }

    /**
     * Get officerlastname
     *
     * @return string 
     */
    public function getOfficerlastname()
    {
        return $this->officerlastname;
    }

    /**
     * Set officerdesignation
     *
     * @param string $officerdesignation
     * @return MirembeOfficers
     */
    public function setOfficerdesignation($officerdesignation)
    {
        $this->officerdesignation = $officerdesignation;
    
        return $this;
    }

    /**
     * Get officerdesignation
     *
     * @return string 
     */
    public function getOfficerdesignation()
    {
        return $this->officerdesignation;
    }

    /**
     * Set createdby
     *
     * @param string $createdby
     * @return MirembeOfficers
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

    /**
     * Set createdat
     *
     * @param \DateTime $createdat
     * @return MirembeOfficers
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
     * @return MirembeOfficers
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
