<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Food extends MX_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->module('init_sys/Init_sys');
        $this->load->model('food/Food_model');
    }

//เพิ่ม สินค้า OTOP
	public function add_food_page(){
		$data['alert'] = $this->session->flashdata('alert');
		$data['content']='food/add_food'; //ชื่อ วิว
        $data['head']='เพิ่มเมนูอาหาร';
		$this->init_sys->content($data);
	}
	public function add_food(){
		$data['food_list'] = $this->get_food();
        $this->load->model('food_model');
        $timestam = date('Y-m-d H:i:s');
        $this->food_model->add_food(1);
		$this->session->set_flashdata('alert', 1);
		redirect('food/show_food_page'); // fungtion หน้าที่จะแสดง
	}
	public function get_food(){
		$this->load->model('food_model');
		$result = $this->food_model->get_food();
		return $result;

	}
     //view แสดงสินค้า OTOP
   	public function show_food_page() {
   		$data['alert'] = $this->session->flashdata('alert');
   		$data['content']='food/show_food';
        $data['head']='เมนูอาหาร';
   		$data['food_list'] = $this->get_food();
   		$this->init_sys->content($data);

   	}
    //แก้ไขข้อมูล 
	public function food_edit(){
		$data['alert'] = $this->session->flashdata('alert');
		$data['content']='Food/edit_food';
        $data['head'] = 'แก้ไขรายการอาหาร';
		$food_id = $this->uri->segment(3);
		$data['food_details'] = $this->Food_model->get_food_details($food_id);
		$this->init_sys->content($data);
	}
    public function update_food_details(){ //อัพเดท
		$this->load->model('Food_model');
		$timestam = date('Y-m-d H:i:s');
		$food_id = $this->uri->segment(3);
		$this->Food_model->update_food_details($food_id);
		$this->session->set_flashdata('alert', 1);
		redirect('food/show_food_page'); 
	}
    //ลบผู้ซื้อ
    public function delete_food(){
		$this->load->model('Food_model');
		$id = $this->uri->segment(3);
		$this->Food_model->delete_food($id);
		$this->session->set_flashdata('alert', 2);
		redirect('food/show_food_page');
	}
}
