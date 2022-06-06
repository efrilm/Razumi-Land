<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Banner
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

class Banner extends CI_Controller
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

    $this->form_validation->set_rules('banner_title', plang('Banner Title'), 'required', [
      'required' => '%s ' . plang('Required') . '*',
    ]);
    $this->form_validation->set_rules('banner_subtitle', plang('Banner Subtitle'), 'required', [
      'required' => '%s ' . plang('Required') . '*',
    ]);
    $this->form_validation->set_rules('banner_moto', plang('Banner Moto'), 'required', [
      'required' => '%s ' . plang('Required') . '*',
    ]);

    if ($this->form_validation->run() == FALSE) {
      $this->data['title']  =  plang('Banner');
      $this->data['action'] = $action;
      $this->data['banner'] =  $this->banner->getBanner()->result();
      if ($action == 'edit' && $id != '') {
        $this->data['b'] = $this->banner->getBannerById($id)->row();
      }
      $this->template->load('admin/template', 'admin/banner/banner', $this->data);
    } else {
      if ($action == 'add') {
        $config['upload_path'] = './assets/images/banner/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $this->upload->initialize($config);
        $photo = 'banner_image';
        if (!$this->upload->do_upload($photo)) {
          $this->data['title']  =  plang('Banner');
          $this->data['action'] = 'add';
          $this->data['banner'] =  $this->banner->getBanner()->result();
          $this->template->load('admin/template', 'admin/banner/banner', $this->data);
        } else {
          $upload_data = array('banner_image' => $this->upload->data());
          $config['image_library'] = 'gd2';
          $config['source_image'] = './assets/images/property/' . $upload_data['banner_image']['file_name'];
          $this->load->library('image_lib', $config);
          $data = [
            'banner_title' => htmlspecialchars($this->input->post('banner_title')),
            'banner_subtitle' => htmlspecialchars($this->input->post('banner_subtitle')),
            'banner_moto' => htmlspecialchars($this->input->post('banner_moto')),
            'banner_image' => $upload_data['banner_image']['file_name'],
          ];
          $add = $this->banner->addBanner($data);
          if ($add) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            ' . plang('Added Successfully') . '!</div>');
          } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            ' . plang('Added failed') . '!</div>');
          }
          redirect('a/banner');
        }
      } else {
        $config['upload_path'] = './assets/images/banner/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $this->upload->initialize($config);
        $photo = 'banner_image';
        if (!$this->upload->do_upload($photo)) {
          $this->data['title']  =  plang('Banner');
          $this->data['action'] = 'edit';
          $this->data['banner'] =  $this->banner->getBanner()->result();
          $this->template->load('admin/template', 'admin/banner/banner', $this->data);
        } else {
          // DELETE IMAGE
          $banner = $this->banner->getBannerById($id)->row();
          if ($banner->banner_image != '') {
            unlink('./assets/images/banner/' . $banner->banner_image);
          }
          $upload_data = array('banner_image' => $this->upload->data());
          $config['image_library'] = 'gd2';
          $config['source_image'] = './assets/images/property/' . $upload_data['banner_image']['file_name'];
          $this->load->library('image_lib', $config);
          $data = [
            'banner_title' => htmlspecialchars($this->input->post('banner_title')),
            'banner_subtitle' => htmlspecialchars($this->input->post('banner_subtitle')),
            'banner_moto' => htmlspecialchars($this->input->post('banner_moto')),
            'banner_image' => $upload_data['banner_image']['file_name'],
          ];
          $add = $this->banner->editBanner($id, $data);
          if ($add) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            ' . plang('Edited Successfully') . '!</div>');
          } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            ' . plang('Edited failed') . '!</div>');
          }
          redirect('a/banner');
        }
        $data = [
          'banner_title' => htmlspecialchars($this->input->post('banner_title')),
          'banner_subtitle' => htmlspecialchars($this->input->post('banner_subtitle')),
          'banner_moto' => htmlspecialchars($this->input->post('banner_moto')),
        ];
        $add = $this->banner->editBanner($id, $data);
        if ($add) {
          $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
          ' . plang('Edited Successfully') . '!</div>');
        } else {
          $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
          ' . plang('Edited failed') . '!</div>');
        }
        redirect('a/banner');
      }
    }
  }

  public function delete($id)
  {
    $banner = $this->banner->getBannerById($id)->row();
    if ($banner->banner_image != '') {
      unlink('./assets/images/banner/' .  $banner->banner_images);
    }

    $delete = $this->banner->deleteBanner($id);
    if ($delete) {
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
      ' . plang('Deleted Successfully') . '!</div>');
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
      ' . plang('Deleted failed') . '!</div>');
    }
    redirect('a/banner');
  }
}


/* End of file Banner.php */
/* Location: ./application/controllers/Banner.php */