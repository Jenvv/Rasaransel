<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cLaporan_Transaksi extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mLaporan_user', 'mLaporan');
		$this->getsecurity();
	}
	function getsecurity($value = '')
	{
		$is_pemilik = $this->session->userdata('level_user') == 1;
		if (empty($is_pemilik)) {
			$this->session->sess_destroy();
			$this->session->set_flashdata('error', 'Anda Belum Melakukan Login!');
			redirect('pemilik/clogin');
		}
	}
	public function index()
	{
		// $this->protect->protect_admin();

		$this->load->view('Pemilik/Layouts/head');
		$this->load->view('Pemilik/LaporanTransaksi/lapTransaksi');
		$this->load->view('Pemilik/Layouts/footer');
	}
	public function lap_harian_transaksi()
	{
		$tanggal = $this->input->post('tanggal');
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');
		$data = $this->mLaporan->lap_harian_transaksi($tanggal, $bulan, $tahun);
		if ($data == NULL) {
			$this->session->set_flashdata('error', 'Laporan Pada Tanggal ' . $tanggal . '-' . $bulan . '-' . $tahun . ' Tidak Ada!');
			redirect('pemilik/cLaporan_Transaksi');
		} else {
			// Memanggil library FPDF
			require('asset/fpdf/fpdf.php');

			// Instance object dan memberikan pengaturan halaman PDF
			$pdf = new FPDF('P', 'mm', 'A4');
			$pdf->AddPage();

			$pdf->SetFont('Times', 'B', 14);
			$pdf->Image('asset/icon/logo.png', 6, 3, 35);
			$pdf->Cell(0, 20, 'LAPORAN USER HARIAN', 0, 1, 'C');
			$pdf->SetLineWidth(0);
			$pdf->Cell(10, 10, '', 0, 1); // Mengurangi nilai agar jarak tidak terlalu jauh

			// Menghitung lebar total tabel
			$totalWidth = 20 + 30 + 40 + 30 + 50 + 30;

			// Menentukan posisi x untuk tabel agar berada di tengah
			$x = ($pdf->GetPageWidth() - $totalWidth) / 2;
			$pdf->SetX($x);

			$pdf->SetFont('Times', 'B', 9);
			$pdf->Cell(10, 7, 'Id', 1, 0, 'C');
			$pdf->Cell(30, 7, 'Username', 1, 0, 'C');
			$pdf->Cell(40, 7, 'Nama Pelanggan', 1, 0, 'C');
			$pdf->Cell(30, 7, 'No Telepon', 1, 0, 'C');
			$pdf->Cell(50, 7, 'Email', 1, 0, 'C');
			$pdf->Cell(40, 7, 'Tanggal Daftar', 1, 1, 'C');

			$pdf->SetFont('Times', '', 10);
			$no = 1;

			$data = $this->mLaporan->lap_harian_transaksi($tanggal, $bulan, $tahun);
			foreach ($data as $key => $value) {
				$pdf->SetX($x); // Mengatur posisi x sebelum menulis setiap baris data
				$pdf->Cell(10, 6, $value->id_pelanggan, 1, 0, 'C');
				$pdf->Cell(30, 6, $value->username, 1, 0);
				$pdf->Cell(40, 6, $value->nama_plggn, 1, 0);
				$pdf->Cell(30, 6, $value->no_hp, 1, 0);
				$pdf->Cell(50, 6, $value->email, 1, 0);
				$pdf->Cell(40, 6, $value->created_at, 1, 1);
			}
			$pdf->Output();
		}
	}

	public function lap_bulanan_transaksi()
	{
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');
		$data = $this->mLaporan->lap_bulanan_transaksi($bulan, $tahun);
		if ($data == NULL) {
			$this->session->set_flashdata('error', 'Laporan Pada Tanggal ' . $bulan . '-' . $tahun . ' Tidak Ada!');
			redirect('pemilik/cLaporan_Transaksi');
		} else {
			// Memanggil library FPDF
			require('asset/fpdf/fpdf.php');

			// Instance object dan memberikan pengaturan halaman PDF
			$pdf = new FPDF('P', 'mm', 'A4');
			$pdf->AddPage();

			$pdf->SetFont('Times', 'B', 14);
			$pdf->Image('asset/icon/logo.png', 6, 3, 35);
			$pdf->Cell(0, 20, 'LAPORAN USER BULANAN', 0, 1, 'C');
			$pdf->SetLineWidth(0);
			$pdf->Cell(10, 10, '', 0, 1); // Mengurangi nilai agar jarak tidak terlalu jauh

			// Menghitung lebar total tabel
			$totalWidth = 20 + 30 + 40 + 30 + 50 + 30;

			// Menentukan posisi x untuk tabel agar berada di tengah
			$x = ($pdf->GetPageWidth() - $totalWidth) / 2;
			$pdf->SetX($x);

			$pdf->SetFont('Times', 'B', 9);
			$pdf->Cell(10, 7, 'Id', 1, 0, 'C');
			$pdf->Cell(30, 7, 'Username', 1, 0, 'C');
			$pdf->Cell(40, 7, 'Nama Pelanggan', 1, 0, 'C');
			$pdf->Cell(30, 7, 'No Telepon', 1, 0, 'C');
			$pdf->Cell(50, 7, 'Email', 1, 0, 'C');
			$pdf->Cell(40, 7, 'Tanggal Daftar', 1, 1, 'C');

			$pdf->SetFont('Times', '', 10);
			$no = 1;

			$data = $this->mLaporan->lap_bulanan_transaksi($bulan, $tahun);
			foreach ($data as $key => $value) {
				$pdf->SetX($x); // Mengatur posisi x sebelum menulis setiap baris data
				$pdf->Cell(10, 6, $value->id_pelanggan, 1, 0, 'C');
				$pdf->Cell(30, 6, $value->username, 1, 0);
				$pdf->Cell(40, 6, $value->nama_plggn, 1, 0);
				$pdf->Cell(30, 6, $value->no_hp, 1, 0);
				$pdf->Cell(50, 6, $value->email, 1, 0);
				$pdf->Cell(40, 6, $value->created_at, 1, 1);
			}
			$pdf->Output();
		}
		// $data = array(
		// 	'bulan' => $bulan,
		// 	'tahun' => $tahun,
		// 	'laporan' => $this->mLaporan->lap_bulanan_transaksi($bulan, $tahun)
		// );
		// $this->load->view('Pemilik/Layouts/head');
		// $this->load->view('Pemilik/LaporanTransaksi/bulanan', $data);
		// $this->load->view('Pemilik/Layouts/footer');
	}
	public function lap_tahunan_transaksi()
	{
		$tahun = $this->input->post('tahun');
		$data = $this->mLaporan->lap_bulanan_transaksi($tahun);
		if ($data == NULL) {
			$this->session->set_flashdata('error', 'Laporan Pada Tanggal ' . $tahun . ' Tidak Ada!');
			redirect('pemilik/cLaporan_Transaksi');
		} else {
			// Memanggil library FPDF
			require('asset/fpdf/fpdf.php');

			// Instance object dan memberikan pengaturan halaman PDF
			$pdf = new FPDF('P', 'mm', 'A4');
			$pdf->AddPage();

			$pdf->SetFont('Times', 'B', 14);
			$pdf->Image('asset/icon/logo.png', 6, 3, 35);
			$pdf->Cell(0, 20, 'LAPORAN USER TAHUNAN', 0, 1, 'C');
			$pdf->SetLineWidth(0);
			$pdf->Cell(10, 10, '', 0, 1); // Mengurangi nilai agar jarak tidak terlalu jauh

			// Menghitung lebar total tabel
			$totalWidth = 20 + 30 + 40 + 30 + 50 + 30;

			// Menentukan posisi x untuk tabel agar berada di tengah
			$x = ($pdf->GetPageWidth() - $totalWidth) / 2;
			$pdf->SetX($x);

			$pdf->SetFont('Times', 'B', 9);
			$pdf->Cell(10, 7, 'Id', 1, 0, 'C');
			$pdf->Cell(30, 7, 'Username', 1, 0, 'C');
			$pdf->Cell(40, 7, 'Nama Pelanggan', 1, 0, 'C');
			$pdf->Cell(30, 7, 'No Telepon', 1, 0, 'C');
			$pdf->Cell(50, 7, 'Email', 1, 0, 'C');
			$pdf->Cell(40, 7, 'Tanggal Daftar', 1, 1, 'C');

			$pdf->SetFont('Times', '', 10);
			$no = 1;

			$data = $this->mLaporan->lap_tahunan_transaksi($tahun);
			foreach ($data as $key => $value) {
				$pdf->SetX($x); // Mengatur posisi x sebelum menulis setiap baris data
				$pdf->Cell(10, 6, $value->id_pelanggan, 1, 0, 'C');
				$pdf->Cell(30, 6, $value->username, 1, 0);
				$pdf->Cell(40, 6, $value->nama_plggn, 1, 0);
				$pdf->Cell(30, 6, $value->no_hp, 1, 0);
				$pdf->Cell(50, 6, $value->email, 1, 0);
				$pdf->Cell(40, 6, $value->created_at, 1, 1);
			}
			$pdf->Output();
		}
		// $data = array(
		// 	'tahun' => $tahun,
		// 	'laporan' => $this->mLaporan->lap_tahunan_transaksi($tahun)
		// );
		// $this->load->view('Pemilik/Layouts/head');
		// $this->load->view('Pemilik/LaporanTransaksi/tahunan', $data);
		// $this->load->view('Pemilik/Layouts/footer');
	}
	public function cetak()
	{
		// memanggil library FPDF
		require('asset/fpdf/fpdf.php');

		// intance object dan memberikan pengaturan halaman PDF
		$pdf = new FPDF('P', 'mm', 'A4');
		$pdf->AddPage();

		$pdf->SetFont('Times', 'B', 14);
		$pdf->Image('asset/icon/logo.png', 3, 3, 40);
		$pdf->Cell(200, 40, 'LAPORAN HASIL ANALISIS PELANGGAN', 0, 0, 'C');
		$pdf->SetLineWidth(0);
		$pdf->Cell(10, 30, '', 0, 1);
		$pdf->SetFont('Times', 'B', 9);
		$pdf->Cell(10, 7, 'No', 1, 0, 'C');
		$pdf->Cell(50, 7, 'Nama Pelanggan', 1, 0, 'C');
		$pdf->Cell(50, 7, '	No Telepon', 1, 0, 'C');
		$pdf->Cell(40, 7, 'Level Member', 1, 0, 'C');


		$pdf->Cell(10, 7, '', 0, 1);
		$pdf->SetFont('Times', '', 10);
		$no = 1;


		$date = date('Y-m-d');
		$data = $this->mPelanggan->pelanggan($date);
		foreach ($data as $key => $value) {
			if ($value->member == '3') {
				$status = 'Gold';
			} else if ($value->member == '2') {
				$status = 'Silver';
			} else {
				$status = 'Clasic';
			}
			$pdf->Cell(10, 6, $no++, 1, 0, 'C');
			$pdf->Cell(50, 6, $value->nama_konsumen, 1, 0);
			$pdf->Cell(50, 6, $value->no_hp_konsumen, 1, 0);
			$pdf->Cell(40, 6, $status, 1, 1);
		}
		$pdf->Output();
	}
	public function lap_harian_merchant()
	{
		$tanggal = $this->input->post('tanggal');
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');
		$data = $this->mLaporan->lap_harian_merchant($tanggal, $bulan, $tahun);
		if ($data == NULL) {
			$this->session->set_flashdata('errors', 'Laporan Pada Tanggal ' . $tanggal . '-' . $bulan . '-' . $tahun . ' Tidak Ada!');
			redirect('pemilik/cLaporan_Transaksi');
		} else {
			// Memanggil library FPDF
			require('asset/fpdf/fpdf.php');

			// Instance object dan memberikan pengaturan halaman PDF
			$pdf = new FPDF('P', 'mm', 'A4');
			$pdf->AddPage();

			$pdf->SetFont('Times', 'B', 14);
			$pdf->Image('asset/icon/logo.png', 6, 3, 35);
			$pdf->Cell(0, 20, 'LAPORAN MERCHANT HARIAN', 0, 1, 'C');
			$pdf->SetLineWidth(0);
			$pdf->Cell(10, 10, '', 0, 1); // Mengurangi nilai agar jarak tidak terlalu jauh

			// Menghitung lebar total tabel
			$totalWidth = 10 + 40 + 30 + 50 + 40 + 20;

			// Menentukan posisi x untuk tabel agar berada di tengah
			$x = ($pdf->GetPageWidth() - $totalWidth) / 2;
			$pdf->SetX($x);

			$pdf->SetFont('Times', 'B', 9);
			$pdf->Cell(10, 7, 'Id', 1, 0, 'C');
			$pdf->Cell(40, 7, 'Nama Toko', 1, 0, 'C');
			$pdf->Cell(30, 7, 'No Telepon', 1, 0, 'C');
			$pdf->Cell(50, 7, 'Email', 1, 0, 'C');
			$pdf->Cell(40, 7, 'Tanggal Daftar', 1, 0, 'C');
			$pdf->Cell(20, 7, 'Status', 1, 1, 'C');

			$pdf->SetFont('Times', '', 10);
			$no = 1;

			$data = $this->mLaporan->lap_harian_merchant($tanggal, $bulan, $tahun);
			foreach ($data as $key => $value) {
				$pdf->SetX($x); // Mengatur posisi x sebelum menulis setiap baris data
				$pdf->Cell(10, 6, $value->id_user, 1, 0, 'C');
				$pdf->Cell(40, 6, $value->nama, 1, 0);
				$pdf->Cell(30, 6, $value->no_hp, 1, 0);
				$pdf->Cell(50, 6, $value->email, 1, 0);
				$pdf->Cell(40, 6, $value->created_at, 1, 0);
				$pdf->Cell(20, 6, $value->is_active ? 'Aktif' : 'Tidak Aktif', 1, 1); // Assuming is_active is a boolean
			}
			$pdf->Output();
		}
	}
	public function lap_bulanan_merchant()
	{
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');
		$data = $this->mLaporan->lap_bulanan_merchant($bulan, $tahun);
		if ($data == NULL) {
			$this->session->set_flashdata('errors', 'Laporan Pada Tanggal ' . $bulan . '-' . $tahun . ' Tidak Ada!');
			redirect('pemilik/cLaporan_Transaksi');
		} else {
			// Memanggil library FPDF
			require('asset/fpdf/fpdf.php');

			// Instance object dan memberikan pengaturan halaman PDF
			$pdf = new FPDF('P', 'mm', 'A4');
			$pdf->AddPage();

			$pdf->SetFont('Times', 'B', 14);
			$pdf->Image('asset/icon/logo.png', 6, 3, 35);
			$pdf->Cell(0, 20, 'LAPORAN MERCHANT BULANAN', 0, 1, 'C');
			$pdf->SetLineWidth(0);
			$pdf->Cell(10, 10, '', 0, 1); // Mengurangi nilai agar jarak tidak terlalu jauh

			// Menghitung lebar total tabel
			$totalWidth = 10 + 40 + 30 + 50 + 40 + 20;

			// Menentukan posisi x untuk tabel agar berada di tengah
			$x = ($pdf->GetPageWidth() - $totalWidth) / 2;
			$pdf->SetX($x);

			$pdf->SetFont('Times', 'B', 9);
			$pdf->Cell(10, 7, 'Id', 1, 0, 'C');
			$pdf->Cell(40, 7, 'Nama Toko', 1, 0, 'C');
			$pdf->Cell(30, 7, 'No Telepon', 1, 0, 'C');
			$pdf->Cell(50, 7, 'Email', 1, 0, 'C');
			$pdf->Cell(40, 7, 'Tanggal Daftar', 1, 0, 'C');
			$pdf->Cell(20, 7, 'Status', 1, 1, 'C');

			$pdf->SetFont('Times', '', 10);
			$no = 1;

			$data = $this->mLaporan->lap_bulanan_merchant($bulan, $tahun);
			foreach ($data as $key => $value) {
				$pdf->SetX($x); // Mengatur posisi x sebelum menulis setiap baris data
				$pdf->Cell(10, 6, $value->id_user, 1, 0, 'C');
				$pdf->Cell(40, 6, $value->nama, 1, 0);
				$pdf->Cell(30, 6, $value->no_hp, 1, 0);
				$pdf->Cell(50, 6, $value->email, 1, 0);
				$pdf->Cell(40, 6, $value->created_at, 1, 0);
				$pdf->Cell(20, 6, $value->is_active ? 'Aktif' : 'Tidak Aktif', 1, 1); // Assuming is_active is a boolean
			}
			$pdf->Output();
		}

		// $data = array(
		// 	'bulan' => $bulan,
		// 	'tahun' => $tahun,
		// 	'laporan' => $this->mLaporan->lap_bulanan_transaksi($bulan, $tahun)
		// );
		// $this->load->view('Pemilik/Layouts/head');
		// $this->load->view('Pemilik/LaporanTransaksi/bulanan', $data);
		// $this->load->view('Pemilik/Layouts/footer');
	}
	public function lap_tahunan_merchant()
	{
		$tahun = $this->input->post('tahun');
		$data = $this->mLaporan->lap_tahunan_merchant($tahun);
		if ($data == NULL) {
			$this->session->set_flashdata('errors', 'Laporan Pada Tanggal ' . $tahun . ' Tidak Ada!');
			redirect('pemilik/cLaporan_Transaksi');
		} else {
			// Memanggil library FPDF
			require('asset/fpdf/fpdf.php');

			// Instance object dan memberikan pengaturan halaman PDF
			$pdf = new FPDF('P', 'mm', 'A4');
			$pdf->AddPage();

			$pdf->SetFont('Times', 'B', 14);
			$pdf->Image('asset/icon/logo.png', 6, 3, 35);
			$pdf->Cell(0, 20, 'LAPORAN MERCHANT TAHUNAN', 0, 1, 'C');
			$pdf->SetLineWidth(0);
			$pdf->Cell(10, 10, '', 0, 1); // Mengurangi nilai agar jarak tidak terlalu jauh

			// Menghitung lebar total tabel
			$totalWidth = 10 + 40 + 30 + 50 + 40 + 20;

			// Menentukan posisi x untuk tabel agar berada di tengah
			$x = ($pdf->GetPageWidth() - $totalWidth) / 2;
			$pdf->SetX($x);

			$pdf->SetFont('Times', 'B', 9);
			$pdf->Cell(10, 7, 'Id', 1, 0, 'C');
			$pdf->Cell(40, 7, 'Nama Toko', 1, 0, 'C');
			$pdf->Cell(30, 7, 'No Telepon', 1, 0, 'C');
			$pdf->Cell(50, 7, 'Email', 1, 0, 'C');
			$pdf->Cell(40, 7, 'Tanggal Daftar', 1, 0, 'C');
			$pdf->Cell(20, 7, 'Status', 1, 1, 'C');

			$pdf->SetFont('Times', '', 10);
			$no = 1;

			$data = $this->mLaporan->lap_tahunan_merchant($tahun);
			foreach ($data as $key => $value) {
				$pdf->SetX($x); // Mengatur posisi x sebelum menulis setiap baris data
				$pdf->Cell(10, 6, $value->id_user, 1, 0, 'C');
				$pdf->Cell(40, 6, $value->nama, 1, 0);
				$pdf->Cell(30, 6, $value->no_hp, 1, 0);
				$pdf->Cell(50, 6, $value->email, 1, 0);
				$pdf->Cell(40, 6, $value->created_at, 1, 0);
				$pdf->Cell(20, 6, $value->is_active ? 'Aktif' : 'Tidak Aktif', 1, 1); // Assuming is_active is a boolean
			}
			$pdf->Output();
		}
		// $data = array(
		// 	'bulan' => $bulan,
		// 	'tahun' => $tahun,
		// 	'laporan' => $this->mLaporan->lap_bulanan_transaksi($bulan, $tahun)
		// );
		// $this->load->view('Pemilik/Layouts/head');
		// $this->load->view('Pemilik/LaporanTransaksi/bulanan', $data);
		// $this->load->view('Pemilik/Layouts/footer');
	}
}

/* End of file cLaporan_Transaksi.php */
