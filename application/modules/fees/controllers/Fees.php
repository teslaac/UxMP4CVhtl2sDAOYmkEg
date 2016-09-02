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
		$this->sch_id = $_SESSION['sch_id']; 

		//$_POST?  die(print_r($_POST)): '';
		//die(print_r($_SESSION['ts_id']));
		$this->data['ts_id'] = $ts_id = $this->ts_id = $_SESSION['ts_id'][0]['ts_id']; 
		$this->data['ts_details'] = $this->ts_details = $this->Corem->term_session("$this->sch_id");

		$this->data['level_id'] = $this->level_id = 'all';
		$this->data['all_ts_details'] = $this->ts_details;
		$this->data['title'] = 'Fees';

	}

	public function index()
	{		

		$this->data['students'] = $this->feesm->get_all_students($this->ts_id);
		//die(print_r());

		$n = 0;
		foreach ($this->data['students']  as  $students) {
			
			$this->data['students'][$n]['sum_bill'] = $sum_bill = $this->feesm->sum_bill($students['user_id'], $this->ts_id, 'optional');
			$this->data['students'][$n]['payment_balance'] = $payment_balance = $this->feesm->sum_previous_bal($students['user_id'], $this->ts_id);
			$this->data['students'][$n]['total_payable'] = $total_payable = ($students['amount'] + $payment_balance + $sum_bill );
			$this->data['students'][$n]['balance'] = $total_payable = $this->feesm->sum_credit($students['user_id'], $this->ts_id);
			$this->data['students'][$n]['trans_amount_paid'] = $this->feesm->sum_bill($students['user_id'], $this->ts_id, '', 1);
			//die(print_r($this->data['students']));
			$n++;
		}

		$feedata = $this->feesm->countfeedata($this->ts_id,   $this->sch_id);
		
		$paid = $unpaid = $partpay = 0;
		foreach ($feedata as $studata) {
			if($studata['paid'] == 0){
				$unpaid += 1;
			}elseif ($studata['total'] == $studata['paid']) {
				$paid += 1;
			}elseif($studata['total'] > $studata['paid']) {
				$partpay += 1;
			}
		}


		$this->data['usercount'] = count($this->data['students']);
		$this->data['ts_details'] = $this->ts_details;
		$this->data['ts_id'] = $this->ts_id;
		$this->data['app_levels_school'] = $this->Corem->get_app_any('','level');

	// print_r($paid.$partpay.$unpaid);die();
		$this->data['stat'] = array('paid' => $paid, 'unpaid' => $unpaid, 'partpay' => $partpay );
		$this->load->template('fees/bursary', $this->data);
	}

	function fees_bursary(  $ts_id='', $level_id ='', $record_type='all', $print='')
	{	

		//$this->feesm->url_filter('fee/fees_bursary', $ts_id, $level_id );
		if($this->input->post('filter')){
			$ts_id = $this->input->post('ts_id');
			$level_id = $this->input->post('level_id');
			redirect("core/url_filter/fees/fees_bursary/$ts_id/$level_id");
		}
	
		$ts_id2 = ($ts_id)?  $ts_id : $this->ts_id;
		$level_id = ($level_id)?  $level_id : $this->level_id;
		$this->data['students'] = $this->feesm->get_all_students($ts_id2, '', $level_id);
		//die(print_r());

		$n = 0;
		foreach ($this->data['students']  as  $students) {		
			$this->data['students'][$n]['sum_bill'] = $sum_bill = $this->feesm->sum_bill($students['user_id'], $this->ts_id, 'optional');
			$this->data['students'][$n]['payment_balance'] = $payment_balance = $this->feesm->sum_previous_bal($students['user_id'], $this->ts_id);
			$this->data['students'][$n]['total_payable'] = $total_payable = ($students['amount'] + $payment_balance + $sum_bill );
			$this->data['students'][$n]['balance'] = $total_payable = $this->feesm->sum_credit($students['user_id'],  $this->ts_id);
			$this->data['students'][$n]['trans_amount_paid'] = $this->feesm->sum_bill($students['user_id'], $this->ts_id, '', 1);
			//die(print_r($this->data['students']));
			$n++;
		}

		$feedata = $this->feesm->countfeedata($this->ts_id,  $this->sch_id);
		
		$paid = $unpaid = $partpay = 0;
		foreach ($feedata as $studata) {
			if($studata['paid'] == 0){
				$unpaid += 1;
			}elseif ($studata['total'] == $studata['paid']) {
				$paid += 1;
			}elseif($studata['total'] > $studata['paid']) {
				$partpay += 1;
			}
		}

		$this->data['ts_details'] = $this->Corem->term_session($this->sch_id, 'all', '', $ts_id);
		$this->data['usercount'] = count($this->data['students']);
		$this->data['all_ts_details'] = $this->ts_details;
		
		$this->data['level_details'] = $this->feesm->get_details2('class_level', 'level_id', $level_id);
		$this->data['level_id'] = $level_id;
		$this->data['app_levels_school'] = $this->Corem->get_app_any('','level');

		// print_r($paid.$partpay.$unpaid);die();
		$this->data['stat'] = array('paid' => $paid, 'unpaid' => $unpaid, 'partpay' => $partpay );
		
		if($print){
			$this->load->template_print('fees/print_record', $this->data);
		}else{
			$this->load->template('fees/bursary', $this->data);
		}
	}

	//Fees_settings Now on a seperate controller
		// 	public function settings($action= 'view')
		// {
		// 	$data['stu_main_fees'] = $this->feesm->list_main_fees();
		// 	//print_r($data['stu_main_fees']);
		// 	$this->load->template('fees/fees_settings', $this->data);
		// }

		// 	public function settin($action= 'view')
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
		// 	}
	// }

	public function discount($ts_id='', $view='view')
	{	
		if($this->input->post('filter')){
			$ts_id = $this->input->post('ts_id');
			redirect("core/url_filter/fees/discount/$ts_id");
		}
		$this->data['ts_id'] = $this->ts_id = $ts_id?  $ts_id: $this->data['ts_id'];
		$this->data['discounts'] = $all_dis = $this->feesm->list_discount($this->ts_id, '', $this->sch_id);
		//(print_r($all_dis));

		$this->load->template('fees/payment_discount', $this->data);
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

	public function payments($action = 'view', $stu_id='')
	{	
		$data['page'] = $this->data['module'];
		$data['stu_info'] = $this->User_model->get_user_info($stu_id, $_SESSION['sch_id'] );
		$data['stu_class_info'] = $this->User_model->get_user_class($stu_id, $_SESSION['sch_id'], $this->ts_id, array('cl.class_name', 'al.class_name', 'al.level_id' ));
		$data['stu_extra_fees'] = $this->feesm->list_optional_fees();

		//print_r($data['stu_extra_fees'] );

		if ($action === 'process'){
			$data['pagetitle'] = 'Process payments';
			$data['pagesubtitle'] = '';

			$this->load->template('fees/process_payment', $data);
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
	

	function process($stu_id){
		$ts_id = $this->ts_id;
		$sch_id = $_SESSION['sch_id'];

		if(isset($_POST['add_to_bill'])){  //&& !empty($_POST['fees'])
			$staff_id = $_SESSION['user_id'];
			isset($_POST['pb_amount'])?$amount = $_POST['pb_amount']: $amount = '';
			//print_r($_POST['fees'])
			foreach ($_POST['fees'] as $fee) {
				//Add to student bill
				$this->feesm->add_payment_to_bill($stu_id, $staff_id, $ts_id, $fee, $amount);
			}
			//redirect(base_url("fees/process/$stu_id"));	
		}

		if(isset($_POST['removebill'])){
			$this->feesm->delete_from_bill($_POST['removebill']);
		}


		if(isset($_POST['payment_type'])){
			$staff_id = $_SESSION['user_id'];
			$datapost = $_POST;
			$datapost['staff_id'] = $staff_id;
			$datapost['user_id'] = $stu_id;
			$datapost['ts_id'] = $ts_id;
			$datapost['sch_id'] = $sch_id;

			//print_r($_POST);
			$this->feesm->post_payment($datapost);
			redirect(base_url("fees/process/$stu_id"));	

		}
		

		if(isset($_POST['paybillitem'])){
			 ($this->feesm->update_bill_item($_POST['paybillitem'], $_POST, $stu_id, 1))? 			
			 redirect(base_url("fees/process/$stu_id")): '';	
		}

		if(isset($_POST['unpaybillitem'])){
			 ($this->feesm->update_bill_item($_POST['unpaybillitem'], $_POST, $stu_id, 0))? 			
			 redirect(base_url("fees/process/$stu_id")): '';
		}

		$data['stu_info'] = $this->User_model->get_user_info($stu_id, $sch_id );
		$data['stu_class_info'] = $this->User_model->get_user_class($stu_id, $sch_id, $ts_id, array('cl.class_name', 'al.class_name', 'al.level_id' ));
		$data['stu_extra_fees'] = $this->feesm->list_optional_fees($this->sch_id);

		$data['page'] = $this->data['module'];		
		$data['title'] = $data['pagetitle'] = 'Process payments';
		$data['pagesubtitle'] = '';

		$data['stu_fees_info']  = $stu_fees_info =  $this->feesm->get_all_students($ts_id, $stu_id)[0];
		$data['stu_fees_info']['sum_bill_paid'] = $sum_bill_paid = $this->feesm->sum_bill($stu_id, $ts_id, '', 1);
		$data['stu_fees_info']['sum_bill_unpaid'] = $sum_bill_unpaid = $this->feesm->sum_bill($stu_id, $ts_id, '', 0);
		$data['stu_fees_info']['sum_bill'] = $sum_bill = $this->feesm->sum_bill($stu_id, $ts_id);
		$data['stu_fees_info']['sum_optional_bill'] = $this->feesm->sum_bill($stu_id, $ts_id, 'optional');
		$data['stu_fees_info']['sum_previous_bal'] = $sum_previous_bal = $this->feesm->sum_previous_bal($stu_id, $ts_id);
		$data['stu_fees_info']['balance'] = $sum_bill - $sum_bill_paid;
		$data['stu_fees_info']['bills'] = $this->feesm->list_bill($ts_id, $stu_id);
		// feeid 1 = previous bill and 2 = main bill
		$data['stu_fees_info']['bills_prevbal'] = $this->feesm->list_generic_bill($ts_id, $stu_id, 1); 
		$data['stu_fees_info']['bills_main'] = $this->feesm->list_generic_bill($ts_id, $stu_id, 2);
		//print_r($data['stu_fees_info']['bills_main']); die();
		$data['stu_fees_info']['credit'] = $this->feesm->sum_credit($stu_id, $ts_id);

		
		
		$this->load->template('fees/process_payment', $data);
	}
}

