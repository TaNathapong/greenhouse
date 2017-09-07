<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Member_seller_model extends CI_Model {

	public function add_regis_seller($input){	//ดึงลง DB
				$this->db->insert('member_seller',$input);
				echo("ok");
		}

	public function get_regis_seller(){
		$result = $this->db->get('member_seller',$input)->result_array();
		return $result;
	}

	public function add_product_detail(){	//ดึงลง DB
				$this->db->insert('product',$input);
				echo("ok");
		}

	public function get_product_detail(){
		$result = $this->db->get('product',$input)->result_array();
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
