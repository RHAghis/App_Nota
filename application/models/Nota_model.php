<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nota_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->search = '';

	}
	
	public function getDataNota()
	{
		$this->db->join("customer", "nota.id_cust = customer.id_cust");
		$query = $this->db->get('nota');
		return $query->result();
	}

	public function delNota($no_nota)
	{
		$this->db->where('no_nota',$no_nota);
		$this->db->delete('nota');
	}

	public function getDataNotaWithNo($no_nota)
	{
		$this->db->join("customer", "nota.id_cust = customer.id_cust");
		$query = $this->db->get('nota');
		$this->db->where('no_nota', $no_nota);
		return $query->result();
	}

	public function getAllDataNotaWithNo($no_nota)
	{
		$query=$this->db->query("SELECT n.no_nota as no_nota, n.tgl as tgl, c.nama_cust as nama_cust, dn.no as no, dn.nama_barang as nama_barang, dn.qty as qty, dn.harga as harga, dn.jumlah as jumlah, n.titip as titip FROM nota n JOIN detail_nota dn ON n.no_nota = dn.no_nota JOIN customer c on c.id_cust = n.id_cust");
		return $query->result();
	}

	// DETAIL
	public function getDataDetail()
	{
		$this->db->select("*");
		$query = $this->db->get('detail_nota');
		return $query->result();
	}

	public function addDetail()
	{
		$data = array(
				'no'			=>  $this->input->post('no'),
                'no_nota'     	=>  $this->input->post('no_nota'),
				'nama_barang'  	=>  $this->input->post('nama_barang'),
				'qty'			=>  $this->input->post('qty'),
				'harga'    		=>  $this->input->post('harga'),
				'jumlah'    	=>  $this->input->post('jumlah')
			);
		$this->db->insert('detail_nota', $data);
	}

	public function generateNoDetail()
	{
		$query=$this->db->query("SELECT COUNT(no) as no FROM detail_nota");
		return $query->result();
	}

	public function delDetailAll()
	{
		$query=$this->db->query("DELETE FROM detail_nota");
		return $query->result();
	}

	public function delDetail($no)
	{
		$this->db->where('no',$no);
		$this->db->delete('detail_nota');
	}

}
