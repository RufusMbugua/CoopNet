<?php
namespace models\Entities;

/**
 * @Entity
 * @Table(name="mirembe_excess_delivery")
 */
class E_Mirembe_Excess {

	/**
	 * @Id
	 * @Column(name="excessDeliveryReportID", type="integer", length=11, nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 * */
	private $excessDeliveryReportID;
	/**
	 * @Column(name="farmerID", type="integer", nullable=false)
	 * */
	private $farmerID;
	/**
	 * @Column(name="cropID", type="integer", nullable=false)
	 * */
	private $cropID;
	/**
	 * @Column(name="dateOfReporting", type="integer", nullable=false)
	 * */
	private $dateOfReporting;
	/**
	 * @Column(name="dateOfInspection", type="date", nullable=false)
	 * */
	private $dateOfInspection;
	/**
	 * @Column(name="facilitatorID", type="date", nullable=false)
	 * */
	private $facilitatorID;
	/**
	 * @Column(name="reasonsForExcessDelivery", type="integer", nullable=false)
	 * */
	private $reasonsForExcessDelivery;
	/**
	 * @Column(name="reasonForExcessProductionValid", type="string", nullable=false)
	 * */
	private $reasonForExcessProductionValid;
	/**
	 * @Column(name="anyRisks", type="integer", nullable=false)
	 * */
	private $anyRisks;
	/**
	 * @Column(name="actionsTaken", type="integer", nullable=false)
	 * */
	private $actionsTaken;
	/**
	 * @Column(name="excessProductionAcceptable", type="string", nullable=false)
	 * */
	private $excessProductionAcceptable;

	public function getPurchmentID() {
		return $this -> purchmentID;
	}

	public function setPurchmentID($purchmentID) { $this -> purchmentID = $purchmentID;
	}

	public function getDateOfDelivery() {
		return $this -> dateOfDelivery;
	}

	public function setDateOfDelivery($dateOfDelivery) { $this -> dateOfDelivery = $dateOfDelivery;
	}
	public function getParishCode() {
		return $this -> parishCode;
	}

	public function setParishCode($parishCode) { $this -> parishCode = $parishCode;
	}
	public function getCropID() {
		return $this -> cropID;
	}

	public function setCropID($cropID) { $this -> cropID = $cropID;
	}
	public function getMoistureContent() {
		return $this -> moistureContent;
	}

	public function setMoistureContent($moistureContent) { $this -> moistureContent = $moistureContent;
	}
	public function getDefectPercentage() {
		return $this -> defectPercentage;
	}

	public function setDefectPercentage($defectPercentage) { $this -> defectPercentage = $defectPercentage;
	}
	public function getReasonsForDecision() {
		return $this -> reasonsForDecision;
	}

	public function setReasonsForDecision($reasonsForDecision) { $this -> reasonsForDecision = $reasonsForDecision;
	}
	public function getCoffeeGradedBy() {
		return $this -> coffeeGradedBy;
	}

	public function setCoffeeGradedBy($coffeeGradedBy) { $this -> coffeeGradedBy = $coffeeGradedBy;
	}
	public function getCertificationOfficer() {
		return $this -> certificationOfficer;
	}

	public function setCertificationOfficer($certificationOfficer) { $this -> certificationOfficer = $certificationOfficer;
	}

}
?>