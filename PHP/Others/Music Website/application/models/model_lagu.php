<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lagu</title>
</head>

<body>
<?php
	class Model_Lagu extends CI_Model
	{
		function construct()
		{
			parent :: __construct();
		}
		
		function get_lagu($keyword)
		{
			$this->load->database();
			$this->db->select();
			$this->db->like('judul_lagu',$keyword);
			$query_lagu = $this->db->get('lagu');
			return $query_lagu->result();
			/*mysql_query("select lagu.judul_lagu, lagu.lirik, lagu.durasi, lagu.ukuran, lagu.file_lagu, lagu.link_vid, lagu.jml_download, lagu.jml_like, lagu.jml_dislike, album.nama, album.gambar, musisi.nama_musisi from lagu, album, musisi where (lagu.kd_lagu = '$id_lagu') and (musisi.kd_musisi = (select kd_musisi from lagu_musisi where kd_lagu = '$id_lagu') and (album.kd_album = (select album from lagu where kd_lagu = '$id_lagu'))");*/
		}
	}
?>
</body>
</html>