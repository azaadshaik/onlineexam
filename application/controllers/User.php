<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	
	public function __construct()
	{
		
		parent::__construct();
		$this->load->library(array('form_validation'));
		$this->load->model('usermodel');
		
	}
	public function index()
	{
		
	}
	public function register()
	{
		$upload_config = $this->config->item('file_upload');
		$this->load->library('upload', $upload_config);
		
		if ( ! $this->upload->do_upload('userimage'))
         {
                        $error = array('error' => $this->upload->display_errors());
						echo "<pre>";
						print_r($error);
						die;
                        
		
		}
		else{
			echo "<pre>";	
			print_r($this->upload->data());
			echo "upload success";
			die;
		}
		$this->data['title'] = 'Registration';
		$this->form_validation->set_rules('username', 'Username is required', 'required');
		$this->form_validation->set_rules('password', 'Password is required', 'required');
		
		if ($this->form_validation->run() === TRUE)
		{
			$user_data['user_name'] = $this->input->post('username');
			$user_data['password'] = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
			$user_data['user_firstname'] = $this->input->post('firstname');
			$user_data['user_lastname'] = $this->input->post('lastname');
			$user_data['user_reg_date'] = date('Y-m-d');
			$user_data['user_status'] = 1;
			
			$this->usermodel->add_user($user_data);
			


		}
		else{
			$roles = $this->usermodel->get_roles();
			$this->data['roles'] = $roles;

			$this->template->load('default', 'user/registration', $this->data);
		}
		
		
	}

	
	

	
}
