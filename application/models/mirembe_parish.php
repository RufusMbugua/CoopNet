<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class Mirembe_Parish extends MY_Model {
var $parish;
	function __construct() {
		parent::__construct();
		$this -> parish = '';
	}


	function setIncident() {

		$this -> theForm = new \models\Entities\MirembeParish();
		$this -> theForm -> setParishname($_POST['parish']);
		$this -> em -> persist($this -> theForm);
		$this -> em -> flush();
		$this -> em -> clear();
		redirect("c_front");
	}
	function getParish() {
		$this->parish = $this -> em -> createQuery('SELECT c.parishid,c.parishname   FROM models\Entities\MirembeParish c ');
		$this -> parish = $this->parish -> getResult();
		return $this -> parish;
	}

	

}
