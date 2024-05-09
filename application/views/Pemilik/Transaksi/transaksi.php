<main class="content">
    <div class="container-fluid p-0">
        <div class="row mb-2 mb-xl-3">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>Transaksi</strong> User</h3>
            </div>

            <div class="col-auto ml-auto text-right mt-n1">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
                        <li class="breadcrumb-item"><a href="<?= base_url('pemilik/cDashboard'); ?>">Dashboard</a></li>
                        <li class="breadcrumb-item">Transaksi</li>
                        <li class="breadcrumb-item active" aria-current="page">Informasi</li>
                    </ol>
                </nav>
            </div>
        </div>
        <?php
        if ($this->session->userdata('success')) {
        ?>
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="alert-icon">
                    <i class="far fa-fw fa-bell"></i>
                </div>
                <div class="alert-message">
                    <strong>Hallo!!!</strong> <?= $this->session->userdata('success') ?>
                </div>
            </div>
        <?php
        }
        ?>

        <div class="row">
            <div class="col-12 col-xl-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Informasi Transaksi</h5>
                    </div>
                    <div class="card-body">
                        <table id="myTable" class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Username</th>
                                    <th>No Telepon</th>
                                    <th>Alamat</th>
                                    <th>Pesanan Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($user as $key => $value) {
                                ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $value->username ?></td>
                                        <td><?= $value->no_hp ?></td>
                                        <td><?= $value->alamat ?></td>
                                        <?php
                                        $count_masuk = 0;
                                        foreach ($notif['pesanan_masuk'] as $us) :
                                            if ($us->id_user == $value->id_user) :
                                                $count_masuk++;
                                            endif;
                                        endforeach;
                                        ?>
                                        <?php
                                        $count_proses = 0;
                                        foreach ($notif['diproses'] as $us) :
                                            if ($us->id_user == $value->id_user) :
                                                $count_proses++;
                                            endif;
                                        endforeach;
                                        ?>
                                        <?php
                                        $count_konfirmasi = 0;
                                        foreach ($notif['konfirmasi'] as $us) :
                                            if ($us->id_user == $value->id_user) :
                                                $count_konfirmasi++;
                                            endif;
                                        endforeach;
                                        ?>
                                        <?php
                                        $count = 0;
                                        foreach ($notif['selesai'] as $us) :
                                            if ($us->id_user == $value->id_user) :
                                                $count++;
                                            endif;
                                        endforeach;
                                        ?>
                                        <td>
                                            <button class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Pesanan Masuk: <?= $count_masuk ?>">
                                                <?= $count_masuk ?>
                                            </button>
                                            <button class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Konfirmasi: <?= $count_konfirmasi ?>">
                                                <?= $count_konfirmasi ?>
                                            </button>
                                            <button class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Proses: <?= $count_proses ?>">
                                                <?= $count_proses ?>
                                            </button>
                                            <button class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Selesai: <?= $count ?>">
                                                <?= $count ?>
                                            </button>
                                        </td>


                                        <td class="table-action">
                                            <!-- <button class="btn btn-warning" data-toggle="modal" data-target="#edit<?= $value->id_user ?>"><i class="align-middle" data-feather="edit-2"></i></button>
                                            <button class="btn btn-danger" data-toggle="modal" data-target="#hapus<?= $value->id_user ?>"><i class="align-middle" data-feather="trash"></i></button> -->
                                            <a href="<?= base_url('Pemilik/cTransaksi/transaksi/' . $value->id_user); ?>" style="color: white;" class="btn btn-secondary"><i class="align-middle" data-feather="eye"></i></a>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

        </div>
    </div>
</main>