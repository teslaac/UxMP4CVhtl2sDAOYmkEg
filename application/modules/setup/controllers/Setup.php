<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setup extends CI_Controller {

	function __construct(){

		parent::__construct();
		$this->data['title'] = 'School Setup';
		$this->data['states'] = $this->Corem->get_states();
		$this->data['app_divs'] = $this->Corem->get_app_any('','div',TRUE);
		$this->data['app_subjects'] = $this->Corem->get_app_any('','subject',TRUE);
		$this->data['app_sessions'] = $this->Corem->get_app_any('','session',TRUE);
		$this->data['app_levels'] = $this->Corem->get_app_any('','level',TRUE);
		$this->data['app_subjects_dept'] = $this->Corem->get_app_any('','subject_dept',TRUE);
		$this->data['app_terms'] = $this->Corem->get_app_any('','term',TRUE);
		$this->data['userdata'] = $this->session->userdata;

		
	}

	public function index()
	{
		if(!isset($_SESSION['activated_status'])){redirect("setup/register_school");}

		
		$this->data['app_divs_school'] = $this->Corem->get_app_any('','div');
		$this->data['app_levels_school'] = $this->Corem->get_app_any('','level');
		$this->data['app_terms_school'] = $this->Corem->get_app_any('','term');
		$this->data['session_details'] = $this->Corem->get_session(FALSE);
		$this->data['ts_details'] = $this->Corem->term_session("$_SESSION[sch_id]");
		$this->data['cl_details'] = $this->Corem->get_any("acadah_school_div.sch_id","$_SESSION[sch_id]","acadah_school_div","school_div_id","acadah_class_level","school_div_id");
		$this->data['term_details'] = $this->Corem->get_any("","","","","acadah_school_term","");
		$this->data['div_details'] = $this->Corem->get_any("","","","","acadah_school_div","");		
		$this->data['cd_details'] = $this->Corem->get_any("acadah_school_div.sch_id","$_SESSION[sch_id]","acadah_school_div","school_div_id","acadah_class_desc","sch_div_id");
		$this->data['cd'] = $this->Corem->get_any("","","","","acadah_class_desc","");
		$this->data['classd_details'] = $this->Corem->classd_details();
		$this->data['sd_details'] = $this->Corem->sd_details();
		$this->data['subject_details'] = $this->Corem->subject_details();
		$this->data['sdetails'] = $this->Corem->get_school_details();
		$this->data['staffs'] = $this->Corem->get_any("acadah_users.user_type","staff","acadah_staff","staff_id","acadah_users","user_id");
		$this->data['students'] = $this->Corem->get_any("acadah_users.user_type","student","acadah_student","student_id","acadah_users","user_id");
		if($_SESSION['activated_status']== 0){
			redirect("setup/activate_school");
		}
		//die(print_r($this->data['sdetails']));
		$this->load->template2('setup/setup_school',$this->data);
	}

	public function step($section = 'school')
	{
		$this->load->template2b('setup/setup_'.$section);
	}

	public function register_school()
	{
			// die(print_r($_SESSION));
		if(isset($_SESSION['activated_status'])){
		if($_SESSION['activated_status']== 0){
			redirect("setup/activate_school");
		}elseif($_SESSION['activated_status'] == 1){
			redirect("setup");
		}
		}
		$this->load->template2b('setup/register_school',$this->data);
	}

	public function activate_school()
	{
		if(!isset($_SESSION['activated_status'])){redirect("setup/register_school");}
		if($_SESSION['activated_status']== 1){
			redirect("setup");
		}
		$this->load->template2('setup/activate_school',$this->data);
	}

	public function save_school($edit = FALSE){
		if($edit === FALSE){
			$this->form_validation->set_rules('sch_short_name', 'School Short Name', "trim|required|is_unique[acadah_school.sch_short_name]");
			$this->form_validation->set_rules('aemail', 'Admin Email', 'trim|required|valid_email|is_unique[acadah_users.email]');
			$this->form_validation->set_rules('password', 'Admin Password', 'trim|required');
		}elseif($edit !== FALSE){
			$this->form_validation->set_rules('sch_web', 'School Website', 'trim');
			$this->form_validation->set_rules('gad', 'Government A Website', 'trim');
			$this->form_validation->set_rules('exam_taken', 'Exam', 'trim');
			$this->form_validation->set_rules('name', 'Proprietors Name', 'trim');
			$this->form_validation->set_rules('phone', 'Proprietors Phone', 'trim');
			$this->form_validation->set_rules('about_sch', 'About School', 'trim');
			$this->form_validation->set_rules('pop_range', 'Population Range', 'trim|required');
			$this->form_validation->set_rules('sch_religion', 'School Religion', 'trim|required');
			$this->form_validation->set_rules('sch_hostel', 'School Hostel', 'trim|required');
			$this->form_validation->set_rules('sch_facilities', 'School Facilities', 'trim|required');
		}
		$this->form_validation->set_rules('sch_full_name', 'School Full Name', "trim|required");
		$this->form_validation->set_rules('sch_motto', 'School Motto', 'trim|required');
		$this->form_validation->set_rules('sch_phone1', 'School Phone', 'trim|required');
		$this->form_validation->set_rules('sch_email_add', 'School Email Address', 'trim|required|valid_email');
		$this->form_validation->set_rules('sch_addr', 'School Address', 'trim|required');
		$this->form_validation->set_rules('sstate', 'School State', 'trim|required');
		$this->form_validation->set_rules('lga', 'School LGA', 'trim|required');
		$this->form_validation->set_rules('country', 'School Country', 'trim|required');
		$this->form_validation->set_rules('year_est', 'Year Established', 'trim|required');

		if($this->form_validation->run() === FALSE){
			if($edit === FALSE) {
				$this->register_school();
			}else{
				$this->index();
			}
		}else{
			$odata = array(
				'sch_full_name' => $this->input->post('sch_full_name'),
				'sch_motto' => $this->input->post('sch_motto'),
				'year_est' => $this->input->post('year_est'),
				'sch_email_add' => $this->input->post('sch_email_add'),
				'sch_phone1' => $this->input->post('sch_phone1'),
				'sch_addr' => $this->input->post('sch_addr'),
				'lga' => $this->input->post('lga'),
				'sstate' => $this->input->post('sstate'),
				'country' => $this->input->post('country'),
			);
			if($edit !== FALSE){
				$odata['sch_web'] = $this->input->post('sch_web');
				$odata['gad'] = $this->input->post('gad');
				$odata['exam_taken'] = $this->input->post('exam_taken');
				$odata['about_sch'] = $this->input->post('about_sch');
				$odata['pop_range'] = $this->input->post('pop_range');
				$odata['sch_religion'] = $this->input->post('sch_religion');
				$odata['sch_hostel'] = $this->input->post('sch_hostel');
				$odata['sch_facilities'] = $this->input->post('sch_facilities');

				$udata['lname'] = $this->input->post('name');
				$udata['phone'] = $this->input->post('phone');
				$save = $this->Corem->save_school($udata,$odata,TRUE);
			}elseif($edit === FALSE){
				$odata['sch_short_name'] = $this->input->post('sch_short_name');
				$odata['sch_id'] = strtolower($this->input->post('sch_short_name'));
				$udata = array(
					'email' => $this->input->post('aemail'),
					'pass' => md5($this->input->post('password')),
					'user_type' => 'superadmin'
				);
				$udata['sch_id'] = strtolower($this->input->post('sch_short_name'));
				$save = $this->Corem->save_school($udata,$odata);
			}
			if ($save !== TRUE) {
				$this->session->set_flashdata('failed', $save);
			} elseif ($save === TRUE) {
				//What Should Happen If the Condition was met
				$this->session->set_flashdata('success', "School Registered Successfully, Kindly Check Your Email($_SESSION[email]) for the activation code($_SESSION[activation_code])");
				if($edit === FALSE){
				redirect('setup/register_school');}
				$this->session->set_flashdata('success', "School Details Update Successfully!");
				redirect('setup');
			}
			if($edit === FALSE) {
				$this->register_school();
			}else{
				$this->index();
			}
		}
	}


	public function validate_license(){
		$this->form_validation->set_rules('activation_code', 'Activation Code', 'trim|required');
		if($this->form_validation->run() === FALSE){
			$this->activate_school();
		}else{
			$activation_code = md5($this->input->post('activation_code'));
			$validate = $this->Corem->validate_license($activation_code);
			if($validate == 0){
				$this->session->set_flashdata('failed', "Alaye Check your email and copy and paste instead of typing rubbish");
			}elseif($validate == 1){
				$this->session->set_flashdata('success', "Congratulations! you have successfully activated your account. You will be redirected shortly");
				redirect('setup/activate_school');
			}
			$this->activate_school();
		}
	}

	public function save_setup($type,$edit = FALSE){
		//Selecting which table to use
		if($type == 'session'){
			$table = 'acadah_school_session';
		}elseif($type == 'term'){
			$table = 'acadah_school_term';
		}elseif($type == 'activeterm'){
			$table = 'acadah_school_term_session';
		}elseif($type == 'schdiv'){
			$table = 'acadah_school_div';
		}elseif($type == 'classlevel'){
			$table = 'acadah_class_level';
		}elseif($type == 'classdesc'){
			$table = 'acadah_class_desc';
		}elseif($type == 'classdetails'){
			$table = 'acadah_class_details';
		}elseif($type == 'department'){
			$table = 'acadah_subject_dept';
		}elseif($type == 'subject'){
			$table = 'acadah_school_subject';
		}
		$data = $this->setup_array($type,$edit);
		if($edit === FALSE) {
			$save = $this->Corem->save_setup($table,$data);
		}else{
			$save = $this->Corem->save_setup($table,$data,$edit);
		}
		if ($save === TRUE) {
			//What Should Happen If the Condition was met
			$this->session->set_flashdata('success', "<center><b>Saved Successfully</b></center>");
			redirect('setup');
		} else {
			$this->session->set_flashdata('failed', $save);
		}
		$this->index();
	}

	public function setup_array($type,$edit){
		///Array for Setup Session////
		if($type == 'session'){
			$data = array(
				'session_start' => $this->input->post('session_start'),
				'session_end' => $this->input->post('session_end'),
				'session_id' => $this->input->post('session_id'),
				'session_active' => 'active'
			);
		}elseif($type == 'term'){
			$data = array(
				'term_id' => $this->input->post('term_id'),
				'term_name' => $this->input->post('term_name'),
			);
		}elseif($type == 'activeterm'){
			
			$data = array(
				'ts_start' => $this->input->post('term_start'),
				'ts_end' => $this->input->post('term_end'),
				'term_id' => $this->input->post('term_id'),
				'session_id' => $this->input->post('session_id'),
				'ts_active' => $this->input->post('ts_active'),
				'sch_id' => $_SESSION['sch_id']
			);
		}elseif($type == 'schdiv'){
			$data = array(
				'school_div_name' => $this->input->post('school_div_name'),
				'school_div_id' => $this->input->post('school_div_id')
			);
		}elseif($type == 'classlevel'){
			$data = array(
				'class_name' => $this->input->post('class_name'),
				'school_div_id' => $this->input->post('school_div_id'),
				'level_id' => $this->input->post('level_id')
			);
		}elseif($type == 'classdesc'){
			$data = array(
				'class_desc_name' => $this->input->post('class_desc_name'),
				'sch_div_id' => $this->input->post('sch_div_id')
			);
		}elseif($type == 'classdetails'){
			$data = array(
				'desc_id' => $this->input->post('class_desc_id'),
				'class_details' => $this->input->post('class_details'),
				'level_id' => $this->input->post('class_level'),
			);
			if($_SESSION['setup_status'] == 'Completed'){
				if(!empty($this->input->post('class_teacher_id'))){
				$data['class_teacher_id'] = $this->input->post('class_teacher_id');
				}elseif(!empty($this->input->post('class_rep_id'))){
				$data['class_rep_id'] = $this->input->post('class_rep_id');	
				}
				
			}
		}elseif($type == 'department'){
			$data = array(
				'dept_id' => $this->input->post('dept_id'),
				'staff_id' => $this->input->post('staff_id')
			);
			if($_SESSION['setup_status'] == 'Completed'){
				$data['staff_id'] = $this->input->post('staff_id');
			}
		}elseif($type == 'subject'){
			$data = array(
				'department_id' => $this->input->post('dept_id'),
				'school_div_id' => $this->input->post('school_div_id'),
				'subject_id' => $this->input->post('subject_id'),
				'subject_unit' => $this->input->post('subject_unit')
			);
			if($_SESSION['setup_status'] == 'Completed'){
				$data['staff_id'] = $this->input->post('staff_id');
			}
		}
		$data['sch_id'] = $_SESSION['sch_id'];
		return $data;
	}

	public function complete_setup(){

	$complete_setup = $this->Corem->complete_setup();
		if($complete_setup === TRUE){
			$this->session->set_flashdata('success', "<center> Congratulations! you have successfully completed your school setup</center>");
			redirect('dashboard');
		}else{
			$this->session->set_flashdata('failed', "<center>Alaye Kindly check the $complete_setup tab and make sure you add at least one $complete_setup there. Thanks <center>");
			redirect("setup");
		}
		
		
	}
}
