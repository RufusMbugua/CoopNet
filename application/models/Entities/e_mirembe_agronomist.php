<?php
namespace models\Entities;

/**
 * @Entity
 * @Table(name="mirembe_agronomists")
 */
class E_Mirembe_Agronomist {

	/**
	 * @Id
	 * @Column(name="agronomistsID", type="integer", length=11, nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 * */
	private $agronomistsID;

	/**
	 * @Column(name="lastAssignmentDate", type="string", nullable=false)
	 * */
	private $lastAssignmentDate;

	public function getAgronomistID() {
		return $this -> agronomistsID;
	}

	public function setAgronomist($agronomistsID) { $this -> agronomistsID = $agronomistsID;
	}

	public function getLastAssignmentDate() {
		return $this -> lastAssignmentDate;
	}

	public function setLastAssignmentDate($lastAssignmentDate) { $this -> lastAssignmentDate = $lastAssignmentDate;
	}

}
?>