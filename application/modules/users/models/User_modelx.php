<?php

class User_model extends CI_Model{
	
	var $table = "acadah_users";
	
	function __construct(){
		parent::__construct();
	}
	


	function validate($user_id, $password){

		$this->db->from('users');	
		$this->db->where('users.user_id', $user_id);
		$this->db->or_where('users.email', $user_id);
		$this->db->where('users.pass',$password);
		$this->db->where('users.status','active');
		$query = $this->db->get();
		 //print_r($this->db->last_query());die();
		if(count($query->result_array()) === 1){
			$data = $query->row();
			
			//print_r($data);die();
			return $data;
		}else{
			return false;
		}

	}

		/*
	Determines if a given user_id is an user
	*/
	//user
	function exists($user_id)
	{
		$this->db->from('users');	
		$this->db->where('users.user_id',$user_id);
		$query = $this->db->get();
		
		return ($query->num_rows()==1);
	}
	
	//user	
	function user_username_exists($username)
	{
		$this->db->from('users');	
		$this->db->where('users.username',$username);
		$query = $this->db->get();
		
		
		if($query->num_rows()==1)
		{
			return $query->row()->username;
		}
	}	
	
	/*
	Returns all the users
	*/
	//users  
	// todo - fix funtion 
	function get_all($limit=10000, $offset=0, $col='lname',$order='asc')
	{	
		$users=$this->db->dbprefix('users');
		$sql = "SELECT * 
						FROM ".$users."
						WHERE status = 'active' AND ".$users.".user_id > 1 
						AND sch_id =".'$sch_id'."
						ORDER BY ".$col." ". $order." 
						
						LIMIT  ".$offset.",".$limit;
		$data=$this->db->query($sql);		
						
		return $data;
	}

	//staff
	//todo - 
	function get_all_staff($limit=10000, $offset=0, $col='lname',$order='asc')
	{	
		$staff=$this->db->dbprefix('staff');
		$users=$this->db->dbprefix('users');
		$sql = "SELECT * 
						FROM ".$users."
						STRAIGHT_JOIN ".$staff." ON ".$users.".user_id = ".$staff.".staff_id
						WHERE deleted = 0 AND ".$users.".user_id > 1 ORDER BY ".$col." ". $order." 
						LIMIT  ".$offset.",".$limit;
		$data=$this->db->query($sql);		
						
		return $data;
	}
	
	//users
	function count_all()
	{
		$this->db->from('users');
		$this->db->where('deleted',0);
		return $this->db->count_all_results();
	}

	//todo - duplicate for all user_types
	function count_all_user_types($user_type)
	{
		$this->db->from('users');
		$this->db->where('deleted',0);
		$this->db->where('user_type', $user_type);
		return $this->db->count_all_results();
	}
	
	/*
	Gets information about a particular user
	*/
	// merged user to - user_types
	function get_info($user_id, $user_type)
	{

		if($user_type == 'superadmin' or $user_type == 'admin' ){
			$user_type = 'staff';
		}
		$this->db->from('users');		
		$this->db->join($user_type, 'users.user_id ='.$user_type.'.'.$user_type.'_id', 'left');
		$this->db->where('users.user_id',$user_id);

		//echo $this->db->get_compiled_select();
		$query = $this->db->get();

		if($query->num_rows()==1)
		{
			$data = $query->row();
			$this->db->select("users_roles.role_id");
			$this->db->from('users_roles');
			$this->db->where("user_id",$data->user_id);
			$data->roles = $this->db->get()->result_array();
			//die(print_r($data));
			return $query->row();
		}

		// else
		// {
		// 	//Get empty base parent object, as $user_id is NOT an user
		// 	$person_obj=parent::get_info(-1);
			
		// 	//Get all the fields from user table
		// 	$fields = $this->db->list_fields('users');
			
		// 	//append those fields to base parent object, we we have a complete empty object
		// 	foreach ($fields as $field)
		// 	{
		// 		$person_obj->$field='';
		// 	}
			
		// 	return $person_obj;
		// }
	}
	
	/* 
	Gets information about multiple users
	*///
		function get_multiple_info($user_ids, $user_type = 'student')
	{
		$this->db->from($user_type);
		$this->db->join('users', 'users.user_id = $user_type.user_id');		
		$this->db->where_in('$user_type.user_id',$user_ids);
		$this->db->order_by("lname", "asc");
		return $this->db->get();		
	}
	
	/*
	Inserts or updates an user
	*/
	function save(&$person_data, &$user_data, &$permission_data, &$permission_action_data, &$school_data, $user_id=false)
	{
		$success=false;
		
		//Run these queries as a transaction, we want to make sure we do all or nothing
		$this->db->trans_start();
			
		if(parent::save($person_data,$user_id))
		{
			if (!$user_id or !$this->exists($user_id))
			{
				$user_data['user_id'] = $user_id = $person_data['user_id'];
				$success = $this->db->insert('users', $user_data);
			}
			else
			{
				$this->db->where('user_id', $user_id);
				$success = $this->db->update('users',$user_data);		
			}
			
			//We have either inserted or updated a new user, now lets set permissions. 
			if($success)
			{
				//--r
				
				//First lets clear out any permissions actions the user currently has.
				$success=$this->db->delete('permissions_actions', array('user_id' => $user_id));
				
				//Now insert the new permissions actions
				if($success)
				{
					foreach($permission_action_data as $permission_action)
					{
						list($module, $action) = explode('|', $permission_action);
						$success = $this->db->insert('permissions_actions',
						array(
						'module_id'=>$module,
						'action_id'=>$action,
						'user_id'=>$user_id));
					}
				}
				
				//todo - assign users to schools
				//$success=$this->db->delete('users_schools', array('user_id' => $user_id));
				
				//Now insert the new user schools
				// if($success)
				// {
				// 	if ($school_data !== FALSE)
				// 	{
				// 		foreach($school_data as $school_id)
				// 		{
				// 			$success = $this->db->insert('users_schools',
				// 			array(
				// 			'user_id'=>$user_id,
				// 			'sch_id'=>$school_id
				// 			));
				// 		}
				
				// 	}
				// }
				
			}
			
		}
		
		$this->db->trans_complete();		
		return $success;
	}
	
	/*
	Deletes one user
	*/
	//todo - check delete user
	function delete($user_id)
	{
		$success=false;
		
		//Don't let user delete their self
		if($user_id==$this->get_logged_in_user_info()->user_id)
			return false;
		
		//Run these queries as a transaction, we want to make sure we do all or nothing
		$this->db->trans_start();
		
		$user_info = $this->Users->get_info($user_id);
	
		if ($user_info->image_id !== NULL)
		{
			$this->Person->update_image(NULL,$user_id);
			$this->Appfile->delete($user_info->image_id);			
		}			
		
		//Delete permissions
		if($this->db->delete('permissions', array('user_id' => $user_id)) && $this->db->delete('permissions_actions', array('user_id' => $user_id)))
		{	
			$this->db->where('user_id', $user_id);
			$success = $this->db->update('users', array('deleted' => 1));
		}
		$this->db->trans_complete();		
		return $success;
	}
	
	/*
	Deletes a list of users
	*/
	//
	function delete_list($user_ids)
	{
		$success=false;
		
		//Don't let user delete their self
		if(in_array($this->get_logged_in_user_info()->user_id,$user_ids))
			return false;

		//Run these queries as a transaction, we want to make sure we do all or nothing
		$this->db->trans_start();
		
		foreach($user_ids as $user_id)
		{
			$user_info = $this->Users->get_info($user_id);
		
			if ($user_info->image_id !== NULL)
			{
				$this->Person->update_image(NULL,$user_id);
				$this->Appfile->delete($user_info->image_id);			
			}			
		}
		
		$this->db->where_in('user_id',$user_ids);
		//Delete permissions
		if ($this->db->delete('permissions'))
		{
			//delete from user table
			$this->db->where_in('user_id',$user_ids);
			$success = $this->db->update('users', array('deleted' => 1));
		}
		$this->db->trans_complete();		
		return $success;
 	}
	
		
	function check_duplicate($term)
	{
		$this->db->from('users');
		$this->db->join('people','users.user_id=people.user_id');	
		$this->db->where('deleted',0);		
		$query = $this->db->where("CONCAT(first_name,' ',last_name) = ".$this->db->escape($term));
		$query=$this->db->get();
		
		if($query->num_rows()>0)
		{
			return true;
		}
	}

	/*
	Get search suggestions to find users
	*/

	//todo fix usertype in function 
	function get_search_suggestions($search,$limit=5,$escape_like_str,$usertype='student')
	{
		$suggestions = array();
		
		$this->db->from($usertype);
		$this->db->join('users','$usertype.user_id=users.user_id');
		
		// $this->db->where("(first_name LIKE '%".$this->db->escape_like_str($search)."%' or 
		// last_name LIKE '%".$this->db->($search)."%' or 
		// CONCAT(`first_name`,' ',`last_name`) LIKE '%".$this->db->escape_like_str($search)."%' or 
		// CONCAT(`last_name`,', ',`first_name`) LIKE '%".$this->db->escape_like_str($search)."%') and deleted=0");
		
		$this->db->limit($limit);	
		$by_name = $this->db->get();
		$temp_suggestions = array();
		foreach($by_name->result() as $row)
		{
			$temp_suggestions[] = $row->last_name.', '.$row->first_name;
		}
		
		sort($temp_suggestions);
		foreach($temp_suggestions as $temp_suggestion)
		{
			$suggestions[]=array('label'=> $temp_suggestion);		
		}
		
		$this->db->from('users');
		$this->db->join('people','users.user_id=people.user_id');
		$this->db->where('deleted', 0);
		$this->db->like("email",$search);
		$this->db->limit($limit);
		$by_email = $this->db->get();
		$temp_suggestions = array();
		foreach($by_email->result() as $row)
		{
			$temp_suggestions[] = $row->email;
		}
		
		sort($temp_suggestions);
		foreach($temp_suggestions as $temp_suggestion)
		{
			$suggestions[]=array('label'=> $temp_suggestion);		
		}
		
		$this->db->from('users');
		$this->db->join('people','users.user_id=people.user_id');	
		$this->db->where('deleted', 0);
		$this->db->like("username",$search);
		$this->db->limit($limit);
		$by_username = $this->db->get();
		foreach($by_username->result() as $row)
		{
			$suggestions[]=array('label'=> $row->username);		
		}


		$this->db->from('users');
		$this->db->join('people','users.user_id=people.user_id');	
		$this->db->where('deleted', 0);
		$this->db->like("phone_number",$search);
		$this->db->limit($limit);
		$by_phone = $this->db->get();
		$temp_suggestions = array();
		foreach($by_phone->result() as $row)
		{
			$temp_suggestions[]=$row->phone_number;		
		}
		
		sort($temp_suggestions);
		foreach($temp_suggestions as $temp_suggestion)
		{
			$suggestions[]=array('label'=> $temp_suggestion);		
		}
		
		
		//only return $limit suggestions
		if(count($suggestions > $limit))
		{
			$suggestions = array_slice($suggestions, 0,$limit);
		}
		return $suggestions;
	
	}
	
	
	
	/*
	Preform a search on users
	*/
	//todo --
	function search($search, $limit=20,$offset=0,$column='last_name',$orderby='asc')
	{
			$this->db->from('users');
			$this->db->join('people','users.user_id=people.user_id');		
			$this->db->where("(first_name LIKE '%".$this->db->escape_like_str($search)."%' or 
			last_name LIKE '%".$this->db->escape_like_str($search)."%' or 
			email LIKE '%".$this->db->escape_like_str($search)."%' or 
			phone_number LIKE '%".$this->db->escape_like_str($search)."%' or 
			username LIKE '%".$this->db->escape_like_str($search)."%' or 
			CONCAT(`first_name`,' ',`last_name`) LIKE '%".$this->db->escape_like_str($search)."%' or 
			CONCAT(`last_name`,', ',`first_name`) LIKE '%".$this->db->escape_like_str($search)."%') and deleted=0");		
			$this->db->order_by($column, $orderby);
			$this->db->limit($limit);
			$this->db->offset($offset);
			return $this->db->get();
	}
	
	function search_count_all($search, $limit=10000)
	{
			$this->db->from('users');
			$this->db->join('people','users.user_id=people.user_id');		
			$this->db->where("(first_name LIKE '%".$this->db->escape_like_str($search)."%' or 
			last_name LIKE '%".$this->db->escape_like_str($search)."%' or 
			email LIKE '%".$this->db->escape_like_str($search)."%' or 
			phone_number LIKE '%".$this->db->escape_like_str($search)."%' or 
			username LIKE '%".$this->db->escape_like_str($search)."%' or 
			CONCAT(`first_name`,' ',`last_name`) LIKE '%".$this->db->escape_like_str($search)."%') and deleted=0");		
			$this->db->limit($limit);
			$result=$this->db->get();				
			return $result->num_rows();
	}
	
	/*
	Attempts to login user and set session. Returns boolean based on outcome.
	*/
	function login($username, $password)
	{
		$query = $this->db->get_where('users', array('username' => $username,'password'=>md5($password), 'deleted'=>0), 1);
		if ($query->num_rows() ==1)
		{
			$row=$query->row();
			$this->session->set_userdata('user_id', $row->user_id);
			return true;
		}
		return false;
	}
	
	/*
	Logs out a user by destorying all session data and redirect to login
	*/
	function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
	
	/*
	Determins if a user is logged in
	*/
	function is_logged_in()
	{
		return $this->session->userdata('user_id')!=false;
	}
	
	/*
	Gets information about the currently logged in user.
	*/
	function get_logged_in_user_info()
	{
		if($this->is_logged_in())
		{
			//var_dump($this->session->userdata('user_id'));
			return $this->get_info($this->session->userdata('user_id'),$this->session->userdata('user_type'));
		}
		
		return false;
	}
	
	/*
	Gets the current user's school. If they have more than 1, then a user can change during session
	
	function get_logged_in_user_current_school_id()
	{
		if($this->is_logged_in())
		{
			//If we have a school in the session
			if ($this->session->userdata('user_current_school_id')!==FALSE)
			{
				return $this->session->userdata('user_current_school_id');
			}
			
			//Return the first school user is authenticated for
			return current($this->get_authenticated_school_ids($this->session->userdata('user_id')));
		}
		
		return FALSE;
	}
	
	function get_current_school_info()
	{
		return $this->Location->get_info($this->get_logged_in_user_current_school_id());
	}
		
	function set_user_current_school_id($school_id)
	{
		if ($this->is_school_authenticated($school_id))
		{
			$this->session->set_userdata('user_current_school_id', $school_id);
		}
	}
	*/
	/*
	Gets the current user's register id (if set)
	*/
	//todo - find out register id is used for
	function get_logged_in_user_current_register_id()
	{
		if($this->is_logged_in())
		{
			//If we have a register in the session
			if ($this->session->userdata('user_current_register_id')!==FALSE)
			{
				return $this->session->userdata('user_current_register_id');
			}
			
			return NULL;
		}
		
		return NULL;
	}
	
	function set_user_current_register_id($register_id)
	{
		$this->session->set_userdata('user_current_register_id', $register_id);
	}
	
	
	/*
	Determins whether the user specified user has access the specific module.
	*/
	function has_module_permission($module_id,$user_type,$user_id,$roles)
	{
		//if no module_id is null, allow access
		if($module_id==null)
		{
			return true;
		}
		if($user_type == 'superadmin'){
			$user_type = 'admin';
		}
		// foreach($roles as $role){
		// 	die(print_r($role));
		// }
		$this->db->from('school_modules_actions');
		$this->db->join('app_modules_actions', "school_modules_actions.action_id = app_modules_actions.action_id");
		$this->db->join('users_permissions_actions upa', "upa.action_id = school_modules_actions.action_id and upa.sch_id = '$_SESSION[sch_id]'")
		->group_start()
			->where("upa.access_user_id",$user_id)
			->or_where("upa.access_user_id",$user_type);
		foreach($roles as $role){
				$this->db->or_where("upa.access_user_id", $role['role_id']);
			}
		$this->db->group_end();
		
		$this->db->where(array('module_id'=>$module_id,'school_modules_actions.status'=>'active','school_modules_actions.sch_id'=>$_SESSION['sch_id']));
		$query = $this->db->get();
		return $query->num_rows();

		 // echo ($this->db->last_query()); 
		 //   die();

	}
	
	function has_module_action_permission($action_id,$user_type, $user_id,$roles)
	{
		//if no module_id is null, allow access
		// if($module_id==null)
		// {
		// 	return true;
		// }
		if($user_type == 'superadmin'){
			$user_type = 'admin';
		}
		$this->db->from('users_permissions_actions upa')
		->group_start()
			->where("upa.access_user_id",$user_id)
			->or_where("upa.access_user_id",$user_type);
		
		foreach($roles as $role){
				$this->db->or_where("upa.access_user_id", $role['role_id']);
			}
			$this->db->group_end();
		$this->db->where(array('action_id'=>$action_id,'status'=>'active','sch_id'=>$_SESSION['sch_id']));
		$query = $this->db->get();
		return $query->num_rows();
	}
	
	function get_user_by_username_or_email($username_or_email)
	{
		$this->db->from('users');	
		$this->db->join('people', 'people.user_id = users.user_id');
		$this->db->where('username',$username_or_email);
		$this->db->or_where('email',$username_or_email);
		$query = $this->db->get();
		
		if ($query->num_rows() == 1)
		{
			return $query->row();
		}
		
		return false;
	}
	
	function update_user_password($user_id, $password)
	{
		$user_data = array('password' => $password);
		$this->db->where('user_id', $user_id);
		$success = $this->db->update('users',$user_data);
		
		return $success;
	}
		
	function cleanup()
	{
		$user_data = array('username' => null);
		$this->db->where('deleted', 1);
		return $this->db->update('users',$user_data);
	}
		
	function get_user_id($username)
	{
		$query = $this->db->get_where('users', array('username' => $username, 'deleted'=>0), 1);
		if ($query->num_rows() ==1)
		{
			$row=$query->row();
			return $row->user_id;
		}
		return false;
	}
	
	//todo - decide on users schools
	// get user sch from user tb
	function get_authenticated_school_ids($user_id)
	{
		$this->db->select('users.sch_id');
		$this->db->from('users');
		$this->db->join('school', 'school.sch_id = users.sch_id');
		$this->db->where('user_id', $user_id);
		$this->db->where('school.deleted', 0);
		$this->db->order_by('sch_id', 'asc');
		
		$school_ids = array();
		
		foreach($this->db->get()->result_array() as $school)
		{
			$school_ids[] = $school['sch_id'];
		}
		
		return $school_ids;
	}
	
	//todo - decide on users schools	
	function is_school_authenticated($school_id)
	{
		if ($user = $this->get_logged_in_user_info())
		{
			$this->db->select('sch_id');
			$this->db->from('users_schools');
			$this->db->where('user_id', $user->user_id);
			$this->db->where('sch_id', $school_id);
			$result = $this->db->get();

			return $result->num_rows() == 1;
		}
		
		return FALSE;
	}
	
	//todo - is_user_authenticated
	function is_user_authenticated($user_id, $school_id)
	{
		static $authed_users;
		
		if (!$authed_users)
		{
			$this->db->select('user_id');
			$this->db->from('users_schools');
			$this->db->where('sch_id', $school_id);
			$result = $this->db->get();
			$authed_users = array();
			
			foreach($result->result_array() as $user)
			{
				$authed_users[$user['user_id']] = TRUE;
			}	
		}
		return isset($authed_users[$user_id]) && $authed_users[$user_id]; 
	}

	/**
	 * Function Written By Tes Sal
	 * This function will return all the details of every column in the database with the usertype you entered
	 * @param $usertype
	 * This is the usertype of the users you want returned to you e.g. staff,student,parent
	 * @param $table
	 * Table is the name of the table we are joining with e.g. acadah_staff
	 * @param $foreign_key
	 * Foreign Key is what user_id is called in the table you specified for example in acadah_staff table it is called staff_id
	 * @return mixed
	 */

	public function get_all_users($usertype,$table,$foreign_key){
		$sch_id = $_SESSION['sch_id'];
		$this->db->join("$table", "$table.$foreign_key=acadah_users.user_id");
		$this->db->where(array('sch_id'=>$sch_id,'user_type'=>"$usertype"));
		if($table == 'acadah_staff' and $_SESSION['user_type'] == 'superadmin'){
			$this->db->or_where('user_type','admin');
		}
		$query = $this->db->get('acadah_users');

		return $query->result_array();
	}

	/**
	 * Function Written By Tes Sal
	 * This fucntion will help you insert into the users table and anyother table you wanna insert into, just make sure you pass in correct parameters
	 * @param $udata
	 * Udata variable is the array of data that will be inserted into the users table
	 * @param $odata
	 * Odata variable is the array of data that will be inserted into the $table you specified
	 * @param $id
	 * This is optional, only pass it if you are adding a new parent, it will be the user_id of the student you are adding a parent for
	 * @param $check
	 * Here is The name of any field in your registration fields that probably phone_number or address of the user you are adding. It will be used
	 * to query back the user immediately after adding him/her
	 * @param $check_name
	 * Check name variable is the real name assigned to the field name you entered ($check) in the database
	 * @param $foreign_key
	 * Foreign Key is what user_id is called in the table you specified for example in acadah_staff table it is called staff_id
	 * @param $table
	 * $table is the name of the second table you would be inserting into
	 * @return bool|string
	 */

	public function add_user($udata, $odata, $id = NULL, $foreign_key, $table){
		$sch_id = $_SESSION['sch_id'];
		$sch_short_name = $_SESSION['sch_id'];

		if($table == 'acadah_student'){
			$cc = $this->check_max_student();
			if($cc !== TRUE){
				return $cc;
			}
		}

		// Now the query to insert the general data into the users table
		$this->db->trans_begin();
		$general = $this->db->insert('acadah_users',$udata);
		$tran_id = $this->db->insert_id();
		if(!$general){
			return "An error has occurred at the first stage";
		}
		//Now I need to Add the details to the parents table
		//Firstly am gonna get the generated id for the user
//		$verify = $this->input->post($check);
//		$query = $this->db->get_where("acadah_users",array('sch_id'=>$sch_id,'id'=>$this->db->insert_id()));
//		$query = $query->last_row('array');
		$user_id = $this->db->insert_id();
		if(empty($user_id)){
			die('Am Lost in Transmission');
		}
		//Let Me quickly Update The user code of the user added now
		$usercode = $sch_short_name.$user_id;
		$updata = array('user_id'=>$usercode);
		if(!empty($_FILES['passport']['name'])){
			$config['upload_path']          = "./assets/$sch_id/";
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 2048000;
            // $config['max_width']            = 1024;
            // $config['max_height']           = 768;
            $config['file_name']			= $usercode;
            $config['overwrite']			= TRUE;
            $this->upload->initialize($config);
             if ( ! $this->upload->do_upload('passport'))
                {
                        $error = $this->upload->display_errors();

                        return $error;
                        $this->db->trans_rollback();
                }
                else
                {
                        $data = array($this->upload->data());
                        
                    	$updata['profile_image'] = $data[0]['file_name'];    
                }
		}
		// $this->db->set('user_id',$usercode);
		// $this->db->where('id',$user_id);
		$usercode_update = $this->db->update('acadah_users',$updata,array('id'=>$user_id));
		if(!$usercode_update){
			$this->db->trans_rollback();
			return "Unable TO assign Usercode to recently added user";
		}
		

		if(!empty($this->input->post('role[]'))){
			$roles = $this->input->post('role[]');
			foreach($roles as $role){
				$rdata = array(
					'user_id' => $usercode,
					'role_id' => $role
					);
			$this->db->insert('users_roles',$rdata);
			}
		}
		$odata[$foreign_key] = $usercode;
		if($table == 'acadah_parent') {
			$oodata = array(
				'parent_id' => $usercode,
				'student_id' => $id,
				'relationship' => $this->input->post('prelationship')
			);
			$this->db->insert('acadah_parent_student',$oodata);
		}
		$oquery = $this->db->insert($table,$odata);
		if(!$oquery){
			$this->db->trans_rollback();
			return "Importing Data To $table failed";
		}
		if ($this->db->trans_status() === FALSE){
                    $this->db->trans_rollback();
                    return FALSE;
                }else{
                    $this->db->trans_commit();
                }
                   
		return TRUE;
	}

	/**
	 * Function Written By Tes Sal
	 * THis function does the validation of all the input fields used on ACADAH for you. STRICTLY DRY
	 * @param $type
	 * Well this is the type of validation you wanna carryout, e.g. student,parent,staff
	 * @return bool
	 */
	public function general_validation($type){
		if($type=='parent'){
			$this->form_validation->set_rules('pfirstname', 'First Name', 'trim|required|min_length[5]|max_length[22]');
			$this->form_validation->set_rules('psurname', 'Surname', 'trim|required|min_length[5]|max_length[22]');
			$this->form_validation->set_rules('pothername', 'Other Name', 'trim|required|min_length[5]|max_length[22]');
			$this->form_validation->set_rules('pphonenumber', 'Phone Number', 'trim|required|min_length[10]|max_length[11]|numeric');
			$this->form_validation->set_rules('pemailaddress', 'Email Address', 'trim|required|valid_email');
			$this->form_validation->set_rules('pinitial', 'Initial', 'trim|required|min_length[2]|max_length[10]');
			$this->form_validation->set_rules('phome_address', 'Home Address', 'trim|required|min_length[5]');
			$this->form_validation->set_rules('preligion', 'Religion', 'trim|required|max_length[15]|alpha');
			$this->form_validation->set_rules('pdob', 'Date Of Birth', 'trim|required');
			$this->form_validation->set_rules('pnationality', 'Nationality', 'trim|required|min_length[3]|max_length[22]');
			$this->form_validation->set_rules('pstate', 'State', 'trim|required');
			$this->form_validation->set_rules('plga', 'L.G.A', 'trim|required');
			$this->form_validation->set_rules('phometown', 'Home Town', 'trim|required|min_length[5]|max_length[22]');
			$this->form_validation->set_rules('prelationship', 'Parent Relationship', 'trim|required');
			$this->form_validation->set_rules('poccupation', 'Parents Occupation', 'trim|required');
			$this->form_validation->set_rules('poccupation_address', 'Parents Occupation Address', 'trim|required');
//            $this->form_validation->set_rules('pweight', 'Weight', 'trim|required');
//            $this->form_validation->set_rules('pheight', 'Height', 'trim|required');
//            $this->form_validation->set_rules('pdisability', 'Disability', 'trim|required');
//            $this->form_validation->set_rules('pgenotype', 'Genotype', 'trim|required');
//            $this->form_validation->set_rules('pbloodgroup', 'Bloodgroup', 'trim|required');
		}else {
			//Validating General Info
			$this->form_validation->set_rules('fname', 'First Name', 'trim|required|min_length[2]|max_length[30]');
			$this->form_validation->set_rules('sname', 'Surname', 'trim|required|min_length[2]|max_length[30]');
			$this->form_validation->set_rules('mname', 'Middle Name', 'trim|required|min_length[2]|max_length[30]');
			$this->form_validation->set_rules('phone', 'Phone Number', 'trim|required|min_length[10]|max_length[11]|numeric');
			$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
			$this->form_validation->set_rules('gender', 'Gender', 'trim|required|min_length[1]|max_length[6]');
			$this->form_validation->set_rules('address', 'Home Address', 'trim|required|min_length[5]');
			$this->form_validation->set_rules('religion', 'Religion', 'trim|required|max_length[15]|alpha');
			$this->form_validation->set_rules('dob', 'Date Of Birth', 'trim|required');
			$this->form_validation->set_rules('nationality', 'Nationality', 'trim|required|min_length[3]|max_length[22]');
			$this->form_validation->set_rules('state', 'State', 'trim|required');
			$this->form_validation->set_rules('lga', 'L.G.A', 'trim|required');
			$this->form_validation->set_rules('hometown', 'Home Town', 'trim|required|min_length[2]|max_length[22]');

			//Validating Medical Information Provided No room for exploits

			$this->form_validation->set_rules('weight', 'Weight', 'trim|required');
			$this->form_validation->set_rules('height', 'Height', 'trim|required');
			$this->form_validation->set_rules('disability', 'Disability', 'trim|required');
			$this->form_validation->set_rules('genotype', 'Genotype', 'trim|required');
			$this->form_validation->set_rules('bloodgroup', 'Bloodgroup', 'trim|required');
		}

		/**
		 * The Reason For adding If statement here is that I dont wanna repeat myself by creating another function
		 * to add staff which will probably include all the fields listed above so instead am using the if statement
		 * which means from the form the values will be sent is where the logic to use will be defined
		 *
		 * In the New Version Of Acadah Students and Staff are now separated as a result I am removing the if statement
		 *
		 * Changed The Code Again Now It has If statements
		 */
		if($type == 'staff') {
			//Validating Staff Info Provided no room for exploits

			$this->form_validation->set_rules('file_no', 'File No', 'trim|required');
			$this->form_validation->set_rules('year_of_employment', 'Year Of Employment', 'trim|required');
			$this->form_validation->set_rules('sport_house', 'Sport House', 'trim');
			$this->form_validation->set_rules('staff_position', 'Staff Position', 'trim|required');
			$this->form_validation->set_rules('staff_type', 'Staff Type', 'trim|required');
			$this->form_validation->set_rules('staff_function', 'Staff Function', 'trim|required');
			$this->form_validation->set_rules('qualification', 'Highest Qualification', 'trim|required');
			$this->form_validation->set_rules('course_studied', 'Course Studied', 'trim|required');
			$this->form_validation->set_rules('institution', 'Institution', 'trim|required');
			$this->form_validation->set_rules('years_of_exp', 'Years Of Exp..', 'trim|required');
			$this->form_validation->set_rules('staff_level', 'Staff Level', 'trim|required');
		}elseif($type == 'student'){
			//Validating Admission Info Provided no room for exploits

			$this->form_validation->set_rules('admission_no', 'Admission No', 'trim|required');
			$this->form_validation->set_rules('admission_class', 'Admission Class', 'trim|required');
			$this->form_validation->set_rules('admission_date', 'Admission Date', 'trim|required');
			$this->form_validation->set_rules('sport_house', 'Sport House', 'trim');
			$this->form_validation->set_rules('hostel_status', 'Day/Boarding', 'trim|required');
		}
		if($this->form_validation->run() === FALSE){
			return False;

		}else{
			return TRUE;
		}
	}


	public function check_max_student(){
		//Next I need to check If the school trying to add new user still has the ability to do that
		// $this->db->select('*');
		// $this->db->from('acadah_setup');
		// $this->db->where('setup_id', $schoolid);
		$sch_id = $_SESSION['sch_id'];
		$query = $this->db->get_where('acadah_school', array('sch_id=>$sch_id'));
		// $query = $this->db->get();
		$query = $query->row_array();
		$max_student = $query['max_student'];
		//Next I am gonna count the number of users in the db and see the number of students already added
		$this->db->select("*");
		$this->db->from('acadah_users');
		$this->db->where('sch_id',$sch_id);
		$this->db->where('user_type','student');
		$query = $this->db->get();
		$current_student = $query->num_rows();
		if($current_student == $max_student){
			return "You Can No longer add any more student, please subscribe for more slots";
		}else{
			return true;
		}
	}

	/**
	 * Function Written By Tes Sal
	 * This function performs update function. It collects 5 parameters
	 * @param $table
	 * The Table parameter is where you specify the table you wanna update whether parent/student/admission etc
	 * @param $udata
	 * The Udata paremeter is the array of fields that would be inserted into the users table in the database
	 * @param $odata
	 * The Odata parameter is the array of fields that would be inserted into the second table you have specified
	 * @param $id
	 * The $id parameter is the user_id of the student which is set in the users table
	 * @param $user_id
	 * While the user id is the name of the foreign key in the table you specified e.g. in the student table we have student_id
	 * as the foreign key which represents user_id in users table while it is staff_id in the staff table
	 * @return mixed
	 */
	public function edit_user($table,$udata,$odata,$id,$user_id){
		$sch_id = $_SESSION['sch_id'];
		if(!empty($_FILES['passport']['name'])){

			$config['upload_path']          = "./assets/$sch_id/";
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 2048000;
            // $config['max_width']            = 1024;
            // $config['max_height']           = 768;
            $config['file_name']			= $id;
            $config['overwrite']			= TRUE;
            $this->upload->initialize($config);
             if ( ! $this->upload->do_upload('passport'))
                {
                        $error = $this->upload->display_errors();

                        return $error;
                }
                else
                {
                        $data = array($this->upload->data());
                        
                    	$udata['profile_image'] = $data[0]['file_name'];    
                }
		}
		$query = $this->db->update('acadah_users',$udata,array('user_id'=>$id));
		if($query){
			if($table == 'acadah_parent'){
				$this->db->update('acadah_parent_student',array('relationship'=>$this->input->post('prelationship')),array($user_id=>$id));
			}
			
			$roles = $this->input->post('role[]');
			$this->db->delete('users_roles', array('user_id'=>$id));
			foreach($roles as $role){
				$rdata = array(
					'user_id' => $id,
					'role_id' => $role
					);
			$this->db->insert('users_roles',$rdata);
			}
		
			$query = $this->db->update($table,$odata,array($user_id=>$id));
			return $query;
		}
		die();
	}

	/**
	 * Function Written By Tes Sal
	 * This Function will return the details of the id you passed to it, it will join the users table along with the second table you passed
	 * @param $id
	 * This is the id of the user you wanna get his info
	 * @param $table
	 * Table is the second table you are joining with users table e.g. for student this would be acadah_student
	 * @param $foreign_key
	 * Foreign Key is what user_id is called in the table you specified for example in acadah_student table it is called student_id
	 * @return mixed
	 */

	public function get_user($id,$table,$foreign_key,$loop = FALSE){
		$sch_id = $_SESSION['sch_id'];
		$where = array('sch_id'=>$sch_id,'user_id'=>$id);
		$join = array("$table", "$table.$foreign_key=acadah_users.user_id");
		$query = $this->db->join($join[0], $join[1])->get_where('acadah_users', $where);
		if($loop === TRUE){
			return $query->result_array();
		}else {
			return $query->row_array();
		}
//        echo "<pre>";
//		print_r($query);
//        echo "</pre>";
//		die();
	}

		public function get_user_parent_student($student_id, $count = 1) {

     $this->db->select('*');
	 $this->db->from('parent_student as ups' );
	 $this->db->join('parent as p', 'p.parent_id = ups.parent_id');
	 $this->db->join('users as u', 'u.user_id = ups.parent_id');
	 $this->db->where('ups.student_id', $student_id);

     $query = $this->db->get();
	return $row = $query->row_array();

	}

	public function quick_register($no,$otable){
		$sch_id = $_SESSION['sch_id'];
		for ($i=1; $i <=$no ; $i++) { 
			$data = array(
				'lname'=>$this->input->post("sname$i"),
				'fname'=>$this->input->post("fname$i"),
				'mname'=>$this->input->post("mname$i"),
				'email'=>$this->input->post("email$i"),
				'gender'=>$this->input->post("gender$i"),
				'sch_id'=>$sch_id,
				'pass' => md5(strtolower($this->input->post("sname$i"))),
				'user_type' => $this->input->post('usertype')
			);
			$this->db->trans_begin();
			$this->db->insert('acadah_users',$data);
			$tran_id = $this->db->insert_id();
			$user_id = $this->db->insert_id();
		//Let Me quickly Update The user code of the user added now
		$usercode = $sch_id.$user_id;
		$this->db->set('user_id',$usercode);
		$this->db->where('id',$user_id);
		$usercode_update = $this->db->update('acadah_users');
			if($otable == 'staff'){
				
				$odata = array(
					'staff_id' => $usercode,
					'title' => $this->input->post("title$i"),
					'surname'=>$this->input->post("sname$i")
					);

			}elseif($otable == 'student'){
				$odata = array(
					'student_id' => $usercode,
					'admission_date' => $this->input->post("admission_date"),
					'admission_no' => $this->input->post("admission_no$i"),
					'admission_class' => '',
					'admission_class_details_id' => ''
					);
			if(!empty($this->input->post("admission_class$i"))){
			$admission_class = explode('-',$this->input->post("admission_class$i"));
			$odata['admission_class'] = $admission_class[0];
			$odata['admission_class_details_id'] = $admission_class[1];
			}
			

			}
			$oquery = $this->db->insert($otable,$odata);
				if ($this->db->trans_status() === FALSE){
		                    $this->db->trans_rollback();
		                    return FALSE;
		                }else{
		                    $this->db->trans_commit();
		                    return TRUE;
		                }
			print_r($data);die();
		}

	}


	public function import_users(){
		$sch_id = $_SESSION['sch_id'];
		if(!empty($_FILES['file']['name'])){
			$config['upload_path']          = "./assets/$sch_id/";
            $config['allowed_types']        = 'xlsx|xlx|csv';
            $config['max_size']             = 2048000;
            // $config['max_width']            = 1024;
            // $config['max_height']           = 768;
            // $config['file_name']			= ;
            $config['overwrite']			= TRUE;
            $this->upload->initialize($config);
             if ( ! $this->upload->do_upload('file'))
                {
                        $error = $this->upload->display_errors();
                        //var_dump($this->upload->data());
                        //print_r($error);
                        return $error;
                        
                }
                else
                {
                        $data = array($this->upload->data());
                        $file = $data[0]['full_path'];
   				
                        //read file from path
						$objPHPExcel = PHPExcel_IOFactory::load($file);
						//get only the Cell Collection
						$cell_collection = $objPHPExcel->getActiveSheet()->getCellCollection();
						//extract to a PHP readable array format
						foreach ($cell_collection as $cell) {
						    $column = $objPHPExcel->getActiveSheet()->getCell($cell)->getColumn();
						    $row = $objPHPExcel->getActiveSheet()->getCell($cell)->getRow();
						    $data_value = $objPHPExcel->getActiveSheet()->getCell($cell)->getValue();
						    //header will/should be in row 1 only. of course this can be modified to suit your need.
						    if ($row == 1) {
						        $header[$row][$column] = $data_value;
						    } else {
						        $arr_data[$row][$column] = $data_value;
						    }
						}
						//send the data in an array format
						$data['header'] = $header;
						$data['values'] = $arr_data;
						$data['no_rows'] = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow();
						return $data;

                }

                return FALSE;
		}

	}

		//new` //get user very basic info
	public function get_user_info($user_id, $sch_id){
		 $this->db->select('user_id, lname, mname, fname, gender, sch_id');
		 $this->db->from('users' );
		 $this->db->where('users.sch_id', $sch_id);
		 $this->db->where('users.user_id', $user_id);
		 $query = $this->db->get();
		return $query->row_array();
	}

	//new` //get class info 7/4/16
	public function get_user_class($user_id, $sch_id, $sesid, $fields = null){
		if($fields){
		   $this->db->select($fields);
		}
		 $this->db->from('student_session ss');
		 $this->db->join('class_details cd', 'cd.id  = ss.class_details_id');
		 $this->db->join('app_level al', 'al.level_id  = cd.level_id' );
		 $this->db->join('class_level cl', 'cl.level_id  = cd.level_id', 'left');
		 $this->db->where('ss.sch_id', $sch_id);
		 $this->db->where('ss.student_id', $user_id);
		 $query = $this->db->get();
		return $query->row_array();
	}
		
}

?>