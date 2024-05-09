<!DOCTYPE html>
<html lang="en">

<head>
    <title>RUMAH MAKAN KEDUNG ROSO</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?= base_url('asset/pato-master/') ?>images/icons/favicon.png" />
    <!--===============================================================================================-->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />
    <!--===============================================================================================-->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!--===============================================================================================-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css" rel="stylesheet" />
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
    <!------ Include the above in your HEAD tag ---------->
</head>
<style>
    /* .container {
		max-width: 110px;
		margin: auto;
	} */

    img {
        max-width: 100%;
    }

    .inbox_people {
        background: #f8f8f8 none repeat scroll 0 0;
        float: left;
        overflow: hidden;
        width: 40%;
        border-right: 1px solid #c4c4c4;
    }

    .inbox_msg {
        border: 1px solid #c4c4c4;
        clear: both;
        overflow: hidden;
    }

    .top_spac {
        margin: 20px 0 0;
    }

    .recent_heading {
        float: left;
        width: 40%;
    }

    .srch_bar {
        display: inline-block;
        text-align: right;
        width: 60%;
    }

    .headind_srch {
        padding: 10px 29px 10px 20px;
        overflow: hidden;
        border-bottom: 1px solid #c4c4c4;
    }

    .recent_heading h4 {
        color: #05728f;
        font-size: 21px;
        margin: auto;
    }

    .srch_bar input {
        border: 1px solid #cdcdcd;
        border-width: 0 0 1px 0;
        width: 80%;
        padding: 2px 0 4px 6px;
        background: none;
    }

    .srch_bar .input-group-addon button {
        background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
        border: medium none;
        padding: 0;
        color: #707070;
        font-size: 18px;
    }

    .srch_bar .input-group-addon {
        margin: 0 0 0 -27px;
    }

    .chat_ib h5 {
        font-size: 15px;
        color: #464646;
        margin: 0 0 8px 0;
    }

    .chat_ib h5 span {
        font-size: 13px;
        float: right;
    }

    .chat_ib p {
        font-size: 14px;
        color: #989898;
        margin: auto;
    }

    .chat_img {
        float: left;
        width: 11%;
    }

    .chat_ib {
        float: left;
        padding: 0 0 0 15px;
        width: 88%;
    }

    .chat_people {
        overflow: hidden;
        clear: both;
    }

    .chat_list {
        border-bottom: 1px solid #c4c4c4;
        margin: 0;
        padding: 18px 16px 10px;
    }

    .inbox_chat {
        background-color: white;
        height: 550px;
        overflow-y: scroll;
    }

    .active_chat {
        background: #ebebeb;
    }

    .incoming_msg_img {
        display: inline-block;
        width: 6%;
    }

    .received_msg {
        display: inline-block;
        padding: 0 0 0 10px;
        vertical-align: top;
        width: 92%;
    }

    .received_withd_msg p {
        background: #ebebeb none repeat scroll 0 0;
        border-radius: 3px;
        color: #646464;
        font-size: 14px;
        margin: 0;
        padding: 5px 10px 5px 12px;
        width: 100%;
    }

    .time_date {
        color: #747474;
        display: block;
        font-size: 12px;
        margin: 8px 0 0;
    }

    .received_withd_msg {
        width: 57%;
    }

    .mesgs {
        background-color: white;
        float: left;
        padding: 30px 15px 0 25px;
        width: 60%;
    }

    .sent_msg p {
        background: #05728f none repeat scroll 0 0;
        border-radius: 3px;
        font-size: 14px;
        margin: 0;
        color: #fff;
        padding: 5px 10px 5px 12px;
        width: 100%;
    }

    .outgoing_msg {
        overflow: hidden;
        margin: 26px 0 26px;
    }

    .sent_msg {
        float: right;
        width: 46%;
    }

    .input_msg_write input {
        background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
        border: medium none;
        color: #4c4c4c;
        font-size: 15px;
        min-height: 48px;
        width: 100%;
    }

    .type_msg {
        border-top: 1px solid #c4c4c4;
        position: relative;
    }

    .msg_send_btn {
        background: #05728f none repeat scroll 0 0;
        border: medium none;
        border-radius: 50%;
        color: #fff;
        cursor: pointer;
        font-size: 17px;
        height: 33px;
        position: absolute;
        right: 0;
        top: 11px;
        width: 33px;
    }

    .messaging {
        padding: 0 0 40px 0;
    }

    .msg_history {
        height: 516px;
        overflow-y: auto;
    }
</style>

<!-- <body class="animsition" style="background-color: #f4f4f4;"> -->

<body style="background-color: #f4f4f4;">
    <!-- Content page -->

    <div class="bread-crumb bo5-b p-t-17 p-b-17">
        <div class="container">
            <a href="<?= base_url('pelanggan/chome') ?>" class="txt27">
                Home
            </a>


            <span class="txt29 m-l-10 m-r-10">/</span>

            <span class="txt29">
                Chatting
            </span>
        </div>
    </div>


    <div class="container">
        <div class="messaging mt-3">
            <div class="inbox_msg">
                <div class="inbox_people">
                    <div class="headind_srch">
                        <div class="recent_heading">
                            <h4>Recent</h4>
                            <!--  -->
                        </div>
                        <div class="srch_bar">
                            <div class="stylish-input-group">
                                <input type="text" class="search-bar" placeholder="Search" style="background-color: white; border-radius:8px;" />
                                <span class="input-group-addon">
                                    <button type="button">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="inbox_chat">
                        <div id="yangAktif"></div>
                        <!-- <div class="chat_list active_chat">
                            <div class="chat_people">
                                <div class="chat_img">
                                    <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil" />
                                </div>
                                <div class="chat_ib">
                                    <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
                                    <p>
                                        Test, which is a new approach to have all solutions
                                        astrology under one roof.
                                    </p>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="chat_list">
                            <div class="chat_people">
                                <div class="chat_img">
                                    <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil" />
                                </div>
                                <div class="chat_ib">
                                    <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
                                    <p>
                                        Test, which is a new approach to have all solutions
                                        astrology under one roof.
                                    </p>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="mesgs">
                    <div class="msg_history" id="letakpesan">
                        <!-- Text -->
                    </div>
                    <div class="type_msg">
                        <div class="input_msg_write">
                            <input type="text" class="write_msg pesan" placeholder="Type a message" />
                            <button class="msg_send_btn send_btn" type="button">
                                <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                            html += `
                    <div class="chat_list coba" data-id="${d.id_user}">
                        <div class="chat_people">
                            <div class="chat_img">
                                <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil" />
                            </div>
                            <div class="chat_ib">
                                <h5>${d.username}<span class="chat_date">Dec 25</span></h5>
                                <p>
                                    Test, which is a new approach to have all solutions
                                    astrology under one roof.
                                </p>
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