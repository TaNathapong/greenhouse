<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class vegetable_model extends CI_Model{	//DB  member_buyer สมัครเป็นผู้ซื้อ

	public function add_vegetable($input){
		{
	$this->load->module('upload/Myupload');
    $prop = array(												//รูป
                'upload_path'   =>'./image_gh/',
                'allowed_types' =>'jpg|jpeg|png',
                'txt_upload'    =>'upload_file',
                'txt_unlink'    =>$this->input->post('file_old'),
                'default_file'  =>'no-image.png'
            );
    $vegetable_pic = $this->myupload->upload_file($prop);				//รูป
    $timestam = date('Y-m-d H:i:s');
	$input = array(
			'vegetable_pic'       			=> $vegetable_pic,
			'vegetable_name' 		        => $this->input->post('vegetable_name'),
            'vegetable_detail' 		       	=> $this->input->post('vegetable_detail'),
            'vegetable_pice' 		       	=> $this->input->post('vegetable_pice'),
			'created'       				=> $timestam,     //อัตโน
			'lastupdate'    				=> $timestam
		);
	$this->db->insert('vegetable',$input);
		}
	}
	public function get_vegetable(){
		$result = $this->db->get('vegetable')->result_array(); // ชื่อ ตาราง DB
		return $result;
	}
	
	//model_แก้ไข
	public function get_vegetable_details($vegetable_id){
		$result = $this->db->select('*')
		->where('vegetable_id',$vegetable_id)
		->from('vegetable')
		->get()
		->result_array();
		return $result;
	}
	//model_อัพเดท
		 public function update_vegetable_details($vegetable_id){
        	$this->load->module('upload/Myupload');
        	$prop = array(
                    'upload_path'	=>'./image_gh/',
                    'allowed_types'	=>'jpg|jpeg|png',
                    'txt_upload'	=>'upload_file',
                    'txt_unlink'	=>$this->input->post('file_old'),
                    'default_file'	=>'no-image.png'
                );
        	$vegetable_pic = $this->myupload->upload_file($prop);
			$input = array(
					'vegetable_pic'       			=> $vegetable_pic,
					'vegetable_name' 		        => $this->input->post('vegetable_name'),
		            'vegetable_detail' 		    	=> $this->input->post('vegetable_detail'),
		            'vegetable_pice' 		       	=> $this->input->post('vegetable_pice'),
					'created'       				=> $timestam,     //อัตโน
					'lastupdate'    				=> $timestam
					
							 );
                    if($input['vegetable_pic'] == 'no-image.png'){
                        unset($input['vegetable_pic']);
                    }
                    if($input['vegetable_name'] == null){
                        unset($input['vegetable_name']);
                    }
                    if($input['vegetable_detail'] == null){
                        unset($input['vegetable_detail']);
                    }
                    if($input['vegetable_pice'] == null) {
                        unset($input['vegetable_pice']);
                    }
        	$this->db->where('vegetable_id',$vegetable_id);		//อัพเดท  ตามรหัส
        	$this->db->update('vegetable',$input);
		}


		//model_ลบ
		public function delete_vegetable($id){
			$this->db->delete('vegetable', array('vegetable_id' => $id));	//ลบตาราง  equipment ตามรหัส

		 }
	
}
