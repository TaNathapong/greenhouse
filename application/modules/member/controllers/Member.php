<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Member extends MX_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->module('init_sys/Init_sys');
    }

    // public function regis_shipping_page(){
    //     $data['content']='member/regis-shipping-member';
    //     $this->init_sys->content($data);
    // }
      public function confirm_page(){
        $data['content']='member/confirm-page';
        $this->init_sys->content($data);
    }

    // public function add_regis_shipping(){
    //     $this->load->model('Member_shipping_model');
    //     $this->Member_shipping_model->add_regis_shipping();
    //     redirect('member/confirm_page');
    // }
    // public function get_regis_shipping (){
    //     $this->load->model('Member_shipping_model');
    //     $result = $this->Member_shipping_model->get_regis_shipping();
    //     echo '<pre>', print_r($result);
    //     return $result;
    // }


    public function regis_seller_page(){
        $data['head']='สมัครสมาชิก';
        $data['content']='member/member-seller-regist';
        //$data['seller_data'] = $this->get_regis_seller();
        $this->init_sys->content($data);
    }
   public function insert_pic(){
        $type=explode('.', $_FILES['user_pic']['name']);
        $type=$type[count($type)-1];
        $url = './image_gh/'.uniqid(rand()).".".$type;
            if (in_array($type,array('jpg','gif','png'))) {
                if (is_uploaded_file($_FILES['user_pic']['tmp_name'])) {
                   if( move_uploaded_file($_FILES['user_pic']['tmp_name'],$url)){
                        return $url;
                       }else{

                       }
                }else{
                    retrun();
                }
            }
        echo($type);
    }
    public function add_regis_seller(){

        //$url=$this->insert_pic();
        $id =rand(1000,9999);
        $input = array(
            'mem_seller_id' => $id,
            'mem_seller_pic' =>''
            );
        $this->Member_seller_model->add_regis_seller($input);
        //$this->load->model('Member_seller_model');
        //$this->Member_seller_model->add_regis_seller($input);

        //$data['seller_data'] = $this->get_regis_seller();
        //redirect('member/confirm_page');
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
    public function post_product_page(){
        $data['content']='member/post_product';
        $this->init_sys->content($data);
    }
    public function add_post_product(){
        $this->load->model('Member_seller_model');
        $timestam = date('Y-m-d H:i:s');
        $this->Member_seller_model->add_product_detail();
        redirect('member/confirm_page');
    }

    public function get_post_product (){
        $this->load->model('Member_seller_model');
        $result = $this->Member_seller_model->get_product_detail();
        echo '<pre>', print_r($result);
        return $result;
    }
    public function my_product_page(){
        $data['content']='member/my_product';
        $this->init_sys->content($data);
    }
    public function history_sell_page(){
        $data['content']='member/history_sell';
        $this->init_sys->content($data);
    }





    //login แพม
      public function login_page(){
        $data['head']='เข้าสู่ระบบ';
         $data['content']='member/login_view'; //  ชื่อ   controler/views  >> login
         $this->init_sys->content($data);//เรียกวิวให้แสดง
      }
      public function check_login(){
        echo("ok");
      }

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
