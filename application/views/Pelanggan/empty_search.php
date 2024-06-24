<link href="<?= base_url('asset/admintoko/') ?>css/styles.css" rel="stylesheet" />
<style>
    .center-content {
        /* display: flex; */
        margin-top: 40px;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
        text-align: center;
    }

    .center-content img {
        max-width: 100%;
        height: auto;
        width: 25%;
        /* Adjust the width as needed */
        margin-bottom: 0;
        /* Reduce the space between image and text */
    }

    .center-content h3 {
        margin-top: 5px;
        /* Reduce the space between image and text */
    }
</style>
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
    <form class="flex-c-m flex-w flex-col-c-m-lg p-l-5 p-r-5" action="<?= base_url('pelanggan/chome/search') ?>">
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

    <div id="menuSearchSection" class="container">
        <div class="row justify-content-center">
            <div class="col-12 center-content">
                <img src="<?= base_url('asset/icon/empty_result.png') ?>" alt="No Result">
                <h5 class="mt-3" style="color:#707070;">Kami tidak dapat menemukan "<strong style="color: black;"><?= $cari ?></strong>" di Rasa Ransel</h5>
                <div class="text-center mt-4"><a class="btn3 size18 txt11 trans-0-4" style="padding: 12px 33px 13px 33px;" href="<?= base_url('pelanggan/chome') ?>">Lihat Semua Menu</a></div>
            </div>
        </div>
    </div>

</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.has('fr')) {
            const element = document.getElementById('menuSearchSection');
            const offset = 180; // Adjust this value as needed
            const elementPosition = element.getBoundingClientRect().top;
            const offsetPosition = elementPosition + window.pageYOffset - offset;

            window.scrollTo({
                top: offsetPosition,
                behavior: 'smooth'
            });
        }
    });
</script>