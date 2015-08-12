<?php
	class c_homemember extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->library('template');
			$this->load->helper(array('form','url','html'));
		}
		
		function index(){ 
			$data="";
			$this->template->display('v_homemember', $data);
		}
	}
?>