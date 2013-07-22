<?php


namespace models\Entities;
//use Doctrine\Mapping as ORM;

/**
 * MirembeInternalInspectionMonitoringForm
 *
 * @Table(name="mirembe_internal_inspection_monitoring_form")
 * @Entity
 */
class MirembeInternalInspectionMonitoringForm
{
    /**
     * @var integer
     *
     * @Column(name="monitoringInspectionID", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $monitoringinspectionid;

    /**
     * @var integer
     *
     * @Column(name="coID", type="integer", nullable=false)
     */
    private $coid;

    /**
     * @var string
     *
     * @Column(name="farmerCode", type="string", length=45, nullable=true)
     */
    private $farmercode;

    /**
     * @var \DateTime
     *
     * @Column(name="dateOfInspection", type="datetime", nullable=true)
     */
    private $dateofinspection;

    /**
     * @var integer
     *
     * @Column(name="monitoringCount", type="integer", nullable=true)
     */
    private $monitoringcount;

    /**
     * @var boolean
     *
     * @Column(name="coHasPreviousForm", type="boolean", nullable=true)
     */
    private $cohaspreviousform;

    /**
     * @var string
     *
     * @Column(name="coHasPreviousFormComments", type="string", length=45, nullable=true)
     */
    private $cohaspreviousformcomments;

    /**
     * @var boolean
     *
     * @Column(name="coHasGrowersList", type="boolean", nullable=true)
     */
    private $cohasgrowerslist;

    /**
     * @var string
     *
     * @Column(name="coHasGrowersListComments", type="string", length=45, nullable=true)
     */
    private $cohasgrowerslistcomments;

    /**
     * @var boolean
     *
     * @Column(name="coHasContractCopy", type="boolean", nullable=true)
     */
    private $cohascontractcopy;

    /**
     * @var string
     *
     * @Column(name="coHasContractCopyComments", type="string", length=45, nullable=true)
     */
    private $cohascontractcopycomments;

    /**
     * @var boolean
     *
     * @Column(name="coPhysicallyCountedTrees", type="boolean", nullable=true)
     */
    private $cophysicallycountedtrees;

    /**
     * @var string
     *
     * @Column(name="coPhysicallyCountedTreesComments", type="string", length=45, nullable=true)
     */
    private $cophysicallycountedtreescomments;

    /**
     * @var boolean
     *
     * @Column(name="coConfirmedNoOfPlots", type="boolean", nullable=true)
     */
    private $coconfirmednoofplots;

    /**
     * @var boolean
     *
     * @Column(name="coMovedAroundFarm", type="boolean", nullable=true)
     */
    private $comovedaroundfarm;

    /**
     * @var string
     *
     * @Column(name="coMovedAroundFarmComments", type="string", length=45, nullable=true)
     */
    private $comovedaroundfarmcomments;

    /**
     * @var boolean
     *
     * @Column(name="coVisuallyConfirmedFAnswers", type="boolean", nullable=true)
     */
    private $covisuallyconfirmedfanswers;

    /**
     * @var string
     *
     * @Column(name="coVisuallyConfirmedFAnswersComments", type="string", length=45, nullable=true)
     */
    private $covisuallyconfirmedfanswerscomments;

    /**
     * @var boolean
     *
     * @Column(name="coCheckedFieldBoundaries", type="boolean", nullable=true)
     */
    private $cocheckedfieldboundaries;

    /**
     * @var string
     *
     * @Column(name="coCheckedFieldBoundariesComments", type="string", length=45, nullable=true)
     */
    private $cocheckedfieldboundariescomments;

    /**
     * @var boolean
     *
     * @Column(name="coInternalCtrlPtsRecProperly", type="boolean", nullable=true)
     */
    private $cointernalctrlptsrecproperly;

    /**
     * @var string
     *
     * @Column(name="coInternalCtrlPtsRecProperlyComments", type="string", length=45, nullable=true)
     */
    private $cointernalctrlptsrecproperlycomments;

    /**
     * @var boolean
     *
     * @Column(name="coCheckedHygiene", type="boolean", nullable=true)
     */
    private $cocheckedhygiene;

    /**
     * @var string
     *
     * @Column(name="coCheckedHygieneComments", type="string", length=45, nullable=true)
     */
    private $cocheckedhygienecomments;

    /**
     * @var boolean
     *
     * @Column(name="coGaveRelevantAdvice", type="boolean", nullable=true)
     */
    private $cogaverelevantadvice;

    /**
     * @var string
     *
     * @Column(name="coGaveRelevantAdviceComments", type="string", length=45, nullable=true)
     */
    private $cogaverelevantadvicecomments;

    /**
     * @var boolean
     *
     * @Column(name="coActedOnDeviations", type="boolean", nullable=true)
     */
    private $coactedondeviations;

    /**
     * @var string
     *
     * @Column(name="coActedOnDeviationsComments", type="string", length=45, nullable=true)
     */
    private $coactedondeviationscomments;

    /**
     * @var boolean
     *
     * @Column(name="coInformedFarmerOnDeviations", type="boolean", nullable=true)
     */
    private $coinformedfarmerondeviations;

    /**
     * @var string
     *
     * @Column(name="coInformedFarmerOnDeviationsComments", type="string", length=45, nullable=true)
     */
    private $coinformedfarmerondeviationscomments;

    /**
     * @var boolean
     *
     * @Column(name="coUpdatedGrowersList", type="boolean", nullable=true)
     */
    private $coupdatedgrowerslist;

    /**
     * @var string
     *
     * @Column(name="coUpdatedGrowersListComments", type="string", length=45, nullable=true)
     */
    private $coupdatedgrowerslistcomments;

    /**
     * @var boolean
     *
     * @Column(name="coTookSufficientInspectionTime", type="boolean", nullable=true)
     */
    private $cotooksufficientinspectiontime;

    /**
     * @var string
     *
     * @Column(name="coTookSufficientInspectionTimeComments", type="string", length=45, nullable=true)
     */
    private $cotooksufficientinspectiontimecomments;

    /**
     * @var string
     *
     * @Column(name="agronomistOtherComments", type="string", length=255, nullable=true)
     */
    private $agronomistothercomments;

    /**
     * @var integer
     *
     * @Column(name="agronomistID", type="integer", nullable=true)
     */
    private $agronomistid;

    /**
     * @var string
     *
     * @Column(name="dateOfMonitoring", type="string", length=45, nullable=true)
     */
    private $dateofmonitoring;

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
     * Get monitoringinspectionid
     *
     * @return integer 
     */
    public function getMonitoringinspectionid()
    {
        return $this->monitoringinspectionid;
    }

    /**
     * Set coid
     *
     * @param integer $coid
     * @return MirembeInternalInspectionMonitoringForm
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
     * Set farmercode
     *
     * @param string $farmercode
     * @return MirembeInternalInspectionMonitoringForm
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
     * Set dateofinspection
     *
     * @param \DateTime $dateofinspection
     * @return MirembeInternalInspectionMonitoringForm
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
     * Set monitoringcount
     *
     * @param integer $monitoringcount
     * @return MirembeInternalInspectionMonitoringForm
     */
    public function setMonitoringcount($monitoringcount)
    {
        $this->monitoringcount = $monitoringcount;
    
        return $this;
    }

    /**
     * Get monitoringcount
     *
     * @return integer 
     */
    public function getMonitoringcount()
    {
        return $this->monitoringcount;
    }

    /**
     * Set cohaspreviousform
     *
     * @param boolean $cohaspreviousform
     * @return MirembeInternalInspectionMonitoringForm
     */
    public function setCohaspreviousform($cohaspreviousform)
    {
        $this->cohaspreviousform = $cohaspreviousform;
    
        return $this;
    }

    /**
     * Get cohaspreviousform
     *
     * @return boolean 
     */
    public function getCohaspreviousform()
    {
        return $this->cohaspreviousform;
    }

    /**
     * Set cohaspreviousformcomments
     *
     * @param string $cohaspreviousformcomments
     * @return MirembeInternalInspectionMonitoringForm
     */
    public function setCohaspreviousformcomments($cohaspreviousformcomments)
    {
        $this->cohaspreviousformcomments = $cohaspreviousformcomments;
    
        return $this;
    }

    /**
     * Get cohaspreviousformcomments
     *
     * @return string 
     */
    public function getCohaspreviousformcomments()
    {
        return $this->cohaspreviousformcomments;
    }

    /**
     * Set cohasgrowerslist
     *
     * @param boolean $cohasgrowerslist
     * @return MirembeInternalInspectionMonitoringForm
     */
    public function setCohasgrowerslist($cohasgrowerslist)
    {
        $this->cohasgrowerslist = $cohasgrowerslist;
    
        return $this;
    }

    /**
     * Get cohasgrowerslist
     *
     * @return boolean 
     */
    public function getCohasgrowerslist()
    {
        return $this->cohasgrowerslist;
    }

    /**
     * Set cohasgrowerslistcomments
     *
     * @param string $cohasgrowerslistcomments
     * @return MirembeInternalInspectionMonitoringForm
     */
    public function setCohasgrowerslistcomments($cohasgrowerslistcomments)
    {
        $this->cohasgrowerslistcomments = $cohasgrowerslistcomments;
    
        return $this;
    }

    /**
     * Get cohasgrowerslistcomments
     *
     * @return string 
     */
    public function getCohasgrowerslistcomments()
    {
        return $this->cohasgrowerslistcomments;
    }

    /**
     * Set cohascontractcopy
     *
     * @param boolean $cohascontractcopy
     * @return MirembeInternalInspectionMonitoringForm
     */
    public function setCohascontractcopy($cohascontractcopy)
    {
        $this->cohascontractcopy = $cohascontractcopy;
    
        return $this;
    }

    /**
     * Get cohascontractcopy
     *
     * @return boolean 
     */
    public function getCohascontractcopy()
    {
        return $this->cohascontractcopy;
    }

    /**
     * Set cohascontractcopycomments
     *
     * @param string $cohascontractcopycomments
     * @return MirembeInternalInspectionMonitoringForm
     */
    public function setCohascontractcopycomments($cohascontractcopycomments)
    {
        $this->cohascontractcopycomments = $cohascontractcopycomments;
    
        return $this;
    }

    /**
     * Get cohascontractcopycomments
     *
     * @return string 
     */
    public function getCohascontractcopycomments()
    {
        return $this->cohascontractcopycomments;
    }

    /**
     * Set cophysicallycountedtrees
     *
     * @param boolean $cophysicallycountedtrees
     * @return MirembeInternalInspectionMonitoringForm
     */
    public function setCophysicallycountedtrees($cophysicallycountedtrees)
    {
        $this->cophysicallycountedtrees = $cophysicallycountedtrees;
    
        return $this;
    }

    /**
     * Get cophysicallycountedtrees
     *
     * @return boolean 
     */
    public function getCophysicallycountedtrees()
    {
        return $this->cophysicallycountedtrees;
    }

    /**
     * Set cophysicallycountedtreescomments
     *
     * @param string $cophysicallycountedtreescomments
     * @return MirembeInternalInspectionMonitoringForm
     */
    public function setCophysicallycountedtreescomments($cophysicallycountedtreescomments)
    {
        $this->cophysicallycountedtreescomments = $cophysicallycountedtreescomments;
    
        return $this;
    }

    /**
     * Get cophysicallycountedtreescomments
     *
     * @return string 
     */
    public function getCophysicallycountedtreescomments()
    {
        return $this->cophysicallycountedtreescomments;
    }

    /**
     * Set coconfirmednoofplots
     *
     * @param boolean $coconfirmednoofplots
     * @return MirembeInternalInspectionMonitoringForm
     */
    public function setCoconfirmednoofplots($coconfirmednoofplots)
    {
        $this->coconfirmednoofplots = $coconfirmednoofplots;
    
        return $this;
    }

    /**
     * Get coconfirmednoofplots
     *
     * @return boolean 
     */
    public function getCoconfirmednoofplots()
    {
        return $this->coconfirmednoofplots;
    }

    /**
     * Set comovedaroundfarm
     *
     * @param boolean $comovedaroundfarm
     * @return MirembeInternalInspectionMonitoringForm
     */
    public function setComovedaroundfarm($comovedaroundfarm)
    {
        $this->comovedaroundfarm = $comovedaroundfarm;
    
        return $this;
    }

    /**
     * Get comovedaroundfarm
     *
     * @return boolean 
     */
    public function getComovedaroundfarm()
    {
        return $this->comovedaroundfarm;
    }

    /**
     * Set comovedaroundfarmcomments
     *
     * @param string $comovedaroundfarmcomments
     * @return MirembeInternalInspectionMonitoringForm
     */
    public function setComovedaroundfarmcomments($comovedaroundfarmcomments)
    {
        $this->comovedaroundfarmcomments = $comovedaroundfarmcomments;
    
        return $this;
    }

    /**
     * Get comovedaroundfarmcomments
     *
     * @return string 
     */
    public function getComovedaroundfarmcomments()
    {
        return $this->comovedaroundfarmcomments;
    }

    /**
     * Set covisuallyconfirmedfanswers
     *
     * @param boolean $covisuallyconfirmedfanswers
     * @return MirembeInternalInspectionMonitoringForm
     */
    public function setCovisuallyconfirmedfanswers($covisuallyconfirmedfanswers)
    {
        $this->covisuallyconfirmedfanswers = $covisuallyconfirmedfanswers;
    
        return $this;
    }

    /**
     * Get covisuallyconfirmedfanswers
     *
     * @return boolean 
     */
    public function getCovisuallyconfirmedfanswers()
    {
        return $this->covisuallyconfirmedfanswers;
    }

    /**
     * Set covisuallyconfirmedfanswerscomments
     *
     * @param string $covisuallyconfirmedfanswerscomments
     * @return MirembeInternalInspectionMonitoringForm
     */
    public function setCovisuallyconfirmedfanswerscomments($covisuallyconfirmedfanswerscomments)
    {
        $this->covisuallyconfirmedfanswerscomments = $covisuallyconfirmedfanswerscomments;
    
        return $this;
    }

    /**
     * Get covisuallyconfirmedfanswerscomments
     *
     * @return string 
     */
    public function getCovisuallyconfirmedfanswerscomments()
    {
        return $this->covisuallyconfirmedfanswerscomments;
    }

    /**
     * Set cocheckedfieldboundaries
     *
     * @param boolean $cocheckedfieldboundaries
     * @return MirembeInternalInspectionMonitoringForm
     */
    public function setCocheckedfieldboundaries($cocheckedfieldboundaries)
    {
        $this->cocheckedfieldboundaries = $cocheckedfieldboundaries;
    
        return $this;
    }

    /**
     * Get cocheckedfieldboundaries
     *
     * @return boolean 
     */
    public function getCocheckedfieldboundaries()
    {
        return $this->cocheckedfieldboundaries;
    }

    /**
     * Set cocheckedfieldboundariescomments
     *
     * @param string $cocheckedfieldboundariescomments
     * @return MirembeInternalInspectionMonitoringForm
     */
    public function setCocheckedfieldboundariescomments($cocheckedfieldboundariescomments)
    {
        $this->cocheckedfieldboundariescomments = $cocheckedfieldboundariescomments;
    
        return $this;
    }

    /**
     * Get cocheckedfieldboundariescomments
     *
     * @return string 
     */
    public function getCocheckedfieldboundariescomments()
    {
        return $this->cocheckedfieldboundariescomments;
    }

    /**
     * Set cointernalctrlptsrecproperly
     *
     * @param boolean $cointernalctrlptsrecproperly
     * @return MirembeInternalInspectionMonitoringForm
     */
    public function setCointernalctrlptsrecproperly($cointernalctrlptsrecproperly)
    {
        $this->cointernalctrlptsrecproperly = $cointernalctrlptsrecproperly;
    
        return $this;
    }

    /**
     * Get cointernalctrlptsrecproperly
     *
     * @return boolean 
     */
    public function getCointernalctrlptsrecproperly()
    {
        return $this->cointernalctrlptsrecproperly;
    }

    /**
     * Set cointernalctrlptsrecproperlycomments
     *
     * @param string $cointernalctrlptsrecproperlycomments
     * @return MirembeInternalInspectionMonitoringForm
     */
    public function setCointernalctrlptsrecproperlycomments($cointernalctrlptsrecproperlycomments)
    {
        $this->cointernalctrlptsrecproperlycomments = $cointernalctrlptsrecproperlycomments;
    
        return $this;
    }

    /**
     * Get cointernalctrlptsrecproperlycomments
     *
     * @return string 
     */
    public function getCointernalctrlptsrecproperlycomments()
    {
        return $this->cointernalctrlptsrecproperlycomments;
    }

    /**
     * Set cocheckedhygiene
     *
     * @param boolean $cocheckedhygiene
     * @return MirembeInternalInspectionMonitoringForm
     */
    public function setCocheckedhygiene($cocheckedhygiene)
    {
        $this->cocheckedhygiene = $cocheckedhygiene;
    
        return $this;
    }

    /**
     * Get cocheckedhygiene
     *
     * @return boolean 
     */
    public function getCocheckedhygiene()
    {
        return $this->cocheckedhygiene;
    }

    /**
     * Set cocheckedhygienecomments
     *
     * @param string $cocheckedhygienecomments
     * @return MirembeInternalInspectionMonitoringForm
     */
    public function setCocheckedhygienecomments($cocheckedhygienecomments)
    {
        $this->cocheckedhygienecomments = $cocheckedhygienecomments;
    
        return $this;
    }

    /**
     * Get cocheckedhygienecomments
     *
     * @return string 
     */
    public function getCocheckedhygienecomments()
    {
        return $this->cocheckedhygienecomments;
    }

    /**
     * Set cogaverelevantadvice
     *
     * @param boolean $cogaverelevantadvice
     * @return MirembeInternalInspectionMonitoringForm
     */
    public function setCogaverelevantadvice($cogaverelevantadvice)
    {
        $this->cogaverelevantadvice = $cogaverelevantadvice;
    
        return $this;
    }

    /**
     * Get cogaverelevantadvice
     *
     * @return boolean 
     */
    public function getCogaverelevantadvice()
    {
        return $this->cogaverelevantadvice;
    }

    /**
     * Set cogaverelevantadvicecomments
     *
     * @param string $cogaverelevantadvicecomments
     * @return MirembeInternalInspectionMonitoringForm
     */
    public function setCogaverelevantadvicecomments($cogaverelevantadvicecomments)
    {
        $this->cogaverelevantadvicecomments = $cogaverelevantadvicecomments;
    
        return $this;
    }

    /**
     * Get cogaverelevantadvicecomments
     *
     * @return string 
     */
    public function getCogaverelevantadvicecomments()
    {
        return $this->cogaverelevantadvicecomments;
    }

    /**
     * Set coactedondeviations
     *
     * @param boolean $coactedondeviations
     * @return MirembeInternalInspectionMonitoringForm
     */
    public function setCoactedondeviations($coactedondeviations)
    {
        $this->coactedondeviations = $coactedondeviations;
    
        return $this;
    }

    /**
     * Get coactedondeviations
     *
     * @return boolean 
     */
    public function getCoactedondeviations()
    {
        return $this->coactedondeviations;
    }

    /**
     * Set coactedondeviationscomments
     *
     * @param string $coactedondeviationscomments
     * @return MirembeInternalInspectionMonitoringForm
     */
    public function setCoactedondeviationscomments($coactedondeviationscomments)
    {
        $this->coactedondeviationscomments = $coactedondeviationscomments;
    
        return $this;
    }

    /**
     * Get coactedondeviationscomments
     *
     * @return string 
     */
    public function getCoactedondeviationscomments()
    {
        return $this->coactedondeviationscomments;
    }

    /**
     * Set coinformedfarmerondeviations
     *
     * @param boolean $coinformedfarmerondeviations
     * @return MirembeInternalInspectionMonitoringForm
     */
    public function setCoinformedfarmerondeviations($coinformedfarmerondeviations)
    {
        $this->coinformedfarmerondeviations = $coinformedfarmerondeviations;
    
        return $this;
    }

    /**
     * Get coinformedfarmerondeviations
     *
     * @return boolean 
     */
    public function getCoinformedfarmerondeviations()
    {
        return $this->coinformedfarmerondeviations;
    }

    /**
     * Set coinformedfarmerondeviationscomments
     *
     * @param string $coinformedfarmerondeviationscomments
     * @return MirembeInternalInspectionMonitoringForm
     */
    public function setCoinformedfarmerondeviationscomments($coinformedfarmerondeviationscomments)
    {
        $this->coinformedfarmerondeviationscomments = $coinformedfarmerondeviationscomments;
    
        return $this;
    }

    /**
     * Get coinformedfarmerondeviationscomments
     *
     * @return string 
     */
    public function getCoinformedfarmerondeviationscomments()
    {
        return $this->coinformedfarmerondeviationscomments;
    }

    /**
     * Set coupdatedgrowerslist
     *
     * @param boolean $coupdatedgrowerslist
     * @return MirembeInternalInspectionMonitoringForm
     */
    public function setCoupdatedgrowerslist($coupdatedgrowerslist)
    {
        $this->coupdatedgrowerslist = $coupdatedgrowerslist;
    
        return $this;
    }

    /**
     * Get coupdatedgrowerslist
     *
     * @return boolean 
     */
    public function getCoupdatedgrowerslist()
    {
        return $this->coupdatedgrowerslist;
    }

    /**
     * Set coupdatedgrowerslistcomments
     *
     * @param string $coupdatedgrowerslistcomments
     * @return MirembeInternalInspectionMonitoringForm
     */
    public function setCoupdatedgrowerslistcomments($coupdatedgrowerslistcomments)
    {
        $this->coupdatedgrowerslistcomments = $coupdatedgrowerslistcomments;
    
        return $this;
    }

    /**
     * Get coupdatedgrowerslistcomments
     *
     * @return string 
     */
    public function getCoupdatedgrowerslistcomments()
    {
        return $this->coupdatedgrowerslistcomments;
    }

    /**
     * Set cotooksufficientinspectiontime
     *
     * @param boolean $cotooksufficientinspectiontime
     * @return MirembeInternalInspectionMonitoringForm
     */
    public function setCotooksufficientinspectiontime($cotooksufficientinspectiontime)
    {
        $this->cotooksufficientinspectiontime = $cotooksufficientinspectiontime;
    
        return $this;
    }

    /**
     * Get cotooksufficientinspectiontime
     *
     * @return boolean 
     */
    public function getCotooksufficientinspectiontime()
    {
        return $this->cotooksufficientinspectiontime;
    }

    /**
     * Set cotooksufficientinspectiontimecomments
     *
     * @param string $cotooksufficientinspectiontimecomments
     * @return MirembeInternalInspectionMonitoringForm
     */
    public function setCotooksufficientinspectiontimecomments($cotooksufficientinspectiontimecomments)
    {
        $this->cotooksufficientinspectiontimecomments = $cotooksufficientinspectiontimecomments;
    
        return $this;
    }

    /**
     * Get cotooksufficientinspectiontimecomments
     *
     * @return string 
     */
    public function getCotooksufficientinspectiontimecomments()
    {
        return $this->cotooksufficientinspectiontimecomments;
    }

    /**
     * Set agronomistothercomments
     *
     * @param string $agronomistothercomments
     * @return MirembeInternalInspectionMonitoringForm
     */
    public function setAgronomistothercomments($agronomistothercomments)
    {
        $this->agronomistothercomments = $agronomistothercomments;
    
        return $this;
    }

    /**
     * Get agronomistothercomments
     *
     * @return string 
     */
    public function getAgronomistothercomments()
    {
        return $this->agronomistothercomments;
    }

    /**
     * Set agronomistid
     *
     * @param integer $agronomistid
     * @return MirembeInternalInspectionMonitoringForm
     */
    public function setAgronomistid($agronomistid)
    {
        $this->agronomistid = $agronomistid;
    
        return $this;
    }

    /**
     * Get agronomistid
     *
     * @return integer 
     */
    public function getAgronomistid()
    {
        return $this->agronomistid;
    }

    /**
     * Set dateofmonitoring
     *
     * @param string $dateofmonitoring
     * @return MirembeInternalInspectionMonitoringForm
     */
    public function setDateofmonitoring($dateofmonitoring)
    {
        $this->dateofmonitoring = $dateofmonitoring;
    
        return $this;
    }

    /**
     * Get dateofmonitoring
     *
     * @return string 
     */
    public function getDateofmonitoring()
    {
        return $this->dateofmonitoring;
    }

    /**
     * Set createdat
     *
     * @param \DateTime $createdat
     * @return MirembeInternalInspectionMonitoringForm
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
     * @return MirembeInternalInspectionMonitoringForm
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
     * @return MirembeInternalInspectionMonitoringForm
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
