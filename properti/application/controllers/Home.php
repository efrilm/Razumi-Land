<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Home
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

class Home extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $config = $this->config_model->getConfig();
    $this->data['logo'] = $config->logo;
    $this->data['favicon'] = $config->favicon;
    $this->data['address'] = $config->address;
    $this->data['instagram'] = $config->instagram;
    $this->data['facebook'] = $config->facebook;
  }

  public function index()
  {
    $config = $this->config_model->getConfig();
    $this->data['title'] = $config->title;
    $this->data['pp'] = $this->property->getPropertyClient(3)->result();
    $this->data['city'] = $this->city->getCity()->result();
    $this->template->load('frontend/template', 'frontend/home/home', $this->data);
  }
}


/* End of file Home.php */
/* Location: ./application/controllers/Home.php */