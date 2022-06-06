<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Config
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

class Config extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $config = $this->config_model->getConfig();
    $this->data['favicon'] = $config->favicon;
    $this->data['company_name'] = $config->company_name;
  }

  public function index()
  {
    $this->data['title'] = plang('Web Configuration');
    $this->data['config'] = $this->config_model->getConfig();
    $this->template->load('admin/template', 'admin/config/web_config', $this->data);
  }

  public function processUpdateWeb()
  {
    $data = [
      'title' => htmlspecialchars($this->input->post('title')),
      'email' => htmlspecialchars($this->input->post('email')),
      'keywords' => htmlspecialchars($this->input->post('keywords')),
      'description' => htmlspecialchars($this->input->post('description')),
      'address' => htmlspecialchars($this->input->post('address')),
      'company_name' => htmlspecialchars($this->input->post('company_name')),
      'no_phone' => htmlspecialchars($this->input->post('no_phone')),
      'no_whatsapp' => htmlspecialchars($this->input->post('no_whatsapp')),
      'updated' => date('Y-m-d H:i:s'),
    ];

    $edit = $this->config_model->editConfig($data);
    if ($edit) {
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
      ' . plang('Updated Successfully') . '</div>');
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
      ' . plang('Updated Failed') . '</div>');
    }

    redirect('a/web-configuration');
  }

  public function processUpdateSocialMedia()
  {
    $data = [
      'instagram' => htmlspecialchars($this->input->post('instagram')),
      'facebook' => htmlspecialchars($this->input->post('facebook')),
    ];
    $edit = $this->config_model->editConfig($data);
    if ($edit) {
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
      ' . plang('Updated Successfully') . '</div>');
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
      ' . plang('Updated Failed') . '</div>');
    }

    redirect('a/web-configuration');
  }

  public function processLogo()
  {
    $config['upload_path'] = './assets/images/logo/';
    $config['allowed_types'] = 'jpg|png|jpeg';
    $config['max_size'] = 700;
    $this->upload->initialize($config);
    $photo = 'logo';
    if ($this->upload->do_upload($photo)) {
      // DELETE IMAGE
      $config = $this->config_model->getConfig();
      if ($config->logo != '') {
        unlink('./assets/images/logo/' . $config->logo);
      }
      $upload_data = array('logo' => $this->upload->data());
      // $config['image_library'] = 'gd2';
      // $config['source_image'] = './assets/images/logo/' . $upload_data['logo']['file_name'];
      // $this->load->library('image_lib', $config);
      $data = array(
        'logo' => $upload_data['logo']['file_name'],
        'updated' => date('Y-m-d H:i:s'),
      );
      $edit = $this->config_model->editConfig($data);
      if ($edit) {
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        ' . plang('Updated Successfully') . '</div>');
      } else {
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        ' . plang('Updated Failed') . '</div>');
      }

      redirect('a/web-configuration');
    }
  }

  public function processFavIcon()
  {
    $config['upload_path'] = './assets/images/logo/';
    $config['allowed_types'] = 'jpg|png|jpeg';
    $config['max_size'] = 700;
    $this->upload->initialize($config);
    $photo = 'favicon';
    if ($this->upload->do_upload($photo)) {
      // DELETE IMAGE
      $config = $this->config_model->getConfig();
      if ($config->logo != '') {
        unlink('./assets/images/logo/' . $config->favicon);
      }
      $upload_data = array('favicon' => $this->upload->data());
      // $config['image_library'] = 'gd2';
      // $config['source_image'] = './assets/images/logo/' . $upload_data['logo']['file_name'];
      // $this->load->library('image_lib', $config);
      $data = array(
        'favicon' => $upload_data['favicon']['file_name'],
        'updated' => date('Y-m-d H:i:s'),
      );
      $edit = $this->config_model->editConfig($data);
      if ($edit) {
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        ' . plang('Updated Successfully') . '</div>');
      } else {
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        ' . plang('Updated Failed') . '</div>');
      }

      redirect('a/web-configuration');
    }
  }
}


/* End of file Config.php */
/* Location: ./application/controllers/Config.php */