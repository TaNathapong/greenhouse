<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Manage_product extends CI_Model {
    public function get_product_list($qstr)
    {
      $items='*';
      $results = $this->db->select($items)
                      ->from('product')
                      ->where($qstr)
                      ->get()
                      ->result_array();
      return $results;
    }
    public function get_auc_product_list($auc_id)
    {
      $items='*';
      $results = $this->db->select($items)
                      ->from('product')
                      ->where('product_id',$auc_id)
                      ->get()
                      ->result_array();
      return $results;
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
