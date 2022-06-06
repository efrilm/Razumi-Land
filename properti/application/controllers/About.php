<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller About
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

class About extends CI_Controller
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
    $this->data['title'] = plang('About');
    $this->template->load('frontend/template', 'frontend/about/about', $this->data);
  }
}


/* End of file About.php */
/* Location: ./application/controllers/About.php */