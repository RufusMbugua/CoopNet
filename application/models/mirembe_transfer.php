<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class Mirembe_Transfer extends MY_Model {

	function __construct() {
		parent::__construct();
		$this -> incident_name = '';
	}


	function setTransfer() {

		$this -> theForm = new \models\Entities\MirembeFarmerTranferForm();
		//var_dump($this->input->post());die;
		$this -> theForm -> setTransferredfrom($_POST['from']);
		$this -> theForm -> setCropid($_POST['crop']);
		$this -> theForm -> setTransferreceivedby($_POST['tby']);
		$this -> theForm -> setTransferwitnessedby($_POST['wby']);
		$this -> theForm -> setDatefilled($_POST['dfilled']);
		$this -> theForm -> setCropweight($_POST['cweight']);
		$this -> theForm -> setCropmoisturecontent($_POST['mcontent']);
		$this -> theForm -> setDateofwitness($_POST['wdate']);
		$this -> em -> persist($this -> theForm);
		$this -> em -> flush();
		$this -> em -> clear();
		redirect("c_front");
	}

	

}
