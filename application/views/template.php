<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>AdminLTE 3 | Blank Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/adminlte.min.css">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
	<div class="wrapper">
		<nav class="main-header navbar navbar-expand navbar-white navbar-light">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="<?= base_url() ?>assets/index3.html" class="nav-link">Home</a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="#" class="nav-link">Contact</a>
				</li>
			</ul>

			<form class="form-inline ml-3">
				<div class="input-group input-group-sm">
					<input class="form-control form-control-navbar" type="search" placeholder="Search"
						aria-label="Search">
					<div class="input-group-append">
						<button class="btn btn-navbar" type="submit">
							<i class="fas fa-search"></i>
						</button>
					</div>
				</div>
			</form>

			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
						<i class="fas fa-th-large"></i>
					</a>
				</li>
			</ul>
		</nav>

		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Brand Logo -->
			<a href="<?= base_url() ?>assets/index3.html" class="brand-link">
				<img src="<?= base_url() ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
					class="brand-image img-circle elevation-3" style="opacity: .8">
				<span class="brand-text">MyPOS</span>
			</a>

			<div class="sidebar">
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<div class="image">
						<img src="<?= base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
							alt="User Image">
					</div>
					<div class="info">
						<a href="#" class="d-block"><?= $this->fungsi->user_login()->username; ?></a>
						<small class="text-white"><?= $this->fungsi->user_login()->name; ?></small>
					</div>
				</div>

				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
						data-accordion="false">
						
						<li class="nav-item">
							<a href="<?= site_url('dashboard') ?>" class="nav-link">
								<i class="nav-icon fas fa-tachometer-alt"></i>
								<p>
									Dashboard
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../widgets.html" class="nav-link">
								<i class="nav-icon fas fa-th"></i>
								<p>
									Supplier
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-copy"></i>
								<p>
									Customer
								</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-table"></i>
								<p>
									Produk
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="../tables/simple.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Categories</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="../tables/data.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Units</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="../tables/jsgrid.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Items</p>
									</a>
								</li>
							</ul>
						</li>

						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="nav-icon fa fa-shopping-cart"></i>
								<p>
									Transaction
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="../tables/simple.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Sales</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="../tables/data.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Stok In</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="../tables/jsgrid.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Stok Out</p>
									</a>
								</li>
							</ul>
						</li>

						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-chart-pie"></i>
								<p>
									Reports
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="../tables/simple.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Sales</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="../tables/data.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Stocks</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="../tables/jsgrid.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Stok Out</p>
									</a>
								</li>
							</ul>
						</li>

						<li class="nav-header">SETTING</li>
						<?php
						if ($this->fungsi->user_login()->level == 1) {  ?>
						<li class="nav-item">
							<a href="<?= site_url('user') ?>" class="nav-link">
								<i class="nav-icon far fa-user"></i>
								<p>
									User
								</p>
							</a>
						</li>
						<?php }
						?>
						<li class="nav-item">
							<a href="<?= site_url('auth/logout') ?>" class="nav-link">
								<i class="nav-icon fas fa-power-off"></i>
								<p>
									Logout
								</p>
							</a>
						</li>
					</ul>
				</nav>
			</div>
		</aside>

		<div class="content-wrapper">
			<?= $contents; ?>
		</div>

		<footer class="main-footer">
			<div class="float-right d-none d-sm-block">
				<b>Version</b> 3.0.2
			</div>
			<strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
			reserved.
		</footer>

		<aside class="control-sidebar control-sidebar-dark">
		</aside>
	</div>

	<script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
	<script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url() ?>assets/dist/js/adminlte.min.js"></script>
	<script src="<?= base_url() ?>assets/dist/js/demo.js"></script>
</body>

</html>
