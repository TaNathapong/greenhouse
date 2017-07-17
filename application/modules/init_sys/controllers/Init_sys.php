<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Init_sys extends MX_Controller
{
	public $init = array(
		'initbody'			=>'init_sys/template',
		'none-timestamp'	=>'0000-00-00 00:00:00',
	);

	public function sess_query()
	{
		$sess_query=$this->session->flashdata('sess_query');
		return $sess_query;
	}

	public function content($data='')
	{
		$content=$this->load->view($this->init['initbody'], $data);
		return $content;
	}

	public function convert_json($node='')
	{
		$node=($node !='')? $node : $this->node;
		$json['rows']=count($node);
		$json['obj']=json_encode($node);
		return $json;
	}

	public function index()
	{
		$this->load->module('init_sys/Init_sys');
		$this->load->model('Init_model');
		$data['head']='
		<div class="row">
		<div class="col-md-2"></div>
		<div class="search-content text-center col-md-8">
		<h3>ค้นหาสินค้าที่ต้องการ</h3>
		<form>
		<input type="text" name="search" placeholder="ค้นหา..">
		</form>
		<a href="selling-announcement.html" class="readmore">ลงประกาศ</a>
		</div>
		</div>
		';
		$data['content'] ='init_sys/index';
		$data['product_list'] = $this->Init_model->get_product_list();
		$this->init_sys->content($data);
	}




}//end class
