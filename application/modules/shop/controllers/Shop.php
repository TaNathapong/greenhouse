<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends MX_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->module('init_sys/Init_sys');
	}

	public function shop_page() {
		$data['content']='shop/shop-page';
		$this->init_sys->content($data);
	}

}
?>
