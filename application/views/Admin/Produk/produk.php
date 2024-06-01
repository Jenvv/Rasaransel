<main class="content">
	<div class="container-fluid p-0">

		<h1 class="h3 mb-3">Menu Makanan RASA RANSEL</h1>

		<a class="btn btn-primary mb-3" href="<?= base_url('admin/cproduk/create') ?>">Create produk</a>
		<?php
		if ($this->session->userdata('success')) {
		?>
			<div class="alert alert-success alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<div class="alert-icon">
					<i class="align-middle" data-feather="bell"></i>
				</div>
				<div class="alert-message">
					<?= $this->session->userdata('success') ?>
				</div>
			</div>
		<?php
		}
		?>


		<div class="row">
			<div class="col-12 col-xl-12">
				<div class="card">
					<div class="card-header">
						<h5 class="card-title">Informasi Menu Makanan <strong><?= $this->session->userdata('nama'); ?></strong></h5>
					</div>
					<table id="myTable" class="table">
						<thead>
							<tr>
								<th>Gambar</th>
								<th>Nama Produk</th>
								<th class="d-none d-md-table-cell">Harga Produk</th>
								<th class="d-none d-md-table-cell">Deskripsi</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($produk as $key => $value) { ?>
								<tr>
									<td><img src="<?= base_url('asset/foto-produk/' . $value->foto) ?>" style="width:100%;height: 100px; object-fit: cover; object-position: center center;"></td>
									<td>
										<h4><?= $value->nama_produk ?></h4>
									</td>
									<td class="d-none d-md-table-cell">Rp. <?= number_format($value->harga, 0) ?></td>
									<td class="d-none d-md-table-cell"><?= $value->deskripsi ?></td>
									<td>
										<div class="d-flex">
											<a href="<?= base_url('admin/cproduk/update/' . $value->id_produk) ?>" class="btn btn-warning mr-1">
												Edit
											</a>
											<a href="<?= base_url('admin/cproduk/delete/') . $value->id_produk ?>" class="btn btn-danger mr-1" onclick="showAlert(event)">
												Hapus
											</a>
										</div>
									</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</main>