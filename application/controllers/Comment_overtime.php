<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class comment_overtime extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Comment_model');
    }

    public function index() {

        $data['list'] = $this->Comment_model->get_monthly();
        $this->load->view("comment_overtime/comment_overtime", $data);
    }

    public function listot($id) {

        $data['issue'] = $this->Comment_model->listot($id);
        $data['issue_id'] = $id;
        $this->load->view("comment_overtime/list_comment", $data);
    }

}

