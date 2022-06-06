<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Contact
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

class Contact extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $config = $this->config_model->getConfig();
    $this->data['logo'] = $config->logo;
    $this->data['favicon'] = $config->favicon;
    $this->data['address'] = $config->address;
    $this->data['no_phone'] = $config->no_phone;
    $this->data['no_whatsapp'] = $config->no_whatsapp;
    $this->data['email'] = $config->email;
    $this->data['instagram'] = $config->instagram;
    $this->data['facebook'] = $config->facebook;
  }

  public function index()
  {
    $this->data['title'] = plang('About');
    $this->template->load('frontend/template', 'frontend/contact/contact', $this->data);
  }
}


/* End of file Contact.php */
/* Location: ./application/controllers/Contact.php */