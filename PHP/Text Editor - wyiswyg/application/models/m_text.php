<?php
class M_text extends CI_Model{
	function get_list_data(){
		$query = $this->db->query("SELECT * FROM ost_questions ORDER BY ques_id DESC");
		return $query->result_array();
	}
	
	function get_opt(){
		$query = $this->db->query("SELECT * FROM ost_option ORDER BY ques_id DESC");
		return $query;
	}
	
	function get_option_byid($id){
		$query = $this->db->query("SELECT * FROM ost_option where ques_id = '$id'");
		return $query;
	}
	
	function insert_data(){
		$category = $this->input->post('category');
		$content = $this->input->post('content');
		$solution = $this->input->post('solution') ? $this->input->post('solution') : NULL;
		$query = $this->db->query("INSERT INTO ost_questions(cat_id, ques_content, ques_disc, ques_answer) VALUES ('$category','$content', '$solution',0)");
		return;
	}
	
	function delete($id){
		$query = $this->db->query("delete from ost_option where ques_id = '$id'");
		$query = $this->db->query("delete from ost_questions where ques_id = '$id'");
	}
	
	function insert_option(){
		$id = $this->input->post('ques');
		$opt1 = $this->input->post('opta');
		$opt2 = $this->input->post('optb');
		$opt3 = $this->input->post('optc');
		$opt4 = $this->input->post('optd');
		$opt5 = $this->input->post('opte');
		$query = $this->db->query("INSERT INTO ost_option(ques_id, opt_content) values ('$id', '$opt1'), ('$id', '$opt2') , ('$id', '$opt3'), ('$id', '$opt4') , ('$id', '$opt5') ");
	}
	
	function update_question(){
		$answer = $this->input->post('answer');
		$ques = $this->input->post('ques');
		$query = $this->db->query("UPDATE ost_questions SET ques_answer = '$answer' WHERE ques_id = '$ques'");
	}
	
	function get_blank_ques(){
		$query = $this->db->query("SELECT * FROM ost_questions where ques_answer = 'NULL'");
		return $query;
	}
}
?>