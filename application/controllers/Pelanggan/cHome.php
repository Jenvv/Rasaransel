<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cHome extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mKatalog');
		$this->load->model('mkategori');
	}
	public function index()
	{
		$kategori = $this->mkategori->getKategori();
		$data = array(
			'menu' => $this->mKatalog->menu(),
			'kategori' => $kategori,
		);
		$this->load->view('Pelanggan/layouts/header');
		$this->load->view('Pelanggan/layouts/aside');
		$this->load->view('Pelanggan/home', $data);
		$this->load->view('Pelanggan/Layouts/footer');
	}
	public function menu()
	{
		$data = array(
			'menu' => $this->mKatalog->menu(),
		);
		$this->load->view('Pelanggan/layouts/header');
		$this->load->view('Pelanggan/layouts/aside');
		$this->load->view('Pelanggan/menu', $data);
		$this->load->view('Pelanggan/Layouts/footer');
	}
	public function kategori($id)
	{
		$kategori = $this->mkategori->getKategori();
		$getData = $this->mkategori->getData('kategori_menu', ['id_kategori' => $id]);
		$data = array(
			'menu_kategori' => $this->mKatalog->menu_kategori($id),
			'title' => $getData->row(),
			// 'kategori_col1' => array_slice($kategori, 0, 4),
			// 'kategori_col2' => array_slice($kategori,  4),
			'kategori' => $kategori,
		);
		$this->load->view('Pelanggan/layouts/header');
		$this->load->view('Pelanggan/layouts/aside');
		$this->load->view('Pelanggan/kategori', $data);
		$this->load->view('Pelanggan/Layouts/footer');
	}

	public function detail_produk($id)
	{
		$data['ulasan'] = $this->mKatalog->detail_produk($id)['ulasan'];
		$data['produk'] = $this->mKatalog->detail_produk($id)['produk'];
		$data['users'] = $this->mKatalog->getNamaPengguna($data['produk']->id_user);
		$data['menu'] = $this->mKatalog->menu_detail($data['produk']->id_user, $id);
		$data['menus'] = $this->mKatalog->menu();
		$data['diskon'] = $this->mKatalog->menu_detail_diskon($data['produk']->id_user, $id);

		// Debugging data
		// echo '<pre>';
		// print_r($data['menu']);
		// echo '</pre>';
		// exit;

		$this->load->view('Pelanggan/layouts/header');
		$this->load->view('Pelanggan/layouts/aside');
		$this->load->view('Pelanggan/detail_produk', $data);
		$this->load->view('Pelanggan/Layouts/footer');
	}

	function getsecurity($value = '')
	{
		$id = $this->session->userdata('id_pelanggan');
		if (empty($id)) {
			$this->session->sess_destroy();
			redirect('pelanggan/clogin');
		}
	}
	public function cart()
	{

		// $this->protect->protect();
		$this->getsecurity();
		$data = array(
			'id' => $this->input->post('id'),
			'name' => $this->input->post('name'),
			'price' => $this->input->post('price'),
			'qty' => $this->input->post('qty'),
			'user' => $this->input->post('user'),
			'picture' => $this->input->post('picture')
		);
		$this->cart->insert($data);
		redirect('pelanggan/chome/view_cart');
	}
	public function update_cart()
	{
		$this->getsecurity();

		$i = 1;
		foreach ($this->cart->contents() as $items) {
			$data = array(
				'rowid'  => $items['rowid'],
				'qty'    => $this->input->post($i . '[qty]')
			);
			$this->cart->update($data);
			$i++;
		}
		redirect('pelanggan/chome/view_cart');
	}
	public function delete($rowid)
	{
		$this->getsecurity();

		$this->cart->remove($rowid);
		redirect('pelanggan/chome/view_cart');
	}
	public function view_cart()
	{
		$this->getsecurity();

		// $this->protect->protect();
		$this->load->view('Pelanggan/layouts/header');
		$this->load->view('Pelanggan/layouts/aside');
		$this->load->view('Pelanggan/cart');
		$this->load->view('Pelanggan/Layouts/footer');
	}


	public function pengiriman()
	{
		$this->getsecurity();

		$data = array(
			'pelanggan' => $this->mKatalog->data_pelanggan()
		);
		$this->load->view('Pelanggan/layouts/header');
		$this->load->view('Pelanggan/layouts/aside');
		$this->load->view('Pelanggan/pengiriman', $data);
		$this->load->view('Pelanggan/Layouts/footer');
	}

	public function checkout()
	{
		$this->getsecurity();

		$this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required');
		$this->form_validation->set_rules('metode', 'Metode Pembayaran', 'required');

		if ($this->form_validation->run() == FALSE) {
			// $this->protect->protect();
			$data = array(
				'pelanggan' => $this->mKatalog->data_pelanggan()
			);
			$this->load->view('Pelanggan/layouts/header');
			$this->load->view('Pelanggan/layouts/aside');
			$this->load->view('Pelanggan/pengiriman', $data);
			$this->load->view('Pelanggan/Layouts/footer');
		} else {
			$metode_bayar = $this->input->post('metode');
			if ($metode_bayar == '1') {
				$status_order = '1';
			} else {
				$status_order = '0';
			}
			$data = array(
				'id_pelanggan' => $this->session->userdata('id_pelanggan'),
				'id_user' => $this->input->post('user'),
				'tgl_transaksi' => date('Y-m-d'),
				'total_bayar' => $this->input->post('total'),
				'status_order' => $status_order,
				'ongkir' => $this->input->post('ongkir'),
				'status_bayar' => '0',
				'alamat_detail' => $this->input->post('alamat_detail'),
				'metode_bayar' => $this->input->post('metode')
			);
			$this->mKatalog->checkout($data);



			$cek_id_transaksi = $this->db->query("SELECT MAX(id_pesanan) as id FROM `pesanan`")->row();
			//menyimpan pesanan ke detail transaksi
			foreach ($this->cart->contents() as $item) {
				$data_rinci = array(
					'id_pesanan' => $cek_id_transaksi->id,
					'id_produk' => $item['id'],
					'qty' => $item['qty']
				);
				$this->mKatalog->detail_transaksi($data_rinci);
			}
			$this->cart->destroy();
			$this->session->set_flashdata('success', 'Pesanan Anda Berhasil Dikirim!');
			redirect('Pelanggan/cHome');
		}
	}

	public function kontak()
	{
		$this->load->view('Pelanggan/layouts/header');
		$this->load->view('Pelanggan/layouts/aside');
		$this->load->view('Pelanggan/kontak');
		$this->load->view('Pelanggan/Layouts/footer');
	}
}

/* End of file cHome.php */
