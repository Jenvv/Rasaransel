<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mMerchant extends CI_Model
{
    public function select()
    {
        $this->db->select('email');
        $this->db->from('user');
        return $this->db->get()->result();
    }
    public function waktu()
    {
        $email = $this->session->userdata('email');
        $this->db->select('created_at,updated_at');
        $this->db->from('user');
        $this->db->where('email', $email);
        return $this->db->get();
    }
}

/* End of file mMerchant.php */
