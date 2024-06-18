<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cPelanggan extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('mPelanggan');
        $this->load->helper('tglindo_helper');
        $this->getsecurity();
    }
    function getsecurity($value = '')
    {
        $is_admin = $this->session->userdata('level_user') == 1;
        if (empty($is_admin)) {
            $this->session->sess_destroy();
            redirect('pemilik/clogin');
        }
    }

    public function index()
    {
        $this->form_validation->set_rules('alamat', 'Alamat User', 'required');
        $this->form_validation->set_rules('no_hp', 'No Telepom', 'required|min_length[11]|max_length[13]');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');


        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'user' => $this->mPelanggan->select()
            );
            $this->load->view('pemilik/Layouts/head');
            $this->load->view('pemilik/pelanggan/pelanggan', $data);
            $this->load->view('pemilik/Layouts/footer');
        } else {
            $data = array(
                'alamat' => $this->input->post('alamat'),
                'no_hp' => $this->input->post('no_hp'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'nama' => $this->input->post('nama_plggn'),
                'is_active' => 0
            );
            $this->mPelanggan->insert($data);
            $this->session->set_flashdata('success', 'Data User Berhasil Ditambahkan!');
            redirect('Pemilik/cPelanggan');
        }
    }
    public function update($id)
    {
        $data = array(
            'alamat' => $this->input->post('alamat'),
            'no_hp' => $this->input->post('no_hp'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'nama' => $this->input->post('nama_plggn'),
            'deskripsi' => $this->input->post('deskripsi'),
        );
        $this->mPelanggan->update($id, $data);
        $this->session->set_flashdata('success', 'Data User Berhasil Diperbaharui!');
        redirect('Pemilik/cPelanggan');
    }
    public function delete($id)
    {
        $this->mPelanggan->delete($id);
        $this->session->set_flashdata('success', 'Data User Berhasil Dihapus!');
        redirect('Pemilik/cPelanggan');
    }
}

/* End of file cUser.php */
