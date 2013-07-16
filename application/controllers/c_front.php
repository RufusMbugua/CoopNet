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
		$data['contentView'] = "agronomist_view";
		$data['title'] = "Agronomist";
		$this -> load -> view('template', $data);
	}//End of index file

	public function cofficer() {
		$data['contentView'] = "cofficer_view";
		$data['title'] = "Agronomist";
		$this -> load -> view('template', $data);
	}//End of index file

	public function purchment() {
		$data['contentView'] = "purchment_inspection_view";
		$data['title'] = "Purchment";
		$this -> load -> view('template', $data);
	}//End of index file

	public function contract() {
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
		$data['contentView'] = "excess_view";
		$data['title'] = "Excess";
		$this -> load -> view('template', $data);
	}//End of index file

	public function facility_r() {
		$data['contentView'] = "facility_registration_view";
		$data['title'] = "Facility Registration";
		$this -> load -> view('template', $data);
	}//End of index file

	public function farmer_r() {
		$data['contentView'] = "farmer_registration_view";
		$data['title'] = "Farmer Registration";
		$this -> load -> view('template', $data);
	}//End of index file

	public function transfer() {
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
		$data['contentView'] = "transport_view";
		$data['title'] = "Officer";
		$this -> load -> view('template', $data);
	}//End of index file

	public function Village() {
		$data['contentView'] = "village_view";
		$data['title'] = "Officer";
		$this -> load -> view('template', $data);
	}//End of index file

	public function violation() {
		$data['contentView'] = "violation_view";
		$data['title'] = "Officer";
		$this -> load -> view('template', $data);
	}//End of index file

	public function agr_register() {

		if ($_POST['dater'] != 0) {
			$this -> load -> model('mirembe_agronomists');
			$this -> mirembe_agronomists -> setIncident();
		} else {
			redirect("c_front");
		}
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

}
?>