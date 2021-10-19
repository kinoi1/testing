<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller
{
  public function __construct(){
    parent::__construct();

    $this->load->model('M_barang');
    is_logged_in();
  }
  public function index(){
    $data['title']  = "Daftar Barang";
    $email = $this->session->userdata('email');


        $page=$this->uri->segment(3);
        $limit=3;
        if(!$page):
        $offset = 0 ;
      else:
        $offset = $page;
      endif;

      $d['tot'] = $offset;
      $tot_hal = $this->db->get("tb_barang");
      $config['base_url'] = base_url()."barang/index/";
      $config['total_rows'] = $tot_hal->num_rows();
      $config['per_page'] = $limit;
      $config['url_segment'] = 3;
      $config['first_link'] = 'Awal';
      $config['last_link'] = 'Akhir';
      $config['next_link'] = 'Next';
      $config['prev_link'] = 'back';
      $this->pagination->initialize($config);
      $d["paginator"] =$this->pagination->create_links();
      $d['data_barang'] = $this->M_barang->getbarang($limit,$offset);


    $this->load->view('templates/template_admin/header',$data);
    $this->load->view('templates/template_admin/navbar',$email);
    $this->load->view('admin/form/barang/daftar_barang',$d);
    $this->load->view('templates/template_admin/footer');


  }
  public function tambah_barang(){
    $data['title']  = "Daftar Barang";
    $email = $this->session->userdata('email');
    $this->load->view('templates/template_admin/header',$data);
    $this->load->view('templates/template_admin/navbar',$email);
    $this->load->view('admin/form/barang/tambah_barang',$data);
    $this->load->view('templates/template_admin/footer');
  }
  public function aksi_tambah_barang(){

    $name = $this->input->post('name');
    $gambar = $_FILES['gambar'];
    if ($gambar='') {

    }else {
      $config['upload_path'] = './assets/img/barang';
      $config['allowed_types'] = 'jpg|jpeg|jfif|png';

      $this->load->library('upload',$config);
      if (!$this->upload->do_upload('gambar')) {
        echo "upload gagal"; die();
      }
      else {
        $gambar = $this->upload->data('file_name');
      }
    }
    $deskripsi = $this->input->post('deskripsi');
    $harga = $this->input->post('harga');
    $stok = $this->input->post('stok');
    $status = $this->input->post('status');
    $category = $this->input->post('category');


    $data = array(
      'nama_barang' =>$name,
      'gambar' => $gambar,
      'deskripsi' => $deskripsi,
      'harga' => $harga,
      'stok' => $stok,
      'status' => $status,
      'category' => $category
    );
    $this->M_barang->input_data_barang($data,'tb_barang');
    redirect('barang');
  }
  public function aksi_edit_data($id){
        $this->input->post('id');
        $name = $this->input->post('name');
        $gambar = $_FILES['gambar'];
        if ($gambar='') {

        }else {
          $config['upload_path'] = './assets/img/barang';
          $config['allowed_types'] = 'jpg|jpeg|jfif|png|JPG|JPEG|PNG';

          $this->load->library('upload',$config);
          if (!$this->upload->do_upload('gambar')) {
            $gambar = $this->upload->data('file_name');
            $deskripsi = $this->input->post('deskripsi');
            $harga = $this->input->post('harga');
            $stok = $this->input->post('stok');
            $status = $this->input->post('status');
            $category = $this->input->post('category');


            $data = array(
              'nama_barang' =>$name,
              'deskripsi' => $deskripsi,
              'harga' => $harga,
              'stok' => $stok,
              'status' => $status,
              'category' => $category
            );
          }
          else {
            $gambar = $this->upload->data('file_name');
            $deskripsi = $this->input->post('deskripsi');
            $harga = $this->input->post('harga');
            $status = $this->input->post('status');
            $category = $this->input->post('category');


            $data = array(
              'nama_barang' =>$name,
              'gambar' => $gambar,
              'deskripsi' => $deskripsi,
              'harga' => $harga,
              'stok' => $stok,
              'status' => $status,
              'category' => $category
            );
          }
        }
        $this->db->where('id',$id);
        $this->db->update('tb_barang',$data);
        redirect('barang');
  }
  public function delete($id){
    $data = $this->M_barang->getDataById($id)->row();
    $nama = 'assets/img/barang/'.$data->gambar;

    if(is_readable($nama) && unlink($nama)){
      $delete = $this->M_barang->hapusFile($id);
      redirect('barang');
    }else {
      echo "gagal";
      echo "$nama";
    }

  }
  public function update($id){
    $data['title']  = "Edit Data Barang";
    $email = $this->session->userdata('email');
    $data['row'] = $this->db->get_where('tb_barang',['id'=> $id])->row();
    $this->load->view('templates/template_admin/header',$data);
    $this->load->view('templates/template_admin/navbar',$email);
    $this->load->view('admin/form/barang/update',$data);
    $this->load->view('templates/template_admin/footer');
  }
}
