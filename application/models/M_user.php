<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

  public function getdaftar_akun(){
    $this->db->SELECT('*');
    $this->db->FROM('user');
    $query = $this->db->get();
    return $query->result();
  }
  public function input_data($data){
    $this->db->insert('user',$data);
  }
  public function getData($id){
    $query = $this->db->query("SELECT * FROM user WHERE `id` =".$id);
    return $query->row();
  }
  public function updateData($id){
    $id = $this->input->post('id');
    $name = $this->input->post('name');
    $tgl_lahir = $this->input->post('tgl_lahir');
    $alamat = $this->input->post('alamat');
    $password = $this->input->post('password');
    $image = $this->input->post('image');
    $role_id = $this->input->post('role_id');
    $is_active = $this->input->post('is_active');
    $day_created = $this->input->post('day_created');

    $data = array(
      'name' =>$name,
      'email' =>$email,
      'tgl_lahir' =>$tgl_lahir,
      'alamat' =>$alamat,
      'password' =>$password,
      'image' => $image,
      'role_id' => $role_id,
      'is_active' =>$is_active,
      'day_created' => $day_created,

    );
    $where = array(
          'id' => $id
    );
    $this->M_user->update_data($where,$data,'user');
    redirect('admin/daftar_akun');

  }

 public function edit_data($where,$data){
   return $this->db->get_where($data,$where);
 }
 // daftar barang yang akan dijual

 public function getdaftar_barang(){
   $this->db->SELECT('*');
   $this->db->FROM('tb_barang');
   $query = $this->db->get();
   return $query->result();
 }
 //sudah
 public function getdaftar_keranjang($email){
   return $this->db->get_where('keranjang',['email' => $email])->result_array();
 }

 public function getDaftarBarangById($id){
   return $this->db->get_where('tb_barang',['id' => $id])->row_array();
 }
 public function find($id){
   $result = $this->db->where('id',$id)->get('keranjang');

    return $result->rows();

 }
 
 public function getElementByEmail($email){
 return $this->db->get_where('user',['email' => $email])->row_array();
}
}
