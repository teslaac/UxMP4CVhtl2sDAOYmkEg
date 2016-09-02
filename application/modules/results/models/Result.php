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
       $session_id = $this->Corem->ts_details($active_ts_id);
       $session_id = $session_id[0]['session_id'];
       //print_r($session_id);die();
        //Now query to gather subject id
        $this->db->select("stusub.*, ass.class_details_id, fname, lname, mname, app_subject.*, count(*) as count");
        $this->db->from('student_subjects stusub');
        $this->db->join("app_subject", "stusub.subject_id=app_subject.subject_id");
        $this->db->join("acadah_student_session ass", "ass.session_id='$session_id' and ass.student_id = stusub.student_id and ass.class_details_id = '$class_details_id'");
        // $this->db->join("student","student.student_id = stusub.student_id and student.admission_class_details_id='$class_details_id'");
        // $this->db->join("student_reg stureg", "stureg.student_id=stusub.student_id AND stureg.ts_id = $active_ts_id AND stureg.class_details_id = $class_details_id");
        $this->db->join("staff_subjects stasub", "stusub.subject_id=stasub.subject_id AND  stasub.class_details_id=$class_details_id and stasub.ts_id = '$active_ts_id'",'left');
        $this->db->join("users", "stasub.staff_id=users.user_id", 'left');
        $this->db->group_by('stusub.subject_id');
        $this->db->where("stusub.sch_id",$sch_id);
        $this->db->where("stusub.session_id",$session_id);
        $get = $this->db->get();
//         echo '<pre>';
//          print_r($this->db->last_query());
// echo '</pre>';
//        print_r($this->db->get()->result_array());
//       die();
        return $get->result_array();
    }


    public function pull_no_of_student_offering_subject($class_details_id){

    }

    public function get_student_details_for_subject($subject_id,$class_details_id,$ts_id=''){
        $sch_id = $_SESSION['sch_id'];
        //trying to fetch the active termsession
        $active_ts_id = $this->Corem->active_term_session('ts_id', $sch_id);
         if(!empty($ts_id)){
            $active_ts_id = $ts_id;
        }
       $session_id = $this->Corem->ts_details($active_ts_id);
       $session_id = $session_id[0]['session_id'];
        //Now query to gather subject id
        $this->db->select("student_subjects.*,users.fname,users.lname,users.mname,app_subject.*,ass.student_id,class_details.*,acadah_app_term_session.ts_id");
        $this->db->from('student_subjects');
        $this->db->join('acadah_app_term_session', "acadah_app_term_session.ts_id = '$active_ts_id'");
        $this->db->join("acadah_student_session ass", "ass.session_id='$session_id' and ass.student_id = student_subjects.student_id and ass.class_details_id = '$class_details_id'");
        $this->db->join('acadah_result', "acadah_result.student_id = ass.student_id and acadah_result.subject_id = '$subject_id' and acadah_result.class_details_id='$class_details_id' and acadah_result.ts_id ='$ts_id'",'left');
        
            $this->db->group_by('student_subjects.student_id');
        
        //
        // $this->db->join("student", "student_subjects.student_id=student.student_id");
        // $this->db->join("result_processed","student.student_id=result_processed.student_id and result_processed.subject_id = '$subject_id' and result_processed.class_details_id='$class_details_id' and result_processed.ts_id='$active_ts_id'","left");
        // $this->db->join('acadah_')
        $this->db->join("app_subject", "app_subject.subject_id = '$subject_id'");
//        $this->db->join("staff_subjects", "student_subjects.subject_id=staff_subjects.subject_id AND staff_subjects.term_id = $active_term_id");
        $this->db->join("users", "student_subjects.student_id=users.user_id");
        $this->db->join("class_details", "class_details.id = '$class_details_id' ");
//        $this->db->group_by('student_subjects.subject_id');
        $this->db->where("student_subjects.subject_id",$subject_id);
        $this->db->where("student_subjects.sch_id",$sch_id);
        $this->db->where("student_subjects.session_id", $session_id);
        // $this->db->where("student.admission_class_details_id",$class_details_id);

//        print_r($this->db->get()->result_array());
//       die();
//        return $this->db->get()->result_array();

         return $this->db->get()->result_array();
         // print_r($this->db->last_query());die();
    }

    public function process_score($s_id,$c_id){
        $sch_id = $_SESSION['sch_id'];
        $max = $this->input->post('max');
        $ts_id = $this->input->post('ts_id');
        $subject_id = $this->input->post('subject_id'); 
        //print_r($_POST);die();
        for ($i=1; $i <= $max ; $i++) { 
            $ca_id = 1;
            $exam_id = 1;
            $student_id = $this->input->post("user_id[$i]");
            foreach($_POST["ca$student_id"] as $ca){
            if(empty($ca_id)){
                $ca_id = 1;
            }
            if(empty($ca)){
                $ca = 0;
            }
            $data = array(
                'student_id' => $student_id,
                'class_details_id' => $c_id,
                'ts_id' => $ts_id,
                'subject_id' => $subject_id,
                'score' => $ca,
                'score_type' => "ca$ca_id",
                'sch_id' => $sch_id

                );

        $this->db->trans_begin();
        $this->db->on_duplicate('result',$data);
        $tran_id = $this->db->insert_id();
            $ca_id++;
        }
            foreach($_POST["exam$student_id"] as $exam){
                if(empty($exam_id)){
                    $exam_id = 1;
                }
                if(empty($exam)){
                $exam = 0;
            }
            $data = array(
                'student_id' => $student_id,
                'class_details_id' => $c_id,
                'ts_id' => $ts_id,
                'subject_id' => $subject_id,
                'score' => $exam,
                'score_type' => "exam$exam_id",
                'sch_id' => $sch_id

                );
            $this->db->on_duplicate('result',$data);
            $ca_id++;
            }
        
    }
    if ($this->db->trans_status() === FALSE){
                    $this->db->trans_rollback();
                     return FALSE;
                }else{
                    $this->db->trans_commit();
                   return TRUE;
                }
    //print_r($data);die();

}

    public function no_processed_result($where,$ts_id = ''){
        $sch_id = $_SESSION['sch_id'];
        if(empty($ts_id)){
            $ts_id = $this->Corem->active_term_session('ts_id', $sch_id);
        }
        $this->db->from('acadah_result');
        $this->db->where($where);
        $this->db->where('ts_id',$ts_id);
        $this->db->where('sch_id',$sch_id);
        $this->db->group_by('student_id');
        $query = $this->db->get();
        // die($this->db->last_query());
        return $query->num_rows();

    }

    public function pull_subject_scores($subject_id,$class_details_id,$student_id,$ts_id,$score_type=''){
        $sch_id = $_SESSION['sch_id'];
        $this->db->from('acadah_result');
        $this->db->where(array('student_id'=>$student_id,'subject_id'=>$subject_id,'class_details_id'=>$class_details_id,'ts_id'=>$ts_id,'sch_id'=>$sch_id));
        if(empty($score_type)){
            $this->db->order_by('score_type',"ASC");
            $query = $this->db->get()->result_array();
        }else{
            $this->db->where('score_type',$score_type);
            $query = $this->db->get()->row_array();
        }
        
        
        // print_r($query); die();
        return $query;
    }

    // public function grab_result($ts_id,$student_id){
    //     $sch_id = $_SESSION['sch_id'];
    //     $this->db->from('acadah_result');
    //     $this->db->join('users')
    //     $this->db->where('acadah_result.ts_id',$ts_id);
    //     $this->db->where('acadah_result.student_id',$student_id);
    // }

    public function ruser_details($ts_id,$student_id){
        $sch_id = $_SESSION['sch_id'];
        //trying to fetch the active termsession
        $active_ts_id = $this->Corem->active_term_session('ts_id', $sch_id);
         if(!empty($ts_id)){
            $active_ts_id = $ts_id;
        }
        $session_id = $this->Corem->ts_details($active_ts_id);
        $session_id = $session_id[0]['session_id'];
        $this->db->from('users');
        $this->db->join('student',"student.student_id = '$student_id'");
        $this->db->join('acadah_student_session',"acadah_student_session.session_id='$session_id' and acadah_student_session.student_id = '$student_id'");
        $this->db->join('acadah_class_details',"acadah_student_session.class_details_id=acadah_class_details.id");
        $this->db->join('acadah_app_term_session', "acadah_app_term_session.ts_id='$active_ts_id'");
        $this->db->join('acadah_app_term',"acadah_app_term_session.term_id=acadah_app_term.term_id");
        $this->db->join('acadah_app_session',"acadah_app_term_session.session_id = acadah_app_session.session_id");
        $this->db->where('user_id',$student_id);
        $this->db->where('users.sch_id',$sch_id);
        $query = $this->db->get()->row_array();
        return $query;
        // print_r($query);die();
    }

    public function get_score($ts_id,$subject_id,$type='max'){
        $sch_id = $_SESSION['sch_id'];
        $this->db->select("SUM(score) as score");
        $this->db->from('acadah_result');
        $this->db->where(array('subject_id'=>$subject_id,'ts_id'=>$ts_id,'sch_id'=>$sch_id));
        $this->db->group_by('student_id');
        $query = $this->db->get()->result_array();
        if($type == 'max'){
            $max = max($query);
         return $max['score'];
        }elseif($type == 'min'){
            $min = min ($query);
            return $min['score'];
        }
    }































}