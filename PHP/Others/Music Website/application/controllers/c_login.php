<?php

	class c_login extends CI_Controller
	{
		function __construct()
		{
			//membuat construktor;
			parent::__construct();
			//meload helper form dan url
			$this->load->helper(array('form','url','html'));
			//meload model login
			$this->load->model('m_login');
			$this->load->model('m_get_data');
		}
		
		function index()
		{
			//membuat string gagal dimana nantinya digunakan untuk validasi
			$data['gagal']='';
			//meload view login
			#$data['isLogin'] = (isset($this->session->userdata['islogin']) ? $this->session->user_data['islogin'] : false);
			$data['isLogin'] = $this->session->userdata('islogin');
			$data['list_music']=$this->m_get_data->get_music();
			#echo "<pre>";print_r($this->session);echo"</pre>";
			$this->load->view('v_home',$data);
		}
		
		function cekuser()
		{
			//memanggil model login
			$data['query'] = $this->m_login->cekdb();
			//mengecek isi dari model login
			if($data['query']==null){
				return false;
			}else{
				return $data['query'];
			}
		}
		
		function proses_login()
		{
			//mengecek isi dari data fungsi cekuser diatas
			//jika data ada maka login berhasil
			if($this->cekuser()==true)
			{
				//membuat variabel account yang nanti ditampilkan pd view
				$data['username']='Account: '.$this->input->post('username');
				//menyimpan data pada array
				$newdata=array
				(
					'username'=>$data['username'],
					'islogin'=>true
				);
				//membuat session
				$this->session->set_userdata($newdata);
				//menampilkan view home
				$data['isLogin'] = $this->session->userdata('islogin');
				$data['list_music']=$this->m_get_data->get_music();
				$this->load->view('v_home',$data);
			}else{
				//membuat validasi gagal yang ditampilkan pada form login
				$data['gagal']='<div id="notification">Maaf, Proses Login Gagal!<br>1. Username atau Password anda salah.<br>2. Coba Periksa kembali keadaan <span class="red">Caps lock</span>.</div>';
				//memanggil view login
				$data['isLogin'] = $this->session->userdata('islogin');
				$data['list_music']=$this->m_get_data->get_music();
				$this->load->view('v_home',$data);
			}
		}
		
		function logout()
		{
			//menghapus session
			$this->session->sess_destroy();
			//kembali ke form login
			redirect('c_login/index');
		}

		function search()
		{
			$keyword = $this->input->post('keyword');
			$searchby = $this->input->post('searchby');
			if(isset($keyword) && !empty($keyword))
			{
				$data['isLogin'] = $this->session->userdata('islogin');
				//$data['list_music']=$this->m_get_data->get_music();
				if($searchby == "Artist")
				{
					$this->load->model('model_artist');
					$data['list_artist'] = $this->model_artist->get_artist($keyword);
					$data['search'] = "list_artist";
					$this->load->view('v_home',$data);
				}
				else if($searchby == "Title")
				{
					$this->load->model('model_lagu');
					$data['list_lagu'] = $this->model_lagu->get_lagu($keyword);
					$data['search'] = "list_lagu";
					$this->load->view('v_home',$data);
				}
				else if($searchby == "Album")
				{
					$this->load->model('model_album');
					$data['list_album'] = $this->model_album->get_album($keyword);
					$data['search'] = "list_album";
					$this->load->view('v_home',$data);
				}
				else if($searchby == "Genre")
				{
					$this->load->model('model_genre');
					$data['list_genre'] = $this->model_genre->get_genre($keyword);
					$data['search'] = "list_genre";
					$this->load->view('v_home',$data);
				}
				else
				{
					$this->load->model('model_lirik');
					$data['list_lirik'] = $this->model_lirik->get_lirik($keyword);
					$data['search'] = "list_lirik";
					$this->load->view('v_home',$data);
				}
			}
			else
			{
					 $this->load->view('v_home');
			}
		}
		
		function search_alphabet()
		{
			$keyword = $this->input->get('keyword');
			$data['isLogin'] = $this->session->userdata('islogin');
			$this->load->model('model_artist');
			$data['list_artist'] = $this->model_artist->get_artist($keyword);
			$data['search'] = "list_artist";
			$this->load->view('v_home',$data);
		}
		
		function list_lagu_musisi()
		{
			$kd_musisi = $this->input->get('kd_musisi');
			$this->load->model('model_artist');
			$data['list_lagu_artist'] = $this->model_artist->get_list_lagu_artist($kd_musisi);
			$data['search'] = "list_lagu_artist";
			$this->load->view('v_home',$data);
		}
		
		function insert_comment()
		{
			$comment = $this->input->post('comment');	
		}
	}

?>