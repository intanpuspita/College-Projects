<?php
class m_student extends CI_model{
	public function get_profile($username){
		$query = $this->db->query("select * from ost_students where std_username = '$username'");
        return $query;
	}
    
    public function get_id($username){
        $query = $this->db->query("select std_id from ost_students where std_username = '$username'");
        return $query->row('std_id');
    }
    
    public function edit_profile($username){
        $id = $this->get_id($username);
        $name = $this->input->post('name');
        $address = $this->input->post('address');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        $birthplace = $this->input->post('birthplace');
        $birthdate = $this->input->post('birthdate');
        $school = $this->input->post('school');
        $query = $this->db->query("update ost_students set std_name='$name', std_addr='$address', std_email='$email', std_phone='$phone', std_birthplace='$birthplace', std_birthdate='$birthdate', std_school='$school' where std_id='$id'");
        return $query;
    }
	
	public function edit_username_password(){
        $username = $this->input->post('username');
		$password = $this->input->post('password');
		$id = $this->get_id($this->session->userdata("username"));
		if($username != $this->session->userdata("username"))
		{
			if($this->m_account->check_username_std($username) == NULL){
			$query = $this->db->query("update ost_students set std_username='$username', std_password='$password' where std_id='$id'") or die(mysql_error());
				return $username;
			}
			else 
				return FALSE;
		}
		else
		{
			$query = $this->db->query("update ost_students set std_password='$password' where std_id='$id'") or die(mysql_error());
				return $username;
		}
    }
	
	public function get_exams($id){
		$query = $this->db->query("select * from ost_exams, ost_category where std_id = '$id' and ost_exams.exam_cat = ost_category.cat_id order by exam_date,exam_start asc ");
		return $query;
	}
}
?>