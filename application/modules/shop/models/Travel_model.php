<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Travel_model extends CI_Model{

    public function get_travel_list(){
        $result = $this->db->get('travel')->result_array();
        return $result;
    }

    public function get_travel_details($travel_id){
        $result = $this->db->select('*')
        ->where('travel_id',$travel_id)
        ->from('travel')
        ->get()
        ->result_array();
        // echo print_r($result);
		// exit();
        return $result;
    }
}
