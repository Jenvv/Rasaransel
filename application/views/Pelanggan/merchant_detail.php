<style>
    .card {
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .card-body {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .card-body .row>div {
        padding: 10px;
    }

    .sec-text {
        padding: 1.2rem;
    }

    .icon-text {
        display: flex;
        align-items: center;
        margin-bottom: 30px;
    }

    .icon-text svg {
        width: 17px;
        /* Sesuaikan ukuran ikon sesuai kebutuhan */
        height: 17px;
        /* Sesuaikan ukuran ikon sesuai kebutuhan */
        margin-right: 8px;
        /* Spasi antara ikon dan teks */
    }
</style>

<!-- Title Page -->
<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(<?= base_url('asset/foto2.jpg') ?>);">
    <h2 class="tit6 t-center">
        Merchant
    </h2>
</section>

<section class="section-reservation bg1-pattern  p-b-113">
    <div class="container">
        <div class="container p-t-20">
            <div class="card mb-3">
                <div class="row no-gutters ">
                    <div class="col-md-3 text-center p-3">
                        <img src="<?= base_url('asset/pelanggan/' . $users->photo) ?>" class="img-fluid rounded-circle" width="100" height="100" alt="Profile Picture">
                        <h5 class="mt-2"><?= $users->nama ?></h5>
                        <small class="text-muted">Aktif 4 menit lalu</small>
                        <div class="mt-2">
                            <a href="<?= base_url('pelanggan/cchatting/pesan/' . $users->id_user) ?>" class="btn btn-outline-secondary btn-sm"><i class="fa fa-comments" aria-hidden="true"></i> Chat</a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="sec-text">
                            <div class="row d-flex mt-3">
                                <div class="col-md-4">
                                    <p class="icon-text">
                                        <svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" stroke-width="0">
                                            <path fill="#666666" d="m13 1.9c-.2-.5-.8-1-1.4-1h-8.4c-.6.1-1.2.5-1.4 1l-1.4 4.3c0 .8.3 1.6.9 2.1v4.8c0 .6.5 1 1.1 1h10.2c.6 0 1.1-.5 1.1-1v-4.6c.6-.4.9-1.2.9-2.3zm-11.4 3.4 1-3c .1-.2.4-.4.6-.4h8.3c.3 0 .5.2.6.4l1 3zm .6 3.5h.4c.7 0 1.4-.3 1.8-.8.4.5.9.8 1.5.8.7 0 1.3-.5 1.5-.8.2.3.8.8 1.5.8.6 0 1.1-.3 1.5-.8.4.5 1.1.8 1.7.8h.4v3.9c0 .1 0 .2-.1.3s-.2.1-.3.1h-9.5c-.1 0-.2 0-.3-.1s-.1-.2-.1-.3zm8.8-1.7h-1v .1s0 .3-.2.6c-.2.1-.5.2-.9.2-.3 0-.6-.1-.8-.3-.2-.3-.2-.6-.2-.6v-.1h-1v .1s0 .3-.2.5c-.2.3-.5.4-.8.4-1 0-1-.8-1-.8h-1c0 .8-.7.8-1.3.8s-1.1-1-1.2-1.7h12.1c0 .2-.1.9-.5 1.4-.2.2-.5.3-.8.3-1.2 0-1.2-.8-1.2-.9z"></path>
                                        </svg>
                                        <strong>Produk : &nbsp;</strong>
                                        <a href="#" style="color: #D61C22;">
                                            <?= count($produk) ?>
                                        </a>
                                    </p>
                                    <p class="icon-text">
                                        <svg viewBox="0 0 15 15" fill="#666666" class="shopee-svg-icon T8PBeP icon-all-cate">
                                            <g fill-rule="evenodd" stroke="none">
                                                <g transform="translate(-373 -208)">
                                                    <g transform="translate(155 191)">
                                                        <g transform="translate(218 17)">
                                                            <path d="m0 2h2v-2h-2zm4 0h7.1519633v-2h-7.1519633z"></path>
                                                            <path d="m0 6h2v-2h-2zm4 0h7.1519633v-2h-7.1519633z"></path>
                                                            <path d="m0 10h2v-2h-2zm4 0h7.1519633v-2h-7.1519633z"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                        <strong>Kategori : </strong> 100% (Produk)
                                    </p>
                                    <p class="icon-text">
                                        <svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" style="stroke:#666666;">
                                            <polygon fill="none" points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                        </svg>
                                        <strong>Penilaian : </strong>
                                        <a href="#" style="color: #D61C22;">
                                            4.9 (225,9RB Penilaian)
                                        </a>
                                    </p>
                                </div>
                                <div class="col-md-4">
                                    <p class="icon-text">
                                        <svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" style="stroke:#666666;">
                                            <g>
                                                <circle cx="6.8" cy="4.2" fill="none" r="3.8" stroke-miterlimit="10"></circle>
                                                <polyline fill="none" points="9.2 12.5 11.2 14.5 14.2 11" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polyline>
                                                <path d="m .8 14c0-3.3 2.7-6 6-6 2.1 0 3.9 1 5 2.6" fill="none" stroke-linecap="round" stroke-miterlimit="10"></path>
                                            </g>
                                        </svg>
                                        <strong>Bergabung : &nbsp;</strong> <?= time_since($users->created_at) ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12 ">
                <div class="card">
                    <div class="card-header ">
                        <ul class="nav nav-pills mb-3 justify-content-around" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
                            </li>
                            <?php foreach ($kategori as $key => $value) { ?>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-<?= str_replace(' ', '_', $value->kategori) ?>-tab" data-toggle="pill" href="#pills-<?= str_replace(' ', '_', $value->kategori) ?>" role="tab" aria-controls="pills-<?= str_replace(' ', '_', $value->kategori) ?>" aria-selected="false"><?= ucfirst(strtolower($value->kategori)) ?></a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="card-body h-50">
                        <hr />
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <div class="media">
                                    <div class="media-body">
                                        <div class="row mt-1">
                                            <?php foreach ($produk as $key => $value) { ?>
                                                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                                                    <div class="card h-100">
                                                        <img src="<?= base_url('asset/foto-produk/' . $value->foto) ?>" class="card-img-top" style="height: 150px; object-fit: cover; object-position: center center;" alt="Produk">
                                                        <div class="card-body">
                                                            <h5 class="card-title"><?= $value->nama_produk ?></h5>
                                                            <p class="card-text">Rp.<?= number_format($value->harga, 0) ?></p>
                                                        </div>
                                                        <div class="card-footer">
                                                            <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-<?= $value->id_produk ?>">
                                                                Detail
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Modal -->
                                                <div class="modal fade" id="modal-<?= $value->id_produk ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-<?= $value->id_produk ?>" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel-<?= $value->id_produk ?>">Detail Produk</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="card">
                                                                    <img class="card-img-top" src="<?= base_url('asset/foto-produk/' . $value->foto) ?>" style="width: 100%;" alt="Produk">
                                                                    <div class="card-header">
                                                                        <h4 class="card-title mb-0"><strong><?= $value->nama_produk ?></strong></h4>
                                                                        <p class="card-text">Rp.<?= number_format($value->harga, 0) ?></p>
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <p class="card-text"><?= $value->deskripsi ?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <a href="<?= base_url('admin/cproduk/update/' . $value->id_produk) ?>" class="btn btn-warning">Edit Produk</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php foreach ($kategori as $kategori_key => $kategori_value) { ?>
                                <div class="tab-pane fade" id="pills-<?= str_replace(' ', '_', $kategori_value->kategori) ?>" role="tabpanel" aria-labelledby="pills-<?= str_replace(' ', '_', $kategori_value->kategori) ?>-tab">
                                    <div class="media">
                                        <div class="media-body">
                                            <div class="row mt-1">
                                                <?php foreach ($produk as $key => $produk_value) { ?>
                                                    <?php if ($produk_value->id_kategori == $kategori_value->id_kategori) { ?>
                                                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">

                                                            <div class="card h-100">
                                                                <img src="<?= base_url('asset/foto-produk/' . $produk_value->foto) ?>" class="card-img-top" style=" object-fit: cover; object-position: center center;" alt="Produk">

                                                                <div class="card-body">
                                                                    <h5 class="card-title"><?= $produk_value->nama_produk ?></h5>
                                                                    <p class="card-text">Rp.<?= number_format($produk_value->harga, 0) ?></p>
                                                                </div>
                                                                <div class="card-footer">
                                                                    <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-<?= $produk_value->id_produk ?>">
                                                                        Detail
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    <?php } ?>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <hr />
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>