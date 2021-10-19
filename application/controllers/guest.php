<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guest extends CI_Controller
{

  public function index(){
    $data['email'] = $this->session->userdata('email');
    $data['title'] = 'Welcome Guest';
    $this->load->view('templates/template_user/header',$data);
    $this->load->view('templates/template_user/navbar',$data);
    $this->load->view( 'guest/index');
    $this->load->view('templates/template_user/footer');
  }
}
