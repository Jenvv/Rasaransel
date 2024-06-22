<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cLogin extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->load->model('mLogin_pelanggan');
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->view('Pelanggan/layouts/header');
		$this->load->view('Pelanggan/layouts/aside');
		$this->load->view('Pelanggan/auth/login');
		$this->load->view('Pelanggan/Layouts/footer');
	}
	// public function login()
	// {
	// 	$username = strtolower($this->input->post('username'));
	// 	$ambil = $this->db->get_where('pelanggan', ['username' => $username])->row_array();
	// 	$password = $this->input->post('password');
	// 	if (password_verify($password, $ambil['password'])) {
	// 		$this->db->where('username', $username);
	// 		$query = $this->db->get('pelanggan');
	// 		foreach ($query->result() as $row) {
	// 			// $additionalInfo = $this->db->get_where('data_pelamar', ['id_pelamar' => $row->id_pelamar])->row();
	// 			$sess = array(
	// 				'id_pelanggan' => $row->id_pelanggan,
	// 				'username' => $row->username,
	// 				'nama_pelanggan' => $row->nama_plggn,
	// 				'email' => $row->email,
	// 				'photo' => $row->photo,
	// 			);
	// 			$this->session->set_userdata($sess);
	// 			$this->session->set_flashdata('success', '<div class="alert alert-success alert-pesan">Selamat Datang, ' . $this->session->userdata('username') . '</div>');
	// 			redirect('pelanggan/chome');
	// 		}
	// 	} else {
	// 		$this->session->set_flashdata('error', 'Username dan Password Salah!');
	// 		redirect('pelanggan/clogin');
	// 	}
	// }
	// public function login()
	// {
	// 	$username = strtolower($this->input->post('username'));
	// 	$ambil = $this->db->get_where('pelanggan', ['username' => $username])->row_array();
	// 	$password = $this->input->post('password');
	// 	if (password_verify($password, $ambil['password'])) {
	// 		$this->db->where('username', $username);
	// 		$query = $this->db->get('pelanggan');
	// 		foreach ($query->result() as $row) {
	// 			$sess = array(
	// 				'id_pelanggan' => $row->id_pelanggan,
	// 				'username' => $row->username,
	// 				'nama_pelanggan' => $row->nama_plggn,
	// 				'email' => $row->email,
	// 				'photo' => $row->photo,
	// 			);
	// 			$this->session->set_userdata($sess);

	// 			// Get the current session ID
	// 			$session_id = $this->session->session_id;

	// 			// Delete the existing session with the same session ID from the ci_sessions table
	// 			$this->db->where('id', $session_id);
	// 			$this->db->delete('ci_sessions');

	// 			// Save session data to the database
	// 			$ip_address = $this->input->ip_address();
	// 			$timestamp = time();
	// 			$data = serialize($sess);
	// 			$this->db->insert('ci_sessions', array(
	// 				'id' => $session_id,
	// 				'ip_address' => $ip_address,
	// 				'timestamp' => $timestamp,
	// 				'data' => $data
	// 			));

	// 			$this->session->set_flashdata('success', '<div class="alert alert-success alert-pesan">Selamat Datang, ' . $this->session->userdata('username') . '</div>');
	// 			redirect('pelanggan/chome');
	// 		}
	// 	} else {
	// 		$this->session->set_flashdata('error', 'Username dan Password Salah!');
	// 		redirect('pelanggan/clogin');
	// 	}
	// }

	public function login()
	{
		$username = strtolower($this->input->post('username'));
		$password = $this->input->post('password');

		$pelanggan = $this->db->get_where('pelanggan', ['username' => $username])->row_array();

		if ($pelanggan && password_verify($password, $pelanggan['password'])) {
			$sess_pelanggan = array(
				'id_pelanggan' => $pelanggan['id_pelanggan'],
				'username' => $pelanggan['username'],
				'nama_pelanggan' => $pelanggan['nama_plggn'],
				'email' => $pelanggan['email'],
				'photo' => $pelanggan['photo'],
				'logged_in' => TRUE
			);
			$this->session->set_userdata($sess_pelanggan);

			// Cek apakah pelanggan juga terdaftar sebagai merchant
			$merchant = $this->db->get_where('user', ['username' => $username])->row_array();
			if ($merchant && password_verify($password, $merchant['password']) && $merchant['is_active'] == '1') {
				$sess_merchant = array(
					'id' => $merchant['id_user'],
					'username' => $merchant['username'],
					'nama' => $merchant['nama'],
					'is_active' => $merchant['is_active'],
					'is_merchant' => TRUE
				);
				$this->session->set_userdata($sess_merchant);
			}

			$this->session->set_flashdata('success', 'Selamat Datang, ' . $this->session->userdata('username'));
			redirect('pelanggan/chome');
		} else {
			$this->session->set_flashdata('error', 'Username dan Password Salah!');
			redirect('pelanggan/clogin');
		}
	}

	public function merchant_dashboard()
	{
		if ($this->session->userdata('logged_in') && $this->session->userdata('is_merchant')) {
			redirect('admin/cDashboard');
		} else {
			redirect('pelanggan/clogin');
		}
	}

	//registrasi pelanggan
	public function registrasi()
	{
		$rules = [

			[
				'field' => 'nama',
				'label' => 'Nama Pelanggan',
				'rules' => 'required',
				'errors' => [
					'required' => 'Nama Harus Di Isi!'
				]
			],
			[
				'field' => 'no_hp',
				'label' => 'No Telepon',
				'rules' => 'required|min_length[11]|max_length[13]',
				'errors' => [
					'required' => 'No Telepon Harus Di Isi!'
				]
			],
			[
				'field' => 'tmpt',
				'label' => 'Tanggal Lahir',
				'rules' => 'required',
				'errors' => [
					'required' => 'Tempat Lahir Harus Di Isi!'
				]
			],
			[
				'field' => 'tgl',
				'label' => 'Tanggal Lahir',
				'rules' => 'required',
				'errors' => [
					'required' => 'Tanggal Lahir Harus Di Isi!'
				]
			],
			[
				'field' => 'alamat',
				'label' => 'Alamat',
				'rules' => 'required',
				'errors' => [
					'required' => 'Alamat Harus Di Isi!'
				]
			],
			[
				'field' => 'username',
				'label' => 'Username',
				'rules' => 'trim|required|min_length[5]|is_unique[pelanggan.username]',
				'errors' => [
					'is_unique' => 'Username sudah digunakan, silakan pilih username lain.',
					'required' => 'Username Harus Di Isi!'
				]
			],
			[
				'field' => 'email',
				'label' => 'Email',
				'rules' => 'trim|required|min_length[5]|is_unique[pelanggan.email]',
				'errors' => [
					'is_unique' => 'Email sudah digunakan, silakan pilih username lain.',
					'required' => 'Email Harus Di Isi!'
				]
			],
			[
				'field' => 'password',
				'label' => 'Password',
				'rules' => 'trim|required|min_length[4]|matches[password2]',
				'errors' => [
					'required' => 'Password Harus Di Isi!',
					'matches' => 'Password Harus Sama!'

				]
			],
			[
				'field' => 'password2',
				'label' => 'Repeat Password',
				'rules' => 'trim|required|matches[password]',
				'errors' => [
					'required' => 'Ulangi Password Harus Di Isi!',
					'matches' => 'Password Harus Sama Dengan Sebelumnya!'
				]
			]
		];
		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run() == FALSE) {

			$this->load->view('Pelanggan/layouts/header');
			$this->load->view('Pelanggan/layouts/aside');
			$this->load->view('Pelanggan/auth/registrasi');
			$this->load->view('Pelanggan/Layouts/footer');
		} else {
			$ttl =  $this->input->post('tmpt') . ', ' . $this->input->post('tgl');
			$data = [
				'nama_plggn' => $this->input->post('nama'),
				'alamat' => $this->input->post('alamat'),
				'no_hp' => $this->input->post('no_hp'),
				'username' => strtolower($this->input->post('username', true)),
				'password' => password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
				'email' => $this->security->xss_clean($this->input->post('email', TRUE)),
				'ttl' => $ttl,
				'photo' => 'default.jpg',
			];
			if ($this->db->insert('pelanggan', $data)) {
				$this->session->set_flashdata('success', 'Anda Berhasil Register, Silahkan Login!');
				redirect('pelanggan/clogin');
			} else {
				$this->session->set_flashdata('error', 'Registrasi Gagal!');
				redirect('pelanggan/clogin/registrasi');
			}
		}
	}

	public function logout()
	{

		$this->session->sess_destroy();
		$this->session->set_flashdata('success', 'Anda telah berhasil logout.');
		redirect(base_url(''));
	}
}

/* End of file cLogin.php */
