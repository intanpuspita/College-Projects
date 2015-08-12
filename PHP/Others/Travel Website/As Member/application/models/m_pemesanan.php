<?php
	class m_pemesanan extends CI_Model{
		function get_list_data(){
			$query=$this->db->query('select * from pemesanan_tiket order by id_pemesanan');
			return $query;
		}
	}
?>