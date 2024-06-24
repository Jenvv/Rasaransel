<link href="<?= base_url('asset/admintoko/') ?>css/styles.css" rel="stylesheet" />
<!-- Title Page -->
<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(<?= base_url('asset/foto2.jpg') ?>);">
    <h2 class="tit6 t-center">
        Menu
    </h2>
</section>


<!-- Kategori -->

<div class="container px-4 px-lg-5 mt-5">
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
            <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="fr" placeholder="Cari Menu Makanan" value="<?= isset($_GET['fr']) ? htmlspecialchars($_GET['fr']) : '' ?>">
            <i class="fa fa-search ab-r-m m-r-18" aria-hidden="true"></i>
        </div>

        <!-- Button3 -->
        <button type="submit" class="btn3 flex-c-m size18 txt11 trans-0-4 m-10">
            Cari
        </button>
    </form>
    <!-- Section Menu Search -->
    <div id="menuSearchSection" class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
        <?php
        foreach ($menu as $key => $value) {
        ?>
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Sale badge-->
                    <?php
                    if ($value->diskon != NULL) :
                    ?>
                        <div class="badge bg-success text-white position-absolute" style="top: 0.5rem; right: 0.5rem"><?= $value->nama_promo ?>
                            <?= $value->diskon ?>%</div>
                    <?php endif; ?>
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
                                    <span class="text-muted text-decoration-line-through">Rp. <?= number_format($value->harga - (($value->diskon / 100) * $value->harga), 0)  ?></span>
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
                            <input type="hidden" name="id" value="<?= $value->menu_id_produk ?>">
                            <input type="hidden" name="name" value="<?= $value->nama_produk ?>">
                            <input type="hidden" name="qty" value="1">
                            <input type="hidden" name="picture" value="<?= $value->foto ?>">
                            <input type="hidden" name="user" value="<?= $value->id_user ?>">
                            <input type="hidden" name="price" value="<?= $value->harga - (($value->diskon / 100)  * $value->harga) ?>">
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><button type="submit" class="btn3 size18 txt11 trans-0-4 mt-auto" href="#">Add to cart</button></div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="<?= base_url('Pelanggan/cHome/detail_produk/' . $value->menu_id_produk) ?>">Detail</a></div>
                            </div>
                        </form>
                    <?php } else {
                    ?>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent ">
                            <div class="text-center "><a class="btn3 size18 txt11 trans-0-4" style="padding: 12px 33px 13px 33px;" href="<?= base_url('pelanggan/clogin') ?>">Add to cart</a></div>
                        </div>
                        <?= $value->id_pesanan ?>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="<?= base_url('Pelanggan/cHome/detail_produk/' . $value->menu_id_produk) ?>">Detail</a></div>
                        </div>

                    <?php } ?>
                </div>
            </div>

        <?php } ?>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.has('fr')) {
            const element = document.getElementById('menuSearchSection');
            const offset = 100; // Adjust this value as needed
            const elementPosition = element.getBoundingClientRect().top;
            const offsetPosition = elementPosition + window.pageYOffset - offset;

            window.scrollTo({
                top: offsetPosition,
                behavior: 'smooth'
            });
        }
    });
</script>