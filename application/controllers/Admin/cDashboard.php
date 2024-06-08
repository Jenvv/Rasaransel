<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cDashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mProfil_admin', 'mProfil');
		$this->load->model('mLaporan');
		$this->load->model('mDashboard');
		$this->getsecurity();
	}
	public function getsecurity($value = '')
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

		$id = $this->session->userdata('id');
		$getData = $this->mDashboard->transaksi($id);
		$data = array(
			'ulasan' => $this->mDashboard->ulasan_pelanggan($id),
			'total' => $getData
		);
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/dashboard/dashboard', $data);
		$this->load->view('Admin/Layouts/footer');
	}

	public function balas_ulasan($id)
	{
		$data = array(
			'id_ulasan' => $id,
			'isi_balasan' => $this->input->post('balasan')
		);
		$this->db->insert('balasan_ulasan', $data);
		$this->session->set_flashdata('success', 'Balasan Ulasan Berhasil Dikirim!');
		redirect('Admin/cDashboard');
	}
	public function hapus_ulasan($id)
	{
		$this->db->where('id_ulasan', $id);
		$this->db->delete('ulasan');

		$this->db->where('id_ulasan', $id);
		$this->db->delete('balasan_ulasan');

		$this->session->set_flashdata('success', 'Balasan Ulasan Berhasil Dihapus!');
		redirect('Admin/cDashboard');
	}
}

/* End of file cDashboard.php */
