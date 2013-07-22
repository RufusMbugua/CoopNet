<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class M_Contract extends MY_Model {

	function __construct() {
		parent::__construct();
		$this -> incident_name = '';
	}


	function setIncident() {

		$this -> theForm = new \models\Entities\MirembeContractForm();
		//var_dump($this->input->post());die;
		$this -> theForm -> setFarmerid($_POST['farmer']);
		$this -> theForm -> setFarmerdateofsigning($_POST['dater']);
		$this -> theForm -> setFacilitatorname($_POST['facilitator']);
		$this -> theForm -> setFacilitatordateofsigning($_POST['fdate']);
		$this -> em -> persist($this -> theForm);
		$this -> em -> flush();
		$this -> em -> clear();
		redirect("c_front");
	}

	

}
