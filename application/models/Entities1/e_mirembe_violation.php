<?php
namespace models\Entities;

/**
 * @Entity
 * @Table(name="mirembe_violation_report")
 */
class E_Mirembe_Violation {

	/**
	 * @Id
	 * @Column(name="violationReportID", type="integer", length=11, nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 * */
	private $violationReportID;

	/**
	 * @Column(name="farmerID", type="integer", nullable=false)
	 * */
	private $farmerID;
	/**
	 * @Column(name="certifcationOfficerID", type="string", nullable=false)
	 * */
	private $certifcationOfficerID;
	/**
	 * @Column(name="violation", type="string", nullable=false)
	 * */
	private $violation;
	/**
	 * @Column(name="violationExplaination", type="string", nullable=false)
	 * */
	private $violationExplaination;
	/**
	 * @Column(name="independenceVerification", type="string", nullable=false)
	 * */
	private $independenceVerification;
	/**
	 * @Column(name="placeOfViolation", type="string", nullable=false)
	 * */
	private $placeOfViolation;
	/**
	 * @Column(name="dateOfObservation", type="string", nullable=false)
	 * */
	private $dateOfObservation;
	/**
	 * @Column(name="fieldSupervisor", type="string", nullable=false)
	 * */
	private $fieldSupervisor;
	/**
	 * @Column(name="supervisonDate", type="date", nullable=false)
	 * */
	private $supervisonDate;
	/**
	 * @Column(name="violationComments", type="string", nullable=false)
	 * */
	private $violationComments;

	public function getViolationReportID() {
		return $this -> violationReportID;
	}

	public function setViolationReportID($violationReportID) { $this -> violationReportID = $violationReportID;
	}

	public function getLastAssignmentDate() {
		return $this -> farmerID;
	}

	public function setFarmerID($farmerID) { $this -> farmerID = $farmerID;
	}

}
?>