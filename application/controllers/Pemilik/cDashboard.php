<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cDashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mLaporan');
		$this->load->model('mUser');
		$this->load->model('mPelanggan');
		$this->load->model('mDashboard');
		$this->getsecurity();
	}
	function getsecurity($value = '')
	{
		$is_pemilik = $this->session->userdata('level_user') == 1;
		if (empty($is_pemilik)) {
			$this->session->sess_destroy();
			$this->session->set_flashdata('error', 'Anda Belum Melakukan Login!');
			redirect('pemilik/clogin');
		}
	}

	public function index()
	{
		$data = array(
			'pelanggan' => $this->mPelanggan->select(),
			'user_aktif' => $this->mUser->select_aktif(),
			'user' => $this->mUser->select(),
		);
		// $this->protect->protect_admin();
		$this->load->view('Pemilik/Layouts/head');
		$this->load->view('Pemilik/dashboard', $data);
		$this->load->view('Pemilik/Layouts/footer');
	}
	public function detail_transaksi_pelanggan($id)
	{
		// $this->protect->protect_admin();
		$data = array(
			'detail' => $this->mDashboard->detail_transaksi($id)
		);
		$this->load->view('Pemilik/Layouts/head');
		$this->load->view('Pemilik/detail_transaksi_pelanggan', $data);
		$this->load->view('Pemilik/Layouts/footer');
	}
}

/* End of file cDashboard.php */
