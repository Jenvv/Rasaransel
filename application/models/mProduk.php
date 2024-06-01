<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mProduk extends CI_Model
{
	public function insert($data)
	{
		$this->db->insert('menu_makanan', $data);
	}

	public function select()
	{
		$id_user = $this->session->userdata('id');
		$this->db->select('*');
		$this->db->from('menu_makanan');
		$this->db->where('id_user', $id_user); 
		return $this->db->get()->result();
	}

	public function edit($id)
	{
		$this->db->select('*');
		$this->db->from('menu_makanan');
		$this->db->where('id_produk', $id);
		return $this->db->get()->row();
	}
	public function update($id, $data)
	{
		$this->db->where('id_produk', $id);
		$this->db->update('menu_makanan', $data);
	}
	public function delete($id)
	{
		$this->db->where('id_produk', $id);
		$this->db->delete('menu_makanan');
	}
}

/* End of file mProduk.php */
