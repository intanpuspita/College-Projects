<?php
class m_institution extends CI_model{
	public function get_profile($username){
		$query = $this->db->query("select * from ost_institution where ins_username = '$username'");
        return $query;
	}
    
    public function edit_profile($id){
        $name = $this->input->post('name');
        $address = $this->input->post('address');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        $ammb = $this->input->post('ammb');
        $query = $this->db->query("update ost_institution set ins_name='$name', ins_addr='$address', ins_email='$phone', ins_ammb='$ammb' where ins_id='$id'");
        return $query;
    }
}
?>