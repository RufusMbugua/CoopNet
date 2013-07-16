<?php
namespace models\Entities;

/**
 * @Entity
 * @Table(name="mirembe_officers")
 */
class E_Mirembe_Officers {

	/**
	 * @Id
	 * @Column(name="officerID", type="integer", length=11, nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 * */
	private $officerID;
	/**
	 * @Column(name="officerFirstName", type="string", nullable=false)
	 * */
	private $officerFirstName;
	/**
	 * @Column(name="officerLastName", type="string", nullable=false)
	 * */
	private $officerLastName;
	/**
	 * @Column(name="officerDesignation", type="string", nullable=false)
	 * */
	private $officerDesignation;
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

	public function getOfficerID() {
		return $this -> officerID;
	}

	public function setOfficerID($officerID) { $this -> OfficerID = $officerID;
	}

	public function getOfficerFirstName() {
		return $this -> officerFirstName;
	}

	public function setOfficerFirstName($officerFirstName) { $this -> officerFirstName = $officerFirstName;
	}
	public function getOfficerLastName() {
		return $this -> officerLastName;
	}

	public function setOfficerLastName($officerLastName) { $this -> officerLastName = $officerLastName;
	}
	public function getOfficerDesignation() {
		return $this -> officerDesignation;
	}

	public function setOfficerDesignation($officerDesignation) { $this -> officerDesignation = $officerDesignation;
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