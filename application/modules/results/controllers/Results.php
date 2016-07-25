<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require (APPPATH."modules/core/controllers/secure_area.php");

class Results extends Secure_area {

	public function __construct()
	{
		$this->data['module'] = 'results';
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
		if ($action === 'print'){
			$this->load->view('results/print_score_sheet',$this->data);
		}else {
			$this->load->template('results/score_sheet',$this->data);
		 }
		
	}
	public function reportsheet($action = 'view')
	{
		$this->data['page'] = 'Report Sheet';
		if ($action === 'print'){
			$this->load->view('results/print_result', $this->data);
		}
		elseif ($action === 'printall'){
			$this->load->template('results/print_all_result', $this->data);
		}
		else {
			$this->load->template('results/report_sheet',$this->data);
		 	
		 }
		
	}	

	public function process($s_id,$c_id){
		$max = $this->input->post('max');
		$ts_id = $this->input->post('ts_id');
		$subject_id = $this->input->post('subject_id'); 
		for ($i=1; $i <= $max ; $i++) { 
			$student_id = $this->input->post("user_id[$i]");
			$test = $this->input->post("test[$i]");
			$exam_score = $this->input->post("exam_score[$i]");
			$total_score = $test + $exam_score;
			$data = array(
                'student_id' => $student_id,
                'test_score1' => $test,
                'exam_score' => $exam_score,
                'total_score' => $total_score,
                'ts_id' => $ts_id,
                'subject_id' => $subject_id,
                'class_details_id' =>$c_id
            );
			if(!empty($test)){
		$process = $this->result->process_score($data);	}}
		// print_r($data);die();
		
		if($process = TRUE){
			$this->session->set_flashdata('success', 'Scores Updated Successfully');
					redirect("results/scores/process/$s_id/$c_id");
		}

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
								<td><a href='reportsheet/print' class='btn btn-sm btn-dark'><i class='fa fa-print'></i> Print Result</a></td>
							</tr>";
							$i++;
       	 
	}

	
}

	public function get_class_result_api($subject_id,$class_details_id,$ts_id){
		$class_results = $this->result->get_student_details_for_subject($subject_id,$class_details_id,$ts_id);
		$i = 1;
		foreach($class_results as $class_result){
			echo "<tr>
								<td>$i</td>
								<td>$class_result[lname]</td>
								<td>$class_result[fname]</td>
								<td>$class_result[mname]</td>
								<td class='text-center'>  $class_result[student_id]</td>
								<td class='text-center'>  $class_result[test_score1]</td>
								<td class='text-center'>  $class_result[exam_score]</td>
								<td class='text-center'>  $class_result[total_score]</td>
							</tr>";

			$i++;
		}

		
	}

}
