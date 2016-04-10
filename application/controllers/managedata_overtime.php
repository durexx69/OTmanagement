<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class managedata_overtime extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('Managedata_model');
    }
    
    public function index(){
//        $data['overtime'] = $id; 
//        $data['app'] = $this->Managedata_model->get_appove();
//        $data['allow'] = $this->Managedata_model->get_allowance();
//        $data['type'] = $this->Managedata_model->get_type();
//        $data['ot'] =  $this->Managedata_model->get_managedata();
        $this->load->view("managedata_overtime/managedata_overtime");
    }
    
//    public function delete($id) {
//        
//        $this->Managedata_model->delete_managedata($id);
//        redirect(site_url('managedata_overtime'));
//    }
//    
//    public function insert($id) {              
//        $this->Managedata_model->insert_managedata();
//        redirect(site_url('managedata_overtime/index/'.$id));
//    }
//    
//    public function update($id){
//               
//        $data['result']= $this->Managedata_model->update_managedata($id);                
//        $this->load->view('managedata_overtime/update_managedata',$data);
//    }
}

