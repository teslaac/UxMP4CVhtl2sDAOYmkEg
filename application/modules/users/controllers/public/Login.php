<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MX_Controller {

	
	public function __construct() {
		parent::__construct();

		$this->load->model('user_model');
		//$this->load->module("users");	
	}

	public function index()
	{   
		$data['page'] = 'students';

		if($_POST){
			
			//Data
		    $user_id 	= $this->input->post('user_id', true);
			$password 	= $this->input->post('password', true);
			$userdata 	= $this->user_model->validate($user_id, md5($password));	

			//Validation
			if($userdata){ 
					 $data['user_id'] = $userdata->user_id;
					 $data['lname'] = $userdata->lname;
					 $data['fname'] = $userdata->fname;
					 $data['sch_id'] = $userdata->sch_id;
					 $data['user_type'] = $userdata->user_type;
					 $data['logged_in'] = true;
				     $schooldata = $this->Corem->get_school_details($data['sch_id']);
					 $data['activated_status'] = $schooldata['activated_status'];
					 $data['active_term_session_data'] = $this->Corem->active_term_session('', $data['sch_id']);
					 $data['ts_id'] =  $data['active_term_session_data']['ts_id'];
					 $data['setup_status'] = $schooldata['setup_status'];
					$session = $this->session->userdata = $data;
					//var_dump($userdata);
					if($data['user_type'] == 'superadmin'){
						if($schooldata['setup_status'] != "Completed"){
							redirect("setup");
						}
					}
					redirect("dashboard");
			}else{
				$data['error'] = "Ogbeni You cant login with this details!";
				$this->load->view('login', $data);	
			}

			return;
		}
		$this->load->view('login');	
	}

// #todo check more 
	// function index()
	// {
	// 	$data = array();
	// 	$data['username'] = is_on_demo_host() ? 'admin' : '';
	// 	$data['password'] = is_on_demo_host() ? 'acadah' : '';
		
	// 	//todo understand y ie is checked
	// 	// if ($this->agent->browser() == 'Internet Explorer' && $this->agent->version() < 9)
	// 	// {
	// 	// 	$data['ie_browser_warning'] = TRUE;
	// 	// }
	// 	// else
	// 	// {
	// 	// 	$data['ie_browser_warning'] = FALSE;
	// 	// }

	// 	//configure APPLICATION_VERSION
	// 	// if(APPLICATION_VERSION==$this->config->item('version'))
	// 	// {
	// 	// 	$data['application_mismatch']=false;
	// 	// }
	// 	// else
	// 	// {
	// 	// 	$data['application_mismatch']=lang('login_application_mismatch');
	// 	// }
		
	// 	if($this->users->is_logged_in())
	// 	{
	// 		redirect('home');
	// 	}
	// 	else
	// 	{
	// 		// $this->form_validation->set_rules('username', 'lang:login_username', 'callback_users_school_check|callback_login_check');
 //   			// $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
			
	// 		// if($this->form_validation->run() == FALSE)
	// 		// {
	// 		// 	//Only set the username when we have a non false value (not '' or FALSE)
	// 		// 	if ($this->input->post('username'))
	// 		// 	{					
	// 		// 		$data['username'] = $this->input->post('username');
	// 		// 	}
	// 		// 	include APPPATH.'config/database.php';
				
	// 		// 	//If we have a site configuration check to make sure the user has not cancelled
	// 		// 	if (isset($db['site']))
	// 		// 	{
	// 		// 		$site_db = $this->load->database('site', TRUE);
					
	// 		// 		if ($this->_is_subscription_cancelled($site_db))
	// 		// 		{
	// 		// 			if ($this->_is_subscription_cancelled_within_7_days($site_db))
	// 		// 			{
	// 		// 				$data['subscription_cancelled_within_14_days']  = TRUE;
	// 		// 				$this->load->view('login/login',$data);
	// 		// 			}
	// 		// 			else
	// 		// 			{
	// 		// 				$this->load->view('login/subscription_cancelled');
	// 		// 			}
	// 		// 		}
	// 		// 		else
	// 		// 		{
	// 		// 			$this->load->view('login/login', $data);
	// 		// 		}
	// 		// 	}
	// 		// 	else
	// 		// 	{
	// 		// 		$this->load->view('login/login',$data);
	// 		// 	}
	// 		// }
	// 		// else
	// 		// {
	// 		// 	redirect('home');
	// 		// }
	// 	}
	// }
//	
	//todo
	function _is_subscription_cancelled($site_db)
	{
		$acadah_client_name = substr($_SERVER['HTTP_HOST'], 0, strpos($_SERVER['HTTP_HOST'], '.'));
		$site_db->select('subscr_status');	
		$site_db->from('subscriptions');	
		$site_db->where('username',$acadah_client_name);
		$site_db->where('subscr_status','cancelled');
		$query = $site_db->get();
		return ($query->num_rows() >= 1);
	}
	
	//todo
	function _is_subscription_cancelled_within_7_days($site_db)
	{
		$acadah_client_name = substr($_SERVER['HTTP_HOST'], 0, strpos($_SERVER['HTTP_HOST'], '.'));
		$thirty_days_ago = date('Y-m-d H:i:s', strtotime("now -7 days"));
		$site_db->select('subscr_status');	
		$site_db->from('subscriptions');	
		$site_db->where('username',$acadah_client_name);
		$site_db->where('subscr_status','cancelled');
		$site_db->where('cancel_date >', $thirty_days_ago);
		$query = $site_db->get();
		return ($query->num_rows() >= 1);
	}
	
	//todo
	function login_check($username)
	{
		$password = $this->input->post("password");	
		
		if(!$this->users->login($username,$password))
		{
			$this->form_validation->set_message('login_check', lang('login_invalid_username_and_password'));
			return false;
		}
		return true;		
	}
	
	//todo
	function users_school_check($username)
	{		
		$users_id = $this->users->get_users_id($username);
		
		if ($users_id)
		{
			$users_school_count = count($this->users->get_authenticated_school_ids($users_id));

			if ($users_school_count < 1)
			{
				$this->form_validation->set_message('users_school_check', lang('login_users_is_not_assigned_to_any_schools'));
				return false;
			}
		}
		
		//Didn't find a users, we can pass validation
		return true;
	}
	
	//todo //switch to other school but require user_login
	function switch_user()
	{
		if($this->input->post('password'))
		{
			if(!$this->users->login($this->input->post('username'),$this->input->post('password')))
			{
				echo json_encode(array('success'=>false,'message'=>lang('login_invalid_username_and_password')));
			}
			else
			{
				//Unset school in case the user doesn't have access to currently set school
				$this->session->unset_userdata('users_current_school_id');
				echo json_encode(array('success'=>true));
			}
		}
		else
		{
			foreach($this->users->get_all()->result_array() as $row)
			{
				$userss[$row['username']] = $row['first_name'] .' '. $row['last_name'];
			}
			$data['userss']=$userss;

			$this->load->view('login/switch_user',$data);
			
		}
	}
	
	//todo
	function reset_password()
	{
		$this->load->view('login/reset_password');
	}

	//todo
	function do_reset_password_notify()
	{	
		if($this->input->post('username_or_email'))
		{
			$users = $this->users->get_users_by_username_or_email($this->input->post('username_or_email'));
			if ($users)
			{
				$data = array();
				$data['users'] = $users;
			    $data['reset_key'] = base64url_encode($this->encrypt->encode($users->person_id.'|'.(time() + (2 * 24 * 60 * 60))));
			
				$this->load->library('email');
				$config['mailtype'] = 'html';
				$this->email->initialize($config);
				$this->email->from('no-reply@sale.com', $this->config->item('company'));
				$this->email->to($users->email); 

				$this->email->subject(lang('login_reset_password'));
				$this->email->message($this->load->view("login/reset_password_email",$data, true));	
				$this->email->send();
			
				$data['success']=lang('login_password_reset_has_been_sent');
				$this->load->view('login/reset_password',$data);
			}
			else 
			{
				$data['error']=lang('login_username_or_email_does_not_exist');
				$this->load->view('login/reset_password',$data);
			}
		}
		else
		{
			$data['error']= lang('common_field_cannot_be_empty');
			$this->load->view('login/reset_password',$data);
		}
	}
	
	//todo
	function reset_password_enter_password($key=false)
	{
		if ($key)
		{
			$data = array();
		    list($users_id, $expire) = explode('|', $this->encrypt->decode(base64url_decode($key)));			
			if ($users_id && $expire && $expire > time())
			{
				$users = $this->users->get_info($users_id);
				$data['username'] = $users->username;
				$data['key'] = $key;
				$this->load->view('login/reset_password_enter_password', $data);			
			}
		}
	}
	
	//todo
	function do_reset_password($key=false)
	{
		if ($key)
		{
	    	list($users_id, $expire) = explode('|', $this->encrypt->decode(base64url_decode($key)));
			
			if ($users_id && $expire && $expire > time())
			{
				$password = $this->input->post('password');
				$confirm_password = $this->input->post('confirm_password');
				
				if (($password == $confirm_password) && strlen($password) >=8)
				{
					if ($this->users->update_users_password($users_id, md5($password)))
					{
						$this->load->view('login/do_reset_password');	
					}
				}
				else
				{
					$data = array();
					$users = $this->users->get_info($users_id);
					$data['username'] = $users->username;
					$data['key'] = $key;
					$data['error_message'] = lang('login_passwords_must_match_and_be_at_least_8_characters');
					$this->load->view('login/reset_password_enter_password', $data);
				}
			}
		}
	}
}
?>