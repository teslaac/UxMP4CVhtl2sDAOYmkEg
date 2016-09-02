<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
require (APPPATH."modules/core/controllers/secure_area.php");


class Readingarmy extends Secure_area {

    public function __construct() {
		parent::__construct('readingarmy');
        $this->load->model('user_model');
        $this->user_info = $this->User_model->get_user($_SESSION['user_id'],'acadah_users_prospective','student_id');
        //print_r($this->user_info);
        //die();
	}

	public function index(){
        $this->load->template_rarmy2('readingarmy/book_listing');
	}

    public function rarmy(){
        $this->load->template_rarmy('readingarmy/book_listing2');
    }

    public function book_details()  {
        $this->load->template_rarmy2('readingarmy/book_details');
	}

    public function book_reading()  {
        $this->load->template_rarmy2('readingarmy/book_reading');
    }

    public function take_test()  {
        $this->load->template_rarmy2('readingarmy/taketest');
    }

    public function test_result($test_id)  {
        $this->load->template_rarmy2('readingarmy/test_result');
    }
 }
?>
