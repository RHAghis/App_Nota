<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Home_model');
		//Do your magic here
	}

	public function index()
	{
		$data['aktif'] 	= 'home';
		$data['totalPerBulan'] = $this->Home_model->getTotalPerBulan();
		
		$this->load->view('viewIndex', $data);
		
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */