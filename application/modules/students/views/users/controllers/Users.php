<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MX_Controller {

	public function index()
	{
		$this->load->view('template/header2');
		$this->load->view('users/students');
		$this->load->view('template/footer');
	}


	public function staff($action = 'view')
	{
		if ($action === 'add'){
			$this->load->view('template/header2');
			$this->load->view('users/staff_add');
			$this->load->view('template/footer');

		}elseif ($action === 'quick_reg') {
			$this->load->view('template/header2');
			$this->load->view('users/staff_quick_reg');
			$this->load->view('template/footer');
		}elseif ($action === 'edit') {
			$this->load->view('template/header2');
			$this->load->view('users/edit_staff');
			$this->load->view('template/footer');
		}else{
			$this->load->view('template/header2');
			$this->load->view('users/staff');
			$this->load->view('template/footer');
		}
		
	}

	public function students($action = 'view')
	{
		if ($action === 'add'){
			$this->load->view('template/header2');
			$this->load->view('users/add_student');
			$this->load->view('template/footer');

		}elseif ($action === 'quick_reg') {
			$this->load->view('template/header2');
			$this->load->view('users/students_quick_reg');
			$this->load->view('template/footer');
		}elseif ($action === 'edit') {
			$this->load->view('template/header2');
			$this->load->view('users/edit_student');
			$this->load->view('template/footer');
		}else{
			$this->load->view('template/header2');
			$this->load->view('users/students');
			$this->load->view('template/footer');
		}
		
	}

	public function parents($action = 'view')
	{
		if ($action === 'edit'){
			$this->load->view('template/header2');
			$this->load->view('users/edit_parent');
			$this->load->view('template/footer');
		}else{
			$this->load->view('template/header2');
			$this->load->view('users/parents');
			$this->load->view('template/footer');
			}
	}
}
