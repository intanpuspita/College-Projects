<?php

class m_login extends CI_model
{
	public function cekdb()
	{
		//mengambil data dari form login username
		$username=$this->input->post('username');
		//mengambil data dari form login password
		$password=$this->input->post('password');
		
		//sql select user_id
		$this->db->select('USERNAME');
		//sql where username=username  yg diambil dari form
		$this->db->where('USERNAME',$username);
		//sql where password=password  yg diambil dari form
		$this->db->where('PASSWORD',$password);
		//sql tabel yang dipilih
		$query=$this->db->get('akun');
		//perulangan nilai array yg berisi data dari query sql
		foreach($query->result()as $row)
		{
			return $row->USERNAME;
		}
	}
}

?>