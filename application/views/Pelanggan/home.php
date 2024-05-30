<!-- Slide1 -->
<link href="<?= base_url('asset/admintoko/') ?>css/styles.css" rel="stylesheet" />
<style>
.item-slick1 {
    position: relative;
}

.item-slick1 .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    /* Sesuaikan nilai alpha untuk kegelapan yang diinginkan */
    z-index: 1;
}

.wrap-content-slide1 {
    position: relative;
    z-index: 2;
}
</style>
<section class="section-slide">
    <div class="wrap-slick1">
        <div class="slick1">
            <div class="item-slick1 item1-slick1" style="background-image: url(<?= base_url('asset/foto3.jpg') ?>);">
                <div class="overlay"></div>
                <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-150">
                    <span class="caption1-slide1 txt1 t-center animated visible-false m-b-15" data-appear="fadeInDown">
                        Selamat Datang
                    </span>

                    <!-- <h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
						
					</h2> -->
                    <div class="wrap-btn-slide1 animated visible-false" data-appear="zoomIn">
                        <!-- Button1 -->

                    </div>
                    <div class="wrap-btn-slide1 animated visible-false" data-appear="zoomIn">

                    </div>
                </div>
            </div>

            <div class="item-slick1 item2-slick1" style="background-image: url(<?= base_url('asset/foto3.jpg') ?>);">
                <div class="overlay"></div>
                <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                    <span class="caption1-slide1 txt1 t-center animated visible-false m-b-15" data-appear="fadeIn">
                        Catering
                    </span>

                    <h3 class="caption2-slide1 tit1 t-center animated visible-false m-b-37" data-appear="fadeIn">
                        Rasa Ransel
                    </h3>
                    <div class="wrap-btn-slide1 animated visible-false" data-appear="zoomIn">
                        <!-- Button1 -->

                    </div>
                    <div class="wrap-btn-slide1 animated visible-false" data-appear="slideInUp">

                    </div>
                </div>
            </div>

            <div class="item-slick1 item3-slick1" style="background-image: url(<?= base_url('asset/foto3.jpg') ?>);">
                <div class="overlay"></div>
                <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                    <span class="caption1-slide1 txt1 t-center animated visible-false m-b-15" data-appear="fadeIn">
                    </span>

                    <h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37" data-appear="fadeIn">

                        Rasakan Kemudahan berbelanja dengan aplikasi m-commerce Catering
                    </h2>
                    <div class="wrap-btn-slide1 animated visible-false" data-appear="zoomIn">
                        <!-- Button1 -->

                    </div>
                    <div class="wrap-btn-slide1 animated visible-false" data-appear="rotateIn">

                    </div>
                </div>
            </div>

        </div>

        <div class="wrap-slick1-dots"></div>
    </div>
</section>

<!-- Welcome -->
<section class="section-welcome bg1-pattern p-t-120 p-b-105">
    <div class="container">
        <div class="row">
            <div class="col-md-6 p-t-45 p-b-30">
                <div class="wrap-text-welcome t-center">
                    <span class="tit2 t-center">
                        Cathering
                    </span>

                    <h3 class="tit3 t-center m-b-35 m-t-5">
                        Rasa Ransel
                    </h3>

                    <p class="t-center m-b-22 size3 m-l-r-auto">
                        "Makanan adalah segalanya bagi kita. Ini merupakan perpanjangan dari perasaan nasionalis,
                        perasaan etnis, sejarah pribadimu, provinsimu, daerahmu, sukumu, nenekmu. Itu tidak dapat
                        dipisahkan sejak awal." - Anthony Bourdain</p>

                    <a href="about.html" class="txt4">
                        Tentang Kami
                        <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
                    </a>
                </div>
            </div>

            <div class="col-md-6 p-b-30">
                <div class="wrap-pic-welcome size2 bo-rad-10 hov-img-zoom m-l-r-auto">
                    <img src="<?= base_url('asset/foto2.jpg') ?>" alt="IMG-OUR">
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Intro -->
<section class="section-intro">
    <div class="header-intro parallax100 t-center p-t-135 p-b-158"
        style="background-image: url(<?= base_url('asset/foto2.jpg') ?>);">
        <span class="tit2 p-l-15 p-r-15">
            MENU MAKANAN
        </span>

        <h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">
            RASA RANSEL
        </h3>
    </div>
</section>
<!-- Kategori -->
<div class="section-signup bg1-pattern p-t-55 p-b-50">

    <div class="container d-flex justify-content-between pl-5" style="text-align: center;">
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
</div>

<section class="py-4">
    <form class="flex-c-m flex-w flex-col-c-m-lg p-l-5 p-r-5">
        <!-- <button class="btn btn-dark">
            <i class="fa fa-filter" aria-hidden="true"></i>
        </button> -->
        <div class="wrap-input-search size17 bo2 bo-rad-10 bgwhite pos-relative txt10 m-10">
            <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="cari" placeholder="Cari Menu Makanan">
            <i class="fa fa-search ab-r-m m-r-18" aria-hidden="true"></i>
        </div>

        <!-- Button3 -->
        <button type="submit" class="btn3 flex-c-m size18 txt11 trans-0-4 m-10">
            Cari
        </button>
    </form>
    <div class="container px-4 px-lg-5 mt-5">

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
                    <div class="badge bg-success text-white position-absolute" style="top: 0.5rem; right: 0.5rem">
                        <?= $value->nama_promo ?>
                        <?= $value->diskon ?>%</div>
                    <?php } ?>
                    <!-- Product image-->
                    <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
                        <img class="card-img-top" src="<?= base_url('asset/foto-produk/' . $value->foto) ?>"
                            style="height: 200px; object-fit: cover; object-position: center center;" alt="..." />
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
                                <span class="text-muted text-decoration-line-through">Rp.
                                    <?= number_format($value->harga - (($value->diskon / 100) * $value->harga), 0)  ?></span>
                                <?php
                                    }
                                    ?>
                                Rp. <?= number_format($value->harga, 0) ?>
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
                        <input type="hidden" name="price"
                            value="<?= $value->harga - (($value->diskon / 100)  * $value->harga) ?>">
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><button type="submit" class="btn3 size18 txt11 trans-0-4 mt-auto"
                                    href="#">Add to cart</button></div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                    href="<?= base_url('Pelanggan/cHome/detail_produk/' . $value->id_produk) ?>">Detail</a>
                            </div>
                        </div>
                    </form>
                    <?php } else {
                        ?>
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent ">
                        <div class="text-center "><a class="btn3 size18 txt11 trans-0-4"
                                style="padding: 12px 33px 13px 33px;" href="<?= base_url('pelanggan/clogin') ?>">Add to
                                cart</a></div>
                    </div>
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                href="<?= base_url('Pelanggan/cHome/detail_produk/' . $value->id_produk) ?>">Detail</a>
                        </div>
                    </div>

                    <?php } ?>
                </div>
            </div>

            <?php } ?>
        </div>
    </div>
</section>