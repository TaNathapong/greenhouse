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
        redirect('member/confirm_page');
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
        public function profile_seller_page(){
        $data['content']='member/member-seller-profile';
        $this->init_sys->content($data);
    }
   





//     //login แพม
//       public function login_page(){
//          $data['content']='member/login_view'; //  ชื่อ   controler/views  >> login
//          $this->init_sys->content($data);//เรียกวิวให้แสดง
//       }

//       //ข้อมูลผู้ซื้อ
//       public function member_buyer_page(){
//          $data['content']='member/member_buyer';//  ชื่อ   controler/views
//          $this->init_sys->content($data);//เรียกวิวข้อมูลผู้ซื้อ
//       }

//       //buyer_confirm
//       public function buyer_confirm_page(){
//          $data['content']='member/buyer_confirm';//  ชื่อ   controler/views
//          $this->init_sys->content($data);//เรียกวิว buyer_confirm
//       }
//       public function add_member_buyer(){ //เพิ่มข้อมูลผู้สมัครซื้อลง DB
//   		    $this->load->model('Member_buyer_model');
//           $this->Member_buyer_model->add_member_buyer();
//   		    redirect('member/confirm_page');
//   	 }
//   	public function get_member_buyer(){//ส่งค่า ข้อมูลที่สมัครซื้อ
//   		$this->load->model('Member_buyer_model');
//   		$result = $this->Member_buyer_model->get_member_buyer();
//   		echo '<pre>', print_r($result);
//   		return $result;
//   	 }
}
