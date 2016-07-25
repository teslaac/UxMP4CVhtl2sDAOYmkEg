<?php
class Secure_area extends MX_Controller 
{
	var $module_id;
	public $userdata;
	
	/*
	Controllers that are considered secure extend Secure_area, optionally a $module_id can
	be set to also check if a user can access a particular module in the system.
	*/
	public $data = [];
	
	public function __construct($module_id=null)
	{
		parent::__construct();
		$this->module_id = $module_id;

		//$subdomain_arr = explode('.', $_SERVER['HTTP_HOST'], 2);
        //echo $subdomain_name = $subdomain_arr[0];		
		//var_dump($this->session->userdata('user_id'));

// echo '<pre>';
// //print_r($allowed_modules_submenu); 
// print_r($module_id); exit();
// echo '</pre>';
		$this->load->model('modules/Module');

		//user session data
		$this->userdata =$this->session->userdata;

		$logged_in_user_info = $this->User_model->get_logged_in_user_info();
  		// check_user_type
		$this->check_user_type($this->session->userdata['user_type'], $module_id);	
		
		if(!$this->User_model->is_logged_in())
		{
			redirect(base_url('login'));
		}

		//die(print_r($logged_in_user_info->roles));
		if(!$this->User_model->has_module_permission($this->module_id, $this->userdata['user_type'],$this->userdata['user_id'],$logged_in_user_info->roles))
		{
			redirect('no_access/'.$this->module_id);
		}
		
		
		$allowed_modules[] =$this->Module->get_allowed_modules($logged_in_user_info->user_id, 'user');
		$allowed_modules[] =$this->Module->get_allowed_modules($logged_in_user_info->user_type, 'group');
		foreach($logged_in_user_info->roles as $role){
			$allowed_modules[] = $this->Module->get_allowed_modules($role['role_id'], 'role');	
			}
		
		

		//list all submenu from a module
		$allowed_modules_submenu = $this->Module->get_allowed_modules_submenu($module_id, $this->userdata['user_id'], $this->userdata['user_type'],$logged_in_user_info->roles);
 

		// $schools_list=$this->School->get_all();
		// $authenticated_schools = $this->User_model->get_authenticated_school_ids($logged_in_user_info->user_id);
		// $schools = array();
		// foreach($schools_list->result() as $row)
		// {
		// 	if(in_array($row->sch_id, $authenticated_schools))
		// 	{
		// 		$schools[$row->sch_id] = $row->sch_full_name;
		// 	}
		// }
		if($module_id != NULL){
		$this->check_module_settings_status($module_id);
	}
		// $data['authenticated_schools'] = $schools;
		$data['userdata'] = $this->userdata;
		$data['user_info'] = $logged_in_user_info;
		$data['allowed_modules'] = $allowed_modules;
		$data['allowed_modules_submenu'] = $allowed_modules_submenu;
		$this->load->vars($data);

		
	}
	
	function check_action_permission($action_id)
	{
		
		$logged_in_user_info = $this->User_model->get_logged_in_user_info();
		if (!$this->User_model->has_module_action_permission($action_id, $this->userdata['user_type'],$this->userdata['user_id'],$logged_in_user_info->roles))
		{
			redirect('no_access/'.$this->module_id);
		}
	}

	function check_user_type($user_type, $module_id)
	{
		if ($user_type == 'prospective' && $module_id != 'admission')
		{
			redirect(base_url('admission'));
		}
		if ($user_type == 'reader' && $module_id != 'readingarmy')
		{
			redirect(base_url('readingarmy'));
		}
	}	

			
	function check_module_settings_status($module_id){
		$query = $this->Module->check_module_settings_status($module_id);
		if($query != "completed"){
			redirect($query);
			}
	}		
 }	

?>