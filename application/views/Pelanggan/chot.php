<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!--===============================================================================================-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css" rel="stylesheet" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('asset/pato-master/') ?>vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
    <main class="content">
        <div class="container p-0">

            <h1 class="h3 mb-3">Messages</h1>

            <div class="card">
                <div class="row g-0">
                    <div class="col-12 col-lg-5 col-xl-3 border-right">

                        <div class="px-4 d-none d-md-block">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <input type="text" class="form-control my-3" placeholder="Search...">
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
                                        <strong><?= $data->nama ?></strong>
                                        <div class="text-muted small"><em>Typing...

                                            </em></div>
                                </a>
                            </div>
                            <div>
                                <button class="btn btn-light border btn-lg px-3" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal feather-lg">
                                        <circle cx="12" cy="12" r="1"></circle>
                                        <circle cx="19" cy="12" r="1"></circle>
                                        <circle cx="5" cy="12" r="1"></circle>
                                    </svg></button>


                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#" style="color: blue;"><i class="fa fa-eye" aria-hidden="true"></i> Lihat Profil</a>
                                    <!-- <a class="dropdown-item" href="#">Block</a> -->
                                    <a class="dropdown-item" href="#" style="color: red;"><i class="fa fa-trash-o" aria-hidden="true"></i> Hapus Chat</a>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="position-relative">
                        <div class="chat-messages p-4" id="letakpesan" style="height: 450px;">

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
                            <input type="text" class="form-control pesan" placeholder="Type your message">
                            <button class="btn btn-primary ml-2 send_btn"><i class="bi bi-send"></i></button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        </div>
    </main>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $('#action_menu_btn').click(function() {
            $('.action_menu').toggle();
        });

        pesan()

        function pesan() {
            var id_toko = '<?= $data->id_user ?>'
            $.ajax({
                type: "post",
                url: "<?= base_url() ?>Pelanggan/cChatting/loadChat",
                data: {
                    id_user: '<?= $this->session->userdata('id') ?>',
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
                        if (lengkapDB != today) {
                            kapan = tanggal_bulan
                        }
                        if (d.toko_send == 0) {
                            html += `<div class="chat-message-right pb-4">
                                    <div>
                                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="rounded-circle mr-1" alt="Chris Wood" width="40" height="40">
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
                                        <img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">
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

        $('.send_btn').click(function(e) {
            var pesan = $('.pesan').val();
            var id_pelanggan = '<?= $this->session->userdata("id") ?>'
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
                            scrollToBottom()

                        }

                    }
                });
            }
            scrollToBottom()

            function scrollToBottom() {
                $("#letakpesan").animate({
                    scrollTop: 200000000000000000000000000000000
                }, "slow");
            }

        });

        function orang() {
            $.ajax({
                type: "post",
                url: "<?= base_url() ?>Pelanggan/cChatting/GetAllOrang",
                data: {
                    id_pelanggan: '<?= $this->session->userdata("id"); ?>'
                },
                dataType: "json",
                success: function(r) {
                    console.log(r);
                    var html = "";
                    $.each(r.data, function(index, d) {
                    //     html += `<div class="chat_list coba" data-id="${d.id_user}">
                    //     <div class="chat_people">
                    //         <div class="chat_img">
                    //             <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil" />
                    //         </div>
                    //         <div class="chat_ib">
                    //             <h5>${d.username}<span class="chat_date">Dec 25</span></h5>
                    //             <p>
                    //                 Test, which is a new approach to have all solutions
                    //                 astrology under one roof.
                    //             </p>
                    //         </div>
                    //     </div>
                    // </div>`;
                        html += `<div class="list-group-item list-group-item-action border-0 coba" data-id="${d.id_user}">
                            <div class="badge bg-success float-right">5</div>
                            <div class="d-flex align-items-start">
                                <img src="https://bootdey.com/img/Content/avatar/avatar5.png" class="rounded-circle mr-1" alt="Vanessa Tucker" width="40" height="40">
                                <div class="flex-grow-1 ml-3">
                                    ${d.username}
                                    <div class="small"><span class="fas fa-circle chat-online"></span> Online</div>
                                </div>
                            </div>
                        </div>`;
                    });
                    $('#yangAktif').append(html);
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                }
            });
        }
        orang();
    });


    $('body').on('click', '.coba', function() {
        var id = $(this).data('id');
        window.location.replace("<?= base_url() ?>pelanggan/cChatting/pesan/" + id);
    });
</script>

</html>