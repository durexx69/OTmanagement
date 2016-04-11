<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class view_overtime extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Viewot_model');
    }

    public function index() {
        
        $data['ot'] = $this->Viewot_model->get_viewot();
        $this->load->view("view_overtime/view_overtime",$data);

    }

//    public function delete($id) {
//        
//        $this->Viewot_model->delete_viewot($id);
//        redirect(site_url('managedata_overtime'));
//    }
    public function insert() {
        
        $this->Viewot_model->insert_viewot();
        redirect(site_url('managedata_overtime/index'));
    }
}
