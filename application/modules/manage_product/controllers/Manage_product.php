<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class manage_product extends MX_Controller {


    public function __construct() {
        parent::__construct();
        $this->load->module('init_sys/Init_sys');
        $this->load->model('Add_models');
        $this->load->model('Edit_models');
    }
    public function add_product_page(){
        $data['content']='Manage_product/add_product';
		$this->init_sys->content($data);
    }
    public function set_product_profile_page(){
        echo '<pre>', print_r($this->input->post());
    }
    public function get_product_profile_page(){
        $data['food_details'] = $this->Add_models->get_product_detail();
        $data['content']='Manage_product/add_product';
        $this->init_sys->content($data);
    }

    public function add_auc_page(){
        $data['content']='Manage_product/add_auc_product';
        $this->init_sys->content($data);
    }
    public function get_auc_profile_page(){
        $data['food_details'] = $this->Add_models->get_auc_detailt();
        $data['content']='Manage_product/add_product';
        $this->init_sys->content($data);
    }
    public function set_auc_profile_page(){
        echo '<pre>', print_r($this->input->post());
    }

    public function add_travel_page(){
        $data['content']='Manage_product/add_travel';
		$this->init_sys->content($data);
    }
    public function edit_prouduct_page(){
        $food_id = $this->uri->segment(3);
        $data['product_details'] = $this->Edit_models->get_product_detail();
        $data['content']='Manage_product/edit_product';
		$this->init_sys->content($data);
    }
    public function edit_auc_prouduct_page(){

        $data['content']='Manage_product/edit_auc_product';
		$this->init_sys->content($data);
    }
    public function edit_travel_page(){
        $data['content']='Manage_product/edit_travel';
		$this->init_sys->content($data);
    }

}
