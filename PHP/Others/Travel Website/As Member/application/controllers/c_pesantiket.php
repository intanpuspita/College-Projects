<?php
	class c_pesantiket extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->library('template');
			$this->load->model('m_pesantiket','',TRUE);
			$this->load->helper(array('form','url','html'));
		}
		
		function form_pesantiket(){ 
			$data['id']=$this->uri->segment(3);
			$this->template->display('v_formpesan', $data);
		}
		
		function savepesan(){
		//echo $this->input->post('id');
		//echo $this->input->post('nama');
			$this->m_pesantiket->savedata();
			echo "<script>alert('Pemesanan tiket berhasil'); history.go(-2)</script>";
		}
	}
?>