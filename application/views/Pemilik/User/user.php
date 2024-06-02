<main class="content">
	<div class="container-fluid p-0">
		<button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#defaultModalPrimary">
			Tambah User
		</button>
		<div class="modal fade" id="defaultModalPrimary" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Tambah Data User</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="modal-body m-3">
						<form action="<?= base_url('admin/cuser') ?>" method="POST">
							<div class="modal-body m-3">
								<div class="row">
									<div class="col-lg-6">
										<div class="form-group">
											<label class="form-label">Username</label>
											<input type="text" value="<?= set_value('username') ?>" name="username" class="form-control" placeholder="Masukkan Username">
											<?= form_error('username', '<small class="form-text text-danger">', '</small>'); ?>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="form-label">Password</label>
											<input type="text" name="password" value="<?= set_value('password') ?>" class="form-control" placeholder="Masukkan Password">
											<?= form_error('password', '<small class="form-text text-danger">', '</small>'); ?>
										</div>
									</div>
								</div>
								<div class="row">

									<div class="col-lg-12">
										<div class="form-group">
											<label class="form-label">Alamat</label>
											<input type="text" value="<?= set_value('alamat') ?>" name="alamat" class="form-control" placeholder="Masukkan Alamat User">
											<?= form_error('alamat', '<small class="form-text text-danger">', '</small>'); ?>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="form-group">
											<label class="form-label">No Telepon</label>
											<input type="number" value="<?= set_value('no_hp') ?>" name="no_hp" class="form-control" placeholder="Masukkan No Telepon">
											<?= form_error('no_hp', '<small class="form-text text-danger">', '</small>'); ?>
										</div>
									</div>

								</div>
							</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Save changes</button>
					</div>
					</form>
				</div>
			</div>
		</div>
		<h1 class="h3 mb-3">Akun User</h1>
		<?php
		if ($this->session->userdata('success')) {
		?>
			<div class="alert alert-success alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<div class="alert-icon">
					<i class="far fa-fw fa-bell"></i>
				</div>
				<div class="alert-message">
					<strong>Hallo!!!</strong> <?= $this->session->userdata('success') ?>
				</div>
			</div>
		<?php
		}
		?>


		<div class="row">
			<div class="col-12 col-xl-12 col-md-12">
				<div class="card">
					<div class="card-header">
						<h5 class="card-title">Informasi User</h5>
					</div>
					<div class="card-body">
						<table id="myTable" class="table">
							<thead>
								<tr>
									<th>No</th>
									<th>Username</th>
									<th>No Telepon</th>
									<th>Alamat</th>
									<th>Status</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no = 1;
								foreach ($user as $key => $value) {
								?>
									<tr>
										<td><?= $no++ ?></td>
										<td><?= $value->username ?></td>
										<td><?= $value->no_hp ?></td>
										<td><?= $value->alamat ?></td>
										<td><?php
											if ($value->is_active == '1') {
											?>
												<span class="badge badge-success">Aktif</span>
											<?php
											} else {
											?>
												<span class="badge badge-danger">Belum Aktif</span>
											<?php
											}
											?>
										</td>
										<!-- <td><?php
													if ($value->level_user == '1') {
													?>
												<span class="bage badge-danger">Pemilik</span>
											<?php
													} else {
											?>
												<span class="bage badge-success">Admin</span>
											<?php
													}
											?>
										</td> -->

										<td class="table-action">
											<div class="d-flex">

												<button class="btn btn-warning" data-toggle="modal" data-target="#edit<?= $value->id_user ?>"><i class="align-middle" data-feather="edit-2"></i></button>
												<button class="btn btn-danger ml-2" data-toggle="modal" data-target="#hapus<?= $value->id_user ?>"><i class="align-middle" data-feather="trash"></i></button>
											</div>
										</td>
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
</main>



<?php
foreach ($user as $key => $value) {
?>

	<div class="modal fade" id="edit<?= $value->id_user ?>" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<form action="<?= base_url('pemilik/cuser/update/' . $value->id_user) ?>" method="POST">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Update Data User</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body m-3">
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<label class="form-label">Username</label>
									<input type="text" value="<?= $value->username ?>" name="username" class="form-control" placeholder="Masukkan Username" required>
									<?= form_error('username', '<small class="form-text text-danger">', '</small>'); ?>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label class="form-label">Password</label>
									<input type="text" name="password" value="<?= $value->password ?>" class="form-control" placeholder="Masukkan Password" required>
									<?= form_error('password', '<small class="form-text text-danger">', '</small>'); ?>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<label class="form-label">Nama Toko</label>
									<input type="text" value="<?= $value->nama ?>" name="nama" class="form-control" placeholder="Masukkan Alamat User" required>
									<?= form_error('alamat', '<small class="form-text text-danger">', '</small>'); ?>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label class="form-label">Alamat</label>
									<input type="text" value="<?= $value->alamat ?>" name="alamat" class="form-control" placeholder="Masukkan Alamat User" required>
									<?= form_error('alamat', '<small class="form-text text-danger">', '</small>'); ?>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<div class="form-group">
									<label class="form-label">deskripsi</label>
									<!-- <input type="text" value="<?= $value->alamat ?>" name="alamat" class="form-control" placeholder="Masukkan Alamat User" required> -->
									<textarea class="form-control" name="deskripsi" id=""><?= $value->deskripsi ?></textarea>
									<?= form_error('alamat', '<small class="form-text text-danger">', '</small>'); ?>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<label class="form-label">No Telepon</label>
									<input type="number" value="<?= $value->no_hp ?>" name="no_hp" class="form-control" placeholder="Masukkan No Telepon" required>
									<?= form_error('no_hp', '<small class="form-text text-danger">', '</small>'); ?>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label class="form-label">Aktif User</label>
									<select class="form-control" name="is_active" required>
										<option value="">---Aktif User---</option>
										<option value="0" <?php if ($value->is_active == '0') {
																echo 'selected';
															} ?>>Belum Aktif</option>
										<option value="1" <?php if ($value->is_active == '1') {
																echo 'selected';
															} ?>>Aktif</option>
									</select>
									<?= form_error('level', '<small class="form-text text-danger">', '</small>'); ?>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label class="form-label">Tanggal Daftar</label>
									<h6><?= time_since($value->created_at) ?></h6>
								</div>
							</div>
						</div>


					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Save changes</button>
					</div>
			</form>
		</div>
	</div>
	</div>
<?php
}
?>

<?php
foreach ($user as $key => $value) {
?>

	<div class="modal fade" id="hapus<?= $value->id_user ?>" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<form action="<?= base_url('admin/cuser/delete/' . $value->id_user) ?>" method="POST">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Hapus User</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body m-3">
						<p class="mb-0">Apakah Anda Yakin Untuk Menghapus?</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Save changes</button>
					</div>
				</div>
			</form>
		</div>
	</div>
<?php
}
?>