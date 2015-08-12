<?php
	class m_account extends CI_model{
		public function cek_login($username, $password){
			if($this->is_student($username, $password)) return "student";
            //else if($this->is_institution($username, $password)) return "institution";
            else return FALSE;
		}
        
        public function is_student($username, $password){
            $query=$this->db->query("select * from ost_students where std_username='$username' and std_password='$password'");
			if($query->num_rows() == 1) return TRUE;
            else return FALSE;
        }
        
        /*public function is_institution($username, $password){
            $query=$this->db->query("select * from ost_institution where ins_username='$username' and ins_password='$password'");
			if($query->num_rows() == 1) return TRUE;
            else return FALSE;
        }*/
		
		public function register(){
            $username = $this->input->post('username');
            if($this->check_username_std($username) == NULL){
                $password = $this->input->post('password');
                $name = $this->input->post('name');
                if($this->input->post('status') != "institution") $query=$this->db->query("insert into ost_students values ('', '$username', '$password', '$name', '', '', '', '', '', '')");
                else $query=$this->db->query("insert into ost_institution values ('', '$name', '$username', '$password', '', '', '', '')");
                return $query;
            }
            else{
                return FALSE;
            }
		}
        
        public function check_username_std($username){
            $query=$this->db->query("select * from ost_students where STD_USERNAME = '$username'");
            return $query->num_rows();
        }
        
        /*public function check_username_ins($username){
            $query=$this->db->query("select * from ost_institution where INS_USERNAME = '$username'");
            return $query->num_rows();
        }*/
	}
?>