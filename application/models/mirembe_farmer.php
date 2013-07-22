<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class Mirembe_Farmer extends MY_Model {
var $farmer;
	function __construct() {
		parent::__construct();
		$this -> farmer = '';
	}


	function setIncident() {

		$this -> theForm = new \models\Entities\MirembeFarmersRegistration();
		$this -> theForm -> setVillageid($_POST['village']);
		$this -> theForm -> setFarmercode($_POST['fcode']);
		$this -> theForm -> setNationalid($_POST['id']);
		$this -> theForm -> setPhonenumber($_POST['pno']);
		$this -> em -> persist($this -> theForm);
		$this -> em -> flush();
		$this -> em -> clear();
		redirect("c_front");
	}
	function getFarmer() {
		$this->farmer = $this -> em -> createQuery('SELECT c.farmerid, c.farmercode  FROM models\Entities\MirembeFarmersRegistration c');
		//$this->agronomist->setParameter('designation','Agronomist');
		$this -> farmer = $this->farmer -> getResult();
		return $this -> farmer;
	}

	

}
