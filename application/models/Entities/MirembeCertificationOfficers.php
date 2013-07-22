<?php


namespace models\Entities;
//use Doctrine\Mapping as ORM;

/**
 * MirembeCertificationOfficers
 *
 * @Table(name="mirembe_certification_officers")
 * @Entity
 */
class MirembeCertificationOfficers
{
    /**
     * @var integer
     *
     * @Column(name="certificationOfficerID", type="integer", nullable=false)
     * @Id
     * 
     */
    private $certificationofficerid;

    /**
     * 
     *
     * @Column(name="lastAssignmentDate", type="string", nullable=true)
     */
    private $lastassignmentdate;

	public function setCertificationofficerid($certificationofficerid)
    {
        $this->certificationofficerid = $certificationofficerid;
    
        return $this;
    }

    /**
     * Get certificationofficerid
     *
     * @return integer 
     */
    public function getCertificationofficerid()
    {
        return $this->certificationofficerid;
    }

    /**
     * Set lastassignmentdate
     *
     * @param \DateTime $lastassignmentdate
     * @return MirembeCertificationOfficers
     */
    public function setLastassignmentdate($lastassignmentdate)
    {
        $this->lastassignmentdate = $lastassignmentdate;
    
        return $this;
    }

    /**
     * Get lastassignmentdate
     *
     * @return \DateTime 
     */
    public function getLastassignmentdate()
    {
        return $this->lastassignmentdate;
    }
}
