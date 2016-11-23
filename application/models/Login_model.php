<?php
	
class Login_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}
	public function loginin($table,$where)
	{
		$query = $this->db->get_where($table,$where);
		return $query;
	}	

}

?>