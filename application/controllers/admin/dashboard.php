<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller 

{
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('status') != "login")
		{
			redirect('admin');
		}
	}
	public function index()
	{
		$this->load->view('admin/beranda');
	}
	

}

