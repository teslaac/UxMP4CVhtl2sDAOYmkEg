<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends MX_Controller {

	
	public function __construct() {
		parent::__construct();
	}

	function index(){
		$this->session->sess_destroy();
		redirect(base_url().'login');
	}


}
?>