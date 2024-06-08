<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mMerchant extends CI_Model
{
    public function select()
    {
        $this->db->select('username,email,is_active');
        $this->db->from('user');
        return $this->db->get()->result();
    }
    public function waktu()
    {
        $email = $this->session->userdata('username');
        $this->db->select('is_active,created_at,updated_at');
        $this->db->from('user');
        $this->db->where('username', $email);
        return $this->db->get();
    }
    public function select_produk($id)
    {
        $this->db->select('*');
        $this->db->from('menu_makanan');
        $this->db->where('id_user', $id); // Filter berdasarkan id_user
        return $this->db->get()->result();
    }
}

/* End of file mMerchant.php */
