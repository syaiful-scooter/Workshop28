<?php /**
 * MODEL GENERIC UNTUK TABEL APAPUN, KEPERLUAN UNTUK DIGUNAKAN OLEH FAKER, DIMANA NAMA TABEL AKAN DI ISI OLEH USER, JUMLAH DATA DI INPUT USER, DI KERJAKAN DALAM PERULANGAN.
 */
class M_generic_faker extends CI_Model
{

  function simpanData($table, $data)
  {
    // code...
    $simpan_data = $this->db->insert($table, $data);
    return $simpan_data;

  }
}
 ?>
