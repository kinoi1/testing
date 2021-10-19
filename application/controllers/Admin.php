<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
  public function __construct(){
    parent::__construct();
    $this->load->model('M_user');
    $this->load->model('M_admin');
    is_logged_in();
  }
  public function index()
  {
    $this->load->view('templates/template_admin/header');
    $this->load->view('templates/template_admin/navbar');
    $this->load->view('admin/dashboard_admin');
    $this->load->view('templates/template_admin/footer');


  }
  public function tables(){
    $this->load->view('templates/template_admin/header');
    $this->load->view('templates/template_admin/navbar');
    $this->load->view('admin/tables');
    $this->load->view('templates/tem
    plate_admin/footer');
  }

  public function daftar_akun(){
    $data['title'] = 'WPU registration';
    $daftar_user = $this->M_user->getdaftar_akun();
    $data = array('data_akun' => $daftar_user);
    $this->load->view('templates/template_admin/header',$data);
    $this->load->view('templates/template_admin/navbar',$data);
    $this->load->view('admin/daftar_akun',$data);
    $this->load->view('templates/template_admin/footer');
  }

  public function aksi_daftar_akun(){

    $this->form_validation->set_rules('name','Name','required|trim');
    $this->form_validation->set_rules('alamat','Alamat','required|trim');
    $this->form_validation->set_rules('email','Email','required|valid_email|is_unique[user.email]|trim',[
    'is_unique' => 'This email already registered']);
    $this->form_validation->set_rules('password','Password','required|min_length[3]|trim');
    if($this->form_validation->run() == false){
    $data['title'] = 'WPU registration';

    $this->load->view('templates/template_admin/header',$data);
    $this->load->view('templates/template_admin/navbar',$data);
    $this->load->view('admin/form/tambah');
    $this->load->view('templates/template_admin/footer');

  }
  else {
    $email = $this->input->post('email',true);
    $data = [
      'name' => htmlspecialchars($this->input->post('name',true)),
      'email' => htmlspecialchars($email),
      'tgl_lahir' => $this->input->post('tgl_lahir'),
      'alamat' => $this->input->post('alamat'),
      'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
      'image' => 'default.jpg',
      'role_id' => 2,
      'is_active' =>0,
      'day_created' => time()
    ];

    //siapkan $token
    $token = base64_encode(random_bytes(32));
    $user_token = [
      'email' => $email,
      'token' => $token,
      'date_created' =>time()
    ];
    $this->db->insert('user',$data);
    $this->db->insert('user_token',$user_token);
    $this->_sendEmail($token,'verify');
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
    Congratulation account has been created. check gmail for activate the account </div>');
    redirect('admin/daftar_akun');
  }
  }
  private function _sendEmail($token, $type){
			$config = [
				'protocol' => 'smtp',
				'smtp_host' => 'ssl://smtp.googlemail.com',
				'smtp_user' => 'agilsupriyanto12@gmail.com',
				'smtp_pass' => '4g1ll1l1',
				'smtp_port' => 465,
				'mailtype' => 'html',
				'charset' => 'utf-8',
				'newline' => "\r\n",
			];
			$this->load->library('email',$config);
			$this->email->from('agilsupriyanto12@gmail.com', 'Project2');
			$this->email->to($this->input->post('email'));
      $this->email->subject('Verifikasi akun');
      $this->email->message('Terima Kasih telah mendaftar, Silahkan klik link ini untuk melakukan verifikasi <a href= "'.base_url(). 'auth/verify?email='. $this->input->post('email') .
      '&token=' . $token . '">Aktivasi</a> ');
			if($type == 'verify'){
				$this->email->subject('Verifikasi Akun Project2');
				$this->email->message('Terima Kasih telah mendaftar, Silahkan klik link ini untuk melakukan verifikasi <a href= "'.base_url(). 'auth/verify?email='. $this->input->post('email') .
				'&token=' . $token . '">Aktivasi</a> ');
			}
      if($this->email->send()){
				return true;
			} else {
				echo $this->email->print_debugger();
				die;
			}
		}
  // ini adalah percobaan CRUD
  public function update($id){

    if($this->input->server('REQUEST_METHOD') === 'POST'){
      $data = $this->input->post();
      $this->db->where('id',$id);
      $this->db->update('user',$data);
      redirect('admin/daftar_akun');
    }else {

    $data['row'] = $this->db->get_where('user',['id'=>$id])->row();

    $this->load->view('templates/template_admin/header');
    $this->load->view('templates/template_admin/navbar');
    $this->load->view('admin/form/edit',$data);
    $this->load->view('templates/template_admin/footer');
  }
  }
 public function delete($id){

   $this->db->where('id',$id);
   $this->db->delete('user');
   redirect('admin/daftar_akun');
 }

 public function profil_admin(){
   $data['title'] = 'Profil';
   $data['user'] = $this->db->get_where('user',['email' =>
   $this->session->userdata('email')])->row_array();
   $this->load->view('templates/template_admin/header',$data);
   $this->load->view('templates/template_admin/navbar');
   $this->load->view('admin/profil_admin',$data);
   $this->load->view('templates/template_admin/footer');
 }


public function kirim_barang($id_transaksi){

  $data['pengiriman'] = $this->M_admin->getTransaksiById($id_transaksi);
  $this->load->view('templates/template_admin/header');
  $this->load->view('templates/template_admin/navbar');
  $this->load->view('admin/order/pengiriman',$data);
  $this->load->view('templates/template_admin/footer');
}

public function aksi_resi(){
  $resi         = $this->input->post('resi');
  $id_transaksi = $this->input->post('id_transaksi');

 $data = array(
   'id_transaksi' => $id_transaksi,
   'resi'         => $resi
 );

$data1 = array(
  'status' => 'pengiriman'
);

 $this->db->insert('pengiriman',$data);
 $data1 = $this->M_admin->update_pengiriman($id_transaksi,$data1);
 redirect('Admin/lp_orders');
}
 public function lp_pemesanan(){

   $data1 = $this->M_admin->test()->result();
   $data = array('data' =>$data1);
   $this->load->view('templates/template_admin/header');
   $this->load->view('templates/template_admin/navbar');
   $this->load->view('admin/laporan/transaksi',$data);
   $this->load->view('templates/template_admin/footer');
 }

 public function lp_orders(){

   $data1 = $this->M_admin->test()->result();
   $data = array('data' =>$data1);
   $this->load->view('templates/template_admin/header');
   $this->load->view('templates/template_admin/navbar');
   $this->load->view('admin/laporan/orders',$data);
   $this->load->view('templates/template_admin/footer');
 }

 public function lp_stok(){
   $data1 = $this->M_admin->test2()->result();
   $data = array('data' =>$data1);
   $this->load->view('templates/template_admin/header');
   $this->load->view('templates/template_admin/navbar');
   $this->load->view('admin/laporan/stok',$data);
   $this->load->view('templates/template_admin/footer');
 }

 public function lp_keuangan(){
   $data1 = $this->M_admin->test3()->result();
   $data = array('data' =>$data1);
   $this->load->view('templates/template_admin/header');
   $this->load->view('templates/template_admin/navbar');
   $this->load->view('admin/laporan/keuangan',$data);
   $this->load->view('templates/template_admin/footer');
 }

 public function pdf_keuangan(){
   $data1 = $this->M_admin->test3()->result();
   $data = array('data' =>$data1);
   $this->load->view('templates/template_admin/header');
   $this->load->view('admin/laporan/print_keuangan',$data);
 }

 public function pdf_stok(){
   $data1 = $this->M_admin->test2()->result();
   $data = array('data' =>$data1);
   $this->load->view('templates/template_admin/header');
   $this->load->view('admin/laporan/print_stok',$data);
 }
}
