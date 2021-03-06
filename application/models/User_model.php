<?php
	
class User_model extends CI_Model
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
	public function getPrestasiById($id = FALSE)
	{
		$query = $this->db->get_where('prestasi', array('id' => $id));
		return $query->row_array(); 
	}
	public function updatePrestasi($id)
	{
		$this->load->helper('url');
		$data = array (
			'nama' =>$this->input->post('nama'),
			'tahun'=>$this->input->post('tahun'),
			'prestasi'=>$this->input->post('prestasi')
			);
			$this->db->where('id', $id);
			return $this->db->update('prestasi',$data);    
	}
	public function deletePrestasi($id)
	{
		return $this->db->delete('prestasi',  array('id' =>$id));
	}

}

?>