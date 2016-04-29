<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class report extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Report_model');
    }

    public function index() {
        
        $data['report'] = $this->Report_model->get_report();
        $this->load->view("report/report",$data);
    }
    
        public function detail_ot($id) {

        $data['detail'] = $this->Report_model->detail_monthly($id);
        $this->load->view("report/detail", $data);
    }
    
     public function issue_ot($id) {

        $data['ot'] = $this->Report_model->issue_ot($id);
        $this->load->view("report/issue_ot", $data);
    }
    
}

