<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class School extends CI_Controller {

	public function index()
	{
		$this->load->view('core/template/header3');
		$this->load->view('setup/setup_school');
		$this->load->view('core/template/footer');
	}

	public function setup()
	{
		$this->load->view('core/template/header3');
		$this->load->view('setup/setup_school');
		$this->load->view('core/template/footer');
	}

	public function step($section = 'school')
	{
		$this->load->view('core/template/header3');
		$this->load->view('setup/setup_'.$section);
		$this->load->view('core/template/footer');
	}

	public function register()
	{
		$this->load->view('core/template/header3');
		$this->load->view('setup/register_school');
		$this->load->view('core/template/footer');
	}

	public function activate()
	{
		$this->load->view('core/template/header3');
		$this->load->view('setup/activate_school');
		$this->load->view('core/template/footer');
	}


}
