<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admission extends CI_Controller {

	public function index()  {
		$this->load->view ('core/template/header3');
		$this->load->view('admission/prospective');
		$this->load->view('core/template/footer');
	}

    public function payment($section = 'detail')
	{
		$this->load->view('core/template/header3b');
		$this->load->view('admission/payment_'.$section);
		$this->load->view('core/template/footer');
	}

	public function completeapp()  {

		$this->load->view('core/template/header3b');
		$this->load->view('admission/complete_app');
		$this->load->view('core/template/footer');
	}

	public function admin()  {

		$this->load->view('core/template/header3');
		$this->load->view('admission/admin');
		$this->load->view('core/template/footer');
	}


	public function status()  {
		$this->load->view('core/template/header3');
		$this->load->view('admission/status');
		$this->load->view('core/template/footer');
	}

		public function print_form()  {
		$this->load->view('core/template/print_header');
		$this->load->view('admission/print_form');
	}
 }
?>