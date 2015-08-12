<?php
	class m_login extends CI_model{
		public function cek_login($username, $password){
			$query=$this->db->query("select * from akun where username='$username' and password='$password'");
				
			//echo $query->num_rows();
			if($query->num_rows() == 1){
				return $query->row_array();
			}
			else{
				return FALSE;
			}
		}
	}
?>