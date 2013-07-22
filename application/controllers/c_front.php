<?php

class C_Front extends CI_Controller {
	var $data;

	public function __construct() {

		parent::__construct();
		$this -> data = array();

	}

	public function index() {
		$data['contentView'] = "index";
		$data['title'] = "Home";
		$this -> load -> view('template', $data);
	}//End of index file

	public function agronomist() {
		$this -> load -> model('mirembe_officers');
		$data['incident_types'] = $this -> mirembe_officers -> getAgronomistName();
		$data['contentView'] = "agronomist_view";
		$data['title'] = "Agronomist";
		$this -> load -> view('template', $data);
	}//End of index file

	public function cofficer() {
		$this -> load -> model('mirembe_certification_officer');
		$data['cofficer'] = $this -> mirembe_certification_officer -> getCertOfficer();
		$data['contentView'] = "cofficer_view";
		$data['title'] = "Agronomist";
		$this -> load -> view('template', $data);
	}//End of index file

	public function purchment() {
		$this -> load -> model('mirembe_parish');
		$data['parish'] = $this -> mirembe_parish -> getParish();
		$this -> load -> model('mirembe_crops');
		$data['crops'] = $this -> mirembe_crops -> getCrop();
		$this -> load -> model('mirembe_officers');
		$data['officer'] = $this -> mirembe_officers -> getOfficer();
		$this -> load -> model('mirembe_certification_officer');
		$data['cofficer'] = $this -> mirembe_certification_officer -> getCertOfficer();
		$data['contentView'] = "purchment_inspection_view";
		$data['title'] = "Purchment";
		$this -> load -> view('template', $data);
	}//End of index file

	public function contract() {
		$this -> load -> model('mirembe_farmer');
		$data['farmer'] = $this -> mirembe_farmer -> getFarmer();
		$this -> load -> model('mirembe_officers');
		$data['facilitator'] = $this -> mirembe_officers -> getFacilitator();
		$data['contentView'] = "contract_view";
		$data['title'] = "Contract";
		$this -> load -> view('template', $data);
	}//End of index file

	public function crop() {
		$data['contentView'] = "crop_view";
		$data['title'] = "Contract";
		$this -> load -> view('template', $data);
	}//End of index file

	public function excess() {
		$this -> load -> model('mirembe_farmer');
		$data['farmer'] = $this -> mirembe_farmer -> getFarmer();
		$this -> load -> model('mirembe_crops');
		$data['crops'] = $this -> mirembe_crops -> getCrop();
		$this -> load -> model('mirembe_officers');
		$data['facilitator'] = $this -> mirembe_officers -> getFacilitator();
		$data['contentView'] = "excess_view";
		$data['title'] = "Excess";
		$this -> load -> view('template', $data);
	}//End of index file

	public function facility_r() {
		$this -> load -> model('mirembe_officers');
		$data['officer'] = $this -> mirembe_officers -> getOfficer();
		$data['contentView'] = "facility_registration_view";
		$data['title'] = "Facility Registration";
		$this -> load -> view('template', $data);
	}//End of index file

	public function farmer_r() {
		$this -> load -> model('mirembe_villages');
		$data['village'] = $this -> mirembe_villages -> getVillage();
		$this -> load -> model('mirembe_farmer');
		$data['farmer'] = $this -> mirembe_farmer -> getFarmer();
		$data['contentView'] = "farmer_registration_view";
		$data['title'] = "Farmer Registration";
		$this -> load -> view('template', $data);
	}//End of index file

	public function transfer() {
		$this -> load -> model('mirembe_crops');
		$data['crops'] = $this -> mirembe_crops -> getCrop();
		$data['contentView'] = "transfer_view";
		$data['title'] = "Farmer Transfer";
		$this -> load -> view('template', $data);
	}//End of index file

	public function ftype() {
		$data['contentView'] = "type_view";
		$data['title'] = "Farmer Transfer";
		$this -> load -> view('template', $data);
	}//End of index file

	public function officer() {
		$data['contentView'] = "officer_view";
		$data['title'] = "Officer";
		$this -> load -> view('template', $data);
	}//End of index file

	public function parish() {
		$data['contentView'] = "parish_view";
		$data['title'] = "Officer";
		$this -> load -> view('template', $data);
	}//End of index file

	public function subcounty() {
		$data['contentView'] = "subcounty_view";
		$data['title'] = "Officer";
		$this -> load -> view('template', $data);
	}//End of index file

	public function transport() {
		$this -> load -> model('mirembe_officers');
		$data['sup'] = $this -> mirembe_officers -> getSupervisor();
		$data['contentView'] = "transport_view";
		$data['title'] = "Officer";
		$this -> load -> view('template', $data);
	}//End of index file

	public function Village() {
		$this -> load -> model('mirembe_parish');
		$data['parish'] = $this -> mirembe_parish -> getParish();
		$this -> load -> model('mirembe_subcounty');
		$data['county'] = $this -> mirembe_subcounty -> getSubCounty();
		$data['contentView'] = "village_view";
		$data['title'] = "Officer";
		$this -> load -> view('template', $data);
	}//End of index file

	public function violation() {
		$this -> load -> model('mirembe_officers');
		$data['cofficer'] = $this -> mirembe_officers -> getCertOfficer();
		$data['sup'] = $this -> mirembe_officers -> getSupervisor();
		$data['contentView'] = "violation_view";
		$data['title'] = "Officer";
		$this -> load -> view('template', $data);
	}//End of index file

	public function agr_register() {

		$this -> load -> model('mirembe_agronomists');
		$this -> mirembe_agronomists -> setAgronomist();

		redirect("c_front");

	}

	public function reg_cert() {

		$this -> load -> model('mirembe_certification_officer');
		$this -> mirembe_certification_officer -> setCertificationOfficer();

		redirect("c_front");

	}

	public function reg_officer() {

		$this -> load -> model('mirembe_officers');
		$this -> mirembe_officers -> setIncident();
		redirect("c_front");

	}

	public function reg_parish() {

		$this -> load -> model('mirembe_parish');
		$this -> mirembe_parish -> setIncident();
		redirect("c_front");

	}

	public function reg_sub() {

		$this -> load -> model('mirembe_subcounty');
		$this -> mirembe_subcounty -> setIncident();
		redirect("c_front");

	}

	public function reg_crops() {

		$this -> load -> model('mirembe_crops');
		$this -> mirembe_crops -> setIncident();
		redirect("c_front");

	}
	public function reg_contract(){
		
		$this -> load -> model('m_contract');
		$this -> m_contract -> setIncident();
		redirect("c_front");
	}public function reg_farmer(){
		
		$this -> load -> model('mirembe_farmer');
		$this -> mirembe_farmer -> setIncident();
		redirect("c_front");
	}
	public function reg_purchment(){
		
		$this -> load -> model('mirembe_purchment');
		$this -> mirembe_purchment -> setPurchment();
		redirect("c_front");
	}
	public function reg_excess(){
		
		$this -> load -> model('mirembe_excess');
		$this -> mirembe_excess -> setExcess();
		redirect("c_front");
	}
	public function reg_facility(){
		
		$this -> load -> model('mirembe_facility');
		$this -> mirembe_facility -> setFacility();
		redirect("c_front");
	}
	public function reg_transfer(){
		
		$this -> load -> model('mirembe_transfer');
		$this -> mirembe_transfer -> setTransfer();
		redirect("c_front");
	}
	public function reg_Type(){
		
		$this -> load -> model('mirembe_type');
		$this -> mirembe_type -> setType();
		redirect("c_front");
	}
	public function reg_Transport(){
		
		$this -> load -> model('mirembe_transport');
		$this -> mirembe_transport -> setTransport();
		redirect("c_front");
	}
	public function reg_Villages(){
		
		$this -> load -> model('mirembe_Villages');
		$this -> mirembe_Villages -> setVillages();
		redirect("c_front");
	}
	public function reg_Violation(){
		
		$this -> load -> model('mirembe_violation');
		$this -> mirembe_violation -> setViolation();
		redirect("c_front");
	}

}
?>