<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cLogin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mLogin_admin');
	}


	public function index()
	{
		$data['title'] = 'Login Pemilik';
		$this->load->view('admin/login', $data);
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

	public function login()
	{
		$username = strtolower($this->input->post('username'));
		$ambil = $this->db->get_where('user', ['username' => $username])->row_array();
		$password = $this->input->post('password');
		if (password_verify($password, $ambil['password'])) {
			$this->db->where('username', $username);
			$query = $this->db->get('user');
			foreach ($query->result() as $row) {
				$sess = array(
					'id' => $row->id_user,
					'username' => $row->username,
					'nama' => $row->nama,
					'level_user' => $row->level_user
				);
				$this->session->set_userdata($sess);
				$this->session->set_flashdata('success', 'Selamat Datang, ' . '<strong>' . $this->session->userdata('nama') . '</strong>');
				redirect('Admin/cDashboard');
			}
		} else {
			$this->session->set_flashdata('error', 'Username dan Password Salah!');
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
