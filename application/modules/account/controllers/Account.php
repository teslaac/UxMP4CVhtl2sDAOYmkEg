<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require (APPPATH."modules/core/controllers/secure_area.php");

class Account extends Secure_area {

	public function __construct()
	{
		$this->data['page'] = $this->data['module'] = 'account';
		$this->load->language('account/bursary');
		parent::__construct($this->data['module']);
	}

	public function index()
	{		
		$this->load->view('core/template/header', $this->data);
		$this->load->view('account/bursary');
		$this->load->view('core/template/footer');
	}

	public function process_sales($action = 'view')
	{
			$this->load->view('core/template/header2');
			$this->load->view('account/process_sales');
			$this->load->view('core/template/footer');		
	}

	public function income_and_expenses()
	{
		$this->load->view('core/template/header', $this->data);
		$this->load->view('account/income_and_expenses');
		$this->load->view('core/template/footer');
	}
	
	public function cash_reg()
	{
		$this->load->view('core/template/header', $this->data);
		$this->load->view('account/cash_reg');
		$this->load->view('core/template/footer');
	}
	
	public function general_ledger()
	{
		$this->data['page'] = 'General Ledger';
		$this->load->view('core/template/header', $this->data);
		$this->load->view('account/general_ledger');
		$this->load->view('core/template/footer');
	}
	
	public function print_record()
	{
		$this->load->view('core/template/print_header');
		$this->load->view('account/print_record');
	}
	
	public function print_ledger()
	{
		$this->load->view('core/template/print_header2');
		$this->load->view('account/print_ledger');
	}
	
}

