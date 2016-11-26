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
 		
 			$this->load->helper('form','date');
 			$this->load->library('form_validation');
 			$this->form_validation->set_rules('nama','Nama','required');
 			$this->form_validation->set_rules('prestasi','Prestasi','required');
 			$this->form_validation->set_rules('tahun','Tahun','required');
 			$config['upload_path']  = '../backendwebfakultas/public/upload/prestasi';
 			$config['allowed_types'] = 'jpg|jpeg|png|gif|PNG|JPEG|JPG|GIF';
 			$config['max_size']  = 2048;
 			$config['file_name']  = now('Asia/Makassar').'_'.'prestasi';
 			$this->load->library('upload',$config);
 			if(!$this->upload->do_upload('foto'))
 			{
 				$data['error_file'] = $this->upload->display_errors();

 			}
 			if($this->form_validation->run()===FALSE)
 			{

 				$this->load->view('admin/prestasi/addPrestasi');
 			}
 			else
 			{
 				$fields = array(
 				'prestasi' => $this->input->post('prestasi'),
 				'tahun' => $this->input->post('tahun'),
 				'nama' => $this->input->post('nama'),
 				'foto' =>$config['file_name'].$this->upload->data('file_ext')
 				);
 				$this->prestasi_model->addPrestasi($fields);
 				redirect('admin/prestasi');
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
 			$this->session->set_flashdata('Sukses','Prestasi berhasil di edit');
 			redirect('admin/prestasi');
 		}
 	}
 	public function delete($id)
 	{
 		$data = $this->prestasi_model->getPrestasiById($id);
 		$a = $data['foto'];
 		unlink('../backendwebfakultas/public/upload/prestasi/'.$a);
 		$file = $this->prestasi_model->deletePrestasi($id);
 		redirect('admin/prestasi');
 	}


 }
