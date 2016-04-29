<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class employee_leader extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('Empleader_model');
    }
    
    public function index(){
        
        $data['empleader'] =  $this->Empleader_model->get_employeeleader();
        $this->load->view("employee_leader/employee_leader",$data);
    }

}

