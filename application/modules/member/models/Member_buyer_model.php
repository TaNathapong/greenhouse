<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member_buyer_model extends CI_Model{


	public function add_member_buyer(){
        $timestam = date('Y-m-d H:i:s');
        $input = array(
        	'mem_buyer_name' 		            => $this->input->post('mem_buyer_name'),
        	'mem_buyer_username' 				=> $this->input->post('mem_buyer_username'),
     		'mem_buyer_password' 				=> $this->input->post('mem_buyer_password'),
            'created'       					=> $timestam,     //อัตโน
            'last_update'    					=> $timestam
            );

		$this->db->insert('member_buyer',$input);
	}

	public function get_member_buyer(){
		$result = $this->db->get('member_buyer')->result_array();
		return $result;
	}

}
