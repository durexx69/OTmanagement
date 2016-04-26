<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class leader_approve extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Leader_model');
    }

    public function index() {

        $data['leader'] = $this->Leader_model->getleader_appove();
        $this->load->view("leader_approve/leader_approve", $data);
    }

    public function listdata($id) {

        $data['issue'] = $this->Leader_model->issueot($id);
        $data['list'] = $this->Leader_model->list_data($id);
        $data['issue_id'] = $id;
        $this->load->view("leader_approve/list_leader", $data);
    }

    public function leader_ot($id) {

        $data['cancel'] = $this->Leader_model->cancel_ot($id);
        $data['leader'] = $this->Leader_model->leader_ot($id);
        $this->load->view('dashboard/view_dashboard', $data);
    }

    public function cancel_ot($id) {

        $data['cancel'] = $this->Leader_model->cancel_ot($id);
        $this->load->view('dashboard/view_dashboard', $data);
    }

}

