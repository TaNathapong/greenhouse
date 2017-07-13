<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Edit_models extends CI_Model {

    public function get_product_detail($product_id)
    {
        $result = $this->db->select('*')
        ->where('product_id',$food_id)
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
    public function update_product_details(){
        $this->load->module('upload/Myupload');
        $prop = array(
                    'upload_path'	=>'./images_product/',
                    'allowed_types'	=>'jpg|jpeg|png',
                    'txt_upload'	=>'upload_file',
                    'txt_unlink'	=>$this->input->post('file_old'),
                    'default_file'	=>'no-image.png'
                );
        $product_pic = $this->myupload->upload_file($prop);

        $input = array(
            'product_id'				=> $product_id,
            'product_name' 	            => $this->input->post('product_name'),
            'product_unit' 				=> $this->input->post('product_unit'),
            'product_price' 			=> $this->input->post('product_price'),
            'product_link'   			=> $this->input->post('product_link'),
            'product_detail'			=> $this->input->post('product_detail'),
            'product_pic'   			=> $product_pic,

                    );
                    // if($input['product_pic'] == 'no-image.png'){
                    //     unset($input['product_pic']);
                    // }
                    // if($input['product_name'] == null){
                    //     unset($input['product_name']);
                    // }
                    // if($input['food_for'] == null){
                    //     unset($input['food_for']);
                    // }
                    // if($input['food_unit'] == null){
                    //     unset($input['food_unit']);
                    // }
                    // if($input['food_time'] == null){
                    //     unset($input['food_time']);
                    // }
        $this->db->where('product_id',$product_id);
        $this->db->update('product',$input);
    }
}
