<?php


namespace models\Entities;
//use Doctrine\Mapping as ORM;

/**
 * MirembeViolationReport
 *
 * @Table(name="mirembe_violation_report")
 * @Entity
 */
class MirembeViolationReport
{
    /**
     * @var integer
     *
     * @Column(name="violationReportID", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="AUTO")
     */
    private $violationreportid;

    /**
     * 
     *
     * @Column(name="farmerID", type="integer", nullable=false)
     */
    private $farmerid;

    /**
     * @var integer
     *
     * @Column(name="certifcationOfficerID", type="integer", nullable=false)
     */
    private $certifcationofficerid;

    /**
     * @var string
     *
     * @Column(name="violation", type="string", length=255, nullable=false)
     */
    private $violation;

    /**
     * @var string
     *
     * @Column(name="violationExplaination", type="text", nullable=true)
     */
    private $violationexplaination;

    /**
     * @var string
     *
     * @Column(name="independenceVerification", type="string", length=255, nullable=true)
     */
    private $independenceverification;

    /**
     * @var string
     *
     * @Column(name="placeOfViolation", type="string", length=45, nullable=false)
     */
    private $placeofviolation;

    /**
     * 
     *
     * @Column(name="dateOfObservation", type="string", nullable=false)
     */
    private $dateofobservation;

    /**
     * @var string
     *
     * @Column(name="fieldSupervisor", type="string", length=45, nullable=true)
     */
    private $fieldsupervisor;

    /**
     * 
     *
     * @Column(name="supervisonDate", type="string", nullable=true)
     */
    private $supervisondate;

    /**
     * @var string
     *
     * @Column(name="violationComments", type="string", length=255, nullable=true)
     */
    private $violationcomments;


    /**
     * Get violationreportid
     *
     * @return integer 
     */
    public function getViolationreportid()
    {
        return $this->violationreportid;
    }

    /**
     * Set farmerid
     *
     * @param integer $farmerid
     * @return MirembeViolationReport
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
     * Set certifcationofficerid
     *
     * @param integer $certifcationofficerid
     * @return MirembeViolationReport
     */
    public function setCertifcationofficerid($certifcationofficerid)
    {
        $this->certifcationofficerid = $certifcationofficerid;
    
        return $this;
    }

    /**
     * Get certifcationofficerid
     *
     * @return integer 
     */
    public function getCertifcationofficerid()
    {
        return $this->certifcationofficerid;
    }

    /**
     * Set violation
     *
     * @param string $violation
     * @return MirembeViolationReport
     */
    public function setViolation($violation)
    {
        $this->violation = $violation;
    
        return $this;
    }

    /**
     * Get violation
     *
     * @return string 
     */
    public function getViolation()
    {
        return $this->violation;
    }

    /**
     * Set violationexplaination
     *
     * @param string $violationexplaination
     * @return MirembeViolationReport
     */
    public function setViolationexplaination($violationexplaination)
    {
        $this->violationexplaination = $violationexplaination;
    
        return $this;
    }

    /**
     * Get violationexplaination
     *
     * @return string 
     */
    public function getViolationexplaination()
    {
        return $this->violationexplaination;
    }

    /**
     * Set independenceverification
     *
     * @param string $independenceverification
     * @return MirembeViolationReport
     */
    public function setIndependenceverification($independenceverification)
    {
        $this->independenceverification = $independenceverification;
    
        return $this;
    }

    /**
     * Get independenceverification
     *
     * @return string 
     */
    public function getIndependenceverification()
    {
        return $this->independenceverification;
    }

    /**
     * Set placeofviolation
     *
     * @param string $placeofviolation
     * @return MirembeViolationReport
     */
    public function setPlaceofviolation($placeofviolation)
    {
        $this->placeofviolation = $placeofviolation;
    
        return $this;
    }

    /**
     * Get placeofviolation
     *
     * @return string 
     */
    public function getPlaceofviolation()
    {
        return $this->placeofviolation;
    }

    /**
     * Set dateofobservation
     *
     * @param \DateTime $dateofobservation
     * @return MirembeViolationReport
     */
    public function setDateofobservation($dateofobservation)
    {
        $this->dateofobservation = $dateofobservation;
    
        return $this;
    }

    /**
     * Get dateofobservation
     *
     * @return \DateTime 
     */
    public function getDateofobservation()
    {
        return $this->dateofobservation;
    }

    /**
     * Set fieldsupervisor
     *
     * @param string $fieldsupervisor
     * @return MirembeViolationReport
     */
    public function setFieldsupervisor($fieldsupervisor)
    {
        $this->fieldsupervisor = $fieldsupervisor;
    
        return $this;
    }

    /**
     * Get fieldsupervisor
     *
     * @return string 
     */
    public function getFieldsupervisor()
    {
        return $this->fieldsupervisor;
    }

    /**
     * Set supervisondate
     *
     * @param \DateTime $supervisondate
     * @return MirembeViolationReport
     */
    public function setSupervisondate($supervisondate)
    {
        $this->supervisondate = $supervisondate;
    
        return $this;
    }

    /**
     * Get supervisondate
     *
     * @return \DateTime 
     */
    public function getSupervisondate()
    {
        return $this->supervisondate;
    }

    /**
     * Set violationcomments
     *
     * @param string $violationcomments
     * @return MirembeViolationReport
     */
    public function setViolationcomments($violationcomments)
    {
        $this->violationcomments = $violationcomments;
    
        return $this;
    }

    /**
     * Get violationcomments
     *
     * @return string 
     */
    public function getViolationcomments()
    {
        return $this->violationcomments;
    }
}
