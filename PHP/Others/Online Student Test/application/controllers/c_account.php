<?php
class c_account extends CI_Controller 
{ 
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url', 'html'));
		$this->load->model('m_account', '', TRUE);
		$this->load->library('session');
		$this->output->nocache();
	}     
	
	function index(){
		if(($this->session->userdata('logged_in') == TRUE)){
			if($this->session->userdata('status') == "institution"){
				redirect('c_institution');
			}
			else{
				redirect('c_student');
			}
		}
		else{
			$data['error'] = "Your are the most person that we waiting for...";
			$data['message'] = "Welcome , Our Best High School Student...!!!!";
			$data['error_username'] = "";
			$data['error_password'] = "";
			$this->load->view('v_account', $data);
		}
	}
	
	function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$result=$this->m_account->cek_login($username, $password);
		if($result == TRUE){
			$newdata = array(
				'username' => $username,
				'status' => $result,
				'logged_in' => TRUE
			);
			$this->session->set_userdata($newdata);
			if($result == "student"){
				redirect('c_student');
			}
			else{
				redirect('c_institution');
			}
		}
		else{
			$data['message'] = "Login Unsuccessfull, Please try Again!";
			$data['error'] = "Your Username or Password doesn't match at all...";
			$this->load->view('v_account', $data);
		}
	}
	
	function logout(){
		$newdata = array(
			'username'  =>'',
			'status'  =>'',
			'logged_in' => FALSE
			); 
		$this->session->unset_userdata($newdata);
		$this->session->sess_destroy();
		redirect('c_account');
	}
	
	function register(){	
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('username','Username', 'trim|required|xss_clean|min_length[6]|max_length[25]|alpha_dash');
		$this->form_validation->set_rules('password','Password', 'trim|required|xss_clean|min_length[8]|max_length[16]|alpha_num');
		//$this->form_validation->set_rules('std_confpassword','Confirm Password', 'trim|required|xss_clean|min_length[6]|max_length[20]|alpha|matches[std_confpassword]|md5');
		
		if($this->form_validation->run() == FALSE){
			
			$data['error_username'] = "Username must contain 6 Character or More";
			$data['error_password'] = "Password must contain 8 Character or More";
			
			$data['error'] = " Please check your form, make sure that minimum length for Username is 6 Character and Password is 8 Character";
			$data['message'] = "Register Failed";
			$this->load->view('v_account', $data);
		}
		else
		{
			$result=$this->m_account->register();
			if($result == TRUE){
				$data['error_username'] = "";
				$data['error_password'] = "";
				$data['error'] = "";
				$data['message'] = "Register Successfull, Please Log In Now !!";
				$this->load->view('v_account', $data);
			}
			else{
				$data['error_username'] = "Username has been Used by Someone..";
				$data['error_password'] = "";
				$data['error'] = "Your Username already Used by someone...";
				$data['message'] = "Register Unsuccessfull";
				$this->load->view('v_account', $data);
			}
		}
	}
}
?>