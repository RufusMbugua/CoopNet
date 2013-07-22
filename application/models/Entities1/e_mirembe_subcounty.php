<?php
namespace models\Entities;

/**
 * @Entity
 * @Table(name="mirembe_subcounty")
 */
class E_Mirembe_Subcounty {

	/**
	 * @Id
	 * @Column(name="subcountyID", type="integer", length=11, nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 * */
	private $subcountyID;

	/**
	 * @Column(name="subcountyName", type="string", nullable=false)
	 * */
	private $subcountyName;

	public function getSubcountyID() {
		return $this -> subcountyID;
	}

	public function setSubcountyID($subcountyID) { $this -> subcountyID = $subcountyID;
	}

	public function getSubcountyName() {
		return $this -> subcountyName;
	}

	public function setSubcountyName($subcountyName) { $this -> subcountyName = $subcountyName;
	}

}
?>