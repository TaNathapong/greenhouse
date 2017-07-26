<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
		}
	}
	public function get_regis_seller(){
		$result = $this->db->get('member_seller')->result_array();
		return $result;
	}


	
}
