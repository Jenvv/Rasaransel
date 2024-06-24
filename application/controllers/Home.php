<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        redirect('pelanggan/chome');
    }
    public function error_404()
    {
        $this->load->view('errors/404_err');
    }
}
