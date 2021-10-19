<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Controller
{
  public function __construct(){
    parent::__construct();
    $this->load->model('M_pembayaran');
    $this->load->model('M_barang');
    is_logged_in();
  }
public function BANK($id_transaksi){
  $data['title'] = "Pembayaran";
  $data['email'] = $this->session->userdata('email');

  $data1 = $this->M_pembayaran->get_by_role($id_transaksi)->result();

  $data = array('pembayaran' =>$data1);
  $this->load->view('templates/template_user/header',$data);
  $this->load->view('templates/template_user/navbar',$data);
  $this->load->view('user/checkout/pembayaran_bank',$data);
  $this->load->view('templates/template_user/footer');

}
public function DANA($id_transaksi){
  $title['title'] = "Pembayaran";
  $email['email'] = $this->session->userdata('email');
  $query =  $this->db->query("SELECT * FROM transaksi");
  $row = $query->row_array();
    $test =  $row['id_transaksi'];
  $data1 = $this->M_pembayaran->get_by_role($id_transaksi)->result();
  $data = array('pembayaran' =>$data1);
  $this->load->view('templates/template_user/header',$title);
  $this->load->view('templates/template_user/navbar',$email);
  $this->load->view('user/checkout/pembayaran_dana',$data,$test);
  $this->load->view('templates/template_user/footer');

}
public function COD($id_transaksi){
  $title['title'] = "Pembayaran";
  $email['email'] = $this->session->userdata('email');

  $data['pembayaran'] = $this->M_pembayaran->getDaftarBarangById($id_transaksi);
  $this->load->view('templates/template_user/header',$title);
  $this->load->view('templates/template_user/navbar',$email);
  $this->load->view('user/checkout/pembayaran_cod',$data);
  $this->load->view('templates/template_user/footer');
}
 public function konfirmasi($id_transaksi){
   $title['title'] = "Pembayaran";
   $email['email'] = $this->session->userdata('email');
   $data1 = $this->M_pembayaran->getTransaksiById($id_transaksi)->result();
   $data = array('pembayaran' =>$data1);
   $this->load->view('templates/template_user/header',$title);
   $this->load->view('templates/template_user/navbar',$email);
   $this->load->view('user/checkout/konfirmasi_pembayaran',$data);
   $this->load->view('templates/template_user/footer');
 }

 public function aksi_upload($id_transaksi){
   $gambar = $_FILES['gambar'];
   $id_barang = $this->input->post('id_barang');
   $qty = $this->input->post('qty');
   if ($gambar ='') {

   }else {
     $config['upload_path'] = './assets/user/bukti_pembayaran';
     $config['allowed_types'] = 'jpg|jpeg|jfif|png|JPG|JPEG|PNG';
     $config['max_size']             = 5096;
     $this->load->library('upload',$config);
     if (!$this->upload->do_upload('gambar')) {

     }
     else {
       $gambar = $this->upload->data();
       $gambar = $gambar['file_name'];
       $data = [
         'status' => 'process',
         'bukti_pembayaran' => $gambar,
         'tanggal' => date("Y-m-d")
       ];
        }
      }

  $this->db->where('id_transaksi',$id_transaksi);
  $this->db->update('transaksi',$data);

  //
  $sql = ("UPDATE tb_barang SET stok = stok - '$qty' WHERE id = '$id_barang'");
  $this->db->query($sql);

  $this->db->set('status','habis');
  $this->db->where('stok',0);
  $this->db->update('tb_barang');
  redirect('Transaksi');
 }


public function selesai($id_transaksi){

  $data = array(
    'status' => 'selesai'
  );

  $this->db->where('id_transaksi',$id_transaksi);
  $this->db->update('transaksi',$data);
  redirect('transaksi');
}
}
