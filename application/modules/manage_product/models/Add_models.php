<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Add_models extends CI_Model {
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
    public function get_travel_detail($qstr)
    {
      $items='*';
      $results = $this->db->select($items)
                      ->from('travel')
                      ->where($qstr)
                      ->get()
                      ->result_array();
      return $results;
    }
    public function add_product_detail()
    {
        $this->load->module('upload/Myupload');
        $prop = array(
                    'upload_path'   =>'./images_gh/',
                    'allowed_types' =>'jpg|jpeg|png',
                    'txt_upload'    =>'upload_file',
                    'txt_unlink'    =>$this->input->post('file_old'),
                    'default_file'  =>'no-image.png'
                );

        $product_pic = $this->myupload->upload_file($prop);
        // $cate_id = $this->session->userdata('select_items_one');

        $timestamp = date('Y-m-d H:i:s');
        $this->load->model('Add_models');
        $input = array(
            'product_name' 	            => $this->input->post('product_name'),
            'product_unit' 				=> $this->input->post('product_unit'),
            'product_price' 			=> $this->input->post('product_price'),
            'product_link'   			=> $this->input->post('product_link'),
            'product_detail'			=> $this->input->post('product_detail'),
            'product_location'   		=> $this->input->post('product_location'),
            'product_tag'			    => $this->input->post('product_tag'),
            'product_type' 				=> '1',
            'product_status' 			=> '1',
            'created'       	       	=> $timestamp,
            'last_update'    		    => $timestamp,
        );

        $this->db->insert('product',$input);
        return $this->db->insert_id();
    }

    public function add_auc_detail()
    {
        $this->load->module('upload/Myupload');
        $prop = array(
                    'upload_path'   =>'./images_gh/',
                    'allowed_types' =>'jpg|jpeg|png',
                    'txt_upload'    =>'upload_file',
                    'txt_unlink'    =>$this->input->post('file_old'),
                    'default_file'  =>'no-image.png'
                );

        $product_pic = $this->myupload->upload_file($prop);
        $cate_id = $this->session->userdata('select_items_one');

        $timestamp = date('Y-m-d H:i:s');
        $this->load->model('Add_models');
        $input = array(
            'product_name' 	            => $this->input->post('product_name'),
            'product_detail'			=> $this->input->post('product_detail'),
            'product_auc_count'   		=> $this->input->post('product_auc_count'),
            'product_auc_cost'			=> $this->input->post('product_auc_cost'),
            'product_type' 				=> '1',
            'product_status' 			=> '1',
            'created'       		=> $timestamp,
            'last_update'    		=> $timestamp,
        );

        $this->db->insert('product',$input);
        // return $this->db->insert_id();
    }

}
