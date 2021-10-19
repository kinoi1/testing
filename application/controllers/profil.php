<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller
{
  public function __construct(){
    parent::__construct();
    $this->load->model('M_profil');
    is_logged_in();
  }
  public function profil_user(){
    $data['title'] = 'Profil';
    $data['email'] = $this->session->userdata('email');
    $email = $data['email'];
    $data['user'] = $this->db->get_where('user',['email' =>
    $this->session->userdata('email')])->row_array();
    $this->load->view('templates/template_user/header',$data);
    $this->load->view('templates/template_user/navbar',$data);
    $this->load->view('user/profil_user',$data);
    $this->load->view('templates/template_user/footer');
  }
  public function profil_admin(){
    $title['title'] = 'Profil';
    $data['email'] = $this->session->userdata('email');
    $email = $data['email'];
    $data['user'] = $this->db->get_where('user',['email' =>
    $this->session->userdata('email')])->row_array();
    $this->load->view('templates/template_user/header',$title);
    $this->load->view('templates/template_user/navbar',$data);
    $this->load->view('user/profil_user',$data);
    $this->load->view('templates/template_user/footer');
  }
  public function edit_profil(){
    $title['title'] = 'Profil';
    $email = $this->session->userdata('email');
    $data['row'] = $this->db->get_where('user',['email'=> $email])->row();
    $this->load->view('templates/template_user/header',$title);
    $this->load->view('templates/template_user/navbar',$data);
    $this->load->view('user/edit_profil',$data);
    $this->load->view('templates/template_user/footer');
  }
  public function aksi_edit_profil(){
    $data['title'] = 'Edit Profil';
    $email = $this->session->userdata('email');

    $name = $this->input->post('name');
    $image = $_FILES['image'];
    $tgl_lahir = $this->input->post('tgl_lahir');
    $alamat = $this->input->post('alamat');
    $no_hp = $this->input->post('no_hp');
    if ($image='') {

    }else {
      $config['upload_path'] = './assets/img/';
      $config['allowed_types'] = 'jpg|jpeg|jfif|png';

      $this->load->library('upload',$config);
      if (!$this->upload->do_upload('image')) {
         $image = $this->upload->data('file_name');
        $data = array(
          'name' => $name,
          'tgl_lahir' => $tgl_lahir,
          'alamat' => $alamat,
          'no_hp' => $no_hp
        );
      }
      else {
        $image = $this->upload->data('file_name');

        $data = array(
          'name' => $name,
          'tgl_lahir' => $tgl_lahir,
          'alamat' => $alamat,
          'no_hp' => $no_hp,
          'image' => $image
        );
      }
    }
    $this->db->where('email',$email);
    $this->db->update('user',$data);
    redirect('Profil/profil_user');
  }
}
