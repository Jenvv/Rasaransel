<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mTransaksi extends CI_Model
{
	public function select()
	{
		$this->db->select('*');
		$this->db->from('user');
		return $this->db->get()->result();
	}
	public function selectid($id_user)
	{
		// $data['id_user'] = $this->db->query("SELECT*FROM user")->result();
		// // $this->db->select('*');
		// // $this->db->from('user');
		// return $data;
		$this->db->where('id_user', $id_user);
		$query = $this->db->get('user');

		if ($query->num_rows() > 0) {
			return $query->row_array();
		} else {
			return false;
		}
	}
	public function status_order()
	{
		$data['pesanan_masuk'] = $this->db->query("SELECT*FROM pesanan JOIN pelanggan ON pesanan.id_pelanggan = pelanggan.id_pelanggan WHERE pesanan.status_order='0' AND metode_bayar != '3'")->result();
		$data['konfirmasi'] = $this->db->query("SELECT*FROM pesanan JOIN pelanggan ON pesanan.id_pelanggan = pelanggan.id_pelanggan WHERE pesanan.status_order='1' AND metode_bayar != '3'")->result();
		$data['diproses'] = $this->db->query("SELECT*FROM pesanan JOIN pelanggan ON pesanan.id_pelanggan = pelanggan.id_pelanggan WHERE pesanan.status_order='2' AND metode_bayar != '3'")->result();
		$data['dikirim'] = $this->db->query("SELECT*FROM pesanan JOIN pelanggan ON pesanan.id_pelanggan = pelanggan.id_pelanggan WHERE pesanan.status_order='3' AND metode_bayar != '3'")->result();
		$data['selesai'] = $this->db->query("SELECT*FROM pesanan JOIN pelanggan ON pesanan.id_pelanggan = pelanggan.id_pelanggan WHERE pesanan.status_order='4' AND metode_bayar != '3'")->result();
		return $data;
	}
	public function status_order_admin($id_user)
	{
		// Filter berdasarkan id_user yang sedang login
		$where_clause = "WHERE id_user = '$id_user' AND pesanan.metode_bayar != '3'";
		$data['pesanan_masuk'] = $this->db->query("SELECT * FROM pesanan JOIN pelanggan ON pesanan.id_pelanggan = pelanggan.id_pelanggan $where_clause AND pesanan.status_order='0'")->result();
		$data['konfirmasi'] = $this->db->query("SELECT * FROM pesanan JOIN pelanggan ON pesanan.id_pelanggan = pelanggan.id_pelanggan $where_clause AND pesanan.status_order='1'")->result();
		$data['diproses'] = $this->db->query("SELECT * FROM pesanan JOIN pelanggan ON pesanan.id_pelanggan = pelanggan.id_pelanggan $where_clause AND pesanan.status_order='2'")->result();
		$data['dikirim'] = $this->db->query("SELECT * FROM pesanan JOIN pelanggan ON pesanan.id_pelanggan = pelanggan.id_pelanggan $where_clause AND pesanan.status_order='3'")->result();
		$data['selesai'] = $this->db->query("SELECT * FROM pesanan JOIN pelanggan ON pesanan.id_pelanggan = pelanggan.id_pelanggan $where_clause AND pesanan.status_order='4'")->result();

		return $data;
	}

	//transaksi langsung
	public function transaksiLangsung()
	{
		$this->db->select('*');
		$this->db->from('pesanan');
		$this->db->where('metode_bayar=3');
		return $this->db->get()->result();
	}
	//detail transaksi
	public function detail_tran_langsung($id)
	{
		$data['transaksi'] = $this->db->query("SELECT * FROM `pesanan` JOIN pelanggan ON pesanan.id_pelanggan=pelanggan.id_pelanggan WHERE id_pesanan='" . $id . "';")->row();
		$data['pesanan'] = $this->db->query("SELECT * FROM `pesanan` JOIN detail_pesanan ON pesanan.id_pesanan=detail_pesanan.id_pesanan JOIN menu_makanan ON menu_makanan.id_produk=detail_pesanan.id_produk LEFT JOIN diskon ON diskon.id_produk=menu_makanan.id_produk WHERE pesanan.id_pesanan='" . $id . "';")->result();
		return $data;
	}
	public function notif()
	{
		$data['pesanan_masuk'] = $this->db->query("SELECT COUNT(id_pesanan) as jml FROM `pesanan` WHERE status_order='0' AND metode_bayar != '3'")->row();
		$data['konfirmasi'] = $this->db->query("SELECT COUNT(id_pesanan) as jml FROM `pesanan` WHERE status_order='1' AND metode_bayar != '3'")->row();
		$data['diproses'] = $this->db->query("SELECT COUNT(id_pesanan) as jml FROM `pesanan` WHERE status_order='2' AND metode_bayar != '3'")->row();
		$data['dikirim'] = $this->db->query("SELECT COUNT(id_pesanan) as jml FROM `pesanan` WHERE status_order='3' AND metode_bayar != '3'")->row();
		$data['selesai'] = $this->db->query("SELECT COUNT(id_pesanan) as jml FROM `pesanan` WHERE status_order='4' AND metode_bayar != '3'")->row();
		return $data;
	}
	public function notif_admin($id_user)
	{
		$where_clause = "WHERE id_user = '$id_user' AND pesanan.metode_bayar != '3'";
		$data['pesanan_masuk'] = $this->db->query("SELECT COUNT(id_pesanan) as jml FROM `pesanan` $where_clause AND status_order='0'")->row();
		$data['konfirmasi'] = $this->db->query("SELECT COUNT(id_pesanan) as jml FROM `pesanan` $where_clause AND status_order='1'")->row();
		$data['diproses'] = $this->db->query("SELECT COUNT(id_pesanan) as jml FROM `pesanan` $where_clause AND status_order='2'")->row();
		$data['dikirim'] = $this->db->query("SELECT COUNT(id_pesanan) as jml FROM `pesanan` $where_clause AND status_order='3'")->row();
		$data['selesai'] = $this->db->query("SELECT COUNT(id_pesanan) as jml FROM `pesanan` $where_clause AND status_order='4'")->row();
		return $data;
	}
	public function notif_pemilik()
	{
		$data['pesanan_masuk'] = $this->db->query("SELECT * FROM `pesanan` JOIN user ON pesanan.id_user = user.id_user WHERE pesanan.id_user = user.id_user AND pesanan.metode_bayar != '3' AND status_order='0' ")->result();
		$data['konfirmasi'] = $this->db->query("SELECT * FROM `pesanan` JOIN user ON pesanan.id_user = user.id_user WHERE pesanan.id_user = user.id_user AND pesanan.metode_bayar != '3' AND status_order='1' ")->result();
		$data['diproses'] = $this->db->query("SELECT * FROM `pesanan` JOIN user ON pesanan.id_user = user.id_user WHERE pesanan.id_user = user.id_user AND pesanan.metode_bayar != '3' AND status_order='2' ")->result();
		$data['dikirim'] = $this->db->query("SELECT * FROM `pesanan` JOIN user ON pesanan.id_user = user.id_user WHERE pesanan.id_user = user.id_user AND pesanan.metode_bayar != '3' AND status_order='3' ")->result();
		$data['selesai'] = $this->db->query("SELECT * FROM `pesanan` JOIN user ON pesanan.id_user = user.id_user WHERE pesanan.id_user = user.id_user AND pesanan.metode_bayar != '3' AND status_order='4' ")->result();
		return $data;
	}

	public function detail_pesanan($id)
	{
		$data['transaksi'] = $this->db->query("SELECT * FROM `pesanan` LEFT JOIN nota ON pesanan.id_pesanan=nota.id_pesanan JOIN pelanggan ON pelanggan.id_pelanggan=pesanan.id_pelanggan WHERE pesanan.id_pesanan='" . $id . "';")->row();
		$data['pesanan'] = $this->db->query("SELECT * FROM `pesanan` JOIN detail_pesanan ON pesanan.id_pesanan=detail_pesanan.id_pesanan JOIN menu_makanan ON menu_makanan.id_produk=detail_pesanan.id_produk LEFT JOIN diskon ON diskon.id_produk=menu_makanan.id_produk  WHERE pesanan.id_pesanan='" . $id . "';")->result();
		return $data;
	}
	public function status_transaksi($id, $data)
	{
		$this->db->where('id_pesanan', $id);
		$this->db->update('pesanan', $data);
	}
}

/* End of file mTransaksi.php */
