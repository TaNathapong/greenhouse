<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Member_seller_model extends CI_Model {
	
	public function add_regis_seller($input){
			$timestam = date('Y-m-d H:i:s');
			$input = array(
				'mem_seller_name' 				=> $this->input->post('mem_seller_name'),
				'mem_seller_idcard' 			=> $this->input->post('mem_seller_idcard'),
				'mem_seller_birth'				=> $this->input->post('mem_seller_birth'),
				'mem_seller_email' 				=> $this->input->post('mem_seller_email'),
				'mem_seller_tel' 				=> $this->input->post('mem_seller_tel'),
				'mem_seller_username' 			=> $this->input->post('mem_seller_username'),
				'mem_seller_password' 			=> $this->input->post('mem_seller_password'),
				'mem_seller_address_bill' 		=> $this->input->post('mem_seller_address_bill'),
				'mem_seller_subdistrict_bill' 	=> $this->input->post('mem_seller_subdistrict_bill'),
				'mem_seller_district_bill' 		=> $this->input->post('mem_seller_district_bill'),
				'mem_seller_province_bill' 		=> $this->input->post('mem_seller_province_bill'),
				'mem_seller_bussiness_name' 	=> $this->input->post('mem_seller_bussiness_name'),
				'mem_seller_bussiness_address'	=> $this->input->post('mem_seller_bussiness_address'),
				'mem_seller_bussiness_subdistric'=>$this->input->post('mem_seller_bussiness_subdistric'),
				'mem_seller_bussiness_distric'	=> $this->input->post('mem_seller_bussiness_distric'),
				'mem_seller_bussiness_province'	=> $this->input->post('mem_seller_bussiness_province'),
				'mem_seller_bussiness_detail' 	=> $this->input->post('mem_seller_bussiness_detail'),
				'mem_seller_payment' 			=> $this->input->post('mem_seller_payment'),
				'mem_seller_payment_name' 		=> $this->input->post('mem_seller_payment_name'),
				'mem_seller_payment_id' 		=> $this->input->post('mem_seller_payment_id'),
            	'created'       				=> $timestam,
            	'last_update'    				=> $timestam
				);
			
				$this->db->insert('member_seller',$input);
		}

	public function get_regis_seller(){
		$result = $this->db->get('member_seller',$input)->result_array();
		return $result;
	}

	public function get_seller_data_detail($id){
			$result = $this->db->select('*')
			->where('mem_seller_id',$mem_seller_id)
			->from('member_seller')
			->get()
			->result_array();
			return $result;
	}
}//end class
