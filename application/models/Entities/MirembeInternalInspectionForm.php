<?php


namespace models\Entities;
//use Doctrine\Mapping as ORM;

/**
 * MirembeInternalInspectionForm
 *
 * @Table(name="mirembe_internal_inspection_form")
 * @Entity
 */
class MirembeInternalInspectionForm
{
    /**
     * @var integer
     *
     * @Column(name="inspectionID", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $inspectionid;

    /**
     * @var integer
     *
     * @Column(name="farmerID", type="integer", nullable=false)
     */
    private $farmerid;

    /**
     * @var integer
     *
     * @Column(name="cropID", type="integer", nullable=false)
     */
    private $cropid;

    /**
     * @var boolean
     *
     * @Column(name="underContract", type="boolean", nullable=true)
     */
    private $undercontract;

    /**
     * @var string
     *
     * @Column(name="underContractComments", type="string", length=45, nullable=true)
     */
    private $undercontractcomments;

    /**
     * @var boolean
     *
     * @Column(name="chemicalUsed", type="boolean", nullable=true)
     */
    private $chemicalused;

    /**
     * @var string
     *
     * @Column(name="chemicalUsedComments", type="string", length=45, nullable=true)
     */
    private $chemicalusedcomments;

    /**
     * @var boolean
     *
     * @Column(name="chemFarmNearOrganicFarm", type="boolean", nullable=true)
     */
    private $chemfarmnearorganicfarm;

    /**
     * @var string
     *
     * @Column(name="chemFarmNearOrganicFarmComents", type="string", length=45, nullable=true)
     */
    private $chemfarmnearorganicfarmcoments;

    /**
     * @var boolean
     *
     * @Column(name="farmerOrganicFarmingAware", type="boolean", nullable=true)
     */
    private $farmerorganicfarmingaware;

    /**
     * @var string
     *
     * @Column(name="farmerOrganicFarmingAwareComments", type="string", length=45, nullable=true)
     */
    private $farmerorganicfarmingawarecomments;

    /**
     * @var boolean
     *
     * @Column(name="usesTreatedSeeds", type="boolean", nullable=true)
     */
    private $usestreatedseeds;

    /**
     * @var string
     *
     * @Column(name="usesTreatedSeedsComments", type="string", length=45, nullable=true)
     */
    private $usestreatedseedscomments;

    /**
     * @var boolean
     *
     * @Column(name="intercroppingUsed", type="boolean", nullable=true)
     */
    private $intercroppingused;

    /**
     * @var string
     *
     * @Column(name="intercroppingUsedComments", type="string", length=45, nullable=true)
     */
    private $intercroppingusedcomments;

    /**
     * @var boolean
     *
     * @Column(name="fieldIsMulched", type="boolean", nullable=true)
     */
    private $fieldismulched;

    /**
     * @var string
     *
     * @Column(name="fieldIsMulchedComments", type="string", length=45, nullable=true)
     */
    private $fieldismulchedcomments;

    /**
     * @var boolean
     *
     * @Column(name="weedingDone", type="boolean", nullable=true)
     */
    private $weedingdone;

    /**
     * @var string
     *
     * @Column(name="weedingDoneComments", type="string", length=45, nullable=true)
     */
    private $weedingdonecomments;

    /**
     * @var boolean
     *
     * @Column(name="manureIsApplied", type="boolean", nullable=true)
     */
    private $manureisapplied;

    /**
     * @var string
     *
     * @Column(name="manureIsAppliedComments", type="string", length=45, nullable=true)
     */
    private $manureisappliedcomments;

    /**
     * @var boolean
     *
     * @Column(name="pruningDone", type="boolean", nullable=true)
     */
    private $pruningdone;

    /**
     * @var string
     *
     * @Column(name="pruningDoneComments", type="string", length=45, nullable=true)
     */
    private $pruningdonecomments;

    /**
     * @var boolean
     *
     * @Column(name="shadeTreesPresent", type="boolean", nullable=true)
     */
    private $shadetreespresent;

    /**
     * @var string
     *
     * @Column(name="shadeTreesPresentComments", type="string", length=45, nullable=true)
     */
    private $shadetreespresentcomments;

    /**
     * @var boolean
     *
     * @Column(name="erosionAddressed", type="boolean", nullable=true)
     */
    private $erosionaddressed;

    /**
     * @var string
     *
     * @Column(name="erosionAddressedComments", type="string", length=45, nullable=true)
     */
    private $erosionaddressedcomments;

    /**
     * @var boolean
     *
     * @Column(name="coverCropsUsed", type="boolean", nullable=true)
     */
    private $covercropsused;

    /**
     * @var string
     *
     * @Column(name="coverCropsUsedComments", type="string", length=45, nullable=true)
     */
    private $covercropsusedcomments;

    /**
     * @var boolean
     *
     * @Column(name="protectionOfWater", type="boolean", nullable=true)
     */
    private $protectionofwater;

    /**
     * @var string
     *
     * @Column(name="protectionOfWaterComments", type="string", length=45, nullable=true)
     */
    private $protectionofwatercomments;

    /**
     * @var boolean
     *
     * @Column(name="disposalOfRubbish", type="boolean", nullable=true)
     */
    private $disposalofrubbish;

    /**
     * @var string
     *
     * @Column(name="disposalOfRubbishComments", type="string", length=45, nullable=true)
     */
    private $disposalofrubbishcomments;

    /**
     * @var boolean
     *
     * @Column(name="cPicking", type="boolean", nullable=true)
     */
    private $cpicking;

    /**
     * @var string
     *
     * @Column(name="cPickingComments", type="string", length=45, nullable=true)
     */
    private $cpickingcomments;

    /**
     * @var boolean
     *
     * @Column(name="cFermentation", type="boolean", nullable=true)
     */
    private $cfermentation;

    /**
     * @var string
     *
     * @Column(name="cFermentationComments", type="string", length=45, nullable=true)
     */
    private $cfermentationcomments;

    /**
     * @var boolean
     *
     * @Column(name="cReuseOfCherrySkins", type="boolean", nullable=true)
     */
    private $creuseofcherryskins;

    /**
     * @var string
     *
     * @Column(name="cReuseOfCherrySkinsComments", type="string", length=45, nullable=true)
     */
    private $creuseofcherryskinscomments;

    /**
     * @var boolean
     *
     * @Column(name="cDumpingArea", type="boolean", nullable=true)
     */
    private $cdumpingarea;

    /**
     * @var string
     *
     * @Column(name="cDumpingAreaComments", type="string", length=45, nullable=true)
     */
    private $cdumpingareacomments;

    /**
     * @var boolean
     *
     * @Column(name="cStorageCleanliness", type="boolean", nullable=true)
     */
    private $cstoragecleanliness;

    /**
     * @var string
     *
     * @Column(name="cStorageCleanlinessComments", type="string", length=45, nullable=true)
     */
    private $cstoragecleanlinesscomments;

    /**
     * @var boolean
     *
     * @Column(name="cChemicalInCoffeeStore", type="boolean", nullable=true)
     */
    private $cchemicalincoffeestore;

    /**
     * @var string
     *
     * @Column(name="cChemicalInCoffeeStoreComments", type="string", length=45, nullable=true)
     */
    private $cchemicalincoffeestorecomments;

    /**
     * @var integer
     *
     * @Column(name="numberOfAnimals", type="integer", nullable=true)
     */
    private $numberofanimals;

    /**
     * @var boolean
     *
     * @Column(name="conditionOfAnimals", type="boolean", nullable=true)
     */
    private $conditionofanimals;

    /**
     * @var string
     *
     * @Column(name="animalComments", type="string", length=255, nullable=true)
     */
    private $animalcomments;

    /**
     * @var string
     *
     * @Column(name="adviceToFarmer", type="string", length=255, nullable=true)
     */
    private $advicetofarmer;

    /**
     * @var boolean
     *
     * @Column(name="complianceToPreviousInspection", type="boolean", nullable=true)
     */
    private $compliancetopreviousinspection;

    /**
     * @var string
     *
     * @Column(name="complianceToPreviousInspectionComments", type="string", length=255, nullable=true)
     */
    private $compliancetopreviousinspectioncomments;

    /**
     * @var integer
     *
     * @Column(name="coID", type="integer", nullable=false)
     */
    private $coid;

    /**
     * @var \DateTime
     *
     * @Column(name="dateOfInspection", type="datetime", nullable=false)
     */
    private $dateofinspection;

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
     * Get inspectionid
     *
     * @return integer 
     */
    public function getInspectionid()
    {
        return $this->inspectionid;
    }

    /**
     * Set farmerid
     *
     * @param integer $farmerid
     * @return MirembeInternalInspectionForm
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
     * @return MirembeInternalInspectionForm
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
     * Set undercontract
     *
     * @param boolean $undercontract
     * @return MirembeInternalInspectionForm
     */
    public function setUndercontract($undercontract)
    {
        $this->undercontract = $undercontract;
    
        return $this;
    }

    /**
     * Get undercontract
     *
     * @return boolean 
     */
    public function getUndercontract()
    {
        return $this->undercontract;
    }

    /**
     * Set undercontractcomments
     *
     * @param string $undercontractcomments
     * @return MirembeInternalInspectionForm
     */
    public function setUndercontractcomments($undercontractcomments)
    {
        $this->undercontractcomments = $undercontractcomments;
    
        return $this;
    }

    /**
     * Get undercontractcomments
     *
     * @return string 
     */
    public function getUndercontractcomments()
    {
        return $this->undercontractcomments;
    }

    /**
     * Set chemicalused
     *
     * @param boolean $chemicalused
     * @return MirembeInternalInspectionForm
     */
    public function setChemicalused($chemicalused)
    {
        $this->chemicalused = $chemicalused;
    
        return $this;
    }

    /**
     * Get chemicalused
     *
     * @return boolean 
     */
    public function getChemicalused()
    {
        return $this->chemicalused;
    }

    /**
     * Set chemicalusedcomments
     *
     * @param string $chemicalusedcomments
     * @return MirembeInternalInspectionForm
     */
    public function setChemicalusedcomments($chemicalusedcomments)
    {
        $this->chemicalusedcomments = $chemicalusedcomments;
    
        return $this;
    }

    /**
     * Get chemicalusedcomments
     *
     * @return string 
     */
    public function getChemicalusedcomments()
    {
        return $this->chemicalusedcomments;
    }

    /**
     * Set chemfarmnearorganicfarm
     *
     * @param boolean $chemfarmnearorganicfarm
     * @return MirembeInternalInspectionForm
     */
    public function setChemfarmnearorganicfarm($chemfarmnearorganicfarm)
    {
        $this->chemfarmnearorganicfarm = $chemfarmnearorganicfarm;
    
        return $this;
    }

    /**
     * Get chemfarmnearorganicfarm
     *
     * @return boolean 
     */
    public function getChemfarmnearorganicfarm()
    {
        return $this->chemfarmnearorganicfarm;
    }

    /**
     * Set chemfarmnearorganicfarmcoments
     *
     * @param string $chemfarmnearorganicfarmcoments
     * @return MirembeInternalInspectionForm
     */
    public function setChemfarmnearorganicfarmcoments($chemfarmnearorganicfarmcoments)
    {
        $this->chemfarmnearorganicfarmcoments = $chemfarmnearorganicfarmcoments;
    
        return $this;
    }

    /**
     * Get chemfarmnearorganicfarmcoments
     *
     * @return string 
     */
    public function getChemfarmnearorganicfarmcoments()
    {
        return $this->chemfarmnearorganicfarmcoments;
    }

    /**
     * Set farmerorganicfarmingaware
     *
     * @param boolean $farmerorganicfarmingaware
     * @return MirembeInternalInspectionForm
     */
    public function setFarmerorganicfarmingaware($farmerorganicfarmingaware)
    {
        $this->farmerorganicfarmingaware = $farmerorganicfarmingaware;
    
        return $this;
    }

    /**
     * Get farmerorganicfarmingaware
     *
     * @return boolean 
     */
    public function getFarmerorganicfarmingaware()
    {
        return $this->farmerorganicfarmingaware;
    }

    /**
     * Set farmerorganicfarmingawarecomments
     *
     * @param string $farmerorganicfarmingawarecomments
     * @return MirembeInternalInspectionForm
     */
    public function setFarmerorganicfarmingawarecomments($farmerorganicfarmingawarecomments)
    {
        $this->farmerorganicfarmingawarecomments = $farmerorganicfarmingawarecomments;
    
        return $this;
    }

    /**
     * Get farmerorganicfarmingawarecomments
     *
     * @return string 
     */
    public function getFarmerorganicfarmingawarecomments()
    {
        return $this->farmerorganicfarmingawarecomments;
    }

    /**
     * Set usestreatedseeds
     *
     * @param boolean $usestreatedseeds
     * @return MirembeInternalInspectionForm
     */
    public function setUsestreatedseeds($usestreatedseeds)
    {
        $this->usestreatedseeds = $usestreatedseeds;
    
        return $this;
    }

    /**
     * Get usestreatedseeds
     *
     * @return boolean 
     */
    public function getUsestreatedseeds()
    {
        return $this->usestreatedseeds;
    }

    /**
     * Set usestreatedseedscomments
     *
     * @param string $usestreatedseedscomments
     * @return MirembeInternalInspectionForm
     */
    public function setUsestreatedseedscomments($usestreatedseedscomments)
    {
        $this->usestreatedseedscomments = $usestreatedseedscomments;
    
        return $this;
    }

    /**
     * Get usestreatedseedscomments
     *
     * @return string 
     */
    public function getUsestreatedseedscomments()
    {
        return $this->usestreatedseedscomments;
    }

    /**
     * Set intercroppingused
     *
     * @param boolean $intercroppingused
     * @return MirembeInternalInspectionForm
     */
    public function setIntercroppingused($intercroppingused)
    {
        $this->intercroppingused = $intercroppingused;
    
        return $this;
    }

    /**
     * Get intercroppingused
     *
     * @return boolean 
     */
    public function getIntercroppingused()
    {
        return $this->intercroppingused;
    }

    /**
     * Set intercroppingusedcomments
     *
     * @param string $intercroppingusedcomments
     * @return MirembeInternalInspectionForm
     */
    public function setIntercroppingusedcomments($intercroppingusedcomments)
    {
        $this->intercroppingusedcomments = $intercroppingusedcomments;
    
        return $this;
    }

    /**
     * Get intercroppingusedcomments
     *
     * @return string 
     */
    public function getIntercroppingusedcomments()
    {
        return $this->intercroppingusedcomments;
    }

    /**
     * Set fieldismulched
     *
     * @param boolean $fieldismulched
     * @return MirembeInternalInspectionForm
     */
    public function setFieldismulched($fieldismulched)
    {
        $this->fieldismulched = $fieldismulched;
    
        return $this;
    }

    /**
     * Get fieldismulched
     *
     * @return boolean 
     */
    public function getFieldismulched()
    {
        return $this->fieldismulched;
    }

    /**
     * Set fieldismulchedcomments
     *
     * @param string $fieldismulchedcomments
     * @return MirembeInternalInspectionForm
     */
    public function setFieldismulchedcomments($fieldismulchedcomments)
    {
        $this->fieldismulchedcomments = $fieldismulchedcomments;
    
        return $this;
    }

    /**
     * Get fieldismulchedcomments
     *
     * @return string 
     */
    public function getFieldismulchedcomments()
    {
        return $this->fieldismulchedcomments;
    }

    /**
     * Set weedingdone
     *
     * @param boolean $weedingdone
     * @return MirembeInternalInspectionForm
     */
    public function setWeedingdone($weedingdone)
    {
        $this->weedingdone = $weedingdone;
    
        return $this;
    }

    /**
     * Get weedingdone
     *
     * @return boolean 
     */
    public function getWeedingdone()
    {
        return $this->weedingdone;
    }

    /**
     * Set weedingdonecomments
     *
     * @param string $weedingdonecomments
     * @return MirembeInternalInspectionForm
     */
    public function setWeedingdonecomments($weedingdonecomments)
    {
        $this->weedingdonecomments = $weedingdonecomments;
    
        return $this;
    }

    /**
     * Get weedingdonecomments
     *
     * @return string 
     */
    public function getWeedingdonecomments()
    {
        return $this->weedingdonecomments;
    }

    /**
     * Set manureisapplied
     *
     * @param boolean $manureisapplied
     * @return MirembeInternalInspectionForm
     */
    public function setManureisapplied($manureisapplied)
    {
        $this->manureisapplied = $manureisapplied;
    
        return $this;
    }

    /**
     * Get manureisapplied
     *
     * @return boolean 
     */
    public function getManureisapplied()
    {
        return $this->manureisapplied;
    }

    /**
     * Set manureisappliedcomments
     *
     * @param string $manureisappliedcomments
     * @return MirembeInternalInspectionForm
     */
    public function setManureisappliedcomments($manureisappliedcomments)
    {
        $this->manureisappliedcomments = $manureisappliedcomments;
    
        return $this;
    }

    /**
     * Get manureisappliedcomments
     *
     * @return string 
     */
    public function getManureisappliedcomments()
    {
        return $this->manureisappliedcomments;
    }

    /**
     * Set pruningdone
     *
     * @param boolean $pruningdone
     * @return MirembeInternalInspectionForm
     */
    public function setPruningdone($pruningdone)
    {
        $this->pruningdone = $pruningdone;
    
        return $this;
    }

    /**
     * Get pruningdone
     *
     * @return boolean 
     */
    public function getPruningdone()
    {
        return $this->pruningdone;
    }

    /**
     * Set pruningdonecomments
     *
     * @param string $pruningdonecomments
     * @return MirembeInternalInspectionForm
     */
    public function setPruningdonecomments($pruningdonecomments)
    {
        $this->pruningdonecomments = $pruningdonecomments;
    
        return $this;
    }

    /**
     * Get pruningdonecomments
     *
     * @return string 
     */
    public function getPruningdonecomments()
    {
        return $this->pruningdonecomments;
    }

    /**
     * Set shadetreespresent
     *
     * @param boolean $shadetreespresent
     * @return MirembeInternalInspectionForm
     */
    public function setShadetreespresent($shadetreespresent)
    {
        $this->shadetreespresent = $shadetreespresent;
    
        return $this;
    }

    /**
     * Get shadetreespresent
     *
     * @return boolean 
     */
    public function getShadetreespresent()
    {
        return $this->shadetreespresent;
    }

    /**
     * Set shadetreespresentcomments
     *
     * @param string $shadetreespresentcomments
     * @return MirembeInternalInspectionForm
     */
    public function setShadetreespresentcomments($shadetreespresentcomments)
    {
        $this->shadetreespresentcomments = $shadetreespresentcomments;
    
        return $this;
    }

    /**
     * Get shadetreespresentcomments
     *
     * @return string 
     */
    public function getShadetreespresentcomments()
    {
        return $this->shadetreespresentcomments;
    }

    /**
     * Set erosionaddressed
     *
     * @param boolean $erosionaddressed
     * @return MirembeInternalInspectionForm
     */
    public function setErosionaddressed($erosionaddressed)
    {
        $this->erosionaddressed = $erosionaddressed;
    
        return $this;
    }

    /**
     * Get erosionaddressed
     *
     * @return boolean 
     */
    public function getErosionaddressed()
    {
        return $this->erosionaddressed;
    }

    /**
     * Set erosionaddressedcomments
     *
     * @param string $erosionaddressedcomments
     * @return MirembeInternalInspectionForm
     */
    public function setErosionaddressedcomments($erosionaddressedcomments)
    {
        $this->erosionaddressedcomments = $erosionaddressedcomments;
    
        return $this;
    }

    /**
     * Get erosionaddressedcomments
     *
     * @return string 
     */
    public function getErosionaddressedcomments()
    {
        return $this->erosionaddressedcomments;
    }

    /**
     * Set covercropsused
     *
     * @param boolean $covercropsused
     * @return MirembeInternalInspectionForm
     */
    public function setCovercropsused($covercropsused)
    {
        $this->covercropsused = $covercropsused;
    
        return $this;
    }

    /**
     * Get covercropsused
     *
     * @return boolean 
     */
    public function getCovercropsused()
    {
        return $this->covercropsused;
    }

    /**
     * Set covercropsusedcomments
     *
     * @param string $covercropsusedcomments
     * @return MirembeInternalInspectionForm
     */
    public function setCovercropsusedcomments($covercropsusedcomments)
    {
        $this->covercropsusedcomments = $covercropsusedcomments;
    
        return $this;
    }

    /**
     * Get covercropsusedcomments
     *
     * @return string 
     */
    public function getCovercropsusedcomments()
    {
        return $this->covercropsusedcomments;
    }

    /**
     * Set protectionofwater
     *
     * @param boolean $protectionofwater
     * @return MirembeInternalInspectionForm
     */
    public function setProtectionofwater($protectionofwater)
    {
        $this->protectionofwater = $protectionofwater;
    
        return $this;
    }

    /**
     * Get protectionofwater
     *
     * @return boolean 
     */
    public function getProtectionofwater()
    {
        return $this->protectionofwater;
    }

    /**
     * Set protectionofwatercomments
     *
     * @param string $protectionofwatercomments
     * @return MirembeInternalInspectionForm
     */
    public function setProtectionofwatercomments($protectionofwatercomments)
    {
        $this->protectionofwatercomments = $protectionofwatercomments;
    
        return $this;
    }

    /**
     * Get protectionofwatercomments
     *
     * @return string 
     */
    public function getProtectionofwatercomments()
    {
        return $this->protectionofwatercomments;
    }

    /**
     * Set disposalofrubbish
     *
     * @param boolean $disposalofrubbish
     * @return MirembeInternalInspectionForm
     */
    public function setDisposalofrubbish($disposalofrubbish)
    {
        $this->disposalofrubbish = $disposalofrubbish;
    
        return $this;
    }

    /**
     * Get disposalofrubbish
     *
     * @return boolean 
     */
    public function getDisposalofrubbish()
    {
        return $this->disposalofrubbish;
    }

    /**
     * Set disposalofrubbishcomments
     *
     * @param string $disposalofrubbishcomments
     * @return MirembeInternalInspectionForm
     */
    public function setDisposalofrubbishcomments($disposalofrubbishcomments)
    {
        $this->disposalofrubbishcomments = $disposalofrubbishcomments;
    
        return $this;
    }

    /**
     * Get disposalofrubbishcomments
     *
     * @return string 
     */
    public function getDisposalofrubbishcomments()
    {
        return $this->disposalofrubbishcomments;
    }

    /**
     * Set cpicking
     *
     * @param boolean $cpicking
     * @return MirembeInternalInspectionForm
     */
    public function setCpicking($cpicking)
    {
        $this->cpicking = $cpicking;
    
        return $this;
    }

    /**
     * Get cpicking
     *
     * @return boolean 
     */
    public function getCpicking()
    {
        return $this->cpicking;
    }

    /**
     * Set cpickingcomments
     *
     * @param string $cpickingcomments
     * @return MirembeInternalInspectionForm
     */
    public function setCpickingcomments($cpickingcomments)
    {
        $this->cpickingcomments = $cpickingcomments;
    
        return $this;
    }

    /**
     * Get cpickingcomments
     *
     * @return string 
     */
    public function getCpickingcomments()
    {
        return $this->cpickingcomments;
    }

    /**
     * Set cfermentation
     *
     * @param boolean $cfermentation
     * @return MirembeInternalInspectionForm
     */
    public function setCfermentation($cfermentation)
    {
        $this->cfermentation = $cfermentation;
    
        return $this;
    }

    /**
     * Get cfermentation
     *
     * @return boolean 
     */
    public function getCfermentation()
    {
        return $this->cfermentation;
    }

    /**
     * Set cfermentationcomments
     *
     * @param string $cfermentationcomments
     * @return MirembeInternalInspectionForm
     */
    public function setCfermentationcomments($cfermentationcomments)
    {
        $this->cfermentationcomments = $cfermentationcomments;
    
        return $this;
    }

    /**
     * Get cfermentationcomments
     *
     * @return string 
     */
    public function getCfermentationcomments()
    {
        return $this->cfermentationcomments;
    }

    /**
     * Set creuseofcherryskins
     *
     * @param boolean $creuseofcherryskins
     * @return MirembeInternalInspectionForm
     */
    public function setCreuseofcherryskins($creuseofcherryskins)
    {
        $this->creuseofcherryskins = $creuseofcherryskins;
    
        return $this;
    }

    /**
     * Get creuseofcherryskins
     *
     * @return boolean 
     */
    public function getCreuseofcherryskins()
    {
        return $this->creuseofcherryskins;
    }

    /**
     * Set creuseofcherryskinscomments
     *
     * @param string $creuseofcherryskinscomments
     * @return MirembeInternalInspectionForm
     */
    public function setCreuseofcherryskinscomments($creuseofcherryskinscomments)
    {
        $this->creuseofcherryskinscomments = $creuseofcherryskinscomments;
    
        return $this;
    }

    /**
     * Get creuseofcherryskinscomments
     *
     * @return string 
     */
    public function getCreuseofcherryskinscomments()
    {
        return $this->creuseofcherryskinscomments;
    }

    /**
     * Set cdumpingarea
     *
     * @param boolean $cdumpingarea
     * @return MirembeInternalInspectionForm
     */
    public function setCdumpingarea($cdumpingarea)
    {
        $this->cdumpingarea = $cdumpingarea;
    
        return $this;
    }

    /**
     * Get cdumpingarea
     *
     * @return boolean 
     */
    public function getCdumpingarea()
    {
        return $this->cdumpingarea;
    }

    /**
     * Set cdumpingareacomments
     *
     * @param string $cdumpingareacomments
     * @return MirembeInternalInspectionForm
     */
    public function setCdumpingareacomments($cdumpingareacomments)
    {
        $this->cdumpingareacomments = $cdumpingareacomments;
    
        return $this;
    }

    /**
     * Get cdumpingareacomments
     *
     * @return string 
     */
    public function getCdumpingareacomments()
    {
        return $this->cdumpingareacomments;
    }

    /**
     * Set cstoragecleanliness
     *
     * @param boolean $cstoragecleanliness
     * @return MirembeInternalInspectionForm
     */
    public function setCstoragecleanliness($cstoragecleanliness)
    {
        $this->cstoragecleanliness = $cstoragecleanliness;
    
        return $this;
    }

    /**
     * Get cstoragecleanliness
     *
     * @return boolean 
     */
    public function getCstoragecleanliness()
    {
        return $this->cstoragecleanliness;
    }

    /**
     * Set cstoragecleanlinesscomments
     *
     * @param string $cstoragecleanlinesscomments
     * @return MirembeInternalInspectionForm
     */
    public function setCstoragecleanlinesscomments($cstoragecleanlinesscomments)
    {
        $this->cstoragecleanlinesscomments = $cstoragecleanlinesscomments;
    
        return $this;
    }

    /**
     * Get cstoragecleanlinesscomments
     *
     * @return string 
     */
    public function getCstoragecleanlinesscomments()
    {
        return $this->cstoragecleanlinesscomments;
    }

    /**
     * Set cchemicalincoffeestore
     *
     * @param boolean $cchemicalincoffeestore
     * @return MirembeInternalInspectionForm
     */
    public function setCchemicalincoffeestore($cchemicalincoffeestore)
    {
        $this->cchemicalincoffeestore = $cchemicalincoffeestore;
    
        return $this;
    }

    /**
     * Get cchemicalincoffeestore
     *
     * @return boolean 
     */
    public function getCchemicalincoffeestore()
    {
        return $this->cchemicalincoffeestore;
    }

    /**
     * Set cchemicalincoffeestorecomments
     *
     * @param string $cchemicalincoffeestorecomments
     * @return MirembeInternalInspectionForm
     */
    public function setCchemicalincoffeestorecomments($cchemicalincoffeestorecomments)
    {
        $this->cchemicalincoffeestorecomments = $cchemicalincoffeestorecomments;
    
        return $this;
    }

    /**
     * Get cchemicalincoffeestorecomments
     *
     * @return string 
     */
    public function getCchemicalincoffeestorecomments()
    {
        return $this->cchemicalincoffeestorecomments;
    }

    /**
     * Set numberofanimals
     *
     * @param integer $numberofanimals
     * @return MirembeInternalInspectionForm
     */
    public function setNumberofanimals($numberofanimals)
    {
        $this->numberofanimals = $numberofanimals;
    
        return $this;
    }

    /**
     * Get numberofanimals
     *
     * @return integer 
     */
    public function getNumberofanimals()
    {
        return $this->numberofanimals;
    }

    /**
     * Set conditionofanimals
     *
     * @param boolean $conditionofanimals
     * @return MirembeInternalInspectionForm
     */
    public function setConditionofanimals($conditionofanimals)
    {
        $this->conditionofanimals = $conditionofanimals;
    
        return $this;
    }

    /**
     * Get conditionofanimals
     *
     * @return boolean 
     */
    public function getConditionofanimals()
    {
        return $this->conditionofanimals;
    }

    /**
     * Set animalcomments
     *
     * @param string $animalcomments
     * @return MirembeInternalInspectionForm
     */
    public function setAnimalcomments($animalcomments)
    {
        $this->animalcomments = $animalcomments;
    
        return $this;
    }

    /**
     * Get animalcomments
     *
     * @return string 
     */
    public function getAnimalcomments()
    {
        return $this->animalcomments;
    }

    /**
     * Set advicetofarmer
     *
     * @param string $advicetofarmer
     * @return MirembeInternalInspectionForm
     */
    public function setAdvicetofarmer($advicetofarmer)
    {
        $this->advicetofarmer = $advicetofarmer;
    
        return $this;
    }

    /**
     * Get advicetofarmer
     *
     * @return string 
     */
    public function getAdvicetofarmer()
    {
        return $this->advicetofarmer;
    }

    /**
     * Set compliancetopreviousinspection
     *
     * @param boolean $compliancetopreviousinspection
     * @return MirembeInternalInspectionForm
     */
    public function setCompliancetopreviousinspection($compliancetopreviousinspection)
    {
        $this->compliancetopreviousinspection = $compliancetopreviousinspection;
    
        return $this;
    }

    /**
     * Get compliancetopreviousinspection
     *
     * @return boolean 
     */
    public function getCompliancetopreviousinspection()
    {
        return $this->compliancetopreviousinspection;
    }

    /**
     * Set compliancetopreviousinspectioncomments
     *
     * @param string $compliancetopreviousinspectioncomments
     * @return MirembeInternalInspectionForm
     */
    public function setCompliancetopreviousinspectioncomments($compliancetopreviousinspectioncomments)
    {
        $this->compliancetopreviousinspectioncomments = $compliancetopreviousinspectioncomments;
    
        return $this;
    }

    /**
     * Get compliancetopreviousinspectioncomments
     *
     * @return string 
     */
    public function getCompliancetopreviousinspectioncomments()
    {
        return $this->compliancetopreviousinspectioncomments;
    }

    /**
     * Set coid
     *
     * @param integer $coid
     * @return MirembeInternalInspectionForm
     */
    public function setCoid($coid)
    {
        $this->coid = $coid;
    
        return $this;
    }

    /**
     * Get coid
     *
     * @return integer 
     */
    public function getCoid()
    {
        return $this->coid;
    }

    /**
     * Set dateofinspection
     *
     * @param \DateTime $dateofinspection
     * @return MirembeInternalInspectionForm
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
     * Set createdat
     *
     * @param \DateTime $createdat
     * @return MirembeInternalInspectionForm
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
     * @return MirembeInternalInspectionForm
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
     * @return MirembeInternalInspectionForm
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
