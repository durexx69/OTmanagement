<?php

class Department_model extends CI_Model {

    public function __construct() {
        parent::__construct();
//        $this->output->enable_profiler(TRUE);
    }

    public function getdepartment() {
        $rs = $this->db->query(" SELECT * From department");
        return $rs->result_array();
    }

    public function insert_department() {
        if ($this->input->post('ok') != null) {
            $ar = array(
                "dep_name" => $this->input->post("department")
            );
            $this->db->insert('department', $ar);
        }
    }

    public function delete_department($id) {
        $this->db->delete('department', array('dep_id' => $id));
    }

    public function update_department($id) {
        if ($this->input->post('ok') != null) {
            $ar = array(
                "dep_name" => $this->input->post("department")
            );
            $this->db->where('dep_id', $id);
            $this->db->update("department", $ar);
            redirect(site_url('department'));
        }
        $sql = " SELECT " .
                " * From department ".
                " WHERE " .
                " dep_id = '$id' ";
        $result = $this->db->query($sql);
        return $result->row_array();
    }

}
