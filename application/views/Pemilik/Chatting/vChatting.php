<main class="content">
	<div class="container-fluid p-0">

		<h1 class="h3 mb-3">Ulasan Pelanggan</h1>
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
					<?= $this->session->userdata('success') ?>
				</div>
			</div>
		<?php
		}
		?>


		<div class="row">
			<div class="col-6 col-xl-7">
				<div class="card">
					<div class="card-header">
						<h5 class="card-title">Informasi Ulasan Pelanggan</h5>
					</div>
					<table class="table">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama</th>
								<th>Time</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no = 1;
							foreach ($chat as $key => $value) {
							?>
								<tr>
									<td><?= $no++ ?></td>
									<td><?= $value->nama ?></td>
									<td><?= $value->created_at ?></td>

									<td class="table-action">
										<a href="<?= base_url('pemilik/cChatting/detail_chatting/' . $value->id_layanan) ?>" class="btn btn-warning"><i class="align-middle" data-feather="eye"></i></a>
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
</main>