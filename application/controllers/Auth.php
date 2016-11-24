<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 

{
	function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
	}
	public function index()
	{
		$this->load->view('form_login');
	}
	public function login()
	{
		$user = $this->input->post('user');
		$pass = $this->input->post('pass');
		$where = array(
			'user' => $user,
			'password' => $pass);
		$data = $this->login_model->loginin("user",$where);
		if($data != 0)
		{
			$data_session = array(
				'nama' => $user,
				'status' => "login");
			$this->session->set_userdata($data_session);
			redirect('admin/beranda');
		}
		else
		{ 
			redirect('admin');

		}
			//redirect('admin/beranda'); 
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('admin');
	}

}

