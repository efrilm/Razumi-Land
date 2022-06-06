<?php
defined('BASEPATH') or exit('No direct script access allowed');


class City_model extends CI_Model
{
  protected $city = 'tb_city';

  public function addCity($data)
  {
    $query = $this->db->insert($this->city, $data);
    return $query;
  }

  public function getCity()
  {
    $query = $this->db->get($this->city);
    return $query;
  }

  public function getCityById($id)
  {
    $this->db->where('id_city', $id);
    $query = $this->db->get($this->city);
    return $query;
  }

  public function editCity($id, $data)
  {
    $this->db->where('id_city', $id);
    $query =  $this->db->update($this->city, $data);
    return $query;
  }

  public function deleteCity($id)
  {
    $this->db->where('id_city', $id);
    $query = $this->db->delete($this->city);
    return $query;
  }
}
