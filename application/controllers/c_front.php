<?php

class C_Front extends CI_Controller {
	var $data;

	public function __construct() {

		parent::__construct();
		$this -> data = array();

	}

	public function index() {
		$data['contentView'] = "users";
		$data['title'] = "Home";
		$this -> load -> view('template', $data);
	}//End of index file

	public function users() {
		$data['contentView'] = "users";
		$data['title'] = "Home";
		$this -> load -> view('template', $data);
	}
	

}
?>