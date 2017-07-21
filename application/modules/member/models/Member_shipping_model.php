<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member_shipping_model extends CI_Model{

	public function add_regis_shipping(){
        $this->load->module('upload/Myupload');
        $prop = array(
                    'upload_path'   =>'./image_gh/',
                    'allowed_types' =>'jpg|jpeg|png',
                    'txt_upload'    =>'upload_file',
                    'txt_unlink'    =>$this->input->post('file_old'),
                    'default_file'  =>'no-image.png'
                );
        $mem_shipper_pic = $this->myupload->upload_file($prop);

        $timestam = date('Y-m-d H:i:s');
        $input = array(
			'mem_shipper_pic'         			=> $mem_shipper_pic,
			'mem_shipper_name' 					=> $this->input->post('mem_shipper_name'),
			'mem_shipper_idcard' 				=> $this->input->post('mem_shipper_idcard'),
			'mem_shipper_email'                 => $this->input->post('mem_shipper_email'),
        	'mem_shipper_username' 				=> $this->input->post('mem_shipper_username'),
     		'mem_shipper_password' 				=> $this->input->post('mem_shipper_password'),
            'mem_shipper_status'                => '1',
			'created'       					=> $timestam,
            'last_update'    					=> $timestam
            );

		$this->db->insert('member_shipper',$input);
	}

	public function get_regis_shipping(){
		$result = $this->db->get('member_shipper')->result_array();
		return $result;
	}

}
