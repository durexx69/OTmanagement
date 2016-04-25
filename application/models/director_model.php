<?php

class Director_model extends CI_Model {

    public function __construct() {
        parent::__construct();
//        $this->output->enable_profiler(TRUE);
    }

    public function getdirector_appove() {
        $rs = $this->db->query(" SELECT * FROM employee " .
                " INNER JOIN " .
                " department " .
                " ON " .
                " employee.dep_id = department.dep_id " .
                " INNER JOIN " .
                " overtime ON overtime.emp_id = employee.emp_id ");
        return $rs->result_array();
    }

    public function insert_position() {
        if ($this->input->post('ok') != null) {
            $ar = array(
                "position_name" => $this->input->post("position")
            );
            $this->db->insert('position', $ar);
        }
    }

    public function delete_position($id) {
        $this->db->delete('position', array('position_id' => $id));
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
                "overtime.overtime_id = issue_overtime.overtime_id ".
                " WHERE overtime.emp_id =  '$id' ");
        return $rs->result_array();
    }

}
