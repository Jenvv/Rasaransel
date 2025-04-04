<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mKatalog extends CI_Model
{
	public function menu()
	{
		$this->db->select('nama_produk , id_user, menu_makanan.id_produk, harga, foto, deskripsi, nama_promo, diskon, tgl_diskon');
		$this->db->from('menu_makanan');
		$this->db->join('diskon', 'menu_makanan.id_produk = diskon.id_produk', 'left');
		return $this->db->get()->result();
	}
	public function menu_kategori($id)
	{
		$this->db->select('nama_produk , id_user, menu_makanan.id_produk, harga, foto, deskripsi, nama_promo, diskon, tgl_diskon');
		$this->db->from('menu_makanan');
		$this->db->join('diskon', 'menu_makanan.id_produk = diskon.id_produk', 'left');
		$this->db->join('kategori_menu', 'menu_makanan.id_kategori = kategori_menu.id_kategori', 'left');
		$this->db->where('menu_makanan.id_kategori', $id);
		return $this->db->get()->result();
	}

	public function menu_detail_diskon($id_user, $id)
	{
		$this->db->select('nama_produk, id_user, menu_makanan.id_produk, harga, foto, deskripsi, nama_promo, diskon, tgl_diskon');
		$this->db->from('menu_makanan');
		$this->db->join('diskon', 'menu_makanan.id_produk = diskon.id_produk', 'left');
		$this->db->where([
			'menu_makanan.id_user' => $id_user,
			'menu_makanan.id_produk' => $id
		]);
		return $this->db->get()->result();
	}
	public function menu_detail($id_user)
	{
		$this->db->select('nama_produk, id_user, menu_makanan.id_produk, harga, foto, deskripsi, nama_promo, diskon, tgl_diskon');
		$this->db->from('menu_makanan');
		$this->db->join('diskon', 'menu_makanan.id_produk = diskon.id_produk', 'left');
		$this->db->where('id_user', $id_user);
		return $this->db->get()->result();
	}

	public function checkout($data)
	{
		$this->db->insert('pesanan', $data);
	}
	public function detail_transaksi($data)
	{
		$this->db->insert('detail_pesanan', $data);
	}
	public function search($fquery)
	{
		$this->db->group_start();
		$this->db->like('nama_produk', $fquery, 'both');
		$this->db->group_end();

		// Select the columns explicitly with aliases to avoid conflict
		$this->db->select('menu_makanan.id_produk as menu_id_produk, menu_makanan.nama_produk, menu_makanan.harga, foto,id_user,deskripsi,  diskon.id_produk as diskon_id_produk, diskon.*');

		// Join the 'diskon' table on 'id_produk'
		$this->db->join('diskon', 'menu_makanan.id_produk = diskon.id_produk', 'left');

		// Order the results by 'id_produk'
		$this->db->order_by('menu_makanan.id_produk', 'ASC');

		// Limit the results to 100
		$this->db->limit(100);

		// Execute the query and return the results
		return $this->db->get('menu_makanan')->result();
	}



	public function data_pelanggan()
	{
		$this->db->select('*');
		$this->db->from('pelanggan');
		$this->db->where('id_pelanggan', $this->session->userdata('id_pelanggan'));
		return $this->db->get()->row();
	}

	public function ulasan()
	{
		$this->db->select('*');
		$this->db->from('ulasan');
		$this->db->join('pesanan', 'ulasan.id_pesanan = pesanan.id_pesanan', 'left');
		$this->db->join('pelanggan', 'pesanan.id_pelanggan = pelanggan.id_pelanggan', 'left');
		return $this->db->get()->result();
	}

	public function detail_produk($id)
	{
		$data['produk'] = $this->db->query("SELECT * FROM `menu_makanan` WHERE id_produk='" . $id . "'")->row();
		$data['ulasan'] = $this->db->query("SELECT * FROM ulasan JOIN detail_pesanan ON ulasan.id_detail=detail_pesanan.id_detail JOIN menu_makanan ON menu_makanan.id_produk=detail_pesanan.id_produk JOIN pesanan ON pesanan.id_pesanan=detail_pesanan.id_pesanan JOIN pelanggan ON pelanggan.id_pelanggan=pesanan.id_pelanggan LEFT JOIN balasan_ulasan ON balasan_ulasan.id_ulasan=ulasan.id_ulasan WHERE menu_makanan.id_produk='" . $id . "'")->result();
		return $data;
	}

	public function getAllUsers()
	{
		$query = $this->db->get('user');
		return $query->result();
	}

	public function getNamaPengguna($id_user)
	{
		$query = $this->db->get_where('user', array('id_user' => $id_user));
		return $query->result();
	}
}
