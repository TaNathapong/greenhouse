<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Add_models extends CI_Model {
    public function get_product_detail($qstr)
    {
      $items='*';
      $results = $this->db->select($items)
                      ->from('product')
                      ->where($qstr)
                      ->get()
                      ->result_array();
      return $results;
    }
    public function get_auc_detail($auc_id)
    {
      $items='*';
      $results = $this->db->select($items)
                      ->from('product')
                      ->where('product_id',$auc_id)
                      ->get()
                      ->result_array();
      return $results;
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
                    'upload_path'   =>'./images_product/',
                    'allowed_types' =>'jpg|jpeg|png',
                    'txt_upload'    =>'upload_file',
                    'txt_unlink'    =>$this->input->post('file_old'),
                    'default_file'  =>'no-image.png'
                );

        $mat_pic = $this->myupload->upload_file($prop);
        $cate_id = $this->session->userdata('select_items_one');

        $timestamp = date('Y-m-d H:i:s');
        $this->load->model('Product_models');
        $input = array(
            'product_name' 	            => $this->input->post('product_name'),
            'product_quantity' 			=> $this->input->post('product_quantity'),
            'product_unit' 				=> $this->input->post('product_unit'),
            'product_price' 			=> $this->input->post('product_price'),
            'product_link'   			=> $this->input->post('product_link'),
            'product_detail'			=>$this->input->post('product_detail'),
            'product_type' 				=> '1',
            'product_status' 			=> '1',
            'product_pic'   			=> $product_pic,
            'product_id'				=> $product_id,


            'created'       		=> $timestamp,
            'lastupdate'    		=> $timestamp,
        );

        $this->db->insert('product',$input);
    }

    public function add_auc_detail()
    {
        $this->load->module('upload/Myupload');
        $prop = array(
                    'upload_path'   =>'./images_product/',
                    'allowed_types' =>'jpg|jpeg|png',
                    'txt_upload'    =>'upload_file',
                    'txt_unlink'    =>$this->input->post('file_old'),
                    'default_file'  =>'no-image.png'
                );

        $mat_pic = $this->myupload->upload_file($prop);
        $cate_id = $this->session->userdata('select_items_one');

        $timestamp = date('Y-m-d H:i:s');
        $this->load->model('Product_models');
        $input = array(
            'product_name' 	            => $this->input->post('product_name'),
            'product_quantity' 			=> $this->input->post('product_quantity'),
            'product_unit' 				=> $this->input->post('product_unit'),
            'product_price' 			=> $this->input->post('product_price'),
            'product_link'   			=> $this->input->post('product_link'),
            'product_detail'			=>$this->input->post('product_detail'),
            'product_auc_count'   			=> $this->input->post('product_auc_count'),
            'product_auc_cost'			=>$this->input->post('product_auc_cost'),
            'product_type' 				=> '1',
            'product_status' 			=> '1',
            'product_pic'   			=> $product_pic,
            'product_id'				=> $product_id,


            'created'       		=> $timestamp,
            'lastupdate'    		=> $timestamp,
        );

        $this->db->insert('product',$input);
    }

}
