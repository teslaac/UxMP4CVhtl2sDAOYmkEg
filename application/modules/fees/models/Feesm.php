<?php
class Feesm extends CI_Model
{
	/*
	total_extra_outstanding
	*/


	function total_extra_outstanding($student_id, $ts_id,$dbc){
				/// Calculate SUM Current extra Outstanding
		$sql3 ="SELECT SUM(amount_paid) AS total_amount 
		      	FROM payment_bill  WHERE stu_id = '$student_id'
		      	AND ts_id = '$ts_id' AND payment_type = 0";
	
		$result3 = mysqli_query($dbc, $sql3);					                       
		$r_result = mysqli_fetch_array($result3);
		$total_extra_outstanding = $r_result['total_amount']; 
		return $total_extra_outstanding;
		 }

	/*
	Returns all the students valid for the session, with payment details
	*/
	 function get_all_students($ts_id){

		$sch_id = $_SESSION['sch_id'];

		$this->db->select('lname, fname, class_details, user_id');
		$this->db->select_sum('pamount');
		$this->db->select_sum('payment_balance');
		$this->db->select_sum('trans_amount_paid');
		//$this->db->select_sum('payment_price','sum_bill');

		$this->db->from('student st');
		$this->db->join('users', 'users.user_id = st.student_id and users.sch_id = "'.$sch_id.'"');	
		$this->db->join('student_reg sr', 'users.user_id = sr.student_id  and sr.ts_id ='.$ts_id);		
		$this->db->join('class_details cd', 'cd.class_details_id = sr.class_details_id');		
		$this->db->join('payment_settings ps', 'ps.pclass = sr.class_details_id  AND ps.stu_cat = st.stu_cat 
						 AND ps.ts_id = 0  OR ps.ts_id = '.$ts_id.' AND ps.sch_id = "'.$sch_id.'"');		
		//$this->db->join('transaction_bill trb', 'trb.student_id = users.user_id  AND  trb.ts_id = '.$ts_id);		
		$this->db->join('transactions tr', 'tr.student_id = st.student_id AND tr.suspended = 0 AND tr.ts_id = '.$ts_id, 'left');		

		$this->db->order_by("cd.class_level", "asc");
		$this->db->group_by("st.student_id");

		 $result =  $this->db->get()->result_array();
			// echo ($this->db->last_query());

		return($result);
	}
	

	function payment_bill($student_id, $ts_id){
				/// Calculate SUM Bill
				$this->db->select_sum('payment_price');
				$result = $this->db->get_where('transaction_bill', array('student_id'=>$student_id, 'ts_id'=>$ts_id));
				///echo ($this->db->last_query());

				$result = $result->result_array()[0]['payment_price'];
				if($result){
					return($result);
				}else{
					return 0;
				}
	}

	function payment_balance($student_id){
				/// Calculate SUM Previous Outstanding
				$this->db->select_sum('payment_balance');
				$result = $this->db->get_where('student_reg', array('student_id'=>$student_id));
				return $result->result_array(0);
			}

	function prev_balance($student_id, $ts_id=''){
				if($ts_id == ''){$ts_id = $_SESSION['active_term_session_data']['ts_id'];} //check if ts_id is sent

				/// Calculate SUM Previous Outstanding
				$this->db->select_sum('payment_balance');
			    $result = $this->db->get_where('student_reg', array('student_id'=>$student_id, 'ts_id <' => $ts_id ));
				return $result->row()->payment_balance;
			
			}




}
?>
