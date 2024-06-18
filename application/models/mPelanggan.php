<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mPelanggan extends CI_Model
{
	public function select()
	{
		return $this->db->query("SELECT * FROM `pelanggan`")->result();
	}

	public function insert($data)
	{
		$this->db->insert('user', $data);
	}

	public function edit($id)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('id_user', $id);
		return $this->db->get()->row();
	}
	public function update($id, $data)
	{
		$this->db->where('id_user', $id);
		$this->db->update('user', $data);
	}
	public function delete($id)
	{
		$this->db->where('id_user', $id);
		$this->db->delete('user');
	}
}

/* End of file mPelanggan.php */
