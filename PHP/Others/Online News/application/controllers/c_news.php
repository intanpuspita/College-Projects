<?php
	class c_news extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('m_news', '', TRUE);
			$this->load->library('template');
			$this->load->library('pagination');
			$this->load->helper(array('url', 'html'));
		}
		
		public function display()
		{
			$config = array();
			$config['base_url']=base_url()."index.php/c_news/display";
			$config['total_rows']=$this->m_news->news_count();
			$config['per_page']=3;
			$config['uri_segment']=3;
			$choice = $config["total_rows"] / $config["per_page"];
			$config["num_links"] = round($choice);
			
			$this->pagination->initialize($config);
			
			$page = ($this->uri->segment(3)) ? $this->uri->segment(3):0;
			$data['results']=$this->m_news->fetch_news($config['per_page'], $page);
			$data['links'] = $this->pagination->create_links();
			
			$this->template->display('v_news', $data);
		}
		
		public function detail_news()
		{
			$id_berita=$this->uri->segment(3);
			$data['results']=$this->m_news->get_detail_data($id_berita);
			$this->template->display('v_detailnews', $data);
		}
	}
?>