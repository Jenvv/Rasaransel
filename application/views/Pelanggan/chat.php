<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rasa Ransel | Chat</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!--===============================================================================================-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css"
        rel="stylesheet" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('asset/pato-master/') ?>vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('asset/pato-master/') ?>fonts/themify/themify-icons.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('asset/pato-master/') ?>vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="<?= base_url('asset/pato-master/') ?>vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="<?= base_url('asset/pato-master/') ?>vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('asset/pato-master/') ?>vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="<?= base_url('asset/pato-master/') ?>vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('asset/pato-master/') ?>vendor/slick/slick.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="<?= base_url('asset/pato-master/') ?>vendor/lightbox2/css/lightbox.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('asset/pato-master/') ?>css/util.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('asset/pato-master/') ?>css/main.css">
    <!--===============================================================================================-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!--===============================================================================================-->

</head>
<style>
body {
    margin-top: 20px;

}

.chat-online {
    color: #34ce57
}

.chat-offline {
    color: #e4606d
}

.chat-messages {
    display: flex;
    flex-direction: column;
    max-height: 800px;
    overflow-y: scroll
}

.chat-message-left,
.chat-message-right {
    display: flex;
    flex-shrink: 0
}

.chat-message-left {
    margin-right: auto
}

.chat-message-right {
    flex-direction: row-reverse;
    margin-left: auto
}

.py-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
}

.px-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
}

.flex-grow-0 {
    flex-grow: 0 !important;
}

.border-top {
    border-top: 1px solid #dee2e6 !important;
}
</style>

<body>
    <div class="bread-crumb bo5-b p-b-17">
        <div class="container">
            <a href="<?= base_url('pelanggan/chome') ?>" class="txt27">
                Home
            </a>
            <span class="txt29 m-l-10 m-r-10">/</span>
            <a href="<?= base_url('pelanggan/cChatting') ?>" class="txt27">
                Menu
            </a>
            <span class="txt29 m-l-10 m-r-10">/</span>
            <span class="txt29">
                Chat
            </span>
        </div>
    </div>
    <main class="content" style="background-color:#f1f1f1">
        <div class="container p-0 pt-3 pb-3">
            <div class="card">
                <div class="row g-0">
                    <div class="col-12 col-lg-5 col-xl-3 border-right">

                        <div class="px-4 d-none d-md-block">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <input type="text" class="form-control my-3" placeholder="Search... "
                                        style="background-color: #f1f1f1;">
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

<<<<<<< HEAD
									<div class="position-relative">
										<img src="<?= base_url('asset/merchant/' . $data->photo) ?>" class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">
									</div>
									<div class="flex-grow-1 pl-3">
										<strong><?= $data->nama ?></strong>
										<div class="text-muted small"><em>
												
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
=======
                                    <div class="position-relative">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar3.png"
                                            class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">
                                    </div>
                                    <div class="flex-grow-1 pl-3">
                                        <strong><?= $data->nama ?></strong>
                                        <div class="text-muted small"><em>
                                                Mengetik...
                                            </em></div>
                                </a>
                            </div>
                            <div>
                                <button class="btn-lg px-3" id="dropdownMenuButton" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-more-horizontal feather-lg">
                                        <circle cx="12" cy="12" r="1"></circle>
                                        <circle cx="19" cy="12" r="1"></circle>
                                        <circle cx="5" cy="12" r="1"></circle>
                                    </svg>
                                </button>
>>>>>>> 4aa63faf95de749e515a69796c6993d4f3617196


                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="javascript:void(0);" style="color: blue;"><i
                                            class="fa fa-eye" aria-hidden="true"></i> Lihat Profil</a>
                                    <!-- <a class="dropdown-item" href="#">Block</a> -->
                                    <a class="dropdown-item yakin" href="javascript:void(0);" style="color: red;"><i
                                            class="fa fa-trash-o" aria-hidden="true"></i> Hapus Chat</a>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="position-relative">
                        <div class="chat-messages p-4" id="letakpesan"
                            style="height: 350px; font-size:14px; scrollbar-width:none;">

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
                            <input type="text" class="form-control pesan" placeholder="Ketik Pesan"
                                style="background-color: #f1f1f1;">
                            <button class="btn btn-primary ml-2 send_btn"><i class="bi bi-send"></i></button>
                        </div>
                    </div>

<<<<<<< HEAD
				</div>
			</div>
		</div>
		</div>
	</main>
	<!-- <div class="badge bg-success float-right">5</div> -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script type="text/javascript" src="<?= base_url('asset/pato-master/') ?>vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<!--===============================================================================================-->
	<script>
		$(document).ready(function() {
			$('#action_menu_btn').click(function() {
				$('.action_menu').toggle();
			});
=======
                </div>
            </div>
        </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="<?= base_url('asset/pato-master/') ?>vendor/jquery/jquery-3.2.1.min.js">
    </script>
    <!--===============================================================================================-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <!--===============================================================================================-->
    <script>
    $(document).ready(function() {
        $('#action_menu_btn').click(function() {
            $('.action_menu').toggle();
        });
>>>>>>> 4aa63faf95de749e515a69796c6993d4f3617196

        pesan()

<<<<<<< HEAD
			function pesan() {
				var id_toko = '<?= $data->id_user ?>'
				$.ajax({
					type: "post",
					url: "<?= base_url() ?>Pelanggan/cChatting/loadChat",
					data: {
						id_user: '<?= $this->session->userdata('id_pelanggan') ?>',
						id_toko: id_toko
					},
					dataType: "json",
					success: function(r) {
						var html = "";
						var d = r.data;
						id_user = '<?= $this->session->userdata('id') ?>';
						$.each(r.data, function(index, d) {
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
							var userList = $("#letakpesan");
							var toko = '<?= $data->nama ?>'
							var photo = '<?= $this->session->userdata('photo'); ?>'
							if (lengkapDB != today) {
								kapan = tanggal_bulan
							}
							if (d.toko_send == 0) {
								html += `<div class="chat-message-right pb-4">
=======
        function pesan() {
            var id_toko = '<?= $data->id_user ?>'
            $.ajax({
                type: "post",
                url: "<?= base_url() ?>Pelanggan/cChatting/loadChat",
                data: {
                    id_user: '<?= $this->session->userdata('id_pelanggan') ?>',
                    id_toko: id_toko
                },
                dataType: "json",
                success: function(r) {
                    var html = "";
                    var d = r.data;
                    id_user = '<?= $this->session->userdata('id') ?>';
                    $.each(r.data, function(index, d) {
                        var today = new Date();
                        var dd = String(today.getDate()).padStart(2, '0');
                        var mm = String(today.getMonth() + 1).padStart(2,
                        '0'); //January is 0!
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
                        var userList = $("#letakpesan");
                        var toko = '<?= $data->nama ?>'
                        if (lengkapDB != today) {
                            kapan = tanggal_bulan
                        }
                        if (d.toko_send == 0) {
                            html += `<div class="chat-message-right pb-4">
>>>>>>> 4aa63faf95de749e515a69796c6993d4f3617196
                                    <div>
                                        <img src="<?= base_url('asset/pelanggan/' . $users->photo) ?>" class="rounded-circle mr-1" alt="<?= $users->nama_plggn ?>" width="40" height="40">
                                        <div class="text-muted small text-nowrap mt-2">${time}</div>
                                    </div>
                                    <div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">
                                        <div class="font-weight-bold mb-1">You</div>
                                        ${d.pelanggan_send}
                                    </div>
                                </div>`
                            '';
                        } else {
                            html += `<div class="chat-message-left pb-4">
                                    <div>
                                        <img src="<?= base_url('asset/merchant/' . $data->photo) ?>" class="rounded-circle mr-1" alt="<?= $data->nama ?>" width="40" height="40">
                                        <div class="text-muted small text-nowrap mt-2">${time}</div>
                                    </div>
                                    <div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
                                        <div class="font-weight-bold mb-1">${toko}</div>
                                       ${d.toko_send}
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
                var id_pelanggan = '<?= $this->session->userdata("id_pelanggan") ?>';
                var id_user = '<?= $data->id_user ?>';
                if (pesan != "") {
                    $.ajax({
                        type: "post",
                        url: "<?= base_url() ?>pelanggan/cChatting/KirimPesan",
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


<<<<<<< HEAD
			function orang() {
				$.ajax({
					type: "post",
					url: "<?= base_url() ?>Pelanggan/cChatting/GetAllOrang",
					data: {
						id_pelanggan: '<?= $this->session->userdata("id_pelanggan"); ?>'
					},
					dataType: "json",
					success: function(r) {
						console.log(r);
						var html = "";
						$.each(r.data, function(index, d) {
							html += `<div class="list-group-item list-group-item-action border-0 coba" data-id="${d.id_user}">
=======
        function orang() {
            $.ajax({
                type: "post",
                url: "<?= base_url() ?>Pelanggan/cChatting/GetAllOrang",
                data: {
                    id_pelanggan: '<?= $this->session->userdata("id_pelanggan"); ?>'
                },
                dataType: "json",
                success: function(r) {
                    console.log(r);
                    var html = "";
                    $.each(r.data, function(index, d) {
                        html += `<div class="list-group-item list-group-item-action border-0 coba" data-id="${d.id_user}">
                            <div class="badge bg-success float-right">5</div>
>>>>>>> 4aa63faf95de749e515a69796c6993d4f3617196
                            <div class="d-flex align-items-start">
                                <img src="<?= base_url('asset/merchant/' . $data->photo) ?>" class="rounded-circle mr-1" alt="Vanessa Tucker" width="40" height="40">
                                <div class="flex-grow-1 ml-3">
                                    ${d.nama}
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
                    var id_pelanggan = '<?= $this->session->userdata("id_pelanggan") ?>';
                    var id_user = '<?= $data->id_user ?>';
                    $.ajax({
                        type: "post",
                        url: "<?= base_url() ?>pelanggan/cChatting/hapusChat",
                        data: {
                            id_pelanggan: id_pelanggan,
                            id_user: id_user,
                        },
                        dataType: "json",
                        success: function(response) {
                            console.log(response);
                        }
                    });
                    Swal.fire({
                        title: "Berhasil!",
                        text: "Chat Berhasil Terhapus.",
                        icon: "success"
                    });
                }

                orang();
            });
        });
    });
    </script>
</body>

</html>