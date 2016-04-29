<?php

class Comment_model extends CI_Model {

    public function __construct() {
        parent::__construct();
//        $this->output->enable_profiler(TRUE);
    }

    public function get_monthly() {
        $rs = $this->db->query(" SELECT * FROM overtime WHERE emp_id = ".$_SESSION['emp_id']);
        return $rs->result_array();
    }
    
        public function listot($id) {
        $rs = $this->db->query(" SELECT * FROM overtime " .
                "INNER JOIN " .
                "issue_overtime " .
                "ON " .
                "overtime.overtime_id = issue_overtime.overtime_id " .
                " WHERE status <> 0 AND overtime.overtime_id =  '$id' ");
        return $rs->result_array();
    }
    
}
