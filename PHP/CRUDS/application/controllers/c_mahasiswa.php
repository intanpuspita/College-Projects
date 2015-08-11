<?php
	class c_mahasiswa extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('m_mahasiswa', '', TRUE);
			$this->load->helper(array('form', 'url', 'html'));
		}
		
		function display(){
			$data['list_data']=$this->m_mahasiswa->get_list_data();
			$this->load->view('v_display_mahasiswa', $data);
		}
		
		function insert(){
			if($this->input->post('submit')){
				$this->m_mahasiswa->insertdata();
				redirect('c_mahasiswa/display');
			}
			$this->load->view('v_form_mahasiswa');
		}
		
		function viewdetail(){
			$vnim=$this->uri->segment(3);
			$data['row_data']=$this->m_mahasiswa->get_detail_data($vnim);
			$this->load->view('v_detail_mahasiswa', $data);
		}
		
		function delete(){
			$vnim=$this->uri->segment(3);
			$this->m_mahasiswa->deletedata($vnim);
			redirect('c_mahasiswa/display');
		}
		
		function update(){
			$vnim=$this->uri->segment(3);
			if($this->input->post('submit')){
				$this->m_mahasiswa->updatedata($vnim);
				redirect('c_mahasiswa/display');
			}
			$data['row_data']=$this->m_mahasiswa->get_detail_data($vnim);
			$this->load->view('v_update_mahasiswa', $data);
		}
		
		function search(){
			if($this->input->post('search')){
				$data['row_data']=$this->m_mahasiswa->searchdata();
				$this->load->view('v_result_data', $data);
			}
		}
	}
?>