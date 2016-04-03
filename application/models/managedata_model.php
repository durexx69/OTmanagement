<?php

class Managedata_model extends CI_Model {

    public function __construct() {
        parent::__construct();
//        $this->output->enable_profiler(TRUE);
    }

    public function get_managedata() {
        $rs = $this->db->query(" SELECT " .
                " iot.issue_id," .
                " iot.start_date, " .
                " iot.end_date, " .
                " iot.start_time, " .
                " iot.end_time, " .
                " iot.work, " .
                " iot.location_work, " .
                " ta.type_allowance " .
                " FROM " .
                " ot.issue_overtime iot " .
                " INNER JOIN " .
                " ot.type_allowance ta on iot.allow_id = ta.allow_id " .
                " INNER JOIN " .
                " ot.type_overtime tt on iot.type_id = tt.type_id order by issue_id asc ");
        return $rs->result_array();
    }

    public function get_appove() {
        $ap = $this->db->query("SELECT " .
                " emp.emp_code, " .
                " emp.fname, " .
                " emp.lname, " .
                " ad.audit_id, " .
                " ad.type_role " .
                " FROM " .
                " audit_overtime ad " .
                " INNER JOIN " .
                " employee emp ON emp.emp_id = ad.emp_id");
        return $ap->result_array();
    }

    public function get_type() {
        $pl = $this->db->query("Select * from type_overtime order by type_id asc");
        return $pl->result_array();
    }

    public function get_allowance() {
        $pl = $this->db->query("Select * from type_allowance order by allow_id asc");
        return $pl->result_array();
    }

    public function insert_managedata() {
        if ($this->input->post('ok') != null) {
            $ar = array(
                "start_date" => $this->input->post("request_date"),
                "end_date" => $this->input->post("end_date"),
                "type_id" => $this->input->post("type"),
                "allow_id" => $this->input->post("allowance"),
                "start_time" => $this->input->post("request_time"),
                "end_time" => $this->input->post("end_time"),
                "work" => $this->input->post("work"),
                "location_work" => $this->input->post("location_work"),
                "overtime_id" => $this->input->post("overtime_id")
            );
            return $this->db->insert('issue_overtime', $ar);
        }
    }

    public function delete_managedata($id) {
        $this->db->delete('issue_overtime', array('issue_id' => $id));
    }

    public function update_managedata($id) {
        if ($this->input->post('ok') != null) {
            $ar = array(
                "start_date" => $this->input->post("request_date"),
                "end_date" => $this->input->post("end_date"),
                "type_id" => $this->input->post("type"),
                "allow_id" => $this->input->post("allowance"),
                "start_time" => $this->input->post("request_time"),
                "end_time" => $this->input->post("end_time"),
                "work" => $this->input->post("work"),
                "location_work" => $this->input->post("location_work"),
                "overtime_id" => $this->input->post("overtime_id")
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
