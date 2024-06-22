<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Shop Item - Start Bootstrap Template</title>
	<!-- Favicon-->
	<link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
	<!-- Bootstrap icons-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
	<!-- Core theme CSS (includes Bootstrap)-->
	<link href="<?= base_url('asset/admintoko/') ?>css/styles.css" rel="stylesheet" />
</head>
<style>
	.product-item {
		max-height: 0;
		overflow: hidden;
		opacity: 0;
		transition: max-height 0.4s ease-in-out, opacity 0.4s ease-in-out;
	}

	.product-item.show {
		max-height: 500px;
		/* Pilih nilai yang cukup besar untuk konten Anda */
		opacity: 1;
	}
</style>

<body>
	<!-- Product section-->
	<section class="py-3">
		<div class="container px-4 px-lg-5 my-5 pt-5">
			<div class="row gx-4 gx-lg-5 align-items-center">
				<div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="<?= base_url('asset/foto-produk/' . $produk->foto) ?>" alt="Produk-foto" /></div>
				<div class="col-md-6">
					<!-- <div class="small mb-1">SKU: BST-498</div> -->
					<h1 class="display-5 fw-bolder"><?= $produk->nama_produk ?></h1>
					<?php foreach ($diskon as $key => $value) { ?>
						<div class="fs-5 mb-5">
							<?php if ($value->diskon !== NULL) { ?>
								<!-- Harga dengan diskon -->
								<span class="text-decoration-line-through">Rp. <?= number_format($value->harga, 0) ?></span>
								<span>Rp. <?= number_format($value->harga - (($value->diskon / 100) * $value->harga), 0) ?></span>
							<?php } else { ?>
								<!-- Harga tanpa diskon -->
								<span>Rp. <?= number_format($value->harga, 0) ?></span>
							<?php } ?>
						</div>
					<?php } ?>

					<p class="lead"><?= $produk->deskripsi ?></p>
					<div class="d-flex">
						<?php foreach ($diskon as $key => $value) { ?>
							<?php
							if ($this->session->userdata('id_pelanggan') != '') {
							?>
								<form action="<?= base_url('pelanggan/chome/cart') ?>" method="POST">
									<input type="hidden" name="id" value="<?= $value->id_produk ?>">
									<input type="hidden" name="name" value="<?= $value->nama_produk ?>">
									<input type="hidden" name="qty" value="1">
									<input type="hidden" name="picture" value="<?= $value->foto ?>">
									<input type="hidden" name="user" value="<?= $value->id_user ?>">
									<input type="hidden" name="price" value="<?= $value->harga - (($value->diskon / 100)  * $value->harga) ?>">
									<button class="btn btn-outline-dark flex-shrink-0" type="submit">
										<i class="bi-cart-fill me-1"></i>
										Tambahkan ke Keranjang
									</button>
								</form>
							<?php } else { ?>
								<div class="text-center"><a class="btn btn-outline-dark mt-auto" href="<?= base_url('pelanggan/clogin') ?>"><i class="bi-cart-fill me-1"></i>
										Tambahkan ke Keranjang</a></div>
							<?php } ?>
						<?php } ?>
					</div>
				</div>
				<?php foreach ($users as $user) : ?>
					<div class="d-flex align-items-center pt-5">
						<div class="rounded-circle overflow-hidden mr-3" style="width: 50px; height: 50px;">
							<img src="<?= base_url('asset/fotoprofil/' . $user->photo) ?>" alt="Foto Produk" style="width: 100%; height: 100%; object-fit: cover; border-radius: 50%;">
						</div>
						<div>
							<hr>
							<a href="<?= base_url('pelanggan/cmerchant/merchant_detail/' .$user->id_user) ?>" style="text-decoration: none;color:black;">
								<h5 class="fw-bolder m-0"><?= $user->nama ?></h5>
							</a>
							<h6 class="mt-2"><i class="fa fa-map-marker" aria-hidden="true"></i> <?= $user->alamat ?></h6>
							<hr>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>


	</section>
	<!-- Related items section-->
	<section class="py-5 bg-light">
		<div class="container px-4 px-lg-5 mt-5">
			<h2 class="fw-bolder mb-4">Produk Serupa</h2>
			<div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center" id="product-list">
				<?php foreach ($menu as $key => $value) { ?>
					<div class="col mb-4 product-item">
						<div class="card h-100">
							<a href="<?= base_url('Pelanggan/cHome/detail_produk/' . $value->id_produk) ?>">
								<img class="card-img-top" style="height: 200px; object-fit: cover; object-position: center center;" src="<?= base_url('asset/foto-produk/' . $value->foto) ?>" alt="..." />
							</a>
							<div class="card-body p-4">
								<div class="text-center">
									<h5 class="fw-bolder"><?= $value->nama_produk ?></h5>
									<div class="d-flex justify-content-center small text-warning mb-2">
										<div class="bi-star-fill"></div>
										<div class="bi-star-fill"></div>
										<div class="bi-star-fill"></div>
										<div class="bi-star-fill"></div>
										<div class="bi-star-fill"></div>
									</div>
									<?php if ($value->diskon !== NULL) { ?>
										<span class="text-muted text-decoration-line-through">Rp. <?= number_format($value->harga, 0) ?></span>
										Rp. <?= number_format($value->harga - (($value->diskon / 100) * $value->harga), 0) ?>
									<?php } else { ?>
										Rp. <?= number_format($value->harga - (($value->diskon / 100) * $value->harga), 0) ?>
									<?php } ?>
								</div>
							</div>
							<div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
								<div class="text-center"><a class="btn btn-outline-dark mt-auto" href="<?= base_url('Pelanggan/cHome/detail_produk/' . $value->id_produk) ?>">Detail</a></div>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
			<div class="text-center ">
				<button id="showLessBtn" style="display: none; font-size:2rem;"><i class="bi bi-arrow-up-circle-fill"></i></button>
				<button id="loadMoreBtn"><i class="bi bi-arrow-down-circle-fill" style="font-size:2rem;"></i></button>
			</div>
		</div>
	</section>

	<div class="container px-4 px-lg-5 mt-5">

		<div class="text-blo4">
			<h4 class="p-b-10">
				<a href="blog-detail.html" class="tit9" style="font-size: 25px;">Ulasan Produk</a>
				<hr>
			</h4>
			<?php foreach ($ulasan as $key => $value) : ?>
				<div class="mt-1">
					<h4 class="txt33 p-b-14" style="font-size:15px">
						<?= $value->nama_plggn ?>
					</h4>
					<small><?= $value->time_ulasan ?></small>
					<div class="txt32 flex-w p-b-24">
						<span>
							<div class="quickview-ratting">
								<?php for ($i = 1; $i <= 5; $i++) : ?>
									<span class="fa fa-star <?= $i <= $value->rating ? 'checked' : '' ?>"></span>
								<?php endfor; ?>
							</div>
						</span>
					</div>
					<p><?= $value->komentar ?></p>
					<?php if ($value->isi_balasan != NULL) : ?>
						<p class="badge badge-success">Balasan : <?= $value->time ?> <?= $value->isi_balasan ?></p>
					<?php endif; ?>
				</div>
				<hr>
			<?php endforeach; ?>
		</div>
	</div>
	<!--  -->
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			const items = document.querySelectorAll('.product-item');
			const loadMoreBtn = document.getElementById('loadMoreBtn');
			const showLessBtn = document.getElementById('showLessBtn');

			let visibleItems = 4;

			// Tampilkan 4 item pertama dengan transisi
			for (let i = 0; i < visibleItems && i < items.length; i++) {
				items[i].classList.add('show');
			}

			loadMoreBtn.addEventListener('click', function() {
				visibleItems += 4;
				for (let i = 0; i < visibleItems && i < items.length; i++) {
					items[i].classList.add('show');
				}
				// Sembunyikan tombol jika semua item sudah ditampilkan
				if (visibleItems >= items.length) {
					loadMoreBtn.style.display = 'none';
				}
				showLessBtn.style.display = 'inline-block';
			});

			showLessBtn.addEventListener('click', function() {
				visibleItems = 4;
				for (let i = 4; i < items.length; i++) {
					items[i].classList.remove('show');
				}
				loadMoreBtn.style.display = 'inline-block';
				showLessBtn.style.display = 'none';
			});
		});
	</script>