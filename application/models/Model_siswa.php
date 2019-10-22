<?php  

class Model_siswa extends CI_Model{

	public $table = 'siswa_tb';
	

	function getAllSiswa()
	{
		$data  = $this->db->get($this->table)->result();
		if (count($data) > 0) {
			return $data;
		}  else {
			return 0;
		}
 	}


 	function simpanData($data)
 	{
 		$data = $this->db->insert($this->table, $data);
 		return $data;
 	}

 	function getSiswaByID($id)
 	{
 		$id = array(
 			"id" => $id
 		);
 		$data = $this->db->get_where($this->table, $id)->row();
 		return $data;
 	}

 	function deleteSiswaByID($id) 
 	{
 		$id = array(
 			"id" => $id
 		);
 		$data = $this->db->delete($this->table, $id);
 		return $data;
 	}

 	function updateData($data, $id)
 	{	$this->db->where($id);
 		$data = $this->db->update($this->table, $data);
 		return $data;
 	}


}


?>