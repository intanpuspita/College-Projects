<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Insert Account</title>
</head>

<body>
	<?php
		class Account extends CI_Model
		{
			function create_account($username, $password, $email, $fullname)	
			{	
				$data = array('username' => $username, 'password' => $password, 'email' => $email);
				$this->db->insert('akun',$data);
				$this->load->model('user');
				$this->user->create_user($username,$fullname);
			}
		}
	?>
</body>
</html>