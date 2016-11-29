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
        $this->berita_m->delete_tulisan($id);  
        redirect('admin/news'); //untuk kembali ke halaman home  
    }  

    public function buat_tulisan(){
    //$data['satutulisan']=$this->tulisan_m->get_1_tulisan($id);
    $this->load->view('admin/berita/post_v');
   }


    function tambah_tulisan(){ 
        $data['success']=0;  
        if($_POST){  
            $data_post=array(  
                'judul' => $_POST['judul'],  
                'isi' => $_POST['isi'],  
                'aktif' => $_POST['aktif'],
                'waktu' => $_POST['waktu'],  
            );  

            //var_dump($data_post);
            $this->berita_m->create_tulisan($data_post); 
            $data['tulisan']=$this->berita_m->get_tulisan();  
            $data['success']=1;  
        }  
        //$data['satutulisan']=$this->tulisan_m->get_1_tulisan($id);  
        $this->load->view('admin/berita/view_v',$data);
        redirect('admin/news') ;
        
    }  
}  
?>  