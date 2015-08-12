<?php
	class m_pemesanan extends CI_Model{
		function get_list_data(){
			$query=$this->db->query('select * from pemesanan_tiket order by id_pemesanan');
			return $query;
		}
		
		function get_detail_data($id){
			$query=$this->db->query("select * from pemesanan_tiket where id_pemesanan='$id'");
			return $query;
		}
		
		function savevalidasi($id){
			$validasi = $this->input->post('valid');
			$query=$this->db->query("update pemesanan_tiket set status_validasi='$validasi' where id_pemesanan='$id'");
			return $query;
		}
	}
?>