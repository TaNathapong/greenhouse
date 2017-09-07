<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Vegetable extends MX_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->module('init_sys/Init_sys');
        $this->load->model('vegetable/Vegetable_model');
    }

//เพิ่ม ผลไม้
	public function add_vegetable_page(){
		$data['alert'] = $this->session->flashdata('alert');
		$data['content']='vegetable/add_vegetable'; //ชื่อ วิว
        $data['head']='เพิ่มผลไม้';
		$this->init_sys->content($data);
	}
	public function add_vegetable(){
		$data['vegetable_list'] = $this->get_vegetable();
        $this->load->model('vegetable_model');
        $timestam = date('Y-m-d H:i:s');
        $this->vegetable_model->add_vegetable(1);
		$this->session->set_flashdata('alert', 1);
		redirect('vegetable/show_vegetable_page'); // fungtion หน้าที่จะแสดง
	}
	public function get_vegetable(){
		$this->load->model('vegetable_model');
		$result = $this->vegetable_model->get_vegetable();
		return $result;

	}
     //view แสดงสินค้า OTOP
   	public function show_vegetable_page() {
   		$data['alert'] = $this->session->flashdata('alert');
   		$data['content']='vegetable/show_vegetable';
        $data['head']='ผลไม้';
   		$data['vegetable_list'] = $this->get_vegetable();
   		$this->init_sys->content($data);

   	}
    //แก้ไขข้อมูล 
	public function vegetable_edit(){
		$data['alert'] = $this->session->flashdata('alert');
		$data['content']='Vegetable/edit_vegetable';
        $data['head'] = 'แก้ไขข้อมูล';
		$vegetable_id = $this->uri->segment(3);
		$data['vegetable_details'] = $this->Vegetable_model->get_vegetable_details($vegetable_id);
		$this->init_sys->content($data);
	}
    public function update_vegetable_details(){ //อัพเดท
		$this->load->model('Vegetable_model');
		$timestam = date('Y-m-d H:i:s');
		$vegetable_id = $this->uri->segment(3);
		$this->Vegetable_model->update_vegetable_details($vegetable_id);
		$this->session->set_flashdata('alert', 1);
		redirect('vegetable/show_vegetable_page'); 
	}
    //ลบผู้ซื้อ
    public function delete_vegetable(){
		$this->load->model('Vegetable_model');
		$id = $this->uri->segment(3);
		$this->Vegetable_model->delete_vegetable($id);
		$this->session->set_flashdata('alert', 2);
		redirect('vegetable/show_vegetable_page');
	}
}
