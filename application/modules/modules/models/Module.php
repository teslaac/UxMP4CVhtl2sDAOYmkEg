<?php
class Module extends CI_Model 
{
    function __construct()
    {
        parent::__construct();
        $this->sch_id = $this->session->userdata['sch_id'];
    }
	
	function get_module_name($module_id)
	{
		$query = $this->db->get_where('modules', array('module_id' => $module_id), 1);
		
		if ($query->num_rows() ==1)
		{
			$row = $query->row();
			return lang($row->name_lang_key);
		}
		
		return lang('error_unknown');
	}
	
	function get_module_desc($module_id)
	{
		$query = $this->db->get_where('modules', array('module_id' => $module_id), 1);
		if ($query->num_rows() ==1)
		{
			$row = $query->row();
			return lang($row->desc_lang_key);
		}
	
		return lang('error_unknown');	
	}
	
	function get_all_modules($sch_id = NULL, $forced = TRUE)
	{
		$this->db->from('app_modules');
		if($sch_id !== NULL){
			if($forced == TRUE){
				$mode = 'left';
			}else{
				$mode = 'inner';
			}
			$this->db->select("app_modules.*,school_modules.date_installed,school_modules.date_upgraded,school_modules.status,school_modules.version");
			$this->db->join("school_modules","school_modules.module_id=app_modules.module_id and sch_id = '$sch_id'",$mode);
		}
		$this->db->where("module_status","active");
		$this->db->order_by("sort", "asc");
		return $this->db->get()->result_array();		
	}
	
	function get_allowed_modules($access_user_id, $access_user_type)
	{	
		if($access_user_id == 'superadmin'){
			$access_user_id = 'admin';
		}
		$this->db->from('school_modules_actions ma');
		$this->db->join('users_permissions_actions upa' ,'upa.action_id = ma.action_id ');
		$this->db->join('app_modules_actions ama' ,'ama.action_id = ma.action_id ');
		$this->db->where("upa.access_user_id", $access_user_id);
		$this->db->where("upa.access_user_type", $access_user_type);
		$this->db->where("ma.status","active");
		$this->db->where("upa.dashboard", 1);
		$this->db->order_by("sort", "asc");
		$get = $this->db->get()->result_array();
		return $get;	
echo '<pre>';
		 print_r($this->db->last_query());
echo '</pre>';
	}

	function get_allowed_modules_submenu($module_id, $user, $usertype,$roles)
	{	
			if($usertype == 'superadmin'){
			$usertype = 'admin';
		}
		$this->db->from('school_modules_actions ma');
		$this->db->join("app_modules_actions ama", "ama.action_id = ma.action_id and menu = '1'");
		$this->db->join("users_permissions_actions upa", "upa.action_id = ma.action_id ")
		->group_start()
			->where("upa.access_user_id",$user)
			->or_where("upa.access_user_id",$usertype)
		->group_end();
		foreach($roles as $role){
				$this->db->or_where("upa.access_user_id", $role['role_id']);
			}
		$this->db->where("ama.module_id",$module_id);
		$this->db->where("ma.sch_id", $this->sch_id);
		$this->db->where("ma.status","active");
		$this->db->order_by("sort", "asc");
		$get = $this->db->get()->result_array();
		return $get;	
echo '<pre>';
		 print_r($this->db->last_query());
echo '</pre>'; exit();
	}

	function check_module_settings_status($module_id){
		$this->db->from('school_modules');
		$this->db->join("app_modules","app_modules.module_id=school_modules.module_id");
		$this->db->where("school_modules.module_id",$module_id);
		$this->db->where("sch_id",$_SESSION['sch_id']);
		$get = $this->db->get()->result_array();
		if($get[0]['settings_status'] == 'completed'){
			return "completed";
		}else{
			return $get[0]['settings_url'];
		}
	}

	function get_modules_ap($usertype,$module_id = NULL){
		$sch_id = $_SESSION['sch_id'];
		$this->db->from('app_modules');
		$this->db->join("app_modules_actions", "app_modules_actions.module_id=app_modules.module_id");
		$this->db->join("users_permissions_actions", "users_permissions_actions.action_id=app_modules_actions.action_id and usertype = '$usertype' and access_user_type = 'group'");
		if($module_id == NULL){
			$this->db->group_by('app_modules_actions.module_id');
		}else{
			$this->db->where('app_modules.module_id',$module_id);
		}
		$this->db->where('sch_id',$sch_id);
		
		return $this->db->get()->result_array();
		//die ($this->db->last_query());
	}

	function get_modules_eap($user_id,$usertype,$module_id = NULL){
		$sch_id = $_SESSION['sch_id'];
		$this->db->from('school_modules_actions');
		$this->db->join("users_permissions_actions", "users_permissions_actions.action_id=school_modules_actions.action_id and access_user_id='$user_id'","left");	
		$this->db->join('app_modules_actions',"school_modules_actions.action_id=app_modules_actions.action_id");
		$this->db->join('app_modules',"app_modules_actions.module_id=app_modules.module_id");	
				
		if($module_id == NULL){
			$this->db->group_by('app_modules_actions.module_id');
		}else{
			 $this->db->group_by(array('app_modules_actions.action_id'));
			$this->db->where('app_modules.module_id',$module_id);
			//die(print_r($this->db->get()->result_array()));
		}
		$this->db->where('school_modules_actions.sch_id',$sch_id);
		//die(print_r($this->db->get()->result_array()));
		return $this->db->get()->result_array();

	}

}
?>
