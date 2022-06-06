<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Model Banner_model
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

class Banner_model extends CI_Model
{

  public function addBanner($data)
  {
    $query = $this->db->insert('tb_banner', $data);
    return $query;
  }

  public function getBanner()
  {
    $query = $this->db->get('tb_banner');
    return $query;
  }

  public function getBannerById($id)
  {
    $this->db->where('id_banner', $id);
    $query = $this->db->get('tb_banner');
    return $query;
  }

  public function editBanner($id, $data)
  {
    $this->db->where('id_banner', $id);
    $query = $this->db->update('tb_banner', $data);
    return $query;
  }

  public function deleteBanner($id)
  {
    $this->db->where('id_banner', $id);
    $query = $this->db->delete('tb_banner');
    return $query;
  }
}

/* End of file Banner_model.php */
/* Location: ./application/models/Banner_model.php */