<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cMerchant extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mProfil');
        $this->load->helper('tglindo_helper');
        $this->load->model('mProduk');
        $this->load->model('mMerchant');
        $this->load->model('mKategori');
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->helper("file");
    }
    public function syarat()
    {
        $this->load->view('Pelanggan/layouts/header');
        $this->load->view('Pelanggan/layouts/aside');
        $this->load->view('Pelanggan/auth/syarat');
        $this->load->view('Pelanggan/Layouts/footer');
    }
    public function merchant()
    {

        $rules = [

            [
                'field' => 'nama',
                'label' => 'Nama Toko',
                'rules' => 'required|is_unique[user.nama]',
                'errors' => [
                    'required' => 'Nama Harus Di Isi!',
                    'is_unique' => 'Nama {field} Tidak Tersedia.'
                ]
            ],
            [
                'field' => 'no_hp',
                'label' => 'No Telepon',
                'rules' => 'required|min_length[11]|max_length[13]',
                'errors' => [
                    'required' => 'No Telepon Harus Di Isi!'
                ]
            ],
            [
                'field' => 'alamat',
                'label' => 'Alamat',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Alamat Harus Di Isi!'
                ]
            ],
            [
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'trim|required|min_length[5]|is_unique[user.email]',
                'errors' => [
                    'is_unique' => 'Email sudah digunakan, silakan pilih username lain.',
                    'required' => 'Email Harus Di Isi!'
                ]
            ],
            [
                'field' => 'syarat',
                'label' => 'Syarat & Ketentuan Rasa Ransel',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Mohon Konfirmasi Syarat & Ketentuan Rasa Ransel!'
                ]
            ],

        ];
        $this->form_validation->set_rules($rules);
        if ($this->form_validation->run() == FALSE) {
            $getData = $this->mProfil->getData('pelanggan', ['id_pelanggan' => $this->session->userdata('id_pelanggan')]);
            $data = [
                'title' => 'Profil',
                'users' => $getData->row()
            ];
            $this->load->view('Pelanggan/layouts/header');
            $this->load->view('Pelanggan/layouts/aside');
            $this->load->view('Pelanggan/auth/merchant', $data);
            $this->load->view('Pelanggan/Layouts/footer');
        } else {
            $getData = $this->mProfil->getData('pelanggan', ['id_pelanggan' => $this->session->userdata('id_pelanggan')]);
            $d = $getData->row();
            $data = [
                'nama' => $this->security->xss_clean($this->input->post('nama', TRUE)),
                'no_hp' => $this->security->xss_clean($this->input->post('no_hp', TRUE)),
                'email' => $this->security->xss_clean($this->input->post('email', TRUE)),
                'alamat' => $this->security->xss_clean($this->input->post('alamat', TRUE)),
                'deskripsi' => $this->security->xss_clean($this->input->post('deskripsi', TRUE)),
                'photo' => $this->security->xss_clean($this->input->post('photo', TRUE)),
                'username' => $d->username,
                'password' => $d->password,
                'is_active' => 0
            ];
            if ($this->db->insert('user', $data)) {
                $this->session->set_flashdata('success', 'Anda Berhasil Register, Silahkan Login!');
                redirect('pelanggan/cprofil');
            } else {
                $this->session->set_flashdata('error', 'Registrasi Gagal!');
                redirect('pelanggan/chome/');
            }
        }
    }
    public function aktivitas()
    {
        $getData = $this->mProfil->getData('pelanggan', ['id_pelanggan' => $this->session->userdata('id_pelanggan')]);
        $data = [
            'title' => 'Profil',
            'users' => $getData->row()
        ];
        $this->load->view('Pelanggan/layouts/header');
        $this->load->view('Pelanggan/layouts/aside');
        $this->load->view('Pelanggan/pesan', $data);
        $this->load->view('Pelanggan/Layouts/footer');
    }
    public function merchant_detail($id)
    {

        $getData = $this->mProfil->getData('user', ['id_user' => $id]);
        $data = [
            'title' => 'Profil',
            'produk' => $this->mMerchant->select_produk($id),
            'kategori' => $this->mKategori->getKategori(),
            'users' => $getData->row(),
        ];
        $this->load->view('pelanggan/Layouts/header');
        $this->load->view('pelanggan/merchant_detail', $data);
        $this->load->view('pelanggan/Layouts/footer');
    }
}
