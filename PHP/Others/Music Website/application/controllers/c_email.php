<?php

	class email extends CI_Controller
	{
		function index ()
		{
			$this->load->library('email');
			$this->send_email;
		}
		function send_email()
		{
			$config=Array(
				'protocol' => 'smtp',
				'smtp_host'	=> 'ssl://smtp.googlemail.com',
				'smtp_port' => 465,
				'smtp_user' => 'indani.ambarsari@gmail.com',
				'smtp_pass' => '15081993',
				'mailtype' => 'html',
				'charset' => 'iso-8859-1'
			);
			$this->load->library('email',$config);
			$this->email->set_newline("\r\n");
			$this->email->from("topmusic@gmail.com","indani ambarsari");
			$this->email->to("riska.junia@gmail.com");
			//$this->email->cc("");
			//$this->email->bcc("");
			$this->email->subject("Test Email");
			$this->email->message("halooo jujuuun");
			if($this->email->send())
			{
				echo "mail send successfully!";
			}
			else
			{
				$this->email->print_debugger();
			}
		}
	}

?>