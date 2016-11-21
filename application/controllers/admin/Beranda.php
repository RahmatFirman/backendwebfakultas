<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function index($halaman = 'beranda')
	{
		if (!file_exists(APPPATH."views/".$halaman.'.php'))
		{
			show_404();
		}
		$this->load->view('template/header');
		$this->load->view($halaman);
		$this->load->view('template/footer');
		
	}

	

}
