<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Member extends MX_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->module('init_sys/Init_sys');
        $this->load->model('member/Member_buyer_model');
    }


//สมัครเป็นผู้ซื้อ
	public function member_buyer_page(){	// man_page				ฟังก์ชั่น เรียกฟอร์มที่จะเพิ่ม คน/อุปกรณ์ / >> วิว add-man.php
		$data['alert'] = $this->session->flashdata('alert');	//ตรวจสอบ
		$data['content']='member/member_buyer';		//เชื่อมต่อชื่อ  module/views
        $data['head']='สมัครเป็นผู้ซื้อ';
		$this->init_sys->content($data);
	}
	public function add_member_buyer(){	//ฟังก์ชั่นเพิ่ม คน/อุปกรณ์
		$data['buyer_list'] = $this->get_member_buyer();
        $this->load->model('Member_buyer_model');
        $timestam = date('Y-m-d H:i:s');
        $this->Member_buyer_model->add_member_buyer(1);
		$this->session->set_flashdata('alert', 1);
		redirect('member/confirm_page');
	}
	public function get_member_buyer (){	//ฟังก์ชั่นในการรับ คน/อุปกรณ์  ใน model >> Man_models.php
		$this->load->model('Member_buyer_model');
		$result = $this->Member_buyer_model->get_member_buyer();	//ส่งค่าเมทธอด get_man ไป model ตามรหัส
		return $result;

	}
     //แสดง profile ผู้ซื้อ
   	public function member_buyer_profile_page() {//ฟังก์ชั่นแสดง >>  ดึงข้อมูลจาก DB มาแสดงวิว  /man.php
   		$data['alert'] = $this->session->flashdata('alert');	//ตรวจสอบ
   		$data['content']='member/member_buyer_profile';
        $data['head']='ข้อมูลส่วนตัวผู้ซื้อ';			  //เชื่อมต่อ  module/views
   		$data['buyer_list'] = $this->get_member_buyer(); //แสดงข้อมูลใน list ด้วยเมทธอด get_man
   		$this->init_sys->content($data);

   	}







    //สมัครเป็นผู้ขาย
    	public function regis_seller_page(){	// man_page				ฟังก์ชั่น เรียกฟอร์มที่จะเพิ่ม คน/อุปกรณ์ / >> วิว add-man.php
    		$data['alert'] = $this->session->flashdata('alert');	//ตรวจสอบ
    		$data['content']='member/regis_seller';		//เชื่อมต่อชื่อ  module/views
            $data['head']='สมัครเป็นผู้ขาย';
    		$this->init_sys->content($data);
    	}
    	public function add_regis_seller(){	//ฟังก์ชั่นเพิ่ม คน/อุปกรณ์
    		$data['seller_list'] = $this->get_regis_seller();
            $this->load->model('Member_buyer_model');
            $timestam = date('Y-m-d H:i:s');
            $this->Member_seller_model->add_regis_seller(1);
    		$this->session->set_flashdata('alert', 1);
    		redirect('member/confirm_page');
    	}
    	public function get_regis_seller(){	//ฟังก์ชั่นในการรับ คน/อุปกรณ์  ใน model >> Man_models.php
    		$this->load->model('Member_seller_model');
    		$result = $this->Member_seller_model->get_regis_seller();	//ส่งค่าเมทธอด get_man ไป model ตามรหัส
    		return $result;
    	}
         //แสดง profile ผู้ขาย
       	public function member_seller_profile_page() {//ฟังก์ชั่นแสดง >>  ดึงข้อมูลจาก DB มาแสดงวิว  /man.php
       		$data['alert'] = $this->session->flashdata('alert');	//ตรวจสอบ
       		$data['content']='member/member_seller_profile';
            $data['head']='ข้อมูลส่วนตัวผู้ขาย';			  //เชื่อมต่อ  module/views
       		$data['seller_list'] = $this->get_regis_seller(); //แสดงข้อมูลใน list ด้วยเมทธอด get_man
       		$this->init_sys->content($data);

       	}








//สมัครเป็นผู้ขนส่ง
     public function regis_shipping_page(){
         $data['alert'] = $this->session->flashdata('alert');
         $data['content']='member/regis-shipping-member';
         $data['head']='สมัครเป็นผู้ขนส่ง';
         $this->init_sys->content($data);
     }
     public function add_regis_shipping(){
         $data['shipping_list'] = $this->get_regis_shipping();
         $this->load->model('Member_shipping_model');
         $timestam = date('Y-m-d H:i:s');
         $this->Member_shipping_model->add_regis_shipping(1);
         $this->session->set_flashdata('alert', 1);
         redirect('member/confirm_page');
     }
     public function get_regis_shipping (){	//ฟังก์ชั่นในการรับ คน/อุปกรณ์  ใน model >> Man_models.php
         $this->load->model('Member_shipping_model');
         $result = $this->Member_shipping_model->get_regis_shipping();	//ส่งค่าเมทธอด get_man ไป model ตามรหัส
         return $result;
     }
     //แสดง profile ผู้ขนส่ง
    public function member_shipping_profile_page() {//ฟังก์ชั่นแสดง >>  ดึงข้อมูลจาก DB มาแสดงวิว  /man.php
        $data['alert'] = $this->session->flashdata('alert');	//ตรวจสอบ
        $data['content']='member/member_shipping_profile';
        $data['head']='ข้อมูลส่วนตัวผู้ขนส่ง';			  //เชื่อมต่อ  module/views
        $data['shipping_list'] = $this->get_regis_shipping(); //แสดงข้อมูลใน list ด้วยเมทธอด get_man
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



//ยืนยันการสมัคร
    public function confirm_page(){
        $data['head'] = 'ยืนยันการสมัคร';
        $data['content']='member/confirm-page';
        $this->init_sys->content($data);
    }

//login แพม
      public function login_page(){
         $data['content']='member/login_view'; //  ชื่อ   controler/views  >> login
         $this->init_sys->content($data);//เรียกวิวให้แสดง
      }

}
