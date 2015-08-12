<?php
	class c_jadwal extends CI_Controller{
		function __construct(){
			parent::__construct();
			//$this->load->library('session');
			session_start();
			$this->load->library('template');
			$this->load->model('m_jadwal','',TRUE);
			$this->load->helper(array('form','url','html'));
			if(!isset($_SESSION['username'])){
				redirect('c_login');
			}
		}
		
		function index(){ 
			$data['list_data']=$this->m_jadwal->get_list_data();
			$this->template->display('v_displayjadwal', $data);
		}
	}
?>