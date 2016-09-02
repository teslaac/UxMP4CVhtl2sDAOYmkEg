<?php
/**
 * Created by PhpStorm.
 * User: SALAKO
 * Date: 06-Feb-16
 * Time: 6:59 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');
Class Staffm extends CI_Model{

//    public function add_user($table = FALSE,$udata = FALSE, $odata = FALSE){
//        $sch_id = $_SESSION['sch_id'];
//        $sch_short_name = $_SESSION['sch_id'];
//        if($table === FALSE){
//            // $this->email->from('your@example.com', 'Your Name');
//            // $this->email->to('someone@example.com');
//            // $this->email->cc('another@another-example.com');
//            // $this->email->bcc('them@their-example.com');
//
//            // $this->email->subject('Email Test');
//            // $this->email->message('Testing the email class.');
//
//            // $this->email->send();
//            return "Unable To Locate Your School's Table, Acadah Admin Contacted";
//
//        }elseif($udata === FALSE){
//            return "Data Lost During Transmission, Acadah Admin Contacted";
//        }elseif(empty($sch_id)){
//            // die("OLE");
//            return "You must Be logged in to perform any action";
//        }
//
//        // Now the query to insert the general data into the users table
//        $general = $this->db->insert('acadah_users',$udata);
//        if(!$general){
//            return "An error has occurred at the first stage";
//        }
//        //Now I need to Add the details to the staff table respectively
//        //Firstly am gonna get the generated id for the user
//        echo	$uaddress = $this->input->post('address');
//        $query = $this->db->get_where("acadah_users",array('sch_id'=>$sch_id,'address'=>$uaddress));
//        $query = $query->last_row('array');
//        $user_id = $query['id'];
//        if(empty($user_id)){
//            die('Am Lost in Transmission');
//        }
//        //Let Me quickly Update The user code of the user added now
//        $usercode = $sch_short_name."-".$user_id;
//        $this->db->set('user_id',$usercode);
//        $this->db->where('id',$user_id);
//        $usercode_update = $this->db->update('acadah_users');
//        if(!$usercode_update){
//            return "Unable TO assign Usercode to recently added user";
//        }
//            $odata['staff_id'] = $user_id;
//
//        //Now the koko insert query
//        $oquery = $this->db->insert($table,$odata);
//        if(!$oquery){
//            return "Importing Data To $table failed";
//        }
//        return TRUE;
//    }

//    public function get_all_staff(){
//        $sch_id = $_SESSION['sch_id'];
//        $where = array('sch_id'=>$sch_id,'user_type'=>'staff');
//        $join = array('acadah_staff', 'acadah_staff.staff_id=acadah_users.id');
//        $query = $this->db->join($join[0], $join[1])->get_where('acadah_users', $where);
//        return $query->result_array();
//    }

//    public function get_staff($id){
//        $sch_id = $_SESSION['sch_id'];
//        $where = array('sch_id'=>$sch_id,'user_id'=>$id);
//        $join = array('acadah_staff', 'acadah_staff.staff_id=acadah_users.id');
//        $query = $this->db->join($join[0], $join[1])->get_where('acadah_users', $where);
//        return $query->row_array();
////		print_r($query);
////		die();
//    }

//    public function edit_staff($table,$udata,$odata,$id){
//        $query = $this->db->update('acadah_users',$udata,array('user_id'=>$id));
//        if($query){
//            $id = explode('-',$id);
//            $query = $this->db->update($table,$odata,array('staff_id'=>$id[1]));
//            return $query;
//        }
//        die();
//    }










}