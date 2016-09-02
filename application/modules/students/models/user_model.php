<?php

class User_model extends CI_Model{
	
	var $table = "acadah_student";
	
	function __construct(){
		parent::__construct();
	}
	

	function validate($user_id, $password){
		$sql= "SELECT * FROM $this->table WHERE (email = '$user_id' OR user_id = '$user_id') 
				AND pass = '$password'";
		$query = $this->db->query($sql);
		echo $sql;

		if($query->num_rows === 1){
				
			return $query->row();
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
	function get_info($user_id, $user_type = 'student')
	{
		$this->db->from('users');		
		$this->db->join($user_type, 'users.user_id ='.$user_type.'.'.$user_type.'_id', 'left');	
		$this->db->where('users.user_id',$user_id);

		//echo $this->db->get_compiled_select();
		$query = $this->db->get();
		//echo ($this->db->last_query());

		if($query->num_rows()==1)
		{
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
			return $this->get_info($this->session->userdata('user_id'));
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
	function has_module_permission($module_id,$user_id)
	{
		//if no module_id is null, allow access
		if($module_id==null)
		{
			return true;
		}
		
		$query = $this->db->get_where('users_permissions_actions', array('access_user_id' => $user_id,'module_id'=>$module_id), 1);
		return $query->num_rows() == 1;
	}
	
	function has_module_action_permission($module_id, $action_id, $user_id)
	{
		//if no module_id is null, allow access
		if($module_id==null)
		{
			return true;
		}
		
		$query = $this->db->get_where('permissions_actions', array('user_id' => $user_id,'module_id'=>$module_id,'action_id'=>$action_id), 1);
		return $query->num_rows() == 1;
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
	
		
}

?>