<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class Mirembe_Villages extends MY_Model {

	function __construct() {
		parent::__construct();
		$this -> incident_name = '';
	}


	function setVillages() {

		$this -> theForm = new \models\Entities\MirembeVillageCodes();
		$this -> theForm ->  setVillagename($_POST['vname']);
		$this -> theForm ->  setVillagecode($_POST['vcode']);
		$this -> theForm ->  setVillagesubcounty($_POST['scounty']);
		$this -> theForm ->  setVillageparish($_POST['parish']);
		$this -> em -> persist($this -> theForm);
		$this -> em -> flush();
		$this -> em -> clear();
		redirect("c_front");
	}
	function getVillage() {
			$this -> officer = $this -> em -> createQuery('SELECT c.villagecodeid,c.villagename,c.villagecode   FROM models\Entities\MirembeVillageCodes c');
			$this -> officer = $this -> officer -> getResult();
			return $this -> officer;
		}

	

}
