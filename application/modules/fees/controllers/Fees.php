<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require (APPPATH."modules/core/controllers/secure_area.php");

class Fees extends Secure_area {

	public function __construct()
	{
		$this->data['page'] = $this->data['module'] = 'fees';
		//$this->load->language('fees/bursary');
		parent::__construct($this->data['module']);
		$this->load->model('feesm');
		$this->load->model('corem');
	
	}

	public function index()
	{		
		//die(print_r($_SESSION));

		$this->data['students'] = $this->feesm->get_all_students($_SESSION['ts_id']);

		$n = 0;
		foreach ($this->data['students']  as  $students) {
			
			$this->data['students'][$n]['sum_bill'] = $sum_bill = $this->feesm->payment_bill($students['user_id'], $_SESSION['ts_id']);
			$this->data['students'][$n]['total_payable'] = $total_payable = ($students['pamount'] + $students['payment_balance'] + $sum_bill );
			$this->data['students'][$n]['balance'] = $total_payable - $students['trans_amount_paid'];
			// die(print_r($this->data['students']));
			$n++;
		}

		//die(print_r($this->data['students']) );
		$this->load->template('fees/bursary', $this->data);
	}

		public function settings($action= 'view')
	{
		if ($action === 'view'){
			$this->load->view('core/template/header2');
			$this->load->view('fees/fees_settings');
			$this->load->view('core/template/footer');
		}
	}

	// 	public function settings($action= 'view')
	// {
	// 	if ($action === 'paymentdetails'){
	// 		$this->load->view('core/template/header2');
	// 		$this->load->view('fees/payment_details');
	// 		$this->load->view('core/template/footer');
	// 	}
	// 	elseif ($action === 'optionalpayment') {
	// 		$this->load->view('core/template/header2');
	// 		$this->load->view('fees/optional_payment');
	// 		$this->load->view('core/template/footer');
	// 	}
	// 	elseif ($action === 'addpayment') {
	// 		$this->load->view('core/template/header2');
	// 		$this->load->view('fees/add_payment_details');
	// 		$this->load->view('core/template/footer');
	// 	}
	// 	elseif ($action === 'addoptional') {
	// 		$this->load->view('core/template/header2');
	// 		$this->load->view('fees/add_payment_optional');
	// 		$this->load->view('core/template/footer');
	// 	}
	// 	else {
	// 	 	$this->load->view('core/template/header2');
	// 	 	$this->load->view('fees/payment_details');
	// 	 	$this->load->view('core/template/footer');
	// }

	public function discount()
	{
		$this->load->view('core/template/header', $this->data);
		$this->load->view('fees/payment_discount');
		$this->load->view('core/template/footer');
	}
	
	public function cash_reg()
	{
		$this->load->view('core/template/header', $this->data);
		$this->load->view('fees/cash_reg');
		$this->load->view('core/template/footer');
	}
	public function print_record()
	{
		$this->load->view('core/template/print_header');
		$this->load->view('fees/print_record');
	}

	public function payments($action = 'view')
	{	
		$data['page'] = $this->data['module'];
		//var_dump($this->data);
		if ($action === 'process'){
			$data['pagetitle'] = 'Process payments';
			$data['pagesubtitle'] = '';

			$this->load->view('core/template/header', $data);
			$this->load->view('fees/process_payment');
			$this->load->view('core/template/footer');
		}
		elseif ($action === 'create') {
			$this->load->view('core/template/header2');
			$this->load->view('fees/createbill');
			$this->load->view('core/template/footer');
		}
		elseif ($action === 'transaction') {
			$this->load->view('core/template/header', $data);
			$this->load->view('fees/payment_transaction');
			$this->load->view('core/template/footer');
		}
		elseif ($action === 'receipt') {
			$this->load->view('core/template/header2');
			$this->load->view('fees/generate_receipt');
			$this->load->view('core/template/footer');
		}
		else {
		 	$this->load->view('core/template/header2');
		 	$this->load->view('fees/payments');
		 	$this->load->view('core/template/footer');
		 }
		
	}
	
}

