<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Equipment extends MX_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->module('init_sys/Init_sys');
        $this->load->model('equipment/Equipment_model');
    }

//เพิ่ม อุปการณ์ทางการเกษตร
	public function add_equipment_page(){
		$data['alert'] = $this->session->flashdata('alert');
		$data['content']='equipment/add_equipment'; //ชื่อ วิว
        $data['head']='เพิ่มอุปกรณ์ทางการเกษตร';
		$this->init_sys->content($data);
	}
	public function add_equipment(){
		$data['equipment_list'] = $this->get_equipment();
        $this->load->model('equipment_model');
        $timestam = date('Y-m-d H:i:s');
        $this->equipment_model->add_equipment(1);
		$this->session->set_flashdata('alert', 1);
		redirect('equipment/show_equipment_page'); // fungtion หน้าที่จะแสดง
	}
	public function get_equipment(){
		$this->load->model('equipment_model');
		$result = $this->equipment_model->get_equipment();
		return $result;

	}
     //view แสดงอุปกรณ์ทางการเกษตร
   	public function show_equipment_page() {
   		$data['alert'] = $this->session->flashdata('alert');
   		$data['content']='equipment/show_equipment';
        $data['head']='อุปการณ์ทางการเกษตร';
   		$data['equipment_list'] = $this->get_equipment();
   		$this->init_sys->content($data);

   	}
    //แก้ไขข้อมูล 
	public function equipment_edit(){
		$data['alert'] = $this->session->flashdata('alert');
		$data['content']='Equipment/edit_equipment';
        $data['head'] = 'แก้ไขข้อมูล อุปการณ์ทางการเกษตร';
		$equipment_id = $this->uri->segment(3);
		$data['equipment_details'] = $this->Equipment_model->get_equipment_details($equipment_id);
		$this->init_sys->content($data);
	}
    public function update_equipment_details(){ //อัพเดท
		$this->load->model('Equipment_model');
		$timestam = date('Y-m-d H:i:s');
		$equipment_id = $this->uri->segment(3);
		$this->Equipment_model->update_equipment_details($equipment_id);
		$this->session->set_flashdata('alert', 1);
		redirect('equipment/show_equipment_page'); 
	}
    //ลบผู้ซื้อ
    public function delete_equipment(){
		$this->load->model('Equipment_model');
		$id = $this->uri->segment(3);
		$this->Equipment_model->delete_equipment($id);
		$this->session->set_flashdata('alert', 2);
		redirect('equipment/show_equipment_page');
	}
}
