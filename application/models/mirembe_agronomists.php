<?php
class Mirembe_Agronomists extends Doctrine_Record {
	public function setTableDefinition() {
		$this -> hasColumn('lastAssignmentDate', 'date');

	}

	public function setUp() {
		$this -> setTableName(' mirembe_agronomists');
	}

}
