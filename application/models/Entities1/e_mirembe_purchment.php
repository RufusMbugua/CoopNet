<?php
namespace models\Entities;

/**
 * @Entity
 * @Table(name="mirembe_coffee_purchment_inspection")
 */
class E_Mirembe_Purchment {

	/**
	 * @Id
	 * @Column(name="purchmentID", type="integer", length=11, nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 * */
	private $purchmentID;
	/**
	 * @Column(name="dateOfDelivery", type="string", nullable=false)
	 * */
	private $dateOfDelivery;
	/**
	 * @Column(name="parishCode", type="integer", nullable=false)
	 * */
	private $parishCode;
	/**
	 * @Column(name="cropID", type="integer", nullable=false)
	 * */
	private $cropID;
	/**
	 * @Column(name="moistureContent", type="double", nullable=false)
	 * */
	private $moistureContent;
	/**
	 * @Column(name="defectPercentage", type="double", nullable=false)
	 * */
	private $defectPercentage;
	/**
	 * @Column(name="reasonsForDecision", type="double", nullable=false)
	 * */
	private $reasonsForDecision;
	/**
	 * @Column(name="coffeeGradedBy", type="double", nullable=false)
	 * */
	private $coffeeGradedBy;
	/**
	 * @Column(name="certificationOfficer", type="double", nullable=false)
	 * */
	private $certificationOfficer;

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