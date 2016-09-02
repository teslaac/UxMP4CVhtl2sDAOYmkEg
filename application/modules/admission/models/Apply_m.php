<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apply_m extends CI_Model {

public function get_class_level() {


            $this->db->select('id, class_name');
            $this->db->from('acadah_class_level');
            // $this->db->where(array('status' =>  'active'));       
            $query = $this->db->get(); 
            if($query->num_rows() != 0)
            {
                return $query->result_array();
            }
            else
            {
                return false;
            }
        }


  public function view_all_applicant($ts_id='',$id='') {


     $this->db->select('*');
     $this->db->from('acadah_users');
     $this->db->join('acadah_prospective', 'acadah_prospective.prospective_id=acadah_users.user_id');
    $this->db->join('acadah_class_level', "acadah_class_level.level_id=acadah_prospective.admission_class and acadah_class_level.sch_id='$_SESSION[sch_id]'");
    $this->db->join('acadah_class_details', "acadah_class_details.id=acadah_prospective.admission_class_details_id","Left");
    if(!empty($ts_id)){
    $this->db->join('acadah_app_term_session', "acadah_app_term_session.ts_id=acadah_prospective.ts_id");
    $this->db->join('acadah_app_session', "acadah_app_session.session_id=acadah_app_term_session.session_id");
          }
    if(!empty($id)){
        $this->db->where('acadah_users.user_id',$id);
    }
     // $this->db->where('user_type', 'prospective');
     $query = $this->db->get();
      // if($query->num_rows() != 0) {
     if(!empty($id)){
         return $query->row_array();
     }else{
        return $query->result_array();
     }
      // }else {
      //    return false;
      // }

  }
  
  public function smart_admission($ts_id,$prospective_id){
    //Firstly I Need To Grab The Prospective users Details
    $pdetails = $this->apply_m->view_all_applicant($ts_id,$prospective_id);
    //Checking If The User Already Has an Admission No, If not it means I need ti migrate his data to a student account
    if(empty($pdetails['admission_no'])){
      $laid = $this->User_model->user_id('smart_admission',$ts_id);
      $laid += 1;
///////////////////////////Migrating User From Prospective To Student///////////////////////////////////////////
                $odata = array(
                    'religion' => $pdetails['religion'],
                    'weight' => $pdetails['weight'],
                    'height' => $pdetails['height'],
                    'disability' => $pdetails['disability'],
                    'genotype' => $pdetails['genotype'],
                    'bloodgroup' => $pdetails['bloodgroup'],
                    'hostel_status' => $pdetails['hostel_status']
                );
        $odata['admission_no'] = $pdata['admission_no'] = $pdetails['session_name'].'/'.$laid;
        $odata['admission_class'] = $pdetails['admission_class'];
        $odata['admission_class_details_id'] = $this->input->post('class_details_id');
                $udata = array(
                    'fname' => $pdetails['fname'],
                    'lname' => $pdetails['lname'],
                    'mname' => $pdetails['mname'],
                    'phone' => $pdetails['phone'],
                    'email' => $pdetails['email'],
                    'gender' => $pdetails['gender'],
                    'address' => $pdetails['address'],
                    'dob' => $pdetails['dob'],
                    'nationality' => $pdetails['nationality'],
                    'state_of_origin' => $pdetails['state'],
                    'lg' => $pdetails['lg'],
                    'hometown' => $pdetails['hometown'],
                    'user_type' => "student",
                    'sch_id' => $_SESSION['sch_id'],
                    'pass' => $pdetails['pass']
                            );
        $add = $this->User_model->add_user($udata,$odata,'','student_id','acadah_student',$pdetails['session_id']);
        if($add !== TRUE){
            return "An error has occured";
        }
        $pdata['student_id'] = $_SESSION['username'];
///////////////////////////////////END///////////////////////////////////////////////////////////////////////////
    }
    $status = $this->input->post('status');
    if(!empty($pdetails['student_id'])){
    if($status == 'admitted'){
        $udata['status'] = 'active';
    }elseif($status == 'pending'){
        $udata['status'] = 'inactive';
    }
    $odata['admission_class_details_id'] = $this->input->post('class_details_id');
    if(isset($_POST['level'])){
        $odata['admission_class'] = $this->input->post('level');
    }else{
        $odata['admission_class'] = $pdetails['admission_class'];
    }
    $edit = $this->User_model->edit_user('acadah_student', $udata, $odata,$pdetails['student_id'],'student_id');
    }
    //Update Status Of User Table,Student Table, Student Session Table
    // if($status == 'admitted'){
    //     $status = 'active';
    // }elseif($status == 'pending'){
    //     $status = 'inactive';
    // }
    // $udata['status'] = $status;
    // $odata['status'] = $status;
    // if(!empty($pdetails['admission_no'])){
    //  $edit = $this->User_model->edit_user("acadah_student", $udata, $odata,$,'student_id');
    // }
    $pdata['admission_status'] = $status;
    $pdata['admission_class_details_id'] = $this->input->post('class_details_id');
    //Updating Prospective Table
    $query = $this->db->update('acadah_prospective',$pdata,array('prospective_id'=>$prospective_id));
    return $query;

  }


  public function get_join_user_details($value){
             
            
            
            $this->db->select('*');
            $this->db->from('users');
            $this->db->join('users_prospective', 'users_prospective.student_id = users.id', 'LEFT');
            $this->db->where('user_type', $value);
            $query = $this->db->get();

        return $query->result_array();


        print_r($this->db->last_query());
          

   }

    public function save($table, $adata) {

       $this->db->set($adata);
       $query = $this->db->on_duplicate($table, $adata);

         return $query;

    }

    public function view($sch_id,$table) {

        //$this->db->set($sch_id);
        $this->db->select('*');
        $this->db->from($table);
        $this->db->join('acadah_app_session', "$table.session_id=acadah_app_session.session_id");
        $this->db->where(array('sch_id' => $sch_id));
        $query = $this->db->get();
        // die ($this->db->last_query());

             return $query->result_array();
         
    }

    public function view_letter($sch_id,$table) {
        $session_id = $this->Corem->active_term_session($field = 'session_id', $sch_id);
        //$this->db->set($sch_id);
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('sch_id', $sch_id);
        $this->db->where('session_id',$session_id);
        // if($table == 'admission_letter'){
        //     $this->db->where('status','active');
        // }
        $query = $this->db->get();
        // die ($this->db->last_query());

             return $query->result_array();
         
    }
   
    
}

?>
