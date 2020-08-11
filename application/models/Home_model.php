<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function getTotalPerBulan()
	{
		$query=$this->db->query("SELECT MONTHNAME(tgl) as bulan, SUM(n.total) as total FROM nota n GROUP BY bulan");
		return $query->result();
	}

}

/* End of file Home_model.php */
/* Location: ./application/models/Home_model.php */