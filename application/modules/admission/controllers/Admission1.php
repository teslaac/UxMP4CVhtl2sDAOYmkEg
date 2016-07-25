<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require (APPPATH."modules/core/controllers/secure_area.php");


class Admission extends Secure_area {

    public function __construct() {
		parent::__construct('admission');
    $user_info = $this->corem->get_user($_SESSION['user_id'],'acadah_users_prospective','student_id');
    //print_r($user_info);
    var_dump($user_info);
    //die();
		}

	public function index()  {
		$this->load->view ('core/template/header3b');
		$this->load->view('admission/complete_app');
		$this->load->view('core/template/footer');
	}

        public function completeapp() {
            $this->form_validation->set_rules('lname', 'Lname', 'trim|required|max_length[50]|min_length[2]');
            $this->form_validation->set_rules('fname', 'Fname', 'trim|required|max_length[50]|min_length[2]');
            $this->form_validation->set_rules('mname', 'Mname', 'trim|required|max_length[50]|min_length[2]');
            $this->form_validation->set_rules('sphone', 'Sphone', 'trim|require|max_length[50]|min_length[20]');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|max_length[50]|min_length[2]');
            $this->form_validation->set_rules('level', 'Level', 'trim|require|max_length[50]|min_length[2]');
            $this->form_validation->set_rules('db', 'Db', 'trim|required|max_length[50]|min_length[2]');
            $this->form_validation->set_rules('religion', 'Religion', 'trim|required|max_length[50]|min_length[2]');
            $this->form_validation->set_rules('gender', 'Gender', 'trim|required|max_length[50]|min_length[2]');
            $this->form_validation->set_rules('sch_address', 'Sch_address', 'trim|required|max_length[50]|min_length[2]');
            $this->form_validation->set_rules('country', 'Country', 'trim|required|max_length[50]|min_length[2]');
            $this->form_validation->set_rules('state', 'State', 'trim|required|max_length[50]|min_length[2]');
            $this->form_validation->set_rules('dob', 'Dob', 'trim|required|max_length[50]|min_length[2]');
            $this->form_validation->set_rules('nationality', 'Nationality', 'trim|required|max_length[50]|min_length[2]');
            $this->form_validation->set_rules('state', 'State', 'trim|required|max_length[50]|min_length[2]');
            $this->form_validation->set_rules('lga', 'Lga', 'trim|required|max_length[50]|min_length[2]');
            $this->form_validation->set_rules('hometown', 'Hometown', 'trim|required|max_length[50]|min_length[2]');
            $this->form_validation->set_rules('ptitle', 'Ptitle', 'trim|required|max_length[50]|min_length[2]');
            $this->form_validation->set_rules('plname', 'Plname', 'trim|required|max_length[50]|min_length[2]');
            $this->form_validation->set_rules('initial', 'Initial', 'trim|required|max_length[50]|min_length[2]');
            $this->form_validation->set_rules('pphone', 'Pphone', 'trim|required|max_length[50]|min_length[2]');
            $this->form_validation->set_rules('pemail', 'Pemail', 'trim|required|max_length[50]|min_length[2]');
            $this->form_validation->set_rules('pgender', 'Pgender', 'trim|required|max_length[50]|min_length[2]');
            $this->form_validation->set_rules('faddress', 'Faddress', 'trim|required|max_length[50]|min_length[2]');
            $this->form_validation->set_rules('relationship', 'Relationship', 'trim|required|max_length[50]|min_length[2]');
            $this->form_validation->set_rules('occupation', 'Occupation', 'trim|required|max_length[50]|min_length[2]');
            $this->form_validation->set_rules('ocaddress', 'Ocaddress', 'trim|required|max_length[50]|min_length[2]');
            $this->form_validation->set_rules('pemail', 'Pemail', 'trim|required|max_length[50]|min_length[2]');
            $this->form_validation->set_rules('height', 'Height', 'trim|required|max_length[50]|min_length[2]');
            $this->form_validation->set_rules('weight', 'Weight', 'trim|required|max_length[50]|min_length[2]');
            $this->form_validation->set_rules('diability', 'Disability', 'trim|required|max_length[50]|min_length[2]');
            $this->form_validation->set_rules('genotype', 'Genotype', 'trim|required|max_length[50]|min_length[2]');
            $this->form_validation->set_rules('bloodgroup', 'Bloodgroup', 'trim|required|max_length[50]|min_length[2]');
            // $this->form_validation->set_rules('pros_img', 'Pros_img', 'trim|required|max_length[50]|min_length[2]');

            if ($this->form_validation->run($this) === FALSE ) {

                $validate = array (

                     'errors' => validation_errors()
                );

                $this->session->set_flashdata($validate);

                $this->index();

        }else {
            $updata = array(
                 'sch_id' => 'sureville',
                 'lname'  => $this->input->post('lname'),
                 'fname'  => $this->input->post('fname'),
                 'mname'  => $this->input->post('mname'),
                 'phone'  => $this->input->post('phone'),
                 'email'  => $this->input->post('email'),
                 'level'  => $this->input->post('level'),
                 'dorb'   => $this->input->post('dorb'),
                 'user_type' => 'propective',
                 'gender' => $this->input->post('gender'),
                 'hometown' => $this->input->post('sch_address'),
                 'country' => $this->input->post('country'),
                 'state'   => $this->input->post('state'),
                 'dob'     => $this->input->post('dob'),
                 'nationality' => $this->input->post('nationality'),
                 'state_of_origin' => $this->input->post('state_of_origin'),
                 'lg' => $this->input->post('lga'),
                 'hometown' => $this->input->post('hometown')
            );
             $opdata = array(
                  'school_id' => $_SESSION['student_id'],
                  'nationality' => $this->input->post('nationality'),
                  'hometown' => $this->input->post('hometown'),
                  'lg_og_origin' => $this->input->post('lg'),
                  'state_of_origin' => $this->input->post('state_of_origin'),
                  'weight' => $this->input->post('weight'),
                  'height' => $this->input->post('height'),
                  'disability' => $this->input->post('disability'),
                  'bloodgroup' => $this->input->post('bloodgroup'),
                  'genotype' => $this->input->post('genotype'),
                  'admission_class' => $this->input->post('admission_class'),
                  'religion' => $this->input->post('religion')
             );
             $udata = array(
                 // 'user_id' => 'sureville',
                 'lname'  => $this->input->post('lname'),
                 'fname'  => $this->input->post('fname'),
                 'mname'  => $this->input->post('mname'),
                 'phone'  => $this->input->post('p_phone'),
                 'email'  => $this->input->post('email'),
                 'gender' => $this->input->post('p_gender'),
                 'user_type' => 'parent',
                 'address' => $this->input->post('f_address')
             );
             $odata = array(
                 // 'parent_id' => ,
                 'title' => $this->input->post('ptitle'),
                 'occupation' => $this->input->post('occupation'),
                 'occupation_address' => $this->input->post('oc_address'),
                 'status' => 1,
                 'initial' => $this->input->post('initial')
             );
             $psdata = array(
                  'parent_id' => $i,
                  'student_id' => 'ssss',
                  'relationship' => $this->input->post('relationship')
             );
            // $this->corem->edit_user('acadah_users_prospective',$udata,$odata,$id,$user_id);
$fquery = $this->corem->add_user($udata,$odata,$id = NULL,'address','address','parent_id','acadah_parent');
$squery = $this->corem->edit_user('acadah_users_prospective',$updata,$opdata,$_SESSION['user_id'],$_SESSION['student_id']);

            redirect('admission/complete');
        }
     }
	public function admin()  {

		$this->load->view('core/template/header3');
		$this->load->view('admission/admin');
		$this->load->view('core/template/footer');
	}


	public function status()  {
		$this->load->view('core/template/header3');
		$this->load->view('admission/status');
		$this->load->view('core/template/footer');
	}

		public function print_form()  {
		$this->load->view('core/template/print_header');
		$this->load->view('admission/print_form');
	}

  function logout(){
    $this->session->sess_destroy();
    redirect(base_url().'login');
  }
 }
?>
