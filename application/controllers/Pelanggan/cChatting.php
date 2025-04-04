<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cChatting extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mChatting');
		$this->load->model('mProfil');
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
		$data = array(
			'pesan' => $this->mChatting->select(),
		);
		// $this->load->view('Pelanggan/layouts/header');
		// $this->load->view('Pelanggan/layouts/aside');1
		$this->load->view('Pelanggan/menu_chat', $data);
		$this->load->view('Pelanggan/Layouts/footer');
	}

	public function pesan()
	{
		$getData = $this->mProfil->getData('pelanggan', ['id_pelanggan' => $this->session->userdata('id_pelanggan')]);
		$d = $getData->row();
		$no =  $this->uri->segment(4);
		$data['data'] = $this->mChatting->getDataById($no);
		$data['users'] = $d;
		if ($data == null) {
			die("user tidak ada nih");
		} else {
			// var_dump($data);die;	
			$this->load->view('Pelanggan/chat', $data);
			// $this->load->view('Pelanggan/Layouts/footer');
		}
	}
	public function saran()
	{
		$this->protect->protect();
		$data = array(
			'id_pelanggan' => $this->session->userdata('id'),
			'kritik_saran' => $this->input->post('kritik')
		);
		$this->mChatting->insert_saran($data);
		$this->session->set_flashdata('success', 'Kritik dan Saran Berhasil Dikirim!');
		redirect('pelanggan/chome');
	}

	public function getData()
	{
		$id_toko =  $this->uri->segment(4);
		$id_user = $this->session->userdata('id');
		$data['users'] = $this->mChatting->getAllUsers($id_user, $id_toko);
		echo json_encode($data);
	}

	public function GetAllOrang()
	{
		$id_pelanggan = $this->input->post('id_pelanggan');
		$data = $this->mChatting->GetAllOrang($id_pelanggan);
		echo json_encode(array('data' => $data));
	}

	public function loadChat()
	{
		$id_user = 	$this->input->post('id_user');
		$id_toko = 	$this->input->post('id_toko');
		// $id_user = 38;
		// $id_toko = 	1;
		$data = $this->mChatting->getPesan($id_user, $id_toko);

		echo json_encode(array(
			'data' => $data
		));
	}
	public function KirimPesan()
	{
		$now = date("Y-m-d H:i:s");
		// var_dump($now);die;
		$pesan = $this->input->post('pesan');
		$id_pelanggan = $this->input->post('id_pelanggan');
		$id_user = $this->input->post('id_user');

		// $id_pelanggan =2;
		// $id_user =1;
		$in = array(
			'id_pelanggan' => $id_pelanggan,
			'id_user' => $id_user,
			'pelanggan_send' => $pesan,
			'toko_send' => 0,
			'time' => $now,
		);

		$this->mChatting->TambahChatKeSatu($in);
		$log = array('status' => true);
		echo json_encode($log);
		return true;


		# code...
	}

	public function hapusChat()
	{
		$id_pelanggan = $this->input->post('id_pelanggan');
		$id_user = $this->input->post('id_user');

		// Tambahkan operator logika 'AND' pada where
		$this->db->where('id_pelanggan', $id_pelanggan);
		$this->db->where('id_user', $id_user);

		$this->db->delete('chatting');
		// $this->session->set_flashdata('success', '<div class="alert alert-success alert-pesan">Data Lamaran berhasil dihapus.</div>');
		redirect('pelanggan/cChatting');
	}
}

/* End of file cChatting.php */
