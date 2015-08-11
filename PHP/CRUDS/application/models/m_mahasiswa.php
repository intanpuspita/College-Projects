<?php
	class m_mahasiswa extends CI_Model{
		function get_list_data(){
			$query=$this->db->query('select * from data_mhs order by nim');
			return $query;
		}
		
		function insertdata(){
			$vnim = $this->input->post('nim');
			$vnama = $this->input->post('nama');
			$vumur = $this->input->post('umur');
			$query=$this->db->query("insert into data_mhs(nim, nama, umur) values('$vnim', '$vnama', '$vumur')");
		}
		
		function get_detail_data($vnim){
			$query=$this->db->query("select * from data_mhs where nim='$vnim'");
			return $query;
		}
		
		function deletedata($vnim){
			$query=$this->db->query("delete from data_mhs where nim='$vnim'");
		}
		
		function updatedata($vnim){
			$vnama = $this->input->post('nama');
			$vumur = $this->input->post('umur');
			$query=$this->db->query("update data_mhs set nama='$vnama', umur='$vumur' where nim='$vnim'");
		}
		
		function searchdata(){
			$vkeyword=$this->input->post('keyword');
			$query=$this->db->query("select * from data_mhs where nim like '%$vkeyword%' or nama like '%$vkeyword%' or umur like '%$vkeyword%'");
			return $query;
		}
	}
?>