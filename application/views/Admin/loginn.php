<style>
    .wrap-inputphone {
        position: relative;
    }

    .wrap-inputphone .fa-eye,
    .wrap-inputphone .fa-eye-slash {
        position: absolute;
        right: 10px;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;

    }
</style>
<!-- Title Page -->
<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(<?= base_url('asset/foto2.jpg') ?>);">
    <h2 class="tit6 t-center">
        Merchant
    </h2>
</section>
<!-- Reservation -->
<section class="section-reservation bg1-pattern p-t-100 p-b-113">
    <div id="loginSection" class="container">
        <div class="row">
            <div class="col-lg-12 p-b-30">
                <div class="t-center">
                    <span class="tit2 t-center">
                        RASA RANSEL
                    </span>

                    <h3 class="tit3 t-center m-b-35 m-t-2">
                        Login Merchant
                    </h3>
                    <br>
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
                </div>

                <form action="<?= base_url('admin/clogin/login') ?>" method="POST" class="wrap-form-reservation size22 m-l-r-auto">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Name -->
                            <span class="txt9">
                                Username
                            </span>
                            <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="username" placeholder="Masukkan Username Anda" value="">
                                <?= form_error('username', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Phone -->
                            <span class="txt9">
                                Password
                            </span>

                            <div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23 position-relative">
                                <input class="bo-rad-10 sizefull txt10 p-l-20" type="password" id="password" name="password" placeholder="Masukkan Password Anda" value="123123">
                                <?= form_error('password', '<small class="form-text text-danger">', '</small>'); ?>
                                <i onclick="togglePasswordVisibility()" class="fa fa-eye position-absolute" aria-hidden="true" style="right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;color:#424242;"></i>
                            </div>
                        </div>
                    </div>

                    <div class="wrap-btn-booking flex-c-m m-t-6">
                        <!-- Button3 -->
                        <button type="submit" class="btn3 flex-c-m size13 txt11 trans-0-4">
                            Login
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<script>
    function togglePasswordVisibility() {
        const passwordField = document.getElementById('password');
        const passwordIcon = passwordField.nextElementSibling;
        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            passwordIcon.classList.remove('fa-eye');
            passwordIcon.classList.add('fa-eye-slash');
        } else {
            passwordField.type = 'password';
            passwordIcon.classList.remove('fa-eye-slash');
            passwordIcon.classList.add('fa-eye');
        }
    }

    document.addEventListener("DOMContentLoaded", function() {
        if (window.location.href.includes('admin/clogin')) {
            const loginSection = document.getElementById('loginSection');
            if (loginSection) {
                const offset = 200; // Sesuaikan nilai ini sesuai kebutuhan
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