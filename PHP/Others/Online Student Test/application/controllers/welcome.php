<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url', 'html'));
		$this->load->model('m_text', '', TRUE);
	}
	
	public function index()
	{
		if($this->input->post("submit"))
		{
			$this->m_text->insert_data();
		}
		$i = 1;
		$data['article'] = $this->m_text->get_list_data();
		foreach($data['article'] as $question){
			$option[$i] = $this->m_text->get_option_byid($question['QUES_ID']);
			$i = $i + 1;
		}
		$data['opt_content'] = $option;
		$data['blank'] = $this->m_text->get_blank_ques();
		$data['cat'] = $this->m_text->get_category();
		$this->load->view('welcome_message',$data);
	}
	
	public function delete(){
		$id = $this->uri->segment(3);
		$this->m_text->delete($id);
		redirect('welcome');
	}
	
	public function insert_option(){
		$this->m_text->insert_option();
		redirect('welcome');
	}
	
	public function set_answer(){
		if($this->input->post('submit'))
		{
			$this->m_text->update_question();
		}
		redirect('welcome');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */