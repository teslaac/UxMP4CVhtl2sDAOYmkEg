<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
require (APPPATH."modules/core/controllers/secure_area.php");


class Admission extends Secure_area {

    public function __construct() {
		parent::__construct('admission');
    $this->load->model('admission/apply_m');
    $this->data['class_level'] = $this->Corem->get_app_any('','level');
    $this->data['classd_details'] = $this->Corem->classd_details();
    $this->data['states'] = $this->Corem->get_states();
    $this->data['app_sessions'] = $this->Corem->get_app_any('','session',TRUE);
    $this->data['title'] = 'Admission';
		}

	public function index($id='')  {
    if(empty($id) or $_SESSION['user_type'] == 'prospective'){
      $id = $_SESSION['user_id'];
    }
    $this->data['pro_info'] = $this->User_model->get_user($id,'acadah_prospective','prospective_id');
    $this->data['id'] = $id;
     // print_r($this->data['id']);
    $this->load->template2('admission/complete_app', $this->data);
		
	}      

    public function complete($id = '') {
          if($_SESSION['user_type'] == 'prospective'){
            $id = $_SESSION['user_id'];
          }
          if($this->User_model->general_validation('prospective') === FALSE){
                $this->index();
              
           }else{
        
              $updata = array(
                 'sch_id' => $_SESSION['sch_id'],
                 'lname'  => $this->input->post('sname'),
                 'fname'  => $this->input->post('fname'),
                 'mname'  => $this->input->post('mname'),
                 'phone'  => $this->input->post('phone'),
                 'email'  => $this->input->post('email'),
                 'gender' => $this->input->post('gender'),
                 'address' => $this->input->post('address'),
                 'dob'     => $this->input->post('dob'),
                 'nationality' => $this->input->post('nationality'),
                 'state_of_origin' => $this->input->post('state'),
                 'lg' => $this->input->post('lga'),
                 'hometown' => $this->input->post('hometown')
            );
             $opdata = array(
                  'weight' => $this->input->post('weight'),
                  'status' => 'completed',
                  'height' => $this->input->post('height'),
                  'disability' => $this->input->post('disability'),
                  'bloodgroup' => $this->input->post('bloodgroup'),
                  'genotype' => $this->input->post('genotype'),
                  'admission_class' => $this->input->post('level'),
                  'p_fullname' => $this->input->post('p_fullname'),
                  // 'p_initial' => $this->input->post('p_initial'),
                  'p_phone' => $this->input->post('p_phone'),
                  // 'p_email' => $this->input->post('p_email'),
                  // 'p_gender' => $this->input->post('p_gender'),
                  'p_full_address' => $this->input->post('p_full_address'),
                  'p_relationship' => $this->input->post('p_relationship'),
                  // 'p_occupation' => $this->input->post('p_occupation'),
                  // 'p_oc_address' => $this->input->post('p_oc_address'),
                  'hostel_status'   => $this->input->post('hostel_status'),
                  //'admission_no' => $this->input->post('')
                  'religion' => $this->input->post('religion')
             );

            $squery = $this->User_model->edit_user('prospective',$updata,$opdata,$id,'prospective_id');
            if($squery === TRUE){
                 $this->session->set_flashdata('success', 'Account Updated Successfully');
                 if(isset($_POST['status'])){
                  $ts_id = $this->input->post('ts_id');
                  $this->smart_admission($ts_id,$id);
                 }
                 if($_SESSION['user_type'] == 'prospective'){
                        redirect('admission');
                 }else{
                        redirect('admission/index/'.$id);
                 }
                 
            }else {
                $this->session->set_flashdata('Failed', 'Account Not Updated Successfully');
                $this->index();
            }
          }
       
 }

public function admin($section="admin", $ts_id='')  {
        $this->data['page'] = 'Admission Admin';
            if(empty($ts_id)){
              $ts_id = $this->Corem->active_term_session('ts_id', $_SESSION['sch_id']);
            }
            $this->data['applicant'] = $this->apply_m->view_all_applicant($ts_id);
            $this->data['view_admission_letter'] = $this->apply_m->view($_SESSION['sch_id'],'admission_letter');
            $this->data['view_terms_condition'] = $this->apply_m->view($_SESSION['sch_id'], 'terms_and_condition');
            $this->load->template('admission/' . $section, $this->data);
	}


    public function create_admission_letter($id='') {          
          $this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[5]|max_length[12]');
          $this->form_validation->set_rules('content', '', 'trim|required|min_length[5]|max_length[12]');
         $adata = array (
            'title' => $this->input->post('title'),
            'content' => $this->input->post('content'),
            'session_id' => $this->input->post('session_id'),
            'status' => 'active',
            'sch_id' => $_SESSION['sch_id']
             );
         $query = $this->apply_m->save('admission_letter',$adata);
         if($query === TRUE){
          $this->session->set_flashdata('success', 'Admission Letter Saved Successfully');
         }else{
          $this->session->set_flashdata('failed', 'Unable To  Save Admission Letter');
         }
           if(empty($id)){
             redirect('admission/admin/create_admission_letter');
           }else{
            redirect('admission/admin/view_admission_letter');
           }
    }
    public function create_term_condition($id='') {
       $adata = array (
            'title' => $this->input->post('title'),
            'content' => $this->input->post('content'),
            'session_id' => $this->input->post('session_id'),
            'status' => 'active',
            'sch_id' => $_SESSION['sch_id']
             );
         $query = $this->apply_m->save('terms_and_condition',$adata);
         if($query === TRUE){
          $this->session->set_flashdata('success', 'Terms And Condition Saved Successfully');
         }else{
          $this->session->set_flashdata('failed', 'Unable To  Save Terms And Condition');
         }
           if(empty($id)){
             redirect('admission/admin/create_term_condition');
           }else{
            redirect('admission/admin/view_terms_condition');
           }
    }

	public function status($id='',$ts_id='')  {
     if(empty($ts_id)){
              $ts_id = $this->Corem->active_term_session('ts_id', $_SESSION['sch_id']);
            }
    if(empty($id) or $_SESSION['user_type'] == 'prospective'){
      $id = $_SESSION['user_id'];
    }
    $this->data['pro_info'] = $this->apply_m->view_all_applicant($ts_id,$id);
        $this->load->template2('admission/status', $this->data);
	}

   public function print_form($id = '')  {
    if(empty($id) or $_SESSION['user_type'] == 'prospective'){
      $id = $_SESSION['user_id'];
    }
    $this->data['pro_info'] = $this->apply_m->view_all_applicant('',$id);
		$this->load->view('core/template/print_header', $this->data);
		$this->load->view('admission/print_form');
	}

    public function terms_and_conditions() {
     $this->data['view_terms'] = $this->apply_m->view_letter($_SESSION['sch_id'],'terms_and_condition');
        $this->load->view('core/template/terms_header');
        $this->load->view('admission/terms_and_conditions', $this->data);
    }

    public function print_admission_letter() {

        $this->data['view_letter'] = $this->apply_m->view_letter($_SESSION['sch_id'],'admission_letter');
        $this->load->view('core/template/print_header');
        $this->load->view('admission/print_admission_letter', $this->data);
    }



 public function smart_admission($ts_id,$prospective_id){

  $query = $this->apply_m->smart_admission($ts_id,$prospective_id);

    if($query === TRUE){
      $this->session->set_flashdata('success', "<center><b>Saved Successfully</b></center>");
    }else{
      $this->session->set_flashdata('failed', "<center> Unable to save please try again later </center>");
    }
    redirect($this->agent->referrer());

 }

  }
?>
