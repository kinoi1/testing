<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {
  public function test(){
      $this->db->select('*');
      $this->db->from('user');
      $this->db->join('transaksi','transaksi.user = user.email');
      $query = $this->db->get('');
      return $query;
    }
    public function test2(){
      $this->db->select('*');
      $this->db->from('tb_barang');
      $query = $this->db->get('');
      return $query;
    }

    public function test3(){
      $this->db->select('*');
      $this->db->from('transaksi');
      $query = $this->db->get('');
      return $query;
    }

    public function getTransaksiById($id_transaksi){
      $this->db->select('*');
      $this->db->from('transaksi');
      $this->db->where('id_transaksi',$id_transaksi);
      $query = $this->db->get('');
      return $query->row_array();
    }

    public function update_pengiriman($id_transaksi,$data1){
      $this->db->where('id_transaksi',$id_transaksi);
      return $this->db->update('transaksi',$data1);
    }
}
