<?php
	
class Prestasi_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function getPrestasi()
	{
		$query = $this->db->get('prestasi');
		return $query->result_array(); 
	}
	public function addPrestasi($data)
	{
		if ($this->db->insert('prestasi',$data))
		{
			return true;
		}return false;
		/*$this->load->helper('url');
		$data = array (
			'nama' =>$this->input->post('nama'),
			'tahun'=>$this->input->post('tahun'),
			'prestasi'=>$this->input->post('prestasi')
			
			);
			return $this->db->insert('prestasi',$data);    */
	}
	public function getPrestasiById($id = FALSE)
	{
		$query = $this->db->get_where('prestasi', array('id' => $id));
		return $query->row_array(); 
	}

	public function updatePrestasi($id,$config)
	{
		$this->load->helper('url');

		$data = array (
			'nama' =>$this->input->post('nama'),
			'tahun'=>$this->input->post('tahun'),
			'prestasi'=>$this->input->post('prestasi')
			
 				);
			
			$this->db->where('id', $id);// cara melakukan query where
			return $this->db->update('prestasi',$data); 
	}
	public function deletePrestasi($id)
	{
		$this->db->delete('prestasi',  array('id' =>$id));// cara melakukan query where
		//$row = $this->db->where('id',$id)->get('foto')->row();
	}
	

}

?>