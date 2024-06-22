<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mProfil_admin extends CI_Model
{
    public function user()
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('id_user', $this->session->userdata('id'));
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
    public function update_pelanggan($kode, $data)
    {
        $this->db->where('kd_merchant', $kode);
        $this->db->update('pelanggan', $data);
    }
    // public function update_data($id, $kode, $data)
    // {
    //     $this->db->where('kode', $id); // Menentukan kondisi where untuk update
    //     $this->db->update('pelanggan', $data); // Menentukan tabel dan data untuk update
    //     // Mengembalikan hasil operasi update
    //     return $this->db->affected_rows();
    // }
}

/* End of file mProfil.php */
