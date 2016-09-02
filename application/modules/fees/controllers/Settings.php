<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require (APPPATH."modules/core/controllers/secure_area.php");

class Settings extends Secure_area {

	public function __construct()
	{
		$this->data['title'] = $this->data['page'] = $this->data['module'] = 'fees';
		parent::__construct($this->data['module']);
		$this->load->model('feesm');	

		$this->sch_id = $_SESSION['sch_id']; 
		 $ts_id = $this->ts_id = $_SESSION['ts_id'][0]['ts_id']; 
		$this->ts_details = $this->Corem->term_session("$this->sch_id");
	}

	 function index()
	{	 
		redirect('fees/settings/bills/main/1/');
	}


	function fees_names($type = null)
	{
		$data['page'] = $this->data['module'];
		$data['fees_names'] = $this->feesm->list_fees_names($this->sch_id, $type);
		$this->load->template('fees/settings/fees_names', $data);
	}


	function bills($type = 'main', $ts_id = null, $stu_cat = 2 )
	{
		
		$data['title'] = $data['page'] = $this->data['module'];	
		$data['editfee'] = isset($_POST['editfee'])? $editfee = $_POST['editfee'] : null;	

		if (isset($_POST['editfee'])) {
			$data['fees_settings_id'] = $this->feesm->list_main_fees_id($this->sch_id, $ts_id, $stu_cat, $editfee);
			
		}

		$data['fees_settings'] = $this->feesm->list_fees($this->sch_id, $ts_id, $stu_cat, $type);
		$data['fees_cats'] = $this->feesm->list_fees_cat($this->sch_id);

		$class_values = [];
		$headers = [];
		foreach ($data['fees_settings'] as $key => $value) {
			$class_values[$value['level_id']][$value['fees_shortname']] = $value['amount'];
			$headers[$value['fees_shortname']] = $value['fees_id'];
		}

		$data['fees_cat_row'] = $this->feesm->get_details2('fees_cat', 'fees_cat_id' , $stu_cat);
		$data['page_ts_details'] =  $this->Corem->term_session($this->sch_id, 'all', '', $ts_id);
		$data['ts_id'] = $ts_id;
		$data['headers'] = $headers;
		$data['class_values'] = $class_values;
		$data['ts_details'] = $this->ts_details;
		$data['type'] = $type;
		$data['stu_cat'] = $stu_cat;

		$data['fees_names'] = $this->feesm->list_fees_names($this->sch_id, null);
		$data['app_levels_school'] = $this->Corem->get_app_any('','level');


		//print_r($data['app_levels_school']);
		$this->load->template('fees/fees_settings', $data);
	}


	function fees_stu_cat($type = null)
	{
		$data['page'] = $this->data['module'];
		$data['fees_names'] = $this->feesm->list_fees_names($this->sch_id, $type);
		$this->load->template('fees/settings/fees_stu_cat', $data);

	}
	
	function save_fees()
	{
		if(isset($_POST['save_fees'])){
			$bill_type = $this->input->post('bill_type');
			$ts_id =  $this->input->post('ts_id');
			$stu_cat = $this->input->post('stu_cat');
			$insert = $this->feesm->save_fees($_POST, $this->sch_id);
			$url = "fees/settings/bills/$bill_type/$ts_id/$stu_cat";
			redirect($url);
		}
	}

	function filter()
	{
		if(isset($_POST['filter'])){
			$url = "fees/settings/bills/".$_POST['bill_type']."/".$_POST['ts_id']."/".$_POST['stu_cat'];
			redirect($url);
		}
	}

	function get_levels_fees($fees_id)
	{
	   	$level_fees = $this->feesm->get_levels_fees($fees_id, $this->sch_id);

	   	print_r(json_encode($level_fees));
	}
	
	
	
}

