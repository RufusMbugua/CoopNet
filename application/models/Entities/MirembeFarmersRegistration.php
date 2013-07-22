<?php


namespace models\Entities;
//use Doctrine\Mapping as ORM;

/**
 * MirembeFarmersRegistration
 *
 * @Table(name="mirembe_farmers_registration")
 * @Entity
 */
class MirembeFarmersRegistration
{
    /**
     * @var integer
     *
     * @Column(name="farmerID", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $farmerid;

    /**
     * @var string
     *
     * @Column(name="villageID", type="string", length=45, nullable=false)
     */
    private $villageid;

    /**
     * @var string
     *
     * @Column(name="farmerCode", type="string", length=20, nullable=false)
     */
    private $farmercode;

    /**
     * @var string
     *
     * @Column(name="nationalID", type="string", length=15, nullable=false)
     */
    private $nationalid;

    /**
     * @var string
     *
     * @Column(name="phoneNumber", type="string", length=45, nullable=true)
     */
    private $phonenumber;

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
     * @var integer
     *
     * @Column(name="mirembe_village_codes_villageCodeID", type="integer", nullable=false)
     */
    private $mirembeVillageCodesVillagecodeid;


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
     * Set villageid
     *
     * @param string $villageid
     * @return MirembeFarmersRegistration
     */
    public function setVillageid($villageid)
    {
        $this->villageid = $villageid;
    
        return $this;
    }

    /**
     * Get villageid
     *
     * @return string 
     */
    public function getVillageid()
    {
        return $this->villageid;
    }

    /**
     * Set farmercode
     *
     * @param string $farmercode
     * @return MirembeFarmersRegistration
     */
    public function setFarmercode($farmercode)
    {
        $this->farmercode = $farmercode;
    
        return $this;
    }

    /**
     * Get farmercode
     *
     * @return string 
     */
    public function getFarmercode()
    {
        return $this->farmercode;
    }

    /**
     * Set nationalid
     *
     * @param string $nationalid
     * @return MirembeFarmersRegistration
     */
    public function setNationalid($nationalid)
    {
        $this->nationalid = $nationalid;
    
        return $this;
    }

    /**
     * Get nationalid
     *
     * @return string 
     */
    public function getNationalid()
    {
        return $this->nationalid;
    }

    /**
     * Set phonenumber
     *
     * @param string $phonenumber
     * @return MirembeFarmersRegistration
     */
    public function setPhonenumber($phonenumber)
    {
        $this->phonenumber = $phonenumber;
    
        return $this;
    }

    /**
     * Get phonenumber
     *
     * @return string 
     */
    public function getPhonenumber()
    {
        return $this->phonenumber;
    }

    /**
     * Set createdat
     *
     * @param \DateTime $createdat
     * @return MirembeFarmersRegistration
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
     * @return MirembeFarmersRegistration
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
     * @return MirembeFarmersRegistration
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
     * Set mirembeVillageCodesVillagecodeid
     *
     * @param integer $mirembeVillageCodesVillagecodeid
     * @return MirembeFarmersRegistration
     */
    public function setMirembeVillageCodesVillagecodeid($mirembeVillageCodesVillagecodeid)
    {
        $this->mirembeVillageCodesVillagecodeid = $mirembeVillageCodesVillagecodeid;
    
        return $this;
    }

    /**
     * Get mirembeVillageCodesVillagecodeid
     *
     * @return integer 
     */
    public function getMirembeVillageCodesVillagecodeid()
    {
        return $this->mirembeVillageCodesVillagecodeid;
    }
}
