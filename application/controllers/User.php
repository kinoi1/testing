<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
  public function __construct(){
    parent::__construct();
    $this->load->model('M_user');

    is_logged_in();
  }
  public function index()
  {
    $data['title'] = "Dashboard User" ;
    $data['email'] = $this->session->userdata('email');
    $this->load->view('templates/template_user/header',$data);
    $this->load->view('templates/template_user/navbar',$data);
    $this->load->view('user/dashboard_user',$data);
    $this->load->view('templates/template_user/footer');
  }

  public function checkout(){
    $data['title'] = "Checkout" ;
    $data = $this->session->userdata('email');
    $this->load->view('templates/template_user/header',$data);
    $this->load->view('templates/template_user/navbar',$data);
    $this->load->view('user/checkout/data_pembayaran');
    $this->load->view('templates/template_user/footer');
  }

  public function daftar_barang(){
    $title['title'] = "DaftarBarang";
    $data1['email'] = $this->session->userdata('email');

    $page=$this->uri->segment(4);
    $limit=6;
    if(!$page):
    $offset = 0 ;
  else:
    $offset = $page;
  endif;

  $d['tot'] = $offset;
  $tot_hal = $this->db->get("tb_barang");
  $config['base_url'] = base_url()."user/daftar_barang/shop/";
  $config['total_rows'] = $tot_hal->num_rows();
  $config['per_page'] = $limit;
  $config['url_segment'] = 4;
  $config['first_link'] = 'Awal';
  $config['last_link'] = 'Akhir';
  $config['next_link'] = 'Next';
  $config['prev_link'] = 'back';
  $this->pagination->initialize($config);
  $d["paginator"] =$this->pagination->create_links();
  $d['data_barang'] = $this->db->query("SELECT *FROM tb_barang limit ".$offset.",".$limit."");
  $this->load->view('templates/template_user/header',$title);
  $this->load->view('templates/template_user/navbar',$data1);
  $this->load->view('user/daftar_barang/sidebar');
  $this->load->view('user/daftar_barang/shop',$d);
  $this->load->view('templates/template_user/footer');
  }

  public function detail($id){
    $data['email'] = $this->session->userdata('email');
    $data['title'] = 'Detail';
    $data['tb_barang'] = $this->M_user->getDaftarBarangById($id);
    $this->load->view('templates/template_user/header',$data);
    $this->load->view('templates/template_user/navbar');
    $this->load->view('user/daftar_barang/detail',$data);
    $this->load->view('templates/template_user/footer');
  }

 public function data_pembayaran(){
   $data['title'] = "Keranjang";
   $data['email'] = $this->session->userdata('email');
   $email = $data['email'];
   $data = $this->M_user->getdaftar_keranjang($email);
   $data = array('barang' => $data);
   $this->load->view('templates/template_user/header',$data);
   $this->load->view('templates/template_user/navbar',$data);
   $this->load->view('user/checkout/data_pembayaran',$data);
   $this->load->view('templates/template_user/footer');
 }


}
