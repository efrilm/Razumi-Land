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
    $this->data['favicon'] = $config->favicon;
    $this->data['company_name'] = $config->company_name;
    if (empty($this->session->userdata('email'))) {
      redirect('sign-in');
    }
  }

  public function index()
  {
    $this->data['title'] =  plang('Properties');
    $this->data['property'] = $this->property->getPropertyAll()->result();
    $this->template->load('admin/template', 'admin/property/property_data', $this->data);
  }

  public function detail($seo)
  {
    $this->data['property'] = $this->property->getPropertyBySeo($seo)->row();
    $this->data['type'] = $this->type->getTypeByProperty($this->data['property']->id_property)->result();
    $this->data['gallery'] = $this->property->getImagesByProperty($this->data['property']->id_property)->result();
    $this->data['seo'] = $this->seo->getSeoByProperty($this->data['property']->id_property)->row();
    $this->data['title'] = $this->data['property']->property_name;
    $this->template->load('admin/template', 'admin/property/property_detail', $this->data);
  }

  public function addType($id)
  {
    $this->data['title'] = plang('Add Type');
    $this->data['id'] = $id;
    $this->template->load('admin/template', 'admin/property/type_add', $this->data);
  }

  public function add()
  {

    $this->form_validation->set_rules('property_name', plang('Property Name'), 'required', [
      'required' => '%s ' . plang('Required') . '*',
    ]);
    $this->form_validation->set_rules('property_price', plang('Starting from price'), 'required', [
      'required' => '%s ' . plang('Required') . '*',
    ]);
    $this->form_validation->set_rules('property_description', plang('Property Description'), 'required', [
      'required' => '%s ' . plang('Required') . '*',
    ]);
    $this->form_validation->set_rules('address', plang('Address'), 'required', [
      'required' => '%s ' . plang('Required') . '*',
    ]);
    $this->form_validation->set_rules('city', plang('City'), 'required', [
      'required' => '%s ' . plang('Required') . '*',
    ]);
    $this->form_validation->set_rules('postal_code', plang('Postal Code'), 'required', [
      'required' => '%s ' . plang('Required') . '*',
    ]);


    if ($this->form_validation->run() == FALSE) {
      $this->data['title'] =  plang('Add New Property');
      $this->data['city'] =  $this->city->getCity()->result();
      $this->template->load('admin/template', 'admin/property/property_add', $this->data);
    } else {
      $config['upload_path'] = './assets/images/property/';
      $config['allowed_types'] = 'jpg|jpeg|png';
      $config['max_size'] = 700;
      $this->upload->initialize($config);
      $photo = 'property_thumbnail';
      if (!$this->upload->do_upload($photo)) {
        $this->data['title'] =  plang('Add New Property');
        $this->data['city'] =  $this->city->getCity()->result();
        $this->template->load('admin/template', 'admin/property/property_add', $this->data);
      } else {
        $upload_data = array('property_thumbnail' => $this->upload->data());
        $config['image_library'] = 'gd2';
        $config['source_image'] = './assets/images/property/' . $upload_data['property_thumbnail']['file_name'];
        $this->load->library('image_lib', $config);
        $idProperty = $this->code->propertyCode();
        $data = array(
          'id_property' => $idProperty,
          'property_name' => htmlspecialchars($this->input->post('property_name')),
          'property_seo' => strtolower(url_title($this->input->post('property_name'))),
          'property_price' => htmlspecialchars($this->input->post('property_price')),
          'property_description' => htmlspecialchars($this->input->post('property_description')),
          'property_thumbnail' => $upload_data['property_thumbnail']['file_name'],
          'property_address' => htmlspecialchars($this->input->post('address')),
          'no_whatsapp' => htmlspecialchars($this->input->post('no_whatsapp')),
          'city_id' => htmlspecialchars($this->input->post('city')),
          'property_postal_code' => $this->input->post('postal_code'),
          'number_of_bedroom' => $this->input->post('number_of_bedroom'),
          'number_of_bathroom' => $this->input->post('number_of_bathroom'),
          'number_of_carport' => $this->input->post('number_of_carport'),
          'is_active' => 1,
          'created' => date('Y-m-d H:i:s'),
          'updated' => date('Y-m-d H:i:s'),
        );

        $add = $this->property->addProperty($data);

        $typeName = $this->input->post('type_name');
        $typePrice = $this->input->post('type_price');
        $buildingArea = $this->input->post('building_area');
        $surfaceArea = $this->input->post('surface_area');
        $typeNumberOfBedroom = $this->input->post('type_number_of_bedroom');
        $typeNumberOfBathroom = $this->input->post('type_number_of_bathroom');
        $typeNumberOfCarport = $this->input->post('type_number_of_carport');

        $index = 0;
        foreach ($typeName as $tn) {
          $dataType = [
            'type_name' => $tn,
            'type_price' => $typePrice[$index],
            'building_area' => $buildingArea[$index],
            'property_id' => $idProperty,
            'surface_area' => $surfaceArea[$index],
            'type_number_of_bedroom' => $typeNumberOfBedroom[$index],
            'type_number_of_bathroom' => $typeNumberOfBathroom[$index],
            'type_number_of_carport' => $typeNumberOfCarport[$index],
          ];
          $this->type->addType($dataType);
          $index++;
        }

        $seoKeyword = htmlspecialchars($this->input->post('seo_keyword'));
        $seoDescription = htmlspecialchars($this->input->post('seo_description'));
        $seoAuthor = htmlspecialchars($this->input->post('seo_author'));

        $dataSeo = [
          'property_id' => $idProperty,
          'seo_description' => $seoDescription,
          'seo_keywords' => $seoKeyword,
          'seo_author' => $seoAuthor,
        ];

        $seo = $this->seo->addSeo($dataSeo);

        if ($add || $seo) {
          $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
          ' . plang('Added Successfully') . '!</div>');
        } else {
          $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
          ' . plang('Added Failed') . '!</div>');
        }
        redirect('a/properties');
      }
    }
  }

  public function edit($id)
  {

    $this->form_validation->set_rules('property_name', plang('Property Name'), 'required', [
      'required' => '%s ' . plang('Required') . '*',
    ]);
    $this->form_validation->set_rules('property_price', plang('Starting from price'), 'required', [
      'required' => '%s ' . plang('Required') . '*',
    ]);
    $this->form_validation->set_rules('property_description', plang('Property Description'), 'required', [
      'required' => '%s ' . plang('Required') . '*',
    ]);
    $this->form_validation->set_rules('address', plang('Address'), 'required', [
      'required' => '%s ' . plang('Required') . '*',
    ]);
    $this->form_validation->set_rules('city', plang('City'), 'required', [
      'required' => '%s ' . plang('Required') . '*',
    ]);
    $this->form_validation->set_rules('postal_code', plang('Postal Code'), 'required', [
      'required' => '%s ' . plang('Required') . '*',
    ]);


    if ($this->form_validation->run() == FALSE) {
      $this->data['title'] = plang('Edit Type');
      $this->data['city'] = $this->city->getCity()->result();
      $this->data['property'] = $this->property->getPropertyById($id)->row();
      $this->template->load('admin/template', 'admin/property/property_edit', $this->data);
    } else {
      $config['upload_path'] = './assets/images/property/';
      $config['allowed_types'] = 'gif|jpg|jpeg|png|icon';
      $config['max_size'] = 700;
      $this->upload->initialize($config);
      $photo = 'property_thumbnail';
      if (!$this->upload->do_upload($photo)) {
        $this->data['title'] = plang('Edit Type');
        $this->data['city'] = $this->city->getCity()->result();
        $this->data['property'] = $this->property->getPropertyById($id)->row();
        $this->template->load('admin/template', 'admin/property/property_edit', $this->data);
      } else {
        // DELETE IMAGE 
        $property = $this->property->getPropertyById($id)->row();
        if ($property->property_thumbnail) {
          unlink('./assets/images/property/' . $property->property_thumbnail);
        }
        $upload_data = array('property_thumbnail' => $this->upload->data());
        $config['image_library'] = 'gd2';
        $config['source_image'] = './assets/images/property/' . $upload_data['property_thumbnail']['file_name'];
        $this->load->library('image_lib', $config);
        $data = array(
          'property_name' => htmlspecialchars($this->input->post('property_name')),
          'property_seo' => strtolower(url_title($this->input->post('property_name'))),
          'property_price' => htmlspecialchars($this->input->post('property_price')),
          'property_description' => htmlspecialchars($this->input->post('property_description')),
          'property_thumbnail' => $upload_data['property_thumbnail']['file_name'],
          'property_address' => htmlspecialchars($this->input->post('address')),
          'no_whatsapp' => htmlspecialchars($this->input->post('no_whatsapp')),
          'city_id' => htmlspecialchars($this->input->post('city')),
          'property_postal_code' => $this->input->post('postal_code'),
          'number_of_bedroom' => $this->input->post('number_of_bedroom'),
          'number_of_bathroom' => $this->input->post('number_of_bathroom'),
          'number_of_carport' => $this->input->post('number_of_carport'),
          'updated' => date('Y-m-d H:i:s'),
        );
        $edit = $this->property->editProperty($id, $data);
        if ($edit) {
          $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
          ' . plang('Edited Successfully') . '!</div>');
        } else {
          $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
          ' . plang('Edited Failed') . '!</div>');
        }
        redirect('a/properties');
      }
      $data = array(
        'property_name' => htmlspecialchars($this->input->post('property_name')),
        'property_seo' => strtolower(url_title($this->input->post('property_name'))),
        'property_price' => htmlspecialchars($this->input->post('property_price')),
        'property_description' => htmlspecialchars($this->input->post('property_description')),
        'property_address' => htmlspecialchars($this->input->post('address')),
        'no_whatsapp' => htmlspecialchars($this->input->post('no_whatsapp')),
        'city_id' => htmlspecialchars($this->input->post('city')),
        'property_postal_code' => $this->input->post('postal_code'),
        'number_of_bedroom' => $this->input->post('number_of_bedroom'),
        'number_of_bathroom' => $this->input->post('number_of_bathroom'),
        'number_of_carport' => $this->input->post('number_of_carport'),
        'updated' => date('Y-m-d H:i:s'),
      );
      $edit = $this->property->editProperty($id, $data);
      if ($edit) {
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        ' . plang('Edited Successfully') . '!</div>');
      } else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
        ' . plang('Edited Failed') . '!</div>');
      }
      redirect('a/properties');
    }
  }

  public function processAddType()
  {
    $id = $this->input->post('id');
    $typeName = $this->input->post('type_name');
    $typePrice = $this->input->post('type_price');
    $buildingArea = $this->input->post('building_area');
    $surfaceArea = $this->input->post('surface_area');
    $typeNumberOfBedroom = $this->input->post('type_number_of_bedroom');
    $typeNumberofBathroom = $this->input->post('type_number_of_bathroom');
    $typeNumberofCarport = $this->input->post('type_number_of_carport');

    $index = 0;
    foreach ($typeName as $tm) {
      $data = [
        'type_name' => $tm,
        'property_id' => $id,
        'type_price' => $typePrice[$index],
        'building_area' => $buildingArea[$index],
        'surface_area' => $surfaceArea[$index],
        'type_number_of_bedroom' => $typeNumberOfBedroom[$index],
        'type_number_of_bathroom' => $typeNumberofBathroom[$index],
        'type_number_of_carport' => $typeNumberofCarport[$index],
      ];
      $edit = $this->type->addType($data);
      $index++;
    }

    if ($edit) {
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
      ' . plang('Added Successfully') . '!</div>');
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
      ' . plang('Added Failed') . '!</div>');
    }
    $property = $this->property->getPropertyById($id)->row();
    redirect('a/detail/' . $property->property_seo);
  }

  public function deleteType($id, $seo)
  {
    $delete = $this->type->deleteType($id);
    if ($delete) {
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
      ' . plang('Deleted Successfully') . '!</div>');
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
      ' . plang('Deleted Failed') . '!</div>');
    }
    redirect('a/detail/' . $seo);
  }

  public function editType($id)
  {
    $this->data['title'] = plang('Edit Type');
    $this->data['id'] = $id;
    $this->data['type'] = $this->type->getTypeById($id)->row();
    $this->template->load('admin/template', 'admin/property/type_edit', $this->data);
  }

  public function processEditType($id)
  {
    $idProperty = $this->input->post('idProperty');
    $typeName = $this->input->post('type_name');
    $typePrice = $this->input->post('type_price');
    $buildingArea = $this->input->post('building_area');
    $surfaceArea = $this->input->post('surface_area');
    $typeNumberOfBedroom = $this->input->post('type_number_of_bedroom');
    $typeNumberofBathroom = $this->input->post('type_number_of_bathroom');
    $typeNumberofCarport = $this->input->post('type_number_of_carport');
    $data = [
      'type_name' => $typeName,
      'type_price' => $typePrice,
      'building_area' => $buildingArea,
      'surface_area' => $surfaceArea,
      'type_number_of_bedroom' => $typeNumberOfBedroom,
      'type_number_of_bathroom' => $typeNumberofBathroom,
      'type_number_of_carport' => $typeNumberofCarport,
    ];
    $edit =    $this->type->editType($id, $data);
    if ($edit) {
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
      ' . plang('Edited Successfully') . '!</div>');
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
      ' . plang('Edited Failed') . '!</div>');
    }
    $property = $this->property->getPropertyById($idProperty)->row();
    redirect('a/detail/' . $property->property_seo);
  }

  public function addImages($id)
  {
    $this->data['title'] = plang('Add Images');
    $this->data['id'] = $id;
    $this->template->load('admin/template', 'admin/property/images_add', $this->data);
  }

  public function processAddImages()
  {
    $errorUploadType = $statusMsg = '';
    $id = $this->input->post('id');
    if ($this->input->post('upload')) {
      if (!empty($_FILES['images']['name']) && count(array_filter($_FILES['images']['name'])) > 0) {
        $fileCount = count($_FILES['images']['name']);
        for ($i = 0; $i < $fileCount; $i++) {
          $_FILES['image']['name'] = $_FILES['images']['name'][$i];
          $_FILES['image']['type'] = $_FILES['images']['type'][$i];
          $_FILES['image']['tmp_name'] = $_FILES['images']['tmp_name'][$i];
          $_FILES['image']['error'] = $_FILES['images']['error'][$i];
          $_FILES['image']['size'] = $_FILES['images']['size'][$i];

          $path = './assets/images/property/';
          $config['upload_path'] =  $path;
          $config['allowed_types'] = 'jpg|jpeg|png|gif';
          // $config['max_size'] = '700';
          $this->load->library('upload', $config);
          $this->upload->initialize($config);

          if ($this->upload->do_upload('image')) {
            $file_name = array('images' => $this->upload->data());
            $uploadData[$i]['image_name'] = $file_name['images']['file_name'];
            $uploadData[$i]['property_id'] = $id;
          } else {
            $errorUploadType .= $_FILES['image']['name'] . ' | ';
          }
        }
        $errorUploadType = !empty($errorUploadType) ? '</br>' . plang('File Type Error') . ':' . trim($errorUploadType, ' | ') : '';
        if (!empty($uploadData)) {
          $insert = $this->property->addImages($uploadData);
          $statusMsg  = $insert ? plang('Images uploaded successfully') . '!' . $errorUploadType : plang('Some problem occured, please try again');
        } else {
          $statusMsg = plang("Sorry, there was an error uploading your file") . $errorUploadType;
        }
      } else {
        $statusMsg = plang('Please select image files to upload');
      }
    }
    $this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">
      ' . $statusMsg . '</div>');

    echo $statusMsg;
    $property = $this->property->getPropertyById($id)->row();
    redirect('a/detail/' . $property->property_seo);
  }

  public function deleteImage($id,  $seo)
  {
    // DELETE IMAGE
    $gallery = $this->property->getImageById($id)->row();
    if ($gallery->image_name !== '') {
      unlink('./assets/images/property/' . $gallery->image_name);
    }

    // DELETE FROM DATABASE
    $delete = $this->property->deleteImages($id);
    if ($delete) {
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
      ' . plang('Deleted Successfully') . '</div>');
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
      ' . plang('Deleted Failed ') . '</div>');
    }

    // REDIRECT PAGE
    redirect('a/detail/' . $seo);
  }

  public function addSeo($id)
  {
    $this->data['id'] = $id;
    $this->data['title'] = plang('Add Seo');
    $this->template->load('admin/template', 'admin/property/seo_add', $this->data);
  }

  public function processAddSeo()
  {

    $id = $this->input->post('id');

    // ARRAY DATA
    $data = [
      'property_id' => $id,
      'seo_keywords' => htmlspecialchars($this->input->post('seo_keyword', TRUE)),
      'seo_description' => htmlspecialchars($this->input->post('seo_description', TRUE)),
      'seo_author' => htmlspecialchars($this->input->post('seo_author', TRUE)),
    ];

    // INSERT TO DB
    $insert = $this->seo->addSeo($data);

    // MESSAGE
    if ($insert) {
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
      ' . plang('Added Successfully') . '</div>');
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
      ' . plang('Added Failed') . '</div>');
    }

    // REDIRECT
    $property = $this->property->getPropertyById($id)->row();
    redirect('a/detail/' . $property->property_seo);
  }

  public function editSeo($id)
  {
    $this->data['title'] = plang('Edit Seo');
    $this->data['id'] = $id;
    $this->data['seo'] =  $this->seo->getSeoByProperty($id)->row();
    $this->template->load('admin/template', 'admin/property/seo_edit', $this->data);
  }

  public function processEditSeo()
  {
    $id = $this->input->post('id');
    $idSeo = $this->input->post('id_seo');
    // ARRAY DATA
    $data = [
      'seo_keywords' => htmlspecialchars($this->input->post('seo_keyword')),
      'seo_description' => htmlspecialchars($this->input->post('seo_description')),
      'seo_author' => htmlspecialchars($this->input->post('seo_author')),
    ];

    // ADD TO DB 
    $edit = $this->seo->editSeo($idSeo, $data);

    // MESSAGE
    if ($edit) {
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
      ' . plang('Edited Successfully') . '</div>');
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
      ' . plang('Edited Failed') . '</div>');
    }

    // REDIRECT
    $property = $this->property->getPropertyById($id)->row();
    redirect('a/detail/' . $property->property_seo);
  }

  public function deleteSeo($id, $seo)
  {

    // DELETE FROM DB
    $del = $this->seo->deleteSeo($id);

    // MESSAGE
    if ($del) {
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
      ' . plang('Deleted Successfully') . '</div>');
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
      ' . plang('Deleted Failed') . '</div>');
    }
    // REDIRECT
    redirect('a/detail/' . $seo);
  }

  public function active($id, $seo)
  {
    // ARRAY DATA
    $data = [
      'is_active' => 1,
    ];

    // EDIT INTO DB
    $edit = $this->property->editProperty($id, $data);

    // MESSAGE
    if ($edit) {
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
      ' . plang('Activate Successfully') . '</div>');
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
      ' . plang('Activate Failed') . '</div>');
    }

    // REDIRECT
    redirect('a/detail/' . $seo);
  }

  public function deactive($id, $seo)
  {
    // ARRAY DATA
    $data = [
      'is_active' => 0,
    ];

    // EDIT INTO DB
    $edit = $this->property->editProperty($id, $data);

    // MESSAGE
    if ($edit) {
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
      ' . plang('Deactivate Successfully') . '</div>');
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
      ' . plang('Deactivate Failed') . '</div>');
    }

    // REDIRECT
    redirect('a/detail/' . $seo);
  }

  public function deleteAllType($id, $seo)
  {
    // DELETE FROM DB
    $delete = $this->type->deleteAllType($id);

    // MESSAGE
    if ($delete) {
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
      ' . plang('Deleted Successfully') . '</div>');
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
      ' . plang('Deleted Failed') . '</div>');
    }

    // REDIRECT
    redirect('a/detail/' . $seo);
  }

  public function deleteAllGallery($id, $seo)
  {

    // DELETE IMAGE FROM FOLDER
    $gallery = $this->property->getImagesByProperty($id)->result();
    if (!empty($gallery)) {
      foreach ($gallery as $key => $v) {
        unlink('./assets/images/property/' . $v->image_name);
      }
    }


    // DELETE FROM DB
    $delete = $this->property->deleteAllImages($id);

    // MESSAGE
    if ($delete) {
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
      ' . plang('Deleted Successfully') . '</div>');
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
      ' . plang('Deleted Failed') . '</div>');
    }

    // REDIRECT
    redirect('a/detail/' . $seo);
  }

  public function deleteProperty($id)
  {
    // DELETE GALLERY
    $gallery = $this->property->getImagesByProperty($id)->result();
    if (!empty($gallery)) {
      foreach ($gallery as $key => $v) {
        unlink('./assets/images/property/' . $v->image_name);
      }
    }
    $delGal = $this->property->deleteAllImages($id);

    // DELETE TYPE
    $delType = $this->type->deleteAllType($id);

    // DELETE PROP
    $delProp = $this->property->deleteProperty($id);

    // MESSAGE
    if ($delType | $delGal | $delProp) {
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
      ' . plang('Deleted Successfully') . '</div>');
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
      ' . plang('Deleted Failed') . '</div>');
    }

    // REDIRECT
    redirect('a/properties');
  }
}


/* End of file Property.php */
/* Location: ./application/controllers/Property.php */