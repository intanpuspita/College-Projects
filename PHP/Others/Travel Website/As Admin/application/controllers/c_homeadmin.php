<?php
	class c_homeadmin extends CI_Controller{
		function __construct(){
			parent::__construct();
			//$this->load->library('session');
			session_start();
			$this->load->library('template');
			$this->load->helper(array('form','url','html'));
			if(!isset($_SESSION['username'])){
				redirect('c_login');
			}
		}
		
		function index(){ 
			$data['username'] = $_SESSION['username'];
			$this->template->display('v_homeadmin', $data);
		}
	}
?>