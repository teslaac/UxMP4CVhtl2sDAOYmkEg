<?php
class School extends CI_Model
{
	/*
	Determines if a given sch_id is an school
	*/
	function exists($sch_id)
	{
		$this->db->from('school');
		$this->db->where('sch_id',$sch_id);
		$query = $this->db->get();

		return ($query->num_rows()==1);
	}

	/*
	Returns all the school
	*/
	function get_all($limit=10000, $offset=0,$col='sch_id',$order='asc')
	{
		$this->db->from('school');
		$this->db->where('deleted',0);
		$this->db->order_by($col, $order);
		$this->db->limit($limit);
		$this->db->offset($offset);
		return $this->db->get();
	}
	
	function count_all()
	{
		$this->db->from('school');
		$this->db->where('deleted',0);
		return $this->db->count_all_results();
	}
	
	/*
	Gets information about a particular school
	*/
	function get_info($sch_id)
	{
		$this->db->from('school');
		$this->db->where('sch_id',$sch_id);
		
		$query = $this->db->get();

		if($query->num_rows()==1)
		{
			return $query->row();
		}
		
	}
	
	// function get_info_for_key($key)
	// {
	// 	static $school_info;
		
	// 	if (!$school_info)
	// 	{
	// 		$sch_id= $this->Employee->get_logged_in_employee_current_sch_id();
	// 		$school_info = $this->get_info($sch_id);
	// 	}
		
	// 	return $school_info->{$key};
	// }

	/*
	Inserts or updates a school
	*/
	function save(&$school_data, $sch_id=false)
	{
		if (!$sch_id or !$this->exists($sch_id))
		{
			if($this->db->insert('school',$school_data))
			{
				$school_data['sch_id']=$this->db->insert_id();
				return true;
			}
			return false;
		}

		$this->db->where('sch_id', $sch_id);
		return $this->db->update('school',$school_data);
	}


	function search_count_all($search, $limit=10000)
	{
			$this->db->from('school');
			$this->db->where("name LIKE '%".$this->db->escape_like_str($search)."%' and deleted='active'");
			$this->db->order_by("name", "asc");
			$this->db->limit($limit);
			$result=$this->db->get();				
			return $result->num_rows();
	}


 	/*
	Get search suggestions to find school
	*/
	function get_search_suggestions($search,$limit=25)
	{
		$suggestions = array();

		$this->db->from('school');
		$this->db->like('name', $search);
		$this->db->where('deleted',0);
		$this->db->limit($limit);
		$by_name = $this->db->get();
		
		
		$temp_suggestions = array();
		foreach($by_name->result() as $row)
		{
			$temp_suggestions[] = $row->name;
		}
		
		sort($temp_suggestions);
		foreach($temp_suggestions as $temp_suggestion)
		{
			$suggestions[]=array('label'=> $temp_suggestion);		
		}
		

		//only return $limit suggestions
		if(count($suggestions > $limit))
		{
			$suggestions = array_slice($suggestions, 0, $limit);
		}
		return $suggestions;

	}


	/*
	Preform a search on school
	*/
	
	function search($search, $limit=20,$offset=0,$column='name',$orderby='asc')
	{
			$search_terms_array=explode(" ", $this->db->escape_like_str($search));
	
			//to keep track of which search term of the array we're looking at now	
			$search_name_criteria_counter=0;
			$sql_search_name_criteria = '';
			//loop through array of search terms
			foreach ($search_terms_array as $x)
			{
				$sql_search_name_criteria.=
				($search_name_criteria_counter > 0 ? " AND " : "").
				"name LIKE '%".$this->db->escape_like_str($x)."%'";
				
				$search_name_criteria_counter++;
			}
	
			$this->db->from('school');
			$this->db->where("((".
			$sql_search_name_criteria. ") or 
			address LIKE '%".$this->db->escape_like_str($search)."%' or 
			sch_id LIKE '%".$this->db->escape_like_str($search)."%' or 
			phone LIKE '%".$this->db->escape_like_str($search)."%' or 
			email LIKE '%".$this->db->escape_like_str($search)."%') and deleted=0");
			$this->db->order_by($column, $orderby);
			$this->db->limit($limit);
			$this->db->offset($offset);
			return $this->db->get();	
	}


	function get_school_search_suggestions($search,$limit=25)
	{
		$suggestions = array();
		
		$this->db->from('school');
		$this->db->where('deleted', 0);
		$this->db->like("name",$search);
		$this->db->limit($limit);	
		$by_company_name = $this->db->get();
		
		$temp_suggestions = array();
		
		foreach($by_company_name->result() as $row)
		{
			$temp_suggestions[$row->sch_id] = $row->name;
		}
		
		asort($temp_suggestions);
		
		foreach($temp_suggestions as $key => $value)
		{
			$suggestions[]=array('value'=> $key, 'label' => $value);		
		}
		
		//--r
		
		//only return $limit suggestions
		if(count($suggestions > $limit))
		{
			$suggestions = array_slice($suggestions, 0,$limit);
		}
		return $suggestions;

	}

	/*
	Deletes one school
	*/
	function delete($sch_id)
	{
		$current_sch_id= $this->Employee->get_logged_in_employee_current_sch_id();

		//Don't let current logged in school be deleted
		if($current_sch_id == $sch_id || !$sch_id)
			return false;
		
		//Run these queries as a transaction, we want to make sure we do all or nothing
		$this->db->trans_start();

		$this->db->where('sch_id', $sch_id);
		$this->db->delete('student');

		$this->db->where('sch_id', $sch_id);
		$this->db->delete('staff');

		$this->db->where('sch_id', $sch_id);
		$this->db->delete('parent');

		$this->db->where('sch_id', $sch_id);
		$this->db->delete('');

		// todo - add all other tables that could be deleted to remove a sch record completely
		$this->db->where('sch_id', $sch_id);
		$this->db->update('school', array('deleted' => 1));
		
		return $this->db->trans_complete();		
	}
	
	function delete_list($sch_ids)
	{	
		$sch_id= $this->Employee->get_logged_in_employee_current_sch_id();

		//Don't let current logged in school be deleted
		if(in_array($sch_id,$sch_ids) || empty($sch_ids))
			return false;
		
		//Run these queries as a transaction, we want to make sure we do all or nothing
		$this->db->trans_start();

		$this->db->where('sch_id', $sch_id);
		$this->db->delete('student');

		$this->db->where('sch_id', $sch_id);
		$this->db->delete('staff');

		$this->db->where('sch_id', $sch_id);
		$this->db->delete('parent');

		$this->db->where('sch_id', $sch_id);
		$this->db->delete('');

		// todo - add all other tables that could be deleted to remove a sch record completely		
		$this->db->where_in('sch_id',$sch_ids);
		$this->db->update('school', array('deleted' => 1));
		
		return $this->db->trans_complete();		
 	}
}
?>
