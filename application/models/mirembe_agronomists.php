<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class Mirembe_Agronomists extends MY_Model {

	function __construct() {
		parent::__construct();
		$this -> incident_name = '';
	}


	function setAgronomist() {

		$this -> theForm = new \models\Entities\MirembeAgronomists();
		
		//var_dump($this->input->post());die;
		$this -> theForm -> setAgronomistsid($_POST['agronomist']);
		$this -> theForm -> setLastassignmentdate($_POST['dater']);
		$this -> em -> persist($this -> theForm);
		$this -> em -> flush();
		$this -> em -> clear();
		redirect("c_front");
	}
	

	

}
