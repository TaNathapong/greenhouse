<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class travel_model extends CI_Model{	//DB  member_buyer สมัครเป็นผู้ซื้อ

	public function add_travel ($input){
		{
	$this->load->module('upload/Myupload');
    $prop = array(												//รูป
                'upload_path'   =>'./image_gh/',
                'allowed_types' =>'jpg|jpeg|png',
                'txt_upload'    =>'upload_file',
                'txt_unlink'    =>$this->input->post('file_old'),
                'default_file'  =>'no-image.png'
            );
    $travel_pic = $this->myupload->upload_file($prop);				//รูป
    $timestam = date('Y-m-d H:i:s');
	$input = array(
			'travel_pic'       				=> $travel_pic,
			'travel_name' 		            => $this->input->post('travel_name'),
            'travel_detail' 		        => $this->input->post('travel_detail'),
			'created'       				=> $timestam,     //อัตโน
			'lastupdate'    				=> $timestam
		);
	$this->db->insert('travel',$input);
		}
	}
	public function get_travel(){
		$result = $this->db->get('travel')->result_array(); // ชื่อ ตาราง DB
		return $result;
	}
	
	//model_แก้ไข
	public function get_travel_details($travel_id){
		$result = $this->db->select('*')
		->where('travel_id',$travel_id)
		->from('travel')
		->get()
		->result_array();
		return $result;
	}
	//model_อัพเดท
		 public function update_travel_details($travel_id){
        	$this->load->module('upload/Myupload');
        	$prop = array(
                    'upload_path'	=>'./image_gh/',
                    'allowed_types'	=>'jpg|jpeg|png',
                    'txt_upload'	=>'upload_file',
                    'txt_unlink'	=>$this->input->post('file_old'),
                    'default_file'	=>'no-image.png'
                );
        	$travel_pic = $this->myupload->upload_file($prop);
			$input = array(
					'travel_pic'       				=> $travel_pic,
					'travel_name' 		            => $this->input->post('travel_name'),
		            'travel_detail' 		        => $this->input->post('travel_detail'),
					'created'       				=> $timestam,     //อัตโน
					'lastupdate'    				=> $timestam
					
							 );
                    if($input['travel_pic'] == 'no-image.png'){
                        unset($input['travel_pic']);
                    }
                    if($input['travel_name'] == null){
                        unset($input['travel_name']);
                    }
                    if($input['travel_detail'] == null){
                        unset($input['travel_detail']);
                    }
        	$this->db->where('travel_id',$travel_id);		//อัพเดท  ตามรหัส
        	$this->db->update('travel',$input);
		}



		//model_ลบ
		public function delete_travel($id){
			$this->db->delete('travel', array('travel_id' => $id));	//ลบตาราง  equipment ตามรหัส

		 }



	
}
