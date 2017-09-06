<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Otop extends MX_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->module('init_sys/Init_sys');
        $this->load->model('otop/Otop_model');
    }

//เพิ่ม สินค้า OTOP
	public function add_otop_page(){
		$data['alert'] = $this->session->flashdata('alert');
		$data['content']='otop/add_otop'; //ชื่อ วิว
        $data['head']='เพิ่มสินค้า OTOP';
		$this->init_sys->content($data);
	}
	public function add_otop(){
		$data['otop_list'] = $this->get_otop();
        $this->load->model('otop_model');
        $timestam = date('Y-m-d H:i:s');
        $this->otop_model->add_otop(1);
		$this->session->set_flashdata('alert', 1);
		redirect('otop/show_otop_page'); // fungtion หน้าที่จะแสดง
	}
	public function get_otop(){
		$this->load->model('otop_model');
		$result = $this->otop_model->get_otop();
		return $result;

	}
     //view แสดงสินค้า OTOP
   	public function show_otop_page() {
   		$data['alert'] = $this->session->flashdata('alert');
   		$data['content']='otop/show_otop';
        $data['head']='สินค้า OTOP';
   		$data['otop_list'] = $this->get_otop();
   		$this->init_sys->content($data);

   	}
    //แก้ไขข้อมูล 
	public function otop_edit(){
		$data['alert'] = $this->session->flashdata('alert');
		$data['content']='Otop/edit_otop';
        $data['head'] = 'แก้ไขข้อมูลสินค้า OTOP';
		$otop_id = $this->uri->segment(3);
		$data['otop_details'] = $this->Otop_model->get_otop_details($otop_id);
		$this->init_sys->content($data);
	}
    public function update_otop_details(){ //อัพเดท
		$this->load->model('Otop_model');
		$timestam = date('Y-m-d H:i:s');
		$otop_id = $this->uri->segment(3);
		$this->Otop_model->update_otop_details($otop_id);
		$this->session->set_flashdata('alert', 1);
		redirect('otop/show_otop_page'); 
	}
    //ลบผู้ซื้อ
    public function delete_otop(){
		$this->load->model('Otop_model');
		$id = $this->uri->segment(3);
		$this->Otop_model->delete_otop($id);
		$this->session->set_flashdata('alert', 2);
		redirect('otop/show_otop_page');
	}
}
