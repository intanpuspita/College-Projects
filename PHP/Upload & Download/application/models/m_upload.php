<?php
	class m_upload extends CI_Model{
		function insertdata($nama_file)
		{
			$vjudul = $this->input->post('judul');
			$query=$this->db->query("insert into tugas(id_tugas, nama_tugas, nama_file) values('', '$vjudul', '$nama_file')");
		}
		
		function get_list_data()
		{
			$query=$this->db->query('select * from tugas order by id_tugas');
			return $query;
		}
		
		function getById($id)
		{
			$query=$this->db->query("select nama_file from tugas where id_tugas='$id'");
			return $query->row();
		}
	}
?>