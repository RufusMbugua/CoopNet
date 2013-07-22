<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class Mirembe_Crops extends MY_Model {

	function __construct() {
		parent::__construct();
		$this -> crop = '';
	}


	function setIncident() {

		$this -> theForm = new \models\Entities\MirembeCrops();
		$this -> theForm -> setCropname($_POST['crop']);
		$this -> em -> persist($this -> theForm);
		$this -> em -> flush();
		$this -> em -> clear();
		redirect("c_front");
	}
	function getCrop() {
		$this -> crop = $this -> em -> createQuery('SELECT c.cropid,c.cropname   FROM models\Entities\MirembeCrops c ');
		//$this -> facilitator -> setParameter('designation', 'Facilitator');
		$this -> crop = $this -> crop -> getResult();
		return $this -> crop;
	}

	

}
