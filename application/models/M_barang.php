<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_barang extends CI_Model {

  public function getAllbarang(){
    return $this->db->get('tb_barang')->result_array();
  }
  public function getdaftar_barang(){
    $this->db->SELECT('*');
    $this->db->FROM('tb_barang');
    $query = $this->db->get();
    return $query->result();
  }
  public function input_data_barang($data)
  {
    $this->db->insert('tb_barang',$data);
  }
  public function getDataById($id){
    $this->db->where('id',$id);
    return $this->db->get('tb_barang');
  }
  public function hapusFile($id){
    $this->db->where('id',$id);
    return $this->db->delete('tb_barang');
  }
  public function update_data($id,$data){
      $this->db->where('id',$id);
      return $this->db->update('tb_barang',$data);
  }
//Programming unpas
  public function getbarang($limit,$start){
    return $this->db->get('tb_barang',$limit,$start);
  }
  public function countAllbarang(){
    return $this->db->get('tb_barang')->num_rows();
  }

}
