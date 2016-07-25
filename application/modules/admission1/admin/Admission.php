<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admission extends CI_Controller {

	public function index()  {
		$this->load->view ('template/header3');
		$this->load->view('admission/prospective');
		$this->load->view('core/template/footer');
	}

    public function payment($section = 'detail')
	{
		$this->load->view('core/template/header');
		$this->load->view('admission/payment_'.$section);
		$this->load->view('core/template/footer');
	}

	public function completereg()  {

		$this->load->view('core/template/header');
		$this->load->view('admission/registration');
		$this->load->view('core/template/footer');
	}

	public function admin()  {

		$this->load->view('core/template/header');
		$this->load->view('admission/admin');
		$this->load->view('core/template/footer');
	}
 }
?>