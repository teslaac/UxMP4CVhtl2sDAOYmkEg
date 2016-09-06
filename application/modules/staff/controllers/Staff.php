<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require (APPPATH."modules/core/controllers/secure_area.php");



class Staff extends Secure_area {	

	function __construct(){

		$this->data['title'] = $this->data['module'] = 'staff'; //module name
		$this->data['states'] = $this->Corem->get_states();
		$this->data['classes'] = $this->Corem->get_no_class(FALSE);
		$this->data['sport_house'] = $this->Corem->get_sport_house();
		parent::__construct($this->data['module']);
		$this->load->model('Staffm');

	}

	public function index()
	{

			$this->check_action_permission('staff_view');
			$this->data['no_male'] = $this->Corem->get_no_gender('male','staff');
			$this->data['no_female'] = $this->Corem->get_no_gender('female','staff');
			$this->data['staff'] = $this->User_model->get_all_users('staff','acadah_staff','staff_id');
			$this->data['page'] = 'staff';
			$this->load->template('staff/staff',$this->data);

	}

	public function api($userid = ''){
		//I need to have the query for the users from the db
			$this->data['staff'] = $this->User_model->get_all_users('staff','acadah_staff','staff_id');
			print_r(json_encode($this->data['staff']));
			 die();
	}

	public function staff_assigned(){
		$this->check_action_permission('staff_assigned');
		$this->data['no_male'] = $this->Corem->get_no_gender('male','student');
		$this->data['no_female'] = $this->Corem->get_no_gender('female','student');
		$this->data['page'] = 'staff Assigned';
		$this->load->template('staff/staff_assigned',$this->data);

	}

	public function view()
	{   
		$this->data['page'] = 'staff';
		$this->data['staff'] = $this->User_model->get_all_users('staff','acadah_staff','staff_id');
		$this->load->template('staff/staff',$this->data);
		
	}

	public function add()
	{   
		$this->data['page'] = 'Add Staff';
		$this->data['aroles'] = $this->Corem->get_roles(TRUE);
		$this->load->template('staff/add_staff',$this->data);
	}

	public function edit($id)
	{
		if(empty($id)){redirect("staff");}
		$this->check_action_permission('staff_edit');
		$this->data['aroles'] = $this->Corem->get_roles(TRUE,$id);
		$this->data['staff_details'] = $this->User_model->get_user($id,'acadah_staff','staff_id');
		$this->data['subjects'] = $this->Corem->get_no_subjects(FALSE);
		$this->data['class'] = $this->Corem->get_no_class(FALSE);
		// $this->data['sessions'] = $this->Corem->get_session(FALSE);
		// $this->data['subjects_details'] = $this->Corem->subjects_details($id,'','staff');
		$this->data['page'] = 'Edit Staff';
		$this->load->template('staff/edit_staff',$this->data);
	}	

	public function print_profile($staff_id = ''){
		if(empty($staff_id) or $_SESSION['user_type'] == 'staff'){
      $staff_id = $_SESSION['user_id'];
    }
    	$this->data['staff_info'] = $this->Staffm->get_staff($staff_id);
		$this->load->view('core/template/print_header', $this->data);
		$this->load->view('staff/print_profile');
	}

	public function quick_reg($no = 1)
	{   
		if(!empty($this->input->post('no'))){
			$no = $this->input->post('no');
		}elseif(!empty($_FILES['file']['name'])){
			$upload = $this->User_model->import_users();
			if(is_array($upload)){
			$this->session->set_flashdata('success', "<center>File Loaded Successfully<center>");
			$this->data['loaded'] = $upload;
			$no = $this->data['loaded']['no_rows'] - 1;
			}else{
			$this->session->set_flashdata('failed', "<center>$upload<center>");
			}
		}
		$this->data['page'] = 'staff';
		$this->data['no'] = $no;
		$this->load->template('staff/staff_quick_reg',$this->data);

	}

	// public function staff($action = 'view')
	// {
	// 	$this->data['page'] = 'staff';
	// 	$this->data['staff'] = $this->User_model->get_all_users('staff','acadah_staff','staff_id');
	// 	if ($action === 'add'){
	// 		$this->load->view('core/template/header', $this->data);
	// 		$this->load->view('staff/add_staff');
	// 		$this->load->view('core/template/footer');

	// 	}elseif ($action === 'quick_reg') {
	// 		$this->load->view('core/template/header', $this->data);
	// 		$this->load->view('staff/staff_quick_reg');
	// 		$this->load->view('core/template/footer');
	// 	}else{
	// 		$this->load->view('core/template/header', $this->data);
	// 		$this->load->view('staff/staff');
	// 		$this->load->view('core/template/footer');
	// 	}
		
	// }

	/**
	 * @author Salako Teslim Akolade<tescointsite@gmail.com>
	 * This function will add both student and staff users
	 *
	 * This Function Now Only adds Staff and edits staff
	 */
	public function add_staff($mode = "add",$id = NULL)
	{
		$table = "acadah_staff";
		$odata = array(
			'file_no' => $this->input->post('file_no'),
			'year_of_employment' => $this->input->post('year_of_employment'),
			'sport_house' => $this->input->post('sport_house'),
			'staff_position' => $this->input->post('staff_position'),
			'staff_type' => $this->input->post('staff_type'),
			'staff_function' => $this->input->post('staff_function'),
			'qualification' => $this->input->post('qualification'),
			'course_studied' => $this->input->post('course_studied'),
			'institution' => $this->input->post('institution'),
			'years_of_exp' => $this->input->post('years_of_exp'),
			'staff_level' => $this->input->post('staff_level'),
			'religion' => $this->input->post('religion'),
			'title' => $this->input->post('title'),
			'initial' => $this->input->post('initial'),
			'marital_status' => $this->input->post('marital_status'),
			'weight' => $this->input->post('weight'),
			'height' => $this->input->post('height'),
			'disability' => $this->input->post('disability'),
			'genotype' => $this->input->post('genotype'),
			'bloodgroup' => $this->input->post('bloodgroup'),
			'marital_status' => $this->input->post('marital_status'),
			'surname' => $this->input->post('sname')

		);
		//This will be the table name to be passed in the function inside model
		//Now Checking If any of the conditions above was not met
		if($this->User_model->general_validation('staff') === FALSE){
			if($mode === 'edit'){
				$this->edit($id);
			}else{
				$this->add();
			}

		}else {
			//Next am gonna put the data to be inserted into the db in an array
			if($this->input->post('staff_role') == 'admin'){
				$user_type = 'admin';
			}else{
				$user_type = 'staff';
			}
			$udata = array(
				'fname' => $this->input->post('fname'),
				'lname' => $this->input->post('sname'),
				'mname' => $this->input->post('mname'),
				'phone' => $this->input->post('phone'),
				'email' => $this->input->post('email'),
				'gender' => $this->input->post('gender'),
				'address' => $this->input->post('address'),
				'dob' => $this->input->post('dob'),
				'nationality' => $this->input->post('nationality'),
				'state_of_origin' => $this->input->post('state'),
				'lg' => $this->input->post('lga'),
				'hometown' => $this->input->post('hometown'),
				'user_type' => $user_type,
				'sch_id' => $_SESSION['sch_id'],
				'pass' => md5(strtolower($this->input->post('sname')))
			);
			// die(print_r($udata));
			//Next Is to call the function inside the model that will do the insertion
			//Am Storing that in a variable just to check for some stuffs :)
			if ($mode === 'edit') {
				$edit = $this->User_model->edit_user($table, $udata, $odata,$id,'staff_id');
				if ($edit !== TRUE) {
					$this->session->set_flashdata('failed', $edit);
				} elseif ($edit === TRUE) {
					//What Should Happen If the Condition was met
					$this->session->set_flashdata('success', 'User Editted Successfully');
					redirect("staff/edit/$id");
				}
				$this->edit($id);
			} else {
				$add = $this->User_model->add_user($udata,$odata,'','staff_id','acadah_staff');
//				$add = $this->staffm->add_user($table, $udata, $odata);
				if ($add !== TRUE) {
					$this->session->set_flashdata('failed', $add);
				} elseif ($add === TRUE) {
					//What Should Happen If the Condition was met
					$this->session->set_flashdata('success', 'User Added Successfully');
					redirect('staff/add');
				}
				$this->add();

			}
		}

	}


	public function add_subject($id){
		$class_id = explode('-',$this->input->post('class_id'));
		$sdata = array(
				'subject_id' => $this->input->post('subject_id'),
				'class_id' => $class_id[0],
				'class_details_id' => $class_id[1],
				'session_id' => $this->input->post('session_id'),
				'sch_id' => $_SESSION['sch_id'],
				'staff_id' => $id
		);
		$add = $this->Corem->add_subject($sdata,'staff');
		if ($add !== TRUE) {
			$this->session->set_flashdata('failed', $add);
		} elseif ($add === TRUE) {
			//What Should Happen If the Condition was met
			$this->session->set_flashdata('success', 'Subject Added Successfully');
			redirect("staff/edit/$id");
		}
		$this->edit($id);
	}

	public function quick_register($no){
		for ($i=1; $i <= $no ; $i++) { 
			$this->form_validation->set_rules("title$i", 'Title', 'trim|required');
			$this->form_validation->set_rules("sname$i", 'Surname', 'trim|required');
			$this->form_validation->set_rules("fname$i", 'First Name', 'trim|required');
			$this->form_validation->set_rules("email$i", 'Email', 'trim|required|valid_email');
			$this->form_validation->set_rules("gender$i", 'Gender', 'trim|required');
			if($this->form_validation->run() === FALSE){
			$this->session->set_flashdata('failed', "<center>An Error Occured<center>");
			$this->quick_reg($no);
			break;

		}else{
			$qr = $this->User_model->quick_register($no,'staff');
		}
		}
		if($this->form_validation->run() === TRUE){
			
		if ($qr !== TRUE) {
					$this->session->set_flashdata('failed', "<center>Unable To add staff<center>");
				} elseif ($qr === TRUE) {
					//What Should Happen If the Condition was met
					$this->session->set_flashdata('success', "<center>$no Staffs Added Successfully</center>");
					redirect('staff/quick_reg');
				}
				$this->quick_reg($no);
		}
		
	}



}
