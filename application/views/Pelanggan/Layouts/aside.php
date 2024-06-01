<!-- Sidebar -->
<aside class="sidebar trans-0-4">
    <!-- Button Hide sidebar -->
    <button class="btn-hide-sidebar ti-close color0-hov trans-0-4"></button>

    <!-- - -->
    <ul class="menu-sidebar p-t-95 p-b-70">
        <?php if ($this->session->userdata('id_pelanggan') == '') { ?>
            <li class="t-center m-b-30">
                <a href="<?= base_url('pelanggan/clogin') ?>" class="txt19">Login</a>
            </li>
            <li class="t-center m-b-30">
                <a href="<?= base_url('pelanggan/clogin/registrasi') ?>" class="txt19">Daftar</a>
            </li>
        <?php } else { ?>

            <li class="t-center m-b-30">
                <a href="<?= base_url('pelanggan/chome') ?>" class="txt19">Beranda</a>
            </li>
            <li class="t-center m-b-30">
                <a href="<?= base_url('pelanggan/cprofil') ?>" class="txt19">Profil</a>
            </li>
            <li class="t-center m-b-30">
                <a href="<?= base_url('pelanggan/chome/menu') ?>" class="txt19">Menu</a>
            </li>
            <li class="t-center m-b-30">
                <a href="<?= base_url('pelanggan/cpesanansaya') ?>" class="txt19">Pesanan Saya</a>
            </li>
            <li class="t-center m-b-30">
                <a href="<?= base_url('pelanggan/chome/view_cart') ?>" class="txt19">Keranjang</a>
            </li>
            <li class="t-center m-b-30">
                <a href="<?= base_url('pelanggan/cchatting') ?>" class="txt19">Chat</a>
            </li>
            <li class="t-center m-b-30">
                <a href="<?= base_url('pelanggan/chome/kontak') ?>" style="color: #A92828;" class="txt19"><strong>Daftar Merchant</strong></a>
            </li>
            
            <li class="t-center m-b-30">
                <a href="blog.html" class="btn btn-danger text-white txt19" style="border-radius: 20px; " href="<?= base_url('pelanggan/clogin/Logout') ?> ">Keluar</a>
            </li>
        <?php } ?>

    </ul>
    </div>
</aside>