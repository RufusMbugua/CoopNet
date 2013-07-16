<?php
namespace models\Entities;

/**
 * @Entity
 * @Table(name="mirembe_parish")
 */
class E_Mirembe_Parish {

	/**
	 * @Id
	 * @Column(name="parishID", type="integer", length=11, nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 * */
	private $parishID;

	/**
	 * @Column(name="parishName", type="string", nullable=false)
	 * */
	private $parishName;

	public function getParishID() {
		return $this -> parishID;
	}

	public function setParishID($parishID) { $this -> parishID = $parishID;
	}

	public function getParishName() {
		return $this -> parishName;
	}

	public function setParishName($parishName) { $this -> parishName = $parishName;
	}

}
?>