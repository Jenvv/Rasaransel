<div class="row">
    <div class="col-md-12">
        <div class="copyright">
            <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
        </div>
    </div>
</div>
</div>
</div>
</div>
<!-- END MAIN CONTENT-->
<!-- END PAGE CONTAINER-->
</div>

</div>

<!-- Jquery JS-->
<script src="<?= base_url('asset/admintoko/') ?>vendors/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="<?= base_url('asset/admintoko/') ?>vendors/bootstrap-4.1/popper.min.js"></script>
<script src="<?= base_url('asset/admintoko/') ?>vendors/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendors JS       -->
<script src="<?= base_url('asset/admintoko/') ?>vendors/slick/slick.min.js">
</script>
<script src="<?= base_url('asset/admintoko/') ?>vendors/wow/wow.min.js"></script>
<script src="<?= base_url('asset/admintoko/') ?>vendors/animsition/animsition.min.js"></script>
<script src="<?= base_url('asset/admintoko/') ?>vendors/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>
<script src="<?= base_url('asset/admintoko/') ?>vendors/counter-up/jquery.waypoints.min.js"></script>
<script src="<?= base_url('asset/admintoko/') ?>vendors/counter-up/jquery.counterup.min.js">
</script>
<script src="<?= base_url('asset/admintoko/') ?>vendors/circle-progress/circle-progress.min.js"></script>
<script src="<?= base_url('asset/admintoko/') ?>vendors/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="<?= base_url('asset/admintoko/') ?>vendors/chartjs/Chart.bundle.min.js"></script>
<script src="<?= base_url('asset/admintoko/') ?>vendors/select2/select2.min.js">
</script>

<script>
    <?php
    $pelanggan = $this->db->query("SELECT SUM(total_bayar) as total, nama_plggn FROM `pesanan` JOIN pelanggan ON pelanggan.id_pelanggan=pesanan.id_pelanggan GROUP BY pelanggan.id_pelanggan")->result();
    foreach ($pelanggan as $key => $data) {
        $nama_pelanggan[] = $data->nama_plggn;
        $total_belanja[] = $data->total;
    }
    ?>
    // Recent Report
    const brandProduct = 'rgba(0,181,233,0.8)'
    const brandService = 'rgba(0,173,95,0.8)'

    var elements = 10
    var data1 = [52, 60, 55, 50, 65, 80, 57, 70, 105, 115]
    var data2 = [102, 70, 80, 100, 56, 53, 80, 75, 65, 90]

    var ctx = document.getElementById("recent-rep-chart");
    if (ctx) {
        ctx.height = 250;
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', ''],
                datasets: [{
                        label: 'My First dataset',
                        backgroundColor: brandService,
                        borderColor: 'transparent',
                        pointHoverBackgroundColor: '#fff',
                        borderWidth: 0,
                        data: data1

                    },
                    {
                        label: 'My Second dataset',
                        backgroundColor: brandProduct,
                        borderColor: 'transparent',
                        pointHoverBackgroundColor: '#fff',
                        borderWidth: 0,
                        data: data2

                    }
                ]
            },
            options: {
                maintainAspectRatio: true,
                legend: {
                    display: false
                },
                responsive: true,
                scales: {
                    xAxes: [{
                        gridLines: {
                            drawOnChartArea: true,
                            color: '#f2f2f2'
                        },
                        ticks: {
                            fontFamily: "Poppins",
                            fontSize: 12
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            beginAtZero: true,
                            maxTicksLimit: 5,
                            stepSize: 50,
                            max: 150,
                            fontFamily: "Poppins",
                            fontSize: 12
                        },
                        gridLines: {
                            display: true,
                            color: '#f2f2f2'

                        }
                    }]
                },
                elements: {
                    point: {
                        radius: 0,
                        hitRadius: 10,
                        hoverRadius: 4,
                        hoverBorderWidth: 3
                    }
                }


            }
        });
    }
</script>
<!-- Main JS-->
<script src="<?= base_url('asset/admintoko/') ?>js/main.js"></script>

</body>

</html>