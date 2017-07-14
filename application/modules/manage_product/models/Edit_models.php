<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Edit_models extends CI_Model {

    public function get_product_detail($product_id)
    {
        $result = $this->db->select('*')
        ->where('product_id',$product_id)
        ->from('product')
        ->get()
        ->result_array();
        return $result;
    }
    public function get_auc_detail($product_id)
    {
        $result = $this->db->select('*')
        ->where('product_id',$product_id)
        ->from('product')
        ->get()
        ->result_array();
        return $result;
    }
    public function get_travel_list($qstr)
    {
      $items='*';
      $results = $this->db->select($items)
                      ->from('travel')
                      ->where($qstr)
                      ->get()
                      ->result_array();
      return $results;
    }
    public function update_product_detail($product_id){
        $this->load->module('upload/Myupload');
        $prop = array(
                    'upload_path'	=>'./images_gh/',
                    'allowed_types'	=>'jpg|jpeg|png',
                    'txt_upload'	=>'upload_file',
                    'txt_unlink'	=>$this->input->post('file_old'),
                    'default_file'	=>'no-image.png'
                );
        $product_pic = $this->myupload->upload_file($prop);

        $input = array(
            'product_name' 	            => $this->input->post('product_name'),
            'product_unit' 				=> $this->input->post('product_unit'),
            'product_price' 			=> $this->input->post('product_price'),
            'product_link'   			=> $this->input->post('product_link'),
            'product_detail'			=> $this->input->post('product_detail'),
            'product_location'   		=> $this->input->post('product_location'),
            'product_tag'			    => $this->input->post('product_tag'),

                    );
                    if($input['product_name'] == null){
                        unset($input['product_name']);
                    }
                    if($input['product_unit'] == null){
                        unset($input['product_unit']);
                    }
                    if($input['product_price'] == null){
                        unset($input['product_price']);
                    }
                    if($input['product_link'] == null){
                        unset($input['product_link']);
                    }
                    if($input['product_detail'] == null){
                        unset($input['product_detail']);
                    }
                    if($input['product_location'] == null){
                        unset($input['product_location']);
                    }
                    if($input['product_tag'] == null){
                        unset($input['product_tag']);
                    }
        $this->db->where('product_id',$product_id);
        $this->db->update('product',$input);
    }
}
