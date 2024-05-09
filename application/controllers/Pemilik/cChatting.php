<?php

defined('BASEPATH') or exit('No direct script access allowed');

class cChatting extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mChatting');
	}

	public function index()
	{
		$data = array(
			'chat' => $this->mChatting->chat_pelanggan()
		);
		$this->load->view('pemilik/Layouts/head');
		$this->load->view('pemilik/Chatting/vChatting', $data);
		$this->load->view('pemilik/Layouts/footer');
	}
	public function detail_chatting($id)
	{
		$data = array(
			'id_pelanggan' => $id,
			'chat' => $this->mChatting->detail_chatting($id)
		);
		$this->load->view('pemilik/Layouts/head');
		$this->load->view('pemilik/Chatting/vDetailChatting', $data);
		$this->load->view('pemilik/Layouts/footer');
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
		redirect('pemilik/cChatting/detail_chatting/' . $id);
	}
}

/* End of file cChatting.php */
