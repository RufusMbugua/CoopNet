<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class Mirembe_Excess extends MY_Model {

	function __construct() {
		parent::__construct();
		$this -> incident_name = '';
	}


	function setExcess() {

		$this -> theForm = new \models\Entities\MirembeExcessDelivery();
		
		//var_dump($this->input->post());die;
		$this -> theForm -> setFarmerid($_POST['farmer']);
		$this -> theForm -> setCropid($_POST['crop']);
		$this -> theForm -> setDateofreporting($_POST['reporting']);
		$this -> theForm -> setDateofinspection($_POST['inspection']);
		$this -> theForm -> setFacilitatorid($_POST['facilitator']);
		$this -> theForm -> setReasonsforexcessdelivery($_POST['excess']);
		$this -> theForm -> setReasonforexcessproductionvalid($_POST['valid']);
		$this -> theForm -> setAnyrisks($_POST['risks']);
		$this -> theForm -> setActionstaken($_POST['action']);
		$this -> theForm -> setExcessproductionacceptable($_POST['accept']);
		$this -> em -> persist($this -> theForm);
		$this -> em -> flush();
		$this -> em -> clear();
		redirect("c_front");
	}
	

	

}
