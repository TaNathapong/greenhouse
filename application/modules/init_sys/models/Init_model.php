<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Init_model extends CI_Model{

    public function get_product_list(){
        $result = $this->db->get('product')->result_array();
        return $result;
    }

}
