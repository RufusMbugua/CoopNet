<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class Mirembe_Officers extends MY_Model {

	function __construct() {
		parent::__construct();
		$this -> incident_name = '';
	}


	function setIncident() {

		$this -> theForm = new \models\Entities\E_Mirembe_Officers();
		$this -> theForm -> setOfficerFirstName($_POST['fname']);
		$this -> theForm -> setOfficerLastName($_POST['lname']);
		$this -> theForm -> setOfficerDesignation($_POST['designation']);
		$this -> em -> persist($this -> theForm);
		$this -> em -> flush();
		$this -> em -> clear();
		redirect("c_front");
	}

	

}
