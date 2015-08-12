<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Model Artist</title>
</head>

<body>
<?php
	class Model_Artist extends CI_Model
	{
		function construct()
		{
			parent :: _construct();
		}
		
		function get_artist($keyword)
		{
			$this->load->database();
			$this->db->select();
			$this->db->like('nama_musisi',$keyword);
			$query_artist = $this->db->get('musisi');
			return $query_artist->result();
		}
		
		function get_list_lagu_artist($kd_musisi)
		{
			$this->load->database();
			$list_lagu_artist = $this->db->query("select * from lagu where kd_lagu IN (select kd_lagu from lagu_musisi where kd_musisi = '$kd_musisi')");
			return $list_lagu_artist->result();
		}
	}
?>
</body>
</html>