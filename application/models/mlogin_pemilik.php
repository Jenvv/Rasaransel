<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mlogin_pemilik extends CI_Model
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
}

/* End of file mlogin_pemilik.php */
