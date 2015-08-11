<?php
	class upload extends CI_Controller{
		function __construct()
		{
			parent::__construct();
			$this->load->helper(array('form', 'url', 'download'));
			//$this->load->model('m_upload', '', TRUE);
		}
		
		function index()
		{
			$data['list_data']=$this->m_upload->get_list_data();
			$this->load->view('v_display', $data);
		}
		
		function upload_file()
		{
			$this->load->view('upload_form', array('error'=>''));
		}
		
		function download_file()
		{
			$this->load->helper('download');
			$id=$this->uri->segment(3);
			$path=$this->m_upload->getById($id);
			$file = file_get_contents(base_url().'uploads/'.$path->nama_file);
			$name = $path->nama_file;

			force_download($name, $file);
		}
		
		function do_upload()
		{
			$config['upload_path']='./uploads/';
			$config['allowed_types']='gif|jpg|png|pdf|doc|docx|xls|xlsx|ppt|txt';
			$config['max_size']='10000';
			
			$this->load->library('upload', $config);
			
			if( !$this->upload->do_upload()){
				$error=array('error'=>$this->upload->display_errors());
				$this->load->view('upload_form', $error);
			}
			else{
				$data=array('upload_data' => $this->upload->data());
				$this->m_upload->insertdata($data['upload_data']['file_name']);
				$this->load->view('upload_success', $data);
			}
		}
	}
?>