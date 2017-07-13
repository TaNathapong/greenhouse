<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Member extends MX_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->module('init_sys/Init_sys');
    }

    public function regis_shipping_page(){
        $data['content']='member/regis-shipping-member';
        $this->init_sys->content($data);
    }
      public function conferm_page(){
        $data['content']='member/conferm-page';
        $this->init_sys->content($data);
    }

    public function add_regis_shipping(){
		$this->load->models('Member_shipping_model');
        $this->Member_Shipping_model->add_regis_shipping();
		$this->session->set_flashdata('alert', 1);
		redirect('member/comferm_page');
	}
	public function get_regis_shipping (){
		$this->load->models('Member_shipping_model');
		$result = $this->Member_shipping_model->get_regis_shipping();
		//echo '<pre>', print_r($result);
		return $result;

	}
}