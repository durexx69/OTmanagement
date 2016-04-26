<?php

class Director_model extends CI_Model {

    public function __construct() {
        parent::__construct();
//        $this->output->enable_profiler(TRUE);
    }

    public function getdirector_appove() {
        $rs = $this->db->query(" SELECT emp.emp_id,emp.emp_code,emp.emp_fname,emp.emp_lname,emp.nickname, " .
                " dep.dep_id, dep.dep_name,emp.leader_id," .
                "ot.overtime_id,ot.monthly " .
                "FROM employee emp " .
                "INNER JOIN " .
                "department dep " .
                "ON " .
                "emp.dep_id = dep.dep_id " .
                "INNER JOIN " .
                "overtime ot ON ot.emp_id = emp.emp_id WHERE approve_hr = 0 ");
        return $rs->result_array();
    }

    public function list_data($id) {
        if ($this->input->post('emp_id') != null) {
            $ar = array(
                "emp_id" => $this->input->post("emp_id")
            );
            $this->db->where('employee.emp_id', $id);
            redirect(site_url('listdata'));
        }
        $sql = " SELECT * FROM overtime " .
                " INNER JOIN " .
                " issue_overtime " .
                " ON " .
                " overtime.overtime_id = issue_overtime.overtime_id " .
                " WHERE overtime.emp_id =  '$id' ";
        $result = $this->db->query($sql);
        return $result->row_array();
    }

    public function issueot($id) {
        $rs = $this->db->query(" SELECT * FROM overtime " .
                "INNER JOIN " .
                "issue_overtime " .
                "ON " .
                "overtime.overtime_id = issue_overtime.overtime_id " .
                " WHERE overtime.overtime_id =  '$id' ");
        return $rs->result_array();
    }

    public function appove_ot($id) {
        $this->db->update('overtime', array('status' => '1', 'approve_hr' => $_SESSION['emp_id']), array('overtime_id' => $id));
    }

    public function cancel_ot($id) {
        $this->db->update('overtime', array('status' => '2', 'approve_hr' => $_SESSION['emp_id'],'comment' => $this->input->post('comment')), array('overtime_id' => $id));
    }

}

