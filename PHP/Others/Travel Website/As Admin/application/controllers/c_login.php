<?php
	class c_login extends CI_Controller{
		function __construct(){
			parent::__construct();
			//$this->load->library('session');
			session_start();
			$this->load->library('template');
			$this->load->model('m_login','',TRUE);
			$this->load->helper(array('form','url','html'));
		}
		
		function index(){ 
			if(isset($_SESSION['username'])){
				redirect('c_homeadmin');
			}
			else{
				$data['error']="";
				$this->template->display('v_login', $data);
			}
		}
		
		function proses_login(){
			$this->load->model('m_login');
			$result=$this->m_login->cek_login(
				$this->input->post('username'),
				$this->input->post('password')
			);
			
			if($result == TRUE){
				$_SESSION['username']=$this->input->post('username');
				redirect('c_homeadmin');
			}
			else{
				$data['error']="Your username and password are incorrect";
				$this->template->display('v_login', $data);
			}
		}
		
		function proses_logout(){
			session_destroy();
			$data['error']="";
			$this->template->display('v_login', $data);
		}
	}
?>