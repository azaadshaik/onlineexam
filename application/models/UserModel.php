<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class UserModel extends CI_Model
{
	

	
    
    public function add_user($user_data){

        
        if($this->db->insert('users', $user_data)){
            return true;
        }
        else{
            return false;
        }

       
    }

    public function get_roles(){

        $this->db->select('*');
        $this->db->from('roles');
        $result = $this->db->get()->result_array();
        return $result; 
    }

    public function get_role_by_user_id($user_id){

		$sql = "SELECT * FROM roles inner join user_roles on roles.role_id=user_roles.role_id WHERE user_roles.user_id = ?  ";
        $record = $this->db->query($sql, array($user_id))->row();
		return $record;
	}
   
}