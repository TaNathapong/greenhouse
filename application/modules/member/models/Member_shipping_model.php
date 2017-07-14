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
        $mat_pic = $this->myupload->upload_file($prop);

        $timestam = date('Y-m-d H:i:s');
        $input = array(
            'mem_shipper_id'                    => $mem_shipper_id,
        	'mem_shipper_username' 				=> $this->input->post('mem_shipper_username'),
     		'mem_shipper_password' 				=> $this->input->post('mem_shipper_password'),
            'mem_shipper_status'                => '0',

            'mem_shipper_email'                 => $this->input->post('mem_shipper_email'),
            'mem_shipper_tel'                   => $this->input->post('mem_shipper_tel'),
            'mem_shipper_address'               => $this->input->post('mem_shipper_address'),
            'mem_shipper_subdistrict'           => $this->input->post('mem_shipper_subdistrict'),
            'mem_shipper_district'              => $this->input->post('mem_shipper_district'),
            'mem_shipper_province'              => $this->input->post('mem_shipper_province'),
            'mem_shipper_postcode'               => $this->input->post('mem_shipper_postcode'),


            'mem_shipper_address_bill'          => $this->input->post('mem_shipper_address_bill'),
            'mem_shipper_subdistrict_bill'      => $this->input->post('mem_shipper_subdistrict_bill'),
            'mem_shipper_district_bill'         => $this->input->post('mem_shipper_district_bill'),
            'mem_shipper_province_bill'         => $this->input->post('mem_shipper_province_bill'),
            'mem_shipper_postcode_bill'         => $this->input->post('mem_shipper_postcode_bill'),

            'mem_shipper_bussiness_name'        => $this->input->post('mem_shipper_bussiness_name'),
            'mem_shipper_bussiness_detail'      => $this->input->post('mem_shipper_bussiness_detail'),
            'mem_shipper_bussiness_pic'         => $mem_shipper_bussiness_pic,

            'mem_shipper_payment'               => $this->input->post('mem_shipper_payment'),
            'mem_shipper_payment_name'          => $this->input->post('mem_shipper_payment_name'),
            'mem_shipper_payment_id'            => $mem_shipper_payment_id,

            'mem_shipper_area'                  => $this->input->post('mem_shipper_area'),
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
