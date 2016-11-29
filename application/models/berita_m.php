<?php  
class berita_m extends CI_Model{  
    function get_tulisan(){  
        //$s=”SELECT * FROM tulisan WHERE aktif=’1′ ORDER BY waktu DESC LIMIT 0,10″;  
        $this->db->select()->from('tulisan')->where('aktif',1)->order_by('waktu','desc')->limit(20,0);  
        //$q=mysql_query($s);  
        $query=$this->db->get();  
        return $query->result_array();  
    }  
    function get_1_tulisan($idtulisan){
    	 $this->db->select()->from('tulisan')->where(array('aktif'=>1,'id_tulisan'=>$idtulisan))->order_by('waktu','desc');  
        $query=$this->db->get();  
        return $query->first_row('array');  
    }
    function update_tulisan($idtulisan,$data){  
        $this->db->where('id_tulisan',$idtulisan);  
        $this->db->update('tulisan',$data);  
    }  
    function delete_tulisan($idtulisan){  
        $this->db->where('id_tulisan',$idtulisan);  
        $this->db->delete('tulisan');  
    }  
    function create_tulisan($data){ 
        $this->db->insert('tulisan',$data);  
    }  
}  
?>  