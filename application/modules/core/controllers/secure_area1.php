<?php
class Secure_area extends CI_Controller 
{
	var $module_id;
	
	/*
	Controllers that are considered secure extend Secure_area, optionally a $module_id can
	be set to also check if a user can access a particular module in the system.
	*/
	function __construct($module_id=null)
	{
		parent::__construct();
		
		$this->module_id = $module_id;	
		$this->load->model('Users');
		$this->load->model('Location');
		
				var_dump( $this->session->userdata('userid'));

		if(!$this->Users->is_logged_in())
		{
			//redirect(base_url().'users/login');
		}
		
		if(!$this->Users->has_module_permission($this->module_id,$this->Users->get_logged_in_Users_info()->person_id))
		{
			redirect('no_access/'.$this->module_id);
		}
		
		//load up global data
		$logged_in_Users_info=$this->Users->get_logged_in_Users_info();
		$data['allowed_modules']=$this->Module->get_allowed_modules($logged_in_Users_info->person_id);
		$data['user_info']=$logged_in_Users_info;
		
		$locations_list=$this->Location->get_all();
		$authenticated_locations = $this->Users->get_authenticated_location_ids($logged_in_Users_info->person_id);
		$locations = array();
		foreach($locations_list->result() as $row)
		{
			if(in_array($row->location_id, $authenticated_locations))
			{
				$locations[$row->location_id] =$row->name;
			}
		}
		
		$data['authenticated_locations'] = $locations;
		$this->load->vars($data);
	}
	
	function check_action_permission($action_id)
	{
		if (!$this->Users->has_module_action_permission($this->module_id, $action_id, $this->Users->get_logged_in_Users_info()->person_id))
		{
			redirect('no_access/'.$this->module_id);
		}
	}	
}
?>