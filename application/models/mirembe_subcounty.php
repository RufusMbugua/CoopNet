<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class Mirembe_Subcounty extends MY_Model {

var $sbCounty;
	function __construct() {
		parent::__construct();
		$this -> sbCounty = '';
	}


	function setIncident() {

		$this -> theForm = new \models\Entities\MirembeSubcounty();
		$this -> theForm -> setSubcountyname($_POST['sbname']);
		$this -> em -> persist($this -> theForm);
		$this -> em -> flush();
		$this -> em -> clear();
		redirect("c_front");
	}
	function getSubCounty() {
		$this->sbCounty = $this -> em -> createQuery('SELECT c.subcountyid,c.subcountyname   FROM models\Entities\MirembeSubcounty c ');
		$this -> sbCounty = $this->sbCounty -> getResult();
		return $this -> sbCounty;
	}

	

}
