<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require (APPPATH."modules/core/controllers/secure_area.php");

class Subject extends Secure_area {

    public function __construct()
    {
        $this->data['page'] = $this->data['module'] = 'attendance';
        parent::__construct($this->data['module']);
    }

    public function index()  {
        $this->load->template('subject/subject');
        

    }

    public function admin($action = 'view')
    {
       if ($action === 'subject') {
           $this->load->template('subject/admin/assignsubject');
       }
       elseif ($action === 'student') {
            $this->load->template('subject/admin/assignstudent');
       }
    }
    public function staff()
    {
        $this->load->template('subject/staff/subject');
    }

   

    
}

