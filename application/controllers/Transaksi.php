<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller
{
  public function __construct(){
    parent::__construct();
    $this->load->model('M_checkout');
    is_logged_in();
  }
  public function index(){
    $email1['email'] = $this->session->userdata('email');
    $title['title'] = 'Checkout';
    $email = $this->session->userdata('email');
    $data = $this->M_checkout->getdaftar_checkout($email);
    $data = array('barang' => $data);
    $this->load->view('templates/template_user/header',$title);
    $this->load->view('templates/template_user/navbar',$email1);
    $this->load->view('user/checkout/index',$data);
    $this->load->view('templates/template_user/footer');
  }
  public function add($id_transaksi){
    $data['title'] = 'Transaksi';
    $data['email'] = $this->session->userdata('email');
    $data1 = $this->M_checkout->get_by_role($id_transaksi)->result();
    $data = array('data' =>$data1);
    $this->load->view('templates/template_user/header');
    $this->load->view('templates/template_user/navbar',$data);
    $this->load->view('user/checkout/data_pembayaran',$data);
    $this->load->view('templates/template_user/footer',);
  }

  public function detail($id_transaksi){
    $title['title'] = 'detail transaksi';
    $data['email'] = $this->session->userdata('email');
    $data1 = $this->M_checkout->get_by_role($id_transaksi)->result();
    $data = array('data' =>$data1);
    $this->load->view('templates/template_user/header',$title);
    $this->load->view('templates/template_user/navbar',$data);
    $this->load->view('user/checkout/detail_transaksi',$data);
    $this->load->view('templates/template_user/footer');
  }

  public function aksi_checkout($id_transaksi){
    $name = $this->input->post('name');
    $email = $this->input->post('email');
    $no_hp = $this->input->post('no_hp');
    $alamat = $this->input->post('alamat');
    $ekspedisi = $this->input->post('ekspedisi');
    $durasi = $this->input->post('durasi');
    $ongkir = $this->input->post('ongkir');
    $metode_pembayaran = $this->input->post('metode_pembayaran');
    $total = $this->input->post('total');

    $data1 = array(
      'name' => $name,
      'email' => $email,
      'no_hp' => $no_hp,
      'alamat' => $alamat
    );
    $data2 = array(

      'total' => $total + $ongkir,
      'ekspedisi' => $ekspedisi,
      'durasi' => $durasi,
      'ongkir' => $ongkir,
      'metode_pembayaran' => $metode_pembayaran
    );

   //  UPDATE TABLE USER
  $this->db->where('email',$email);
  $this->db->update('user',$data1);
  // UPDATE TABLE TRANSAKSI
  $this->db->where('id_transaksi',$id_transaksi);
  $this->db->update('transaksi',$data2);
    redirect('transaksi');
  }
}
