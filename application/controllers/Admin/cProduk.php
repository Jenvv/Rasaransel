<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cProduk extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mProduk');
		$this->load->model('mKategori');
		$this->load->model('mProfil_admin', 'mProfil');
		$this->getsecurity();
	}
	function getsecurity($value = '')
	{
		$id_merchant = $this->session->userdata('id');
		$is_active = $this->session->userdata('is_active');
		if (empty($id_merchant) || $is_active != '1') {
			$this->session->sess_destroy();
			redirect('admin/clogin');
		}
	}


	public function index()
	{
		// $this->protect->protect_admin();
		$data = array(
			'produk' => $this->mProduk->select(),

		);
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/produk/produk', $data);
		$this->load->view('Admin/Layouts/footer');
	}
	public function create()
	{
		// $this->protect->protect_admin();
		$this->form_validation->set_rules('nama', 'Nama Produk', 'required');
		$this->form_validation->set_rules('harga', 'Harga Produk', 'required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi Produk', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data['kategori'] = $this->mKategori->getKategori();
			$this->load->view('Admin/Layouts/head');
			$this->load->view('Admin/produk/create', $data);
			$this->load->view('Admin/Layouts/footer');
		} else {
			$config['upload_path']          = './asset/foto-produk';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['max_size']             = 500000;

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('gambar')) {
				$data = array(
					'error' => $this->upload->display_errors()

				);
				$data['kategori'] = $this->mKategori->getKategori();
				$this->load->view('Admin/Layouts/head');
				$this->load->view('Admin/produk/create', $data);
				$this->load->view('Admin/Layouts/footer');
			} else {
				$upload_data = $this->upload->data();
				$id_user = $this->session->userdata('id');
				$data = array(
					'nama_produk' => $this->input->post('nama'),
					'id_user' => $id_user,
					'harga' => $this->input->post('harga'),
					'id_kategori' => $this->input->post('kategori'),
					'deskripsi' => $this->input->post('deskripsi'),
					'foto' => $upload_data['file_name']
				);
				$this->mProduk->insert($data);

				$this->session->set_flashdata('success', 'Data Produk Berhasil Ditambahkan!');
				redirect('Admin/cProduk');
			}
		}
	}
	public function update($id)
	{
		$this->form_validation->set_rules('nama', 'Nama Produk', 'required');
		$this->form_validation->set_rules('harga', 'Harga Produk', 'required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi Produk', 'required');
		if ($this->form_validation->run() == TRUE) {
			$config['upload_path']          = './asset/foto-produk';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 500000;

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('gambar')) {
				$data = array(

					'error' => $this->upload->display_errors()
				);
				$data['kategori'] = $this->mKategori->getKategori();
				$this->load->view('Admin/Layouts/head');
				$this->load->view('Admin/produk/update', $data);
				$this->load->view('Admin/Layouts/footer');
			} else {
				$produk = $this->mProduk->select();
				if ($produk->foto !== "") {
					unlink('./asset/foto-produk/' . $produk->foto);
				}
				$upload_data =  $this->upload->data();
				$id_user = $this->session->userdata('id');
				$data = array(
					'nama_produk' => $this->input->post('nama'),
					'id_user' => $id_user,
					'harga' => $this->input->post('harga'),
					'id_kategori' => $this->input->post('kategori'),
					'deskripsi' => $this->input->post('deskripsi'),
					'foto' => $upload_data['file_name']
				);
				$this->mProduk->update($id, $data);
				$this->session->set_flashdata('success', 'Data Produk Berhasil Diperbaharui !!!');
				redirect('Admin/cproduk');
			} //tanpa ganti gambar
			$id_user = $this->session->userdata('id');
			$data = array(
				'nama_produk' => $this->input->post('nama'),
				'id_user' => $id_user,
				'harga' => $this->input->post('harga'),
				'id_kategori' => $this->input->post('kategori'),
				'deskripsi' => $this->input->post('deskripsi')
			);
			$this->mProduk->update($id, $data);
			$this->session->set_flashdata('success', 'Data Produk Berhasil Diperbaharui !!!');
			redirect('Admin/cproduk');
		}
		$data = array(
			'kategori' => $this->mKategori->getKategori(),
			'produk' => $this->mProduk->edit($id)
		);
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/produk/update', $data);
		$this->load->view('Admin/Layouts/footer');
	}
	public function delete($id)
	{

		$delete_success = $this->mProduk->delete($id);
		$this->session->set_flashdata('success', 'Data Produk Berhasil Dihapus !!!');
		redirect('Admin/cproduk');
		// Send JSON response
		echo json_encode(['success' => $delete_success]);
	}
}

/* End of file cProduk.php */
