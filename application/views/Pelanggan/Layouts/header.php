<!DOCTYPE html>
<html lang="en">

<head>
    <title>RASA RANSEL</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?= base_url('asset/pato-master/') ?>images/icons/favicon.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('asset/pato-master/') ?>vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('asset/pato-master/') ?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
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
    <!-- StyleSheet -->
    <style>
        .checked {
            color: orange;
        }
    </style>
    <style>
        .star {
            margin: 0;
            padding: 0;
        }

        .select {
            cursor: pointer;
            list-style-type: none;
            display: inline-block;
            color: #F0F0F0;
            text-shadow: 0 0 1px #666666;
            font-size: 20px;
        }

        .highlight,
        .selected {
            color: #F4B30A;
        }
    </style>
</head>

<body class="animsition">

    <!-- Header -->
    <header>
        <!-- Header desktop -->
        <div class="wrap-menu-header gradient1 trans-0-4">
            <div class="container h-full">
                <div class="wrap_header trans-0-3">

                    <!-- Menu -->
                    <div class="wrap_menu p-l-45 p-l-0-xl ">
                        <nav class="menu">
                            <ul class="main_menu">
                                <li>
                                    <a href="<?= base_url('pelanggan/chome') ?>">Beranda</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('pelanggan/chome/menu') ?>">Menu</a>
                                </li>
                                <?php if ($this->session->userdata('id_pelanggan') != '') { ?>
                                    <li>
                                        <a href="<?= base_url('pelanggan/cpesanansaya') ?>">Pesanan Saya</a>
                                    </li>

                                    <?php
                                    $cart = 0;
                                    foreach ($this->cart->contents() as $key => $value) {
                                        $cart += $value['qty'];
                                    }
                                    if ($cart == '0') {
                                    ?>
                                        <li>
                                            <a href="<?= base_url('pelanggan/chome/view_cart') ?>" class="txt19">Keranjang</a>
                                        </li>
                                    <?php } else { ?>
                                        <li>
                                            <a href="<?= base_url('pelanggan/chome/view_cart') ?>" class="txt19">Keranjang <span class="badge badge-success"> <?= $cart ?></span></a>
                                        </li>
                                    <?php } ?>
                                <?php } ?>
                                <?php if ($this->session->userdata('id_pelanggan') == '') { ?>
                                    <li>
                                        <a href="<?= base_url('pelanggan/clogin') ?>"><?= $this->session->userdata('nama_pelanggan'); ?>Login</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('pelanggan/clogin/registrasi') ?>">Daftar</a>
                                    </li>
                                <?php } else { ?>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Profil
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="<?= base_url('pelanggan/cprofil') ?>"><?= $this->session->userdata('nama_pelanggan'); ?></a>
                                            <a class="dropdown-item" href="<?= base_url('pelanggan/cprofil/aktivitas') ?>">Aktivitas</a>
                                            <a class="dropdown-item" href="<?= base_url('pelanggan/cchatting') ?>">Chat</a>
                                            <?php
                                            $CI = &get_instance();
                                            $CI->load->model('mMerchant');
                                            $username = $this->session->userdata('username');
                                            $merchants = $CI->mMerchant->select();

                                            $is_merchant = false;
                                            $merchant_active = false;

                                            foreach ($merchants as $merchant) {
                                                if ($username == $merchant->username) {
                                                    $is_merchant = true;
                                                    $merchant_active = ($merchant->is_active == 1);
                                                    break;
                                                }
                                            }
                                            ?>

                                            <?php if ($is_merchant) : ?>
                                                <?php if ($merchant_active) : ?>
                                                    <!-- <a href="<?= base_url('pelanggan/cProfil/aktivitas') ?>" style="color: #A92828;" class="txt19"><strong>Login Merchant</strong></a> -->
                                                    <a class="dropdown-item" style="color: #dc3545;" href="<?= base_url('pelanggan/cprofil/aktivitas') ?>">Login Merchant</a>
                                                <?php else : ?>
                                                    <!-- <a href="<?= base_url('pelanggan/cProfil/aktivitas') ?>" style="color: #A92828;" class="txt19"><strong>Cek Status</strong></a> -->
                                                    <a class="dropdown-item" style="color: #dc3545;" href="<?= base_url('pelanggan/cprofil/aktivitas') ?>">Cek Status</a>
                                                <?php endif; ?>
                                            <?php else : ?>
                                                <!-- <a href="<?= base_url('pelanggan/cProfil/merchant') ?>" style="color: #A92828;" class="txt19"><strong>Daftar Merchant</strong></a> -->
                                                <a class="dropdown-item" style="color: #dc3545;" href="<?= base_url('pelanggan/cprofil/merchant') ?>">Daftar Merchant</a>
                                            <?php endif; ?>


                                            <!-- <a class="dropdown-item" style="color: #dc3545;" href="<?= base_url('pelanggan/cprofil/merchant') ?>">Daftar Merchant</a> -->
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="<?= base_url('pelanggan/clogin/Logout') ?>">Keluar</a>
                                        </div>
                                    </li>

                                <?php } ?>
                                <li>
                                    <a href="<?= base_url('pelanggan/chome/kontak') ?>">Pelayanan Pelanggan</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="social flex-w flex-l-m p-r-20">
                        <button class="btn-show-sidebar m-l-33 trans-0-4"></button>
                    </div>

                </div>
            </div>
        </div>
    </header>