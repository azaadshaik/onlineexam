<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class AdminModel extends CI_Model
{
	

	
    
    public function create_role($role_data){

        
        $result= $this->db->insert('roles', $role_data);
        return $result;
           

       
    }

    public function create_institution($institution_data){

        
        $result= $this->db->insert('institution', $institution_data);
        return $result;
           

       
    }
    public function create_school($school_data){

        
        $result= $this->db->insert('schools', $school_data);
        return $result;
           

       
    }
   
}