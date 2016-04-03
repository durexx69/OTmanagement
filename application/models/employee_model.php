<?php

class Employee_model extends CI_Model {

    public function __construct() {
        parent::__construct();
//        $this->output->enable_profiler(TRUE);
    }

    public function get_employee() {
        $rs = $this->db->query(" SELECT " .
                " em.emp_id, em.card_id, pf.pf_name, em.fname, em.lname, em.nickname, em.sex, dep.dep_name, em.level, em.birthday, em.blood, em.us, em.pw, em.height, em.weight, em.blood, em.image, em.start_date, em.skill, em.salary, em.dep_id, em.tel, em.pf_id " .
                " FROM " .
                " ot.employee em " .
                " INNER JOIN " .
                " ot.department dep ON em.dep_id = dep.dep_id " .
                " INNER JOIN " .
                " ot.prefix pf  ON em.pf_id = pf.pf_id " .
                " WHERE em.isdelete = 0 AND dep.isdelete = 0 AND pf.isdelete = 0");
        return $rs->result_array();
    }

        public function get_prefix() {
        $pf = $this->db->query("Select * from prefix order by pf_id asc");
        return $pf->result_array();
    }

    public function get_department() {
        $pf = $this->db->query("Select * from department order by dep_id asc");
        return $pf->result_array();
    }

    public function insert_emp() {
        if ($this->input->post('ok') != null) {
            $ar = array(
                "emp_id" => $this->input->post("emp_code"),
                "pf_id" => $this->input->post("pf_id"),
                "fname" => $this->input->post("fname_th"),
                "lname" => $this->input->post("lname_th"),
                "nickname" => $this->input->post("nickname"),
                "card_id" => $this->input->post("card_id"),
                "sex" => $this->input->post("sex"),
                "birthday" => $this->input->post("birthday"),
                "blood" => $this->input->post("blood"),
                "weight" => $this->input->post("weight"),
                "height" => $this->input->post("hight"),
                "tel" => $this->input->post("tel"),
                "dep_id" => $this->input->post("dep_id"),
                "level" => $this->input->post("org_position"),
                "salary" => $this->input->post("salary"),
                "start_date" => $this->input->post("start_date"),
                "skill" => $this->input->post("skill"),
                "us" => $this->input->post("user"),
                "pw" => $this->input->post("passwd"),
                "image" => $this->input->post("file")
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
                "emp_id" => $this->input->post("emp_code"),
                "pf_id" => $this->input->post("pf_id"),
                "fname" => $this->input->post("fname_th"),
                "lname" => $this->input->post("lname_th"),
                "nickname" => $this->input->post("nickname"),
                "card_id" => $this->input->post("card_id"),
                "sex" => $this->input->post("sex"),
                "birthday" => $this->input->post("birthday"),
                "blood" => $this->input->post("blood"),
                "weight" => $this->input->post("weight"),
                "height" => $this->input->post("hight"),
                "tel" => $this->input->post("tel"),
                "dep_id" => $this->input->post("dep_id"),
                "level" => $this->input->post("org_position"),
                "salary" => $this->input->post("salary"),
                "start_date" => $this->input->post("start_date"),
                "skill" => $this->input->post("skill"),
                "us" => $this->input->post("user"),
                "pw" => $this->input->post("passwd"),
                "image" => $this->input->post("file")
            );
            $this->db->where('emp_id', $id);
            $this->db->update("employee", $ar);
            redirect(site_url('employee'));
        }
        $sql = " SELECT " .
                " em.emp_id, em.card_id, pf.pf_name, em.fname, em.lname, em.nickname, em.sex, dep.dep_name, em.level, em.birthday, em.blood, em.us, em.pw, em.height, em.weight, em.blood, em.image, em.start_date, em.skill, em.salary, em.dep_id, em.tel, em.pf_id " .
                " FROM " .
                " ot.employee em " .
                " INNER JOIN " .
                " ot.department dep ON em.dep_id = dep.dep_id " .
                " INNER JOIN " .
                " ot.prefix pf  ON em.pf_id = pf.pf_id " .
                " WHERE em.isdelete = 0 AND dep.isdelete = 0 AND pf.isdelete = 0 AND emp_id = '$id' ";
        $result = $this->db->query($sql);
        return $result->row_array();
    }

}
