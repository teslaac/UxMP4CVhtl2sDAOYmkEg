<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require (APPPATH."modules/core/controllers/secure_area.php");

class results extends Secure_area {

	public function __construct()
	{
		$this->data['module'] = 'results';
		parent::__construct($this->data['module']);
	}

	public function index()
	{
		//var_dump($this->data);
		$this->data['page'] = 'results';
		$this->load->view('core/template/header', $this->data);
		$this->load->view('results/admin_exam');
		$this->load->view('core/template/footer');
	}



	public function scores($action = 'view')
	{

		if ($action === 'process'){
			$this->load->view('core/template/header2');
			$this->load->view('results/process_exam');
			$this->load->view('core/template/footer');
		}else {
		 	$this->load->view('core/template/header2');
		 	$this->load->view('results/scores');
		 	$this->load->view('core/template/footer');
		 }
		
	}
	public function scoresheet($action = 'view')
	{

		if ($action === 'print'){
			$this->load->view('results/print_score_sheet');
		}else {
		 	$this->load->view('core/template/header2');
		 	$this->load->view('results/score_sheet');
		 	$this->load->view('core/template/footer');
		 }
		
	}
	public function reportsheet($action = 'view')
	{

		if ($action === 'print'){
			$this->load->view('results/print_result');
		}
		elseif ($action === 'printall'){
			$this->load->view('results/print_all_result');
		}
		else {
		 	$this->load->view('core/template/header2');
		 	$this->load->view('results/report_sheet');
		 	$this->load->view('core/template/footer');
		 }
		
	}	
	

	
}
