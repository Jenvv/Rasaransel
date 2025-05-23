<?php

defined('BASEPATH') or exit('No direct script access allowed');

class cChatting extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mChatting');
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
		$data = array(
			'chat' => $this->mChatting->chat_pelanggan()
		);
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Chatting/vChatting', $data);
		$this->load->view('Admin/Layouts/footer');
	}

	public function GetAllOrang()
	{
		$id_user = $this->input->post('id_user');
		$data = $this->mChatting->GetAllOrangAdmin($id_user);
		echo json_encode(array('data' => $data));
	}

	public function pesan()
	{
		$no =  $this->uri->segment(4);
		$data['data'] = $this->mChatting->getDataByIdAdmin($no);
		if ($data == null) {
			die("User Tidak Ditemukan!");
		} else {
			$this->load->view('Admin/Layouts/head');
			$this->load->view('Admin/Chatting/vDetailChatting', $data);
			// $this->load->view('Admin/Layouts/footer');
		}
	}

	public function loadChat()
	{
		$id_user = 	$this->input->post('id_user');
		$id_toko = 	$this->input->post('id_toko');
		$data = $this->mChatting->getPesan($id_user, $id_toko);

		echo json_encode(array(
			'data' => $data
		));
	}

	public function KirimPesan()
	{
		$now = date("Y-m-d H:i:s");
		$pesan = $this->input->post('pesan');
		$id_pelanggan = $this->input->post('id_pelanggan');
		$id_user = $this->input->post('id_user');
		$in = array(
			'id_pelanggan' => $id_pelanggan,
			'id_user' => $id_user,
			'pelanggan_send' => 0,
			'toko_send' => $pesan,
			'time' => $now,
		);

		$this->mChatting->TambahChatKeSatu($in);
		$log = array('status' => true);
		echo json_encode($log);
		return true;
	}

	public function hapusChat()
	{
		$id_pelanggan = $this->input->post('id_pelanggan');
		$id_user = $this->input->post('id_user');
		$this->db->where('id_pelanggan', $id_pelanggan);
		$this->db->where('id_user', $id_user);

		$this->db->delete('chatting');
		redirect('Admin/cChatting');
	}

	public function detail_chatting($id)
	{
		$data = array(
			'id_pelanggan' => $id,
			'chat' => $this->mChatting->detail_chatting($id)
		);
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Chatting/vDetailChatting', $data);
		$this->load->view('Admin/Layouts/footer');
	}
	public function balasan($id)
	{
		$data = array(
			'id_pelanggan' => $id,
			'admin_send' => $this->input->post('balasan'),
			'pelanggan_send' => '0'
		);
		$this->db->insert('chatting', $data);
		$this->session->set_flashdata('success', 'Balasan Chatting Berhasil Dikirim!');
		redirect('Admin/cChatting/detail_chatting/' . $id);
	}
}

/* End of file cChatting.php */
