<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mLayanan extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function login($username, $password)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where(array(
            'username' => $username,
            'password' => $password
        ));
        return $this->db->get()->row();
    }
    public function layanan()
    {
        return $this->db->query("SELECT * FROM `pelayanan` GROUP BY id_layanan ORDER BY created_at DESC")->result();
    }
    public function detail_layanan($id)
    {
        return $this->db->query("SELECT * FROM `pelayanan` WHERE id_layanan='" . $id . "'")->result();
    }
}

/* End of file mlogin_pemilik.php */
