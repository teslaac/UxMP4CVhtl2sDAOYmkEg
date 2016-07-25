<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require (APPPATH."modules/core/controllers/secure_area.php");



class Users extends Secure_area {	

	function __construct(){

		parent::__construct('user');
		//$this->load->model('user_model');
		//$this->load->module("users");	
		
	}

	public function index()
	{   
		$this->data['page'] = 'students';
		$this->load->view('core/template/header', $this->data);
		$this->load->view('users/students');
		$this->load->view('core/template/footer');
	}
	

	public function staff($action = 'view')
	{

		if ($action === 'add'){
			$this->load->view('core/template/header2');
			$this->load->view('users/staff_add');
			$this->load->view('core/template/footer');

		}elseif ($action === 'quick_reg') {
			$this->load->view('core/template/header2');
			$this->load->view('users/students_quick_reg');
			$this->load->view('core/template/footer');
		}else{
			$this->load->view('core/template/header2');
			$this->load->view('users/students');
			$this->load->view('core/template/footer');
		}
		
	}

	public function students($action = 'view')
	{
		$this->data['page'] = 'students';
		if ($action === 'add'){
			$this->load->view('core/template/header', $this->data);
			$this->load->view('users/add_student');
			$this->load->view('core/template/footer');

		}elseif ($action === 'quick_reg') {
			$this->load->view('core/template/header', $this->data);
			$this->load->view('users/students_quick_reg');
			$this->load->view('core/template/footer');
		}else{
			$this->load->view('core/template/header', $this->data);
			$this->load->view('users/students');
			$this->load->view('core/template/footer');
		}
		
	}

	
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url().'login');
	}


}
