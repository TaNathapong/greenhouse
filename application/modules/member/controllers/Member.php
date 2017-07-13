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
      public function confirm_page(){
        $data['content']='member/confirm-page';
        $this->init_sys->content($data);
    }

    public function add_regis_shipping(){
        $this->load->model('Member_shipping_model');
        $this->Member_shipping_model->add_regis_shipping();
        redirect('member/comfirm_page');
    }
    public function get_regis_shipping (){
        $this->load->model('Member_shipping_model');
        $result = $this->Member_shipping_model->get_regis_shipping();
        echo '<pre>', print_r($result);
        return $result;
    }

    public function regis_seller_page(){
        $data['content']='member/member-seller-regist';
        $this->init_sys->content($data);
    }

    public function add_regis_seller(){
        $this->load->model('Member_seller_model');
        $this->Member_seller_model->add_regis_seller();
        redirect('member/confirm_page');
    }

    public function get_regis_seller (){
        $this->load->model('Member_seller_model');
        $result = $this->Member_seller_model->get_regis_seller();
        echo '<pre>', print_r($result);
        return $result;
    }
}