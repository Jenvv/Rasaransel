<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Web UI Kit &amp; Dashboard Template based on Bootstrap">
    <meta name="author" content="AdminKit">
    <meta name="keywords" content="adminkit, bootstrap, web ui kit, dashboard template, admin template">

    <link rel="shortcut icon" href="<?= base_url('asset/adminkit/examples/') ?>img/icons/icon-48x48.png" />

    <title>RASA RANSEL</title>

    <link href="<?= base_url('asset/adminkit/examples/') ?>css/app.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= base_url('asset/trix-main/dist/') ?>trix.css">
    <script type="text/javascript" src="<?= base_url('asset/trix-main/dist/') ?>trix.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <link href="<?= base_url('asset/admintoko/vendors/') ?>mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet">

    <link rel="stylesheet" href="/resources/demos/style.css">


</head>
<style>
    * {
        font-family: poppins;
    }

    /* css dashboard */
    .overview-chart {
        height: 115px;
        position: relative;
    }

    .overview-chart canvas {
        width: 100%;
    }

    .overview-box .icon {
        display: inline-block;
        vertical-align: top;
        margin-right: 15px;
    }

    .overview-box .icon i {
        font-size: 60px;
        color: #fff;
    }

    @media (min-width: 992px) and (max-width: 1199px) {
        .overview-box .icon {
            margin-right: 3px;
        }

        .overview-box .icon i {
            font-size: 30px;
        }
    }

    @media (max-width: 991px) {
        .overview-box .icon {
            font-size: 46px;
        }
    }

    .overview-box .text {
        font-weight: 300;
        display: inline-block;
    }

    .overview-box .text h2 {
        font-weight: 300;
        color: #fff;
        font-size: 36px;
        line-height: 1;
        margin-bottom: 5px;
    }

    .overview-box .text span {
        font-size: 18px;
        color: rgba(255, 255, 255, 0.6);
    }

    @media (min-width: 992px) and (max-width: 1199px) {
        .overview-box .text {
            display: inline-block;
        }

        .overview-box .text h2 {
            font-size: 20px;
            margin-bottom: 0;
        }

        .overview-box .text span {
            font-size: 14px;
        }
    }

    @media (max-width: 991px) {
        .overview-box .text h2 {
            font-size: 26px;
        }

        .overview-box .text span {
            font-size: 15px;
        }
    }

    .overview-item {
        -webkit-border-radius: 10px;
        -moz-border-radius: 10px;
        border-radius: 10px;
        padding: 30px;
        padding-bottom: 0;
        -webkit-box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.1);
        -moz-box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.1);
        box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.1);
        margin-bottom: 40px;
    }

    @media (min-width: 992px) and (max-width: 1519px) {
        .overview-item {
            padding-left: 15px;
            padding-right: 15px;
        }
    }

    .overview-item--c1 {
        background-image: -moz-linear-gradient(90deg, #3f5efb 0%, #fc466b 100%);
        background-image: -webkit-linear-gradient(90deg, #3f5efb 0%, #fc466b 100%);
        background-image: -ms-linear-gradient(90deg, #3f5efb 0%, #fc466b 100%);
    }

    .overview-item--c2 {
        background-image: -moz-linear-gradient(90deg, #11998e 0%, #38ef7d 100%);
        background-image: -webkit-linear-gradient(90deg, #11998e 0%, #38ef7d 100%);
        background-image: -ms-linear-gradient(90deg, #11998e 0%, #38ef7d 100%);
    }

    .overview-item--c3 {
        background-image: -moz-linear-gradient(90deg, #ee0979 0%, #ff6a00 100%);
        background-image: -webkit-linear-gradient(90deg, #ee0979 0%, #ff6a00 100%);
        background-image: -ms-linear-gradient(90deg, #ee0979 0%, #ff6a00 100%);
    }

    .overview-item--c4 {
        background-image: -moz-linear-gradient(90deg, #45b649 0%, #dce35b 100%);
        background-image: -webkit-linear-gradient(90deg, #45b649 0%, #dce35b 100%);
        background-image: -ms-linear-gradient(90deg, #45b649 0%, #dce35b 100%);
    }
</style>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="sidebar" style="background-color: #A92828;">
            <div class="sidebar-content js-simplebar" style="background-color: #A92828;">
                <a class="sidebar-brand" href="index.html">
                    <span class="align-middle">ADMIN</span>
                </a>

                <ul class="sidebar-nav">
                    <li class="sidebar-item <?php if ($this->uri->segment(1) == 'Pemilik' && $this->uri->segment(2) == 'cDashboard') {
                                                echo 'active';
                                            }  ?>">
                        <a class="sidebar-link" href="<?= base_url('Pemilik/cDashboard') ?>" style="background-color: #A92828;color:white;">

                            <i class="align-middle" style="color:white;" data-feather="compass"></i> <span class="align-middle">Dashboard</span>
                        </a>
                    </li>




                    <!-- NEXK KAJO -->
                    <li class="sidebar-item <?php if ($this->uri->segment(1) == 'Pemilik' && $this->uri->segment(2) == 'cMonitoring') {
                                                echo 'active';
                                            }  ?>">
                        <a class="sidebar-link" href="<?= base_url('Pemilik/cTransaksi') ?>" style="background-color: #A92828;color:white;">
                            <i class="align-middle" style="color:white;" data-feather="monitor"></i> <span class="align-middle">Monitoring</span>
                        </a>
                    </li>
                    <li class="sidebar-item <?php if ($this->uri->segment(1) == 'Pemilik' && $this->uri->segment(2) == 'cUlasan') {
                                                echo 'active';
                                            }  ?>">
                        <a class="sidebar-link" href="<?= base_url('Pemilik/cChatting') ?>" style="background-color: #A92828;color:white;">
                            <i class="align-middle" style="color:white;" data-feather="message-circle"></i> <span class="align-middle">Ulasan</span>
                        </a>
                    </li>
                    <li class="sidebar-item <?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cUser') {
                                                echo 'active';
                                            }  ?>">
                        <a class="sidebar-link" href="<?= base_url('Pemilik/cUser') ?>" style="background-color: #A92828;color:white;">


                            <i class="align-middle" style="color:white;" data-feather="user"></i> <span class="align-middle">User</span>
                        </a>
                    </li>
                    <li class="sidebar-item <?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cPelanggan') {
                                                echo 'active';
                                            }  ?>">
                        <a class="sidebar-link" href="<?= base_url('Pemilik/cPelanggan') ?>" style="background-color: #A92828;color:white;">


                            <i class="align-middle" style="color:white;" data-feather="user"></i> <span class="align-middle">Pelanggan</span>
                        </a>
                    </li>
                    <li class="sidebar-item <?php if ($this->uri->segment(1) == 'Pemilik' && $this->uri->segment(2) == 'cLaporan_Transaksi') {
                                                echo 'active';
                                            }  ?>">
                        <a class="sidebar-link" href="<?= base_url('Pemilik/cLaporan_Transaksi') ?>" style="background-color: #A92828;color:white;">
                            <i class="align-middle" style="color:white;" data-feather="tag"></i> <span class="align-middle">Laporan User</span>
                        </a>
                    </li>

                    <!-- END NEXT KAJO -->



                    <li class="sidebar-item">
                        <a class="sidebar-link" href="<?= base_url('pemilik/clogin/logout') ?>" style="background-color: #A92828;color:white;">
                            <i class="align-middle" style="color:white;" data-feather="log-out"></i> <span class="align-middle">LogOut</span>
                        </a>
                    </li>

            </div>
        </nav>

        <div class="main">
            <nav class="navbar navbar-expand navbar-light navbar-bg">
                <a class="sidebar-toggle d-flex">
                    <i class="hamburger align-self-center"></i>
                </a>

                <form class="form-inline d-none d-sm-inline-block">
                    <div class="input-group input-group-navbar">
                        <input type="text" class="form-control" placeholder="Search…" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn" type="button">
                                <i class="align-middle" data-feather="search"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav navbar-align">


                    </ul>
                </div>
            </nav>