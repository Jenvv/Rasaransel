<link href="<?= base_url('asset/admintoko/') ?>css/styles.css" rel="stylesheet" />
<!-- Title Page -->
<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(<?= base_url('asset/foto2.jpg') ?>);">
    <h2 class="tit6 t-center">
        Menu
    </h2>
</section>


<!-- Kategori -->

<div id="menuSection" class="container px-4 px-lg-5 mt-5">
    <div class="container  justify-content-between pl-1" style="text-align: center;">
        <div class="row">
            <?php foreach ($kategori as $key => $value) {
            ?>
                <div class="col-6 col-md-3 mb-4">
                    <a class=" wrap-pic-w" href="<?= base_url('pelanggan/chome/kategori/' . $value->id_kategori) ?>">
                        <img src="<?= base_url('asset/Icon/' . $value->photo) ?>" style="width: 50px;" alt="GALLERY">
                        <div class="txt26 trans-0-4" data-filter="*">
                            <?= $value->kategori ?>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
    <?php if ($this->session->userdata('success')) {
        echo $this->session->userdata('success');
    } ?>
    <?php if ($this->session->userdata('error')) {
        echo $this->session->userdata('error');
    } ?>
    <form class="flex-c-m flex-w flex-col-c-m-lg p-l-5 p-r-5 pb-5" action="<?= base_url('pelanggan/chome/search') ?>">
        <!-- <button class="btn btn-dark">
            <i class="fa fa-filter" aria-hidden="true"></i>
        </button> -->
        <div class="wrap-input-search size17 bo2 bo-rad-10 bgwhite pos-relative txt10 m-10">
            <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="fr" placeholder="Cari Menu Makanan">
            <i class="fa fa-search ab-r-m m-r-18" aria-hidden="true"></i>
        </div>

        <!-- Button3 -->
        <button type="submit" class="btn3 flex-c-m size18 txt11 trans-0-4 m-10">
            Cari
        </button>
    </form>

    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
        <?php
        foreach ($menu as $key => $value) {
        ?>
            <div class="col mb-5">
                <div class="card h-100">

                    <!-- Sale badge-->
                    <?php
                    if ($value->diskon != NULL) {
                    ?>
                        <div class="badge bg-success text-white position-absolute" style="top: 0.5rem; right: 0.5rem"><?= $value->nama_promo ?>
                            <?= $value->diskon ?>%</div>
                    <?php } ?>
                    <!-- Product image-->
                    <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
                        <img class="card-img-top" src="<?= base_url('asset/foto-produk/' . $value->foto) ?>" style="height: 200px; object-fit: cover; object-position: center center;" alt="..." />
                    </div>
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder"><?= $value->nama_produk ?></h5>
                            <!-- Product reviews-->
                            <div class="d-flex justify-content-center small text-warning mb-2">
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                            </div>
                            <!-- Product price-->
                            <h6>

                                <?php
                                if ($value->diskon != NULL) {
                                ?>
                                    <span class="text-muted text-decoration-line-through">Rp.<?= number_format($value->harga, 0) ?></span>
                                    Rp.
                                    <?= number_format($value->harga - (($value->diskon / 100) * $value->harga), 0)  ?></span>
                                <?php } else { ?>
                                    Rp.<?= number_format($value->harga, 0) ?>

                                <?php
                                }
                                ?>
                            </h6>
                        </div>
                    </div>
                    <?php
                    if ($this->session->userdata('id_pelanggan') != '') {
                    ?>
                        <!-- Product actions-->
                        <form action="<?= base_url('pelanggan/chome/cart') ?>" method="POST">
                            <input type="hidden" name="id" value="<?= $value->id_produk ?>">
                            <input type="hidden" name="name" value="<?= $value->nama_produk ?>">
                            <input type="hidden" name="qty" value="1">
                            <input type="hidden" name="picture" value="<?= $value->foto ?>">
                            <input type="hidden" name="user" value="<?= $value->id_user ?>">
                            <input type="hidden" name="price" value="<?= $value->harga - (($value->diskon / 100)  * $value->harga) ?>">
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><button type="submit" class="btn3 size18 txt11 trans-0-4 mt-auto" href="#">Add to cart</button></div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="<?= base_url('Pelanggan/cHome/detail_produk/' . $value->id_produk) ?>">Detail</a></div>
                            </div>
                        </form>
                    <?php } else {
                    ?>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent ">
                            <div class="text-center "><a class="btn3 size18 txt11 trans-0-4" style="padding: 12px 33px 13px 33px;" href="<?= base_url('pelanggan/clogin') ?>">Add to cart</a></div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="<?= base_url('Pelanggan/cHome/detail_produk/' . $value->id_produk) ?>">Detail</a></div>
                        </div>

                    <?php } ?>
                </div>
            </div>

        <?php } ?>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        if (window.location.href.includes('pelanggan/chome/menu')) {
            const loginSection = document.getElementById('menuSection');
            if (loginSection) {
                const offset = 148; // Sesuaikan nilai ini sesuai kebutuhan
                const elementPosition = loginSection.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - offset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        }
    });
</script>