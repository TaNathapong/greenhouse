<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class manage_product extends MX_Controller {


    public function __construct() {
        parent::__construct();
        $this->load->module('init_sys/Init_sys');
        $this->load->model('Add_models');
        $this->load->model('Edit_models');
    }
    public function add_product_page(){
        $data['content']='Manage_product/add_product';
		$this->init_sys->content($data);
    }
    public function set_product_profile_page(){
        echo '<pre>', print_r($this->input->post());
        $this->Add_models->add_product_detail();
    }

    public function add_auc_page(){
        $data['content']='Manage_product/add_auc_product';
        $this->init_sys->content($data);
    }
    public function set_auc_profile_page(){
        echo '<pre>', print_r($this->input->post());
        $this->Add_models->add_auc_detail();

    }

    public function add_travel_page(){
        $data['content']='Manage_product/add_travel';
		$this->init_sys->content($data);
    }
    public function edit_prouduct_page(){
        $product_id = 3;
        $results = $this->Edit_models->get_product_detail($product_id);
        $data['product_list'] = $results;
        $data['content']='Manage_product/edit_product';
        $timestam = date('Y-m-d H:i:s');
        $this->init_sys->content($data);
    }
    public function set_edit_prouduct_page(){
        echo '<pre>', print_r($this->input->post());
        $product_id = 3;
        $data['product_update'] = $this->Edit_models->update_product_detail($product_id);
    }

    public function edit_auc_prouduct_page(){

        $data['content']='Manage_product/edit_auc_product';
		$this->init_sys->content($data);
    }
    public function edit_travel_page(){
        $data['content']='Manage_product/edit_travel';
		$this->init_sys->content($data);
    }
    public function add_travel(){
        $data['content']='Manage_product/add_travel';
        $this->init_sys->content($data);
    }
    public function form_validation(){ //ฟังชัน save travel
        //echo("ok");
        $url=$this->insert_pic();
        $this->load->library('form_validation');
        $this->form_validation->set_rules("travel_name","Travel_name",'required|alpha');
        $this->form_validation->set_rules("travel_detail","Travel_detail",'required|alpha');
        if ($this->form_validation->run()) {
            $this->load->model("Save_travel");
            $id = rand(1000,9000);
            $formData = array(
                "travel_id"=>$id,
                "travel_name"=>$this->input->post("travel_name"),
                "travel_detail"=>$this->input->post("travel_detail"),
                "travel_pic"=>$url,
                "travel_lat"=>"test",
                "travel_long"=>"test",
                "created"=>date('Y-m-d H:i:s'),
                "last_update"=>date('Y-m-d H:i:s'),
                );
            $this->Save_travel->insert_data($formData);
            echo("save data seccucs");
            //$this->add_travel();
        }else {
            $this->add_travel();
        }
    }
    public function inserted(){
        $data['content']='Manage_product/add_travel';
        $this->init_sys->content($data);
    }
    public function insert_pic(){
        $type=explode('.', $_FILES["travel_pic"]["name"]);
        $type=$type[count($type)-1];
        $url = "./image_gh/".uniqid(rand()).".".$type;
            if (in_array($type,array("jpg","png","gif"))) {
                if (is_uploaded_file($_FILES["travel_pic"]["tmp_name"])) {
                   if( move_uploaded_file($_FILES["travel_pic"]["tmp_name"],$url)){
                        return $url;
                       }else{

                       }
                }else{
                    retrun();
                }
            }
            
    }

}
