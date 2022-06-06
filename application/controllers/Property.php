<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Property
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

class Property extends CI_Controller
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
    $this->data['email'] = $config->email;
    $this->data['no_phone'] = $config->no_phone;
    $this->data['no_whatsapp'] = $config->no_whatsapp;
  }

  public function index()
  {
    $this->data['title'] = plang('Properties');
    $this->data['p'] = $this->property->getPropertyClient()->result();
    $this->template->load('frontend/template', 'frontend/properties/property', $this->data);
  }

  public function propertyDetail($seo)
  {
    $this->data['p'] = $this->property->getPropertyBySeo($seo)->row();
    $this->data['title'] = $this->data['p']->property_name;
    $this->data['gallery'] = $this->property->getImagesByProperty($this->data['p']->id_property)->result();
    $this->data['fp'] = $this->property->getPropertyClient()->result();
    $this->data['type'] = $this->type->getTypeByProperty($this->data['p']->id_property)->result();

    $this->template->load('frontend/template', 'frontend/properties/property_detail', $this->data);
  }
}


/* End of file Property.php */
/* Location: ./application/controllers/Property.php */