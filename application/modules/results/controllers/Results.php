<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require (APPPATH."modules/core/controllers/secure_area.php");

class Results extends Secure_area {

	public function __construct()
	{
		$this->data['title']= $this->data['module'] = 'results';
		//$this->data['classes'] = $this->corem->get_class_by_id();
		$this->load->model('result');
		$this->data['classes'] = $this->result->pull_class_details();
		$this->data['subject_details'] = $this->Corem->subject_details();
		foreach($this->data['classes'] as $classes){
			if(empty($i)){
				$i = 0;
			}
		$this->data['classes'][$i]['no_of_student'] =	$this->result->pull_no_of_student_in_class($classes['id']);
		$this->data['classes'][$i]['no_of_processed'] =	$this->result->no_processed_result(array('class_details_id'=>$classes['id']));

			$i++;
		}
		$this->data['ts_details'] = $this->Corem->term_session("$_SESSION[sch_id]");
		$this->load->model('Students/Student');
//		print_r($this->data['classes']);
//		die();
		parent::__construct($this->data['module']);
	}

	public function index()
	{
		//var_dump($this->data);
		$this->data['page'] = 'results';
		$this->load->template('results/admin_exam',$this->data);
	}



	public function scores($action = 'view', $subject_id = NULL, $class_details_id = NULL)
	{
		$this->data['page'] = 'results';

		if ($action === 'process'){
			$this->data['class_details'] = $this->result->get_student_details_for_subject($subject_id,$class_details_id);
			foreach($this->data['class_details'] as $class_details){
				if(empty($i)){
					$i = 0;
				}
			$this->data['class_details'][$i]['score'] = $this->result->pull_subject_scores($subject_id,$class_details_id,$class_details['student_id'],$class_details['ts_id']);
			$i++;
			}
			$this->data['scores'] = $this->Corem->get_details('acadah_school_scores', 'sch_id', $_SESSION['sch_id']);
			// print_r($this->data['class_details']);die();
			$this->load->template('results/process_exam', $this->data);
		}else {
			$class_details_id = $this->input->get('classes');
			if(!empty($class_details_id)){
			$this->data['class_students'] = $this->result->pull_class_students($class_details_id);}
		 	$this->load->template('results/scores', $this->data);
		 }
		
	}
	public function scoresheet($action = 'view')
	{
		$this->data['page'] = 'Score Sheet';
		$this->data['scores'] = $this->Corem->get_details('acadah_school_scores', 'sch_id', $_SESSION['sch_id']);
		if ($action === 'print'){
			$this->load->view('results/print_score_sheet',$this->data);
		}else {
			$this->load->template('results/score_sheet',$this->data);
		 }
		
	}
	public function reportsheet($action = 'view',$ts_id='',$student_id='')
	{
		$this->data['page'] = $this->data['title']= 'Report Sheet';
		if ($action === 'print'){
			$this->data['ruser_details'] = $this->result->ruser_details($ts_id,$student_id);
			$this->data['ruser_details']['no_in_class'] = $this->result->pull_no_of_student_in_class($this->data['ruser_details']['class_details_id']);
			$this->data['rsubjects'] = $this->Corem->get_registered_subject('student',$this->data['ruser_details']['session_id'],$student_id);
			$this->data['scores'] = $this->Corem->get_details('acadah_school_scores', 'sch_id', $_SESSION['sch_id']);
			// print_r($this->data['rsubjects']);die();
			//$this->data['results'] = $this->result->grab_result($ts_id,$student_id);
			$this->load->view('results/print_result', $this->data);
		}
		elseif ($action === 'printall'){
			$this->load->template('results/print_all_result', $this->data);
		}elseif($action === 'settings'){
			$this->load->template('results/scoresettings', $this->data);
		}
		else {
			$this->load->template('results/report_sheet',$this->data);
		 	
		 }
		
	}	

	public function settings()
	{
		$sch_id = $_SESSION['sch_id'];
		$this->data['comments'] = $this->Corem->get_details('acadah_result_comments', 'sch_id', $sch_id);
		$this->data['scores'] = $this->Corem->get_details('acadah_school_scores', 'sch_id', $sch_id);
		$this->data['page'] = 'Settings';
		$this->load->template('results/settings/resultsettings',$this->data);
	}

	public function save_comment($id=''){
		$sch_id = $_SESSION['sch_id'];
		$data = array(
			'start_value' => $this->input->post('start_value'),
			'end_value' => $this->input->post('end_value'),
			'principal_comment' => $this->input->post('principal_comment'),
			'class_teacher_comment' => $this->input->post('class_teacher_comment'),
			'promotion_comment' => $this->input->post('promotion_comment'),
			'hostel_master_comment' => $this->input->post('hostel_master_comment'),
			'sch_id' => $sch_id
			);
		if(!empty($id)){
			$query = $this->db->update('acadah_result_comments',$data,array('sch_id'=>$sch_id,'id'=>$id));
		}else{
			$query = $this->db->on_duplicate('acadah_result_comments',$data);
		}
		if($query){
			$this->session->set_flashdata('success', 'Comments Saved Successfully');
		}else{
			$this->session->set_flashdata('failed', 'Unable To save Comments');
		}
		redirect($this->agent->referrer());
	}

	public function save_score($id=''){
		$sch_id = $_SESSION['sch_id'];
		$data = array(
			'score_max' => $this->input->post('score_max'),
			'score_pass' => $this->input->post('score_pass'),
			'score_type' => $this->input->post('score_type'),
			'sch_id' => $sch_id

			);
		if(!empty($id)){
			$query = $this->db->update('acadah_school_scores',$data,array('sch_id'=>$sch_id,'id'=>$id));
		}else{
			$query = $this->db->on_duplicate('acadah_school_scores',$data);
		}
		if($query){
			$this->session->set_flashdata('success', 'Score Saved Successfully');
		}else{
			$this->session->set_flashdata('failed', 'Unable To save score');
		}
		redirect($this->agent->referrer());
	}
	
	public function process($s_id,$c_id){
		$process = $this->result->process_score($s_id,$c_id);
		if($process = TRUE){
			$this->session->set_flashdata('success', 'Scores Updated Successfully');
					redirect("results/scores/process/$s_id/$c_id");
		}else{
			$this->session->set_flashdata('failed', 'Unable to Update scores');
		}
		redirect($this->agent->referrer());
	}

	public function get_student_api(){
		
			$students = $this->Student->get_student('0',$this->input->post('cdid'));
			$i = 1;
			foreach($students as $student){
            echo "<tr>
					<td>$i</td>
					<td>$student[lname]</td>
					<td>$student[fname]</td>
					<td>$student[mname]</td>
					<td><a href='reportsheet/print/$_POST[ts_id]/$student[student_id]' class='btn btn-sm btn-dark'><i class='fa fa-print'></i> Print Result</a></td>
				</tr>";
				$i++;
       	 
	}

	
}

	public function get_class_result_api($subject_id,$class_details_id,$ts_id){
		$class_results = $this->result->get_student_details_for_subject($subject_id,$class_details_id,$ts_id);
		// $i = 1;
		foreach($class_results as $class_result){
				if(empty($i)){
					$i = 0;
				}
			$class_results[$i]['score'] = $this->result->pull_subject_scores($subject_id,$class_details_id,$class_result['student_id'],$ts_id);
			$i++;
			}
			$i = 1;
		foreach($class_results as $class_result){
			$j = 0;
	 $scores = $this->Corem->get_details('acadah_school_scores', 'sch_id', $_SESSION['sch_id']);
			echo "<tr>
								<td>$i</td>
								<td>$class_result[lname]</td>
								<td>$class_result[fname]</td>
								<td>$class_result[mname]</td>
								<td class='text-center'>  $class_result[student_id]</td>
								

							";
				foreach($scores as $score){
							if(empty($j)){
								$j = 0;
							}
							if(isset($class_result['score'][0]['score'])){
							if($score['score_type'] == 'total'){
								$h = $j -1;
								$c_score = 0;
								for ($c=0; $c <= $h ; $c++) { 
									$c_score += $class_result['score'][$c]['score'];
								}
							}else{
								$c_score = $class_result['score'][$j]['score'];
							}
						}else{
							$c_score = '-';
						}
									?>
								<td><?php echo $c_score; ?></td> 
								<?php $j++; }
							

			$i++;
		}

		
	}

}
