<?php
	
class Prestasi_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}
	public function getPrestasi()
	{
		$query = $this->db->get('prestasi');
		return $query->result_array(); 
	}
	public function addPrestasi()
	{
		$this->load->helper('url');
		$data = array (
			'nama' =>$this->input->post('nama'),
			'tahun'=>$this->input->post('tahun'),
			'prestasi'=>$this->input->post('prestasi')
			);
			return $this->db->insert('prestasi',$data);    
	}
}

?>