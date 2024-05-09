<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cTransaksi extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mTransaksi');
		$this->getsecurity();
	}
	function getsecurity($value = '')
	{
		$is_admin = $this->session->userdata('level_user') == 1;
		if (empty($is_admin)) {
			$this->session->sess_destroy();
			redirect('pemilik/clogin');
		}
	}

	public function index()
	{
		$data = array(
			'user' => $this->mTransaksi->select(),
			'status' => $this->mTransaksi->status_order(),
			'notif' => $this->mTransaksi->notif_pemilik()
		);

		$this->load->view('pemilik/Layouts/head');
		$this->load->view('pemilik/transaksi/transaksi', $data);
		$this->load->view('pemilik/Layouts/footer');
	}
	public function transaksi($id_user)
	{
		// $id_user = $this->input->post('id_user');
		$data = array(
			'status' => $this->mTransaksi->status_order_admin($id_user),
			'notif' => $this->mTransaksi->notif_admin($id_user)
		);
		// $this->protect->protect_admin();
		$this->load->view('Pemilik/Layouts/head');
		$this->load->view('Pemilik/transaksi/status_order', $data);
		$this->load->view('Pemilik/Layouts/footer');
	}
	public function detail_pesanan($id)
	{
		// $this->protect->protect_pemilik();
		$data = array(
			'detail' => $this->mTransaksi->detail_pesanan($id)
		);
		$this->load->view('Pemilik/Layouts/head');
		$this->load->view('Pemilik/transaksi/detail_pesanan', $data);
		$this->load->view('Pemilik/Layouts/footer');
	}


	//transaksi delivery
	public function konfirmasi($id)
	{
		$data = array(
			'status_order' => '2'
		);
		$this->mTransaksi->status_transaksi($id, $data);
		redirect('Pemilik/cTransaksi');
	}
	public function kirim($id)
	{
		$data = array(
			'status_order' => '3'
		);
		$this->mTransaksi->status_transaksi($id, $data);
		redirect('Pemilik/cTransaksi');
	}
}

/* End of file cTransaksi.php */
