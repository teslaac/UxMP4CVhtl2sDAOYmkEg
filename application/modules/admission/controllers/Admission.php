<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
require (APPPATH."modules/core/controllers/secure_area.php");


class Admission extends Secure_area {

    public function __construct() {
		parent::__construct('admission');
    $this->load->model('user_model');
    $this->user_info = $this->User_model->get_user($_SESSION['user_id'],'acadah_users_prospective','student_id');

//print_r($this->user_info);
    //die();
		}

	public function index()  {
        $this->load->template2('admission/complete_app');
		

	}

   public function parent()  {       
        $this->data['parent_data'] = $this->User_model->get_user_parent_student($_SESSION['user_id']);
        $this->load->template2('admission/parent_info', $this->data);
    }

    public function create_parent() {

            $udata = array(
                 'sch_id' => $_SESSION['sch_id'],
                 'user_type'  => 'parent',
                 'lname'  => $this->input->post('plname'),
                 'mname'  => $this->input->post('pfname'),
                 'phone'  => $this->input->post('pphone'),
                 'email'  => $this->input->post('pemail'),
                 'gender' => $this->input->post('pgender'),
                 'address'=> $this->input->post('faddress')

                 );

            $odata = array(
                'title' => $this->input->post('ptitle'),
                'initial' => $this->input->post('initial'),
                'occupation' =>  $this->input->post('occupation'),
                'occupation_address' => $this->input->post('ocaddress'),
                'status' => 1
                );

            $this->user_model->add_user($udata,$odata,$id = $_SESSION['user_id'],'parent_id','acadah_parent');

               redirect('admission/parent');
    }

    public function update_parent($parent_id) {

            $udata = array(
                 'sch_id' => $_SESSION['sch_id'],
                 'user_type'  => 'parent',
                 'lname'  => $this->input->post('plname'),
                 'mname'  => $this->input->post('pfname'),
                 'phone'  => $this->input->post('pphone'),
                 'email'  => $this->input->post('pemail'),
                 'gender' => $this->input->post('pgender'),
                 'address'=> $this->input->post('faddress')

                 );

            $odata = array(
                'title' => $this->input->post('ptitle'),
                'initial' => $this->input->post('initial'),
                'occupation' =>  $this->input->post('occupation'),
                'occupation_address' => $this->input->post('ocaddress'),
                'status' => 1
                );

            $this->user_model->edit_user('acadah_parent',$udata,$odata,$parent_id,'parent_id');

               redirect('admission/parent');
    }

    public function save_parent($parent_id) {
           if($parent_id){
                $this->update_parent($parent_id);
           }else{
                $this->create_parent();
           }
    }

    public function completeapp() {

            $updata = array(
                 'sch_id' => $_SESSION['sch_id'],
                 'lname'  => $this->input->post('lname'),
                 'fname'  => $this->input->post('fname'),
                 'mname'  => $this->input->post('mname'),
                 'phone'  => $this->input->post('phone'),
                 'email'  => $this->input->post('email'),
                 // 'level'  => $this->input->post('level'),
                 // 'dorb'   => $this->input->post('dorb'),
                 'user_type' => $_SESSION['user_type'],
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
                  // 'sch_id' => $_SESSION['sch_id'],
                  //'nationality' => $this->input->post('nationality'),
                  //'hometown' => $this->input->post('hometown'),
                  //'lg_of_origin' => $this->input->post('lg'),
                  //'state_of_origin' => $this->input->post('state_of_origin'),
                  'weight' => $this->input->post('weight'),
                  'height' => $this->input->post('height'),
                  'disability' => $this->input->post('disability'),
                  'bloodgroup' => $this->input->post('bloodgroup'),
                  'genotype' => $this->input->post('genotype'),
                  'admission_class' => $this->input->post('admission_class'),
                  'religion' => $this->input->post('religion')
             );

            // $data['success'] = "Account Updated Successfully";
            $this->session->set_flashdata('success', 'Account Updated Successfully');
            $squery = $this->user_model->edit_user('acadah_users_prospective',$updata,$opdata,$_SESSION['user_id'],'student_id');
             

            redirect('admission/index');
           // }
         }

	public function admin()  {
        $data['page'] = 'Admission';
		$this->load->view('core/template/header', $data);
		$this->load->view('admission/admin');
		$this->load->view('core/template/footer');
	}

	public function status()  {

        $admission_class_id = $this->user_info['admission_class'];

        if($admission_class_id){
            $this->class_data = $this->Corem->get_details('class_details', 'class_details_id', $admission_class_id) ;
            $data['admission_class'] = $admission_class = $this->class_data[0]['class_details'];
            }else{
               $data['admission_class'] = '';
            }
        
        
        $data['user_info'] = $this->user_info;
        print_r($this->user_info);
        $this->load->template2('admission/status', $data);
	}

   public function print_form()  {
		$this->load->view('core/template/print_header');
		$this->load->view('admission/print_form');
	}
 }
?>
