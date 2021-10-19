<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_checkout extends CI_Model {
 //memanggil seluruh data berdasarkan user(email)
  public function getdaftar_checkout($email){
   return $this->db->get_where('transaksi',['user' => $email])->result_array();
    /* $this->db->select('*');
    $this->db->from('transaksi');
    $this->db->join('pengiriman','pengiriman.id_transaksi = transaksi.id_transaksi');
    $this->db->where( 'user',$email);
    $query = $this->db->get('')->result_array();
    return $query;*/
  }
// INPUT DATA KERANJANG
  public function input_data_keranjang($data){
    $this->db->insert('keranjang',$data);
  }
//TAMPILKAN DATA BERDASARKAN ID_BARANG
  public function getDataById($id_barang){
    $this->db->where('id_barang',$id_barang);
    return $this->db->get('keranjang');
  }

// HAPUS DATA KERANJANG
  public function hapusKeranjang($data){
    $this->db->where('id_barang',$data);
    return $this->db->delete('keranjang');
  }

// REFERENSI JOIN 3 TABLE
  public function funcname($id)
  {
      $this->db->select('*');
      $this->db->from('Album a');
      $this->db->join('Category b', 'b.cat_id=a.cat_id', 'left');
      $this->db->join('Soundtrack c', 'c.album_id=a.album_id', 'left');
      $this->db->where('c.album_id',$id);
      $this->db->order_by('c.track_title','asc');
      $query = $this->db->get();
      if($query->num_rows() != 0)
      {
          return $query->result_array();
      }
      else
      {
          return false;
      }
  }
// JOIN TABLE USER DAN TABLE TRANSAKSI
    public function get_by_role($id_transaksi)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('transaksi','transaksi.user = user.email');
        $this->db->where( 'id_transaksi',$id_transaksi);
        $query = $this->db->get('');
        return $query;
    }
    public function getTransaksiById($id_transaksi){
      $this->db->where('id_transaksi',$id_transaksi);
      return $this->db->get('transaksi');
    }
}
