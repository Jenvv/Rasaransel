<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cUser extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		$this->load->model('mUser');
		$this->getsecurity();
		$this->protect->protect_admin();
	}
	function getsecurity($value = '')
	{
		$is_admin = $this->session->userdata('level_user') == 1;
		if (empty($is_admin)) {
			$this->session->sess_destroy();
			redirect('admin/clogin');
		}
	}

	public function index()
	{
		$this->form_validation->set_rules('alamat', 'Alamat User', 'required');
		$this->form_validation->set_rules('no_hp', 'No Telepom', 'required|min_length[11]|max_length[13]');
		$this->form_validation->set_rules('level', 'Level User', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');


		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'user' => $this->mUser->select()
			);
			$this->load->view('pemilik/Layouts/head');
			$this->load->view('pemilik/user/user', $data);
			$this->load->view('pemilik/Layouts/footer');
		} else {
			$data = array(
				'alamat' => $this->input->post('alamat'),
				'no_hp' => $this->input->post('no_hp'),
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				'level_user' => $this->input->post('level')
			);
			$this->mUser->insert($data);
			$this->session->set_flashdata('success', 'Data User Berhasil Ditambahkan!');
			redirect('Admin/cUser');
		}
	}
	public function update($id)
	{
		$data = array(
			'alamat' => $this->input->post('alamat'),
			'no_hp' => $this->input->post('no_hp'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'level_user' => $this->input->post('level')
		);
		$this->mUser->update($id, $data);
		$this->session->set_flashdata('success', 'Data User Berhasil Diperbaharui!');
		redirect('Admin/cUser');
	}
	public function delete($id)
	{
		$this->mUser->delete($id);
		$this->session->set_flashdata('success', 'Data User Berhasil Dihapus!');
		redirect('Admin/cUser');
	}
}

/* End of file cUser.php */
