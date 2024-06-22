			<main class="content">
				<div class="container-fluid p-0">
					<?php if ($this->session->userdata('success')) {
						echo '<div class="alert alert-success alert-dismissible" role="alert">';
						echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
						echo '<span aria-hidden="true">&times;</span>';
						echo '</button>';
						echo '<div class="alert-icon">';
						echo '<i class="align-middle" data-feather="bell"></i>';
						echo '</div>';
						echo '<div class="alert-message">';
						echo $this->session->userdata('success');
						echo '</div>';
						echo '</div>';
					?>

					<?php } ?>
					<?php if ($this->session->userdata('error')) {
						echo '<div class="alert alert-danger" role="alert">';
						echo $this->session->userdata('error');
						echo '</div>';
					} ?>
					<h1 class="h3 mb-3">Pengaturan</h1>

					<div class="row">
						<div class="col-md-3 col-xl-2">

							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Pengaturan Profil</h5>
								</div>

								<div class="list-group list-group-flush" role="tablist">
									<a class="list-group-item list-group-item-action active" data-toggle="list" href="#account" role="tab">
										Profil
									</a>
									<a class="list-group-item list-group-item-action" data-toggle="list" href="#password" role="tab">
										Password
									</a>
								</div>
							</div>
						</div>

						<div class="col-md-9 col-xl-10">
							<div class="tab-content">
								<div class="tab-pane fade show active" id="account" role="tabpanel">

									<div class="card">
										<div class="card-header">
											<h5 class="card-title mb-0">info Profil</h5>
										</div>
										<div class="card-body">
											<?= form_open_multipart(); ?>
											<div class="row">
												<div class="col-md-8">
													<div class="form-group">
														<label for="inputFirstName">Nama Toko</label>
														<input type="text" name="nama" class="form-control" value="<?= $users->nama ?>" placeholder="Nama Toko">
													</div>
													<div class="form-group">
														<label for="inputUsername">Deskripsi Toko</label>
														<textarea class="form-control" name="deskripsi"><?= $users->deskripsi ?></textarea>
													</div>
													<div class="form-group">
														<label for="inputUsername">Username</label>
														<input type="text" name="username" class="form-control" value="<?= $users->username ?>" placeholder="Username">
													</div>
													<div class="form-group">
														<label for="inputEmail4">Email</label>
														<input type="email" name="email" class="form-control" value="<?= $users->email ?>" placeholder="Email">
													</div>
												</div>
												<div class="col-md-4">
													<div class="text-center">
														<img alt="<?= $users->nama ?>" src="<?= base_url('asset/merchant/' . $users->photo) ?>" class="rounded-circle img-responsive mt-2" width="128" height="128" />
														<div class="mt-2">
															<input type="file" name="fotouser">
														</div>
														<small>Gunakan 128px x 128px untuk kualitas terbaik dengan format jpg|png|jpeg</small>
													</div>
												</div>

											</div>
											<div class="form-row">
												<div class="form-group col-md-6">
													<label for="inputAddress2">No Telepon</label>
													<input type="text" class="form-control" name="no_hp" value="<?= $users->no_hp ?>" placeholder="No Telepon">
												</div>
												<div class="form-group col-md-6">
													<label for="inputAddress2">Alamat</label>
													<textarea class="form-control" name="alamat" placeholder="Apartment, studio, or floor" rows="1"><?= $users->alamat ?></textarea>
												</div>
											</div>
											<button type="submit" name="submit" value="submit" class="btn btn-primary float-right">Simpan</button>
											<?= form_close(); ?>
										</div>
									</div>
									<!-- Passw -->
								</div>
								<div class="tab-pane fade" id="password" role="tabpanel">
									<div class="card">
										<div class="card-body">
											<h5 class="card-title">Password</h5>

											<form action="<?= base_url('admin/csetting/ganti_password') ?>" method="POST">
												<div class="form-group">
													<label for="inputPasswordCurrent">Current password</label>
													<input type="password" name="pwLama" class="form-control" id="inputPasswordCurrent">
													<small><a href="#">Forgot your password?</a></small>
												</div>
												<div class="form-group">
													<label for="inputPasswordNew">New password</label>
													<input type="password" name="pwBaru" class="form-control" id="inputPasswordNew">
												</div>
												<div class="form-group">
													<label for="inputPasswordNew2">Verify password</label>
													<input type="password" name="pwBaru2" class="form-control" id="inputPasswordNew2">
												</div>
												<button type="submit" class="btn btn-primary">Save changes</button>
											</form>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</main>