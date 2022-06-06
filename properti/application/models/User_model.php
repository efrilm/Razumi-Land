<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

  protected $user = 'tb_user';

  public function __construct()
  {
    parent::__construct();
  }

  public function checkEmail($email)
  {
    $this->db->where('email', $email);
    $query = $this->db->get($this->user);
    return $query;
  }

  public function getUser($userId)
  {
    $this->db->join('tb_role', 'tb_role.id_role =  tb_user.role_id', 'left');
    $this->db->where('id_user', $userId);
    $query = $this->db->get($this->user);
    return $query;
  }

  public function getUserAll()
  {
    $this->db->join('tb_role', 'tb_role.id_role = tb_user.role_id', 'left');
    $this->db->order_by('created', 'DESC');
    $query = $this->db->get($this->user);
    return $query;
  }

  public function addUser($data)
  {
    $query = $this->db->insert($this->user, $data);
    return $query;
  }
}
