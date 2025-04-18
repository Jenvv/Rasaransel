<main class="content">
	<div class="container-fluid p-0">

		<h1 class="h3 mb-3">Tambah Data Produk Baru</h1>

		<div class="row">
			<div class="col-12 col-xl-8">
				<div class="card">
					<div class="card-header">
						<h5 class="card-title">Data Produk</h5>
					</div>
					<div class="card-body">
						<?php echo form_open_multipart('admin/cproduk/create'); ?>
						<div class="form-group">
							<label class="form-label">Nama Produk</label>
							<input type="text" value="<?= set_value('nama') ?>" name="nama" class="form-control" placeholder="Masukkan Nama Produk">
							<?= form_error('nama', '<small class="form-text text-danger">', '</small>'); ?>
						</div>

						<div class="form-group">
							<label class="form-label">Kategori Produk</label>
							<select class="form-control" name="kategori" id="exampleFormControlSelect1">
								<option selected>Pilih Kategori...</option>
								<?php foreach ($kategori as $value) {
								?>
									<option value="<?= $value->id_kategori ?>"><?= $value->kategori; ?></option>

								<?php } ?>
							</select>
							<!-- <input type="text" value="<?= set_value('nama') ?>" name="nama" class="form-control" placeholder="Masukkan Nama Produk"> -->
							<?= form_error('kategori', '<small class="form-text text-danger">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label class="form-label">Harga Produk</label>
							<input type="number" value="<?= set_value('harga') ?>" name="harga" class="form-control" placeholder="Masukkan Harga Produk">
							<?= form_error('harga', '<small class="form-text text-danger">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label class="form-label">Deskripsi</label>
							<input id="x" name="deskripsi" type="hidden" name="content">
							<trix-editor input="x"><?= set_value('deskripsi') ?></trix-editor>
							<?= form_error('deskripsi', '<small class="form-text text-danger">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label class="form-label w-100">Foto Produk</label>
							<input type="file" name="gambar" required>
						</div>

						<button type="submit" class="btn btn-primary" style="float: right; margin-left:5px;">Simpan</button>
						<a class="btn btn-warning" style="float: right;" href="<?= base_url('admin/cproduk') ?>">Kembali</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>