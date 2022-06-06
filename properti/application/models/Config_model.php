<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Config_model extends CI_Model
{
  public function getConfig()
  {
    $this->db->where('id_config', '1');
    $query = $this->db->get('tb_web_config');
    return $query->row();
  }

  public function editConfig($data)
  {
    $this->db->where('id_config', '1');
    $query = $this->db->update('tb_web_config', $data);
    return $query;
  }
}
