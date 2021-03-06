<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class director_approve extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Director_model');
    }

    public function index() {

        $data['director'] = $this->Director_model->getdirector_appove();
        $this->load->view("director_approve/director_approve", $data);
    }

    public function listdata($id) {

        $data['issue'] = $this->Director_model->issueot($id);
        $data['list'] = $this->Director_model->list_data($id);
        $data['issue_id'] = $id;
        $this->load->view("director_approve/list_director", $data);
    }

    public function approve_ot($id) {
        
        $this->Director_model->appove_ot($id);
        redirect(site_url('dashboard'));
    }

    public function cancel_ot() {
        
        echo  $this->Director_model->cancel_ot();
        
    }
    
}

