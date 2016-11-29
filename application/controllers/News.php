<?php  
class News extends CI_Controller{  
	 function __construct(){  
        parent::__construct();  
        $this->load->model('berita_m'); //me-load kelas tulisan_m pada model  
    }  
    function index(){  
       
        $data['tulisan']=$this->berita_m->get_tulisan(); 
//memanggil fungsi pada kelas yang sudah dipanggil  
        $this->load->view('news/berita/show_v',$data);
    }  

   function tulisan_page($id){
   	$data['satutulisan']=$this->berita_m->get_1_tulisan($id);
   	$this->load->view('news/berita/single_v',$data);
   }

   
}  
?>  