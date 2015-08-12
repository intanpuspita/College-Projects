<?php
class c_institution extends CI_Controller{
	function __construct(){
		parent::__construct();		
		$this->load->helper(array('form','url','html'));
        $this->load->model('m_institution', '', TRUE);
		$this->load->library('session');
        $this->load->library('template');
	}
	
	function index(){
		if(($this->session->userdata('logged_in') == TRUE)){
			if($this->session->userdata('status') == "institution"){
				$data['list_data'] = $this->m_institution->get_profile($this->session->userdata('username'));
				$this->template->display('v_institution', $data);
			}
		}
		else{
			redirect('c_account/index');
		}
	}
    
    function edit_profile(){
        $id=$this->uri->segment(3);
		if($this->input->post('Update')){
			$this->m_institution->edit_profile($id);
			redirect('c_institution');
		}
		$data['list_data']=$this->m_institution->get_profile($this->session->userdata('username'));
		$this->template->display('v_editprofile_ins', $data);    
    }
}
?>