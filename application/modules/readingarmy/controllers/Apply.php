<?php
//defined('BASEPATH') OR exit('No direct script access allowed');
require (APPPATH."modules/core/controllers/secure_area.php");


class Apply extends MX_Controller {

    public function __construct() {
		parent::__construct('admission');

    $_SESSION['sch_id'] = 'zeet'; ///sch id from url #todo
		}

	  public function index()  {
		$this->load->template2b('admission/apply');
	}

    public function create() {

      $this->form_validation->set_rules('surname', 'Surname', 'trim|required|min_length[2]|max_length[12]');
      $this->form_validation->set_rules('firstname', 'Firstname', 'trim|required|min_length[2]|max_length[20]');
      $this->form_validation->set_rules('othername', 'Othername', 'trim|required|min_length[2]|max_length[20]');
      $this->form_validation->set_rules('phonenumber', 'Phonenumber', 'trim|required|min_length[5]|max_length[20]');
      $this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[5]|max_length[50]');
      $this->form_validation->set_rules('level', 'Level', 'trim|required|min_length[1]|max_length[20]');
      $this->form_validation->set_rules('gender', 'Gender', 'trim|required|min_length[1]|max_length[20]');
      $this->form_validation->set_rules('address', 'Address', 'trim|required|min_length[5]|max_length[50]');
      $this->form_validation->set_rules('country', 'Country', 'trim|required|min_length[5]|max_length[12]');
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

            // 'sch_id' => 'sureville',
  	    	 	'lname' => $this->input->post('surname'),
  	    	 	'fname' => $this->input->post('firstname'),
  	    	 	'mname' => $this->input->post('othername'),
  	    	 	'phone' => $this->input->post('phonenumber'),
  	    	 	'email' => $this->input->post('email'),
  	    	 	'user_type' => 'prospective',
  	    	 	'gender' => $this->input->post('gender'),
  	    	 	'address' => $this->input->post('address'),
  	    	 	'country' => $this->input->post('country'),
  	    	 	'state' => $this->input->post('state'),
            'dob' => $this->input->post('dob'),
            'sch_id' => $_SESSION['sch_id'],
            'nationality' => $this->input->post('country'),
            'state_of_origin' => $this->input->post('state'),
            'pass' => md5($this->input->post('surname'))
             );

             $odata  = array(

              //  'student' =>
               'admission_class' => $this->input->post('level') 
             	 );

              
              $add_user = $this->User_model->add_user($udata,$odata,$id = NULL,'student_id','acadah_users_prospective');

                 if(!$add_user) {

                 	 return "Unable to add record to the table";

                 }else {                

                  $login_details = array('username' => $add_user , 'pass' => $udata['lname'], 'success' => true);
                  
                  $this->session->set_flashdata($login_details);

                  //print_r($login_details);
                   redirect('admission/apply');

                 }

               }
            }

 }
?>
