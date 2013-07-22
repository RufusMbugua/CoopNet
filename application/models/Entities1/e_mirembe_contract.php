<?php
namespace models\Entities;

/**
 * @Entity
 * @Table(name="mirembe_contract_form")
 */
class E_Mirembe_Contract {

	/**
	 * @Id
	 * @Column(name="contractID", type="integer", length=11, nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 * */
	private $contractID;
	/**
	 * @Column(name="farmerID", type="integer", nullable=false)
	 * */
	private $farmerID;
	/**
	 * @Column(name="farmerDateOfSigning", type="integer", nullable=false)
	 * */
	private $farmerDateOfSigning;
	/**
	 * @Column(name="facilitatorName", type="integer", nullable=false)
	 * */
	private $facilitatorName;
	/**
	 * @Column(name="facilitatorDateOfSigning 	", type="double", nullable=false)
	 * */
	private $facilitatorDateOfSigning;
	/**
	 * @Column(name="createdBy", type="string", nullable=false)
	 * */
	private $createdBy;
	/**
	 * @Column(name="createdAt", type="string", nullable=false)
	 * */
	private $createdAt;
	/**
	 * @Column(name="updatedAt", type="string", nullable=false)
	 * */
	private $updatedAt;

	public function getContractID() {
		return $this -> contractID;
	}

	public function setContractID($contractID) { $this -> contractID = $contractID;
	}

	public function getFarmerID() {
		return $this -> farmerID;
	}

	public function setFarmerID($farmerID) { $this -> farmerID = $farmerID;
	}
	public function getFarmerDateOfSigning() {
		return $this -> farmerDateOfSigning;
	}

	public function setFarmerDateOfSigning($farmerDateOfSigning) { $this -> farmerDateOfSigning = $farmerDateOfSigning;
	}
	public function getFacilitatorName() {
		return $this -> facilitatorName;
	}

	public function setFacilitatorName($facilitatorName) { $this -> facilitatorName = $facilitatorName;
	}
	public function getFacilitatorDateOfSigning() {
		return $this -> facilitatorDateOfSigning;
	}

	public function setFacilitatorDateOfSigning($facilitatorDateOfSigning) { $this -> facilitatorDateOfSigning = $facilitatorDateOfSigning;
	}
	public function getCreatedBy() {
		return $this -> createdBy;
	}

	public function setCreatedBy($createdBy) { $this -> createdBy = $createdBy;
	}
	public function getCreatedAt() {
		return $this -> createdAt;
	}

	public function setCreatedAt($createdAt) { $this -> createdAt = $createdAt;
	}
	public function getUpdatedAt() {
		return $this -> updatedAt;
	}

	public function setUpdatedAt($updatedAt) { $this -> updatedAt = $updatedAt;
	}

}
?>