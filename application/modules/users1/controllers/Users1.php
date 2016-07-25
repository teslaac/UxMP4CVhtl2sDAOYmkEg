<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class users1 extends MX_Controller {

	public function index()
	{
		$this->load->view('core/template/header2');
		$this->load->view('users1/students');
		$this->load->view('core/template/footer');
	}


	public function staff($action = 'view')
	{
		if ($action === 'add'){
			$this->load->view('core/template/header2');
			$this->load->view('users1/staff_add');
			$this->load->view('core/template/footer');

		}elseif ($action === 'quick_reg') {
			$this->load->view('core/template/header2');
			$this->load->view('users1/staff_quick_reg');
			$this->load->view('core/template/footer');
		}elseif ($action === 'edit') {
			$this->load->view('core/template/header2');
			$this->load->view('users1/edit_staff');
			$this->load->view('core/template/footer');
		}else{
			$this->load->view('core/template/header2');
			$this->load->view('users1/staff');
			$this->load->view('core/template/footer');
		}
		
	}

	public function students($action = 'view')
	{
		if ($action === 'add'){
			$this->load->view('core/template/header2');
			$this->load->view('users1/add_student');
			$this->load->view('core/template/footer');

		}elseif ($action === 'quick_reg') {
			$this->load->view('core/template/header2');
			$this->load->view('users1/students_quick_reg');
			$this->load->view('core/template/footer');
		}elseif ($action === 'edit') {
			$this->load->view('core/template/header2');
			$this->load->view('users1/edit_student');
			$this->load->view('core/template/footer');
		}else{
			$this->load->view('core/template/header2');
			$this->load->view('users1/students');
			$this->load->view('core/template/footer');
		}
		
	}

	public function parents($action = 'view')
	{
		if ($action === 'edit'){
			$this->load->view('core/template/header2');
			$this->load->view('users1/edit_parent');
			$this->load->view('core/template/footer');
		}else{
			$this->load->view('core/template/header2');
			$this->load->view('users1/parents');
			$this->load->view('core/template/footer');
			}
	}
}
