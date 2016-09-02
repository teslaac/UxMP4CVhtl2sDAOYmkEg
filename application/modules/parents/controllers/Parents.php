<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require (APPPATH."modules/core/controllers/secure_area.php");



class Parents extends Secure_area {	

	function __construct(){

		$this->data['module'] = 'parents'; //module name 
		parent::__construct($this->data['module']);	
	}

	public function index()
	{   
		
		$this->data['page'] = 'parents Assigned';
		$this->load->view('core/template/header', $this->data);
		$this->load->view('parents/ward');
		$this->load->view('core/template/footer');
	}

	public function view()
	{   
		$this->data['page'] = 'parents';
		$this->load->view('core/template/header', $this->data);
		$this->load->view('parents');
		$this->load->view('core/template/footer');
	}

	public function edit()
	{   
		$this->data['page'] = 'parents';
		$this->load->view('core/template/header', $this->data);
		$this->load->view('parents/edit_parent');
		$this->load->view('core/template/footer');
	}

	public function wards()
	{   
		$this->data['page'] = 'parents';
		$this->load->view('core/template/header', $this->data);
		$this->load->view('parents/ward');
		$this->load->view('core/template/footer');
	}


}
