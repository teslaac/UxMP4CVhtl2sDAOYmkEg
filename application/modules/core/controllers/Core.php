<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once ("secure_area.php");

class Core extends Secure_area {
	
	public function __construct()
	{
		 parent::__construct();
		$this->data['module'] = 'core';
		parent::__construct($this->data['module']);
		$this->load->model('Students/Student');
		$this->data['title'] = 'Core';

	}

	public function index()
	{
		
		$this->data['title'] = $this->data['page'] = 'dashboard';
		$this->data['no_students'] = $this->Corem->get_no_usertype('student');
		$this->data['no_staffs'] = $this->Corem->get_no_usertype('staff');
		$this->data['no_parents'] = $this->Corem->get_no_usertype('parent');
		$this->data['no_subjects'] = $this->Corem->get_no_subjects();

		$this->load->template('core/dashboard', $this->data);

	}

	public function status($table,$id,$status,$field='status',$key='id'){
		$status = $this->Corem->status($table,$id,$status,$field,$key);
		if($status === TRUE){
			$this->session->set_flashdata('success', "<center><b>Saved Successfully</b></center>");
		}else{
			$this->session->set_flashdata('failed', "<center> Unable to save please try again later </center>");
		}
		//die($url);
		redirect($this->agent->referrer());
			//redirect($url);
	}

	public function save_settings($module_id,$type = 'other'){
		$save = $this->Corem->save_settings($module_id,$type);
		if($save === TRUE){
			$this->session->set_flashdata('success', "<center><b>Settings Saved Successfully</b></center>");
		}else{
			$this->session->set_flashdata('failed', "<center> Unable to save settings please try again later </center>");
		}
		redirect($this->agent->referrer());
	}

	public function permissions($usertype='admin')
	{	
		$this->check_action_permission('permissions_settings');
		$this->data['roles'] = $this->Corem->get_roles();
		$this->data['aroles'] = $this->Corem->get_roles(TRUE);
		$this->data['users'] = $this->Corem->get_details('users', 'sch_id', $_SESSION['sch_id'] );
		$this->data['page'] = 'Permissions';
		$this->data['usertype'] = $usertype;
		$this->data['modules'] = $this->Module->get_modules_ap($usertype);
		$this->load->template('core/permission_settings', $this->data);
	}

	public function permissions_manage($mode = '',$user_id=''){
		$this->check_action_permission('permissions_manage');
		if(!empty($this->input->post('mode') or !empty($mode))){
			if(empty($mode)){
				$mode = $this->input->post('mode');
				if($mode == 'group'){
					$user_id = $this->input->post('user_id1');
				}elseif($mode == 'role'){
					$user_id = $this->input->post('user_id2');
				}elseif($mode == 'user'){
					$user_id = $this->input->post('user_id3');
				}
				
			}
				$this->data['mode'] = $mode;
				$this->data['user_id'] = $user_id;
				$this->data['modules'] = $this->Module->get_modules_eap($user_id,$mode);
			
		}else{
			$this->data['mode'] = '';
			$this->data['user_id'] = '';
		}

		$this->data['aroles'] = $this->Corem->get_roles(TRUE);
		$this->data['users'] = $this->Corem->get_details('users', 'sch_id', $_SESSION['sch_id'] );
		$this->data['page'] = 'Manage Permissions';
		$this->load->template('core/permission_manage', $this->data);
	}

	public function subject($section = 'subject',$student_id = ''){
		if($section == 'api'){
			if(!empty($this->input->post('cdid'))){
			$students = $this->Student->get_student('0',$this->input->post('cdid'));
			echo "<option value='all'>All</option>";
			foreach($students as $student){
            echo "<option value='$student[student_id]'>". $student['student_id'].'-'. $student['lname'].' '.$student['fname'] . "</option>";
       	 }
			}elseif(!empty($this->input->post('student'))){
			    $student_id = $this->input->post('student');
			    if(empty($i)){
						$i = 1;
					}
				if($student_id == 'all'){
					$students = $this->Student->get_student('0',$this->input->post('cdid1'));
					
					foreach($students as $student){
            echo "<tr>
                           <td>$i</td>
                           <td>$student[lname]</td>
                           <td>$student[fname]</td>
                           <td><input name='student_id[]' class ='students' type='checkbox' value='$student[student_id]'></td>
                         </tr>";
                         $i++;
       	 }
				}else{
					$student = $this->Student->get_student($student_id);
					echo "<tr>
                           <td>$i</td>
                           <td>$student[lname]</td>
                           <td>$student[fname]</td>
                           <td><input name='student_id[]' class ='students' type='checkbox' value='$student[student_id]'></td>
                         </tr>";
				}
				

			}
			die();
		}
		$this->data['page'] = 'Assign Subject';
		$this->data['student_id'] = $student_id;
		$this->data['cd'] = $this->Corem->classd_details();
		$this->data['app_levels_school'] = $this->Corem->get_app_any('','level');
		$this->data['subject_details'] = $this->Corem->subject_details();
		$this->data['staffs'] = $this->Corem->get_any("acadah_users.user_type","staff","acadah_staff","staff_id","acadah_users","user_id");
		$this->data['classes'] = $this->Corem->get_no_class(FALSE);
		$this->data['ts_details'] = $this->Corem->term_session("$_SESSION[sch_id]");
		$this->data['session_details'] = $this->Corem->get_session(FALSE);
		$this->load->template("core/$section", $this->data);
		


	}

	public function save_role($status = 'active',$role_id = NULL){

		$data = array(
			'role_name' => $this->input->post('role_name'),
			'status'    => $status,
			'sch_id'    => $_SESSION['sch_id']

			);
		if($role_id != NULL or !empty($this->input->post('role_id'))){
			if(!empty($this->input->post('role_id'))){
				$role_id = $this->input->post('role_id');
			}else{
				unset($data['role_name']);
			}			
			$data['id'] = $role_id;
		}
		$save_role = $this->Corem->save_role($data);
		if($save_role === TRUE){
			$this->session->set_flashdata('success', "<center> Congratulations! Role Editted Successfully</center>");
		}else{
			$this->session->set_flashdata('failed', "<center>Unable to create role, Try again later");
		}
					redirect('core/permissions/');
	}

	public function manage_custom_permission($usertype,$edit = FALSE){
		//So This Is gonna manage creating and updating custom permissions I hope
		if($edit != FALSE){
			$access_user_id = $this->input->post('user_id');
			$access_user_type = $usertype;
		}else{
		if($this->input->post('mode') == 'role'){
			$access_user_id = $this->input->post('role_id');
			$access_user_type = 'role';
			$this->form_validation->set_rules('role_id', 'Role', 'trim|required');
		}else{
			$access_user_id = $this->input->post('user_id');
			$access_user_type = 'user';
			$this->form_validation->set_rules('user_id', 'User', 'trim|required');
		}
		$this->form_validation->set_rules('perm[]', 'Permissions', 'trim|required');
		if($this->form_validation->run() === FALSE){
			if($edit === FALSE) {
				$this->permissions($usertype);
			}else{
				$this->permissions_manage($access_user_type,$access_user_id);
			}
		}
	}

		
			
			$perms = $this->input->post('perm[]');
			$do = $this->db->delete('users_permissions_actions', array('sch_id'=>$_SESSION['sch_id'],'access_user_id'=>$access_user_id,'access_user_type'=>$access_user_type));
			foreach($perms as $perm){
				$perm_array = explode(":", $perm);
				$dashboard = $perm_array[1];
				$action_id = $perm_array[0];
				$data = array(
					'dashboard' => $dashboard,
					'action_id' => $action_id,
					'access_user_id' => $access_user_id,
					'access_user_type' => $access_user_type,
					'sch_id' => $_SESSION['sch_id']
					);
				$do = $this->Corem->mcp($data);
				// print_r($data);
			}
			if($do == TRUE){
			if($edit !== FALSE){
			$message = "<center> Congratulations! you have successfully updated custom permissions for $access_user_id</center>";
			}else{
			$message = "<center> Congratulations! you have successfully created custom permissions for $access_user_id <a href='base_url();'permissions_manage/$access_user_type/$access_user_id'>View</a> </center>";
			}
			$this->session->set_flashdata('success', $message);			
			}else{
			$this->session->set_flashdata('failed', "<center>Unable to save custom permissions please try again later<center>");
			}
			if($edit !== FALSE){
				redirect("core/permissions_manage/$access_user_type/$access_user_id");
			}else{
				redirect("core/permissions/$usertype");
			}
		
	}

	public function assign_courses(){

		if(!empty($this->input->post('staff_id'))){
		$this->form_validation->set_rules('staff_id', 'Staff', 'trim|required');
		$this->form_validation->set_rules('subject_id', 'Subject', 'trim|required');
		$this->form_validation->set_rules('ts_id', 'Term Session', 'trim|required');
		$this->form_validation->set_rules('classd[]', 'Class', 'trim|required');
		if($this->form_validation->run() === FALSE){
			$this->session->set_flashdata('failed', "An Error has occured");
			redirect($this->agent->referrer());				
		}else{
			$insert = $this->Corem->assign_courses('staff_subjects');
			if($insert == TRUE){
				$this->session->set_flashdata('success', "Subjects Assigned Successfully");
				redirect($this->agent->referrer());
			}else{
				$this->session->set_flashdata('failed', "An Error has occured");
				redirect($this->agent->referrer());
			}
		}

		}else{


		
		$this->form_validation->set_rules('student_id[]', 'Student', 'trim|required');
		$this->form_validation->set_rules('session_id', 'Session', 'trim|required');
		$this->form_validation->set_rules('subject_id[]', 'Subject', 'trim|required');
		if($this->form_validation->run() === FALSE){
			$this->session->set_flashdata('failed', "An Error has occured");
			redirect($this->agent->referrer());				
		}else{
			$insert = $this->Corem->assign_courses('student_subjects');
			if($insert == TRUE){
				$this->session->set_flashdata('success', "Subjects Assigned Successfully");
				redirect($this->agent->referrer());
			}else{
				$this->session->set_flashdata('failed', "An Error has occured");
				redirect($this->agent->referrer());
			}
		}
		}
	}
	

	public function get_registered_subject($type = 'class'){
				$i = 1;
		if($type == 'class'){
			$students = $this->Corem->get_registered_subject('class');
		foreach($students as $student){
            echo "<tr>
                           <td>$i</td>
                           <td>$student[fname]</td>
                           <td>$student[lname]</td>
                           <td><input name='id[]' class ='students' type='checkbox' value='$student[id]'></td>
                         </tr>";
                         $i++;
       	 }
		}elseif($type == 'student'){
			$subjects = $this->Corem->get_registered_subject('student');
			foreach($subjects as $subject){
				echo "<tr>
							<td>$i</td>
							<td>$subject[subject_full_name]</td>
							<td><input name='id[]' class ='subjects' type='checkbox' value='$subject[id]'></td>
				";
				$i++;
			}
		}else{
			$subjects = $this->Corem->get_staff_registered_subject();
			foreach($subjects as $subject){
				echo " <tr>
                    <td>$i</td>
                    <td>$subject[subject_full_name]</td>
                    <td>$subject[class_details]</td>
                    <td><input name='id[]' class ='subjects' type='checkbox' value='$subject[id]'></td>       
                  </tr>";
                  $i++;
			}
		}
		
		//print_r($query);

	}

	public function get_unregistered_student(){
		$class_id = $this->input->post('cdid');
        $subject_id = $this->input->post('subject_id');
        $session_id = $this->input->post('session_id');
		$students = $this->Corem->get_unregistered_student($class_id,$subject_id,$session_id);
			foreach($students as $student){
            echo "<option value='$student[student_id]'>". $student['student_id'].'-'. $student['lname'].' '.$student['fname'] . "</option>";
       	 }

	}

	public function unregister_subject($type = 'student'){
		if($type == 'staff'){
			$table = "acadah_staff_subjects";
		}else{
			$table = "acadah_student_subjects";
		}
		$this->form_validation->set_rules('id[]', 'Subject', 'trim|required');
		if($this->form_validation->run() === FALSE){
			$this->session->set_flashdata('failed', "An Error has occured");
			redirect($this->agent->referrer());				
		}else{
			$ids = $this->input->post('id[]');
			foreach($ids as $id){
				$data = array(
				'id' => $id
					);
			$delete = $this->db->delete($table,$data);
			}
				if($delete === TRUE){
				$this->session->set_flashdata('success', "Subject Un-assigned Successfully");
			}else{
				$this->session->set_flashdata('failed', "An Error has occured");
				
			}
			redirect($this->agent->referrer());	

		}
		
			
			
			
		
	}

	//move to core new awonugaso
   	function url_filter($controller, $method, $value1, $value2 =null, $value3 =null, $value4 =null)
	{
		$url = $controller.'/'.$method.'/'.
		$url = $value1? $value1.'/' : '';
		$url .= $value2? $value2.'/' : '';
		$url .= $value3? $value3.'/' : '';
		$url .= $value4? $value4.'/' : '';

		redirect($url);
	}
}
