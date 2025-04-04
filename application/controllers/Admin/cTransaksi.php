<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cTransaksi extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mTransaksi');
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
		$id_user = $this->session->userdata('id');
		$data = array(
			'status' => $this->mTransaksi->status_order_admin($id_user),
			'notif' => $this->mTransaksi->notif_admin($id_user)
		);
		// $this->protect->protect_admin();
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/transaksi/status_order', $data);
		$this->load->view('Admin/Layouts/footer');
	}
	public function detail_pesanan($id)
	{
		// $this->protect->protect_admin();
		$data = array(
			'detail' => $this->mTransaksi->detail_pesanan($id)
		);
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/transaksi/detail_pesanan', $data);
		$this->load->view('Admin/Layouts/footer');
	}


	//transaksi delivery
	public function konfirmasi($id)
	{
		$data = array(
			'status_order' => '2'
		);
		$this->mTransaksi->status_transaksi($id, $data);
		redirect('Admin/cTransaksi');
	}
	public function kirim($id)
	{
		$data = array(
			'status_order' => '3'
		);
		$this->mTransaksi->status_transaksi($id, $data);
		redirect('Admin/cTransaksi');
	}
}

/* End of file cTransaksi.php */
