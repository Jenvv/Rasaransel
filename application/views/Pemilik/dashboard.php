<main class="content">
	<div class="container-fluid p-0">

		<div class="row mb-2 mb-xl-3">
			<div class="col-auto d-none d-sm-block">
				<h3><strong>Analisis</strong> Dashboard</h3>
			</div>

			<div class="col-auto ml-auto text-right mt-n1">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
						<li class="breadcrumb-item"><a href="<?= base_url('pemilik/cDashboard'); ?>">Dashboards</a></li>
						<li class="breadcrumb-item active" aria-current="page">Analisis</li>
					</ol>
				</nav>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<?php
				if ($this->session->userdata('success')) {
				?>
					<div class="alert alert-success alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<div class="alert-icon">
							<i class="align-middle" data-feather="bell"></i>
						</div>
						<div class="alert-message">
							<?= $this->session->userdata('success') ?>
						</div>
					</div>
				<?php
				}
				?>
			</div>

		</div>

		<div class="row">
			<div class="col-12 col-lg-6">
				<div class="card">
					<div class="card-header">
						<h5 class="card-title">Grafik Analisis Pendaftar</h5>
						<!-- <h6 class="card-subtitle text-muted">A bar chart provides a way of showing data values represented as vertical bars.</h6> -->
					</div>
					<div class="card-body">
						<div class="overview-item overview-item--c3">
							<div class="overview__inner">
								<div class="overview-box clearfix">
									<div class="icon">
										<i class="zmdi zmdi-account-o"></i>
									</div>
									<div class="text">
										<h2><?= count($pelanggan) ?></h2>
										<span>Pelanggan Daftar</span>
									</div>
								</div>
								<div class="overview-chart">
									<canvas id="widgetChart3"></canvas>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
			<div class="col-12 col-lg-6">
				<div class="card">
					<div class="card-header">
						<h5 class="card-title">Grafik Analisis Merchant Aktif</h5>
						<!-- <h6 class="card-subtitle text-muted">A bar chart provides a way of showing data values represented as vertical bars.</h6> -->
					</div>
					<div class="card-body">
						<div class="overview-item overview-item--c1">
							<div class="overview__inner">
								<div class="overview-box clearfix">
									<div class="icon">
										<i class="zmdi zmdi-account-o"></i>
									</div>
									<div class="text">
										<h2><?= count($user_aktif) ?></h2>
										<span>Merchant Aktif</span>
									</div>
								</div>
								<div class="overview-chart">
									<canvas id="widgetChart1"></canvas>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-6">
				<div class="card flex-fill w-100">
					<div class="card-header">
						<h5 class="card-title">Grafik Analisis Pendaftar Merchant</h5>
						<!-- <h6 class="card-subtitle text-muted">A line chart is a way of plotting data points on a line.</h6> -->
					</div>
					<div class="card-body">
						<div class="overview-item overview-item--c2">
							<div class="overview__inner">
								<div class="overview-box clearfix">
									<div class="icon">
										<i class="zmdi zmdi-account-o"></i>
									</div>
									<div class="text">
										<h2><?= count($user) ?></h2>
										<span>Pendaftar merchant</span>
									</div>
								</div>
								<div class="overview-chart">
									<canvas id="widgetChart2"></canvas>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>



		</div>


	</div>
</main>