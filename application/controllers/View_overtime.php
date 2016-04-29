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
        
        $data['emp'] = $this->Viewot_model->get_ot();
//        $data['ot'] = $this->Viewot_model->get_viewot();
        $this->load->view("view_overtime/view_overtime", $data);
    }

    public function alert() {
        $this->load->view("view_overtime/alert");
    }

    public function insert() {

        $monthly = $this->input->post("monthly") . '-01';
        $checkot = $this->Viewot_model->check($monthly, $_SESSION['emp_id']);
        if ($checkot == 1) {
            $this->Viewot_model->insert_viewot();
            redirect(site_url('managedata_overtime/index'));
        } else {
            redirect('view_overtime/alert');
        }
    }

}
