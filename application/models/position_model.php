<?php

class Department_model extends CI_Model {

    public function __construct() {
        parent::__construct();
//        $this->output->enable_profiler(TRUE);
    }

    public function getdepartment() {
        $rs = $this->db->query(" SELECT " .
                " de.dep_id, " .
                " de.dep_name, " .
                " pl.pillar_name, " .
                " de.isdelete, " .
                " pl.isdelete " .
                " FROM " .
                " ot.department de " .
                " INNER JOIN " .
                " ot.pillar pl ON de.pillar_id = pl.pillar_id " .
                " WHERE " .
                " de.isdelete = 0 AND pl.isdelete = 0" .
                " ORDER BY de.dep_id asc");
        return $rs->result_array();
    }

    public function get_pillar() {
        $pl = $this->db->query("Select * from pillar order by pillar_id asc");
        return $pl->result_array();
    }

    public function insert_department() {
        if ($this->input->post('ok') != null) {
            $ar = array(
                "pillar_id" => $this->input->post("pillar"),
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
                "pillar_id" => $this->input->post("pillar"),
                "dep_name" => $this->input->post("department")
            );
            $this->db->where('dep_id', $id);
            $this->db->update("department", $ar);
            redirect(site_url('department'));
        }
        $sql = " SELECT " .
                " de.dep_id, " .
                " de.pillar_id, ".
                " de.dep_name, " .
                " pl.pillar_name, " .
                " de.isdelete, " .
                " pl.isdelete " .
                " FROM " .
                " ot.department de " .
                " INNER JOIN " .
                " ot.pillar pl ON de.pillar_id = pl.pillar_id " .
                " WHERE " .
                " de.isdelete = 0 AND pl.isdelete = 0 AND dep_id = '$id' ";
        $result = $this->db->query($sql);
        return $result->row_array();
    }

}
