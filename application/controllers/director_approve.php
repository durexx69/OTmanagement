<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class director_approve extends CI_Controller
{
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){

//        $data['nums'] =  $this->Student_model->getdata();
        $this->load->view("director_approve/director_approve");
    }
//    public function delete($id) {
//        
//        $this->Student_model->delete_student($id);
//        $this->load->view("student/student");
//    }
//    public function insert() {
//
//        $this->Student_model->insert_student();
//        $this->load->view('student/insert_student');
//    }
//    public function update($id){
//               
//        $data['result']= $this->Student_model->update_student($id);                
//        $this->load->view('student/update_student',$data);
//    }
}

