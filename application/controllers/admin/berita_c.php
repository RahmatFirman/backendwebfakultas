<?php  
class berita_c extends CI_Controller{  
  function __construct(){  
    parent::__construct();  
        $this->load->model('berita_m'); //me-load kelas tulisan_m pada model  
    }  
    function index(){  
     $this->load->view('admin/template/header');
     $data['tulisan']=$this->berita_m->get_tulisan(); 
//memanggil fungsi pada kelas yangx sudah dipanggil  
     $this->load->view('admin/berita/view_v',$data);
 }  

 function tulisan_page($id){
    $data['satutulisan']=$this->berita_m->get_1_tulisan($id);
    $this->load->view('admin/berita/single_v',$data);
}

function edit_tulisan($id){  
    $data['success']=0;  
    if($_POST){  
        $data_post=array(  
            'judul' => $_POST['judul'],  
            'isi' => $_POST['isi'],  
            'aktif' => $_POST['aktif'],  
            );  
        $this->berita_m->update_tulisan($id,$data_post);  
        $data['success']=1;  
            //redirect(base_url()); //untuk kembali ke halaman home
    }  
    $data['satutulisan']=$this->berita_m->get_1_tulisan($id);  
    $this->load->view('admin/berita/edit_v',$data);  

}  
function hapus_tulisan($id){  
    $data = $this->berita_m->getBeritaById($id);
    $a = $data['foto'];  
    $this->berita_m->delete_tulisan($id);
   
    unlink('../backendwebfakultas/public/upload/berita/'.$a);
        redirect('admin/news'); //untuk kembali ke halaman home  
    }  

    public function buat_tulisan(){
    //$data['satutulisan']=$this->tulisan_m->get_1_tulisan($id);
        $this->load->view('admin/berita/post_v');
    }


    function tambah_tulisan()
    { 
        $this->load->helper('form','date');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('judul','judul','required');
        $this->form_validation->set_rules('isi','isi','required');
        $this->form_validation->set_rules('waktu','waktu','required');
        $this->form_validation->set_rules('aktif','aktif','required');
        $config['upload_path']  = '../backendwebfakultas/public/upload/berita';
        $config['allowed_types'] = 'jpg|jpeg|png|gif|PNG|JPEG|JPG|GIF';
        $config['max_size']  = 2048;
        $config['file_name']  = now('Asia/Makassar').'_'.'berita';
        $this->load->library('upload',$config);
        if(!$this->upload->do_upload('foto'))
        {
            $data['error_file'] = $this->upload->display_errors();

        }
        if($this->form_validation->run()===FALSE)
        {

            $this->load->view('admin/berita/post_v');
        }
        else
        {       
           $fields = array(
            'judul' => $this->input->post('judul'),
            'isi' => $this->input->post('isi'),
            'waktu' => $this->input->post('waktu'),
            'aktif' => $this->input->post('aktif'),
            'foto' =>$config['file_name'].$this->upload->data('file_ext')
            );
           $this->berita_m->create_tulisan($fields);
           redirect('admin/news');
       }

   }  
} 

?>  