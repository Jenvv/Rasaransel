<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cProfil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mProfil_admin', 'mProfil');
    }
    public function index()
    {

        $getData = $this->mProfil->getData('user', ['id_user' => $this->session->userdata('id')]);
        $data = [
            'title' => 'Profil',
            'users' => $getData->row()
        ];
        $this->load->view('Admin/Layouts/head');
        $this->load->view('Admin/profil', $data);
        $this->load->view('Admin/Layouts/footer');
    }
}
