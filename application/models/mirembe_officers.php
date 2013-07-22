<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class Mirembe_Officers extends MY_Model {

	var $agronomist;
	function __construct() {
		parent::__construct();
		$this -> agronomist = '';
		$this -> cert = '';
		$this -> supervisor = '';
		$this -> facilitator = '';
	}

	function setIncident() {

		$this -> theForm = new \models\Entities\MirembeOfficers();
		$this -> theForm -> setOfficerfirstname($_POST['fname']);
		$this -> theForm -> setOfficerlastname($_POST['lname']);
		$this -> theForm -> setOfficerdesignation($_POST['designation']);
		$this -> em -> persist($this -> theForm);
		$this -> em -> flush();
		$this -> em -> clear();
		redirect("c_front");
	}

	function getAgronomistName() {
		$this -> agronomist = $this -> em -> createQuery('SELECT c.officerid,c.officerfirstname,c.officerlastname,c.officerdesignation   FROM models\Entities\MirembeOfficers c WHERE c.officerdesignation= :designation');
		$this -> agronomist -> setParameter('designation', 'Agronomist');
		$this -> agronomist = $this -> agronomist -> getResult();
		return $this -> agronomist;
	}

	function getCertOfficer() {
		$this -> cert = $this -> em -> createQuery('SELECT c.officerid,c.officerfirstname,c.officerlastname,c.officerdesignation   FROM models\Entities\MirembeOfficers c WHERE c.officerdesignation= :designation');
		$this -> cert -> setParameter('designation', 'Certification Officer');
		$this -> cert = $this -> cert -> getResult();
		return $this -> cert;
	}

	function getSupervisor() {
		$this -> supervisor = $this -> em -> createQuery('SELECT c.officerid,c.officerfirstname,c.officerlastname,c.officerdesignation   FROM models\Entities\MirembeOfficers c WHERE c.officerdesignation= :designation');
		$this -> supervisor -> setParameter('designation', 'Supervisor');
		$this -> supervisor = $this -> supervisor -> getResult();
		return $this -> supervisor;
	}

	function getFacilitator() {
		$this -> facilitator = $this -> em -> createQuery('SELECT c.officerid,c.officerfirstname,c.officerlastname,c.officerdesignation   FROM models\Entities\MirembeOfficers c WHERE c.officerdesignation= :designation');
		$this -> facilitator -> setParameter('designation', 'Facilitator');
		$this -> facilitator = $this -> facilitator -> getResult();
		return $this -> facilitator;
	}
	function getOfficer() {
			$this -> facilitator = $this -> em -> createQuery('SELECT c.officerid,c.officerfirstname,c.officerlastname,c.officerdesignation   FROM models\Entities\MirembeOfficers c');
			$this -> facilitator = $this -> facilitator -> getResult();
			return $this -> facilitator;
		}

}
