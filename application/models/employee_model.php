<?php

class Employee_model extends CI_Model {

    public function __construct() {
        parent::__construct();
//        $this->output->enable_profiler(TRUE);
    }

    public function get_employee() {
        $rs = $this->db->query(" SELECT " .
                " emp_id, emp_code, emp_fname, emp_lname, nickname, tel, position_name, dep_name, us, passwd " .
                " FROM " .
                " employee emp " .
                " INNER JOIN " .
                " department dep ON emp.dep_id = dep.dep_id " .
                " INNER JOIN " .
                " position p  ON emp.position_id = p.position_id ");
        return $rs->result_array();
    }
    
        public function get_leaderlist() {
        $rs = $this->db->query(" SELECT * FROM employee WHERE position_id = 2 ");
        return $rs->result_array();
    }
    
        public function get_position() {
        $pf = $this->db->query("Select * from position order by position_id asc");
        return $pf->result_array();
    }

    public function get_department() {
        $pf = $this->db->query("Select * from department order by dep_id asc");
        return $pf->result_array();
    }

    public function insert_emp() {
        if ($this->input->post('ok') != null) {
            $ar = array(
                "emp_code" => $this->input->post("emp_code"),
                "emp_fname" => $this->input->post("emp_fname"),
                "emp_lname" => $this->input->post("emp_lname"),
                "nickname" => $this->input->post("nickname"),
                "tel" => $this->input->post("tel"),
                "dep_id" => $this->input->post("dep_id"),
                "position_id" => $this->input->post("position_id"),
                "us" => $this->input->post("user"),
                "passwd" => $this->input->post("passwd"),
                "leader_id" => $this->input->post("leader")
            );
            $this->db->insert('employee', $ar);
        }
    }

    public function delete_employee($id) {
        $this->db->delete('employee', array('emp_id' => $id));
    }

    public function update_employee($id) {
        if ($this->input->post('ok') != null) {
            $ar = array(
                "emp_code" => $this->input->post("emp_code"),
                "emp_fname" => $this->input->post("emp_fname"),
                "emp_lname" => $this->input->post("emp_lname"),
                "nickname" => $this->input->post("nickname"),
                "tel" => $this->input->post("tel"),
                "dep_id" => $this->input->post("dep_id"),
                "position_id" => $this->input->post("position_id"),
                "us" => $this->input->post("user"),
                "passwd" => $this->input->post("passwd"),
                "leader_id" => $this->input->post("leader")
            );
            $this->db->where('emp_id', $id);
            $this->db->update("employee", $ar);
            redirect(site_url('employee'));
        }
        $sql = " SELECT " .
                " emp_id, emp_code, emp_fname, emp_lname, nickname, tel, position_name, dep_name, us, passwd " .
                " FROM " .
                " employee emp " .
                " INNER JOIN " .
                " department dep ON emp.dep_id = dep.dep_id " .
                " INNER JOIN " .
                " position p  ON emp.position_id = p.position_id " .
                " WHERE emp_id = '$id' ";
        $result = $this->db->query($sql);
        return $result->row_array();
    }

}
