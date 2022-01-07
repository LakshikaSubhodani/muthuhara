<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teacher extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			// Your own constructor code
			if($this->session->userdata('logged_in')!== true){
                $this->template->layout_simple('login');
            }
	}

    function index(){
        if($this->session->userdata('role_id')==='2'){
            $this->template->layout_teacher('teacher/dashboard');
        }else{
            echo "Access Denied!";
        }
    }

    function enter(){
        if($this->session->userdata('username')!= ''){
            $this->template->layout_teacher('teacher/dashboard');    
        }else{
            redirect(base_url().'Auth/index');
        }
    }
}