<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require (APPPATH."modules/core/controllers/secure_area.php");



class Students extends Secure_area {	

	function __construct(){

		$this->data['title'] = $this->data['module'] = 'students'; //module name 
		$this->data['states'] = $this->Corem->get_states();
		$this->data['classes'] = $this->Corem->get_no_class(FALSE);
		$this->data['sport_house'] = $this->Corem->get_sport_house();
		parent::__construct($this->data['module']);
		$this->load->model('Student');
	}

	public function index()
	{   
			//I need to have the query for the users from the db
			$this->data['students'] = $this->Student->get_all_students();
			$this->data['page'] = 'students';
			$this->load->template('students/students',$this->data);		
	}

	public function record($print ='', $ts_id='', $cd_id='', $level_id=''){
			//$ts_id2 = ($ts_id)?  $ts_id : $this->ts_id;
			//$level_id = ($level_id)?  $level_id : $this->level_id;

			// filter tsid, cdid, levelid later
			$this->data['students'] = $this->Student->get_all_students();
			$this->data['page'] = 'students';
			$this->load->template_print('students/print_student_records',$this->data);

	}

	public function students_assigned(){
		$this->data['page'] = 'students Assigned';
		$this->load->template('students/students_assigned',$this->data);

	}

	public function api($userid = ''){
		//I need to have the query for the users from the db
			$this->data['students'] = $this->Student->get_all_students();
			print_r(json_encode($this->data['students']));
			// die();
	}


	public function view()
	{   
		$this->data['page'] = 'students';
		$this->data['students'] = $this->Student->get_all_students();
		$this->load->view('core/template/header', $this->data);
		$this->load->view('students/students');
		$this->load->view('core/template/footer');
	}

	public function add()
	{   
		$this->data['aroles'] = $this->Corem->get_roles(TRUE);
		$this->data['page'] = 'students';
		$this->load->template('students/add_student',$this->data);
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
		$this->data['no'] = $no;
		$this->data['page'] = 'students';
		$this->load->template('students/students_quick_reg',$this->data);

	}

	public function edit($id)
	{
		if(empty($id)){redirect("students");}
		$this->check_action_permission('students_edit');
		$this->data['aroles'] = $this->Corem->get_roles(TRUE,$id);
		$this->data['student_details'] = $this->Student->get_student($id);
		$this->data['page'] = 'students';
		$this->data['parents'] = $this->Corem->get_any("acadah_users.user_type","parent","acadah_parent","parent_id","acadah_users","user_id");
		$this->data['parents_details'] = $this->Student->get_parent($id);
		$this->data['parent_details'] = null;
		$this->load->template('students/edit_student',$this->data);
	}

	// public function students($action = 'view')
	// {
	// 	$this->data['page'] = 'students';
	// 	$this->data['students'] = $this->student->get_all_students();
	// 	if ($action === 'add'){
	// 		$this->load->view('core/template/header', $this->data);
	// 		$this->load->view('students/add_student');
	// 		$this->load->view('core/template/footer');

	// 	}elseif ($action === 'quick_reg') {
	// 		$this->load->view('core/template/header', $this->data);
	// 		$this->load->view('students/students_quick_reg');
	// 		$this->load->view('core/template/footer');
	// 	}else{
	// 		$this->load->view('core/template/header', $this->data);
	// 		$this->load->view('students/students');
	// 		$this->load->view('core/template/footer');
	// 	}
		
	// }

    /**
     * @author Salako Teslim Akolade<tescointsite@gmail.com>
     * This function will add both student and staff users
     *
     * This Function Now Only adds Student and edits student
     */
    public function add_student($mode = "add",$id = NULL)
    {
        $table = "acadah_student";

            $odata = array(
                'admission_no' => $this->input->post('admission_no'),
                'admission_date' => $this->input->post('admission_date'),
                'sport_house' => $this->input->post('sport_house'),
                'religion' => $this->input->post('religion'),
                'weight' => $this->input->post('weight'),
                'height' => $this->input->post('height'),
                'disability' => $this->input->post('disability'),
                'genotype' => $this->input->post('genotype'),
                'bloodgroup' => $this->input->post('bloodgroup'),
                'hostel_status' => $this->input->post('hostel_status')

            );
		$admission_class = explode('-',$this->input->post('admission_class'));
		$odata['admission_class'] = $admission_class[0];
		$odata['admission_class_details_id'] = $admission_class[1];
            //This will be the table name to be passed in the function inside model
        //Now Checking If any of the conditions above was not met
		if($this->User_model->general_validation('student') === FALSE){
			if($mode === 'edit'){
				$this->edit($id);
			}else{
				$this->add();
			}

        }else {
			//Next Here would be to insert the data into the db so am gonna do that now but first load the model

			//Next am gonna put the data to be inserted into the db in an array
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
				'user_type' => "student",
				'sch_id' => $_SESSION['sch_id'],
				'pass' => md5(strtolower($this->input->post('sname')))
			);
			//Next Is to call the function inside the model that will do the insertion
			//Am Storing that in a variable just to check for some stuffs :)
			if ($mode === 'edit') {
				$edit = $this->User_model->edit_user($table, $udata, $odata,$id,'student_id');
				if ($edit !== TRUE) {
					$this->session->set_flashdata('failed', $edit);
				} elseif ($edit === TRUE) {
					//What Should Happen If the Condition was met
					$this->session->set_flashdata('success', 'User Editted Successfully');
					redirect("students/edit/$id");
				}
				$this->edit($id);
			} else {
				$add = $this->User_model->add_user($udata,$odata,'','student_id','acadah_student');
//				$add = $this->student->add_user($table, $udata, $odata);
				if ($add !== TRUE) {
					$this->session->set_flashdata('failed', $add);
				} elseif ($add === TRUE) {
					//What Should Happen If the Condition was met
					$this->session->set_flashdata('success', 'User Added Successfully');
					redirect('students/add');
				}
				$this->add();

			}
		}
    }

    public function parent_api(){
    	$parent_id = $this->input->post('parent_id');
        $parent_details = $this->User_model->get_user($parent_id,"parent","parent_id");
        echo json_encode($parent_details,JSON_PRETTY_PRINT);
        // print_r(json_encode($parent_details));
    }

	//Now Function To Add Parent For Students
	public function add_parent($id){
		if(!empty($this->input->post('parent_id'))){
		$add_parent = $this->Student->add_parent($this->input->post('parent_id'),$id);
		if($add_parent === TRUE){
			$this->session->set_flashdata('success', 'Parent Added Successfully');
			redirect("students/edit/$id");
		}else{
			$this->session->set_flashdata('failed', $add_parent);
			$this->edit($id);
		}
		}else{
		if($this->User_model->general_validation('parent') === FALSE){
			$this->edit("$id");
		}else{
			$udata = array(
				'fname' => $this->input->post('pfirstname'),
				'lname' => $this->input->post('psurname'),
				'mname' => $this->input->post('pothername'),
				'phone' => $this->input->post('pphonenumber'),
				'email' => $this->input->post('pemailaddress'),
				'address' => $this->input->post('phome_address'),
				'dob' => $this->input->post('pdob'),
				'nationality' => $this->input->post('pnationality'),
				'state_of_origin' => $this->input->post('pstate'),
				'lg' => $this->input->post('plga'),
				'hometown' => $this->input->post('phometown'),
				'user_type' => "parent",
				'sch_id' => $_SESSION['sch_id'],
				'pass' => md5(strtolower($this->input->post('psurname')))

			);
			$odata = array(
				'initial' => $this->input->post('pinitial'),
				'occupation' => $this->input->post('poccupation'),
				'occupation_address' => $this->input->post('poccupation_address'),
				'title' => $this->input->post('ptitle'),
				'religion' => $this->input->post('preligion')
			);
			//Now the function to add the parent in model
			$add = $this->User_model->add_user($udata,$odata,$id,'parent_id','acadah_parent');
			if ($add !== TRUE) {
				$this->session->set_flashdata('failed', $add);
			} elseif ($add === TRUE) {
				//What Should Happen If the Condition was met
				$this->session->set_flashdata('success', 'Parent Added Successfully');
				redirect("students/edit/$id");
			}
			$this->edit($id);
		}
	}
	}


	public function quick_register($no){
		for ($i=1; $i <= $no ; $i++) { 
			$this->form_validation->set_rules("admission_no$i", 'Admission No', 'trim|required');
			$this->form_validation->set_rules("sname$i", 'Surname', 'trim|required');
			$this->form_validation->set_rules("fname$i", 'First Name', 'trim|required');
			$this->form_validation->set_rules("email$i", 'Email', 'trim|required|valid_email');
			$this->form_validation->set_rules("gender$i", 'Gender', 'trim|required');
			if($this->form_validation->run() === FALSE){
			$this->session->set_flashdata('failed', "<center>An Error Occured<center>");
			$this->quick_reg($no);
			break;

		}else{
			$qr = $this->User_model->quick_register($no,'student');
		}
		}
		if($this->form_validation->run() === TRUE){
		
		if ($qr !== TRUE) {
					$this->session->set_flashdata('failed', "<center>Unable To add student</center>");
				} elseif ($qr === TRUE) {
					//What Should Happen If the Condition was met
					$this->session->set_flashdata('success', "<center>$no Students Added Successfully<center>");
					redirect('students/quick_reg');
				}
				$this->quick_reg($no);
	}
}

}
