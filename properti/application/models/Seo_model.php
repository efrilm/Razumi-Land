<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Seo_model extends CI_Model
{

  protected $seo = 'tb_seo';

  public function addSeo($data)
  {
    $query = $this->db->insert($this->seo, $data);
    return $query;
  }

  public function getSeoByProperty($id)
  {
    $this->db->where('property_id', $id);
    $query = $this->db->get($this->seo);
    return $query;
  }

  public function getSeoById($id)
  {
    $this->db->where('id_seo', $id);
    $query = $this->db->get($this->seo);
    return $query;
  }

  public function editSeo($id, $data)
  {
    $this->db->where('id_seo', $id);
    $query = $this->db->update($this->seo, $data);
    return $query;
  }

  public function deleteSeo($id)
  {
    $this->db->where('id_seo', $id);
    $query = $this->db->delete($this->seo);
    return $query;
  }
}
