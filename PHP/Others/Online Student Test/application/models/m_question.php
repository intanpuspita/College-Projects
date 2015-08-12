<?php
class M_question extends CI_model{
	public function get_all_question(){
	    $limit = 43;
		$query = $this->db->query("select * from ost_questions order by rand()");
		//$query = $this->db->query("select * from (select * from ost_questions order by rand()) as A inner join ost_option as B on A.ques_id=B.ques_id");
        return $query->result_array();
    }
    
    public function get_question_by_cat($cat){
		$limit = 20;
	    $query = $this->db->query("select * from ost_questions where cat_id='$cat' order by rand() limit $limit");
        return $query->result_array();
    }
    
    public function get_option($id){
        $query = $this->db->query("select * from ost_option where ques_id='$id'");
        return $query;
    }
	
	public function get_all_disc($limit,$offset){
		$query = $this->db->query("select * from ost_questions, ost_category, ost_option where ost_category.cat_id = ost_questions.cat_id and ost_questions.ques_disc <> 'NULL' and ost_questions.ques_answer = ost_option.opt_id limit $limit offset $offset ");
		return $query;
	}
	
	public function record_count(){
		$query = $this->db->query("select * from ost_questions, ost_category, ost_option where ost_category.cat_id = ost_questions.cat_id and ost_questions.ques_disc <> 'NULL' and ost_questions.ques_answer = ost_option.opt_id");
		return $query->num_rows();
	}
	
	public function get_disc_byid($id,$limit,$offset){
		$query = $this->db->query("select * from ost_questions, ost_category, ost_option where ost_questions.cat_id = '$id' and ost_questions.ques_disc <> 'NULL' and ost_questions.cat_id = ost_category.cat_id and ost_questions.ques_answer = ost_option.opt_id  limit $limit offset $offset ");
		return $query;
	}
	
	public function record_count_byid($id){
		$query = $this->db->query("select * from ost_questions, ost_category, ost_option where ost_questions.cat_id = '$id' and ost_questions.ques_disc <> 'NULL' and ost_questions.cat_id = ost_category.cat_id and ost_questions.ques_answer = ost_option.opt_id");
		return $query->num_rows();
	}
}
?>