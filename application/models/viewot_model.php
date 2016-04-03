<?php

class Viewot_model extends CI_Model {

    public function __construct() {
        parent::__construct();
//        $this->output->enable_profiler(TRUE);
    }

    public function get_viewot() {
        $rs = $this->db->query(" SELECT * from overtime order by overtime_id asc");
        return $rs->result_array();
    }

    public function insert_viewot() {
        if ($this->input->post('ok') != null) {
            $array = array(
                "monthly" => $this->input->post("monthly"),
                "emp_id" => $this->input->post("emp_id")
            );
            $this->db->insert('overtime', $array);
        }
    }

    public function delete_viewot($id) {
        $this->db->delete('issue_overtime', array('issue_id' => $id));
    }

    public function update_viewot($id) {
        if ($this->input->post('ok') != null) {
            $ar = array(
                "start_date" => $this->input->post("request_date"),
                "end_date" => $this->input->post("end_date"),
                "type_id" => $this->input->post("type"),
                "allow_id" => $this->input->post("allowance"),
                "start_time" => $this->input->post("request_time"),
                "end_time" => $this->input->post("end_time"),
                "work" => $this->input->post("work"),
                "location_work" => $this->input->post("location_work")
            );
            $this->db->where('issue_id', $id);
            $this->db->update("issue_overtime", $ar);
            redirect(site_url('managedata_overtime'));
        }
        $sql = " Select * from issue_overtime where issue_id = '$id' ";
        $result = $this->db->query($sql);
        return $result->row_array();
    }

}
