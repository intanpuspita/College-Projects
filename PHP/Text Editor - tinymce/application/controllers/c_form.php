<?php
	class c_form extends CI_Controller
	{
		function __construct(){
			parent::__construct();
			//$this->load->model('m_form', '', TRUE);
			$this->load->helper(array('form', 'url', 'html'));
		}
		
		function index(){
			if($this->input->post('submit')){
				$this->m_form->insertdata();
				redirect('c_form/displaytext');
			}
			$this->load->view('v_form');
		}
	}
?>