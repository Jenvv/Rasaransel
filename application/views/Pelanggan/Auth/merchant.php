<!-- Title Page -->
<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(<?= base_url('asset/foto2.jpg') ?>);">
    <h2 class="tit6 t-center">
        Daftar Merchant
    </h2>
</section>


<!-- Reservation -->
<section class="section-reservation bg1-pattern p-t-100 p-b-113">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 p-b-30">
                <div class="t-center">
                    <span class="tit2 t-center">
                        RASA RANSEL
                    </span>

                    <h3 class="tit3 t-center m-b-35 m-t-2">
                        Daftar Merchant
                    </h3>
                    <?php if ($this->session->userdata('success')) {
                        echo '<div class="alert alert-success" role="alert">';
                        echo $this->session->userdata('success');
                        echo '</div>';
                    } ?>
                    <?php if ($this->session->userdata('error')) {
                        echo '<div class="alert alert-danger" role="alert">';
                        echo $this->session->userdata('success');
                        echo '</div>';
                    } ?>
                </div>
                <?= form_open_multipart('', "class='wrap-form-reservation size22 m-l-r-auto'"); ?>

                <div class="row">
                    <div class="col-md-12">
                        <!-- Name -->
                        <span class="txt9">
                            Nama Merchant
                        </span>
                        <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                            <input value="<?= $users->photo ?>" type="hidden" name="photo">
                            <input class="bo-rad-10 sizefull txt10 p-l-20" value="<?= $users->nama_plggn ?>" type="text" name="nama" placeholder="Masukkan Nama Toko Anda">
                            <?= form_error('nama', '<small class="form-text text-danger">', '</small>'); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <!-- Name -->
                        <span class="txt9">
                            Email
                        </span>
                        <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                            <input class="bo-rad-10 sizefull txt10 p-l-20" value="<?= $users->email ?>" type="text" name="email" placeholder="Masukkan Email Anda">
                            <?= form_error('email', '<small class="form-text text-danger">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!-- Phone -->
                        <span class="txt9">
                            No Telepon
                        </span>

                        <div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
                            <input class="bo-rad-10 sizefull txt10 p-l-20" value="<?= $users->no_hp ?>" type="number" name="no_hp" placeholder="Masukkan No Telepon Anda">
                            <?= form_error('no_hp', '<small class="form-text text-danger">', '</small>'); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <!-- Name -->
                        <span class="txt9">
                            Deskripsi
                        </span>
                        <textarea class="bo-rad-10 size35 bo2 txt10 p-l-20 p-t-15 m-b-10 m-t-3" name="deskripsi" placeholder="Optional"></textarea>
                        <?= form_error('deskripsi', '<small class="form-text text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <!-- Name -->
                        <span class="txt9">
                            Alamat
                        </span>
                        <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                            <input class="bo-rad-10 sizefull txt10 p-l-20" value="<?= $users->alamat ?>" type="text" name="alamat" placeholder="Masukkan Alamat Anda">
                            <?= form_error('alamat', '<small class="form-text text-danger">', '</small>'); ?>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-6 mt-3 txt10">
                        <!-- <small>Sudah Memiliki Akun? <a href="<?= base_url('pelanggan/clogin') ?>">Login</a></small> -->
                        <input value="<?= $users->alamat ?>" type="checkbox" name="syarat">
                        Saya Menyetujui <a href="<?= base_url('pelanggan/cprofil/syarat') ?>" style="color: #ec1d25;">Syarat & Ketentuan.</a>
                        <?= form_error('syarat', '<small class="form-text text-danger">', '</small>'); ?>

                    </div>
                </div>
                <div class="wrap-btn-booking flex-c-m m-t-6 float-right">
                    <!-- Button3 -->
                    <button type="submit" name="submit" value="submit" class="btn3 flex-c-m size13 txt11 trans-0-4">
                        Daftar
                    </button>
                </div>
                <!-- </form> -->
                <?= form_close(); ?>

            </div>
        </div>
    </div>
</section>