<?php
class Feesm extends CI_Model
{
	
	/*
	Returns all the students valid for the session, with payment details
	*/
	 function get_all_students($ts_id, $stu_id = null, $level_id = null){

		$sch_id = $_SESSION['sch_id'];
		//$cdids = $this->class_details_ids('jss1', 'cpa');
		$join_level = (($level_id) AND ($level_id!='all')) ? "AND class_details_id IN (SELECT id FROM acadah_class_details WHERE level_id = '$level_id')": '';

		$this->db->select('st.stu_cat, lname, fname, class_details, users.user_id, cd.level_id, cd.level_id');
		$this->db->select_sum('amount');
		//$this->db->select_sum('payment_balance');
		//$this->db->select_sum('trans_amount_paid');
		//$this->db->select_sum('price','sum_bill');

		$this->db->from('users');
		$this->db->join('student st', "users.user_id = st.student_id");	
		$this->db->join('student_session ss', "users.user_id = ss.student_id  AND ss.ts_id = $ts_id $join_level" );		
		$this->db->join('class_details cd', 'cd.id = ss.class_details_id');		
		$this->db->join('fees_settings fs', "fs.level_id = cd.level_id AND  fs.sch_id = '$sch_id'
			AND fs.type='main'");

		if($stu_id){ $this->db->where('users.user_id',  $stu_id); 	}
		$this->db->group_start();
                        $this->db->where('fs.ts_id', 0);
                        $this->db->or_where('fs.ts_id', $ts_id);
        $this->db->group_end();

         //TO IMPLEMENT STU CAT
        $this->db->group_start();
                         $this->db->where('fs.stu_cat', 0);
                        $this->db->or_where('fs.stu_cat = st.stu_cat');
        $this->db->group_end();

		//$this->db->join('transaction_bill trb', 'trb.student_id = users.user_id  AND  trb.ts_id = '.$ts_id);		
		//$this->db->join('transactions tr', 'tr.user_id = users.user_id AND tr.suspended = 0 AND tr.ts_id = '.$ts_id, 'left');


		$this->db->where("users.sch_id", "$sch_id");
		$this->db->order_by("cd.level_id", "asc");
		$this->db->group_by(" st.student_id");
        
		 $result =  $this->db->get()->result_array();
			//die ($this->db->last_query());

		return($result);
	}
	

	function payment_balance($student_id){
				/// Calculate SUM Previous Outstanding
				$this->db->select_sum('payment_balance');
				$result = $this->db->get_where('student_session', array('student_id'=>$student_id));
				return $result->result_array(0);
			}

	function prev_balance($student_id, $ts_id=''){
				if($ts_id == ''){$ts_id = $_SESSION['active_term_session_data']['ts_id'];} //check if ts_id is sent

				/// Calculate SUM Previous Outstanding
				$this->db->select_sum('payment_balance');
			    $result = $this->db->get_where('student_reg', array('student_id'=>$student_id, 'ts_id <' => $ts_id ));
				return $result->row()->payment_balance;
			
			}

	function list_optional_fees($sch_id = null){
		if(!$sch_id){ $sch_id = $_SESSION['sch_id']; }
		 
		 $this->db->from('fees' );
		 $this->db->join('fees_settings fs', "fs.fees_id  = fees.fees_id and fs.sch_id = '$sch_id'");

			//TO IMPLEMENT OPTIONAL BILL ON LEVELS
	        $this->db->group_start();
	                         $this->db->where('fs.level_id', "all");
	                       // $this->db->or_where('fs.level_id', "nur2");
	        $this->db->group_end();

		 $this->db->where('fees.sch_id', $sch_id);
		 $this->db->where('fees.type', 'optional');
		 $this->db->where('fees.active', 'yes');
		 $query = $this->db->get();
		 	// die(print_r($this->db->last_query()));

		return $query->result_array();
		 }


		 /*
	Returns all bills in transactions, with payment details
	*/
	 function list_bill($ts_id, $stu_id = '',  $fee_id='', $sch_id = null){
 		if(!$sch_id){ $sch_id = $_SESSION['sch_id']; }

		/// Select Optional Bill data for a user
		$this->db->select('fs.id as fsid');
		$this->db->select('fs.*, tbill.*, fees.*');
		$this->db->from('transaction_bill tbill' );
		$this->db->join('fees_settings fs', "fs.id  = tbill.item_id ");
		$this->db->join('fees', "fs.fees_id = fees.fees_id");
		$this->db->where('tbill.student_id', $stu_id);
		$this->db->where('tbill.ts_id', $ts_id);			
		$this->db->where(array('fees.type' => 'optional'));

		$this->db->order_by('tbill.id');
		$result= $this->db->get();
		return $result = $result->result_array();
	}


	 function list_generic_bill($ts_id, $stu_id = '',  $fee_id='', $sch_id = null){
 		if(!$sch_id){ $sch_id = $_SESSION['sch_id']; }

		/// Select Optional Bill data for a user
		$this->db->select('tbill.*, fees.*');
		$this->db->from('transaction_bill tbill' );
		$this->db->join('fees', "tbill.item_id = fees.fees_id AND fees.type = 'generic'");
		$this->db->where('tbill.student_id', $stu_id);
		$this->db->where('tbill.ts_id', $ts_id);
		$this->db->where('tbill.item_id', $fee_id);
		$this->db->order_by('tbill.id');
		$result= $this->db->get();

		//print_r($this->db->last_query()); die();

		if(($fee_id) && ($ts_id) && ($stu_id)){
			return $result = $result->row_array();
		}
		return $result = $result->result_array();

		die(print_r($result));
	}




	// function list_generic_bill($ts_id, $stu_id = '', $sch_id = null){
	//  		if(!$sch_id){ $sch_id = $_SESSION['sch_id']; }

	// 		/// Select Optional Bill data for a user
	// 		$this->db->select('tbill.*, fees.*');
	// 		$this->db->from('transaction_bill tbill' );
	// 		//$this->db->join('fees_settings fs', "fs.id  = tbill.item_id ", 'left');
	// 		$this->db->join('fees', "tbill.item_id = fees.fees_id AND fees.active = 'yes' AND fees.type = 'generic'");
	// 		$this->db->order_by('tbill.id');

	// 	$result= $this->db->get();
	// 	//print_r($this->db->last_query());
	// 	return $result = $result->result_array();

	// 	die(print_r($result));
	// }

	function add_payment_to_bill($stu_id='', $staff_id, $ts_id, $item_id, $amount='')
	{	
		//die(print_r($pay_amount));
		$data = array(
		        'student_id' => $stu_id,
		        'ts_id' => $ts_id,
		        'item_id' => $item_id,
		        'sch_id' => $this->session->sch_id
		        );
		$query = $this->db->get_where('transaction_bill', $data);
		if($query->num_rows() == 0){
			$pay_amount = $this->get_details2('fees_settings', 'id', $item_id )['amount'];
			$data['price'] = $pay_amount;
			$data['staff_id'] = $staff_id;
			($amount)? $data['price'] = $amount: '';
			($amount)? $data['amount'] = $amount: '';
			$this->db->insert('transaction_bill', $data);
		}
	}

	
	function delete_from_bill($bill_id)
	{	//echo $bill_id;
		$this->db->delete('transaction_bill', array('id' => $bill_id));
	}

	function sum_credit($user_id, $ts_id){
			/// Calculate SUM Credit Balance
			$this->db->select_sum('balance');
			$result = $this->db->get_where('fees_credit', array('user_id'=>$user_id, 'ts_id' => $ts_id));
			return $result->row_array()['balance'];
		}

	// function sum_bill_paid($student_id, $ts_id){
	// 		/// Calculate SUM Credit Balance
			
	// 	}

	// function sum_bill_unpaid($student_id, $ts_id){
	// 		/// Calculate SUM Bill
	// 		$this->db->select_sum('price');
	// 		$result = $this->db->get_where('acadah_transaction_bill', array('student_id'=>$student_id, 'ts_id' => $ts_id, 'paid'=> 0));
	// 		return $result->row_array()['price'];
	// }

	function sum_bill($student_id, $ts_id, $type='', $pay=''){
			/// Calculate SUM Bill
			if($pay){
				$this->db->select_sum('price');
				$this->db->from('transaction_bill tbill');
				($type)? $this->db->join('fees_settings fs', "tbill.item_id = fs.id AND fs.type = '$type'") :'';
				$this->db->where( array('student_id'=>$student_id, 'tbill.ts_id' => $ts_id, 'paid'=> $pay));
				$query = $this->db->get();
			//print_r($this->db->last_query()); die();
				return $query->row_array()['price'];
			}

			$this->db->select_sum('price');
			$this->db->from('transaction_bill tbill');
			///check type or all
			($type)? $this->db->join('fees_settings fs', "tbill.item_id = fs.id AND fs.type = '$type'") :'';
			$this->db->where( array('student_id'=>$student_id, 'tbill.ts_id' => $ts_id));
			$query = $this->db->get();
			 return $query = $query->row_array()['price'];
	}
	function sum_previous_bal($student_id, $ts_id){
			/// Calculate SUM Bill
			$this->db->select_sum('payment_balance');
			$result = $this->db->get_where('student_session', array('student_id'=>$student_id, 'ts_id' => $ts_id));
			return $result->row_array()['payment_balance'];
	}

	function post_payment($data)   
	{	
		$this->db->insert('transactions', $data);
		$this->add_payment_to_credit($data);
	}

	function add_payment_to_credit($data)
	{	
		$data_credit = array(
        'user_id' => $data['user_id'],
        'ts_id' => $data['ts_id'],
        'sch_id' => $data['sch_id']
		);

		$this->db->where($data_credit);
		$user = $this->db->get('fees_credit');	
		

		if($user->num_rows() > 0){
			$balance =  $user->row_array()['balance'];

			$amount =  $data['trans_amount_paid'];
			$new_amount = $amount + $balance;
			$this->db->where($data_credit);
			$this->db->update('fees_credit', array('balance' => $new_amount));

			//print_r($balance);
		}else{
			$data_credit['balance'] =  $data['trans_amount_paid'];
			$this->db->insert('fees_credit', $data_credit);
		}

	}

	

    //pay item
    function update_bill_item($bill_item_id, $POST, $stu_id, $status)
    {
    	$price = $POST['totalbill'];

		///PROCESS TO UPDATE USER CREDIT BALANCE

    	$credit_bal = $this->get_details2('fees_credit', 'user_id', $stu_id, 'balance');

    	if($status == 1){($credit_bal < $price)? die('Error 3023: no sufficent fund') : '';}
    	$newbal = ($status == 1)? ($credit_bal - $price): ($credit_bal + $price); 

    	$this->db->where('user_id', $stu_id);
		$this->db->update('fees_credit', array('balance' => $newbal));
    	
    	$this->db->where('id', $bill_item_id);
		$this->db->update('transaction_bill', array('paid' => $status, 'price' => $POST['totalbill'], 'discount'=> $POST['discount']));
		return true;


    }

    function deduct_credit($stu_id, $amount)
    {	
		return $this->get_details2('fees_credit', 'user_id', $stu_id, 'balance');
    }



/////////////////////Fees Settings ///////////////////////////
    function list_fees_names($sch_id = null, $type = null){
		 
		 $this->db->from('fees');
		 $this->db->where('fees.sch_id', $sch_id);
		 if($type){$this->db->where('fees.type', $type);}
		 $this->db->order_by("type", "asc");
		 $this->db->order_by("fees_name", "asc");

		 $query = $this->db->get();
		return $query->result_array();
		
		 }

		 function list_fees($sch_id = null, $ts_id, $stu_cat, $type = 'main'){
		 	if($type == 'main'){
			  //$this->db->select();
			 $this->db->from('fees_settings fs' );
			 $this->db->join('fees', 'fs.fees_id = fees.fees_id AND fees.active = "yes"');
			 $this->db->where('fs.sch_id', $sch_id);
			 $this->db->where('fs.type', 'main');
			 

			 //TO IMPLEMENT STU CAT
	        $this->db->group_start();
	                         $this->db->where('fs.stu_cat', 0);
	                        $this->db->or_where('fs.stu_cat', $stu_cat);
	        $this->db->group_end();
			
			}else{
				  /// Select Optional Bill data for ALL user
				 $this->db->from('fees_settings fs' );
				 $this->db->join('fees', 'fs.fees_id = fees.fees_id AND fees.active = "yes" ');		 
				 $this->db->where('fs.sch_id', $sch_id);
				 $this->db->where('fs.type', 'optional');	
			 }
			
			 $this->db->where('fs.ts_id', $ts_id);
			 $query = $this->db->get();
			 //print_r($this->db->last_query());			 
			 
			return $query->result_array();
		 }

		 function list_fees_cat($sch_id = null){
			 $this->db->from('fees_cat fc' );
			 $this->db->where('fc.sch_id', $sch_id);
			 $this->db->or_where('fc.sch_id', 'acadah');
			 $this->db->where('fc.active', 'yes');
			 return $query = $this->db->get()->result_array();
		 }


	    function save_fees($data, $sch_id){

	    	foreach ($data['level'] as $key => $level_id) {

	    		//print_r($data);
	    		$data['fsid'][$key]? $insertdata['id']  = $data['fsid'][$key] : '';

	    		$insertdata = array('fees_id' => $data['fees_id'], 
	    			                'type' => $data['bill_type'], 
	    			                'stu_cat' => $data['stu_cat'],
	    			                'ts_id' => $data['ts_id'],
	    			                'amount' => $data['amount'][$key],
	    			                'level_id' => $level_id,
	    			                'sch_id' => $sch_id);

	    		$query = $this->db->on_duplicate('fees_settings', $insertdata);
	    		//print_r($this->db->last_query());
	    		echo $query? 'true': 'false';

	    	}
	    
	    return $query;
	    }

	    function get_levels_fees($fee_id, $sch_id)
	    {
	    	 $this->db->from('fees_settings fs' );
			 $this->db->where('fs.fees_id', $fee_id);
			 $this->db->where('fs.sch_id', $sch_id);

			 return $query = $this->db->get()->result_array();
			  //print_r($this->db->last_query()) ;
	    }


	    	//list levels fees for a fee_id 
		  function list_main_fees_id($sch_id = null, $ts_id, $stu_cat, $fee_id = null){
		 
			 $this->db->select('fs.*, fees_shortname, cl.class_name, cl.level_id as level');
			 $this->db->from('class_level cl' );
			 $this->db->join('fees_settings fs', "cl.level_id = fs.level_id 
			 	AND fs.sch_id = '$sch_id' 
			 	AND fs.type = 'main' 
			 	AND fs.fees_id = $fee_id
			 	AND fs.ts_id =  $ts_id", 'left');
			 $this->db->join('fees', 'fs.fees_id = fees.fees_id AND fees.active = "yes"', 'LEFT');


			 $query = $this->db->get();
			return $query->result_array();
		 }

function countfeedata($ts_id, $sch_id=null, $stu_id=''){

		/// Select Optional Bill data for a user
		$sql = "SELECT tbill1.student_id, count(tbill1.student_id) as total , count(tbill2.student_id) as paid , count(tbill3.student_id) as unpaid
				FROM acadah_student_session ss  
				 JOIN acadah_transaction_bill tbill1 ON ss.student_id = tbill1.student_id AND tbill1.ts_id = $ts_id
				LEFT JOIN acadah_transaction_bill tbill2 ON tbill1.id = tbill2.id  and tbill2.paid = 1 
				LEFT JOIN acadah_transaction_bill tbill3 ON tbill1.id = tbill3.id  and tbill3.paid = 0
				WHERE ss.sch_id = '$sch_id'
				GROUP BY tbill1.student_id
				";

		$result=$this->db->query($sql);	

	//print_r($this->db->last_query()) ;

		return $result = $result->result_array();
		 //die(print_r($result));
	}

	public function class_details_ids($id, $sch_id) {
          $this->get_details3('class_details', 'id', 'level_id', $id, $sch_id);
          //die(print_r($this->get_details3('class_details', 'id', 'level_id', $id, $sch_id)));
    }

	##MOVETOCORE get array of an Id
	public function get_details3($table, $value, $field, $id, $sch_id='') {
         $this->db->select($value);
         $this->db->from($table);
         $this->db->where($field, $id);
         $this->db->where('sch_id', $sch_id);
         $query = $this->db->get();

         $values = array();
         foreach ($query->result_array() as $key => $value) {
         	 $values[]= $value['id'];
         }

        die(print_r(array_values($values)));
    }

	// move this to core //get details with sch id 
	public function get_details2($table, $field, $id, $target_field=''){
         
		 $target_field? $this->db->select($target_field): '';
         $this->db->from($table);
         $this->db->where($field, $id);
         $this->db->where('sch_id', $this->session->sch_id);

         $query = $this->db->get();
		//print_r($this->db->last_query()); die();

         $result = $target_field? $query->row_array()[$target_field] : $query->row_array();
        return $result;
    }

    	 /*
	Returns all bills in transactions, with payment details
	*/
	 function list_discount($ts_id,   $fee_id='', $sch_id= ''){
 		if(!$sch_id){ $sch_id = $_SESSION['sch_id']; }

		$this->db->select('tbill.*, fees.*, user_id, lname, fname, st.term_name, as.session_name');
		$this->db->from('transaction_bill tbill' );
		$this->db->join('fees_settings fs', "tbill.item_id = fs.id");
		$this->db->join('fees', "fs.fees_id = fees.fees_id");
		$this->db->join('users', "users.user_id = tbill.student_id");
		//get ts_details
		$this->db->join('app_term_session ats', "ats.ts_id = tbill.ts_id");
		$this->db->join('app_session as', " as.session_id = ats.session_id");
		$this->db->join('school_term st', " st.term_id = ats.term_id and st.sch_id = '$sch_id'");
		//
		$this->db->where('tbill.discount >', 0);
		$this->db->where('tbill.ts_id', $ts_id);			
		$this->db->where('tbill.sch_id', $sch_id);			
		$result= $this->db->get();

				//print_r($this->db->last_query()); die();

		return $result = $result->result_array();
	}


}
?>
