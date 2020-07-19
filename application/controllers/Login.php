<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$this->load->view('viewLogin');
	}

	public function Authentication()
	{
		$data['aktif'] 	= 'home';
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		if ($username == 'admin' || $password == 'admin') {
			
			$this->load->view('viewIndex', $data);
		}else{
			echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
		}
		
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */