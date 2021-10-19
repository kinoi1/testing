<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_profil extends CI_Model {

  public function Update_profil($data,$email)
  {
    $this->db->where('email',$email);
    $this->db->update('user',$data);
  }
}
