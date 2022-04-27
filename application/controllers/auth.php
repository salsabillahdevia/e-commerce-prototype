<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{
	public function __construct()
	{
		parent:: __construct();
		$this->load->library('form_validation');
	}
	public function index()
	{	   
		// Validasi Untuk Email
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		// Validasi Untuk Password
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation-> run() == false){
			$this->load->view('templates/auth_header');
			$this->load->view('auth/login');
			$this->load->view('templates/auth_footer');
		} else {
			// validasinya success
			$this->_login();
		}
	}

			// validasinya success
	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user', ['email' => $email])->row_array();
		
		// Jika usernya ada
		if($user) {
			// jika user aktif
			if($user['is_active'] == 1){

				// Cek Passwordnya
				if(password_verify($password, $user['password'])) {
					$data = [
						'email' => $user['email'],
						'role_id' => $user['role_id']
					];
					$this->session->set_userdata('$data');
					redirect('user');

				} else {
				// Passwordnya Salah
					$this->session->set_flashdata('message', 
		'<div class="alert alert-danger" role="alert">Password Salah!</div>');
		redirect('auth');
				}

			} else {
				// Jika Gagal
				$this->session->set_flashdata('message', 
		'<div class="alert alert-danger" role="alert">Email Tidak Teraktivasi!</div>');
		redirect('auth');
			}

		} else {
			// Tidak ada user dari email
			$this->session->set_flashdata('message', 
		'<div class="alert alert-danger" role="alert">Email Tidak Terdaftar!</div>');
		redirect('auth');

		}

	}


	public function registrasi()
	{
		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', 
		[
			'is_unique' => 'Email Sudah Tersedia!'
		]);
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]');

		// Panggil Kembali Form Registrasi Jika Gagal
		if( $this->form_validation-> run() == false) {

		$this->load->view('templates/auth_header');
		$this->load->view('auth/registrasi');
		$this->load->view('templates/auth_footer');
	}else{
		$data = [
			'name' => htmlspecialchars($this->input->post('name', true)),
			'email' => htmlspecialchars($this->input->post('email', true)),
			'image' => 'dafault.jpg',
			'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
			'role_id' => 2,
			'is_active' => 1,
			'date_created' => time()
		];

		// Data Di simpan ke table User
		$this->db->insert('user', $data);
		// Setelah data di input Redirect ke Auth
		$this->session->set_flashdata('message', 
		'<div class="alert alert-success" role="alert">Selamat Account Anda Sudah Dibuat! Silahkan Login
		</div>');
		redirect('auth');
	}
			
	}



	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');

		$this->session->set_flashdata('message', 
		'<div class="alert alert-success" role="alert">Kamu Telah Keluar</div>');
		redirect('auth');
		
	}


}
