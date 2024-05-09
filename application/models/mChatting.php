<?php

defined('BASEPATH') or exit('No direct script access allowed');

class mChatting extends CI_Model
{
	public function send_pelanggan($data)
	{
		$this->db->insert('chatting', $data);
	}
	public function select()
	{
		$this->db->select('*');
		$this->db->from('chatting');
		$this->db->join('pelanggan', 'chatting.id_pelanggan = pelanggan.id_pelanggan', 'left');
		$this->db->where('pelanggan.id_pelanggan', $this->session->userdata('id'));
		return $this->db->get()->result();
	}

	//admin
	public function chat_pelanggan()
	{
		return $this->db->query("SELECT * FROM `chatting` JOIN pelanggan ON pelanggan.id_pelanggan=chatting.id_pelanggan GROUP BY chatting.id_pelanggan ORDER BY time DESC")->result();
	}
	public function detail_chatting($id)
	{
		return $this->db->query("SELECT * FROM `chatting` JOIN pelanggan ON pelanggan.id_pelanggan=chatting.id_pelanggan WHERE chatting.id_pelanggan='" . $id . "'")->result();
	}
	public function getAllUsersa()
	{
		$query = $this->db->get('chatting');
		return $query->result_array();
	}
	public function GetAllOrang($id_pelanggan)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->join('chatting', 'user.id_user = chatting.id_user');
		$this->db->where('chatting.id_pelanggan', $id_pelanggan);
		$this->db->group_by('user.id_user'); // Mengelompokkan berdasarkan id_user
		return $this->db->get()->result();
	}



	public function getDataById($no)
	{
		$this->db->from('user');
		$this->db->where('id_user', $no);
		return $sql = $this->db->get()->row();
	}

	public function getAllUsers($id_user, $id_toko)
	{
		$this->db->select('*');
		$this->db->from('chatting');
		$this->db->where('id_pelanggan= ' . $id_user . ' and id_user=' . $id_toko);
		$r = $this->db->get();
		return $r->result_array();
	}
	public function getPesan($id_user, $id_toko)
	{
		$this->db->from('chatting');
		$this->db->where('id_pelanggan= ' . $id_user . ' and id_user=' . $id_toko . ' or id_pelanggan= ' . $id_toko . ' and id_user=' . $id_user);

		$r = $this->db->get();

		return $r->result();

		# code...
	}
	public function TambahChatKeSatu($in)
	{
		$this->db->insert('chatting', $in);

		# code...
	}
}

/* End of file mChatting.php */
