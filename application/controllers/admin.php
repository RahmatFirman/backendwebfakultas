<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		echo 'index';
	}
	public function beranda($halaman = 'beranda')
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
