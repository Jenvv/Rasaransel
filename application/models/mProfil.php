<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mProfil extends CI_Model
{
	public function pelanggan()
	{
		$this->db->select('*');
		$this->db->from('pelanggan');
		$this->db->where('id_pelanggan', $this->session->userdata('id_pelanggan'));
		return $this->db->get()->row();
	}
	function getData($table = null, $where = null)
	{
		$this->db->from($table);
		$this->db->where($where);

		return $this->db->get();
	}
	function update($table = null, $data = null, $where = null)
	{
		return $this->db->update($table, $data, $where);
	}
	public function update_data($id, $kode)
	{
		$data = array(
			'kd_merchant' => $kode
		);
		$this->db->where('id_pelanggan', $id); // Menentukan kondisi where untuk update
		$this->db->update('pelanggan', $data); // Menentukan tabel dan data untuk update
		// Mengembalikan hasil operasi update
		return $this->db->affected_rows();
	}
}

/* End of file mProfil.php */
