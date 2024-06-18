<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mLaporan_user extends CI_Model
{
    //laporan transaksi

    public function lap_harian_transaksi($tanggal, $bulan, $tahun)
    {
        $this->db->select('*');
        $this->db->from('pelanggan');
        $this->db->where('DAY(created_at)', $tanggal);
        $this->db->where('MONTH(created_at)', $bulan);
        $this->db->where('YEAR(created_at)', $tahun);
        return $this->db->get()->result();
    }

    public function lap_bulanan_transaksi($bulan, $tahun)
    {
        $this->db->select('*');
        $this->db->from('pelanggan');
        $this->db->where('MONTH(created_at)', $bulan);
        $this->db->where('YEAR(created_at)', $tahun);
        return $this->db->get()->result();
    }
    public function lap_tahunan_transaksi($tahun)
    {
        $this->db->select('*');
        $this->db->from('pelanggan');
        $this->db->where('YEAR(created_at)', $tahun);
        return $this->db->get()->result();
    }
    public function lap_harian_merchant($tanggal, $bulan, $tahun)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('DAY(created_at)', $tanggal);
        $this->db->where('MONTH(created_at)', $bulan);
        $this->db->where('YEAR(created_at)', $tahun);
        return $this->db->get()->result();
    }

    public function lap_bulanan_merchant($bulan, $tahun)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('MONTH(created_at)', $bulan);
        $this->db->where('YEAR(created_at)', $tahun);
        return $this->db->get()->result();
    }
    public function lap_tahunan_merchant($tahun)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('YEAR(created_at)', $tahun);
        return $this->db->get()->result();
    }
}

/* End of file mLaporan.php */
