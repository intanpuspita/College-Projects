<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Model Album</title>
</head>

<body>
<?php
	class Model_Album extends CI_Model
	{
		function construct()
		{
			parent :: __construct();
		}
		
		function get_album($keyword)
		{
			$this->load->database();
			$this->db->select();
			$this->db->like('nama_album',$keyword);
			$query_album = $this->db->get('album');
			return $query_album->result();
		}  
	}
?>
</body>
</html>