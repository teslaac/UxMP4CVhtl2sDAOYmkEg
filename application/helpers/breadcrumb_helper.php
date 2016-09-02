<?php


// #todo -create_breadcrumb
function create_report_breadcrumb($report_name)
{
	$ci = &get_instance();

	$return = '';
	if ($ci->uri->segment(3) === FALSE) // Input page
	{
		$return.=create_current_page_url(lang('reports_report_input').': '.$report_name);
	}
	else
	{
		$return.= '<a href="'.site_url('reports/'.$ci->uri->segment(2)).'">'.lang('reports_report_input').': '.$report_name.'</a>';	
		$return.= create_current_page_url($report_name);
	}
	
	return $return;
}

?>