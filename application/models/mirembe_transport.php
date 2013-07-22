<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class Mirembe_Transport extends MY_Model {

	function __construct() {
		parent::__construct();
		$this -> incident_name = '';
	}


	function setTransport() {

		$this -> theForm = new \models\Entities\MirembeTransportDeclation();
		$this -> theForm ->  setDateoftransportation($_POST['dater']);
		$this -> theForm -> setVehicleregistration($_POST['vregistration']);
		$this -> theForm -> setLoadingsite($_POST['lsite']);
		$this -> theForm -> setDestination($_POST['destination']);
		$this -> theForm -> setCommodity($_POST['commodity']);
		$this -> theForm -> setTonnage($_POST['tonnage']);
		$this -> theForm -> setSupervisorid($_POST['supervisor']);
		$this -> theForm -> setDateofsupervision($_POST['sdate']);
		$this -> em -> persist($this -> theForm);
		$this -> em -> flush();
		$this -> em -> clear();
		redirect("c_front");
	}

	

}
