<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calender extends MX_Controller {

	public function index()
	{
		$this->load->view('core/template/header');
		$this->load->view('calender');
		$this->load->view('core/template/footer');
	}
}
