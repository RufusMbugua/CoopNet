<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class Mirembe_Purchment extends MY_Model {

	function __construct() {
		parent::__construct();
		$this -> incident_name = '';
	}


	function setPurchment() {

		$this -> theForm = new \models\Entities\MirembeCoffeePurchmentInspection();
		
		//var_dump($this->input->post());die;
		$this -> theForm -> setDateofdelivery($_POST['dater']);
		$this -> theForm -> setParishcode($_POST['parish']);
		$this -> theForm -> setCropid($_POST['crop']);
		$this -> theForm -> setMoisturecontent($_POST['moisture']);
		$this -> theForm -> setDefectpercentage($_POST['defect']);
		$this -> theForm -> setApprovedorrejected($_POST['status']);
		$this -> theForm -> setReasonsfordecision($_POST['reason']);
		$this -> theForm -> setCoffeegradedby($_POST['by']);
		$this -> theForm -> setCertificationofficer($_POST['certification']);
		$this -> em -> persist($this -> theForm);
		$this -> em -> flush();
		$this -> em -> clear();
		redirect("c_front");
	}
	

	

}
