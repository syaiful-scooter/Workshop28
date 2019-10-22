<?php
/**
 *
 */
class M_mahasiswa extends CI_Model
{

  public function list_mhs()
  {
    // code...
      $ambil_data=$this->db->get('mahasiswa_tbl')->result_array();
      return $ambil_data;

  }
  public function getMhsById($tabel, $identitas)
  {
    // code...
    $ambil_data=$this->db->get_where($tabel, $identitas)->row();
    return $ambil_data;
  }
  public function simpan($tbl, $data)
  {
    // code...
    // $data = array(
    //   'nama' => "Jaja",
    //   'alamat'=> "Cibarusah",
    //   'usia'=>"30",
    //   'jurusan'=>"TI"
    //   );
    $simpan_data=$this->db->insert($tbl, $data);
    return $simpan_data;

  }
  public function simpan_update($tabel, $data, $parameterIdentitas)
  {
    // code...
    $this->db->where($parameterIdentitas);
    $simpan_data=$this->db->update($tabel, $data);
    return $simpan_data;

  }
  public function delete($tabel, $identitat)
  {
    // code...
    $del = $this ->db -> delete($tabel, $identitat);
    return $del;
  }
}

 ?>
