<?php
	class m_login extends CI_model{
		public function cek_login($username, $password){
			$query=$this
				->db
				->where('username', $username)
				->where('password', $password)
				->limit(1)
				->get('akun');
			
			if($query->num_rows() == 1){
				return $query->row_array();
			}
			else{
				return FALSE;
			}
		}
	}
?>