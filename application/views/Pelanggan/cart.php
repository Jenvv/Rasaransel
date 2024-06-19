<!-- Title Page -->
<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(<?= base_url('asset/foto2.jpg') ?>);">
	<h2 class="tit6 t-center">
		Keranjang
	</h2>
</section>

<!-- Reservation -->
<section class="section-reservation bg1-pattern p-t-100 p-b-113">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="t-center">
					<span class="tit2 t-center">
						RASA RANSEL
					</span>
					<h3 class="tit3 t-center m-b-35 m-t-2">
						Keranjang
					</h3>
				</div>
			</div>
			<div class="col-lg-9 p-b-30">
				<table class="table table-striped">
					<thead>
						<th>No</th>
						<th>Gambar</th>
						<th>Nama Produk</th>
						<th>Quantity</th>
						<th>Harga</th>
						<th>Subtotal</th>
						<th>Action</th>
					</thead>
					<tbody>
						<?php
						$no = 1;
						$i = 1;
						foreach ($this->cart->contents() as $key => $value) {
						?>
							<tr>
								<td><?= $no++ ?></td>
								<td><img style="width: 150px;" class="rounded-circle" src="<?= base_url('asset/foto-produk/' . $value['picture']) ?>"></td>
								<td><?= $value['name'] ?></td>
								<td>
									<input name="<?= $i . '[qty]' ?>" min="1" type="number" value="<?= $value['qty'] ?>" class="qty-input" data-rowid="<?= $value['rowid'] ?>">
								</td>
								<td>Rp. <?= number_format($value['price'], 2, ',', '.') ?></td>
								<td class="subtotal">Rp. <?= number_format($value['price'] * $value["qty"], 2, ',', '.') ?></td>
								<td><a href="<?= base_url('pelanggan/chome/delete/' . $value['rowid']) ?>">Hapus</a></td>
							</tr>
						<?php
							$i++;
						}
						?>
					</tbody>
				</table>
			</div>
			<div class="col-lg-3">
				<table class="table table-striped">
					<tr>
						<th>Keranjang</th>
						<th>&nbsp;</th>
					</tr>
					<tr>
						<td>Total</td>
						<td>
							<h5>Rp. <span id="total-price"><?php echo number_format($this->cart->total(), 2, ',', '.'); ?></span></h5>
						</td>
					</tr>
				</table>
				<a href="<?= base_url('pelanggan/chome/pengiriman') ?>" class="btn btn-warning">Checkout</a>
			</div>
		</div>
	</div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
	$(document).ready(function() {
		$('.qty-input').on('change', function() {
			var rowid = $(this).data('rowid');
			var qty = $(this).val();
			$.ajax({
				url: '<?= base_url('pelanggan/chome/update_cart') ?>',
				type: 'POST',
				data: {
					rowid: rowid,
					qty: qty
				},
				success: function(response) {
					var data = JSON.parse(response);
					if (data.status === 'success') {
						// Update the subtotal and total price on the page
						var row = $('input[data-rowid="' + rowid + '"]').closest('tr');
						row.find('.subtotal').text('Rp. ' + data.subtotal);
						$('#total-price').text(data.total);
					} else {
						alert('Failed to update cart. Please try again.');
					}
				}
			});
		});
	});
</script>