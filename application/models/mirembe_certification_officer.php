<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class Mirembe_Certification_Officer extends MY_Model {

var $cert;
	function __construct() {
		parent::__construct();
		$this -> cert = '';
	}


	function setCertificationOfficer() {
		$originalDate = $_POST['dater'];
		$newDate = date("Y-m-d", strtotime($originalDate));
		
		$this -> theForm = new \models\Entities\MirembeCertificationOfficers();
		$this -> theForm -> setCertificationofficerid($_POST['certification']);
		$this -> theForm -> setLastassignmentdate($newDate);
		$this -> em -> persist($this -> theForm);
		$this -> em -> flush();
		$this -> em -> clear();
		redirect("c_front");
	}
	function getCertOfficer() {
		$this->cert = $this -> em -> createQuery('SELECT c.officerid,c.officerfirstname,c.officerlastname,c.officerdesignation   FROM models\Entities\MirembeOfficers c WHERE c.officerdesignation= :designation');
		$this->cert->setParameter('designation','Certification Officer');
		$this -> cert = $this->cert -> getResult();
		return $this -> cert;
	}
	

	

}
