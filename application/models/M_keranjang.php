<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_keranjang extends CI_Model {

  public function getdaftar_keranjang($email){
    return $this->db->get_where('keranjang',['email' => $email])->result_array();
  }
  public function input_data_keranjang($data){
    $this->db->insert('keranjang',$data);
  }
  public function getDataById($id_barang){
    $this->db->where('id_barang',$id_barang);
    return $this->db->get('keranjang');
  }

  public function hapusKeranjang($data){
    $this->db->where('id_barang',$data);
    return $this->db->delete('keranjang');
  }

}
