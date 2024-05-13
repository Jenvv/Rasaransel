<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cProfil extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mProfil');
		$this->load->library('form_validation');
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->helper("file");
		$this->getsecurity();
	}

	function getsecurity($value = '')
	{
		$id = $this->session->userdata('id_pelanggan');
		if (empty($id)) {
			$this->session->sess_destroy();
			redirect('pelanggan/clogin');
		}
	}

	public function index()
	{
		$getData = $this->mProfil->getData('pelanggan', ['id_pelanggan' => $this->session->userdata('id_pelanggan')]);
		if ($this->security->xss_clean($this->input->post('submit', TRUE)) == 'submit') {
			$p = $getData->row();
			$this->form_validation->set_rules(
				'no_hp',
				'Nomor HP',
				"required|min_length[8]|max_length[15]|regex_match[/^[0-9]+$/]",
				array(
					'required' => '{field} wajib diisi',
					'min_length' => '{field} minimal 8 karakter',
					'max_length' => '{field} maksimal 15 karakter',
					'regex_match' => '{field} hanya boleh angka'
				)
			);
			$this->form_validation->set_rules(
				'alamat',
				'Alamat',
				"required|min_length[10]|max_length[255]|regex_match[/^[A-Z a-z.0-9-,']+$/]",
				array(
					'required' => '{field} wajib diisi',
					'min_length' => '{field} minimal 10 karakter',
					'max_length' => '{field} maksimal 255 karakter',
					'regex_match' => 'Data {field} yang anda masukkan tidak valid'
				)
			);

			if ($this->form_validation->run() == TRUE) {
				// Foto
				$foto = $p->photo;
				$config['upload_path']      = './asset/pelanggan/';
				$config['allowed_types']    = 'jpg|png|jpeg';
				$config['max_size']         = '2048';
				$config['file_name']        =  'foto_' . $this->session->userdata('id_pelanggan');
				$this->load->library('upload', $config);
				// $this->upload->initialize($config);
				if ($this->upload->do_upload('fotouser')) {

					$b = $this->upload->data();
					$foto = $b['file_name'];
					$this->load->library('image_lib');
					$config2['image_library']   = 'gd2';
					$config2['source_image']    = './asset/pelanggan/' . $foto;
					$config2['new_image']       = './asset/pelanggan/' . $foto;
					$config2['maintain_ratio']  = FALSE;
					if ($p->photo != 'default.jpg' && $p->photo != '') {
						$imagePath = FCPATH . 'asset/pelanggan/';
						$mainImagePath = $imagePath . $p->photo;
						if (file_exists($mainImagePath)) {
							unlink($mainImagePath);
						}
					}
				}
				$ttl =  $this->input->post('tmpt') . ', ' . $this->input->post('tgl');
				$update = [
					'nama_plggn' => $this->security->xss_clean($this->input->post('nama', TRUE)),
					'no_hp' => $this->security->xss_clean($this->input->post('no_hp', TRUE)),
					'alamat' => $this->security->xss_clean($this->input->post('alamat', TRUE)),
					'ttl' => $ttl,
					'photo' => $foto,
				];
				$where = [
					'id_pelanggan' => $this->security->xss_clean($p->id_pelanggan)
				];
				$up = $this->mProfil->update('pelanggan', $update, $where);
				if ($up) {
					$this->session->set_flashdata('success', 'Data berhasil diperbarui..');
					$this->session->set_userdata(
						array(
							'foto' => $foto
						)
					);
					redirect('pelanggan/cProfil', 'refresh');
				} else {
					$this->session->set_flashdata('error', 'Data Gagal diperbarui..');
				}
			}
		}
		$getData = $this->mProfil->getData('pelanggan', ['id_pelanggan' => $this->session->userdata('id_pelanggan')]);
		$data = [
			'title' => 'Profil',
			'users' => $getData->row()
		];
		$this->load->view('Pelanggan/layouts/header');
		$this->load->view('Pelanggan/layouts/aside');
		$this->load->view('Pelanggan/auth/profil', $data);
		$this->load->view('Pelanggan/Layouts/footer');
	}

	public function ganti_password()
	{
		if ($this->security->xss_clean($this->input->post('submit', TRUE)) == 'submit') {

			$rules = [
				[
					'field' => 'pwLama',
					'label' => 'Password Lama',
					'rules' => 'trim|required|min_length[5]',

				],
				[
					'field' => 'pwBaru',
					'label' => 'Password Baru',
					'rules' => 'trim|required|min_length[4]|matches[pwBaru2]'
				],
				[
					'field' => 'pwBaru2',
					'label' => 'Repeat Password',
					'rules' => 'trim|required|matches[pwBaru]'
				]
			];
			$this->form_validation->set_rules($rules);
			if ($this->form_validation->run() == TRUE) {

				$getData = $this->mProfil->getData('pelanggan', ['id_pelanggan' => $this->session->userdata('id_pelanggan')]);
				$f = $getData->row();
				$pwBaru = $this->security->xss_clean($this->input->post('pwBaru', TRUE));
				$pwLama = $this->security->xss_clean($this->input->post('pwLama', TRUE));
				if (!password_verify($pwLama, $f->password)) {
					$this->session->set_flashdata('error', 'Password Lama yang anda masukkan salah..');
					redirect('pelanggan/cprofil/ganti_password');
				}
				if ($pwBaru == $pwLama) {
					$this->session->set_flashdata('error', 'Password Baru dan Password Lama sama, Data tidak diubah...');
					redirect('pelanggan/cprofil/ganti_password');
				}
				//encrypt & update password
				$hash_password = password_hash($pwBaru, PASSWORD_DEFAULT);

				$update = $this->mProfil->update('pelanggan', ['password' => $hash_password], ['id_pelanggan' => $f->id_pelanggan]);

				if ($update) {
					$this->session->set_flashdata('success', 'Password berhasil diubah..');
					redirect('pelanggan/clogin/logout');
				} else {
					$this->session->set_flashdata('error', 'Password gagal diubah..');
				}
			}
		}
		$getData = $this->mProfil->getData('pelanggan', ['id_pelanggan' => $this->session->userdata('id_pelanggan')]);

		$data = [
			'title' => 'Profil',
			'users' => $getData->row()
		];
		$this->load->view('Pelanggan/layouts/header');
		$this->load->view('Pelanggan/layouts/aside');
		$this->load->view('Pelanggan/auth/password', $data);
		$this->load->view('Pelanggan/Layouts/footer');
	}
}

/* End of file cProfil.php */
