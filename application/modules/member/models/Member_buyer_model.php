<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member_buyer_model extends CI_Model{	//DB  member_buyer สมัครเป็นผู้ซื้อ

	public function add_member_buyer($input){
		{
			$this->load->module('upload/Myupload');
			$prop = array(												//รูป
				'upload_path'   =>'./image_gh/',
				'allowed_types' =>'jpg|jpeg|png',
				'txt_upload'    =>'upload_file',
				'txt_unlink'    =>$this->input->post('file_old'),
				'default_file'  =>'no-image.png'
			);
			$mem_buyer_pic = $this->myupload->upload_file($prop);				//รูป
			$timestam = date('Y-m-d H:i:s');
			$input = array(
				'mem_buyer_pic'       				=> $mem_buyer_pic,
				'mem_buyer_name' 		            => $this->input->post('mem_buyer_name'),
				'mem_buyer_idcard' 		         	=> $this->input->post('mem_buyer_idcard'),
				'mem_buyer_email' 		         	=> $this->input->post('mem_buyer_email'),
				'mem_buyer_username' 		      	=> $this->input->post('mem_buyer_username'),
				'mem_buyer_password' 		      	=> $this->input->post('mem_buyer_password'),
				'mem_buyer_status' 	 				=> '1',
				'created'       					=> $timestam,
				'lastupdate'    					=> $timestam
			);
			$this->db->insert('member_buyer',$input);
		}
	}
	public function get_member_buyer(){
		$result = $this->db->get('member_buyer')->result_array();
		return $result;
	}
	//model_แก้ไขผู้ซื้อ
	public function get_buyer_details($mem_buyer_id){
		$result = $this->db->select('*')
		->where('mem_buyer_id',$mem_buyer_id)
		->from('member_buyer')
		->get()
		->result_array();
		return $result;
	}
	//model_อัพเดท
		 public function update_buyer_details($mem_buyer_id){
        	$this->load->module('upload/Myupload');
        	$prop = array(
                    'upload_path'	=>'./image_gh/',
                    'allowed_types'	=>'jpg|jpeg|png',
                    'txt_upload'	=>'upload_file',
                    'txt_unlink'	=>$this->input->post('file_old'),
                    'default_file'	=>'no-image.png'
                );
        	$mem_buyer_pic = $this->myupload->upload_file($prop);
			$input = array(
					'mem_buyer_pic'       				=> $mem_buyer_pic,
					'mem_buyer_name' 		            => $this->input->post('mem_buyer_name'),
					'mem_buyer_idcard' 		         	=> $this->input->post('mem_buyer_idcard'),
					'mem_buyer_email' 		         	=> $this->input->post('mem_buyer_email'),
					'mem_buyer_username' 		      	=> $this->input->post('mem_buyer_username'),
					'mem_buyer_password' 		      	=> $this->input->post('mem_buyer_password'),
					'mem_buyer_status' 	 				=> '1',
					'created'       					=> $timestam,
					'lastupdate'    					=> $timestam
							 );
                    if($input['mem_buyer_pic'] == 'no-image.png'){
                        unset($input['mem_buyer_pic']);
                    }
                    if($input['mem_buyer_name'] == null){
                        unset($input['mem_buyer_name']);
                    }
                    if($input['mem_buyer_idcard'] == null){
                        unset($input['mem_buyer_idcard']);
                    }
					if($input['mem_buyer_email'] == null){
                        unset($input['mem_buyer_email']);
                    }
					if($input['mem_buyer_username'] == null){
                        unset($input['mem_buyer_username']);
                    }
					if($input['mem_buyer_password'] == null){
                        unset($input['mem_buyer_password']);
                    }
        	$this->db->where('mem_buyer_id',$mem_buyer_id);		//อัพเดท  ตามรหัส
        	$this->db->update('member_buyer',$input);
		}



		//model_ลบ
		public function delete_buyer($id){
			$this->db->delete('member_buyer', array('mem_buyer_id' => $id));	//ลบตาราง  equipment ตามรหัส

		 }



}
