<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller
{
  public function __construct(){
    parent::__construct();
    $this->load->library('form_validation');
  }
  public function index()
    {
      $this->form_validation->set_rules('email','Email', 'required|valid_email|trim');
      $this->form_validation->set_rules('password','Password', 'trim|required');
      if($this->form_validation->run() == false){
      $data['title'] = 'Login Page';
      $this->load->view('templates/auth_header',$data);
      $this->load->view( 'auth/v_login');
      $this->load->view('templates/auth_footer');
    }else {
      $this->_login();
    }
    }

    private function _login(){
      $email = $this->input->post('email');
      $password = $this->input->post('password');
      $user = $this->db->get_where('user',['email' => $email])->row_array();
      if($user){
        // jika user aktif
        if($user['is_active'] == 1){
          if (password_verify($password,$user['password'])) {
              $data = [
                'email' => $user['email'],
                'role_id' => $user['role_id']
              ];
              $this->session->set_userdata($data);
              if($user['role_id'] ==1){
                redirect('admin');
              }else{
              redirect('user');
              }
          }else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Wrong password!
            </div>');
            redirect('auth');
          }
        }else {
          $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
          This email has not been activated
          </div>');
          redirect('auth');
        }
      }else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
        Email is not registered
        </div>');
        redirect('auth/index');
      }
    }

  public function register()
     {
      $this->form_validation->set_rules('name','Name','required|trim');
      $this->form_validation->set_rules('alamat','Alamat','required|trim');
      $this->form_validation->set_rules('email','Email','required|valid_email|is_unique[user.email]|trim',[
      'is_unique' => 'This email already registered']);
      $this->form_validation->set_rules('password','Password','required|min_length[3]|trim');
      if($this->form_validation->run() == false){
      $data['title'] = 'WPU registration';
      $this->load->view('templates/auth_header',$data);
      $this->load->view('auth/register');
      $this->load->view('templates/auth_footer');
    }
    else {
      $email = $this->input->post('email',true);
      $data = [
        'name' => htmlspecialchars($this->input->post('name',true)),
        'email' => htmlspecialchars($email),
        'tgl_lahir' => $this->input->post('tanggal'),
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
      Congratulation your account has been created. Please login </div>');
      redirect('auth');
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
			$this->email->from('agilsupriyanto14@gmail.com', 'Project2');
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

	public function verify(){
			$email = $this->input->get("email");
			$token = $this->input->get("token");
			$user = $this->db->get_where('user', ['email' => $email])->row_array();
			if($user){
				$user_token = $this->db->get_where('user_token', ['token' => $token]) ->row_array();
					$this->db->set("is_active", 1);
	        $this->db->where("email",$email);
	        $this->db->update("user");
	        $this->db->delete("user_token", ["email" => $email]);
	        $this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">'. $email .' sudah aktif, Silahkan login  </div>');
	            redirect('auth');
				} else
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Kesalahan pada email </div>');
					redirect('auth');
			}

  public function logout()
  {
    $this->session->unset_userdata('email');
    $this->session->unset_userdata('role_id');
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
    You have been logged out!
    </div>');
    redirect('auth');
  }
 }
