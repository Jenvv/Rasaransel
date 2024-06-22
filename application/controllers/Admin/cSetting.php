<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cSetting extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mProfil_admin', 'mProfil');
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->helper("file");
        // $this->getsecurity();
    }


    public function index()
    {
        $getData = $this->mProfil->getData('user', ['id_user' => $this->session->userdata('id')]);
        if ($this->security->xss_clean($this->input->post('submit', TRUE)) == 'submit') {
            $p = $getData->row();
            $this->form_validation->set_rules(
                'no_hp',
                'Nomor HP',
                "required|min_length[8]|max_length[15]|regex_match[/^[0-9]+$/]",
                array(
                    'required' => '{field} wajib diisi',
                    'min_length' => '{field} minimal 8 karakter',
                    'max_length' => '{field} maksimal 15 karakter',
                    'regex_match' => '{field} hanya boleh angka'
                )
            );
            $this->form_validation->set_rules(
                'alamat',
                'Alamat',
                "required|max_length[255]|regex_match[/^[A-Z a-z.0-9-,']+$/]",
                array(
                    'required' => '{field} wajib diisi',
                    'min_length' => '{field} minimal 10 karakter',
                    'max_length' => '{field} maksimal 255 karakter',
                    'regex_match' => 'Data {field} yang anda masukkan tidak valid'
                )
            );

            if ($this->form_validation->run() == TRUE) {
                // Foto
                $foto = $p->photo;
                $config['upload_path']      = './asset/fotoprofil/';
                $config['allowed_types']    = 'jpg|png|jpeg';
                $config['max_size']         = '2048';
                $config['file_name']        =  'foto_' . $this->session->userdata('id');
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('fotouser')) {

                    $b = $this->upload->data();
                    $foto = $b['file_name'];
                    $this->load->library('image_lib');
                    $config2['image_library']   = 'gd2';
                    $config2['source_image']    = './asset/fotoprofil/' . $foto;
                    $config2['new_image']       = './asset/fotoprofil/' . $foto;
                    $config2['maintain_ratio']  = FALSE;
                    if ($p->photo != 'default.jpg' && $p->photo != '') {
                        $imagePath = FCPATH . 'asset/fotoprofil/';
                        $mainImagePath = $imagePath . $p->photo;
                        if (file_exists($mainImagePath)) {
                            unlink($mainImagePath);
                        }
                    }
                }
                $update = [
                    'username' => $this->security->xss_clean($this->input->post('username')),
                    'nama' => $this->security->xss_clean($this->input->post('nama', TRUE)),
                    'nama_user' => $this->security->xss_clean($this->input->post('nama_user', TRUE)),
                    'deskripsi' => $this->security->xss_clean($this->input->post('deskripsi', TRUE)),
                    'email' => $this->security->xss_clean($this->input->post('email', TRUE)),
                    'no_hp' => $this->security->xss_clean($this->input->post('no_hp', TRUE)),
                    'alamat' => $this->security->xss_clean($this->input->post('alamat', TRUE)),
                    'photo' => $foto,
                ];
                $updatedata = [
                    'username' => $this->security->xss_clean($this->input->post('username')),
                    'nama_plggn' => $this->security->xss_clean($this->input->post('nama_user', TRUE)),
                    'email' => $this->security->xss_clean($this->input->post('email', TRUE)),
                    'no_hp' => $this->security->xss_clean($this->input->post('no_hp', TRUE)),
                    'alamat' => $this->security->xss_clean($this->input->post('alamat', TRUE)),
                    'photo' => $foto,
                ];
                $where = [
                    'id_user' => $this->security->xss_clean($p->id_user)
                ];
                $up = $this->mProfil->update('user', $update, $where);
                if ($up) {
                    $this->mProfil->update_pelanggan($p->kd_merchant, $updatedata);
                    // $this->mProfil->update_data($$p->kd_merchant, $kode);
                    $this->session->set_flashdata('success', 'Data berhasil diperbarui..');
                    $this->session->set_userdata(
                        array(
                            'foto' => $foto
                        )
                    );
                    redirect('admin/cSetting', 'refresh');
                } else {
                    $this->session->set_flashdata('error', 'Data Gagal diperbarui..');
                }
            }
        }
        $getData = $this->mProfil->getData('user', ['id_user' => $this->session->userdata('id')]);
        $data = [
            'title' => 'Profil',
            'users' => $getData->row()
        ];
        $this->load->view('Admin/Layouts/head');
        $this->load->view('Admin/setting', $data);
        $this->load->view('Admin/Layouts/footer');
    }

    public function ganti_password()
    {
        if ($this->security->xss_clean($this->input->post('submit', TRUE)) == 'submit') {

            $rules = [
                [
                    'field' => 'pwLama',
                    'label' => 'Password Lama',
                    'rules' => 'trim|required|min_length[5]',

                ],
                [
                    'field' => 'pwBaru',
                    'label' => 'Password Baru',
                    'rules' => 'trim|required|min_length[4]|matches[pwBaru2]'
                ],
                [
                    'field' => 'pwBaru2',
                    'label' => 'Repeat Password',
                    'rules' => 'trim|required|matches[pwBaru]'
                ]
            ];
            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() == TRUE) {

                $getData = $this->mProfil->getData('user', ['id_user' => $this->session->userdata('id')]);
                $f = $getData->row();
                $pwBaru = $this->security->xss_clean($this->input->post('pwBaru', TRUE));
                $pwLama = $this->security->xss_clean($this->input->post('pwLama', TRUE));
                if (!password_verify($pwLama, $f->password)) {
                    $this->session->set_flashdata('error', 'Password Lama yang anda masukkan salah..');
                    redirect('admin/cprofil/ganti_password');
                }
                if ($pwBaru == $pwLama) {
                    $this->session->set_flashdata('error', 'Password Baru dan Password Lama sama, Data tidak diubah...');
                    redirect('admin/cprofil/ganti_password');
                }
                //encrypt & update password
                $hash_password = password_hash($pwBaru, PASSWORD_DEFAULT);

                $update = $this->mProfil->update('user', ['password' => $hash_password], ['id_user' => $f->id_user]);

                if ($update) {
                    $this->session->set_flashdata('success', 'Password berhasil diubah..');
                    redirect('admin/clogin/logout');
                } else {
                    $this->session->set_flashdata('error', 'Password gagal diubah..');
                }
            }
        }
        $this->index();
    }
}

/* End of file cProfil.php */
