<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class processing_model extends CI_Model{	//DB  member_buyer สมัครเป็นผู้ซื้อ

	public function add_processing($input){
		{
	$this->load->module('upload/Myupload');
    $prop = array(												//รูป
                'upload_path'   =>'./image_gh/',
                'allowed_types' =>'jpg|jpeg|png',
                'txt_upload'    =>'upload_file',
                'txt_unlink'    =>$this->input->post('file_old'),
                'default_file'  =>'no-image.png'
            );
    $processing_pic = $this->myupload->upload_file($prop);				//รูป
    $timestam = date('Y-m-d H:i:s');
	$input = array(
			'processing_pic'       				=> $processing_pic,
			'processing_name' 		            => $this->input->post('processing_name'),
            'processing_detail' 		        => $this->input->post('processing_detail'),
			'created'       					=> $timestam,     //อัตโน
			'lastupdate'    					=> $timestam
		);
	$this->db->insert('processing',$input);
		}
	}
	public function get_processing(){
		$result = $this->db->get('processing')->result_array(); // ชื่อ ตาราง DB
		return $result;
	}
	
	//model_แก้ไข
	public function get_processing_details($processing_id){
		$result = $this->db->select('*')
		->where('processing_id',$processing_id)
		->from('processing')
		->get()
		->result_array();
		return $result;
	}
	//model_อัพเดท
		 public function update_processing_details($processing_id){
        	$this->load->module('upload/Myupload');
        	$prop = array(
                    'upload_path'	=>'./image_gh/',
                    'allowed_types'	=>'jpg|jpeg|png',
                    'txt_upload'	=>'upload_file',
                    'txt_unlink'	=>$this->input->post('file_old'),
                    'default_file'	=>'no-image.png'
                );
        	$processing_pic = $this->myupload->upload_file($prop);
			$input = array(
					'processing_pic'       				=> $processing_pic,
					'processing_name' 		            => $this->input->post('processing_name'),
		            'processing_detail' 		        => $this->input->post('processing_detail'),
					'created'       					=> $timestam,     //อัตโน
					'lastupdate'    					=> $timestam
					
							 );
                    if($input['processing_pic'] == 'no-image.png'){
                        unset($input['processing_pic']);
                    }
                    if($input['processing_name'] == null){
                        unset($input['processing_name']);
                    }
                    if($input['processing_detail'] == null){
                        unset($input['processing_detail']);
                    }
        	$this->db->where('processing_id',$processing_id);		//อัพเดท  ตามรหัส
        	$this->db->update('processing',$input);
		}



		//model_ลบ
		public function delete_processing($id){
			$this->db->delete('processing', array('processing_id' => $id));	//ลบตาราง  equipment ตามรหัส

		 }



	
}
