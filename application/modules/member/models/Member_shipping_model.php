<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member_shipping_model extends CI_Model{

	public function add_regis_shipping(){
        $timestam = date('Y-m-d H:i:s');
        $input = array(
        	'mem_shipper_bussiness_name' 		=> $this->input->post('mem_shipper_bussiness_name'),
        	'mem_shipper_username' 				=> $this->input->post('mem_shipper_username'),
     		'mem_shipper_password' 				=> $this->input->post('mem_shipper_password'),
            'created'       					=> $timestam,
            'last_update'    					=> $timestam
            );

		$this->db->insert('member_shipper',$input);
	}

	public function get_regis_shipping(){
		$result = $this->db->get('member_shipper')->result_array();
		return $result;
	}

}
