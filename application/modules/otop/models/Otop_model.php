<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class otop_model extends CI_Model{	//DB  member_buyer สมัครเป็นผู้ซื้อ

	public function add_otop($input){
		{
	$this->load->module('upload/Myupload');
    $prop = array(												//รูป
                'upload_path'   =>'./image_gh/',
                'allowed_types' =>'jpg|jpeg|png',
                'txt_upload'    =>'upload_file',
                'txt_unlink'    =>$this->input->post('file_old'),
                'default_file'  =>'no-image.png'
            );
    $otop_pic = $this->myupload->upload_file($prop);				//รูป
    $timestam = date('Y-m-d H:i:s');
	$input = array(
			'otop_pic'       				=> $otop_pic,
			'otop_name' 		            => $this->input->post('otop_name'),
            'otop_detail' 		        	=> $this->input->post('otop_detail'),
			'created'       				=> $timestam,     //อัตโน
			'lastupdate'    				=> $timestam
		);
	$this->db->insert('otop',$input);
		}
	}
	public function get_otop(){
		$result = $this->db->get('otop')->result_array(); // ชื่อ ตาราง DB
		return $result;
	}
	
	//model_แก้ไข
	public function get_otop_details($otop_id){
		$result = $this->db->select('*')
		->where('otop_id',$otop_id)
		->from('otop')
		->get()
		->result_array();
		return $result;
	}
	//model_อัพเดท
		 public function update_otop_details($otop_id){
        	$this->load->module('upload/Myupload');
        	$prop = array(
                    'upload_path'	=>'./image_gh/',
                    'allowed_types'	=>'jpg|jpeg|png',
                    'txt_upload'	=>'upload_file',
                    'txt_unlink'	=>$this->input->post('file_old'),
                    'default_file'	=>'no-image.png'
                );
        	$otop_pic = $this->myupload->upload_file($prop);
			$input = array(
					'otop_pic'       				=> $otop_pic,
					'otop_name' 		            => $this->input->post('otop_name'),
		            'otop_detail' 		        	=> $this->input->post('otop_detail'),
					'created'       				=> $timestam,     //อัตโน
					'lastupdate'    				=> $timestam
					
							 );
                    if($input['otop_pic'] == 'no-image.png'){
                        unset($input['otop_pic']);
                    }
                    if($input['otop_name'] == null){
                        unset($input['otop_name']);
                    }
                    if($input['otop_detail'] == null){
                        unset($input['otop_detail']);
                    }
        	$this->db->where('otop_id',$otop_id);		//อัพเดท  ตามรหัส
        	$this->db->update('otop',$input);
		}



		//model_ลบ
		public function delete_otop($id){
			$this->db->delete('otop', array('otop_id' => $id));	//ลบตาราง  equipment ตามรหัส

		 }



	
}
