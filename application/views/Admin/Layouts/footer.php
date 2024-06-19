<footer class="footer">
	<div class="container-fluid">
		<div class="row text-muted">
			<div class="col-6 text-left">
				<p class="mb-0">
					RASA RANSEL | <a href='' title='' target='_blank'></a>

				</p>
			</div>
			<div class="col-6 text-right">

			</div>
		</div>
	</div>
</footer>
</div>
</div>


<script script script src="<?= base_url('asset/adminkit/examples/') ?>js/vendor.js">
</script>
<script src="<?= base_url('asset/adminkit/examples/') ?>js/app.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
<link href="<?= base_url('asset/') ?>DataTables/datatables.min.css" rel="stylesheet">
<script src="<?= base_url('asset/') ?>DataTables/datatables.min.js"></script>

<!-- <script src="https://ajax.googleapibs.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
	async function showAlert(event) {
		event.preventDefault(); // Mencegah tindakan default dari tautan

		const result = await new window.Swal({
			icon: 'warning',
			title: 'Apakah Anda Yakin?',
			text: "Ingin Menghapus Produk Ini?",
			showCancelButton: true,
			confirmButtonText: 'Hapus',
		});

		if (result.value) {
			// Arahkan pengguna ke URL penghapusan setelah konfirmasi diterima
			window.location.href = event.target.getAttribute('href');

		}
	}
</script>

<script>
	$('#myTable').DataTable({
		select: true
	});
</script>
<script>
	// In your Javascript
	$(document).ready(function() {
		$('.js-example-basic-single').select2();
	});
</script>
<script>
	window.setTimeout(function() {
		$(".alert").fadeTo(500, 0).slideUp(500, function() {
			$(this).remove();
		});
	}, 3000)
</script>

<script>
	$(function() {
		$(".datepicker").datepicker({
			dateFormat: 'dd-mm-yy'
		});

	});
</script>
<script>
	<?php
	$id_user = $this->session->userdata('id');
	$transaksi = $this->db->query("SELECT SUM(total_bayar) as total, tgl_transaksi FROM `pesanan` WHERE `id_user` = $id_user GROUP BY tgl_transaksi")->result();

	$tgl = [];
	$total = [];

	foreach ($transaksi as $key => $value) {
		$tgl[] = $value->tgl_transaksi;
		$total[] = $value->total;
	}
	?>
	var ctx = document.getElementById('transaksi');
	var grafik = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: <?= json_encode($tgl) ?>,
			datasets: [{
				label: 'Grafik Analisis Transaksi',
				data: <?= json_encode($total) ?>,
				backgroundColor: 'rgba(25, 136, 255, 1)',
				borderColor: 'rgba(54, 162, 235, 1)',
				fill: false,
				borderWidth: 1
			}]
		},
		options: {
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero: true
					}
				}]
			}
		}
	});
</script>
<script>
	<?php
	$id_user = $this->session->userdata('id');
	$produk = $this->db->query("SELECT SUM(qty) as qty, nama_produk FROM `pesanan` JOIN detail_pesanan ON pesanan.id_pesanan=detail_pesanan.id_pesanan JOIN menu_makanan ON menu_makanan.id_produk=detail_pesanan.id_produk WHERE menu_makanan.id_user = $id_user GROUP BY menu_makanan.id_produk")->result();
	foreach ($produk as $key => $data) {
		$menu[] = $data->nama_produk;
		$qty[] = $data->qty;
	}
	?>
	var ctx = document.getElementById('produk');
	var grafik = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: <?= json_encode($menu) ?>,
			datasets: [{
				label: 'Grafik Analisis Produk',
				data: <?= json_encode($qty) ?>,
				backgroundColor: [
					'rgba(201, 77, 77, 1)',
					'rgba(128, 98, 98, 1)',
					'rgba(0, 0, 0, 1)',
					'rgba(128, 128, 128, 1)',
					'rgba(255, 99, 132, 0.80)',
					'rgba(54, 162, 235, 0.80)',
					'rgba(255, 206, 86, 0.80)',
					'rgba(75, 192, 192, 0.80)',
					'rgba(153, 102, 255, 0.80)',
					'rgba(255, 159, 64, 0.80)',
					'rgba(201, 76, 76, 0.3)',
					'rgba(201, 77, 77, 1)',
					'rgba(0, 140, 162, 1)',
					'rgba(158, 109, 8, 1)',
					'rgba(201, 76, 76, 0.8)',
					'rgba(0, 129, 212, 1)',
					'rgba(201, 77, 201, 1)',
					'rgba(255, 207, 207, 1)',
					'rgba(201, 77, 77, 1)',
					'rgba(128, 98, 98, 1)',
					'rgba(0, 0, 0, 1)',
					'rgba(128, 128, 128, 1)',
					'rgba(255, 99, 132, 0.80)',
					'rgba(54, 162, 235, 0.80)',
					'rgba(255, 206, 86, 0.80)',
					'rgba(75, 192, 192, 0.80)',
					'rgba(153, 102, 255, 0.80)',
					'rgba(255, 159, 64, 0.80)',
					'rgba(201, 76, 76, 0.3)',
					'rgba(201, 77, 77, 1)',
					'rgba(0, 140, 162, 1)',
					'rgba(158, 109, 8, 1)',
					'rgba(201, 76, 76, 0.8)',
					'rgba(0, 129, 212, 1)',
					'rgba(201, 77, 201, 1)',
					'rgba(255, 207, 207, 1)',
					'rgba(201, 77, 77, 1)',
					'rgba(128, 98, 98, 1)',
					'rgba(0, 0, 0, 1)',
					'rgba(128, 128, 128, 1)',
					'rgba(255, 99, 132, 0.80)',
					'rgba(54, 162, 235, 0.80)',
					'rgba(255, 206, 86, 0.80)',
					'rgba(75, 192, 192, 0.80)',
					'rgba(153, 102, 255, 0.80)',
					'rgba(255, 159, 64, 0.80)',
					'rgba(201, 76, 76, 0.3)',
					'rgba(201, 77, 77, 1)',
					'rgba(0, 140, 162, 1)',
					'rgba(158, 109, 8, 1)',
					'rgba(201, 76, 76, 0.8)',
					'rgba(0, 129, 212, 1)',
					'rgba(201, 77, 201, 1)',
					'rgba(255, 207, 207, 1)',
					'rgba(201, 77, 77, 1)',
					'rgba(128, 98, 98, 1)',
					'rgba(0, 0, 0, 1)',
					'rgba(128, 128, 128, 1)',
					'rgba(255, 99, 132, 0.80)',
					'rgba(54, 162, 235, 0.80)',
					'rgba(255, 206, 86, 0.80)',
					'rgba(75, 192, 192, 0.80)',
					'rgba(153, 102, 255, 0.80)',
					'rgba(255, 159, 64, 0.80)',
					'rgba(201, 76, 76, 0.3)',
					'rgba(201, 77, 77, 1)',
					'rgba(0, 140, 162, 1)',
					'rgba(158, 109, 8, 1)',
					'rgba(201, 76, 76, 0.8)',
					'rgba(0, 129, 212, 1)',
					'rgba(201, 77, 201, 1)',
					'rgba(255, 207, 207, 1)',
				],
				borderColor: [
					'rgba(201, 77, 77, 1)',
					'rgba(128, 98, 98, 1)',
					'rgba(0, 0, 0, 1)',
					'rgba(128, 128, 128, 1)',
					'rgba(255, 99, 132, 0.80)',
					'rgba(54, 162, 235, 0.80)',
					'rgba(255, 206, 86, 0.80)',
					'rgba(75, 192, 192, 0.80)',
					'rgba(153, 102, 255, 0.80)',
					'rgba(255, 159, 64, 0.80)',
					'rgba(201, 76, 76, 0.3)',
					'rgba(201, 77, 77, 1)',
					'rgba(0, 140, 162, 1)',
					'rgba(158, 109, 8, 1)',
					'rgba(201, 76, 76, 0.8)',
					'rgba(0, 129, 212, 1)',
					'rgba(201, 77, 201, 1)',
					'rgba(255, 207, 207, 1)',
					'rgba(201, 77, 77, 1)',
					'rgba(128, 98, 98, 1)',
					'rgba(0, 0, 0, 1)',
					'rgba(128, 128, 128, 1)',
					'rgba(255, 99, 132, 0.80)',
					'rgba(54, 162, 235, 0.80)',
					'rgba(255, 206, 86, 0.80)',
					'rgba(75, 192, 192, 0.80)',
					'rgba(153, 102, 255, 0.80)',
					'rgba(255, 159, 64, 0.80)',
					'rgba(201, 76, 76, 0.3)',
					'rgba(201, 77, 77, 1)',
					'rgba(0, 140, 162, 1)',
					'rgba(158, 109, 8, 1)',
					'rgba(201, 76, 76, 0.8)',
					'rgba(0, 129, 212, 1)',
					'rgba(201, 77, 201, 1)',
					'rgba(255, 207, 207, 1)',
					'rgba(201, 77, 77, 1)',
					'rgba(128, 98, 98, 1)',
					'rgba(0, 0, 0, 1)',
					'rgba(128, 128, 128, 1)',
					'rgba(255, 99, 132, 0.80)',
					'rgba(54, 162, 235, 0.80)',
					'rgba(255, 206, 86, 0.80)',
					'rgba(75, 192, 192, 0.80)',
					'rgba(153, 102, 255, 0.80)',
					'rgba(255, 159, 64, 0.80)',
					'rgba(201, 76, 76, 0.3)',
					'rgba(201, 77, 77, 1)',
					'rgba(0, 140, 162, 1)',
					'rgba(158, 109, 8, 1)',
					'rgba(201, 76, 76, 0.8)',
					'rgba(0, 129, 212, 1)',
					'rgba(201, 77, 201, 1)',
					'rgba(255, 207, 207, 1)',
					'rgba(201, 77, 77, 1)',
					'rgba(128, 98, 98, 1)',
					'rgba(0, 0, 0, 1)',
					'rgba(128, 128, 128, 1)',
					'rgba(255, 99, 132, 0.80)',
					'rgba(54, 162, 235, 0.80)',
					'rgba(255, 206, 86, 0.80)',
					'rgba(75, 192, 192, 0.80)',
					'rgba(153, 102, 255, 0.80)',
					'rgba(255, 159, 64, 0.80)',
					'rgba(201, 76, 76, 0.3)',
					'rgba(201, 77, 77, 1)',
					'rgba(0, 140, 162, 1)',
					'rgba(158, 109, 8, 1)',
					'rgba(201, 76, 76, 0.8)',
					'rgba(0, 129, 212, 1)',
					'rgba(201, 77, 201, 1)',
					'rgba(255, 207, 207, 1)',
				],
				fill: false,
				borderWidth: 1
			}]
		},
		options: {
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero: true
					}
				}]
			}
		}
	});
</script>
<script>
	<?php
	$id_user = $this->session->userdata('id');
	$pelanggan = $this->db->query("SELECT SUM(total_bayar) as total, nama_plggn FROM `pesanan` JOIN pelanggan ON pelanggan.id_pelanggan=pesanan.id_pelanggan WHERE pesanan.id_user = $id_user GROUP BY pelanggan.id_pelanggan")->result();
	foreach ($pelanggan as $key => $data) {
		$nama_pelanggan[] = $data->nama_plggn;
		$total_belanja[] = $data->total;
	}
	?>
	var ctx = document.getElementById('pelanggan');
	var grafik = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: <?= json_encode($nama_pelanggan) ?>,
			datasets: [{
				label: 'Grafik Total Transaksi Per Pelanggan',
				data: <?= json_encode($total_belanja) ?>,
				backgroundColor: [
					'rgba(201, 77, 77, 1)',
					'rgba(128, 98, 98, 1)',
					'rgba(0, 0, 0, 1)',
					'rgba(128, 128, 128, 1)',
					'rgba(255, 99, 132, 0.80)',
					'rgba(54, 162, 235, 0.80)',
					'rgba(255, 206, 86, 0.80)',
					'rgba(75, 192, 192, 0.80)',
					'rgba(153, 102, 255, 0.80)',
					'rgba(255, 159, 64, 0.80)',
					'rgba(201, 76, 76, 0.3)',
					'rgba(201, 77, 77, 1)',
					'rgba(0, 140, 162, 1)',
					'rgba(158, 109, 8, 1)',
					'rgba(201, 76, 76, 0.8)',
					'rgba(0, 129, 212, 1)',
					'rgba(201, 77, 201, 1)',
					'rgba(255, 207, 207, 1)',
					'rgba(201, 77, 77, 1)',
					'rgba(128, 98, 98, 1)',
					'rgba(0, 0, 0, 1)',
					'rgba(128, 128, 128, 1)',
					'rgba(255, 99, 132, 0.80)',
					'rgba(54, 162, 235, 0.80)',
					'rgba(255, 206, 86, 0.80)',
					'rgba(75, 192, 192, 0.80)',
					'rgba(153, 102, 255, 0.80)',
					'rgba(255, 159, 64, 0.80)',
					'rgba(201, 76, 76, 0.3)',
					'rgba(201, 77, 77, 1)',
					'rgba(0, 140, 162, 1)',
					'rgba(158, 109, 8, 1)',
					'rgba(201, 76, 76, 0.8)',
					'rgba(0, 129, 212, 1)',
					'rgba(201, 77, 201, 1)',
					'rgba(255, 207, 207, 1)',
				],
				borderColor: [
					'rgba(201, 77, 77, 1)',
					'rgba(128, 98, 98, 1)',
					'rgba(0, 0, 0, 1)',
					'rgba(128, 128, 128, 1)',
					'rgba(255, 99, 132, 0.80)',
					'rgba(54, 162, 235, 0.80)',
					'rgba(255, 206, 86, 0.80)',
					'rgba(75, 192, 192, 0.80)',
					'rgba(153, 102, 255, 0.80)',
					'rgba(255, 159, 64, 0.80)',
					'rgba(201, 76, 76, 0.3)',
					'rgba(201, 77, 77, 1)',
					'rgba(0, 140, 162, 1)',
					'rgba(158, 109, 8, 1)',
					'rgba(201, 76, 76, 0.8)',
					'rgba(0, 129, 212, 1)',
					'rgba(201, 77, 201, 1)',
					'rgba(255, 207, 207, 1)',
					'rgba(201, 77, 77, 1)',
					'rgba(128, 98, 98, 1)',
					'rgba(0, 0, 0, 1)',
					'rgba(128, 128, 128, 1)',
					'rgba(255, 99, 132, 0.80)',
					'rgba(54, 162, 235, 0.80)',
					'rgba(255, 206, 86, 0.80)',
					'rgba(75, 192, 192, 0.80)',
					'rgba(153, 102, 255, 0.80)',
					'rgba(255, 159, 64, 0.80)',
					'rgba(201, 76, 76, 0.3)',
					'rgba(201, 77, 77, 1)',
					'rgba(0, 140, 162, 1)',
					'rgba(158, 109, 8, 1)',
					'rgba(201, 76, 76, 0.8)',
					'rgba(0, 129, 212, 1)',
					'rgba(201, 77, 201, 1)',
					'rgba(255, 207, 207, 1)',
				],
				fill: false,
				borderWidth: 1
			}]
		},
		options: {
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero: true
					}
				}]
			}
		}
	});
</script>
<script>
	<?php
	$id_user = $this->session->userdata('id');
	$ulasan = $this->db->query("SELECT COUNT(id_ulasan) as jml_rating, rating FROM `ulasan` JOIN detail_pesanan ON detail_pesanan.id_detail=ulasan.id_ulasan JOIN pesanan ON pesanan.id_pesanan=detail_pesanan.id_pesanan WHERE pesanan.id_user=$id_user GROUP BY rating")->result();
	foreach ($ulasan as $key => $data) {
		$rating[] = 'Rating ' . $data->rating;
		$jml_rating[] = $data->jml_rating;
	}
	?>
	var ctx = document.getElementById('ulasan');
	var grafik = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: <?= json_encode($rating) ?>,
			datasets: [{
				label: 'Grafik Rating Pelanggan',
				data: <?= json_encode($jml_rating) ?>,
				backgroundColor: [
					'rgba(201, 77, 77, 1)',
					'rgba(128, 98, 98, 1)',
					'rgba(0, 0, 0, 1)',
					'rgba(128, 128, 128, 1)',
					'rgba(255, 99, 132, 0.80)',
					'rgba(54, 162, 235, 0.80)',
					'rgba(255, 206, 86, 0.80)',
					'rgba(75, 192, 192, 0.80)',
					'rgba(153, 102, 255, 0.80)',
					'rgba(255, 159, 64, 0.80)',
					'rgba(201, 76, 76, 0.3)',
					'rgba(201, 77, 77, 1)',
					'rgba(0, 140, 162, 1)',
					'rgba(158, 109, 8, 1)',
					'rgba(201, 76, 76, 0.8)',
					'rgba(0, 129, 212, 1)',
					'rgba(201, 77, 201, 1)',
					'rgba(255, 207, 207, 1)',
					'rgba(201, 77, 77, 1)',
					'rgba(128, 98, 98, 1)',
					'rgba(0, 0, 0, 1)',
					'rgba(128, 128, 128, 1)',
					'rgba(255, 99, 132, 0.80)',
					'rgba(54, 162, 235, 0.80)',
					'rgba(255, 206, 86, 0.80)',
					'rgba(75, 192, 192, 0.80)',
					'rgba(153, 102, 255, 0.80)',
					'rgba(255, 159, 64, 0.80)',
					'rgba(201, 76, 76, 0.3)',
					'rgba(201, 77, 77, 1)',
					'rgba(0, 140, 162, 1)',
					'rgba(158, 109, 8, 1)',
					'rgba(201, 76, 76, 0.8)',
					'rgba(0, 129, 212, 1)',
					'rgba(201, 77, 201, 1)',
					'rgba(255, 207, 207, 1)',
				],
				borderColor: [
					'rgba(201, 77, 77, 1)',
					'rgba(128, 98, 98, 1)',
					'rgba(0, 0, 0, 1)',
					'rgba(128, 128, 128, 1)',
					'rgba(255, 99, 132, 0.80)',
					'rgba(54, 162, 235, 0.80)',
					'rgba(255, 206, 86, 0.80)',
					'rgba(75, 192, 192, 0.80)',
					'rgba(153, 102, 255, 0.80)',
					'rgba(255, 159, 64, 0.80)',
					'rgba(201, 76, 76, 0.3)',
					'rgba(201, 77, 77, 1)',
					'rgba(0, 140, 162, 1)',
					'rgba(158, 109, 8, 1)',
					'rgba(201, 76, 76, 0.8)',
					'rgba(0, 129, 212, 1)',
					'rgba(201, 77, 201, 1)',
					'rgba(255, 207, 207, 1)',
					'rgba(201, 77, 77, 1)',
					'rgba(128, 98, 98, 1)',
					'rgba(0, 0, 0, 1)',
					'rgba(128, 128, 128, 1)',
					'rgba(255, 99, 132, 0.80)',
					'rgba(54, 162, 235, 0.80)',
					'rgba(255, 206, 86, 0.80)',
					'rgba(75, 192, 192, 0.80)',
					'rgba(153, 102, 255, 0.80)',
					'rgba(255, 159, 64, 0.80)',
					'rgba(201, 76, 76, 0.3)',
					'rgba(201, 77, 77, 1)',
					'rgba(0, 140, 162, 1)',
					'rgba(158, 109, 8, 1)',
					'rgba(201, 76, 76, 0.8)',
					'rgba(0, 129, 212, 1)',
					'rgba(201, 77, 201, 1)',
					'rgba(255, 207, 207, 1)',
				],
				fill: false,
				borderWidth: 1
			}]
		},
		options: {
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero: true
					}
				}]
			}
		}
	});
</script>
<script>
	var ctx = document.getElementById("widgetChart1");
	if (ctx) {
		ctx.height = 130;
		var myChart = new Chart(ctx, {
			type: 'line',
			data: {
				labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
				type: 'line',
				datasets: [{
					data: [78, 81, 80, 45, 34, 12, 40],
					label: 'Dataset',
					backgroundColor: 'rgba(255,255,255,.1)',
					borderColor: 'rgba(255,255,255,.55)',
				}, ]
			},
			options: {
				maintainAspectRatio: true,
				legend: {
					display: false
				},
				layout: {
					padding: {
						left: 0,
						right: 0,
						top: 0,
						bottom: 0
					}
				},
				responsive: true,
				scales: {
					xAxes: [{
						gridLines: {
							color: 'transparent',
							zeroLineColor: 'transparent'
						},
						ticks: {
							fontSize: 2,
							fontColor: 'transparent'
						}
					}],
					yAxes: [{
						display: false,
						ticks: {
							display: false,
						}
					}]
				},
				title: {
					display: false,
				},
				elements: {
					line: {
						borderWidth: 0
					},
					point: {
						radius: 0,
						hitRadius: 10,
						hoverRadius: 4
					}
				}
			}
		});
	}
</script>
<script>
	<?php
	$id_user = $this->session->userdata('id');
	$produk = $this->db->query(" SELECT SUM(qty) as qty, MONTH(pesanan.tgl_transaksi) as bulan FROM `detail_pesanan` JOIN pesanan ON pesanan.id_pesanan = detail_pesanan.id_pesanan WHERE pesanan.id_user = $id_user GROUP BY MONTH(pesanan.tgl_transaksi)")->result();
	$qty = [];
	$bulan = [];
	foreach ($produk as $data) {
		$qty[] = $data->qty;
		$bulan[] = $data->bulan;
	}

	$bulan_nama = array_map(function ($num) {
		return date('F', mktime(0, 0, 0, $num, 10));
	}, $bulan);
	?>
	var ctx = document.getElementById("widgetChart2");
	if (ctx) {
		ctx.height = 130;
		var myChart = new Chart(ctx, {
			type: 'line',
			data: {
				labels: <?= json_encode($bulan_nama) ?>,
				type: 'line',
				datasets: [{
					data: <?= json_encode($qty) ?>,
					label: 'Terjual',
					backgroundColor: 'transparent',
					borderColor: 'rgba(255,255,255,.55)',
				}, ]
			},
			options: {

				maintainAspectRatio: false,
				legend: {
					display: false
				},
				responsive: true,
				tooltips: {
					mode: 'index',
					titleFontSize: 12,
					titleFontColor: '#000',
					bodyFontColor: '#000',
					backgroundColor: '#fff',
					titleFontFamily: 'Montserrat',
					bodyFontFamily: 'Montserrat',
					cornerRadius: 3,
					intersect: false,
				},
				scales: {
					xAxes: [{
						gridLines: {
							color: 'transparent',
							zeroLineColor: 'transparent'
						},
						ticks: {
							fontSize: 2,
							fontColor: 'transparent'
						}
					}],
					yAxes: [{
						display: false,
						ticks: {
							display: false,
						}
					}]
				},
				title: {
					display: false,
				},
				elements: {
					line: {
						tension: 0.00001,
						borderWidth: 1
					},
					point: {
						radius: 4,
						hitRadius: 10,
						hoverRadius: 4
					}
				}
			}
		});
	}
</script>
<script>
	<?php
	$produk = $this->db->query("SELECT COUNT(id_pelanggan) as jumlah, MONTH(created_at) as bulan FROM pelanggan GROUP BY MONTH(created_at)")->result();
	$jumlah = [];
	$bulan = [];
	foreach ($produk as $data) {
		$jumlah[] = $data->jumlah;
		$bulan[] = $data->bulan;
	}

	$bulan_nama = array_map(function ($num) {
		return date('F', mktime(0, 0, 0, $num, 10));
	}, $bulan);
	?>
	var ctx = document.getElementById("widgetChart3");
	if (ctx) {
		ctx.height = 130;
		var myChart = new Chart(ctx, {
			type: 'line',
			data: {
				labels: <?= json_encode($bulan_nama) ?>,

				type: 'line',
				datasets: [{
					data: <?= json_encode($jumlah) ?>,
					label: 'Pelanggan',
					backgroundColor: 'transparent',
					borderColor: 'rgba(255,255,255,.55)',
				}, ]
			},
			options: {

				maintainAspectRatio: false,
				legend: {
					display: false
				},
				responsive: true,
				tooltips: {
					mode: 'index',
					titleFontSize: 12,
					titleFontColor: '#000',
					bodyFontColor: '#000',
					backgroundColor: '#fff',
					titleFontFamily: 'Montserrat',
					bodyFontFamily: 'Montserrat',
					cornerRadius: 3,
					intersect: false,
				},
				scales: {
					xAxes: [{
						gridLines: {
							color: 'transparent',
							zeroLineColor: 'transparent'
						},
						ticks: {
							fontSize: 2,
							fontColor: 'transparent'
						}
					}],
					yAxes: [{
						display: false,
						ticks: {
							display: false,
						}
					}]
				},
				title: {
					display: false,
				},
				elements: {
					line: {
						borderWidth: 1
					},
					point: {
						radius: 4,
						hitRadius: 10,
						hoverRadius: 4
					}
				}
			}
		});
	}
</script>
<script>
	<?php
	$id_user = $this->session->userdata('id');
	$produk = $this->db->query("SELECT SUM(total_bayar) as total, MONTH(pesanan.tgl_transaksi) as bulan FROM `detail_pesanan` JOIN pesanan ON pesanan.id_pesanan = detail_pesanan.id_pesanan WHERE pesanan.id_user = $id_user AND pesanan.status_order='4' GROUP BY MONTH(pesanan.tgl_transaksi)")->result();

	$total = [];
	$bulan = [];
	foreach ($produk as $data) {
		$total[] = $data->total;
		$bulan[] = $data->bulan;
	}

	$bulan_nama = array_map(function ($num) {
		return date('F', mktime(0, 0, 0, $num, 10));
	}, $bulan);
	?>
	var ctx = document.getElementById("widgetChart4");
	if (ctx) {
		ctx.height = 115;
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: <?= json_encode($bulan_nama) ?>,
				datasets: [{
					label: "Pendapatan",
					data: <?= json_encode($total) ?>,
					borderColor: "transparent",
					borderWidth: "0",
					backgroundColor: "rgba(255,255,255,.3)"
				}]
			},
			options: {
				maintainAspectRatio: true,
				legend: {
					display: false
				},
				scales: {
					xAxes: [{
						display: false,
						categoryPercentage: 1,
						barPercentage: 0.65
					}],
					yAxes: [{
						display: false
					}]
				}
			}
		});
	}
</script>
</body>

</html>