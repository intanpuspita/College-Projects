<?php
	class signup extends CI_Controller
	{
		function __construct()
		{
			parent :: __construct();
			$this->load->model('m_get_data');
		}
		
		function index()
		{	
			$this->load->view('v_home');
		}
		
		function daftar()
		{
			$this->load->database();
			$username = $this->input->post('username');
			$statusUsername = $this->validation_username($username);
			
			$password = $this->input->post('password');
			$cpassword = $this->input->post('cpassword');
			$statusPassword = $this->validation_password($password, $cpassword);
			
			$email = $this->input->post('email');
			$statusEmail = $this->validation_email($email);
			
			$fullname = $this->input->post('fullname');
			$statusFullName = $this->validation_fullname($fullname);
			
			$agreement = $this->input->post('check');
			$statusAgreement = $this->validation_agreement($agreement);
			
			if(($statusUsername == 1) && ($statusPassword == 1) && ($statusEmail == 1) && ($statusFullName == 1) && ($statusAgreement == 1))
			{
				$this->load->model('account');
				$this->account->create_account($username, $password, $email, $fullname);
				echo '<script language="javascript" type="text/javascript">
						alert("Sign Up Sukses !"); 
					 </script>'; 
				/*$data['logo']='TOPMUSIC';
				$data['username']='Account: '.$this->input->post('username');
				$newdata=array(
					'username'=>$username,
					'islogin'=>true
				);
				$this->session->set_userdata($newdata);
				$data['isLogin']=$this->session->userdata('islogin');
				$data['list_music']=$this->m_get_data->get_music();*/
				redirect('c_login/index');
			}
			else
			{
				echo '<script language="javascript" type="text/javascript">
						alert("Sign Up GAGAL !"); 
					 </script>';
				$data['logo']='TOPMUSIC';
				$data['isLogin'] = $this->session->userdata('islogin');
				$data['list_music']=$this->m_get_data->get_music();
				$this->load->view('v_home',$data);
				//redirect('c_login/index');
			}
		}
		
		function validation_username($username)
		{	
			//echo "Validation Username<br/>";
			if(isset($username) && !empty($username))
			{
				$this->db->select('username', 'email');
				$this->db->where('username', $username);
				$query_username = $this->db->get('akun');
				$hasil_username = $query_username->num_rows();
				
				if($hasil_username == 0)
				{	
					//echo "sukses username";
					return 1;
				}
				else
				{
					echo '<script language="javascript" type="text/javascript">
						document.getElementById("status_username").innerHtml = "Username Sudah Ada!"; 
					 </script>';
					//echo "Username Sudah Ada!";
					return 0;
				}
			}
			else
			{
				echo '<script language="javascript" type="text/javascript">
						document.getElementById("status_username").innerHtml = "Username Masih Kosong!"; 
					 </script>';
				//echo "Username Masih Kosong!";
				return 0;
			}
		}
		
		function validation_password($password, $cpassword)
		{
			//echo "Validation Password<br/>";
			if(strlen($password) >= 7)
			{
				if(strcmp($password,$cpassword) == 0)
				{
					//echo 'sukses password';
					return 1;
				}
				else
				{
					echo '<script language="javascript" type="text/javascript">
						document.getElementById("status_password").innerHtml = "Password dan Confirm Password tidak sama!"; 
					 	</script>';
					//echo "Password dan Confirm Password tidak sama!";
					return 0;
				}
			}
			else
			{
				echo '<script language="javascript" type="text/javascript">
						document.getElementById("status_password").innerHtml = "Password harus diisi minimal 7 huruf!"; 
					 	</script>';
				//echo "Password harus diisi minimal 7 huruf!";
				return 0;
			}
		}
		
		function validation_email($email)
		{
			//echo "Validation Email<br/>";
			$regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
			$this->db->select('username', 'email');
			$this->db->where('email', $email);
			$query_email = $this->db->get('akun');
			$hasil_email = $query_email->num_rows();
			if($hasil_email == 0)
			{
				if(isset($email) && !empty($email))
				{
					if(preg_match($regex, $email))
					{
						//echo 'sukses email';
						return 1;
					}
					else
					{
						echo '<script language="javascript" type="text/javascript">
							document.getElementById("status_email").innerHtml = "Email tidak valid!"; 
					 		</script>';
						//echo "Email tidak valid!";
						return 0;
					}
				}
				else
				{
					echo '<script language="javascript" type="text/javascript">
						document.getElementById("status_email").innerHtml = "Email Masih Kosong!"; 
					 	</script>';
					//echo "Email Masih Kosong!";
					return 0;
				}
			}
			else
			{
				echo '<script language="javascript" type="text/javascript">
						document.getElementById("status_email").innerHtml = "Email Sudah Ada!"; 
					 	</script>';
					//echo "Email Sudah Ada!";
					return 0;
			}
		}
		
		function validation_fullname($fullname)
		{
			//echo "Validation Fullname<br/>";
			if(isset($fullname) && !empty($fullname))
			{
				//echo 'sukses fullname';
				return 1;
			}
			else
			{
				echo '<script language="javascript" type="text/javascript">
						document.getElementById("status_fullname").innerHtml = "Full Name harus diisi!"; 
					 	</script>';
				//echo "Full Name harus diisi!";
				return 0;
			}
		}
		
		function validation_agreement($agreement)
		{
			if($agreement == "1")
			{
				return 1;
			}
			else
			{
				echo '<script language="javascript" type="text/javascript">
						document.getElementById("status_agreement").innerHtml = "Agreement harus belum fix!"; 
					 	</script>';
				return 0;
			}
		}
	}
?>