<?php
class c_test extends CI_Controller{ 
	function __construct(){
		parent::__construct();		
		$this->load->helper(array('form','url','html'));
        $this->load->model('m_test', '', TRUE);
        $this->load->model('m_student', '', TRUE);
        $this->load->model('m_question', '', TRUE);
        $this->load->library('session');
        $this->load->library('template');
		$this->load->library('pagination');
    }
	
	function article(){
		$category = $this->uri->segment(3);
		
		$config = array();
        $config["base_url"] = base_url() . "/index.php/c_test/article/".$category;
        $config["per_page"] = 5;
        $config["uri_segment"] = 4;
		
		
		$page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
		
		if($category == 0)
		{
			$config["total_rows"] = $this->m_question->record_count();
			$choice = $config["total_rows"] / $config["per_page"];
			$config["num_links"] = round($choice);
			$this->pagination->initialize($config);
			$data['article'] = $this->m_question->get_all_disc($config["per_page"], $page);
		}
		else
		{
			$config["total_rows"] = $this->m_question->record_count_byid($category);
			$choice = $config["total_rows"] / $config["per_page"];
			$config["num_links"] = round($choice);
			$this->pagination->initialize($config);
			$data['article'] = $this->m_question->get_disc_byid($category,$config["per_page"], $page);
		}

        $data["links"] = $this->pagination->create_links();
		
		
		$data['category']=$this->m_test->get_category();
        $this->template->display('v_article', $data);
	}
    
    function test(){
        $data['status']=$this->uri->segment(3);
        $data['category']=$this->m_test->get_category();
        $this->template->display('v_test', $data);
    }
    
	function join_test(){
		$this->session->unset_userdata('test_id');
	   $status=$this->uri->segment(3);
       $category=$this->uri->segment(4);
	   
       $id=$this->m_test->create_test($status, $this->session->userdata('username'));
       $this->session->set_userdata('test_id', $id);
       if($category == 6)
            $question = $this->m_question->get_all_question(); 
       else
            $question = $this->m_question->get_question_by_cat($category);
       $this->show_test($question);
    }
    
    function show_test($question){
        $i = 1;
        foreach($question as $quest){
            $test[$i]['question'] = $quest['QUES_ID'];
            $test[$i]['answer'] = $quest['QUES_ANSWER'];
            $option[$i] = $this->m_question->get_option($quest['QUES_ID']);
            $i=$i+1;
        }
        $this->session->set_userdata('question_answer', $test);
        
        $alphabet = array('A', 'B', 'C', 'D', 'E');
        $data = array(
            'question'  => $question, 
            'option'  => $option,
            'alphabet' => $alphabet 
        );
		$data['cat'] = $this->uri->segment(4);
        $this->template->display('v_question', $data);
    }
    
    function check_test(){
        $result = 0;
        $true = 0;
		$false = 0;
		$empty = 0;
		$cat = $this->uri->segment(3);
		$sum = $cat == 6 ? 43 : 20; 
		$test = $this->session->userdata('question_answer');
        for($i = 1; $i<=$sum; $i++){
            if($this->input->post('question_' .$i) == $test[$i]['answer']) 
			{ 
				$true = $true + 1; 
			}
			else if($this->input->post('question_' .$i) == NULL){
				$empty = $empty + 1;
			}
			else
			{
				$false = $false + 1;
			}
        }
		$result = ($true * 4) - $false + ($empty * 0);
        $this->session->unset_userdata('question_answer');
        $this->result_test($true,$false,$empty,$result,$cat);
    }
    
    function result_test($true,$false,$empty,$result,$cat){
        $this->m_test->save_result($this->session->userdata('test_id'), $true,$false,$empty,$result,$cat);
        $data['result'] = $result;
		$data['true'] = $true;
		$data['false']  =$false;
		$data['cat'] = $this->m_test->get_category_byid($cat);
		$data['date'] = $this->m_test->get_date($this->session->userdata('test_id'));
		$data['list_data'] = $this->m_student->get_profile($this->session->userdata('username'));
        $this->template->display('v_result_test', $data);
    }
}
?>