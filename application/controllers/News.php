<?php  
class News extends CI_Controller{  
  function __construct(){  
    parent::__construct();  
        $this->load->model('berita_m'); //me-load kelas tulisan_m pada model 
        $this->load->library('pagination'); 
      }  
      function index(){  
        $this->load->database();
        $jumlah_data = $this->berita_m->jumlahdata();
        
        $config['base_url'] = base_url().'news/index';
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] = 10;
        $from = $this->uri->segment(3);
        $this->pagination->initialize($config);
        $data['tulisan'] = $this->berita_m->data($config['per_page'],$from);
        //$config['total_rows'] = $jumlah_data;
        //$data['tulisan']=$this->berita_m->get_tulisan(); 
//memanggil fungsi pada kelas yang sudah dipanggil  
        $this->load->view('news/berita/show_v',$data);
      }  

      function view($id){
        $data['satutulisan']=$this->berita_m->get_1_tulisan($id);
        $this->load->view('news/berita/single_v',$data);
      }


    }  
    ?>  