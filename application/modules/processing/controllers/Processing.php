<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Processing extends MX_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->module('init_sys/Init_sys');
        $this->load->model('processing/Processing_model');
    }

//เพิ่ม สินค้า OTOP
	public function add_processing_page(){
		$data['alert'] = $this->session->flashdata('alert');
		$data['content']='processing/add_processing'; //ชื่อ วิว
        $data['head']='เพิ่มสินค้า แปรรูป';
		$this->init_sys->content($data);
	}
	public function add_processing(){
		$data['processing_list'] = $this->get_processing();
        $this->load->model('processing_model');
        $timestam = date('Y-m-d H:i:s');
        $this->processing_model->add_processing(1);
		$this->session->set_flashdata('alert', 1);
		redirect('processing/show_processing_page'); // fungtion หน้าที่จะแสดง
	}
	public function get_processing(){
		$this->load->model('processing_model');
		$result = $this->processing_model->get_processing();
		return $result;

	}
     //view แสดงสินค้า OTOP
   	public function show_processing_page() {
   		$data['alert'] = $this->session->flashdata('alert');
   		$data['content']='processing/show_processing';
        $data['head']='สินค้า แปรรูป';
   		$data['processing_list'] = $this->get_processing();
   		$this->init_sys->content($data);

   	}

    //แก้ไขข้อมูล 
	public function processing_edit(){
		$data['alert'] = $this->session->flashdata('alert');
		$data['content']='Processing/edit_processing';
        $data['head'] = 'แก้ไขข้อมูลสินค้า แปรรูป';
		$processing_id = $this->uri->segment(3);
		$data['processing_details'] = $this->Processing_model->get_processing_details($processing_id);
		$this->init_sys->content($data);
	}
    public function update_processing_details(){ //อัพเดท
		$this->load->model('Processing_model');
		$timestam = date('Y-m-d H:i:s');
		$processing_id = $this->uri->segment(3);
		$this->Processing_model->update_processing_details($processing_id);
		$this->session->set_flashdata('alert', 1);
		redirect('processing/show_processing_page'); 
	}
    //ลบผู้ซื้อ
    public function delete_processing(){
		$this->load->model('Processing_model');
		$id = $this->uri->segment(3);
		$this->Processing_model->delete_processing($id);
		$this->session->set_flashdata('alert', 2);
		redirect('processing/show_processing_page');
	}
}
