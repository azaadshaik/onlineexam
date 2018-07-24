<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Admin extends CI_Controller
{
	public function __construct()
	{
       
       
		parent::__construct();
		$this->load->library(array('form_validation'));
		$this->load->model(array('usermodel'));
		if (!$this->session->userdata('logged_in')){
            redirect('pulseauth/login','refresh');
        }
        elseif($this->session->userdata('user_rolecode')!='admin'){
            $this->data['title']='Unauthorized Access';
            $this->data['message']='You are not authorized to view this page';
            $this->template->load('default', 'errors/unauthorized', $this->data);

        }
        
               
		

	}

	/**
	 * Redirect if needed, otherwise display the user list
	 */
	public function index()
	{
                
        $this->data['title'] = 'Admin Dashboard';
        $this->template->load('default', 'admin/dashboard', $this->data);
        
    }

	
}
