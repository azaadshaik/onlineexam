<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Admin extends CI_Controller
{
	public function __construct()
	{
       
       
		parent::__construct();
		$this->load->library(array('form_validation'));
		$this->load->model(array('usermodel','adminmodel'));
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
	
	public function create_institute(){

		$data['title'] = 'New Institution';
		$this->form_validation->set_rules('institution_name', 'Institutution name is required', 'required');
		$this->form_validation->set_rules('institution_code', 'Institutution code is required', 'required');
		
		if ($this->form_validation->run() === TRUE)
		{
			$institution_data['institution_code'] = $this->input->post('institution_code');
			$institution_data['institution_name'] = $this->input->post('institution_name');
						
			$this->adminmodel->create_institution($institution_data);
			


		}
		else{
			$this->load->view('admin/create_institute', $data);
			
		}
		
	}

	public function create_school(){

		$data['title'] = 'New School';
		$this->form_validation->set_rules('school_name', 'School name is required', 'required');
		$this->form_validation->set_rules('school_code', 'School code is required', 'required');
		
		if ($this->form_validation->run() === TRUE)
		{
			$school_data['school_code'] = $this->input->post('school_code');
			$school_data['school_name'] = $this->input->post('school_name');
			$school_data['school_status'] = 1;
						
			$this->adminmodel->create_school($school_data);
			


		}
		else{
			$this->load->view('admin/create_school', $data);
		}
        
	}
	public function create_roles()
	{
		$this->data['title'] = 'Role Creation';
		$this->form_validation->set_rules('rolecode', 'Role code is required', 'required');
		$this->form_validation->set_rules('rolename', 'Role name is required', 'required');
		
		if ($this->form_validation->run() === TRUE)
		{
			$role_data['role_code'] = $this->input->post('rolecode');
			$role_data['role_name'] = $this->input->post('rolename');
						
			$this->adminmodel->create_role($role_data);
			


		}
		else{
			$this->load->view('roles/create', $this->data);
		}
		
		
    }

	
}
