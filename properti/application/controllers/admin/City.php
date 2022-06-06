<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller City
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class City extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $config = $this->config_model->getConfig();
    $this->data['favicon'] = $config->favicon;
    $this->data['company_name'] = $config->company_name;
  }

  public function index($action = '', $id = '')
  {
    $this->form_validation->set_rules('city_name', plang('City Name'), 'required', [
      'required' => '%s ' . plang('Required') . '*',
    ]);

    if ($this->form_validation->run() == FALSE) {
      $this->data['title'] = plang('City');
      $this->data['action'] =  $action;
      if ($action = 'edit' && $id != '') {
        $this->data['c'] = $this->city->getCityById($id)->row();
      }
      $this->data['city'] = $this->city->getCity()->result();
      $this->template->load('admin/template', 'admin/city/city_data', $this->data);
    } else {
      if ($action == 'add') {
        $data = [
          'city_name' => htmlspecialchars($this->input->post('city_name')),
        ];
        $add = $this->city->addCity($data);
        if ($add) {
          $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
          ' . plang('Added Successfully') . '!</div>');
        } else {
          $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
          ' . plang('Added Failed') . '!</div>');
        }
        redirect('a/cities');
      } else if ($action == 'edit') {
        $data = [
          'city_name' => htmlspecialchars($this->input->post('city_name')),
        ];
        $edit = $this->city->editCity($id, $data);

        if ($edit) {
          $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
          ' . plang('Edited Successfully') . '!</div>');
        } else {
          $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
          ' . plang('Edited Failed') . '!</div>');
        }
        redirect('a/cities');
      }
    }
  }

  public function delete($id)
  {
    $del = $this->city->deleteCity($id);
    if ($del) {
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
      ' . plang('Deleted Successfully') . '!</div>');
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
      ' . plang('Deleted Failed') . '!</div>');
    }
    redirect('a/cities');
  }
}


/* End of file City.php */
/* Location: ./application/controllers/City.php */