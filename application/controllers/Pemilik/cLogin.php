<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cLogin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mLogin_pemilik');
	}
	public function index()
	{
		$data['title'] = 'Login Pemilik';
		$this->load->view('pemilik/login', $data);
	}
	public function login()
	{
		$username = strtolower($this->input->post('username'));
		$ambil = $this->db->get_where('admin', ['username' => $username])->row_array();
		$password = $this->input->post('password');
		if (password_verify($password, $ambil['password'])) {
			$this->db->where('username', $username);
			$query = $this->db->get('admin');
			foreach ($query->result() as $row) {
				$sess = array(
					'id' => $row->id,
					'username' => $row->username,
					'nama' => $row->nama,
					'level_user' => $row->level_user
				);
				$this->session->set_userdata($sess);
				$this->session->set_flashdata('success', '<div class="alert alert-success alert-pesan">Selamat Datang, ' . $this->session->userdata('username') . '</div>');
				redirect('Pemilik/cDashboard');
			}
		} else {
			$this->session->set_flashdata('error', 'Username dan Password Salah!');
			redirect('pemilik/clogin');
		}
	}

	public function logout()
	{
		$this->session->set_flashdata('success', 'Anda Berhasil Logout!');
		$this->session->sess_destroy();
		redirect(base_url('pemilik/clogin'));
	}
}

/* End of file cLogin.php */
