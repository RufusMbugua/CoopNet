<?php


namespace models\Entities;
//use Doctrine\Mapping as ORM;

/**
 * MirembeVillageCodes
 *
 * @Table(name="mirembe_village_codes")
 * @Entity
 */
class MirembeVillageCodes
{
    /**
     * @var integer
     *
     * @Column(name="villageCodeID", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $villagecodeid;

    /**
     * @var string
     *
     * @Column(name="villageName", type="string", length=45, nullable=false)
     */
    private $villagename;

    /**
     * @var string
     *
     * @Column(name="villageCode", type="string", length=45, nullable=false)
     */
    private $villagecode;

    /**
     * @var string
     *
     * @Column(name="villageSubcounty", type="string", length=45, nullable=true)
     */
    private $villagesubcounty;

    /**
     * @var string
     *
     * @Column(name="villageParish", type="string", length=45, nullable=true)
     */
    private $villageparish;


    /**
     * Get villagecodeid
     *
     * @return integer 
     */
    public function getVillagecodeid()
    {
        return $this->villagecodeid;
    }

    /**
     * Set villagename
     *
     * @param string $villagename
     * @return MirembeVillageCodes
     */
    public function setVillagename($villagename)
    {
        $this->villagename = $villagename;
    
        return $this;
    }

    /**
     * Get villagename
     *
     * @return string 
     */
    public function getVillagename()
    {
        return $this->villagename;
    }

    /**
     * Set villagecode
     *
     * @param string $villagecode
     * @return MirembeVillageCodes
     */
    public function setVillagecode($villagecode)
    {
        $this->villagecode = $villagecode;
    
        return $this;
    }

    /**
     * Get villagecode
     *
     * @return string 
     */
    public function getVillagecode()
    {
        return $this->villagecode;
    }

    /**
     * Set villagesubcounty
     *
     * @param string $villagesubcounty
     * @return MirembeVillageCodes
     */
    public function setVillagesubcounty($villagesubcounty)
    {
        $this->villagesubcounty = $villagesubcounty;
    
        return $this;
    }

    /**
     * Get villagesubcounty
     *
     * @return string 
     */
    public function getVillagesubcounty()
    {
        return $this->villagesubcounty;
    }

    /**
     * Set villageparish
     *
     * @param string $villageparish
     * @return MirembeVillageCodes
     */
    public function setVillageparish($villageparish)
    {
        $this->villageparish = $villageparish;
    
        return $this;
    }

    /**
     * Get villageparish
     *
     * @return string 
     */
    public function getVillageparish()
    {
        return $this->villageparish;
    }
}
