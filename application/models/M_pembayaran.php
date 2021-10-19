<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pembayaran extends CI_Model {
public function get_by_role($id_transaksi)
{
    $this->db->select('*');
    $this->db->from('pembayaran');
    $this->db->join('transaksi','transaksi.metode_pembayaran = pembayaran.payment_gateway');
    $this->db->where( 'id_transaksi',$id_transaksi);
    $query = $this->db->get('');
    return $query;
  }

  public function getTransaksiById($id_transaksi){
    $this->db->where('id_transaksi',$id_transaksi);
    return $this->db->get('transaksi');
  }
  public function getDaftarBarangById($id_transaksi){
    return $this->db->get_where('transaksi',['id_transaksi' => $id_transaksi])->row_array();
  }
}
