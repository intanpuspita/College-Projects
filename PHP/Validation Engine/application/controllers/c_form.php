<?php
	class c_form extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->helper(array('form','url','html'));
		}
		
		function index(){ 
			$this->load->view('v_form');
		}
		
		function insertdata(){
			
		}
	}
?>