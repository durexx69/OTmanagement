<?php

class Viewot_model extends CI_Model {

    public function __construct() {
        parent::__construct();
//        $this->output->enable_profiler(TRUE);
    }

//    public function get_viewot() {
//        $rs = $this->db->query(" SELECT * FROM overtime");
//        return $rs->result_array();
//    }

    public function get_ot() {
        $rs = $this->db->query(" SELECT * " .
                " FROM overtime " .
                " WHERE emp_id =  " . $_SESSION['emp_id']);
        return $rs->result_array();
    }

    public function insert_viewot() {
        if ($this->input->post('ok') != null) {
            $array = array(
                "monthly" => $this->input->post("monthly") . '-01',
                "emp_id" => $this->input->post("emp_id")
            );
            $this->db->insert('overtime', $array);
        }
    }

    public function check($monthly, $emp_id) {
        $this->db->select('*');
        $this->db->from('overtime');
        $this->db->where('monthly', $monthly);
        $this->db->where('emp_id', $emp_id);

        $query = $this->db->get();
        $monthly = $query->result_array();

        $count = count($query->result_array());
        if ($count == 1) {
            return 0;
        } else {
            return 1;
        }
    }

}
