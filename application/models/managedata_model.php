<?php

class Managedata_model extends CI_Model {

    public function __construct() {
        parent::__construct();
//        $this->output->enable_profiler(TRUE);
    }

    public function get_managedata() {
        $rs = $this->db->query(" SELECT * FROM issue_overtime ");
        return $rs->result_array();
    }   
    
        public function get_overtime() {
        $rs = $this->db->query(" SELECT * FROM overtime ");
        return $rs->result_array();
    } 
    
    public function insert_managedata() {
        if ($this->input->post('ok') != null) {
            $ar = array(
                "start_date" => $this->input->post("start_date"),
                "end_date" => $this->input->post("end_date"),
//                "start_date" => $this->input->post("start_date"),
//                "end_date" => $this->input->post("end_date"),
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
                "start_date" => $this->input->post("start_date"),
                "end_date" => $this->input->post("end_date"),
//                "start_time" => $this->input->post("start_date"),
//                "end_time" => $this->input->post("end_date"),
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
