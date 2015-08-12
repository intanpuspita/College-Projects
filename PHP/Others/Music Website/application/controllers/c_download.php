<?php
	class c_download extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->helper('download');
			$this->load->model('m_get_data');
		}
		function cekfile()
		{
			$data['query']=$this->m_download->cekfile();
			if($data['query']==null){
				return false;
			}else{
				$this->file();
			}
		}
		function file()
		{
			$kd_lagu=$this->uri->segment(3);
			$path=$this->m_get_data->download($kd_lagu);
			$file = file_get_contents(base_url().$path->file_lagu);
			$name = "$kd_lagu.mp3";
			print_r(base_url().$path->file_lagu);
			
			force_download($name,$file);
		}
	}
?>