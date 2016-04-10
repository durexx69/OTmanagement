<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class employee extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Employee_model');
    }

    public function index() {

        $data['dep'] = $this->Employee_model->get_department();
        $data['position'] = $this->Employee_model->get_position();
        $data['emp'] = $this->Employee_model->get_employee();
        $this->load->view("employee/add_employee",$data);
    }

    public function delete($id) {

        $this->Employee_model->delete_employee($id);
        redirect(site_url('employee'));
    }

    public function insert() {

        $this->Employee_model->insert_emp();
        redirect(site_url('employee'));
    }

    public function update($id) {
    
        $data['dep'] = $this->Employee_model->get_department();
        $data['position'] = $this->Employee_model->get_position();
        $data['emp'] = $this->Employee_model->update_employee($id);
        $this->load->view('employee/update_employee', $data);
    }
}