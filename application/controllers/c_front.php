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

	public function agr_register() {
		$user = new Mirembe_Agronomists();
		$user -> lastAssignmentDate = $this -> input -> post("dater");
		$user -> save();
	}

}
?>