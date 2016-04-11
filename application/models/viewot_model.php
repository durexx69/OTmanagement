<?php

class Viewot_model extends CI_Model {

    public function __construct() {
        parent::__construct();
//        $this->output->enable_profiler(TRUE);
    }

    public function get_viewot() {
        $rs = $this->db->query(" SELECT * FROM overtime");
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
}
