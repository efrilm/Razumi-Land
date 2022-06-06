<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Type_model extends CI_Model
{

  protected $type = 'tb_type';

  public function addType($data)
  {
    $query = $this->db->insert($this->type, $data);
    return $query;
  }

  public function getTypeByProperty($id)
  {
    $this->db->where('property_id', $id);
    $query = $this->db->get($this->type);
    return $query;
  }

  public function getTypeById($id)
  {
    $this->db->where('id_type', $id);
    $query = $this->db->get($this->type);
    return $query;
  }

  public function editType($id, $data)
  {
    $this->db->where('id_type', $id);
    $query = $this->db->update($this->type, $data);
    return $query;
  }

  public function deleteType($id)
  {
    $this->db->where('id_type', $id);
    $query = $this->db->delete($this->type);
    return $query;
  }

  public function deleteAllType($id)
  {
    $this->db->where('property_id', $id);
    $query = $this->db->delete($this->type);
    return $query;
  }
}
