<?php
namespace models\Entities;
//use Doctrine\Mapping as ORM;

/**
 * MirembeAgronomists
 *
 * @Table(name="mirembe_agronomists")
 * @Entity
 */
class MirembeAgronomists {
	/**
	 * @var integer
	 *
	 * @Column(name="agronomistsID", type="integer", nullable=false)
	 * @Id
	 * 
	 */
	private $agronomistsid;

	/**
	 * @var \DateTime
	 *
	 * @Column(name="lastAssignmentDate", type="string", nullable=true)
	 */
	private $lastassignmentdate;

	/**
	 * Get agronomistsid
	 *
	 * @return integer
	 */
	 public function setAgronomistsid($agronomistsid) {
		$this -> agronomistsid = $agronomistsid;

		return $this;
	}
	public function getAgronomistsid() {
		return $this -> agronomistsid;
	}

	public function setLastassignmentdate($lastassignmentdate) {
		$this -> lastassignmentdate = $lastassignmentdate;

		return $this;
	}

	public function getLastassignmentdate() {
		return $this -> lastassignmentdate;
	}

}
