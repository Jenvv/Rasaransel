<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cLogin extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		$this->load->model('mLogin_pelanggan');
	}

	public function index()
	{
		$this->load->view('Pelanggan/layouts/header');
		$this->load->view('Pelanggan/layouts/aside');
		$this->load->view('Pelanggan/login');
		$this->load->view('Pelanggan/Layouts/footer');
	}
	public function login()
	{
		$username = strtolower($this->input->post('username'));
		$ambil = $this->db->get_where('pelanggan', ['username' => $username])->row_array();
		$password = $this->input->post('password');
		if (password_verify($password, $ambil['password'])) {
			$this->db->where('username', $username);
			$query = $this->db->get('pelanggan');
			foreach ($query->result() as $row) {
				// $additionalInfo = $this->db->get_where('data_pelamar', ['id_pelamar' => $row->id_pelamar])->row();
				$sess = array(
					'id' => $row->id_pelanggan,
					'username' => $row->username,
					'nama_pelanggan' => $row->nama_plggn,
					'email' => $row->email,
					'photo' => $row->photo,
				);
				$this->session->set_userdata($sess);
				$this->session->set_flashdata('success', '<div class="alert alert-success alert-pesan">Selamat Datang, ' . $this->session->userdata('username') . '</div>');
				redirect('pelanggan/chome');
			}
		} else {
			$this->session->set_flashdata('error', 'Username dan Password Salah!');
			redirect('pelanggan/clogin');
		}
	}


	// public function regist()
	// {
	// 	$this->form_validation->set_rules('nama', 'Nama Pelanggan', 'required');
	// 	$this->form_validation->set_rules('alamat', 'Alamat', 'required');
	// 	$this->form_validation->set_rules('no_hp', 'No Telepon', 'required|min_length[11]|max_length[13]');
	// 	$this->form_validation->set_rules('username', 'Username', 'required');
	// 	$this->form_validation->set_rules('password', 'Password', 'required');
	// 	$this->form_validation->set_rules('email', 'Email', 'required');
	// 	$this->form_validation->set_rules('ttl', 'Tempat, Tanggal Lahir', 'required');
	// 	$this->form_validation->set_rules('makanan', 'Makanan Favorite', 'required');

	// 	if ($this->form_validation->run() == FALSE) {
	// 		$this->load->view('Pelanggan/layouts/header');
	// 		$this->load->view('Pelanggan/layouts/aside');
	// 		$this->load->view('Pelanggan/registrasi');
	// 		$this->load->view('Pelanggan/Layouts/footer');
	// 	} else {
	// 		$data = array(
	// 			'nama_plggn' => $this->input->post('nama'),
	// 			'alamat' => $this->input->post('alamat'),
	// 			'no_hp' => $this->input->post('no_hp'),
	// 			'username' => $this->input->post('username'),
	// 			'password' => $this->input->post('password'),
	// 			'email' => $this->input->post('email'),
	// 			'ttl' => $this->input->post('ttl'),
	// 			'makanan' => $this->input->post('makanan')
	// 		);
	// 		$this->mLogin_pelanggan->register($data);
	// 		$this->session->set_flashdata('success', 'Anda Berhasil Register, Silahkan Login!');
	// 		redirect('pelanggan/clogin');
	// 	}
	// }

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
			// $kodeUSER = $this->get_kodUSER();
			// $kodeUSERD = $this->get_kodUSERDATA();
			$this->load->view('Pelanggan/layouts/header');
			$this->load->view('Pelanggan/layouts/aside');
			$this->load->view('Pelanggan/registrasi');
			$this->load->view('Pelanggan/Layouts/footer');
		} else {
			$ttl =  $this->input->post('tmpt') . ', ' . $this->input->post('tgl');
			// var_dump($ttl);
			$data = [
				'nama_plggn' => $this->input->post('nama'),
				'alamat' => $this->input->post('alamat'),
				'no_hp' => $this->input->post('no_hp'),
				'username' => strtolower($this->input->post('username', true)),
				'password' => password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
				'email' => $this->security->xss_clean($this->input->post('email', TRUE)),
				'ttl' => $ttl,
				'makanan' => $this->input->post('makanan'),
				'photo' => 'default.png',
			];
			if ($this->db->insert('pelanggan', $data)) {
				$this->session->set_flashdata('success', 'Anda Berhasil Register, Silahkan Login!');
				redirect('pelanggan/clogin');
			} else {
				$this->session->set_flashdata('error', 'Registrasi Gagal!');
				redirect('pelanggan/clogin/registrasi');
			}
			// $this->session->set_flashdata('error', 'Registrasi Gagal!');
			// redirect('pelanggan/clogin/registrasi');
		}
	}

	public function logout()
	{
		$this->cart->destroy();
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('nama_pelanggan');
		$this->session->unset_userdata('level');
		$this->session->set_flashdata('success', 'Anda Berhasil LogOut!');
		redirect('pelanggan/clogin');
	}
}

/* End of file cLogin.php */
