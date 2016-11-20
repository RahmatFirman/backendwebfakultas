<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prestasi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('prestasi_model');
		$this->load->helper('url_helper');
	}
	public function index()
	{
		$this->load->view('template/header');
		$data['prestasi'] = $this->prestasi_model->getPrestasi();
		$this->load->view('prestasi/prestasi_vw',$data);
		$this->load->view('template/footer');
	}
	public function add()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('prestasi','Prestasi','required');
		$this->form_validation->set_rules('tahun','Tahun','required');
		if($this->form_validation->run() === FALSE)
		{
		$this->load->view('template/header');
		$this->load->view('prestasi/addPrestasi');
		}
		else
		{
			$this->prestasi_model->addPrestasi();
			redirect('prestasi');
		}

	}
	public function editPrestasi($id)
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('prestasi','Prestasi','required');
		$this->form_validation->set_rules('tahun','Tahun','required');
		if($this->form_validation->run() === FALSE)
		{
		$this->load->view('template/header');
		$this->load->view('prestasi/editPrestasi');
		}
		else
		{
			$this->prestasi_model->addPrestasi();
			redirect('prestasi');
		}
	}
	
}
