<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
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
        $this->data['title'] = plang('User');
        $this->data['user'] =  $this->user->getUserAll()->result();
        $this->template->load('admin/template', 'admin/user/user_data', $this->data);
    }

    public function add()
    {
        $this->form_validation->set_rules('first_name', plang('First Name'), 'required|trim', [
            'required' => '%s ' . plang('Required') . '*',
        ]);
        $this->form_validation->set_rules('last_name', plang('Last Name'), 'required|trim', [
            'required' => '%s ' . plang('Required') . '*',
        ]);
        $this->form_validation->set_rules('no_phone', plang('No. Phone'), 'required|trim', [
            'required' => '%s ' . plang('Required') . '*',
        ]);
        $this->form_validation->set_rules('email', plang('email'), 'required|trim|valid_email|is_unique[tb_user.email]', [
            'required' => '%s ' . plang('Required') . '*',
            'valid_email' => plang('The Email field must contain a valid email address'),
        ]);
        $this->form_validation->set_rules('email', plang('email'), 'required|trim|valid_email|is_unique[tb_user.email]', [
            'required' => '%s ' . plang('Required') . '*',
            'valid_email' => plang('The Email field must contain a valid email address'),
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]|matches[confirm_password]', [
            'matches' => plang('Passwords are not the same'),
            'min_length' => plang('Password must be a minimum of 8 characters length'),
            "required" => "%s " . plang('Required') . "",
        ]);

        $this->form_validation->set_rules('confirm_password', 'Password', 'required|trim|min_length[8]|matches[password]', [
            'matches' => plang('Passwords are not the same'),
            'min_length' => plang('Password must be a minimum of 8 characters length'),
            "required" => "%s " . plang('Required') . "",
        ]);

        if ($this->form_validation->run() == FALSE) {
            $this->data['title'] =  plang('Add User');
            $this->template->load('admin/template', 'admin/user/user_add', $this->data);
        } else {
            $this->processAdd();
        }
    }

    private function processAdd()
    {
        $data = [
            'first_name' => htmlspecialchars($this->input->post('first_name')),
            'last_name' => htmlspecialchars($this->input->post('last_name')),
            'email' => htmlspecialchars($this->input->post('email')),
            'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
            'no_phone' => htmlspecialchars($this->input->post('no_phone')),
            'photo' => 'default.png',
            'is_active' => 1,
            'role_id' => 1,
            'created' => date('Y-m-d H:i:s'),
            'updated' => date('Y-m-d H:i:s'),
        ];
        $add = $this->user->addUser($data);
        if ($add) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            ' .  plang('Added Successfully') . '!
            </div>');
            redirect('a/user');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            ' .  plang('Added Failed') . '!
            </div>');
            redirect('a/user');
        }
    }
}
