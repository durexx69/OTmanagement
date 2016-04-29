<?php

class Report_model extends CI_Model {

    public function __construct() {
        parent::__construct();
//        $this->output->enable_profiler(TRUE);
    }

    public function get_report() {
        $rs = $this->db->query(" SELECT * FROM overtime WHERE status = 1 group by monthly ");
        return $rs->result_array();
    }

    public function detail_monthly($id) {
        $rs = $this->db->query(" SELECT overtime.monthly,overtime.status, " .
                " employee.emp_fname,employee.emp_lname,overtime.overtime_id FROM overtime " .
                " INNER JOIN " .
                " employee " .
                " ON " .
                " overtime.emp_id = employee.emp_id " .
                " WHERE status = 1 AND monthly =  '$id' ");
        return $rs->result_array();
    }

    public function issue_ot($id) {
        $rs = $this->db->query(" SELECT * FROM issue_overtime " .
                " INNER JOIN overtime " .
                " ON " .
                " issue_overtime.overtime_id = overtime.overtime_id " .
                " WHERE overtime.status = 1 AND overtime.overtime_id = '$id' ");
        return $rs->result_array();
    }

}

