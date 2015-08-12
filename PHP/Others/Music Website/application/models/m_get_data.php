<?php
	class m_get_data extends CI_Model
	{
		function get_music()
		{
			$query=$this->db->query("select *
									from lagu a
									left join album b
									on(a.album = b.kd_album)
									inner join lagu_musisi c
									on(a.kd_lagu = c.kd_lagu)
									inner join musisi d
									on(c.kd_musisi = d.kd_musisi)
									");
			return $query->result();
		}
		function get_detail_data($kd_lagu)
		{
			$query=$this->db->query("select *
									from lagu a
									left join album b
									on(a.album = b.kd_album)
									inner join lagu_musisi c
									on(a.kd_lagu = c.kd_lagu)
									inner join musisi d
									on(c.kd_musisi = d.kd_musisi)
									where a.kd_lagu='$kd_lagu'
									");
			return $query->row();	
		}
		function download($kd_lagu)
		{
			$query=$this->db->query("select file_lagu from lagu where kd_lagu='$kd_lagu'");
			return $query->row();
		}
		
		function get_komentar($kd_lagu)
		{
			$query = $this->db->query("SELECT photo, profil.username, komen FROM komentar INNER JOIN profil ON komentar.username = profil.username WHERE kd_lagu = '$kd_lagu' ORDER BY waktu");
			return $query->result();
		}
	}
?>