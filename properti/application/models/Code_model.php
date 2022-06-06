<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Code_model extends CI_Model
{

  public function propertyCode()
  {
    $this->db->select('RIGHT(tb_property.id_property,2) as code', false);
    $this->db->order_by('id_property', "DESC");
    $this->db->limit(1);
    $query = $this->db->get('tb_property');
    if ($query->num_rows() <> 0) {
      // jika kode sudah ad
      $data = $query->row();
      $code = intval($data->code) + 1;
    } else {
      // jika kode belum ada
      $code = 1;
    }
    $codeMax = str_pad($code, 4, '0', STR_PAD_LEFT);
    $hasilKode = 'PTR' . $codeMax;
    return $hasilKode;
  }
}
