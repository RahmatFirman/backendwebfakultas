 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');

 class Prestasi extends CI_Controller {

 	public function __construct()
 	{
 		parent::__construct();
 		$this->load->model('prestasi_model');
 		$this->load->helper('url_helper','form');
 	}
 	public function index()
 	{
 		$this->load->view('admin/template/header');
 		$data['prestasi'] = $this->prestasi_model->getPrestasi();
 		$this->load->view('admin/prestasi/prestasi_vw',$data);
 		$this->load->view('admin/template/footer');
 	}

 	public function add()
 	{
 		$this->load->helper('form');
 		$this->load->library('form_validation');

 		$this->form_validation->set_rules('nama','Nama','required');
 		$this->form_validation->set_rules('prestasi','Prestasi','required');
 		$this->form_validation->set_rules('tahun','Tahun','required');
 		$config['upload_path'] = "./images/";
 		$congig['allowed_types'] = 'jpg|jpeg|gif|png';  
 		$this->load->library('upload',$config);
 		if($this->upload->do_upload('berkas'))
 		{
 			$data = array('upload_')

 			if($this->form_validation->run() === FALSE)
 			{
 				$this->load->view('admin/template/header');
 				$this->load->view('admin/prestasi/addPrestasi');
 			}
 			else
 			{
 				$this->prestasi_model->addPrestasi();
 				redirect('admin/prestasi');
 			}

 		}

 	}
 	public function edit($id = FALSE)
 	{

 		$this->load->helper('form');
 		$this->load->library('form_validation');

 		$this->form_validation->set_rules('nama','Nama','required');
 		$this->form_validation->set_rules('prestasi','Prestasi','required');
 		$this->form_validation->set_rules('tahun','Tahun','required');

 		if($this->form_validation->run() === FALSE)
 		{
 			$data['prestasi_id'] = $this->prestasi_model->getPrestasiById($id);
 			$this->load->view('admin/template/header');
 			$this->load->view('admin/prestasi/editPrestasi', $data);
 		}
 		else
 		{
 			$this->prestasi_model->updatePrestasi($id);
 			redirect('admin/prestasi');
 		}
 	}
 	public function delete($id = FALSE)
 	{
 		$this->prestasi_model->deletePrestasi($id);
 		redirect('admin/prestasi');
 	}

 }
