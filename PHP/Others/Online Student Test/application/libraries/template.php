<?php
	class template{		
		function __construct(){
			$this->ci=&get_instance();
			$this->page=$this->ci->uri->segment(2);
			$this->page=($this->page=="")?"home":$this->page;
		}
		
		function display($template, $data=null)
		{
			$data['_page']=$this->page;
			$data['_header']=$this->ci->load->view('template/header', $data, TRUE);
			$data['_content']=$this->ci->load->view($template, $data, TRUE);
			$data['_footer']=$this->ci->load->view('template/footer', $data, TRUE);
			$this->ci->load->view('template.php', $data);
		}
	}
?>