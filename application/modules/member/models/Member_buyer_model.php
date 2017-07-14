<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member_buyer_model extends CI_Model{	//DB  member_buyer สมัครเป็นผู้ซื้อ


	public function add_member_buyer(){
		$timestam = date('Y-m-d H:i:s');
		$input = array(

			'mem_buyer_name' 		            => $this->input->post('mem_buyer_name'),
			//'mem_buyer_pic' 						=> $this->input->post('mem_buyer_pic'),
			'mem_buyer_idcard' 		         => $this->input->post('mem_buyer_idcard'),
			'mem_buyer_birth' 		         => $this->input->post('mem_buyer_birth'),
			'mem_buyer_email' 		         => $this->input->post('mem_buyer_email'),
			'mem_buyer_tel' 		            => $this->input->post('mem_buyer_tel'),
			'mem_buyer_username' 		      => $this->input->post('mem_buyer_username'),
			'mem_buyer_password' 		      => $this->input->post('mem_buyer_password'),
			'mem_buyer_address' 		         => $this->input->post('mem_buyer_address'),
			'mem_buyer_subdistrict' 		  	=> $this->input->post('mem_buyer_subdistrict'),
			'mem_buyer_district' 		      => $this->input->post('mem_buyer_district'),
			'mem_buyer_province' 		      => $this->input->post('mem_buyer_province'),
			'mem_buyer_postcode' 		      => $this->input->post('mem_buyer_postcode'),
			'mem_buyer_address_bill' 		   => $this->input->post('mem_buyer_address_bill'),
			'mem_buyer_subdistrict_bill' 		=> $this->input->post('mem_buyer_subdistrict_bill'),
			'mem_buyer_district_bill' 		   => $this->input->post('mem_buyer_district_bill'),
			'mem_buyer_province_bill' 		   => $this->input->post('mem_buyer_province_bill'),
			'mem_buyer_postcode_bill' 		   => $this->input->post('mem_buyer_postcode_bill'),
			'created'       						=> $timestam,     //อัตโน
			'last_update'    						=> $timestam
		);
		$this->db->insert('member_buyer',$input);
	}
	public function get_member_buyer(){
		$result = $this->db->get('member_buyer')->result_array();
		return $result;
	}

}
