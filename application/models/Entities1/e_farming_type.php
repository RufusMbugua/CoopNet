<?php
namespace models\Entities;

/**
 * @Entity
 * @Table(name="mirembe_farming_type")
 */
class E_Mirembe_Farming_Type {

	/**
	 * @Id
	 * @Column(name="farmingTypeID", type="integer", length=11, nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 * */
	private $farmingTypeID;

	/**
	 * @Column(name="farmingTypeName", type="string", nullable=false)
	 * */
	private $farmingTypeName;

	public function getFarmingTypeID() {
		return $this -> farmingTypeID;
	}

	public function setFarmingTypeID($farmingTypeID) { $this -> farmingTypeID = $farmingTypeID;
	}

	public function getFarmingTypeName() {
		return $this -> farmingTypeName;
	}

	public function setFarmingTypeName($farmingTypeName) { $this -> farmingTypeName = $farmingTypeName;
	}

}
?>