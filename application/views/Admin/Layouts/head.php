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
	<link rel="stylesheet" type="text/css" href="<?= base_url('asset/trix-main/dist/') ?>trix.css">
	<script type="text/javascript" src="<?= base_url('asset/trix-main/dist/') ?>trix.js"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="/resources/demos/style.css">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	<style>
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
	</style>

</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html">
					<span class="align-middle"><?= $this->session->userdata('nama')?></span>
				</a>

				<ul class="sidebar-nav">
					<li class="sidebar-item <?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cDashboard') {
												echo 'active';
											}  ?>">
						<a class="sidebar-link" href="<?= base_url('Admin/cDashboard') ?>">
							<i class="align-middle" data-feather="compass"></i> <span class="align-middle">Dashboard</span>
						</a>
					</li>
					<li class="sidebar-header">
						Pages
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
						<a class="sidebar-link" href="<?= base_url('Admin/cPelanggan') ?>">
							<i class="align-middle" data-feather="users"></i> <span class="align-middle">Pelanggan</span>
						</a>
					</li>

					<li class="sidebar-item <?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cProduk') {
												echo 'active';
											}  ?>">
						<a class="sidebar-link" href="<?= base_url('Admin/cProduk') ?>">
							<i class="align-middle" data-feather="upload"></i> <span class="align-middle">Produk</span>
						</a>
					</li>
					<li class="sidebar-item <?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cDiskon') {
												echo 'active';
											}  ?>">
						<a class="sidebar-link" href="<?= base_url('Admin/cDiskon') ?>">
							<i class="align-middle" data-feather="percent"></i> <span class="align-middle">Promo</span>
						</a>
					</li>
					<li class="sidebar-item <?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cTransaksi') {
												echo 'active';
											}  ?>">
						<a class="sidebar-link" href="<?= base_url('Admin/cTransaksi') ?>">
							<i class="align-middle" data-feather="truck"></i> <span class="align-middle">Transaksi</span>
						</a>
					</li>
					<li class="sidebar-item <?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cTransaksiLangsung') {
												echo 'active';
											}  ?>">
						<a class="sidebar-link" href="<?= base_url('Admin/cTransaksiLangsung') ?>">
							<i class="align-middle" data-feather="shopping-cart"></i> <span class="align-middle">Transaksi Langsung</span>
						</a>
					</li>
					<li class="sidebar-item <?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cChatting') {
												echo 'active';
											}  ?>">
						<a class="sidebar-link" href="<?= base_url('Admin/cChatting') ?>">
							<i class="align-middle" data-feather="phone"></i> <span class="align-middle">Chatting</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="<?= base_url('admin/clogin/logout') ?>">
							<i class="align-middle" data-feather="log-out"></i> <span class="align-middle">LogOut</span>
						</a>
					</li>
			</div>
		</nav>
		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle d-flex">
					<i class="hamburger align-self-center"></i>
				</a>
				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
					</ul>
				</div>
			</nav>