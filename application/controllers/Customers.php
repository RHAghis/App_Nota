<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customers extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Customers_model');
		//Do your magic here
	}

	public function index()
	{
		$data['aktif'] 	= 'customers';
		$data["cust_list"] = $this->Customers_model->getDataCust();
		$this->load->view('viewDataCustomers', $data);
	}

	public function addCustomers()
	{
		if(isset($_POST['submit'])){
            
            $insert =  $this->Customers_model->addCust();
            $this->session->set_flashdata('flash','Insert Data Berhasil');
            redirect('Customers');
        }else{
        	$data['aktif'] 	= 'customers';
        	$this->load->view('viewAddCustomers',$data);
        }	
	}

	public function editCustomers($id_cust)
	{
		if(isset($_POST['submit'])){
            
            $update =  $this->Customers_model->editCust($id_cust);
            $this->session->set_flashdata('flash','Update Data Berhasil');
            redirect('Customers');
        }else{
        	$data['aktif'] 	= 'customers';
			$data['customer'] = $this->Customers_model->getDataCustWithId($id_cust);
			$this->load->view('viewUpdateCustomers', $data);
        }
	}

	public function delCustomers($id_cust)
	{
		$data["cust_list"] = $this->Customers_model->delCust($id_cust);
        $this->session->set_flashdata('flash','Hapus Data Berhasil');
        redirect('Customers', 'refresh');
	}

}

/* End of file Customers.php */
/* Location: ./application/controllers/Customers.php */