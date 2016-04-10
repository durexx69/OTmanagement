<?php

class Position_model extends CI_Model {

    public function __construct() {
        parent::__construct();
//        $this->output->enable_profiler(TRUE);
    }

    public function getposition() {
        $rs = $this->db->query(" SELECT * From position");
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

    public function update_position($id) {
        if ($this->input->post('ok') != null) {
            $ar = array(
                "position_name" => $this->input->post("position")
            );
            $this->db->where('position_id', $id);
            $this->db->update("position", $ar);
            redirect(site_url('position'));
        }
        $sql = " SELECT " .
                " * From position " .
                " WHERE " .
                " position_id = '$id' ";
        $result = $this->db->query($sql);
        return $result->row_array();
    }

}
