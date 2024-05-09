<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mLogin_pelanggan extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function register($data)
	{
		$this->db->insert('pelanggan', $data);
	}
}

/* End of file mLogin_pelanggan.php */
