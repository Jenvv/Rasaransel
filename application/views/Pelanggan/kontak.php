<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(<?= base_url('asset/foto2.jpg') ?>);">
    <h2 class="tit6 t-center">
        Pelayanan Pelanggan
    </h2>
</section>



<!-- Contact form -->
<section class="section-contact bg1-pattern p-t-90 p-b-113">
    <div class="container">
        <h3 class="tit7 t-center p-b-62 ">
            Kontak Kami
        </h3>
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
        <!-- <form class="wrap-form-reservation size22 m-l-r-auto" action="<?= base_url('pelanggan/chome/kirim') ?>"> -->
        <?php echo form_open_multipart('', 'class="wrap-form-reservation size22 m-l-r-auto"') ?>
        <div class="row">
            <div class="col-md-4">
                <!-- Name -->
                <span class="txt9">
                    Nama Lengkap
                </span>

                <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                    <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="nama" placeholder="Nama Lengkap">
                    <?= form_error('nama', '<small class="form-text text-danger">', '</small>'); ?>

                </div>
            </div>

            <div class="col-md-4">
                <!-- Email -->
                <span class="txt9">
                    Email
                </span>

                <div class="wrap-inputemail size12 bo2 bo-rad-10 m-t-3 m-b-23">
                    <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="email" placeholder="Email">
                    <?= form_error('email', '<small class="form-text text-danger">', '</small>'); ?>

                </div>
            </div>

            <div class="col-md-4">
                <!-- Phone -->
                <span class="txt9">
                    No Telepon
                </span>

                <div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
                    <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="no_hp" placeholder="No Telepon">
                    <?= form_error('no_hp', '<small class="form-text text-danger">', '</small>'); ?>

                </div>
            </div>

            <div class="col-12">
                <!-- Message -->
                <span class="txt9">
                    Pesan
                </span>
                <textarea class="bo-rad-10 size35 bo2 txt10 p-l-20 p-t-15 m-b-10 m-t-3" name="pesan" placeholder="Pesan"></textarea>
                <?= form_error('pesan', '<small class="form-text text-danger">', '</small>'); ?>

            </div>
        </div>

        <div class="wrap-btn-booking flex-c-m m-t-13">
            <!-- Button3 -->
            <button type="submit" class="btn3 flex-c-m size36 txt11 trans-0-4">
                Kirim
            </button>
        </div>
        <!-- </form> -->
        <?php form_close() ?>

        <div class="row p-t-75">
            <div class="col-sm-8 col-md-4 col-lg-4 m-l-r-auto p-t-30">
                <div class="dis-flex m-l-23">
                    <div class="p-r-40 p-t-6">
                        <img src="<?= base_url('asset/pato-master/images/icons/map-icon.png') ?>" alt="IMG-ICON">
                    </div>

                    <div class="flex-col-l">
                        <span class="txt5
                            p-b-10">
                            Lokasi
                        </span>

                        <span class="txt23 size38">
                            <a href="https://maps.app.goo.gl/GWw4vQpEJB95Ku2y7" class="txt19">Jalan Rajawali No.
                                10 Kota Pontianak</a>
                        </span>
                    </div>
                </div>
            </div>

            <div class="col-sm-8 col-md-3 col-lg-4 m-l-r-auto p-t-30">
                <div class="dis-flex m-l-23">
                    <div class="p-r-40 p-t-6">
                        <img src="<?= base_url('asset/pato-master/') ?>images/icons/phone-icon.png" alt="IMG-ICON">
                    </div>


                    <div class="flex-col-l">
                        <span class="txt5 p-b-10">
                            Kontak Kami
                        </span>

                        <span class="txt23 size38">
                            <a href="https://wa.me/085849686498" class="txt19">(+62)858-4968-6498</a>
                        </span>
                    </div>
                </div>
            </div>

            <div class="col-sm-8 col-md-5 col-lg-4 m-l-r-auto p-t-30">
                <div class="dis-flex m-l-23">
                    <div class="p-r-40 p-t-6">
                        <!-- <img src="<?= base_url('asset/pato-master/') ?>images/icons/clock-icon.png" alt="IMG-ICON"> -->
                    </div>


                    <div class="flex-col-l">
                        <span class="txt5 p-b-10">
                            Rasa Ransel
                        </span>

                        <span class="txt23 size38">
                            <!-- 09:30 AM – 11:00 PM <br />Every Day -->
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>