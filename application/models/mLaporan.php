<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mLaporan extends CI_Model
{
	//laporan transaksi

	public function lap_harian_transaksi($tanggal, $bulan, $tahun)
	{
		$id = $this->session->userdata('id');
		$this->db->select('*');
		$this->db->from('pesanan');
		$this->db->join('pelanggan', 'pesanan.id_pelanggan = pelanggan.id_pelanggan', 'left');
		$this->db->where('pesanan.status_order', 4);
		$this->db->where('DAY(pesanan.tgl_transaksi)', $tanggal);
		$this->db->where('MONTH(pesanan.tgl_transaksi)', $bulan);
		$this->db->where('YEAR(pesanan.tgl_transaksi)', $tahun);
		$this->db->where('pesanan.id_user', $id);  // Adding table alias for clarity
		return $this->db->get()->result();
	}

	public function lap_bulanan_transaksi($bulan, $tahun)
	{
		$id = $this->session->userdata('id');
		$this->db->select('*');
		$this->db->from('pesanan');
		$this->db->join('pelanggan', 'pesanan.id_pelanggan = pelanggan.id_pelanggan', 'left');
		$this->db->where('pesanan.status_order=4');
		$this->db->where('MONTH(pesanan.tgl_transaksi)', $bulan);
		$this->db->where('YEAR(pesanan.tgl_transaksi)', $tahun);
		$this->db->where('pesanan.id_user', $id);
		return $this->db->get()->result();
	}
	public function lap_tahunan_transaksi($tahun)
	{
		$id = $this->session->userdata('id');
		$this->db->select('*');
		$this->db->from('pesanan');
		$this->db->join('pelanggan', 'pesanan.id_pelanggan = pelanggan.id_pelanggan', 'left');
		$this->db->where('pesanan.status_order=4');
		$this->db->where('YEAR(pesanan.tgl_transaksi)', $tahun);
		$this->db->where('pesanan.id_user', $id);
		return $this->db->get()->result();
	}
}

/* End of file mLaporan.php */
