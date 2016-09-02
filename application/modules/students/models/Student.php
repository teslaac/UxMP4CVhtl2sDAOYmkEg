<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Model{

	// public function add_user($table = FALSE,$udata = FALSE, $odata = FALSE){
	// 	$sch_id = $_SESSION['sch_id'];
	// 	$sch_short_name = $_SESSION['sch_id'];
	// 	if($table === FALSE){
	// 		// $this->email->from('your@example.com', 'Your Name');
	// 		// $this->email->to('someone@example.com');
	// 		// $this->email->cc('another@another-example.com');
	// 		// $this->email->bcc('them@their-example.com');

	// 		// $this->email->subject('Email Test');
	// 		// $this->email->message('Testing the email class.');

	// 		// $this->email->send();
	// 		return "Unable To Locate Your School's Table, Acadah Admin Contacted";

	// 	}elseif($udata === FALSE){
	// 		return "Data Lost During Transmission, Acadah Admin Contacted";
	// 	}elseif(empty($sch_id)){
	// 		// die("OLE");
	// 		return "You must Be logged in to perform any action";
	// 	}
	// 	//Next I need to check If the school trying to add new user still has the ability to do that
	// 	// $this->db->select('*');
	// 	// $this->db->from('acadah_setup');
	// 	// $this->db->where('setup_id', $schoolid);
	// 	$query = $this->db->get_where('acadah_school', array('sch_id=>$sch_id'));
	// 	// $query = $this->db->get();
	// 	$query = $query->row_array();
	// 	$max_student = $query['max_student'];
	// 	//Next I am gonna count the number of users in the db and see the number of students already added
	// 	$this->db->select("*");
	// 	$this->db->from('acadah_users');
	// 	$this->db->where('sch_id',$sch_id);
	// 	$this->db->where('user_type','student');
	// 	$query = $this->db->get();
	// 	$current_student = $query->num_rows();	
	// 	if($current_student == $max_student){
	// 		return "You Can No longer add any more student, please subscribe for more slots";
	// 	}

	// 	// Now the query to insert the general data into the users table
	// 	$general = $this->db->insert('acadah_users',$udata);
	// 	if(!$general){
	// 		return "An error has occurred at the first stage";
	// 	}
	// 	//Now I need to Add the details to the student table or staff table respectively
	// 	//Firstly am gonna get the generated id for the user
	// echo	$uaddress = $this->input->post('address');
	// 	$query = $this->db->get_where("acadah_users",array('sch_id'=>$sch_id,'address'=>$uaddress));
	// 	$query = $query->last_row('array');
	// 	$user_id = $query['id'];
	// 	if(empty($user_id)){
	// 		die('Am Lost in Transmission');
	// 	}
	// 	//Let Me quickly Update The user code of the user added now
	// 	$usercode = $sch_short_name."-".$user_id;
	// 	$this->db->set('user_id',$usercode);
	// 	$this->db->where('id',$user_id);
	// 	$usercode_update = $this->db->update('acadah_users');
	// 	if(!$usercode_update){
	// 		return "Unable TO assign Usercode to recently added user";
	// 	}
	// 	if($table === 'acadah_student'){
	// 		$odata['student_id'] = $user_id;
	// 	}elseif($table === 'acadah_staff'){
	// 		$odata['staff_id'] = $user_id;
	// 	}
	// 	//Now the koko insert query 
	// 	$oquery = $this->db->insert($table,$odata);
	// 	if(!$oquery){
	// 		return "Importing Data To $table failed";
	// 	}
	// 	return TRUE;
	// }

	public function add_parent($parent_id,$id){
		$data = array(
				'parent_id' => $parent_id,
				'student_id' => $id
			);
			return $this->db->on_duplicate('acadah_parent_student',$data);
	}

	public function get_all_students(){
		$sch_id = $_SESSION['sch_id'];
		$this->db->select('users.status, user_id, user_type, gender, fname, lname, dob, address, state, phone, email, nationality, hometown, lg, state_of_origin, profile_image, class_details, level_id');
		$this->db->from('users');
		//get ts_details
	    $this->db->join('student_session ss', "users.user_id = ss.student_id " );
	    //AND ss.ts_id = $ts_id
		$this->db->join('class_details cd', 'cd.id = ss.class_details_id');		

		$this->db->where('users.sch_id', $sch_id);
		$this->db->where('users.user_type','student');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_student($id,$cdid = NULL){
		if($cdid !== NULL){
			$field = 'admission_class_details_id';
			$id = $cdid;

		}else{
			$field = 'user_id';
		}
		$sch_id = $_SESSION['sch_id'];
		$where = array('sch_id'=>$sch_id,$field=>$id);
		$join = array('acadah_student', 'acadah_student.student_id=acadah_users.user_id');
		$query = $this->db->join($join[0], $join[1])->get_where('acadah_users', $where);
		if($cdid !== NULL){
			return $query->result_array();
		}
		// print_r($query->row_array());die();
		return $query->row_array();

//		print_r($query);
//		die();
	}
	public function get_parent($id){
		$sch_id = $_SESSION['sch_id'];

		$this->db->from('parent_student');
		$this->db->join('parent', 'parent.parent_id = parent_student.parent_id ');
		$this->db->join('users', 'users.user_id = parent.parent_id ');
		$this->db->where(array('sch_id'=>$sch_id,'student_id'=>$id));

		$query = $this->db->get();
// echo '<pre>';
// 		 print_r($this->db->last_query());
// echo '</pre>';
// 		 die();


		// $where = array('sch_id'=>$sch_id,'student_id'=>$id);
		// $join = array('acadah_users', 'acadah_users.id=acadah_parent.parent_id');
		// $query = $this->db->join($join[0], $join[1])->get_where('acadah_parent', $where);
		return $query->result_array();

	}
	public function edit_student($table,$udata,$odata,$id){
		$query = $this->db->update('acadah_users',$udata,array('user_id'=>$id));
		if($query){
			$id = explode('-',$id);
			$query = $this->db->update($table,$odata,array('student_id'=>$id[1]));
			return $query;
		}
		die();
	}


	// public function add_parent($udata,$odata,$id){
	// 	$sch_id = $_SESSION['sch_id'];
	// 	$sch_short_name = $_SESSION['sch_id'];
	// 	// Now the query to insert the general data into the users table
	// 	$general = $this->db->insert('acadah_users',$udata);
	// 	if(!$general){
	// 		return "An error has occurred at the first stage";
	// 	}
	// 	//Now I need to Add the details to the parents table
	// 	//Firstly am gonna get the generated id for the user
	// 		$uaddress = $this->input->post('phome_address');
	// 	$query = $this->db->get_where("acadah_users",array('sch_id'=>$sch_id,'address'=>$uaddress));
	// 	$query = $query->last_row('array');
	// 	$user_id = $query['id'];
	// 	if(empty($user_id)){
	// 		die('Am Lost in Transmission');
	// 	}
	// 	//Let Me quickly Update The user code of the user added now
	// 	$usercode = $sch_short_name."-".$user_id;
	// 	$this->db->set('user_id',$usercode);
	// 	$this->db->where('id',$user_id);
	// 	$usercode_update = $this->db->update('acadah_users');
	// 	if(!$usercode_update){
	// 		return "Unable TO assign Usercode to recently added parent";
	// 	}
	// 	$odata['parent_id'] = $user_id;
	// 	$odata['student_id'] = $id;
	// 	$oquery = $this->db->insert("acadah_parent",$odata);
	// 	if(!$oquery){
	// 		return "Importing Data To acadah_parent failed";
	// 	}
	// 	return TRUE;
	// }


}














?>