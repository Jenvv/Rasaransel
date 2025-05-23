<main class="content">
	<div class="container-fluid p-0">
		<div class="row mb-2 mb-xl-3">
			<div class="col-auto d-none d-sm-block">
				<h3><strong>Informasi</strong> Status Order </h3>
			</div>

			<div class="col-auto ml-auto text-right mt-n1">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
						<li class="breadcrumb-item"><a href="<?= base_url('pemilik/cDashboard'); ?>">Dashboard</a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0);" onclick="window.history.go(-1);">Transaksi</a></li>
						<li class="breadcrumb-item">Informasi</li>
					</ol>
				</nav>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 col-xl-2">

				<div class="card">
					<div class="card-header">
						<h5 class="card-title mb-0">Transaksi</h5>
					</div>

					<div class="list-group list-group-flush" role="tablist">
						<a class="list-group-item list-group-item-action active" data-toggle="list" href="#pesanan_masuk" role="tab">
							Pesanan Masuk <span class="badge badge-danger"><?= $notif['pesanan_masuk']->jml ?></span>
						</a>
						<a class="list-group-item list-group-item-action" data-toggle="list" href="#konfirmasi" role="tab">
							Konfirmasi <span class="badge badge-warning"><?= $notif['konfirmasi']->jml ?></span>
						</a>
						<a class="list-group-item list-group-item-action" data-toggle="list" href="#diproses" role="tab">
							Pesanan Diproses <span class="badge badge-info"><?= $notif['diproses']->jml ?></span>
						</a>
						<a class="list-group-item list-group-item-action" data-toggle="list" href="#dikirim" role="tab">
							Pesanan Dikirim <span class="badge badge-success"><?= $notif['dikirim']->jml ?></span>
						</a>
						<a class="list-group-item list-group-item-action" data-toggle="list" href="#selesai" role="tab">
							Selesai <span class="badge badge-primary"><?= $notif['selesai']->jml ?></span>
						</a>
					</div>
				</div>
			</div>

			<div class="col-md-9 col-xl-10">
				<div class="tab-content">
					<div class="tab-pane fade show active" id="pesanan_masuk" role="tabpanel">

						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Pesanan Masuk</h5>
							</div>
							<table class="table">
								<thead>
									<tr>
										<th class="text-center">No</th>
										<th class="text-center">Atas Nama</th>
										<th class="text-center">Waktu Order</th>
										<th class="text-center">Total Pembayaran</th>
										<th class="text-center">Metode Pembayaran</th>
										<th class="text-center">Actions</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($status['pesanan_masuk'] as $key => $value) {
									?>
										<tr>
											<td class="text-center"><?= $no++ ?>.</td>
											<td class="text-center"><?= $value->nama_plggn ?></td>
											<td class="text-center"><?= $value->tgl_transaksi ?></td>
											<td class="text-center">Rp. <?= number_format($value->total_bayar) ?></td>
											<td class="text-center"><?php if ($value->metode_bayar == '1') {
																	?>
													<span class="badge badge-success">COD</span>
												<?php
																	} else {
												?>
													<span class="badge badge-warning">TRANSFER</span>
												<?php
																	} ?>
											</td>
											<td class="text-center"><a href="<?= base_url('pemilik/cTransaksi/detail_pesanan/' . $value->id_pesanan) ?>"><i class="align-middle" data-feather="align-justify"></i></a></td>
										</tr>
									<?php
									}
									?>
								</tbody>
							</table>
						</div>
					</div>
					<div class="tab-pane fade" id="konfirmasi" role="tabpanel">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Konfirmasi Pembayaran</h5>
							</div>
							<table class="table">
								<thead>
									<tr>
										<th class="text-center">No</th>
										<th class="text-center">Atas Nama</th>
										<th class="text-center">Waktu Order</th>
										<th class="text-center">Total Pembayaran</th>
										<th class="text-center">Metode Pembayaran</th>
										<th class="text-center">Konfirmasi</th>
										<th class="text-center">Actions</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($status['konfirmasi'] as $key => $value) {
									?>
										<tr>
											<td class="text-center"><?= $no++ ?>.</td>
											<td class="text-center"><?= $value->nama_plggn ?></td>
											<td class="text-center"><?= $value->tgl_transaksi ?></td>
											<td class="text-center">Rp. <?= number_format($value->total_bayar) ?></td>
											<td class="text-center"><?php if ($value->metode_bayar == '1') {
																	?>
													<span class="badge badge-success">COD</span>
												<?php
																	} else {
												?>
													<span class="badge badge-warning">TRANSFER</span>
												<?php
																	} ?>
											</td>
											<td class="text-center"><span class="badge badge-danger">BELUM KONFIRMASI</span></td>
											<td class="text-center"><a href="<?= base_url('Pemilik/cTransaksi/detail_pesanan/' . $value->id_pesanan) ?>"><i class="align-middle" data-feather="align-justify"></i></a></td>
										</tr>
									<?php
									}
									?>
								</tbody>
							</table>
						</div>
					</div>
					<div class="tab-pane fade" id="diproses" role="tabpanel">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Pesanan Diproses</h5>
							</div>
							<table class="table">
								<thead>
									<tr>
										<th class="text-center">No</th>
										<th class="text-center">Atas Nama</th>
										<th class="text-center">Waktu Order</th>
										<th class="text-center">Total Pembayaran</th>
										<th class="text-center">Metode Pembayaran</th>
										<th class="text-center">Kirim Pesanan</th>
										<th class="text-center">Actions</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($status['diproses'] as $key => $value) {
									?>
										<tr>
											<td class="text-center"><?= $no++ ?>.</td>
											<td class="text-center"><?= $value->nama_plggn ?></td>
											<td class="text-center"><?= $value->tgl_transaksi ?></td>
											<td class="text-center">Rp. <?= number_format($value->total_bayar) ?></td>
											<td class="text-center"><?php if ($value->metode_bayar == '1') {
																	?>
													<span class="badge badge-success">COD</span>
												<?php
																	} else {
												?>
													<span class="badge badge-warning">TRANSFER</span>
												<?php
																	} ?>
											</td>
											<td class="text-center"><span class="badge badge-danger">BELUM KIRIM</span></td>
											<td class="text-center"><a href="<?= base_url('Pemilik/cTransaksi/detail_pesanan/' . $value->id_pesanan) ?>"><i class="align-middle" data-feather="align-justify"></i></a></td>
										</tr>
									<?php
									}
									?>
								</tbody>
							</table>
						</div>
					</div>
					<div class="tab-pane fade" id="dikirim" role="tabpanel">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Pesanan Dikirim</h5>
							</div>
							<table class="table">
								<thead>
									<tr>
										<th class="text-center">No</th>
										<th class="text-center">Atas Nama</th>
										<th class="text-center">Waktu Order</th>
										<th class="text-center">Total Pembayaran</th>
										<th class="text-center">Metode Pembayaran</th>
										<th class="text-center">Actions</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($status['dikirim'] as $key => $value) {
									?>
										<tr>
											<td class="text-center"><?= $no++ ?>.</td>
											<td class="text-center"><?= $value->nama_plggn ?></td>
											<td class="text-center"><?= $value->tgl_transaksi ?></td>
											<td class="text-center">Rp. <?= number_format($value->total_bayar) ?></td>
											<td class="text-center"><?php if ($value->metode_bayar == '1') {
																	?>
													<span class="badge badge-success">COD</span>
												<?php
																	} else {
												?>
													<span class="badge badge-warning">TRANSFER</span>
												<?php
																	} ?>
											</td>
											<td class="text-center"><a href="<?= base_url('pemilik/cTransaksi/detail_pesanan/' . $value->id_pesanan) ?>"><i class="align-middle" data-feather="align-justify"></i></a></td>
										</tr>
									<?php
									}
									?>
								</tbody>
							</table>
						</div>
					</div>
					<div class="tab-pane fade" id="selesai" role="tabpanel">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Pesanan Selesai</h5>
							</div>
							<table id="myTable" class="table">
								<thead>
									<tr>
										<th class="text-center">No</th>
										<th class="text-center">Atas Nama</th>
										<th class="text-center">Waktu Order</th>
										<th class="text-center">Total Pembayaran</th>
										<th class="text-center">Metode Pembayaran</th>
										<th class="text-center">Actions</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($status['selesai'] as $key => $value) {
									?>
										<tr>
											<td class="text-center"><?= $no++ ?>.</td>
											<td class="text-center"><?= $value->nama_plggn ?></td>
											<td class="text-center"><?= $value->tgl_transaksi ?></td>
											<td class="text-center">Rp. <?= number_format($value->total_bayar) ?></td>
											<td class="text-center"><?php if ($value->metode_bayar == '1') {
																	?>
													<span class="badge badge-success">COD</span>
												<?php
																	} else {
												?>
													<span class="badge badge-warning">TRANSFER</span>
												<?php
																	} ?>
											</td>
											<td class="text-center"><a href="<?= base_url('pemilik/cTransaksi/detail_pesanan/' . $value->id_pesanan) ?>"><i class="align-middle" data-feather="align-justify"></i></a></td>
										</tr>
									<?php
									}
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</main>