<?php
class c_student extends CI_Controller{
	function __construct(){
		parent::__construct();		
		$this->load->helper(array('form','url','html'));
        $this->load->model('m_student', '', TRUE);
		$this->load->model('m_account', '', TRUE);
		$this->load->library('session');
        $this->load->library('template');
	}
	
	function index(){
		if(($this->session->userdata('logged_in') == TRUE)){
			if($this->session->userdata('status') == "student"){
                $data['list_data'] = $this->m_student->get_profile($this->session->userdata('username'));
				$id = $this->m_student->get_id($this->session->userdata('username'));
				$data['exam'] = $this->m_student->get_exams($id);
				$this->template->display('v_student', $data);
			}
		}
		else{
			redirect('c_account/index');
		}
	}
	
	function edit_username_password(){
		$data['error']="";
		if($this->input->post('Update')){
			$result = $this->m_student->edit_username_password();
			if(TRUE){
				$this->session->set_userdata('username', $result);
				redirect('c_student');
			}
			else $data['error']="Username telah terpakai";
		}
		$data['list_data']=$this->m_student->get_profile($this->session->userdata('username'));
		$this->template->display('v_edituserpass_std', $data); 
	}
    
    function edit_profile(){
		//$this->load->library('form_validation');
		
		//$this->form_validation->set_rules('username','Username', 'trim|required|xss_clean|min_length[6]|max_length[25]|alpha_dash');
		//$this->form_validation->set_rules('password','Password', 'trim|required|xss_clean|min_length[8]|max_length[16]|alpha_num');
		
		if($this->input->post('Update')){
			$this->m_student->edit_profile($this->session->userdata('username'));
			redirect('c_student');
		}
		$data['list_data']=$this->m_student->get_profile($this->session->userdata('username'));
		$this->template->display('v_editprofile_std', $data);    
    }
}
?>