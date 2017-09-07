<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Member extends MX_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->module('init_sys/Init_sys');
<<<<<<< HEAD
    }

    // public function regis_shipping_page(){
    //     $data['content']='member/regis-shipping-member';
    //     $this->init_sys->content($data);
    // }
      public function confirm_page(){
        $data['content']='member/confirm-page';
        $this->init_sys->content($data);
    }
=======
        $this->load->model('member/Member_buyer_model');
        $this->load->model('member/Member_seller_model');
    }




//สมัครเป็นผู้ซื้อ
	public function member_buyer_page(){
		$data['alert'] = $this->session->flashdata('alert');
		$data['content']='member/member_buyer';
        $data['head']='สมัครเป็นผู้ซื้อ';
		$this->init_sys->content($data);
	}
	public function add_member_buyer(){
		$data['buyer_list'] = $this->get_member_buyer();
        $this->load->model('Member_buyer_model');
        $timestam = date('Y-m-d H:i:s');
        $this->Member_buyer_model->add_member_buyer(1);
		$this->session->set_flashdata('alert', 1);
		redirect('member/confirm_page');
	}
	public function get_member_buyer (){
		$this->load->model('Member_buyer_model');
		$result = $this->Member_buyer_model->get_member_buyer();
		return $result;

	}
     //profile ผู้ซื้อ
   	public function member_buyer_profile_page() {
   		$data['alert'] = $this->session->flashdata('alert');
   		$data['content']='member/member_buyer_profile';
        $data['head']='ข้อมูลส่วนตัวผู้ซื้อ';
   		$data['buyer_list'] = $this->get_member_buyer();
   		$this->init_sys->content($data);

   	}
    //แก้ไขข้อมูล ผู้ซื้อ
	public function buyer_edit(){
		$data['alert'] = $this->session->flashdata('alert');
		$data['content']='Member/edit_buyer';
        $data['head'] = 'แก้ไขข้อมูลผู้ซื้อ';
		$mem_buyer_id = $this->uri->segment(3);
		$data['buyer_details'] = $this->Member_buyer_model->get_buyer_details($mem_buyer_id);
		$this->init_sys->content($data);
	}
    public function update_buyer_details(){ //อัพเดท
		$this->load->model('Member_buyer_model');
		$timestam = date('Y-m-d H:i:s');
		$mem_buyer_id = $this->uri->segment(3);
		$this->Member_buyer_model->update_buyer_details($mem_buyer_id);
		$this->session->set_flashdata('alert', 1);
		redirect('Member/member_buyer_profile_page');
	}
    //ลบผู้ซื้อ
    public function delete_buyer(){
		$this->load->model('Member_buyer_model');
		$id = $this->uri->segment(3);
		$this->Member_buyer_model->delete_buyer($id);
		$this->session->set_flashdata('alert', 2);
		redirect('Member/member_buyer_page');
	}





>>>>>>> 419c92db7b3a4be108f709d4160f815ec141b036

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

//สมัครเป็นผู้ขาย
    	public function regis_seller_page(){
    		$data['alert'] = $this->session->flashdata('alert');
    		$data['content']='member/regis_seller';
            $data['head']='สมัครเป็นผู้ขาย';
    		$this->init_sys->content($data);
    	}
    	public function add_regis_seller(){
    		$data['seller_list'] = $this->get_regis_seller();
            $this->load->model('Member_buyer_model');
            $timestam = date('Y-m-d H:i:s');
            $this->Member_seller_model->add_regis_seller(1);
    		$this->session->set_flashdata('alert', 1);
    		redirect('member/confirm_page');
    	}
    	public function get_regis_seller(){
    		$this->load->model('Member_seller_model');
    		$result = $this->Member_seller_model->get_regis_seller();
    		return $result;
    	}
         //profile ผู้ขาย
       	public function member_seller_profile_page() {
       		$data['alert'] = $this->session->flashdata('alert');
       		$data['content']='member/member_seller_profile';
            $data['head']='ข้อมูลส่วนตัวผู้ขาย';
       		$data['seller_list'] = $this->get_regis_seller();
       		$this->init_sys->content($data);
        }
         //แก้ไขข้อมูล ผู้ขาย
        public function seller_edit(){
            $data['alert'] = $this->session->flashdata('alert');
            $data['content']='Member/edit_seller';
            $data['head'] = 'แก้ไขข้อมูลผู้ขาย';
            $mem_seller_id = $this->uri->segment(3);
            $data['seller_details'] = $this->Member_seller_model->get_seller_details($mem_seller_id);
            $this->init_sys->content($data);
        }
        public function update_seller_details(){ //อัพเดท
            $this->load->model('Member_seller_model');
            $timestam = date('Y-m-d H:i:s');
            $mem_seller_id = $this->uri->segment(3);
            $this->Member_seller_model->update_seller_details($mem_seller_id);
            $this->session->set_flashdata('alert', 1);
            redirect('Member/member_seller_profile_page');
        }
       // ลบผู้ซื้อ
        public function delete_seller(){
            $this->load->model('Member_seller_model');
            $id = $this->uri->segment(3);
            $this->Member_seller_model->delete_seller($id);
            $this->session->set_flashdata('alert', 2);
            redirect('Member/regis_seller_page');
        }


<<<<<<< HEAD
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
=======









>>>>>>> 419c92db7b3a4be108f709d4160f815ec141b036






<<<<<<< HEAD

    //login แพม
      public function login_page(){
        $data['head']='เข้าสู่ระบบ';
         $data['content']='member/login_view'; //  ชื่อ   controler/views  >> login
         $this->init_sys->content($data);//เรียกวิวให้แสดง
      }
      public function check_login(){
        echo("ok");
      }
=======
    public function contract_page(){
        $data['head'] = 'ติดต่อเรา';
        $data['content']='member/contract';
        $this->init_sys->content($data);
    }
>>>>>>> 419c92db7b3a4be108f709d4160f815ec141b036

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
