<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keranjang extends CI_Controller
{
  public function __construct(){
    parent::__construct();
    $this->load->model('M_keranjang');

    is_logged_in();
  }
  public function index(){
    $this->form_validation->set_rules('id_barang','Id_barang','required|trim');
    $title = "Keranjang";
    $data1['email'] = $this->session->userdata('email');
    $email = $data1['email'];
    $data = $this->M_keranjang->getdaftar_keranjang($email);
    $data = array('barang' => $data);
    $this->load->view('templates/template_user/header',$title,$data);
    $this->load->view('templates/template_user/navbar',$data1);
    $this->load->view('user/daftar_barang/keranjang',$data);
    $this->load->view('templates/template_user/footer',$data);
  }
  public function tambah(){

    $data['email'] = $this->session->userdata('email');
    $email = $data['email'];

    $id = $this->input->post('id');
    $name = $this->input->post('name');
    $harga = $this->input->post('harga');
    $qty = $this->input->post('qty');

    $data = array(
      'email' => $email,
      'id_barang' => $id,
      'name' =>$name,
      'harga' =>$harga,
      'qty' => $qty
    );
    $this->M_keranjang->input_data_keranjang($data,'keranjang');
    redirect('Keranjang');

  }

  public function delete($id_keranjang){
    $this->db->delete('keranjang',['id_keranjang' =>$id_keranjang]);
       redirect('keranjang');
  }

  public function GetKeranjangById(){
    $id_barang = $this->input->post('id_barang');
    $name = $this->input->post('name');
    $total = $this->input->post('total');
    $qty = $this->input->post('qty');
    $email = $this->session->userdata('email');
    if($id_barang == NULL){
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
        Empty selected product
        </div>');

        redirect('keranjang');
    }else{
      for ($i=0; $i < sizeof($id_barang); $i++){
        $data = array(
          'id_barang' => $id_barang[$i],
          'nama_barang' => $name,
          'qty' =>  $qty,
          'total'=> $total,
          'user'=>  $email
        );
        $this->db->insert('transaksi',$data);
      }
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Berhasil menambahkan pesanan
        </div>');
        redirect('transaksi');
    }



  }
}
