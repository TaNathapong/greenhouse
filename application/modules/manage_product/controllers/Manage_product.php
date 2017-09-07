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

        $data['content']='Manage_product/edit_product';
        $product_id = $this->uri->segment(3);
        $timestam = date('Y-m-d H:i:s');
        $data['product_details'] = $this->product_model->get_product_detail($product_id);
        $this->init_sys->content($data);
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
        $data['head']='เพิ่มสถานที่ท่องเที่ยว';
        $data['content']='Manage_product/add_travel';
        $this->init_sys->content($data);

    }
    public function form_validation(){ //ฟังชัน save travel
        //echo("ok");
        $url=$this->insert_pic(); //เรียกใช้งานฟังชั่น insert_pic และส่งค่ากลับมากับตัวแปร $url
        $this->load->library('form_validation');
        $this->form_validation->set_rules("travel_name","Travel_name",'required|alpha');// เช็คฟอร์ม name
        $this->form_validation->set_rules("travel_detail","Travel_detail",'required|alpha');//เช็คฟอร์ม detail
        if ($this->form_validation->run()) { // ถ้าเช็คฟอร์มผ่าน
            $this->load->model("Save_travel"); //เรียกโมเดวชื่อ Save_travel.php
            $id = rand(1000,9000); //สุ่มตัวเลยเพื่อเป็น id
            $formData = array( //เก็บค่าจากหอร์ม ไว้ในตัวแปร array
                "travel_id"=>$id,
                "travel_name"=>$this->input->post("travel_name"),
                "travel_detail"=>$this->input->post("travel_detail"),
                "travel_pic"=>$url,
                "travel_lat"=>"test",
                "travel_long"=>"test",
                "created"=>date('Y-m-d H:i:s'),
                "last_update"=>date('Y-m-d H:i:s'),
                );
            //$this -> ชื่อโมเดว -> ชื่อฟังชั่นในโมเดว(ส่งตัวแปรเข้าไป)
            $this->Save_travel->insert_data($formData);
            //echo("save data seccucs");
            $this->inserted();
        }else { //ถ้าเช็คฟอร์มไม่ผ่าน
            $this->add_travel();
        }
    }
    public function inserted(){
        $data['head']='ท่องเที่ยว';
        $data['content']='Shop/travel-details';
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
