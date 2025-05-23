<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mDashboard extends CI_Model
{
	public function transaksi_pelanggan()
	{
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->join('pelanggan', 'pelanggan.id_pelanggan = transaksi.id_pelanggan', 'left');
		$this->db->group_by('transaksi.id_pelanggan');
		return $this->db->get()->result();
	}
	public function detail_transaksi($id)
	{
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->join('detail_transaksi', 'transaksi.id_transaksi = detail_transaksi.id_transaksi', 'left');
		$this->db->join('produk', 'detail_transaksi.id_produk = produk.id_produk', 'left');

		$this->db->join('pelanggan', 'transaksi.id_pelanggan = pelanggan.id_pelanggan', 'left');
		$this->db->where('transaksi.id_pelanggan', $id);
		return $this->db->get()->result();
	}
	public function transaksi($id_user)
	{
		$where_clause = "WHERE id_user = '$id_user' AND pesanan.metode_bayar != '3'";
		$data['total_penjualan'] = $this->db->query("SELECT COUNT(id_pesanan) as jml FROM `pesanan` $where_clause AND status_order='4'")->row();
		$data['total_pendapatan'] = $this->db->query("SELECT SUM(total_bayar) as jml FROM `pesanan` $where_clause AND status_order='4'")->row();
		$data['ulasan'] = $this->db->query("SELECT COUNT(id_ulasan) as jml FROM `ulasan` JOIN detail_pesanan ON ulasan.id_detail=detail_pesanan.id_detail JOIN pesanan ON pesanan.id_pesanan=detail_pesanan.id_pesanan WHERE pesanan.id_user='" . $id_user . "';")->row();

		return $data;

		// $this->db->select('*');
		// $this->db->from('ulasan');
		// $this->db->join('detail_pesanan', 'ulasan.id_detail = detail_pesanan.id_detail', 'left');
		// $this->db->join('pesanan', 'pesanan.id_pesanan = detail_pesanan.id_pesanan', 'left');
		// $this->db->where('pesanan.id_user', $id);
		// return $this->db->get()->result();
	}
	public function ulasan_pelanggan($id)
	{
		$this->db->select('ulasan.id_ulasan, nama_plggn, rating, nama_produk, time_ulasan, komentar, time, isi_balasan');
		$this->db->from('ulasan');
		$this->db->join('detail_pesanan', 'ulasan.id_detail = detail_pesanan.id_detail', 'left');
		$this->db->join('pesanan', 'pesanan.id_pesanan = detail_pesanan.id_pesanan', 'left');
		$this->db->join('pelanggan', 'pelanggan.id_pelanggan = pesanan.id_pelanggan', 'left');
		$this->db->join('menu_makanan', 'menu_makanan.id_produk = detail_pesanan.id_produk', 'left');
		$this->db->join('balasan_ulasan', 'balasan_ulasan.id_ulasan = ulasan.id_ulasan', 'left');
		$this->db->where('pesanan.id_user', $id);
		return $this->db->get()->result();
	}
}

/* End of file mDashboard.php */
