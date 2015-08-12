<?php
class m_test extends CI_model{
	public function create_test($status, $username){
		$id = $this->m_student->get_id($username);
        if($status == 0) //latihan
            $query = $this->db->query("insert into ost_exams values ('', '$id', CURDATE(), CURTIME(), '', '', 0,0,0,0,0)");
        else  //ujian
            $query = $this->db->query("insert into ost_exams values ('', '$id', CURDATE(), CURTIME(), '', '', 1,0,0,0,0)");
        return $this->db->insert_id();
    }
    
    public function get_category(){
        $query = $this->db->query("select * from ost_category");
        return $query;
    }
	
	public function get_category_byid($id){
		$query = $this->db->query("select cat_name from ost_category where cat_id = '$id'");
		return $query->row();
	}
    
    public function get_status($id){
        $query = $this->db->query("select exam_status from ost_exams where exam_id = '$id'");
        return $query->row('exam_status');
    }
	
	public function get_date($id){
        $query = $this->db->query("select exam_date, exam_start, exam_end from ost_exams where exam_id = '$id'");
        return $query->row();
    }
    
    public function save_result($id, $true,$false,$empty,$result,$cat){
        if($this->get_status($id) == 1) //latihan
            $query = $this->db->query("update ost_exams set exam_end=CURTIME(), exam_result='$result', exam_true = '$true', exam_false = '$false', exam_empty = '$empty', exam_cat = '$cat' where exam_id='$id'");
        else //ujian
            $query = $this->db->query("update ost_exams set exam_result='$result', exam_true = '$true', exam_false = '$false', exam_empty = '$empty' , exam_cat = '$cat' where exam_id='$id'");
        return $query;
    }    
}
?>