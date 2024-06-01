<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Web UI Kit &amp; Dashboard Template based on Bootstrap">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, web ui kit, dashboard template, admin template">

	<link rel="shortcut icon" href="<?= base_url('asset/adminkit/examples/') ?>img/icons/icon-48x48.png" />

	<title>RASA RANSEL</title>


	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link href="<?= base_url('asset/adminkit/examples/') ?>css/app.css" rel="stylesheet">
	<link href="<?= base_url('asset/admintoko/vendors/') ?>mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?= base_url('asset/trix-main/dist/') ?>trix.css">
	<script type="text/javascript" src="<?= base_url('asset/trix-main/dist/') ?>trix.js"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
	<link href="<?= base_url('asset/admintoko/') ?>vendors/animsition/animsition.min.css" rel="stylesheet" media="all">

	<link rel="stylesheet" href="/resources/demos/style.css">
	<link href="<?= base_url('asset/admintoko/') ?>vendors/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">

	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	<style>
		* {
			font-family: poppins;
		}

		.checked {
			color: orange;
		}
	</style>
	<style>
		.star {
			margin: 0;
			padding: 0;
		}

		.select {
			cursor: pointer;
			list-style-type: none;
			display: inline-block;
			color: #F0F0F0;
			text-shadow: 0 0 1px #666666;
			font-size: 20px;
		}

		.highlight,
		.selected {
			color: #F4B30A;
		}

		.chat-online {
			color: #34ce57
		}

		.chat-offline {
			color: #e4606d
		}

		.chat-messages {
			display: flex;
			flex-direction: column;
			max-height: 800px;
			overflow-y: scroll
		}

		.chat-message-left,
		.chat-message-right {
			display: flex;
			flex-shrink: 0
		}

		.chat-message-left {
			margin-right: auto
		}

		.chat-message-right {
			flex-direction: row-reverse;
			margin-left: auto
		}

		.py-3 {
			padding-top: 1rem !important;
			padding-bottom: 1rem !important;
		}

		.px-4 {
			padding-right: 1.5rem !important;
			padding-left: 1.5rem !important;
		}

		.flex-grow-0 {
			flex-grow: 0 !important;
		}

		.border-top {
			border-top: 1px solid #dee2e6 !important;
		}

		/* css dashboard */
		.overview-chart {
			height: 115px;
			position: relative;
		}

		.overview-chart canvas {
			width: 100%;
		}

		.overview-box .icon {
			display: inline-block;
			vertical-align: top;
			margin-right: 15px;
		}

		.overview-box .icon i {
			font-size: 60px;
			color: #fff;
		}

		@media (min-width: 992px) and (max-width: 1199px) {
			.overview-box .icon {
				margin-right: 3px;
			}

			.overview-box .icon i {
				font-size: 30px;
			}
		}

		@media (max-width: 991px) {
			.overview-box .icon {
				font-size: 46px;
			}
		}

		.overview-box .text {
			font-weight: 300;
			display: inline-block;
		}

		.overview-box .text h2 {
			font-weight: 300;
			color: #fff;
			font-size: 36px;
			line-height: 1;
			margin-bottom: 5px;
		}

		.overview-box .text span {
			font-size: 18px;
			color: rgba(255, 255, 255, 0.6);
		}

		@media (min-width: 992px) and (max-width: 1199px) {
			.overview-box .text {
				display: inline-block;
			}

			.overview-box .text h2 {
				font-size: 20px;
				margin-bottom: 0;
			}

			.overview-box .text span {
				font-size: 14px;
			}
		}

		@media (max-width: 991px) {
			.overview-box .text h2 {
				font-size: 26px;
			}

			.overview-box .text span {
				font-size: 15px;
			}
		}

		.overview-item {
			-webkit-border-radius: 10px;
			-moz-border-radius: 10px;
			border-radius: 10px;
			padding: 30px;
			padding-bottom: 0;
			-webkit-box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.1);
			-moz-box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.1);
			box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.1);
			margin-bottom: 40px;
		}

		@media (min-width: 992px) and (max-width: 1519px) {
			.overview-item {
				padding-left: 15px;
				padding-right: 15px;
			}
		}

		.overview-item--c1 {
			background-image: -moz-linear-gradient(90deg, #3f5efb 0%, #fc466b 100%);
			background-image: -webkit-linear-gradient(90deg, #3f5efb 0%, #fc466b 100%);
			background-image: -ms-linear-gradient(90deg, #3f5efb 0%, #fc466b 100%);
		}

		.overview-item--c2 {
			background-image: -moz-linear-gradient(90deg, #11998e 0%, #38ef7d 100%);
			background-image: -webkit-linear-gradient(90deg, #11998e 0%, #38ef7d 100%);
			background-image: -ms-linear-gradient(90deg, #11998e 0%, #38ef7d 100%);
		}

		.overview-item--c3 {
			background-image: -moz-linear-gradient(90deg, #ee0979 0%, #ff6a00 100%);
			background-image: -webkit-linear-gradient(90deg, #ee0979 0%, #ff6a00 100%);
			background-image: -ms-linear-gradient(90deg, #ee0979 0%, #ff6a00 100%);
		}

		.overview-item--c4 {
			background-image: -moz-linear-gradient(90deg, #45b649 0%, #dce35b 100%);
			background-image: -webkit-linear-gradient(90deg, #45b649 0%, #dce35b 100%);
			background-image: -ms-linear-gradient(90deg, #45b649 0%, #dce35b 100%);
		}


		/* end */
	</style>

</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar" style="background-color: #A92828;">
			<div class="sidebar-content js-simplebar" style="background-color: #A92828;">
				<a class="sidebar-brand" href="<?= base_url('Admin/cDashboard') ?>">
					<span class="align-middle">MERCHANT</span>
				</a>

				<ul class="sidebar-nav">
					<li class="sidebar-item <?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cDashboard') {
												echo 'active';
											}  ?>">
						<a class="sidebar-link" href="<?= base_url('Admin/cDashboard') ?>" style="background-color: #A92828; color:white;">
							<i class="align-middle" style="color:white;" data-feather="compass"></i> <span class="align-middle">Dashboard</span>
						</a>
					</li>


					<!-- <li class="sidebar-item <?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cUser') {
														echo 'active';
													}  ?>">
						<a class="sidebar-link" href="<?= base_url('Admin/cUser') ?>">
							<i class="align-middle" data-feather="user"></i> <span class="align-middle">User</span>
						</a>
					</li> -->
					<li class="sidebar-item <?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cPelanggan') {
												echo 'active';
											}  ?>">
						<a class="sidebar-link" href="<?= base_url('Admin/cPelanggan') ?>" style="background-color: #A92828;color:white;">
							<i class="align-middle" style="color:white;" data-feather="users"></i> <span class="align-middle">Pelanggan</span>
						</a>
					</li>
					<li class="sidebar-item <?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cLaporan_transaksi') {
												echo 'active';
											}  ?>">
						<a class="sidebar-link" href="<?= base_url('Admin/cLaporan_transaksi') ?>" style="background-color: #A92828;color:white;">
							<i class="align-middle" style="color:white;" data-feather="activity"></i> <span class="align-middle">Laporan Transaksi</span>
						</a>
					</li>

					<li class="sidebar-item <?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cProduk') {
												echo 'active';
											}  ?>">
						<a class="sidebar-link" href="<?= base_url('Admin/cProduk') ?>" style="background-color: #A92828;color:white;">
							<i class="align-middle" style="color:white;" data-feather="upload"></i> <span class="align-middle">Produk</span>
						</a>
					</li>
					<li class="sidebar-item <?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cDiskon') {
												echo 'active';
											}  ?>">
						<a class="sidebar-link" href="<?= base_url('Admin/cDiskon') ?>" style="background-color: #A92828;color:white;">
							<i class="align-middle" style="color:white;" data-feather="percent"></i> <span class="align-middle">Promo</span>
						</a>
					</li>
					<li class="sidebar-item <?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cTransaksi') {
												echo 'active';
											}  ?>">
						<a class="sidebar-link" href="<?= base_url('Admin/cTransaksi') ?>" style="background-color: #A92828;color:white;">
							<i class="align-middle" style="color:white;" data-feather="truck"></i> <span class="align-middle">Transaksi <span class="badge badge-warning"></span></span>
						</a>
					</li>
					<li class="sidebar-item <?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cChatting') {
												echo 'active';
											}  ?>">
						<a class="sidebar-link" href="<?= base_url('Admin/cChatting') ?>" style="background-color: #A92828;color:white;">
							<i class="align-middle" style="color:white;" data-feather="phone"></i> <span class="align-middle">Chatting</span>
						</a>
					</li>
			</div>
		</nav>
		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle d-flex">
					<i class="hamburger align-self-center"></i>
				</a>

				<form class="form-inline d-none d-sm-inline-block">
					<div class="input-group input-group-navbar">
						<input type="text" class="form-control" placeholder="Search…" aria-label="Search">
						<div class="input-group-append">
							<button class="btn" type="button">
								<i class="align-middle" data-feather="search"></i>
							</button>
						</div>
					</div>
				</form>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="bell"></i>
									<span class="indicator">4</span>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0" aria-labelledby="alertsDropdown">
								<div class="dropdown-menu-header">
									4 New Notifications
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row no-gutters align-items-center">
											<div class="col-2">
												<i class="text-danger" data-feather="alert-circle"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Update completed</div>
												<div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
												<div class="text-muted small mt-1">30m ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row no-gutters align-items-center">
											<div class="col-2">
												<i class="text-warning" data-feather="bell"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Lorem ipsum</div>
												<div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate hendrerit et.</div>
												<div class="text-muted small mt-1">2h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row no-gutters align-items-center">
											<div class="col-2">
												<i class="text-primary" data-feather="home"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Login from 192.186.1.8</div>
												<div class="text-muted small mt-1">5h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row no-gutters align-items-center">
											<div class="col-2">
												<i class="text-success" data-feather="user-plus"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">New connection</div>
												<div class="text-muted small mt-1">Christina accepted your request.</div>
												<div class="text-muted small mt-1">14h ago</div>
											</div>
										</div>
									</a>
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all notifications</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown" data-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="message-square"></i>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0" aria-labelledby="messagesDropdown">
								<div class="dropdown-menu-header">
									<div class="position-relative">
										4 New Messages
									</div>
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row no-gutters align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-5.jpg" class="avatar img-fluid rounded-circle" alt="Vanessa Tucker">
											</div>
											<div class="col-10 pl-2">
												<div class="text-dark">Vanessa Tucker</div>
												<div class="text-muted small mt-1">Nam pretium turpis et arcu. Duis arcu tortor.</div>
												<div class="text-muted small mt-1">15m ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row no-gutters align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-2.jpg" class="avatar img-fluid rounded-circle" alt="William Harris">
											</div>
											<div class="col-10 pl-2">
												<div class="text-dark">William Harris</div>
												<div class="text-muted small mt-1">Curabitur ligula sapien euismod vitae.</div>
												<div class="text-muted small mt-1">2h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row no-gutters align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-4.jpg" class="avatar img-fluid rounded-circle" alt="Christina Mason">
											</div>
											<div class="col-10 pl-2">
												<div class="text-dark">Christina Mason</div>
												<div class="text-muted small mt-1">Pellentesque auctor neque nec urna.</div>
												<div class="text-muted small mt-1">4h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row no-gutters align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-3.jpg" class="avatar img-fluid rounded-circle" alt="Sharon Lessman">
											</div>
											<div class="col-10 pl-2">
												<div class="text-dark">Sharon Lessman</div>
												<div class="text-muted small mt-1">Aenean tellus metus, bibendum sed, posuere ac, mattis non.</div>
												<div class="text-muted small mt-1">5h ago</div>
											</div>
										</div>
									</a>
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all messages</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-toggle="dropdown">
								<i class="align-middle" data-feather="settings"></i>
							</a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-toggle="dropdown">
								<?php
								$getData = $this->mProfil->getData('user', ['id_user' => $this->session->userdata('id')]);
								$d = $getData->row();
								?>
								<img src="<?= base_url('asset/merchant/' . $d->photo) ?>" class="avatar img-fluid rounded mr-1" alt="<?= $this->session->userdata('nama') ?>" /> <span class="text-dark"><?= $this->session->userdata('nama') ?></span>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<a class="dropdown-item" href="<?= base_url('admin/cProfil') ?>"><i class="align-middle mr-1" data-feather="user"></i> Profile</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="<?= base_url('admin/cSetting') ?>"><i class="align-middle mr-1" data-feather="settings"></i> Settings & Privacy</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="<?= base_url('admin/clogin/logout') ?>">Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>