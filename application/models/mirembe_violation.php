<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class Mirembe_Violation extends MY_Model {

	function __construct() {
		parent::__construct();
		$this -> incident_name = '';
	}


	function setViolation() {

		$this -> theForm = new \models\Entities\MirembeViolationReport();
		$this -> theForm -> setFarmerid($_POST['farmer']);
		$this -> theForm -> setCertifcationofficerid($_POST['cofficer']);
		$this -> theForm -> setViolation($_POST['violation']);
		$this -> theForm -> setViolationexplaination($_POST['explain']);
		$this -> theForm -> setIndependenceverification($_POST['independence']);
		$this -> theForm -> setPlaceofviolation($_POST['pov']);
		$this -> theForm -> setDateofobservation($_POST['dov']);
		$this -> theForm -> setFieldsupervisor($_POST['fos']);
		$this -> theForm -> setSupervisondate($_POST['sd']);
		$this -> theForm -> setViolationcomments($_POST['comments']);
		$this -> em -> persist($this -> theForm);
		$this -> em -> flush();
		$this -> em -> clear();
		redirect("c_front");
	}

	

}
