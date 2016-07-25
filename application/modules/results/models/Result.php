<?php
/**
 * Created by PhpStorm.
 * User: SALAKO
 * Date: 28-Mar-16
 * Time: 8:39 AM
 */
Class Result extends CI_Model{

    public function pull_class_details(){
        $sch_id = $_SESSION['sch_id'];

        $this->db->select("class_details.*,users.fname,users.lname,users.mname");
        $this->db->from('class_details');
        $this->db->join("users", "class_details.class_teacher_id=users.user_id", "left");
        $this->db->where("class_details.sch_id",$sch_id);
//        and class_details.sch_id ='".$sch_id."'
//        print_r($this->db->get()->result_array());
//        die();
        return $this->db->get()->result_array();

    }

    public function pull_no_of_student_in_class($class_details_id){
      return  $this->db
            ->where('admission_class_details_id',$class_details_id)
            ->count_all_results('student');
    }

    public function pull_class_students($class_details_id,$ts_id = ''){
        $sch_id = $_SESSION['sch_id'];
        $active_ts_id = $this->Corem->active_term_session('ts_id', $sch_id);
        if(!empty($ts_id)){
            $active_ts_id = $ts_id;
        }
       
        //Now query to gather subject id
        $this->db->select("stusub.*, student.admission_class_details_id, fname, lname, mname, app_subject.*, count(*) as count");
        $this->db->from('student_subjects stusub');
        $this->db->join("app_subject", "stusub.subject_id=app_subject.subject_id");
        $this->db->join("student","student.student_id = stusub.student_id and student.admission_class_details_id='$class_details_id'");
        // $this->db->join("student_reg stureg", "stureg.student_id=stusub.student_id AND stureg.ts_id = $active_ts_id AND stureg.class_details_id = $class_details_id");
        $this->db->join("staff_subjects stasub", "stusub.subject_id=stasub.subject_id AND  stasub.class_details_id=$class_details_id and stasub.ts_id = '$active_ts_id'",'left');
        $this->db->join("users", "stasub.staff_id=users.user_id", 'left');
        $this->db->group_by('stusub.subject_id');
        $this->db->where("stusub.sch_id",$sch_id);
        $this->db->where("stusub.ts_id",$active_ts_id);
        $get = $this->db->get();
        echo '<pre>';
         print_r($this->db->last_query());
echo '</pre>';
//        print_r($this->db->get()->result_array());
//       die();
        return $get->result_array();
    }


    public function pull_no_of_student_offering_subject($class_details_id){

    }

    public function get_student_details_for_subject($subject_id,$class_details_id,$ts_id){
        $sch_id = $_SESSION['sch_id'];
        //trying to fetch the active termsession
        $active_ts_id = $this->Corem->active_term_session('ts_id', $sch_id);
         if(!empty($ts_id)){
            $active_ts_id = $ts_id;
        }
        //Now query to gather subject id
        $this->db->select("student_subjects.*,result_processed.test_score1,result_processed.exam_score,result_processed.total_score,users.fname,users.lname,users.mname,app_subject.*,student.student_id,class_details.*");
        $this->db->from('student_subjects');
        $this->db->join("student", "student_subjects.student_id=student.student_id");
        $this->db->join("result_processed","student.student_id=result_processed.student_id and result_processed.subject_id = '$subject_id' and result_processed.class_details_id='$class_details_id' and result_processed.ts_id='$active_ts_id'","left");
        $this->db->join("app_subject", "app_subject.subject_id = '$subject_id'");
//        $this->db->join("staff_subjects", "student_subjects.subject_id=staff_subjects.subject_id AND staff_subjects.term_id = $active_term_id");
        $this->db->join("users", "student_subjects.student_id=users.user_id");
        $this->db->join("class_details", "class_details.id = '$class_details_id' ");
//        $this->db->group_by('student_subjects.subject_id');
        $this->db->where("student_subjects.subject_id",$subject_id);
        $this->db->where("student_subjects.sch_id",$sch_id);
        $this->db->where("student_subjects.ts_id", $active_ts_id);
        $this->db->where("student.admission_class_details_id",$class_details_id);

//        print_r($this->db->get()->result_array());
//       die();
//        return $this->db->get()->result_array();
        return $this->db->get()->result_array();

    }

    public function process_score($data){
        $sch_id = $_SESSION['sch_id'];
        $data['sch_id'] = $sch_id;
        //Probably first check if the data exist in the table if it does then I just update if not I create
         // $this->db->select("*");
         // $this->db->from('result_scores');
         // $this->db->where('sch_id',$sch_id);
         // $this->db->where('subject_id',$data['subject_id']);
         // $this->db->where('term_id',$data['term_id']);
         // $this->db->where('student_id',$data['student_id']);
         // $query = $this->db->get();
         // $count = $query->num_rows();
         // if($count < 1){
        $insert = $this->db->on_duplicate('result_processed',$data);
    // }else{
        // $insert = $this->db->update('result_scores',$data,array('student_id'=>$data['student_id']));
    // }
        if($insert){
           
            return TRUE;
        }else{
          
            return FALSE;
        }
    }


    public function no_processed_result($where,$ts_id = ''){
        $sch_id = $_SESSION['sch_id'];
        if(empty($ts_id)){
            $ts_id = $this->Corem->active_term_session('ts_id', $sch_id);
        }
        $this->db->from('result_processed');
        $this->db->where($where);
        $this->db->where('ts_id',$ts_id);
        $this->db->where('sch_id',$sch_id);
        $query = $this->db->get();
        return $query->num_rows();

    }



































}