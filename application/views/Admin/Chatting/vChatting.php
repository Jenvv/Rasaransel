    <style>
    	
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

    <main class="content " style="background-color:#f1f1f1">
    	<div class="container p-0 pt-3 pb-3">
    		<div class="card shadow-lg p-3 mb-5 bg-white rounded" style="height: 550px;">
    			<div class="col-12 col-lg-12 col-xl-12 border-bottom " style="background-color:#f9f9f9;">
    				<div class="px-4 d-none d-md-block">
    					<div class="d-flex align-items-center">
    						<h3>Pesan</h3>

    						<div class="flex-grow-1">
    							<input type="text" class="form-control my-3" placeholder="Search..." style="background-color: #f1f1f1; width:400px; float:right;">
    						</div>
    					</div>
    				</div>
    				<hr class="mt-1 mb-0">
    				<div id="yangAktif"></div>

    			</div>
    		</div>
    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>
    	$(document).ready(function() {
    		function orang() {
    			$.ajax({
    				type: "post",
    				url: "<?= base_url() ?>Admin/cChatting/GetAllOrang",
    				data: {
    					id_user: '<?= $this->session->userdata("id"); ?>'
    				},
    				dataType: "json",
    				success: function(r) {
    					console.log(r);
    					var html = "";
    					// Urutkan data berdasarkan id_chatting DESC (descending)
    					r.data.sort((a, b) => b.id_chatting - a.id_chatting);
    					$.each(r.data, function(index, d) {
    						html += `<div class="list-group-item list-group-item-action border-0 mt-1">
                        <div class="float-right">
                        <button class="btn-lg px-3" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="javascript:void(0);" style="color: blue;"><i class="fa fa-eye" aria-hidden="true"></i> Lihat Profil</a>
                                    <a class="dropdown-item yakin" href="javascript:void(0);" style="color: red;"><i class="fa fa-trash-o" aria-hidden="true"></i> Hapus Chat</a>
                                </div>
                        </div>
                        <div class="d-flex align-items-start coba" data-id="${d.id_pelanggan}">
                            <img src="https://bootdey.com/img/Content/avatar/avatar5.png" class="rounded-circle mr-1" alt="Vanessa Tucker" width="40" height="40">
                            <div class="flex-grow-1 ml-3">
                                ${d.nama_plggn}
                                <div class="small"><span class="fa fa-circle mt-2" style="font-size:10px; color:green;"></span> ${d.id_chatting}</div>
                            </div>
                        </div>
                    </div>`;
    					});
    					$('#yangAktif').append(html); // Perubahan disini: append() untuk menambahkan HTML baru
    				},
    				error: function(xhr, status, error) {
    					console.log(xhr.responseText);
    				}
    			});
    		}
    		orang();


    	});


    	// Event handler untuk elemen yang belum ada saat halaman dimuat
    	$('body').on('click', '.coba', function() {
    		var id = $(this).data('id'); // Gunakan $(this) untuk mengambil data dari elemen yang diklik
    		window.location.href = "<?= base_url() ?>Admin/cChatting/pesan/" + id;
    	});
    </script>
  