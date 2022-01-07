<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			// Your own constructor code
			if($this->session->userdata('logged_in')!== true){
                $this->template->layout_simple('login');
            }
	}

    function index(){
        if($this->session->userdata('role_id')==='3'){
            $this->template->layout_student('student/dashboard');
        }else{
            echo "Access Denied!";
        }
    }

    function enter(){
        if($this->session->userdata('username')!= ''){
            $this->template->layout_student('student/dashboard');    
        }else{
            redirect(base_url().'Auth/index');
        }
    }
}