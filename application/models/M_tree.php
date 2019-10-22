<?php
/**
 *
 */
class M_tree extends CI_Model
{

  function getAllCity()
  {
    // code...
    $datakota = $this->db->get('country_states_city')->result_array();
    return $datakota;
  }
}
 ?>
