<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    // Fungsi untuk mendapatkan data pelanggan berdasarkan username
    public function get_pelanggan_by_username($username)
    {
        return $this->db->get_where('pelanggan', ['username' => $username])->row_array();
    }

    // Fungsi untuk mendapatkan data merchant berdasarkan username
    public function get_merchant_by_username($username)
    {
        return $this->db->get_where('user', ['username' => $username])->row_array();
    }

    // Fungsi untuk mendapatkan data pelanggan berdasarkan id
    public function get_pelanggan_by_id($id_pelanggan)
    {
        return $this->db->get_where('pelanggan', ['id_pelanggan' => $id_pelanggan])->row_array();
    }

    // Fungsi untuk mendapatkan data merchant berdasarkan id
    public function get_merchant_by_id($id_merchant)
    {
        return $this->db->get_where('user', ['id_user' => $id_merchant])->row_array();
    }
}
