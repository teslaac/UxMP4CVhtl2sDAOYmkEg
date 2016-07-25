<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prospectivem extends CI_Model {

public function update_user($updata){
       
       $this->db->get_where('acadah_users', array('user_id' => $_SESSION['user_id']));
       $this->db->update('acadah_users', $updata);
       
}

public function get_prospective_std($id)
        {
            $this->db->select('*');
            $this->db->from('acadah_users'); 
            $this->db->join('acadah_users_prospective', 'student_id=user_id', 'left');
            $this->db->where('user_id',$id);        
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




// function __construct() {
// parent::__construct();
// }
//          public function update_user($udata, $odata, $pudata, $pdata, $psdata){

//           $query = $this->db->where('id', $this->session->userdata('id'));
//           $query =  $this->db->update('acadah_users', $udata);
//           $insert_id = $this->db->insert_id;

//            if($query) {

//                $this->db->where('student_id', $this->session->userdata('student_id'));
//                $this->db->update('acadah_users_prospective', $odata);

//                $pdata = $this->db->insert('acadah_users', $pudata);
//               //  $insert_id = $this->db->insert_id;

//                $this->db->insert('acadah_parent', $pdata);
//                $this->db->insert('acadah_parent_student', $psdata);
//                 return $insert_id;
//            }

//       }
  	    // public function ad_insert($data, $data2) {

  	    //  $query =  $this->db->insert('acadah_users', $data);
  	    //   if(!$query) {
       //      echo "Unable to create user account";
  	    //   }


  	    // }
  }

?>
