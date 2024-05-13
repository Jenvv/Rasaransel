<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(<?= base_url('asset/foto2.jpg') ?>);">
	<h2 class="tit6 t-center">
		Detail Produk
	</h2>
</section>


<!-- Content page -->
<section>
	<div class="bread-crumb bo5-b p-t-17 p-b-17">
		<div class="container">
			<a href="index.html" class="txt27">
				Home
			</a>

			<span class="txt29 m-l-10 m-r-10">/</span>

			<a href="blog.html" class="txt27">
				Blog
			</a>

			<span class="txt29 m-l-10 m-r-10">/</span>

			<span class="txt29">
				Detail Produk
			</span>
		</div>
	</div>

	<div class="container">
		<div class="row ">
			<div class="col-md-12 col-lg-12">
				<div class="p-t-80 p-b-124 bo5-r p-r-50 h-full p-r-0-md bo-none-md">
					<!-- Block4 -->
					<div class="blo4 p-b-63">
						<!-- - -->
						<div class="pic-blo4 hov-img-zoom bo-rad-10 pos-relative">
							<a href="blog-detail.html">
								<img src="<?= base_url('asset/foto-produk/' . $produk->foto) ?>" alt="IMG-BLOG">
							</a>
						</div>
						<div class="text-blo4 p-t-33">
							<div class="d-flex align-items-center">
								<div class="rounded-circle overflow-hidden mr-3 mb-5" style="width: 50px; height: 50px;">
									<img src="<?= base_url('asset/foto-produk/' . $produk->foto) ?>" alt="Foto Produk" style="width: 100%; height: 100%; object-fit: cover; border-radius: 50%;">
								</div>
								<div>
									<div class="p-b-16">
										<a href="blog-detail.html" class="tit9">
											<?php foreach ($users as $user) : ?>
												<h5><?= $user->username ?></h5>
										</a>
										<h6 class="mt-2"><i class="fa fa-map-marker" aria-hidden="true"></i> <?= $user->alamat ?></h6>
									<?php endforeach ?>
									<hr>
									</div>
								</div>
							</div>
						</div>

<h6>
	<?= $produk->deskripsi?>
</h6>

						<!-- - -->
						<div class="text-blo4 p-t-33 mt-5">
							<h4 class="p-b-10">
								<a href="blog-detail.html" class="tit9" style="font-size: 25px;">Ulasan Produk</a>
								<hr>
							</h4>
							<?php
							foreach ($ulasan as $key => $value) {
							?>
								<div class="mt-1">
									<h4 class="txt33 p-b-14" style="font-size:15px">
										<?= $value->nama_plggn ?>
									</h4><small><?= $value->time_ulasan ?></small>

									<div class="txt32 flex-w p-b-24">
										<span>
											<div class="quickview-ratting">
												<?php
												if ($value->rating == '0') {
												?>
													<span class="fa fa-star"></span>
													<span class="fa fa-star"></span>
													<span class="fa fa-star"></span>
													<span class="fa fa-star"></span>
													<span class="fa fa-star"></span>
												<?php
												} else if ($value->rating == '1') {
												?>
													<span class="fa fa-star checked"></span>
													<span class="fa fa-star"></span>
													<span class="fa fa-star"></span>
													<span class="fa fa-star"></span>
													<span class="fa fa-star"></span>
												<?php
												} else if ($value->rating == '2') {
												?>
													<span class="fa fa-star checked"></span>
													<span class="fa fa-star checked"></span>
													<span class="fa fa-star"></span>
													<span class="fa fa-star"></span>
													<span class="fa fa-star"></span>
												<?php
												} else if ($value->rating == '3') {
												?>
													<span class="fa fa-star checked"></span>
													<span class="fa fa-star checked"></span>
													<span class="fa fa-star checked"></span>
													<span class="fa fa-star"></span>
													<span class="fa fa-star"></span>
												<?php
												} else if ($value->rating == '4') {
												?>
													<span class="fa fa-star checked"></span>
													<span class="fa fa-star checked"></span>
													<span class="fa fa-star checked"></span>
													<span class="fa fa-star checked"></span>
													<span class="fa fa-star"></span>
												<?php
												} else if ($value->rating == '5') {
												?>
													<span class="fa fa-star checked"></span>
													<span class="fa fa-star checked"></span>
													<span class="fa fa-star checked"></span>
													<span class="fa fa-star checked"></span>
													<span class="fa fa-star checked"></span>
												<?php
												}
												?>

											</div>
										</span>


									</div>

									<p><?= $value->komentar ?></p>
									<?php
									if ($value->isi_balasan != NULL) {
									?>
										<p class="badge badge-success">Balasan Admin : <?= $value->time ?> <?= $value->isi_balasan ?></p>

									<?php
									}
									?>
								</div>
								<hr>
							<?php
							}
							?>


						</div>
					</div>


				</div>
			</div>


		</div>
	</div>
</section>