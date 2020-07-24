<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nota_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->search = '';

	}

	public function getNoNota()
	{
		$query = $this->db->query("SELECT max(RIGHT(no_nota,4)) as kd_max FROM nota WHERE DATE(tgl)=CURDATE()");
		$kd = "";
        if($query->num_rows()>0){
            foreach($query->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%04s", $tmp);
            }
        }else{
            $kd = "0001";
        }
        date_default_timezone_set('Asia/Jakarta');
        return date('dmy').$kd;
		
	}
	
	public function getDataNota()
	{
		$this->db->join("customer", "nota.id_cust = customer.id_cust");
		$query = $this->db->get('nota');
		return $query->result();
	}

	public function getDataCustCB()
	{
		$query = $this->db->get('customer');
		return $query->result_array();
	}

	public function delNota($no_nota)
	{
		$this->db->where('no_nota',$no_nota);
		$this->db->delete('nota');
	}

	public function getDataNotaWithNo($no_nota)
	{
		
		$this->db->join("customer", "nota.id_cust = customer.id_cust");
		$this->db->where('no_nota', $no_nota);
		$query = $this->db->get('nota');
		return $query->result();
	}

	public function addDataNota()
	{
		$oritgl = $this->input->post('tgl');
		$tgl = date("Y-m-d", strtotime($oritgl));
		$data = array(
                'no_nota'   =>  $this->input->post('no_nota'),
				'tgl'    	=>  $tgl,
				'id_cust'   =>  $this->input->post('id_cust'),
				'total'    	=>  '0',
				'titip'    =>  $this->input->post('titip')
			);
		$this->db->insert('nota', $data);
		var_dump($data);
	}

	public function editNota($no_nota)
	{
		$data = array(
				'id_cust'   =>  $this->input->post('id_cust'),
				'titip'    =>  $this->input->post('titip')
			);
		$this->db->where('no_nota', $no_nota);
		$this->db->update('nota', $data);
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
                'no_nota'     	=>  $this->input->post('no_nota'),
				'nama_barang'  	=>  $this->input->post('nama_barang'),
				'qty'			=>  $this->input->post('qty'),
				'harga'    		=>  $this->input->post('harga'),
				'jumlah'    	=>  $this->input->post('jumlah')
			);
		$this->db->insert('detail_nota', $data);
	}
	
	public function delDetailAll()
	{
		$query=$this->db->query("DELETE FROM detail_nota");
		return $query->result();
	}

	public function delDetail($no, $no_nota)
	{
		$this->db->where('no',$no);
		$this->db->where('no_nota',$no_nota);
		$this->db->delete('detail_nota');
	}


}
