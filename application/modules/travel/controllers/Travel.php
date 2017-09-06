<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Travel extends MX_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->module('init_sys/Init_sys');
        $this->load->model('travel/Travel_model');
    }




//เพิ่ม สถานที่ท่องเที่ยว
	public function add_travel_page(){
		$data['alert'] = $this->session->flashdata('alert');
		$data['content']='travel/add_travel'; //ชื่อ วิว
        $data['head']='เพิ่มสถานที่ท่องเที่ยว';
		$this->init_sys->content($data);
	}
	public function add_travel(){
		$data['travel_list'] = $this->get_travel();
        $this->load->model('travel_model');
        $timestam = date('Y-m-d H:i:s');
        $this->travel_model->add_travel(1);
		$this->session->set_flashdata('alert', 1);
		redirect('travel/show_travel_page'); // fungtion หน้าที่จะแสดง
	}
	public function get_travel (){
		$this->load->model('travel_model');
		$result = $this->travel_model->get_travel();
		return $result;

	}
     //view แสดงที่ท่องเที่ยว
   	public function show_travel_page() {
   		$data['alert'] = $this->session->flashdata('alert');
   		$data['content']='travel/show_travel';
        $data['head']='การท่องเที่ยว';
   		$data['travel_list'] = $this->get_travel();
   		$this->init_sys->content($data);

   	}
    //แก้ไขข้อมูล 
	public function travel_edit(){
		$data['alert'] = $this->session->flashdata('alert');
		$data['content']='Travel/edit_travel';
        $data['head'] = 'แก้ไขข้อมูลสถานที่ท่องเที่ยว';
		$travel_id = $this->uri->segment(3);
		$data['travel_details'] = $this->Travel_model->get_travel_details($travel_id);
		$this->init_sys->content($data);
	}
    public function update_travel_details(){ //อัพเดท
		$this->load->model('Travel_model');
		$timestam = date('Y-m-d H:i:s');
		$travel_id = $this->uri->segment(3);
		$this->Travel_model->update_travel_details($travel_id);
		$this->session->set_flashdata('alert', 1);
		redirect('travel/show_travel_page'); 
	}
    //ลบผู้ซื้อ
    public function delete_travel(){
		$this->load->model('Travel_model');
		$id = $this->uri->segment(3);
		$this->Travel_model->delete_travel($id);
		$this->session->set_flashdata('alert', 2);
		redirect('travel/show_travel_page');
	}
}
