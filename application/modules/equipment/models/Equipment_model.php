<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class equipment_model extends CI_Model{	//DB  member_buyer สมัครเป็นผู้ซื้อ

	public function add_equipment($input){
		{
	$this->load->module('upload/Myupload');
    $prop = array(												//รูป
                'upload_path'   =>'./image_gh/',
                'allowed_types' =>'jpg|jpeg|png',
                'txt_upload'    =>'upload_file',
                'txt_unlink'    =>$this->input->post('file_old'),
                'default_file'  =>'no-image.png'
            );
    $equipment_pic = $this->myupload->upload_file($prop);				//รูป
    $timestam = date('Y-m-d H:i:s');
	$input = array(
			'equipment_pic'       			=> $equipment_pic,
			'equipment_name' 		        => $this->input->post('equipment_name'),
            'equipment_detail' 		       	=> $this->input->post('equipment_detail'),
            'equipment_pice' 		       	=> $this->input->post('equipment_pice'),
			'created'       				=> $timestam,     //อัตโน
			'lastupdate'    				=> $timestam
		);
	$this->db->insert('equipment',$input);
		}
	}
	public function get_equipment(){
		$result = $this->db->get('equipment')->result_array(); // ชื่อ ตาราง DB
		return $result;
	}
	
	//model_แก้ไข
	public function get_equipment_details($equipment_id){
		$result = $this->db->select('*')
		->where('equipment_id',$equipment_id)
		->from('equipment')
		->get()
		->result_array();
		return $result;
	}
	//model_อัพเดท
		 public function update_equipment_details($equipment_id){
        	$this->load->module('upload/Myupload');
        	$prop = array(
                    'upload_path'	=>'./image_gh/',
                    'allowed_types'	=>'jpg|jpeg|png',
                    'txt_upload'	=>'upload_file',
                    'txt_unlink'	=>$this->input->post('file_old'),
                    'default_file'	=>'no-image.png'
                );
        	$equipment_pic = $this->myupload->upload_file($prop);
			$input = array(
					'equipment_pic'       			=> $equipment_pic,
					'equipment_name' 		        => $this->input->post('equipment_name'),
		            'equipment_detail' 		    	=> $this->input->post('equipment_detail'),
		            'equipment_pice' 		       	=> $this->input->post('equipment_pice'),
					'created'       				=> $timestam,     //อัตโน
					'lastupdate'    				=> $timestam
					
							 );
                    if($input['equipment_pic'] == 'no-image.png'){
                        unset($input['equipment_pic']);
                    }
                    if($input['equipment_name'] == null){
                        unset($input['equipment_name']);
                    }
                    if($input['equipment_detail'] == null){
                        unset($input['equipment_detail']);
                    }
                    if($input['equipment_pice'] == null) {
                        unset($input['equipment_pice']);
                    }
        	$this->db->where('equipment_id',$equipment_id);		//อัพเดท  ตามรหัส
        	$this->db->update('equipment',$input);
		}



		//model_ลบ
		public function delete_equipment($id){
			$this->db->delete('equipment', array('equipment_id' => $id));	//ลบตาราง  equipment ตามรหัส

		 }



	
}
