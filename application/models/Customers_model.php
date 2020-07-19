<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customers_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->search = '';

	}
	
	public function getDataCust()
	{
		$this->db->select("*");
		$query = $this->db->get('customer');
		return $query->result();
	}

	public function getDataCustWithId($id_cust)
	{
		$this->db->select("*");
		$this->db->where('id_cust', $id_cust);
		$query = $this->db->get('customer');
		return $query->result();
	}

	public function addCust()
	{
		$data = array(
                'id_cust'     	=>  $this->input->post('id_cust'),
				'nama_cust'    	=>  $this->input->post('nama_cust'),
				'alamat_cust'   =>  $this->input->post('alamat_cust'),
				'telp_cust'    	=>  $this->input->post('telp_cust'),
				'email_cust'    =>  $this->input->post('email_cust'),
				'keterangan'    =>  $this->input->post('keterangan')
			);
		$this->db->insert('customer', $data);
	}

	public function editCust($id_cust)
	{
		$data = array(
				'nama_cust'    	=>  $this->input->post('nama_cust'),
				'alamat_cust'   =>  $this->input->post('alamat_cust'),
				'telp_cust'    	=>  $this->input->post('telp_cust'),
				'email_cust'    =>  $this->input->post('email_cust'),
				'keterangan'    =>  $this->input->post('keterangan')
			);
		$this->db->where('id_cust', $id_cust);
		$this->db->update('customer', $data);
	}

	public function delCust($id_cust)
	{
		$this->db->where('id_cust',$id_cust);
		$this->db->delete('customer');
	}
}
