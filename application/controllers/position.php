<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class position extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Position_model');
    }

    public function index() {
        $data['position'] = $this->Position_model->getposition();
        $this->load->view("position/add_position",$data);
    }

    public function delete($id) {

        $this->Position_model->delete_position($id);
        redirect(site_url('position'));
    }

    public function insert() {

        $this->Position_model->insert_position();
        redirect(site_url('position'));
    }

    public function update($id) {
        
        $data['position'] = $this->Position_model->update_position($id);
        $this->load->view('position/update_position', $data);
    }

}
