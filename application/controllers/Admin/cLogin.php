<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cLogin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->load->model('mLogin_admin');
		$this->load->library('session');
	}


	public function index()
	{
		$data['title'] = 'Login Pemilik';
		$this->load->view('Pelanggan/layouts/header');
		$this->load->view('Pelanggan/layouts/aside');
		$this->load->view('admin/loginn', $data);
		$this->load->view('Pelanggan/Layouts/footer');
		// $this->form_validation->set_rules('username', 'Username', 'required');
		// $this->form_validation->set_rules('password', 'Password', 'required');

		// if ($this->form_validation->run() == FALSE) {
		// 	$this->load->view('Admin/login');
		// } else {
		// 	$username = $this->input->post('username');
		// 	$password = $this->input->post('password');
		// 	$data = $this->mLogin_admin->login($username, $password);

		// 	if ($data) {
		// 		// $id = $data->id_user;
		// 		// $this->session->set_userdata('id', $id);
		// 		$sess = array(
		// 			'id' => $data->id_user,
		// 			'username' => $data->username,
		// 			'nama' => $data->nama,
		// 			'foto' => $data->foto,
		// 		);
		// 		$this->session->set_userdata($sess);

		// 		if ($data->level_user == '1') {
		// 			$this->session->set_flashdata('success', 'Selamat Datang Admin!');
		// 			redirect('Admin/cDashboard');
		// 		} else if ($data->level_user == '2') {
		// 			$this->session->set_flashdata('success', 'Selamat Datang Pemilik!');
		// 			redirect('Pemilik/cDashboard');
		// 		}
		// 	} else {
		// 		$this->session->set_flashdata('error', 'Username dan Password Salah!');
		// 		redirect('admin/clogin');
		// 	}
		// }

	}

	// public function login()
	// {
	// 	$username = strtolower($this->input->post('username'));
	// 	$ambil = $this->db->get_where('user', ['username' => $username])->row_array();
	// 	$password = $this->input->post('password');

	// 	if ($ambil) {
	// 		if (password_verify($password, $ambil['password'])) {
	// 			if ($ambil['is_active'] == '0') {
	// 				$this->session->set_flashdata('error', 'Akun Anda belum terverifikasi!');
	// 				redirect('admin/clogin');
	// 			} else {
	// 				$sess = array(
	// 					'id' => $ambil['id_user'],
	// 					'username' => $ambil['username'],
	// 					'nama' => $ambil['nama'],
	// 					'is_active' => $ambil['is_active']
	// 				);
	// 				$this->session->set_userdata($sess);
	// 				$this->session->set_flashdata('success', 'Selamat Datang, ' . '<strong>' . $this->session->userdata('nama') . '</strong>');
	// 				redirect('Admin/cDashboard');
	// 			}
	// 		} else {
	// 			$this->session->set_flashdata('error', 'Username dan Password Salah!');
	// 			redirect('admin/clogin');
	// 		}
	// 	} else {
	// 		$this->session->set_flashdata('error', 'Username tidak ditemukan!');
	// 		redirect('admin/clogin');
	// 	}
	// }

	public function login()
	{
		$username = strtolower($this->input->post('username'));
		$password = $this->input->post('password');
		$merchant = $this->db->get_where('user', ['username' => $username])->row_array();
		if ($merchant) {
			if (password_verify($password, $merchant['password'])) {
				if ($merchant['is_active'] == '0') {
					$this->session->set_flashdata('error', 'Akun Anda belum terverifikasi!');
					redirect('admin/clogin');
				} else {
					$sess_merchant = array(
						'id' => $merchant['id_user'],
						'username' => $merchant['username'],
						'nama' => $merchant['nama'],
						'is_active' => $merchant['is_active'],
						'is_merchant' => TRUE
					);
					$this->session->set_userdata($sess_merchant);

					// Cek pelanggan terdaftar sebagai merchant
					$pelanggan = $this->db->get_where('pelanggan', ['username' => $username])->row_array();
					if (
						$pelanggan && password_verify($password, $pelanggan['password'])
					) {
						$sess_pelanggan = array(
							'id_pelanggan' => $pelanggan['id_pelanggan'],
							'username' => $pelanggan['username'],
							'nama_pelanggan' => $pelanggan['nama_plggn'],
							'email' => $pelanggan['email'],
							'photo' => $pelanggan['photo'],
							'logged_in' => TRUE
						);
						$this->session->set_userdata($sess_pelanggan);
					}

					$this->session->set_flashdata('success', 'Selamat Datang, ' . $this->session->userdata('nama'));
					redirect('Admin/cDashboard');
				}
			} else {
				$this->session->set_flashdata('error', 'Username dan Password Salah!');
				redirect('admin/clogin');
			}
		} else {
			$this->session->set_flashdata('error', 'Username tidak ditemukan!');
			redirect('admin/clogin');
		}
	}


	public function logout()
	{
		$this->session->set_flashdata('success', 'Anda Berhasil Logout!');
		$this->session->sess_destroy();
		redirect(base_url('admin/clogin'));
	}
}

/* End of file cLogin.php */
