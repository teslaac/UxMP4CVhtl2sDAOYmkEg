<?php
/**
 * Created by PhpStorm.
 * User: SALAKO
 * Date: 10-Feb-16
 * Time: 2:41 PM
 */
Class Corem extends CI_Model{
    /**
     * Function Written By Tes Sal
     *  Basically the function will query the database and return the number of column in the database
     * It collects one parameter which is the type of usertype to count for whether student,parent or staff
     * @param $usertype
     * @return numeric
     */
    public function get_no_usertype($usertype){
        $sch_id = $_SESSION['sch_id'];
        $this->db->select("*");
        $this->db->from('acadah_users');
        $this->db->where('sch_id',$sch_id);
        $this->db->where('user_type',$usertype);
        $query = $this->db->get();
        return $query->num_rows();
    }

    /**
     * Function Written By Tes Sal
     * The Function has no pparameters and basically just return the number of courses available to that particular school using session_sch_id
     * @return numeric
     */
    public function get_no_subjects($count = TRUE){
        $sch_id = $_SESSION['sch_id'];
        $join = array("acadah_app_subject", "acadah_app_subject.subject_id=acadah_school_subject.subject_id");

        $this->db->select("*");
        $this->db->from('acadah_school_subject');
        $this->db->join($join[0], $join[1]);
        $this->db->where('sch_id',$sch_id);
        $query = $this->db->get();
        if($count === TRUE) {
            return $query->num_rows();
        }else{
            return $query->result_array();
        }
    }

    public function get_no_class($count = TRUE){
        $sch_id = $_SESSION['sch_id'];
        $this->db->select("*");
        $this->db->from('acadah_class_details');
        if($_SESSION['user_type'] == 'staff'){
            $this->db->join('staff_subjects',"acadah_class_details.id=staff_subjects.class_details_id and staff_id = '$_SESSION[user_id]'");
            $this->db->group_by('staff_subjects.class_details_id');
        }
        $this->db->where('status','active');
        $this->db->where('acadah_class_details.sch_id',$sch_id);
        $query = $this->db->get();
        if($count === TRUE) {
            return $query->num_rows();
        }else{
            //die(print_r($query->result_array()));
            return $query->result_array();
        }
    }
    /**
     * Function Written By Tes Sal
     * This function gets the number of male/female in the database, It collects two parameters
     * The first one is the gender you wanna count for whether male/female
     * The second is the usertype whether for staff/student/parent
     * @param $gender
     * @param $usertype
     * @return numeric
     */
    public function get_no_gender($gender,$usertype){
        $sch_id = $_SESSION['sch_id'];
        $this->db->select("*");
        $this->db->from('acadah_users');
        $this->db->where('sch_id',$sch_id);
        $this->db->where('user_type',$usertype);
        $this->db->where('gender',$gender);
        $query = $this->db->get();
        return $query->num_rows();
    }

    /**
     * Function Written By Tes Sal
     * @param $search
     * Search is the item you wanna search for in the where query e.g. where $search = $search_key
     * @param $search_key
     * This is the value you are passing to the where query i.e. where $search = $search_key
     * @param $table
     * Table is the table you are joining on
     * @param $foreign_key
     * Foreign Key is the foreign key in that table
     * @param $where_table
     * Where_table is the table you are searching Select * from $where_table
     * @param $on
     * on is what would be used in the join query e.g.
     * SELECT * FROM $where_table JOIN $table ON $table.$foreign_key=$where_table.$on where $search = $search_key
     * @param bool $loop
     * Whether to return the last row or all rows, default is all rows
     * @param $more
     *
     * @return mixed
     */

    public function get_any($search,$search_key,$table,$foreign_key,$where_table,$on,$loop = TRUE){
        $sch_id = $_SESSION['sch_id'];
        if(empty($search)){
            $where = array("$where_table.sch_id"=>$sch_id);
        }else{
            $where = array("$where_table.sch_id"=>$sch_id,"$search"=>"$search_key");
        }
        if(!empty($table)){
            if($where_table == 'acadah_class_level'){
                $where['acadah_school_div.status'] = 'active';
                $this->db->select('acadah_class_level.*,acadah_school_div.school_div_name');
            }elseif($where_table == 'acadah_class_desc' and !empty($search)){
                $where['acadah_school_div.status'] = 'active';
                $this->db->select('acadah_class_desc.*,acadah_school_div.school_div_name');
            }
            $join = array("$table", "$table.$foreign_key=$where_table.$on");
            $query = $this->db->join($join[0], $join[1])->get_where($where_table, $where);
        }else{
            if($where_table == 'acadah_class_desc' and empty($search)){
                $where['acadah_class_desc.status'] = 'active';
            }
            $query = $this->db->get_where($where_table, $where);
        }
        //die ($this->db->last_query());
        if($loop === TRUE){
            return $query->result_array();
        }else {
            return $query->row_array();
        }
    }

    public function add_subject($sdata,$type){
        if($type == 'student'){
            $table = 'acadah_student_subjects';
        }elseif($type == 'staff'){
            $table = 'acadah_staff_subjects';
        }
        $query = $this->db->insert($table,$sdata);
        if(!$query){
            return FALSE;
        }else{
            return TRUE;
        }
    }

    public function get_session($count = TRUE){
        $sch_id = $_SESSION['sch_id'];
        //$join = array("acadah_app_session", "acadah_school_session.session_id=acadah_app_session.session_id");

        $this->db->select("*");
        $this->db->from('acadah_school_session');
        $this->db->join('acadah_app_session', 'acadah_school_session.session_id=acadah_app_session.session_id');
        //$this->db->join($join[0], $join[1]);
        $this->db->where('sch_id',$sch_id);
        $query = $this->db->get();
        if($count === TRUE) {
            return $query->num_rows();
        }else{
            return $query->result_array();
        }
    }

    // public function term_session(){
    //     $sch_id = $_SESSION['sch_id'];
    //     $where = array('acadah_term_session.sch_id'=>$sch_id,'acadah_school_session.sch_id'=>$sch_id,'acadah_school_term.sch_id'=>$sch_id);
    //     $join = array("acadah_school_session", "acadah_term_session.session_id=acadah_school_session.session_id");
    //     $join1 = array("acadah_app_session", "acadah_app_session.session_id=acadah_term_session.session_id");
    //     $join2 = array("acadah_school_term", "acadah_school_term.term_id=acadah_term_session.term_id");
    //     $this->db->select("*");
    //     $this->db->from('acadah_term_session');
    //     $this->db->join($join[0], $join[1]);
    //     $this->db->join($join1[0], $join1[1]);
    //     $this->db->join($join2[0], $join2[1]);
    //     $this->db->where($where);
    //     $query = $this->db->get();
    //         return $query->result_array();

    // }

//awonugaso
public function active_term_session($field = '', $sch_id){
        
        $this->db->from('acadah_app_term_session sts');
        $this->db->join("acadah_school_term_session ats", "ats.ts_id = sts.ts_id and ats.sch_id ='$sch_id' and ts_active = 'active'");
        $this->db->join("acadah_school_session sses", "sts.session_id=sses.session_id and sses.sch_id ='$sch_id'");
        $this->db->join("acadah_school_term sterm", "sts.term_id=sterm.term_id and sterm.sch_id ='$sch_id'");
        $query = $this->db->get();
        //die ($this->db->last_query());

        if( $field === ''){ //then all fields are needed
            return $query->result_array();
        }else{ //send only the requested field
            return $query->result_array()[0]['ts_id'];
        }
    }

    //awonugaso
public function term_session($sch_id, $field = 'all', $active = '' ){
        
        $this->db->from('acadah_app_term_session sts');
        $this->db->join("acadah_school_term sterm", "sts.term_id=sterm.term_id and sterm.sch_id ='$sch_id' and sterm.status = 'active'");
        $this->db->join("acadah_school_session sses", "sts.session_id=sses.session_id and sses.sch_id ='$sch_id'");
        $this->db->join("acadah_school_term_session ats", "ats.ts_id = sts.ts_id and ats.sch_id ='$sch_id'");
        $this->db->join("acadah_app_session appsses", "sts.session_id=appsses.session_id");
        if($active){
            $this->db->where('ts_active', 1);
        }
        $query = $this->db->get();
        //die ($this->db->last_query());
        
        if( $field === 'all'){ //then all fields are needed
            //die(print_r($query->result_array()));
            return $query->result_array();
        }else{ //send only the requested field
            return $query->result_array()[0][$field];
        }
    }

    public function get_app_any($count = FALSE,$table,$list_all = FALSE){
        $this->db->select("*");
        $this->db->from("acadah_app_".$table);
        if($list_all === FALSE){
        if($table == "term"){
            $this->db->join("acadah_school_term","acadah_app_term.term_id=acadah_school_term.term_id and acadah_school_term.status = 'active' ");
        }elseif($table == "div"){
            $this->db->join("acadah_school_div","acadah_app_div.school_div_id=acadah_school_div.school_div_id and acadah_school_div.status = 'active' ","left");
        }elseif($table == "level"){
            $this->db->join("acadah_class_level","acadah_app_level.level_id=acadah_class_level.level_id and acadah_class_level.status = 'active'");
        }
        $this->db->where("sch_id",$_SESSION['sch_id']);
    }
        if($table == 'subject_dept'){
            $this->db->where("status",'active');
        }
        $query = $this->db->get();
        if($count === TRUE) {
            return $query->num_rows();
        }else{
            return $query->result_array();
        }
    }



    public function subjects_details($id,$count = FALSE, $type){
        $sch_id = $_SESSION['sch_id'];
        if($type == 'student'){
            $table = 'acadah_student_subjects';
            $user_id = 'student_id';
        }elseif($type == 'staff'){
            $table = 'acadah_staff_subjects';
            $user_id = 'staff_id';
            $join1 = array("acadah_class_details", "acadah_class_details.id=$table.class_details_id");
        }
        $join = array("acadah_app_subject", "acadah_app_subject.subject_id=$table.subject_id");
        $join2 = array("acadah_app_session", "acadah_app_session.session_id=$table.session_id");
        $where = array("$table.sch_id"=>$sch_id,$user_id=>$id);

        $this->db->select("*");
        $this->db->from($table);
        $this->db->join($join[0], $join[1]);
        if($type== 'staff') {
            $this->db->join($join1[0], $join1[1]);
        }
        $this->db->join($join2[0], $join2[1]);
        $this->db->where($where);
        $query = $this->db->get();
        if($count === TRUE) {
            return $query->num_rows();
        }else{
            return $query->result_array();
        }
    }

    public function get_states(){
        $this->db->select("*");
        $this->db->from('acadah_app_states');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_sport_house(){
        $sch_id = $_SESSION['sch_id'];
        $this->db->select("*");
        $this->db->from('acadah_sport_house');
        $this->db->where('sch_id',$sch_id);
        $query = $this->db->get();
        return $query->result_array();
    }


    /**
     * Generate a License Key.
     * Optional Suffix can be an integer or valid IPv4, either of which is converted to Base36 equivalent
     * If Suffix is neither Numeric or IPv4, the string itself is appended
     *
     * @param   string  $suffix Append this to generated Key.
     * @return  string
     */
    function generate_license($suffix = null) {
        // Default tokens contain no "ambiguous" characters: 1,i,0,o
        if(isset($suffix)){
            // Fewer segments if appending suffix
            $num_segments = 3;
            $segment_chars = 6;
        }else{
            $num_segments = 4;
            $segment_chars = 5;
        }
        $tokens = 'ABCDEFGHJKLMNPQRSTUVWXYZ23456789';
        $license_string = '';
        // Build Default License String
        for ($i = 0; $i < $num_segments; $i++) {
            $segment = '';
            for ($j = 0; $j < $segment_chars; $j++) {
                $segment .= $tokens[rand(0, strlen($tokens)-1)];
            }
            $license_string .= $segment;
            if ($i < ($num_segments - 1)) {
                $license_string .= '-';
            }
        }
        // If provided, convert Suffix
        if(isset($suffix)){
            if(is_numeric($suffix)) {   // Userid provided
                $license_string .= '-'.strtoupper(base_convert($suffix,10,36));
            }else{
                $long = sprintf("%u\n", ip2long($suffix),true);
                if($suffix === long2ip($long) ) {
                    $license_string .= '-'.strtoupper(base_convert($long,10,36));
                }else{
                    $license_string .= '-'.strtoupper(str_ireplace(' ','-',$suffix));
                }
            }
        }
        return $license_string;
    }

    public function save_school($udata,$odata,$edit = FALSE){
        if($edit === FALSE){
            $this->db->insert('acadah_school',$odata);
            $sch_id = $this->db->insert_id();
            $activation_code = $this->generate_license($sch_id);
            $this->db->update('acadah_school',array('activation_code'=>md5($activation_code)),array('id'=>$sch_id));
            $query = $this->db->insert('acadah_users',$udata);
            if($query) {
                $usercode = $odata['sch_id'] . "-" . $this->db->insert_id();
                $this->db->set('user_id', $usercode);
                $this->db->where('id', $this->db->insert_id());
                $usercode_update = $this->db->update('acadah_users');
                $subject = "$odata[sch_full_name] Registration Successful and Activation Code<br/>";
                $message = "Your registration on Acadah was successful and below are the details you need to login and activate your school<br/>";
                $message .= "Login URL: base_url()<br/>";
                $message .= "Email: $udata[email]<br/>";
                $message .= "Password: Your Password<br/>";
                $message .= "Activation Code: $activation_code";
                $to = $udata['email'];
                //  $this->send_emails($to,$subject,$message);
                $this->session->set_flashdata('activation_code', $activation_code);
                $this->session->set_flashdata('email', $to);
            }
        }else{

            $query = $this->db->update('acadah_school',$odata,array('sch_id'=>$_SESSION['sch_id']));
            if($query){
                $this->db->update('acadah_users',$udata,array('sch_id'=>$_SESSION['sch_id'],'user_type'=>'superadmin'));
            }
        }

        if($query){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function send_emails($to,$subject,$message){
        $config['mailtype'] = 'html';
        $this->email->initialize($config);
        $this->email->from('support@acadah.com', 'Acadah Inc');
        $this->email->to($to);
//        $this->email->cc('another@another-example.com');
//        $this->email->bcc('them@their-example.com');

        $this->email->subject($subject);
        $this->email->message($message);

        return $this->email->send();
    }

    public function get_school_details($sch_id = FALSE){
        if($sch_id === FALSE) {
            $sch_id = $_SESSION['sch_id'];
        }
        $join = array("acadah_users", "acadah_users.sch_id=acadah_school.sch_id");
        $where = array("acadah_school.sch_id"=>$sch_id,"acadah_users.user_type"=>"superadmin");
        $this->db->select("*");
        $this->db->from('acadah_school');
        $this->db->join($join[0], $join[1]);
        $this->db->where($where);
        $query = $this->db->get();
//        print_r($query->row_array());die();
        return $query->row_array();
    }

    public function classd_details($level_id = NULL){
        $sch_id = $_SESSION['sch_id'];
        $join = array("acadah_class_desc", "acadah_class_details.desc_id=acadah_class_desc.id and acadah_class_desc.status = 'active'");
        $join1 = array("acadah_class_level", "acadah_class_details.level_id=acadah_class_level.level_id and acadah_class_level.status = 'active'");
        $where = array("acadah_class_details.sch_id"=>$sch_id,"acadah_class_desc.sch_id"=>$sch_id,"acadah_class_level.sch_id"=>$sch_id);
        $this->db->select("acadah_class_details.*,acadah_class_desc.class_desc_name,acadah_class_level.class_name,acadah_users.fname,acadah_users.lname");
        $this->db->from('acadah_class_details');
        $this->db->join($join[0], $join[1]);
        $this->db->join($join1[0], $join1[1]);
        $this->db->join("acadah_users", "acadah_class_details.class_rep_id=acadah_users.user_id","left");
        $this->db->where($where);
        if($level_id !== NULL){
            $this->db->where("acadah_class_details.level_id",$level_id);
        }
        $query = $this->db->get();
//        print_r($query->row_array());die();
        return $query->result_array();
    }

    public function subject_details(){
        $active_ts = $this->active_term_session("ts_id",$_SESSION['sch_id']);
        $sch_id = $_SESSION['sch_id'];
        $join = array("acadah_app_subject_dept", "acadah_app_subject_dept.dept_id=acadah_school_subject.department_id");
        $join1 = array("acadah_school_div", "acadah_school_div.school_div_id=acadah_school_subject.school_div_id and acadah_school_div.status = 'active' ");
        $join2 = array("acadah_app_subject", "acadah_app_subject.subject_id=acadah_school_subject.subject_id");
        $where = array("acadah_school_subject.sch_id"=>$sch_id,"acadah_school_div.sch_id"=>$sch_id);
        $this->db->select("acadah_school_subject.*,acadah_app_subject.subject_name,acadah_app_subject.subject_full_name,acadah_school_div.school_div_name,acadah_app_subject_dept.dept_name");
        $this->db->from('acadah_school_subject');
        $this->db->join($join[0], $join[1]);
        $this->db->join($join1[0], $join1[1]);
        $this->db->join($join2[0], $join2[1]);
        if($_SESSION['user_type'] == 'staff'){
            $this->db->join('staff_subjects',"acadah_school_subject.subject_id=staff_subjects.subject_id and staff_subjects.staff_id = '$_SESSION[user_id]' and staff_subjects.ts_id = '$active_ts'");
            $this->db->group_by('staff_subjects.subject_id');

        }
        $this->db->where($where);
        $query = $this->db->get();
//        print_r($query->row_array());die();
        return $query->result_array();
    }

    public function sd_details(){
        $sch_id = $_SESSION['sch_id'];
        $join = array("acadah_app_subject_dept", "acadah_app_subject_dept.dept_id=acadah_subject_dept.dept_id");
        //$join1 = array("acadah_app_level", "acadah_class_details.class_level=acadah_app_level.level_id");
        $where = array("acadah_subject_dept.sch_id"=>$sch_id);
        $this->db->select("acadah_subject_dept.*,acadah_app_subject_dept.dept_name,acadah_users.fname,acadah_users.lname");
        $this->db->from('acadah_subject_dept');
        $this->db->join($join[0], $join[1]);
        $this->db->join("acadah_users", "acadah_subject_dept.staff_id=acadah_users.user_id","left");

       // $this->db->join($join1[0], $join1[1]);
        $this->db->where($where);
        $query = $this->db->get();
//        print_r($query->row_array());die();
        return $query->result_array();
    }

    public function save_setup($table,$data,$edit = FALSE){
    if($table == 'acadah_school_term_session'){
           //Firstly am gonna need to check for the ts_id in the acadah_app_term_session table
         $this->db->from("acadah_app_term_session");
         $this->db->where(array('term_id'=>$data['term_id'],'session_id'=>$data['session_id']));
         $cquery = $this->db->get();
         $cquery = $cquery->result_array();

         if($this->db->where(array('term_id'=>$data['term_id'],'session_id'=>$data['session_id']))->count_all_results('acadah_app_term_session') < 1){
            $notice = "<center> The selected term and session are not available yet</center>";
            return $notice;
         }
         unset($data['term_id']);
         unset($data['session_id']);
         $data['ts_id'] = $cquery[0]['ts_id'];
         
         // print_r($cquery[0]['ts_id']);
         // die();
        }

    if($edit === FALSE){
        $query = $this->db->insert($table,$data);
    }else{
        if($table == 'acadah_school_session'){
        $query = $this->db->update($table,$data,array('sch_id'=>$_SESSION['sch_id'],'id'=>$edit));}
        else{
            $query = $this->db->update($table,$data,array('sch_id'=>$_SESSION['sch_id'],'id'=>$edit));
        }
    }
        if($query){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function validate_license($license){
        $sch_id = $_SESSION['sch_id'];
        $this->db->select("*");
        $this->db->from('acadah_school');
        $this->db->where('activation_code',$license);
        $this->db->where('sch_id',$sch_id);
        $query = $this->db->get();
        $count = $query->num_rows();
        if($count == 1){
            $this->db->update('acadah_school',array('activated_status'=>'1'),array('sch_id'=>$sch_id));
        }
        return $query->num_rows();
    }

    public function complete_setup(){
        if($this->db->where("sch_id",$_SESSION['sch_id'])->count_all_results('acadah_school_session') < 1){
            return "Session";
        }elseif($this->db->where("sch_id",$_SESSION['sch_id'])->count_all_results('acadah_school_term') < 1){
            return "Term";
        }elseif($this->db->where("sch_id",$_SESSION['sch_id'])->count_all_results('acadah_school_term_session') < 1){
            return "Active Term";
        }elseif($this->db->where("sch_id",$_SESSION['sch_id'])->count_all_results('acadah_school_div') < 1){
            return "School Division";
        }elseif($this->db->where("sch_id",$_SESSION['sch_id'])->count_all_results('acadah_class_level') < 1){
            return "Class Level";
        }elseif($this->db->where("sch_id",$_SESSION['sch_id'])->count_all_results('acadah_class_desc') < 1){
            return "Class Description";
        }elseif($this->db->where("sch_id",$_SESSION['sch_id'])->count_all_results('acadah_class_details') < 1){
            return "Class Details";
        }elseif($this->db->where("sch_id",$_SESSION['sch_id'])->count_all_results('acadah_subject_dept') < 1){
            return "Subject Department";
        }elseif($this->db->where("sch_id",$_SESSION['sch_id'])->count_all_results('acadah_school_subject') < 1){
            return "Subject";
        }
        $core_init = $this->Corem->module_manager();
        if($core_init === TRUE){
            if (!file_exists("assets/$_SESSION[sch_id]")) {
                 mkdir("assets/$_SESSION[sch_id]", 0777, true);
            }
        $this->db->update('acadah_school',array('setup_status'=>'Completed'),array('sch_id'=>$_SESSION['sch_id']));
        $_SESSION['setup_status'] = 'Completed';
        return TRUE;
        }else{
            return "An Error Occured";
        }
    }

    /**
     * Function Written By Wale
     */

    public function get_details($table, $field, $id ) {
         $this->db->from($table);
         $this->db->where($field, $id);
         $query = $this->db->get();

        return $query->result_array();
    }

    public function get_details_join($table, $field, $id, $foreign_table, $foreign_field, $foreign_id) {
         $this->db->from($table);
         $this->db->where($field, $id);
         $this->db->join($foreign_table, $foreign_field = $foreign_id);

         $query = $this->db->get();

          return $query->result_array();
    }
    
    public function get_parent_details() {
        $this->db->select ('*'); 
        $this->db->from ('User');
        $this->db->join ('Parent', 'Parent.parent_id = User.parent_id' , 'left');
        $this->db->join ('Parent_student', 'Parent_student.parent_id = User.user_id' , 'left');
        $query = $this->db->get();
        return $query->result();
    }

    /**
    * Tes Sal Continued
    * @param string $table
    *  $table is the name of the table you wanna change the status
    * @param int $id
    * $id is the id of the row you wanna change the status e.g. where id = $id;
    * @param string $status
    * $status is the status you wanna change into e.g. active/inactive/pending/completed etc
    * @param string $field
    * $field is the name the status field is called in the db default is status e.g. set $field = 'active' 
    **/

    public function status($table,$id,$status,$field){
         $query = $this->db->update("$table",array("$field"=>$status),array('id'=>$id));
         if($query){
            return TRUE;
         }else{
            return FALSE;
         }
    }

    public function module_manager ($module_type = 'core',$module_id = NULL,$status = 'active'){
        if($module_id !== NULL){
            $query = $this->db->get_where('app_modules',array('module_id'=>$module_id,'module_status'=>'active'));
        }else{
        $query = $this->db->get_where('app_modules',array('module_type'=>$module_type,'module_status'=>'active'));
        }
        $query = $query->result_array();
        foreach ($query as $query) {

            //This is the array of data I will dump inside the School_modules Table
            $smdata = array(
                    'module_id' => $query['module_id'],
                    'sch_id' => $_SESSION['sch_id'],
                    'status' => $status,
                    'version' => $query['module_version']
                );
            //Here am checking if the module requires settings
            if(!empty($query['settings_url'])){
                $smdata['settings_status'] = "pending";
            }
            $this->db->trans_begin();
            $this->db->on_duplicate('school_modules', $smdata);
            $tran_id = $this->db->insert_id();
            $smadata = $this->Corem->smadata($smdata['module_id'],$status);
        }
        if($smadata === TRUE){
                return TRUE;
            }else{
                return FALSE;
            }

    }

    public function smadata($module_id,$status){
        //Smadata is the array of data I will dump inside School Module Action table
         $smaquery = $this->db->get_where('app_modules_actions',array('module_id'=>$module_id));
         $smaquery = $smaquery->result_array();
         foreach ($smaquery as $smaquery) {
             $smadata = array(
                'action_id' => $smaquery['action_id'],
                'sch_id' => $_SESSION['sch_id'],
                'status' => $status
            );
             $this->db->on_duplicate('school_modules_actions', $smadata);
             //Pdata is the array of data I will dump inside Users Permission Table
             $pdata = array(
                    'dashboard' => $smaquery['dashboard'],
                    'access_user_id' => $smaquery['usertype'],
                    'access_user_type' => 'group',
                    'action_id' => $smaquery['action_id'],
                    'sch_id' => $_SESSION['sch_id'],
                    'status' => $status
                );
             $this->db->on_duplicate('users_permissions_actions', $pdata);

         }
         if ($this->db->trans_status() === FALSE){
                    $this->db->trans_rollback();
                    return FALSE;
                }else{
                    $this->db->trans_commit();
                    return TRUE;
                }
             // print_r($pdata);
             //$this->db->on_duplicate('database_table', $array);
    }

    public function get_roles($status=FALSE,$join = FALSE){
        $sch_id = $_SESSION['sch_id'];
        $this->db->from("school_roles");
        if($join != FALSE){
            $this->db->select("school_roles.*,users_roles.user_id");
            $this->db->join("users_roles","school_roles.id=users_roles.role_id and users_roles.user_id = '$join'","left");
        }
        $this->db->where("sch_id",$sch_id);
        if($status == TRUE){
        $this->db->where("status",'active');
    }
        //print_r($this->db->get()->result_array());die();
        return $this->db->get()->result_array();
    }

    public function save_role($data){
        return $this->db->on_duplicate('school_roles', $data);
    }

    public function mcp($data){
    $query = $this->db->insert('users_permissions_actions',$data);
    return $query;
    }

    public function assign_courses($table){
        if($table == 'student_subjects'){
            $subject_ids = $this->input->post('subject_id[]');
            $student_ids = $this->input->post('student_id[]');
            $this->db->trans_begin();
            foreach ($subject_ids as $subject_id) {
                foreach ($student_ids as $student_id) {
                    $data = array(
                        'student_id' => $student_id,
                        'subject_id' => $subject_id,
                        'ts_id'      => $this->input->post('ts_id'),
                        'sch_id'     => $_SESSION['sch_id']
                        );                   
            $this->db->on_duplicate($table, $data);
            $tran_id = $this->db->insert_id();
                }

            }

        }elseif($table == 'staff_subjects'){
            $classd = $this->input->post('classd[]');
            $this->db->trans_begin();
            foreach ($classd as $classd) {                
                    $data = array(
                        'staff_id' => $this->input->post('staff_id'),
                        'subject_id' => $this->input->post('subject_id'),
                        'ts_id'      => $this->input->post('ts_id'),
                        'sch_id'     => $_SESSION['sch_id'],
                        'class_details_id' => $classd
                        );                   
            $this->db->on_duplicate($table, $data);
            $tran_id = $this->db->insert_id();              
            }
        }
        if ($this->db->trans_status() === FALSE){
                    $this->db->trans_rollback();
                    return FALSE;
                }else{
                    $this->db->trans_commit();
                    return TRUE;
                }
    }



    public function get_registered_subject($type){
        $sch_id = $_SESSION['sch_id'];
        $ts_id = $this->input->post('ts_id');
        if($type == 'class'){
        $class_id = $this->input->post('cdid');
        $subject_id = $this->input->post('subject_id');
        $this->db->select("acadah_users.fname,acadah_users.lname,acadah_student_subjects.*");
        $this->db->join('acadah_student',"acadah_student.student_id = acadah_users.user_id and acadah_student.admission_class_details_id='$class_id'");
        $this->db->join('acadah_student_subjects',"acadah_student_subjects.student_id = acadah_student.student_id and acadah_student_subjects.subject_id = '$subject_id' and acadah_student_subjects.ts_id='$ts_id' and acadah_student_subjects.sch_id='$sch_id'");
        $this->db->from('acadah_users');
        $this->db->where("acadah_users.sch_id",$sch_id);
        }elseif($type == 'student'){
            $student_id = $this->input->post('student_id');
            $this->db->from('acadah_student_subjects');
            $this->db->join('acadah_app_subject', "acadah_student_subjects.subject_id=acadah_app_subject.subject_id");
            $this->db->where('student_id',$student_id);
            $this->db->where('ts_id',$ts_id);
        }
        $query = $this->db->get()->result_array();

        
        return $query;
    }


    public function get_unregistered_student($class_id,$subject_id,$ts_id){
        $sch_id = $_SESSION['sch_id'];
        $this->db->select("student_id");
        $this->db->from("acadah_student_subjects");
        $this->db->where(array('subject_id'=>$subject_id,'ts_id'=>$ts_id));
        $students = $this->db->get()->result_array();
        $stid = array();
        if(!empty($students)){
            foreach($students as $student){
            $stid[] = $student['student_id'];
        }
        $this->db->where_not_in('acadah_users.user_id',$stid);
        }
        $this->db->from('acadah_users');
        $this->db->join('acadah_student',"acadah_users.user_id=acadah_student.student_id and acadah_student.admission_class_details_id='$class_id'");
        $this->db->where('acadah_users.sch_id',$sch_id);
        $query = $this->db->get()->result_array();
        //die ($this->db->last_query());
        return $query;
    }

    public function get_staff_registered_subject(){
        $sch_id = $_SESSION['sch_id'];
        $ts_id = $this->input->post('ts_id');
        $staff_id = $this->input->post('staff_id');
        $this->db->select("acadah_staff_subjects.*,acadah_class_details.class_details,acadah_app_subject.*");
        $this->db->from('acadah_staff_subjects');
        $this->db->join('acadah_class_details',"acadah_class_details.id=acadah_staff_subjects.class_details_id");
        $this->db->join("acadah_app_subject", "acadah_app_subject.subject_id = acadah_staff_subjects.subject_id");
        $this->db->where('acadah_staff_subjects.sch_id',$sch_id);
        $this->db->where('acadah_staff_subjects.staff_id',$staff_id);
        $this->db->where('acadah_staff_subjects.ts_id',$ts_id);
        $query = $this->db->get()->result_array();
        return $query;
    }
}