<?php

class Empleader_model extends CI_Model {

    public function __construct() {
        parent::__construct();
//        $this->output->enable_profiler(TRUE);
    }

    public function get_employeeleader() {
        $rs = $this->db->query(" SELECT employee.emp_id,employee.emp_code, " .
                " employee.emp_fname,employee.emp_lname,employee.tel, " .
                " department.dep_name,position.position_name,employee.leader_id " .
                " FROM employee " .
                " INNER JOIN " .
                " department " .
                " ON " .
                " employee.dep_id = department.dep_id " .
                " INNER JOIN " .
                " position " .
                " ON " .
                " employee.position_id = position.position_id WHERE employee.leader_id = ".$_SESSION['emp_id']);
        return $rs->result_array();
    }

}
