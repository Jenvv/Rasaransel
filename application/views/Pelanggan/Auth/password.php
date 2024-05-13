<!-- Title Page -->
<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(<?= base_url('asset/pato-master/') ?>images/bg-title-page-02.jpg);">
    <h2 class="tit6 t-center">
        Password
    </h2>
</section>


<!-- Reservation -->
<div class="bread-crumb bo5-b p-t-17 p-b-17 ">
    <div class="container ">
        <a href="<?= base_url('pelanggan/cprofil') ?>" class="txt27">
            Profil
        </a>
        <span class="txt29 m-l-10 m-r-10">/</span>
        <span class="txt29">
            Password
        </span>
    </div>
</div>
<section class="section-reservation bg1-pattern p-t-40 p-b-113">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 p-b-30">
                <?php if ($this->session->userdata('success')) {
                    echo '<div class="alert alert-success" role="alert">';
                    echo $this->session->userdata('success');
                    echo '</div>';
                } ?>
                <?php if ($this->session->userdata('error')) {
                    echo '<div class="alert alert-danger" role="alert">';
                    echo $this->session->userdata('error');
                    echo '</div>';
                } ?>
                <?= form_open_multipart(); ?>

                <div class="row">
                    <div class="col-md-12">
                        <!-- Phone -->
                        <span class="txt9">
                            Password Lama
                        </span>
                        <div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
                            <input class="bo-rad-10 sizefull txt10 p-l-20" type="password" name="pwLama" placeholder="Masukkan Password Lama">
                            <?= form_error('pwLama', '<small class="form-text text-danger">', '</small>'); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <!-- Phone -->
                        <span class="txt9">
                            Password Baru
                        </span>
                        <div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
                            <input class="bo-rad-10 sizefull txt10 p-l-20" type="password" name="pwBaru" placeholder="Masukkan Password Baru">
                            <?= form_error('pwBaru', '<small class="form-text text-danger">', '</small>'); ?>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12">
                        <!-- Phone -->
                        <span class="txt9">
                            Ulangi Password Baru
                        </span>
                        <div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
                            <input class="bo-rad-10 sizefull txt10 p-l-20" type="password" name="pwBaru2" placeholder="Ulangi Password Baru">
                            <?= form_error('pwBaru2', '<small class="form-text text-danger">', '</small>'); ?>
                        </div>
                    </div>
                </div>
                <div class="wrap-btn-booking flex-c-m m-t-6 float-right">
                    <!-- Button3 -->
                    <button type="submit" name="submit" value="submit" class="btn3 flex-c-m size13 txt11 trans-0-4">
                        Update
                    </button>
                </div>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</section>