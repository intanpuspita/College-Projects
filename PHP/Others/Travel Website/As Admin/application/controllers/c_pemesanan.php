<?php
	class c_pemesanan extends CI_Controller{
		function __construct(){
			parent::__construct();
			//$this->load->library('session');
			session_start();
			$this->load->library('template');
			$this->load->model('m_pemesanan','',TRUE);
			$this->load->helper(array('form','url','html'));
			if(!isset($_SESSION['username'])){
				redirect('c_login');
			}
		}
		
		function index(){ 
			$data['list_data']=$this->m_pemesanan->get_list_data();
			$this->template->display('v_displaypemesanan', $data);
		}
		
		function validasi(){
			$id=$this->uri->segment(3);
			$data['list_data']=$this->m_pemesanan->get_detail_data($id);
			$this->template->display('v_validasi', $data);
		}
		
		function save_validasi(){
			$id=$this->uri->segment(3);
			$this->m_pemesanan->savevalidasi($id);
			echo "<script>alert('Validasi Berhasil'); history.go(-2)</script>";
		}
	}
?>