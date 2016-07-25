<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require (APPPATH."modules/core/controllers/secure_area.php");

class Modules_manager extends Secure_area {

	public function __construct()
	{
		// parent::__construct();
		$this->data['module'] = 'core';
		parent::__construct($this->data['module']);

	}
	
	public function index()
	{
		$this->load->model('Module');
		$this->data['userdata'] = $this->session->userdata;
		$this->data['page'] = "Modules Manager";
		$this->data['modules'] = $this->Module->get_all_modules($_SESSION['sch_id']);
		//die(print_r($this->data['modules']));
		$this->load->template('modules/modules',$this->data);
		// $this->load->view('core/template/header2');
		// $this->load->view('modules_manager/modules');
		// $this->load->view('core/template/footer');
	}

	public function manage_module($module_type = 'addon',$module_id,$status = 'active'){
			$update = $this->Corem->module_manager($module_type,$module_id,$status);
			if($update === TRUE){
			$this->session->set_flashdata('success', "<center> Congratulations! Action Completed Successfully</center>");
			
			}else{
			$this->session->set_flashdata('failed', "<center>An error occured while trying to perform the action you specified, kindly try again later Thanks <center>");
			}
			redirect('modules/modules_manager');
	}


}
