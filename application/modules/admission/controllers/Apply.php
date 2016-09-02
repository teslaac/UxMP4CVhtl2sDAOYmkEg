<?php
//defined('BASEPATH') OR exit('No direct script access allowed');
require (APPPATH."modules/core/controllers/secure_area.php");


class Apply extends MX_Controller {

    public function __construct() {
		parent::__construct('admission');
    $this->load->model("admission/apply_m");

    $_SESSION['sch_id'] = 'jsot'; ///sch id from url #todo
		}

	  public function index()  { 
    $data['title'] = 'Apply';
    $data['class_level'] = $this->Corem->get_app_any('','level');
    $data['list_state'] = $this->Corem->get_states();
    $this->load->template2b('admission/apply', $data);
	}

    public function create() {
      $data['title'] = 'Create';
      $this->form_validation->set_rules('surname', 'Surname', 'trim|required|min_length[2]|max_length[12]');
      $this->form_validation->set_rules('firstname', 'Firstname', 'trim|required|min_length[2]|max_length[20]');
      $this->form_validation->set_rules('othername', 'Othername', 'trim|required|min_length[2]|max_length[20]');
      $this->form_validation->set_rules('phonenumber', 'Phonenumber', 'trim|required|min_length[5]|max_length[20]');
      $this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[5]|max_length[50]');
      $this->form_validation->set_rules('level', 'Level', 'trim|required|min_length[1]|max_length[20]');
      $this->form_validation->set_rules('gender', 'Gender', 'trim|required|min_length[1]|max_length[20]');
      $this->form_validation->set_rules('address', 'Address', 'trim|required|min_length[5]|max_length[50]');
      $this->form_validation->set_rules('nationality', 'Nationality', 'trim|required|min_length[5]|max_length[12]');
      $this->form_validation->set_rules('state', 'State', 'trim|required|max_length[20]');
      $this->form_validation->set_rules('dob', 'Dob', 'trim|required|min_length[5]|max_length[20]');

      if ($this->form_validation->run() == FALSE) {

            $validate = array(
                'errors' => validation_errors()
            );

            $this->session->set_flashdata($validate);

            $this->index();
     }else {
        
        $udata = array(
  	    	 	'lname' => $this->input->post('surname'),
  	    	 	'fname' => $this->input->post('firstname'),
  	    	 	'mname' => $this->input->post('othername'),
  	    	 	'phone' => $this->input->post('phonenumber'),
  	    	 	'email' => $this->input->post('email'),
  	    	 	'user_type' => 'prospective',
  	    	 	'gender' => $this->input->post('gender'),
  	    	 	'address' => $this->input->post('address'),
  	    	 	'state' => $this->input->post('state'),
            'dob' => $this->input->post('dob'),
            'sch_id' => $_SESSION['sch_id'],
            'nationality' => $this->input->post('nationality'),
            'state_of_origin' => $this->input->post('state'),
            'pass' => md5(strtolower($this->input->post('surname')))
             );

         $odata  = array(
               'admission_class' => $this->input->post('level'), 
               'ts_id' => $this->Corem->active_term_session('ts_id', $_SESSION['sch_id']),
               'admission_status' => 'pending',
               'status' => 'pending'
             	 );
              
              $add_user = $this->User_model->add_user($udata,$odata,$id = NULL,'prospective_id','acadah_prospective');

                 if($add_user !== TRUE) {
                 	 return "Unable to add record to the table";
                 }else {                                  
                    // $this->email->from('Sureville Model', 'Sureville Group of Schools');
                    // $this->email->to($this->session->flashdata('email')); 

                    // $this->email->subject('Thanks you for creating account with us');
                    // $this->email->message('Thanks for you for completing the online application form you can find below with you login details to the sit');   

                    // $this->email->send();
                  //print_r($login_details);
                   redirect('admission/apply');

                 }

               }
            }

 }
?>
