<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
	class User extends CI_Model
	{	
		function create_user($username, $fullname)
		{
			$this->load->database();
			$data = array('username' => $username, 'fullname' => $fullname);
			$this->db->insert('profil',$data);
		}
	}
?>
</body>
</html>