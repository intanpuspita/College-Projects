<?php
	class c_musicfile extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->helper(array('url','html'));
			$this->load->model(array('m_get_data','m_login'));
		}
		function data_music()
		{
			$data['list_data']=$this->m_get_data->get_music();
			$this->load->view('v_home',$data);
		}
		function view_detail()
		{
			$kd_lagu=$this->input->get('kd_lagu');
			$data['kd_lagu']=$kd_lagu;
			$data['menu']=$this->input->get('menu');
			$data['isLogin'] = $this->session->userdata('islogin');
			$data['username']= $this->m_login->cekdb();
			$data['info_music']=$this->m_get_data->get_detail_data($kd_lagu);
			$data['komentar']=$this->m_get_data->get_komentar($kd_lagu);
			$this->load->view('v_home',$data);
		}
	}?>
