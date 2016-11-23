<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prestasi_control extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('prestasi_model');
		$this->load->helper('url_helper');
	}
	public function index()
	{
		//$this->load->view('admin/template/header');
		$data['result'] = $this->prestasi_model->getPrestasi();
		$this->load->view('prestasi',$data);
		//$this->load->view('admin/template/footer');
	}

	
	
}

?>