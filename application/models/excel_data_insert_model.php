<?php
class excel_data_insert_model extends CI_Model {

    public function  __construct() {
        parent::__construct();
        
    }
	
public function Add_User($data_user){
$this->db->insert('questions', $data_user);
   }
  
	
}

?>