<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class Mirembe_Facility extends MY_Model {

	function __construct() {
		parent::__construct();
		$this -> incident_name = '';
	}


	function setFacility() {
		$originalDate = $_POST['doc'];
		$newDate = date("Y-m-d", strtotime($originalDate));
		
		$originalDate1 = $_POST['dov'];
		$newDate1 = date("Y-m-d", strtotime($originalDate1));
		
		$this -> theForm = new \models\Entities\MirembeFacilityRegistration();
		
		//var_dump($this->input->post());die;
		$this -> theForm -> setFacilityname($_POST['facility']);
		$this -> theForm -> setFacilitycode($_POST['fcode']);
		$this -> theForm -> setSubfacilityname($_POST['subfname']);
		$this -> theForm -> setSubfacilcitycode($_POST['subfcode']);
		$this -> theForm -> setFacilitypurpose($_POST['purpose']);
		$this -> theForm -> setFacilityowner($_POST['owner']);
		$this -> theForm -> setSizeofbuilding($_POST['size']);
		$this -> theForm -> setBuildingmaterialsused($_POST['materials']);
		$this -> theForm -> setPersonreponsible($_POST['responsible']);
		$this -> theForm -> setInfocollectedby($_POST['collected']);
		$this -> theForm -> setDateofinfocollection($newDate);
		$this -> theForm -> setInfoverifiedby($_POST['verifies']);
		$this -> theForm -> setDateofverification($newDate1);
		$this -> em -> persist($this -> theForm);
		$this -> em -> flush();
		$this -> em -> clear();
		redirect("c_front");
	}
	

	

}
