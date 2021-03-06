<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class department extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Department_model');
    }

    public function index() {

        $data['department'] = $this->Department_model->getdepartment();
        $this->load->view("department/add_department", $data);
    }

    public function delete($id) {

        $this->Department_model->delete_department($id);
        redirect(site_url('department'));
    }

    public function insert() {

        $this->Department_model->insert_department();
        redirect(site_url('department'));
    }

    public function update($id) {

        $data['department'] = $this->Department_model->update_department($id);
        $this->load->view('department/update_department', $data);
    }

}
