<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login_model extends CI_Model {

    function __construct() {
        parent::__construct();
//       $this->output->enable_profiler(TRUE);
    }

    public function login($us, $passwd){
        $this->db->select('us,passwd');
        $this->db->from('employee');
        $this->db->where('us', $us);
        $this->db->where('passwd', $passwd);
        
        $query = $this->db->get();
        echo $query->num_rows;
        
        
      $count =  count ($query->result_array());
        
        if($count == 1){
            return 1;
        }else{
            return 0;
        }
    }
}


