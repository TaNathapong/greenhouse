<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends MX_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Shop_model');
		$this->load->model('Travel_model');
		$this->load->module('init_sys/Init_sys');
	}

	public function shop_page() {
		$data['content']='shop/shop-page';
		$data['product_list'] = $this->Shop_model->get_product_list();
		// echo print_r($data['product_list']);
		// exit();
		$this->init_sys->content($data);
	}

	public function product_details_page() {
		$data['content']='shop/product-details';
		$product_id = $this->uri->segment(3);
		$data['product_list'] = $this->Shop_model->get_product_list();
		$data['product_details'] = $this->Shop_model->get_product_details($product_id);
		// echo print_r($data['product_details']);
		// exit();
		$this->init_sys->content($data);
	}

	public function travel_page() {
		$data['content']='shop/travel-page';
		$data['travel_list'] = $this->Travel_model->get_travel_list();
		// echo print_r($data['travel_list']);
		// exit();
		$this->init_sys->content($data);
	}

	public function travel_details_page() {
		$data['content']='shop/travel-details';
		$travel_id = $this->uri->segment(3);
		$data['travel_list'] = $this->Travel_model->get_travel_list();
		$data['travel_details'] = $this->Travel_model->get_travel_details($travel_id);
		// echo print_r($data['travel_details']);
		// exit();
		$this->init_sys->content($data);
	}

}
?>
