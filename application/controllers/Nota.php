<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nota extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('Nota_model');
	}

	public function index()
	{
		$data['nota']=$this->Nota_model->getNoNota();
		$data["cust_list"] = $this->Nota_model->getDataCustCB();
		$data['aktif'] 	= 'nota';
		$data["nota_list"] = $this->Nota_model->getDataNota();
		$this->load->view('viewDataNota', $data);
	}

	public function addNota()
	{
		$this->form_validation->set_rules('titip', 'Titip', 'trim|required');
        if ($this->form_validation->run()==FALSE)
        {
            $this->load->view('viewDataNota');
        }
        else
        {           
            $this->Nota_model->addDataNota();
            $this->session->set_flashdata('flash','Insert Data Berhasil');
            redirect('Nota');
        }
		// $this->load->view('viewAddNota');
	}

	public function editNota($no_nota)
	{
		if(isset($_POST['submit'])){
            
            $update =  $this->Nota_model->editNota($no_nota);
            $this->session->set_flashdata('flash','Update Data Berhasil');
            redirect('Nota');
        }else{
        	$data['aktif'] 	= 'nota';
			$data['nota'] = $this->Nota_model->getDataNotaWithNo($no_nota);
			$this->load->view('viewUpdateNota', $data);
        }
	}

	public function delNota($no_nota)
	{
		$data["nota_list"] = $this->Nota_model->delNota($no_nota);
        $this->session->set_flashdata('flash','Hapus Nota Berhasil');
        redirect('Nota', 'refresh');
	}

	// DETAIL //

	public function viewDetail($no_nota)
	{
		$data['nota'] = $this->Nota_model->getDataNotaWithNo($no_nota);
		$data['aktif'] 	= 'nota';
		$data["detail_list"] = $this->Nota_model->getDataDetail();
		$this->load->view('viewDetailNota', $data);
	}

	public function addDetail()
	{
		if(isset($_POST['submit'])){
            
            $no_nota = $this->input->post('no_nota');
            $insert =  $this->Nota_model->addDetail();
            $this->session->set_flashdata('flash','Insert Detail Nota is Success');
            redirect('Nota/viewDetail/'.$no_nota,'refresh');
            // $this->load->view('viewDetail',$data);
        }else{
        	$data['aktif'] 	= 'nota';
        	$this->load->view('viewDetail',$data);
        }	
	}
	
	public function delDetailNota($no, $no_nota)
	{
		$data["detail_list"] = $this->Nota_model->delDetail($no, $no_nota);
        	$this->session->set_flashdata('flash','Hapus Data Berhasil');
        	redirect('Nota/viewDetail/'.$no_nota,'refresh');
	}

	public function printNota($no_nota)
	{
		$this->load->library('mypdf');
		$data['nota_list'] =  $this->Nota_model->getAllDataNotaWithNo($no_nota);
		$this->mypdf->generate('viewPrintNota', $data, 'Nota-Top-Jawa', 'A5', 'portrait');

	}

}

/* End of file Nota.php */
/* Location: ./application/controllers/Nota.php */