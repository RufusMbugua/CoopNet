<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class Mirembe_Type extends MY_Model {

	function __construct() {
		parent::__construct();
		$this -> incident_name = '';
	}


	function setType() {

		$this -> theForm = new \models\Entities\MirembeFarmingType();
		$this -> theForm -> setFarmingtypename($_POST['tname']);
		$this -> em -> persist($this -> theForm);
		$this -> em -> flush();
		$this -> em -> clear();
		redirect("c_front");
	}

	

}
