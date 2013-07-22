<?php
namespace models\Entities;

/**
 * @Entity
 * @Table(name="mirembe_certification_officers")
 */
class E_Mirembe_Certification_Officer {

	/**
	 * @Id
	 * @Column(name="certificationOfficerID", type="integer", length=11, nullable=false)
	 * 
	 * */
	private $certificationOfficerID;

	/**
	 * @Column(name="lastAssignmentDate", type="string", nullable=false)
	 * */
	private $lastAssignmentDate;

	public function getCertificationOfficerID() {
		return $this -> certificationOfficerID;
	}

	public function setCertificationOfficerID($certificationOfficerID) { $this -> certificationOfficerID = $certificationOfficerID;
	}

	public function getLastAssignmentDate() {
		return $this -> lastAssignmentDate;
	}

	public function setLastAssignmentDate($lastAssignmentDate) { $this -> lastAssignmentDate = $lastAssignmentDate;
	}

}
?>