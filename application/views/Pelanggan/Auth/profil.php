<!-- Title Page -->
<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(<?= base_url('asset/pato-master/') ?>images/bg-title-page-02.jpg);">
	<h2 class="tit6 t-center">
		Profil
	</h2>
</section>


<!-- Reservation -->
<div class="bread-crumb bo5-b p-t-17 p-b-17 ">
	<div class="container ">
			<span class="txt29">
				Profil
			</span>
			<span class="txt29 m-l-10 m-r-10">/</span>
			<a href="<?= base_url('pelanggan/cProfil/ganti_password') ?>" class="txt27">
				Password
			</a>
	</div>
</div>
<section class="section-reservation bg1-pattern p-t-40 p-b-113">
	<div class="container">
		<div class="row">
			<div class="col-3">
				<div class="blo5 pos-relative p-t-90 m-b-155">
					<div class="pic-blo5 bo4 wrap-cir-pic hov-img-zoom ab-c-t" style="width: 180px; height:180px;">
						<a href="#"><img src="<?= base_url('asset/pelanggan/' . $users->photo) ?>" alt="IGM-AVATAR"></a>
					</div>
				</div>
			</div>
			<div class="col-9">
				<div class="col-lg-12 p-b-30">
					<?php if ($this->session->userdata('success')) {
						echo '<div class="alert alert-success" role="alert">';
						echo $this->session->userdata('success');
						echo '</div>';
					} ?>
					<?= form_open_multipart(); ?>

					<div class="row">
						<div class="col-md-6">
							<!-- Name -->
							<span class="txt9">
								Username
							</span>
							<div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
								<input class="bo-rad-10 sizefull txt10 p-l-20" value="<?= $users->username ?>" type="text" name="username" placeholder="Masukkan Username Anda">
								<?= form_error('username', '<small class="form-text text-danger">', '</small>'); ?>
							</div>
						</div>
						<div class="col-md-6">
							<!-- Name -->
							<span class="txt9">
								Email
							</span>
							<div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
								<input class="bo-rad-10 sizefull txt10 p-l-20" value="<?= $users->email ?>" type="text" name="email" placeholder="Masukkan Email Anda" disabled>
								<?= form_error('email', '<small class="form-text text-danger">', '</small>'); ?>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<!-- Name -->
							<span class="txt9">
								Nama Lengkap
							</span>
							<div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
								<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" value="<?= $users->nama_plggn ?>" name="nama" placeholder="Masukkan Username Anda">
								<?= form_error('nama', '<small class="form-text text-danger">', '</small>'); ?>
							</div>
						</div>
						<div class="col-md-6">
							<!-- Phone -->
							<span class="txt9">
								No Telepon
							</span>

							<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
								<input class="bo-rad-10 sizefull txt10 p-l-20" value="<?= $users->no_hp ?>" type="text" name="no_hp" placeholder="Masukkan Password Anda">
								<?= form_error('no_hp', '<small class="form-text text-danger">', '</small>'); ?>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<!-- Name -->
							<span class="txt9">
								Alamat
							</span>
							<div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
								<input class="bo-rad-10 sizefull txt10 p-l-20" value="<?= $users->alamat ?>" type="text" name="alamat" placeholder="Masukkan Username Anda">
								<?= form_error('alamat', '<small class="form-text text-danger">', '</small>'); ?>
							</div>
						</div>
						<!--  -->
						<?php
						$data = $users->ttl;
						$data_array = explode(", ", $data);
						$tempat_lahir = $data_array[0];
						$tanggal_lahir = $data_array[1];
						$tanggal_lahir_formatted = date('m/d/Y', strtotime($tanggal_lahir));

						?>
						<div class="col-md-3">
							<span class="txt9">
								Tempat
							</span>
							<div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
								<input class="bo-rad-10 sizefull txt10 p-l-20" value="<?= $tempat_lahir ?>" type="text" name="tmpt" placeholder="Tempat Lahir">
								<?= form_error('ttl', '<small class="form-text text-danger">', '</small>'); ?>
							</div>
						</div>
						<div class="col-md-3">
							<span class="txt9">
								Tanggal Lahir
							</span>
							<div class="wrap-inputdate pos-relative txt10 size12 bo2 bo-rad-10 m-t-3 m-b-23">
								<input class="my-calendar bo-rad-10 sizefull txt10 p-l-20" type="text" name="tgl" value="<?= $tanggal_lahir_formatted ?>">
								<?= form_error('ttl', '<small class="form-text text-danger">', '</small>'); ?>
							</div>

						</div>
						<!--  -->
					</div>
					<div class="row">
						<div class="col-md-12">
							<span class="txt9">
								Foto
							</span>
							<div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23 bgwhite" style="padding: 10px;">
								<input class="custom-input-file txt10" type="file" name="fotouser">
								<?= form_error('fotouser', '<small class="form-text text-danger">', '</small>'); ?>
							</div>
						</div>
					</div>

					<div class="wrap-btn-booking flex-c-m m-t-6 float-right">
						<!-- Button3 -->
						<button type="submit" name="submit" value="submit" class="btn3 flex-c-m size13 txt11 trans-0-4">
							Update
						</button>
					</div>
					<?= form_close(); ?>


				</div>
			</div>
		</div>

	</div>
</section>