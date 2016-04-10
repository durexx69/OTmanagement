<?php

class login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('login_model');
    }

    public function index() {
        
        $this->load->view('login/login');
    }

    public function checklogin(){
        
        $us = $this->input->post('us');
        $passwd = $this->input->post('passwd');
        $login = $this->login_model->login($us, $passwd);
        
        if($login == 0){
            
            redirect('login');
        }else{
            redirect('dashboard/index');
            
            
        }
    }
    
    public function verifyUser(){
       
        

        
        if($this->Login_model->login($us, $passwd)){
            return TRUE;
        }else{
            $this->form_validation->set_message('verifyUser','Incorrect Email or Password. Please try again.');
            return FALSE;
        }
    }


}

