<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require (APPPATH."modules/core/controllers/secure_area.php");

class Bursary extends Secure_area {

	public function __construct()
	{
		$this->data['page'] = $this->data['module'] = 'bursary';
		$this->load->language('bursary/bursary');
		parent::__construct($this->data['module']);
	}

	public function index()
	{		
		$this->load->view('core/template/header', $this->data);
		$this->load->view('bursary/bursary');
		$this->load->view('core/template/footer');
	}

	public function process_sales($action = 'view')
	{

			$this->load->view('core/template/header2');
			$this->load->view('bursary/process_sales');
			$this->load->view('core/template/footer');		
	}

	// public function bursary($action = 'view')
	// {
	// 	if ($action === 'payment_discount'){
	// 		$this->load->view('core/template/header2', $this->data);
	// 		$this->load->view('bursary/payment_discount');
	// 		$this->load->view('core/template/footer');
			
	// 	}
	// }
	public function payment_discount()
	{
		$this->load->view('core/template/header', $this->data);
		$this->load->view('bursary/payment_discount');
		$this->load->view('core/template/footer');
	}
	public function income_and_expenses()
	{
		$this->load->view('core/template/header', $this->data);
		$this->load->view('bursary/income_and_expenses');
		$this->load->view('core/template/footer');
	}
	public function cash_reg()
	{
		$this->load->view('core/template/header', $this->data);
		$this->load->view('bursary/cash_reg');
		$this->load->view('core/template/footer');
	}
	public function general_ledger()
	{
		$this->data['page'] = 'General Ledger';
		$this->load->view('core/template/header', $this->data);
		$this->load->view('bursary/general_ledger');
		$this->load->view('core/template/footer');
	}
	public function print_record()
	{
		$this->load->view('core/template/print_header');
		$this->load->view('bursary/print_record');
	}
	public function print_ledger()
	{
		$this->load->view('core/template/print_header2');
		$this->load->view('bursary/print_ledger');
	}

	public function payments($action = 'view')
	{	
		$data['page'] = $this->data['module'];
		//var_dump($this->data);
		if ($action === 'process'){
			$data['pagetitle'] = 'Process payments';
			$data['pagesubtitle'] = '';

			$this->load->view('core/template/header', $data);
			$this->load->view('bursary/process_payment');
			$this->load->view('core/template/footer');
		}
		elseif ($action === 'create') {
			$this->load->view('core/template/header2');
			$this->load->view('bursary/createbill');
			$this->load->view('core/template/footer');
		}
		elseif ($action === 'transaction') {
			$this->load->view('core/template/header', $data);
			$this->load->view('bursary/payment_transaction');
			$this->load->view('core/template/footer');
		}
		elseif ($action === 'receipt') {
			$this->load->view('core/template/header2');
			$this->load->view('bursary/generate_receipt');
			$this->load->view('core/template/footer');
		}
		else {
		 	$this->load->view('core/template/header2');
		 	$this->load->view('bursary/payments');
		 	$this->load->view('core/template/footer');
		 }
		
	}
	
}

