<?php
	class m_jadwal extends CI_Model{
		function get_list_data(){
			$query=$this->db->query('select * from jadwal order by id_jadwal');
			return $query;
		}
	}
?>