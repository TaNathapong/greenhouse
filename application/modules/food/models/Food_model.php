<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class food_model extends CI_Model{	//DB  member_buyer สมัครเป็นผู้ซื้อ

	public function add_food($input){
		{
	$this->load->module('upload/Myupload');
    $prop = array(												//รูป
                'upload_path'   =>'./image_gh/',
                'allowed_types' =>'jpg|jpeg|png',
                'txt_upload'    =>'upload_file',
                'txt_unlink'    =>$this->input->post('file_old'),
                'default_file'  =>'no-image.png'
            );
    $food_pic = $this->myupload->upload_file($prop);				//รูป
    $timestam = date('Y-m-d H:i:s');
	$input = array(
			'food_pic'       				=> $food_pic,
			'food_name' 		            => $this->input->post('food_name'),
            'food_detail' 		        	=> $this->input->post('food_detail'),
			'created'       				=> $timestam,     //อัตโน
			'lastupdate'    				=> $timestam
		);
	$this->db->insert('food',$input);
		}
	}
	public function get_food(){
		$result = $this->db->get('food')->result_array(); // ชื่อ ตาราง DB
		return $result;
	}
	
	//model_แก้ไข
	public function get_food_details($food_id){
		$result = $this->db->select('*')
		->where('food_id',$food_id)
		->from('food')
		->get()
		->result_array();
		return $result;
	}
	//model_อัพเดท
		 public function update_food_details($food_id){
        	$this->load->module('upload/Myupload');
        	$prop = array(
                    'upload_path'	=>'./image_gh/',
                    'allowed_types'	=>'jpg|jpeg|png',
                    'txt_upload'	=>'upload_file',
                    'txt_unlink'	=>$this->input->post('file_old'),
                    'default_file'	=>'no-image.png'
                );
        	$food_pic = $this->myupload->upload_file($prop);
			$input = array(
					'food_pic'       				=> $food_pic,
					'food_name' 		            => $this->input->post('food_name'),
		            'food_detail' 		        	=> $this->input->post('food_detail'),
					'created'       				=> $timestam,     //อัตโน
					'lastupdate'    				=> $timestam
					
							 );
                    if($input['food_pic'] == 'no-image.png'){
                        unset($input['food_pic']);
                    }
                    if($input['food_name'] == null){
                        unset($input['food_name']);
                    }
                    if($input['food_detail'] == null){
                        unset($input['food_detail']);
                    }
        	$this->db->where('food_id',$food_id);		//อัพเดท  ตามรหัส
        	$this->db->update('food',$input);
		}



		//model_ลบ
		public function delete_food($id){
			$this->db->delete('food', array('food_id' => $id));	//ลบตาราง  equipment ตามรหัส

		 }
}
