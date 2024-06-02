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
                                    <div class="media">
                                        <img src="<?= base_url('asset/pelanggan/' . $users->photo) ?>" width="36" height="36" class="rounded-circle mr-2" alt="Vanessa Tucker">
                                        <div class="media-body">
                                            <small class="float-right text-navy"><?= time_since($aktivitas->created_at) ?></small>
                                            <strong><?= $users->nama_plggn ?></strong> Daftar Merchant <br> <strong><a href="#" class="badge badge-warning">Dalam Proses</a></strong><br />
                                            <!-- <small class="text-muted">Today 7:51 pm</small><br /> -->

                                        </div>
                                    </div>
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