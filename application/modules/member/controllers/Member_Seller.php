<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Member_seller extends MX_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->module('init_sys/Init_sys');
        $this->load->model('member/Member_seller_model');
        // $this->load->model('vendor/Vendor_model');
    }
}//end class
