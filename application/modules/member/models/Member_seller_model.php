<?php
defined('BASEPATH') OR exit('No direct script access allowed');

<<<<<<< HEAD
	public function add_regis_seller($input){	//ดึงลง DB
				$this->db->insert('member_seller',$input);
				echo("ok");
=======
class Member_seller_model extends CI_Model{	//DB  member_buyer สมัครเป็นผู้ซื้อ

	public function add_regis_seller($input){
		{
	$this->load->module('upload/Myupload');
    $prop = array(												//รูป
                'upload_path'   =>'./image_gh/',
                'allowed_types' =>'jpg|jpeg|png',
                'txt_upload'    =>'upload_file',
                'txt_unlink'    =>$this->input->post('file_old'),
                'default_file'  =>'no-image.png'
            );
    $mem_seller_pic = $this->myupload->upload_file($prop);				//รูป
    $timestam = date('Y-m-d H:i:s');
	$input = array(
			'mem_seller_pic'       				=> $mem_seller_pic,
			'mem_seller_name' 		            => $this->input->post('mem_seller_name'),
            'mem_seller_idcard' 		        => $this->input->post('mem_seller_idcard'),
            'mem_seller_email' 		            => $this->input->post('mem_seller_email'),
			'mem_seller_username' 		        => $this->input->post('mem_seller_username'),
			'mem_seller_password' 		        => $this->input->post('mem_seller_password'),
			'mem_seller_status' 	 			=> '1',
			'created'       					=> $timestam,     //อัตโน
			'last_update'    					=> $timestam
		);
	$this->db->insert('member_seller',$input);
>>>>>>> 419c92db7b3a4be108f709d4160f815ec141b036
		}
	}
	public function get_regis_seller(){
		$result = $this->db->get('member_seller')->result_array();
		return $result;
	}
<<<<<<< HEAD

	public function add_product_detail(){	//ดึงลง DB
				$this->db->insert('product',$input);
				echo("ok");
=======
	//model_แก้ไขผู้ขาย
	public function get_seller_details($mem_seller_id){
		$result = $this->db->select('*')
		->where('mem_seller_id',$mem_seller_id)
		->from('member_seller')
		->get()
		->result_array();
		return $result;
	}
	//model_อัพเดท
		 public function update_seller_details($mem_seller_id){
        	$this->load->module('upload/Myupload');
        	$prop = array(
                    'upload_path'	=>'./image_gh/',
                    'allowed_types'	=>'jpg|jpeg|png',
                    'txt_upload'	=>'upload_file',
                    'txt_unlink'	=>$this->input->post('file_old'),
                    'default_file'	=>'no-image.png'
                );
        	$mem_seller_pic = $this->myupload->upload_file($prop);
			$input = array(
					'mem_seller_pic'       				=> $mem_seller_pic,
					'mem_seller_name' 		            => $this->input->post('mem_seller_name'),
					'mem_seller_idcard' 		        => $this->input->post('mem_seller_idcard'),
					'mem_seller_email' 		         	=> $this->input->post('mem_seller_email'),
					'mem_seller_username' 		      	=> $this->input->post('mem_seller_username'),
					'mem_seller_password' 		      	=> $this->input->post('mem_seller_password'),
					'mem_seller_status' 	 		    => '1',
					
							 );
                    if($input['mem_seller_pic'] == 'no-image.png'){
                        unset($input['mem_seller_pic']);
                    }
                    if($input['mem_seller_name'] == null){
                        unset($input['mem_seller_name']);
                    }
                    if($input['mem_seller_idcard'] == null){
                        unset($input['mem_seller_idcard']);
                    }
					if($input['mem_seller_email'] == null){
                        unset($input['mem_seller_email']);
                    }
					if($input['mem_seller_username'] == null){
                        unset($input['mem_seller_username']);
                    }
					if($input['mem_seller_password'] == null){
                        unset($input['mem_seller_password']);
                    }
        	$this->db->where('mem_seller_id',$mem_seller_id);		//อัพเดท  ตามรหัส
        	$this->db->update('member_seller',$input);
>>>>>>> 419c92db7b3a4be108f709d4160f815ec141b036
		}


<<<<<<< HEAD
	public function get_seller_data_detail($id){
			$result = $this->db->select('*')
			->where('mem_seller_id',$mem_seller_id)
			->from('member_seller')
			->get()
			->result_array();
			return $result;
	}
	
}//end class
=======

		//model_ลบ
		public function delete_seller($id){
			$this->db->delete('member_seller', array('mem_seller_id' => $id));	//ลบตาราง  equipment ตามรหัส

		 }



	
}
>>>>>>> 419c92db7b3a4be108f709d4160f815ec141b036
