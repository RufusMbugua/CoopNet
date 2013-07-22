<?php
namespace models\Entities;

/**
 * @Entity
 * @Table(name="mirembe_crops")
 */
class E_Mirembe_Crops {

	/**
	 * @Id
	 * @Column(name="cropID", type="integer", length=11, nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 * */
	private $cropID;

	/**
	 * @Column(name="cropName", type="string", nullable=false)
	 * */
	private $cropName;

	public function getCropID() {
		return $this -> cropID;
	}

	public function setCropID($cropID) { $this -> cropID = $cropID;
	}

	public function getParishName() {
		return $this -> parishName;
	}

	public function setCropName($cropName) { $this -> cropName = $cropName;
	}

}
?>