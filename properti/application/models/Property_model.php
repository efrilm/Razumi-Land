<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Model Property_model
 *
 * This Model for ...
 * 
 * @package		CodeIgniter
 * @category	Model
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Property_model extends CI_Model
{

  protected $property = 'tb_property';

  public function __construct()
  {
    parent::__construct();
  }

  // Admin
  public function addProperty($data)
  {
    $query = $this->db->insert($this->property, $data);
    return $query;
  }

  public function addImages($data)
  {
    $query = $this->db->insert_batch('tb_gallery', $data);
    return $query;
  }

  public function getImagesByProperty($id)
  {
    $this->db->where('property_id', $id);
    $query = $this->db->get('tb_gallery');
    return $query;
  }

  public function getPropertyById($id)
  {
    $this->db->join('tb_city', 'tb_city.id_city = tb_property.city_id', 'left');
    $this->db->where('id_property', $id);
    $query = $this->db->get('tb_property');
    return $query;
  }
  public function getPropertyBySeo($seo)
  {
    $this->db->join('tb_city', 'tb_city.id_city = tb_property.city_id', 'left');
    $this->db->where('property_seo', $seo);
    $query = $this->db->get('tb_property');
    return $query;
  }

  public function getPropertyAll()
  {
    $this->db->join('tb_city', 'tb_city.id_city = tb_property.city_id', 'left');
    $query = $this->db->get($this->property);
    return $query;
  }

  public function getImageById($id)
  {
    $this->db->where('id_gallery', $id);
    $query = $this->db->get('tb_gallery');
    return $query;
  }

  public function deleteProperty($id)
  {
    $this->db->where('id_property', $id);
    $query = $this->db->delete($this->property);
    return $query;
  }

  public function deleteImages($id)
  {
    $this->db->where('id_gallery', $id);
    $query = $this->db->delete('tb_gallery');
    return $query;
  }

  public function editProperty($id, $data)
  {
    $this->db->where('id_property', $id);
    $query = $this->db->update($this->property, $data);
    return $query;
  }

  public function deleteAllImages($id)
  {
    $this->db->where('property_id', $id);
    $query = $this->db->delete('tb_gallery');
    return $query;
  }

  // End Admin

  // Client
  public function getPropertyClient($limit = null)
  {
    $this->db->join('tb_city', 'tb_city.id_city = tb_property.city_id');
    if ($limit != null) {
      $this->db->limit($limit);
    }
    $this->db->where('is_active', '1');
    $this->db->order_by('created', 'DESC');
    $query = $this->db->get($this->property);
    return $query;
  }

  public function getPropertyByCityClient($id)
  {
    $this->db->where('is_active', '1');
    $this->db->where('city_id', $id);
    $query = $this->db->get($this->property);
    return $query;
  }


  // End Client
}

/* End of file Property_model.php */
/* Location: ./application/models/Property_model.php */