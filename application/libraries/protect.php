<?php
defined('BASEPATH') or exit('No direct script access allowed');

class protect
{
    protected $ci;

    public function __construct()
    {
        $this->ci = &get_instance();
    }
    public function protect()
    {
        if ($this->ci->session->userdata('id') == '') {
            $this->ci->session->set_flashdata('error', 'Anda Belum Melakukan Login!');
            redirect('pelanggan/clogin');
        }
    }
    public function protect_admin()
    {
        if ($this->ci->session->userdata('level_user') == 2) {
            $this->ci->session->set_flashdata('error', 'Anda Tidak Memiliki Akses! ');
            redirect('pemilik/clogin');
        }
    }
    public function protect_pemilik()
    {
        if ($this->ci->session->userdata('level_user') == 2) {
            $this->ci->session->set_flashdata('error', 'Anda Tidak Memiliki Akses! ');
            redirect('pemilik/clogin');
        }
    }
}

/* End of file protect.php */
