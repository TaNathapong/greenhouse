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
			'created'       					=> $timestam,     //อัตโน
			'last_update'    					=> $timestam
		);
	$this->db->insert('member_buyer',$input);
		}
	}
	public function get_member_buyer(){
		$result = $this->db->get('member_buyer')->result_array();
		return $result;
	}

}
