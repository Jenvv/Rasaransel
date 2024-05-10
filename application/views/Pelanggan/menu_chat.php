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
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('asset/pato-master/') ?>fonts/themify/themify-icons.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('asset/pato-master/') ?>vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('asset/pato-master/') ?>vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('asset/pato-master/') ?>vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('asset/pato-master/') ?>vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('asset/pato-master/') ?>vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('asset/pato-master/') ?>vendor/slick/slick.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('asset/pato-master/') ?>vendor/lightbox2/css/lightbox.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('asset/pato-master/') ?>css/util.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('asset/pato-master/') ?>css/main.css">
    <!--===============================================================================================-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
            <span class="txt29">
                Menu
            </span>
        </div>
    </div>
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
                    url: "<?= base_url() ?>Pelanggan/cChatting/GetAllOrang",
                    data: {
                        id_pelanggan: '<?= $this->session->userdata("id"); ?>'
                    },
                    dataType: "json",
                    success: function(r) {
                        console.log(r);
                        var html = "";
                        $.each(r.data, function(index, d) {
                            html += `<div class="list-group-item list-group-item-action border-0 mt-1 coba" data-id="${d.id_user}">
                            <div class="badge bg-success float-right">5</div>
                            <div class="d-flex align-items-start">
                                <img src="https://bootdey.com/img/Content/avatar/avatar5.png" class="rounded-circle mr-1" alt="Vanessa Tucker" width="40" height="40">
                                <div class="flex-grow-1 ml-3">
                                    ${d.nama}
                                    <div class="small"><span class="fa fa-circle mt-2" style="font-size:10px; color:green;"></span> Online</div>
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
            window.location.replace("<?= base_url() ?>pelanggan/cChatting/pesan/" + id);
        });
    </script>
</body>

</html>