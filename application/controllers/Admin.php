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

	public function users(){

		$user_list = $this->usermodel->get_all_users();
		$data['user_list'] = $user_list;
		$this->load->view('admin/user_list', $data);
	}
	public function schools(){

		$school_list = $this->adminmodel->get_all_schools();
		$data['school_list'] = $school_list;
		$this->load->view('admin/school_list', $data);
	}
	public function institutions(){

		$institution_list = $this->adminmodel->get_all_institutions();
		$data['institution_list'] = $institution_list;
		$this->load->view('admin/institution_list', $data);
	}
	
	public function create_institute(){

		$data['title'] = 'New Institution';
		$this->form_validation->set_rules('institution_name', 'Institutution name ', 'required');
		$this->form_validation->set_rules('institution_code', 'Institutution code ', 'required');
		
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
			$school_data['school_state'] = $this->input->post('state');
			$school_data['school_institution'] = $this->input->post('institution');
			$school_data['school_district'] = $this->input->post('district');
			$school_data['school_address'] = $this->input->post('address');
			$school_data['school_phone'] = $this->input->post('contact_number');
			$school_data['school_principal'] = $this->input->post('principal_name');
			$school_data['school_status'] = 1;
			$classes = $this->input->post('classes');
			$sections = $this->input->post('sections');
					
			$this->adminmodel->create_school($school_data);
			
			$new_school_id = $this->db->insert_id();
			if($new_school_id){
				$this->mapClassesToSchool($new_school_id,$classes,$sections);
			}
			$this->schools();


		}
		else{
			$institution_list = $this->adminmodel->get_all_institutions();
			$state_list = $this->adminmodel->get_all_states();	
			$classes_list = $this->adminmodel->get_all_classes();
			$sections_list = $this->adminmodel->get_all_sections();		

			$data['institution_list'] = $institution_list;
			$data['state_list'] = $state_list;
			$data['classes_list'] = $classes_list;
			$data['sections_list'] = $sections_list;
			$this->load->view('admin/create_school', $data);
		}
        
	}
	public function view_school(){

		$school_id = $this->input->get('school_id');
		$result = $this->adminmodel->get_school_by_id($school_id);
		$data['school_data'] = $result;
		$class_sections = array();
		foreach($result as $item){
			$class_sections[$item['class_name']] = array();
		}
		foreach($result as $class){

			if(array_key_exists($class['class_name'],$class_sections)){
				array_push($class_sections[$class['class_name']],$class['section_code']) ;	
			}
		}
		$data['class_sections'] = $class_sections;
		
		$this->load->view('admin/view_school', $data);
		
	}
	public function edit_school(){

		$school_id = $this->input->get('school_id');
		$result = $this->adminmodel->get_school_by_id($school_id);
		$data['school_data'] = $result;
		$class_sections = array();
		foreach($result as $item){
			$class_sections[$item['class_name']] = array();
		}
		foreach($result as $class){

			if(array_key_exists($class['class_name'],$class_sections)){
				array_push($class_sections[$class['class_name']],$class['section_code']) ;	
			}
		}
		$data['class_sections'] = $class_sections;
		
		$this->load->view('admin/edit_school', $data);
		
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
	
	public function renderRoleBasedFields(){

		$role_id = $this->input->get('role_id');
		if(!empty($role_id)){

			$role = $this->usermodel->get_role_by_id($role_id);
			$data['role_code'] = $role->role_code;
			if(in_array($role->role_code,array('teacher','student','parent'))){

				$institution_list = $this->adminmodel->get_all_institutions();
				$data['institutions'] = $institution_list;
			}
			$this->load->view('ajax_templates/role_based_fields', $data);
		}
	}

	public function getSchoolsByInsId(){
		
		$ins_id = $this->input->get('ins_id');
		if(!empty($ins_id)){

			$schools = $this->adminmodel->get_schools_by_institution_id($ins_id);
			echo json_encode($schools);
			exit;
			
		}
	
}

public function getDistrictsBystateId(){

	$state_id = $this->input->get('state_id');
	if(!empty($state_id)){

		$districts = $this->adminmodel->get_districts_by_state_id($state_id);
		echo json_encode($districts);
		exit;

	}
	
}

private function mapClassesToSchool($school_id,$classes,$sections){

		if(!empty($classes)){
			foreach($classes as $key => $class){
				$school_classes_data['school_classes_school_id'] = $school_id;
				$school_classes_data['school_classes_class_id'] = $class; 
				$this->adminmodel->map_school_classes($school_classes_data);
				$record_id = $this->db->insert_id();
				if($record_id){
					foreach($sections as $key => $section){

						echo $key.'=>'.$section;
						$class_section_array = explode('-',$section);
						if($class_section_array[0]==$class){

							$class_sections_data['class_sections_school_classes_id']=$record_id;
							$class_sections_data['class_sections_section_id']=!empty($class_section_array[1]) ? $class_section_array[1] : 1;
							$this->adminmodel->map_school_classes_sections($class_sections_data);
						}
						
					}
					
				}

			}
		}
}

}
