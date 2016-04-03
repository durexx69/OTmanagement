<?php //

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class login extends CI_Controller {

    public function __construct() {
        parent::__construct();
//        $this->load->model('Login_model');
    }
    
//    public function index(){
//        echo 'reigniter';
//    }
//
//        public function login(){
//        
//            $data = array();
//        if($post = $this->input->post()){
//            extract($post);
//            $sql = "select * from employee where us = '$user' and pw = '$password' ";
//            $emp = $this->db->query($sql);
//            
//            if($emp->num_rows()){
//                $data_emp = $emp->result();
//                $this->session->set_userdata('emp_id',$data_emp[0]->emp_id);
//                $this->session->set_userdata('fname',$data_emp[0]->fname);
//                $this->session->set_userdata('lname',$data_emp[0]->lname);
//            }else{
//                $data['message'] = 'Wrong user name or password';
//            }
//        }
////        $data['message'] = 'authen class';
//        $this->load->view('login/login',$data);
//    }
//    
//    public function logout(){
//        $this->session->sess_destroy();
//        redirect(site_url());
//    }
    
}
