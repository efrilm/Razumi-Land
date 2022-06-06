<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Auth extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function signIn()
  {

    $this->form_validation->set_rules('email', plang('Email'), 'required|trim|valid_email', [
      'required' => '%s ' . plang('Required') . '*',
      'valid_email' => plang('The Email field must contain a valid email address'),
    ]);
    $this->form_validation->set_rules('password', plang('Password'), 'required|trim', [
      'required' => '%s ' . plang('Required') . '*',
    ]);


    if ($this->form_validation->run() == FALSE) {
      $this->data['title'] = plang('Sign In');
      $this->template->load('auth/template', 'auth/sign_in', $this->data);
    } else {
      $this->_login();
    }
  }

  public function _login()
  {
    $email =  $this->input->post('email', TRUE);
    $password = $this->input->post('password', TRUE);

    $user = $this->user->checkEmail($email)->row();
    if ($user) {
      if ($user->is_active == 1) {
        if (password_verify($password, $user->password)) {
          $data = [
            'user_id' => $user->id_user,
            'email' => $user->email,
          ];
          $this->session->set_userdata($data);
          redirect('a/dashboard');
        } else {
          $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
          ' . plang('Wrong Password') . '!
          </div>');
          redirect('sign-in');
        }
      } else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
        ' . plang('This email has not been actived') . '
        </div>');
        redirect('sign-in');
      }
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
      ' . plang('Email Not Registered') . '
      </div>');
      redirect('sign-in');
    }
  }

  public function signOut()
  {
    $this->session->unset_userdata('user_id');
    $this->session->unset_userdata('email');

    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
    ' .  plang('You have successfully signed out') . '!
    </div>');
    redirect('sign-in');
  }
}
