<!-- Title Page -->
<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(<?= base_url('asset/foto2.jpg') ?>);">
	<h2 class="tit6 t-center">
		Registrasi
	</h2>
</section>


<!-- Reservation -->
<section class="section-reservation bg1-pattern p-t-100 p-b-113">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 p-b-30">
				<div class="t-center">
					<span class="tit2 t-center">
						RASA RANSEL
					</span>

					<h3 class="tit3 t-center m-b-35 m-t-2">
						Registrasi Pelanggan
					</h3>
					<?php if ($this->session->userdata('success')) {
						echo '<div class="alert alert-success" role="alert">';
						echo $this->session->userdata('success');
						echo '</div>';
					} ?>
					<?php if ($this->session->userdata('error')) {
						echo '<div class="alert alert-danger" role="alert">';
						echo $this->session->userdata('success');
						echo '</div>';
					} ?>
				</div>
				<form action="<?= base_url('pelanggan/clogin/registrasi') ?>" method="POST" class="wrap-form-reservation size22 m-l-r-auto">
					<div class="row">
						<div class="col-md-12">
							<!-- Name -->
							<span class="txt9">
								Username
							</span>
							<div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
								<input class="bo-rad-10 sizefull txt10 p-l-20" value="<?= set_value('username') ?>" type="text" name="username" placeholder="Masukkan Username Anda">
								<?= form_error('username', '<small class="form-text text-danger">', '</small>'); ?>
							</div>
						</div>
						<div class="col-md-6">
							<!-- Phone -->
							<span class="txt9">
								Password
							</span>
							<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
								<input class="bo-rad-10 sizefull txt10 p-l-20" type="password" name="password" placeholder="Masukkan Password Anda">
								<?= form_error('password', '<small class="form-text text-danger">', '</small>'); ?>
							</div>
						</div>
						<div class="col-md-6">
							<!-- Phone -->
							<span class="txt9">
								Ulangi Password
							</span>
							<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
								<input class="bo-rad-10 sizefull txt10 p-l-20" type="password" name="password2" placeholder="Masukkan Password Anda Kembali">
								<?= form_error('password2', '<small class="form-text text-danger">', '</small>'); ?>
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
								<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" value="<?= set_value('nama') ?>" name="nama" placeholder="Masukkan Nama Lengkap Anda">
								<?= form_error('nama', '<small class="form-text text-danger">', '</small>'); ?>
							</div>
						</div>
						<div class="col-md-6">
							<!-- Phone -->
							<span class="txt9">
								No Telepon
							</span>

							<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
								<input class="bo-rad-10 sizefull txt10 p-l-20" value="<?= set_value('no_hp') ?>" type="number" name="no_hp" placeholder="Masukkan No Telepon Anda">
								<?= form_error('no_hp', '<small class="form-text text-danger">', '</small>'); ?>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<!-- Name -->
							<span class="txt9">
								Email
							</span>
							<div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
								<input class="bo-rad-10 sizefull txt10 p-l-20" value="<?= set_value('email') ?>" type="text" name="email" placeholder="Masukkan Email Anda">
								<?= form_error('email', '<small class="form-text text-danger">', '</small>'); ?>
							</div>
						</div>
						<div class="col-md-3">
							<!-- Name -->
							<span class="txt9">
								Tempat
							</span>
							<div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
								<input class="bo-rad-10 sizefull txt10 p-l-20" value="<?= set_value('tmpt') ?>" type="text" name="tmpt" placeholder="Tempat Lahir">
								<?= form_error('ttl', '<small class="form-text text-danger">', '</small>'); ?>
							</div>
						</div>
						<div class="col-md-3">
							<!-- Name -->
							<span class="txt9">
								Tanggal Lahir
							</span>
							<div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
								<input class="bo-rad-10 sizefull txt10 p-l-20" value="<?= set_value('tgl') ?>" type="date" name="tgl" placeholder="Tanggal Lahir">
								<?= form_error('ttl', '<small class="form-text text-danger">', '</small>'); ?>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<!-- Name -->
							<span class="txt9">
								Alamat
							</span>
							<div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
								<input class="bo-rad-10 sizefull txt10 p-l-20" value="<?= set_value('alamat') ?>" type="text" name="alamat" placeholder="Masukkan Alamat Anda">
								<?= form_error('alamat', '<small class="form-text text-danger">', '</small>'); ?>
							</div>
						</div>

					</div>
					<div class="row">
						<div class="col-md-6">
							<small>Sudah Memiliki Akun? <a href="<?= base_url('pelanggan/clogin') ?>">Login</a></small>
						</div>
					</div>
					<div class="wrap-btn-booking flex-c-m m-t-6 float-right">
						<!-- Button3 -->
						<button type="submit" class="btn3 flex-c-m size13 txt11 trans-0-4">
							Register
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>