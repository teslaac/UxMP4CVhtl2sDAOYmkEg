<?php
/**
 * Created by PhpStorm.
 * User: SALAKO
 * Date: 06-Feb-16
 * Time: 6:59 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');
Class Staffm extends CI_Model{

	public function get_staff($id){
		$field = 'user_id';
		$sch_id = $_SESSION['sch_id'];
		$this->db->where(array('acadah_users.sch_id'=>$sch_id,$field=>$id));
		$this->db->join('acadah_staff', 'acadah_staff.staff_id=acadah_users.user_id');
		$this->db->join('acadah_class_details', "acadah_class_details.class_teacher_id=acadah_staff.staff_id","Left");     
		$this->db->from('acadah_users');
		$query = $this->db->get();
		
		return $query->row_array();

	}

}