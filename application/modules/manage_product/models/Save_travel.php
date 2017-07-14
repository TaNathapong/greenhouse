<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Save_travel extends CI_Model {
	

	public function insert_data($formData){
		$this->db->insert("travel",$formData);
	}


}
 ?>