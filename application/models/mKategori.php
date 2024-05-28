<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mKategori extends CI_Model

{
    public function getKategori()
    {
        $this->db->select('*');
        $this->db->from('kategori_menu');
        $query = $this->db->get();
        return $query->result();
    }
    function getData($table = null, $where = null)
    {
        $this->db->from($table);
        $this->db->where($where);

        return $this->db->get();
    }
}
