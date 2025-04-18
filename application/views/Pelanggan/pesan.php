<!-- Title Page -->
<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(<?= base_url('asset/foto2.jpg') ?>);">
    <h2 class="tit6 t-center">
        Aktivitas
    </h2>
</section>

<!-- Terms and Conditions -->
<section class="section-reservation bg1-pattern p-t-40 p-b-113">
    <div class="container">
        <div class="row">
            <main class="content w-100">
                <div class="container-fluid p-0">
                    <div class="row">
                        <div class="col-12">
                            <div class="card w-100">
                                <div class="card-body h-100">
                                    <?php foreach ($merchant as $key => $value_merchant) {
                                    }
                                    ?>
                                    <?php if ($value_merchant->username == $users->username) : ?>
                                        <div class="media">
                                            <img src="<?= base_url('asset/fotoprofil/' . $users->photo) ?>" width="36" height="36" class="rounded-circle mr-2" alt="Vanessa Tucker">
                                            <div class="media-body">
                                                <small class="float-right text-navy"><?= time_since($aktivitas->created_at) ?></small>
                                                <?php if ($aktivitas->is_active == 0) { ?>
                                                    <strong><?= $users->nama_plggn ?></strong> Daftar Merchant <br> <strong><a href="#" class="badge badge-warning">Dalam Proses</a></strong><br />
                                                <?php } else { ?>
                                                    <strong><?= $users->nama_plggn ?></strong> Daftar Merchant <br> <strong><button class="badge badge-success">Telah Verifikasi</button></strong><br />
                                                    <hr>
                                                    <small class="text-navy"><a href="<?= base_url('Admin/cDashboard/') ?>">Login Sebagai Merchant</a></small>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    <?php else : ?>
                                        <div class="media">
                                            <div class="media-body">
                                                Tidak Ada Aktivitas<br />
                                                <hr>
                                            </div>
                                        </div>
                                </div>
                            <?php endif; ?>
                            <!-- <a href="#" class="btn btn-primary btn-block">Load more</a> -->
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </main>
    </div>
    </div>
</section>