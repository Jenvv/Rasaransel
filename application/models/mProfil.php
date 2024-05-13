<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mProfil extends CI_Model
{
	public function pelanggan()
	{
		$this->db->select('*');
		$this->db->from('pelanggan');
		$this->db->where('id_pelanggan', $this->session->userdata('id'));
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
}

/* End of file mProfil.php */
