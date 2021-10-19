<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller {

   public function index(){
     	$this->load->view('templates/header');
    	$this->load->view('guest/index');
      $this->load->view('templates/footer');
   }
   public function login(){
     	$this->load->view('templates/header');
      $this->load->view('v_login');
      $this->load->view('templates/footer');
   }
}
