	<main class="content" style="background-color:#f1f1f1">
		<div class="container p-0 pt-3 pb-3">
			<div class="card">
				<div class="row g-0">
					<div class="col-12 col-lg-5 col-xl-3 border-right">

						<div class="px-4 d-none d-md-block">
							<div class="d-flex align-items-center">
								<div class="flex-grow-1">
									<input type="text" class="form-control my-3" placeholder="Search... " style="background-color: #f1f1f1;">
								</div>
							</div>
						</div>
						<div id="yangAktif"></div>

						<hr class="d-block d-lg-none mt-1 mb-0">
					</div>
					<div class="col-12 col-lg-7 col-xl-9">
						<div class="py-2 px-4 border-bottom d-none d-lg-block">
							<div class="d-flex align-items-center py-1">
								<a href="" style="text-decoration: none; color: black;">

									<div class="position-relative">
										<img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">
									</div>
									<div class="flex-grow-1 pl-3">
										<strong><?= $data->nama_plggn ?></strong>

										<div class="text-muted small"><em>
												Ngepur...
											</em></div>
								</a>
							</div>
							<div>
								<button class="btn-lg px-3" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal feather-lg">
										<circle cx="12" cy="12" r="1"></circle>
										<circle cx="19" cy="12" r="1"></circle>
										<circle cx="5" cy="12" r="1"></circle>
									</svg>
								</button>


								<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
									<a class="dropdown-item" href="javascript:void(0);" style="color: blue;"><i class="fa fa-eye" aria-hidden="true"></i> Lihat Profil</a>
									<!-- <a class="dropdown-item" href="#">Block</a> -->
									<a class="dropdown-item yakin" href="javascript:void(0);" style="color: red;"><i class="fa fa-trash-o" aria-hidden="true"></i> Hapus Chat</a>
								</div>

							</div>
						</div>
					</div>

					<div class="position-relative">
						<div class="chat-messages p-4" id="letakpesan" style="height: 350px; font-size:14px; scrollbar-width:none;">

							<!-- <div class="chat-message-right pb-4">
                                    <div>
                                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="rounded-circle mr-1" alt="Chris Wood" width="40" height="40">
                                        <div class="text-muted small text-nowrap mt-2">2:33 am</div>
                                    </div>
                                    <div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">
                                        <div class="font-weight-bold mb-1">You</div>
                                        Lorem ipsum dolor sit amet, vis erat denique in, dicunt prodesset te vix.
                                    </div>
                                </div>

                                <div class="chat-message-left pb-4">
                                    <div>
                                        <img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">
                                        <div class="text-muted small text-nowrap mt-2">2:34 am</div>
                                    </div>
                                    <div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
                                        <div class="font-weight-bold mb-1">Sharon Lessman</div>
                                        Sit meis deleniti eu, pri vidit meliore docendi ut, an eum erat animal commodo.

                                    </div>
                                </div> -->
						</div>
					</div>
					<div class="flex-grow-0 py-3 px-4 border-top">
						<div class="input-group">
							<input type="text" class="form-control pesan" placeholder="Ketik Pesan" style="background-color: #f1f1f1;">
							<button class="btn btn-primary ml-2 send_btn"><i class="bi bi-send"></i></button>
						</div>
					</div>

				</div>
			</div>
		</div>
		</div>
	</main>

	<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
	<script type="text/javascript" src="<?= base_url('asset/pato-master/') ?>vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<!--===============================================================================================-->
	<script>
		$(document).ready(function() {
			$('#action_menu_btn').click(function() {
				$('.action_menu').toggle();
			});

			pesan()

			function pesan() {
				var id_pelanggan = '<?= $data->id_pelanggan ?>'
				$.ajax({
					type: "post",
					url: "<?= base_url() ?>Admin/cChatting/loadChat",
					data: {
						id_user: id_pelanggan,
						id_toko: '<?= $this->session->userdata("id") ?>',
					},
					dataType: "json",
					success: function(r) {
						var html = "";
						var d = r.data;
						id_user = '<?= $data->id_pelanggan ?>';
						$.each(r.data, function(index, d) {
							console.log(d);
							var today = new Date();
							var dd = String(today.getDate()).padStart(2, '0');
							var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
							var yyyy = today.getFullYear();
							today = dd + '-' + mm + '-' + yyyy;
							var times = new Date(d.time)
							var time = times.toLocaleTimeString()
							var tanggal = String(times.getDate()).padStart(2, '0');
							var bulan = String(times.getMonth() + 1).padStart(2, '0');
							var tahun = times.getFullYear()
							var lengkapDB = tanggal + '-' + bulan + '-' + tahun
							var kapan = "Today"
							var tanggal_bulan = tanggal + "-" + bulan
							var pelanggan = '<?= $data->nama_plggn ?>'
							var userList = $("#letakpesan");
							if (lengkapDB != today) {
								kapan = tanggal_bulan
							}
							if (d.pelanggan_send == 0) {
								html += `<div class="chat-message-right pb-4">
                                    <div>
                                        <img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">
                                        <div class="text-muted small text-nowrap mt-2">${time}</div>
                                    </div>
                                    <div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
                                        <div class="font-weight-bold mb-1">You</div>
                                       ${d.toko_send}
                                    </div>
                                </div>`;
							} else {
								html += `<div class="chat-message-left pb-4">
                                    <div>
                                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="rounded-circle mr-1" alt="Chris Wood" width="40" height="40">
                                        <div class="text-muted small text-nowrap mt-2">${time}</div>
                                    </div>
                                    <div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">
                                        <div class="font-weight-bold mb-1">${pelanggan}</div>
                                        ${d.pelanggan_send}
                                    </div>
                                </div>`;

							}

						});
						$("#letakpesan").html(html);

					}
				});
			}
			setInterval(() => {
				pesan()
			}, 1000);

			$('.pesan').keypress(function(e) {
				if (e.which == 13) { // Deteksi tombol "Enter" (kode 13)
					e.preventDefault(); // Mencegah default action dari tombol "Enter"
					var pesan = $('.pesan').val();
					var id_pelanggan = '<?= $data->id_pelanggan ?>';
					var id_user = '<?= $this->session->userdata("id") ?>';
					if (pesan != "") {
						$.ajax({
							type: "post",
							url: "<?= base_url() ?>admin/cChatting/KirimPesan",
							data: {
								id_pelanggan,
								id_user,
								pesan
							},
							dataType: "json",
							success: function(r) {
								if (r.status) {
									$('.search_btn').trigger('click');
									$('.pesan').val('');
									scrollToBottom();
								}
							}
						});
					}
					scrollToBottom();
					orang();

					function scrollToBottom() {
						$("#letakpesan").animate({
							scrollTop: 200000000000000000000000000000000
						}, "slow");
					}
				}
			});


			function orang() {
				$.ajax({
					type: "post",
					url: "<?= base_url() ?>admin/cChatting/GetAllOrang",
					data: {
						id_user: '<?= $this->session->userdata("id"); ?>'
					},
					dataType: "json",
					success: function(r) {
						console.log(r);
						var html = "";
						$.each(r.data, function(index, d) {
							html += `<div class="list-group-item list-group-item-action border-0 coba" data-id="${d.id_user}">
                            <div class="badge bg-success float-right">5</div>
                            <div class="d-flex align-items-start">
                                <img src="https://bootdey.com/img/Content/avatar/avatar5.png" class="rounded-circle mr-1" alt="Vanessa Tucker" width="40" height="40">
                                <div class="flex-grow-1 ml-3">
                                    ${d.nama_plggn}
                                    <div class="small"><span class="fa fa-circle mt-2" style="font-size:10px; color:green;"></span> Online</div>
                                </div>
                            </div>
                        </div>`;
						});
						$('#yangAktif').html(html);
					},
					error: function(xhr, status, error) {
						console.log(xhr.responseText);
					}
				});
			}
			orang();

			$('body').on('click', '.coba', function() {
				var id = $(this).data('id');
				window.location.href = "<?= base_url() ?>pelanggan/cChatting/pesan/" + id;
			});


			$('.yakin').click(function(e) {
				e.preventDefault();
				Swal.fire({
					title: "Yakin Menghapus Chat?",
					// text: "Chat Tidak Bisa dikembalikan!",
					icon: "warning",
					showCancelButton: true,
					confirmButtonColor: "#3085d6",
					cancelButtonColor: "#d33",
					confirmButtonText: "Hapus"
				}).then((result) => {
					if (result.isConfirmed) {
						var id_pelanggan = '<?= $data->id_pelanggan ?>';
						var id_user = '<?= $this->session->userdata("id") ?>';
						$.ajax({
							type: "post",
							url: "<?= base_url() ?>admin/cChatting/hapusChat",
							data: {
								id_pelanggan: id_pelanggan,
								id_user: id_user,
							},
							dataType: "json",
							success: function(response) {}
						});
						Swal.fire({
							title: "Berhasil!",
							text: "Chat Berhasil Terhapus.",
							icon: "success",
						});
					}
					setInterval(() => {
						window.location.href = "<?= base_url() ?>admin/cChatting/"
					}, 1300);
					orang();
				});
			});
		});
	</script>