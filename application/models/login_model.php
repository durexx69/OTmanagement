<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login_model extends CI_Model {

    function __construct() {
        parent::__construct();
//       $this->output->enable_profiler(TRUE);
    }

    public function login($us, $passwd) {
        $this->db->select('us,passwd,emp_id,emp_code,emp_fname,emp_lname,position_id');
        $this->db->from('employee');
        $this->db->where('us', $us);
        $this->db->where('passwd', $passwd);

        $query = $this->db->get();

        $employee = $query->result_array();

//        print_r($_SESSION);
//        print_r($employee);
//        
//        echo $employee[0]['emp_id'];
//        foreach ($employee as $key => $value) {
//
//            echo $value['emp_id'];
//            echo $value['emp_code'];
//            echo $value['emp_fname'];
//            echo $value['emp_lname'];
//            echo $value['us'];
//        }

        $count = count($query->result_array());

        if ($count == 1) {
            $this->session->set_userdata('emp_id', $employee[0]['emp_id']);
            $this->session->set_userdata('emp_code', $employee[0]['emp_code']);
            $this->session->set_userdata('emp_fname', $employee[0]['emp_fname']);
            $this->session->set_userdata('emp_lname', $employee[0]['emp_lname']);
            $this->session->set_userdata('position_id', $employee[0]['position_id']);
            $this->session->set_userdata('us', $employee[0]['us']);
            return 1;
        } else {
            return 0;
        }
    }

}

