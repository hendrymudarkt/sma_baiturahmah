<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SMA Baiturrahmah</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo site_url('plugins/fontawesome-free/css/all.min.css'); ?>">
	<!-- DataTables -->
	<link rel="stylesheet" href="<?php echo site_url('plugins/datatables-bs4/css/dataTables.bootstrap4.css'); ?>">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo site_url('dist/css/adminlte.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo site_url('plugins/chosen/chosen.css'); ?>">
	<!-- Datepicker -->
	<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
</head>

<body class="hold-transition sidebar-mini layout-navbar-fixed">
	<div class="wrapper">
		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-white navbar-light">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="#" class="nav-link">SMA Baiturrahmah</a>
				</li>
				<!-- <li class="nav-item d-none d-sm-inline-block">
					<a href="#" class="nav-link">Contact</a>
				</li> -->
			</ul>

			<!-- SEARCH FORM -->
			<!-- <form class="form-inline ml-3">
				<div class="input-group input-group-sm">
					<input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
					<div class="input-group-append">
						<button class="btn btn-navbar" type="submit">
							<i class="fas fa-search"></i>
						</button>
					</div>
				</div>
			</form> -->

			<!-- Right navbar links -->
			<ul class="navbar-nav ml-auto">
				<!-- Messages Dropdown Menu -->
				<!-- <li class="nav-item dropdown">
					<a class="nav-link" data-toggle="dropdown" href="#">
						<i class="fas fa-comments"></i>
						<span class="badge badge-danger navbar-badge">3</span>
					</a>
					<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
						<a href="#" class="dropdown-item"> Message Start -->
				<!-- <div class="media">
								<img src="<?php echo site_url('dist/img/user1-128x128.jpg') ?>" alt="User Avatar" class="img-size-50 mr-3 img-circle">
								<div class="media-body">
									<h3 class="dropdown-item-title">
										Brad Diesel
										<span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
									</h3>
									<p class="text-sm">Call me whenever you can...</p>
									<p class="text-sm text-muted"><i class="fas fa-clock mr-1"></i> 4 Hours Ago</p>
								</div>
							</div> -->
				<!-- Message End -->
				<!-- </a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item"> -->
				<!-- Message Start -->
				<!-- <div class="media">
								<img src="<?php echo site_url('dist/img/user8-128x128.jpg') ?>" alt="User Avatar" class="img-size-50 img-circle mr-3">
								<div class="media-body">
									<h3 class="dropdown-item-title">
										John Pierce
										<span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
									</h3>
									<p class="text-sm">I got your message bro</p>
									<p class="text-sm text-muted"><i class="fas fa-clock mr-1"></i> 4 Hours Ago</p>
								</div>
							</div> -->
				<!-- Message End -->
				<!-- </a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item"> -->
				<!-- Message Start -->
				<!-- <div class="media">
								<img src="<?php echo site_url('dist/img/user4-128x128.jpg') ?>" alt="User Avatar" class="img-size-50 img-circle mr-3">
								<div class="media-body">
									<h3 class="dropdown-item-title">
										Nora Silvester
										<span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
									</h3>
									<p class="text-sm">The subject goes here</p>
									<p class="text-sm text-muted"><i class="fas fa-clock mr-1"></i> 4 Hours Ago</p>
								</div>
							</div> -->
				<!-- Message End -->
				<!-- </a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
					</div>
				</li> -->
				<!-- Notifications Dropdown Menu -->
				<!-- <li class="nav-item dropdown">
					<a class="nav-link" data-toggle="dropdown" href="#">
						<i class="fas fa-bell"></i>
						<span class="badge badge-warning navbar-badge">15</span>
					</a>
					<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
						<span class="dropdown-item dropdown-header">15 Notifications</span>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">
							<i class="fas fa-envelope mr-2"></i> 4 new messages
							<span class="float-right text-muted text-sm">3 mins</span>
						</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">
							<i class="fas fa-users mr-2"></i> 8 friend requests
							<span class="float-right text-muted text-sm">12 hours</span>
						</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">
							<i class="fas fa-file mr-2"></i> 3 new reports
							<span class="float-right text-muted text-sm">2 days</span>
						</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
					</div>
				</li> -->
				<!-- <li class="nav-item">
					<a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
						<i class="fas fa-th-large"></i>
					</a>
				</li> -->
			</ul>
		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4 nav-compact">
			<!-- Brand Logo -->
			<a href="#" class="brand-link">
				<img src="<?php echo site_url('dist/img/AdminLTELogo.png'); ?>" alt="Logo"
					class="brand-image img-circle elevation-3" style="opacity: .8">
				<span class="brand-text font-weight-light small">SMA Baiturrahmah</span>
			</a>

			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar user (optional) -->
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<div class="image">
						<img src="<?php echo site_url('dist/img/avatar04.png'); ?>" class="img-circle elevation-2"
							alt="User Image">
					</div>
					<div class="info">
						<a href="<?php echo site_url('user/edit_pass/'.$this->session->userdata('id')) ?>"
							class="d-block"><?php echo $this->session->userdata('nama') ?></a>
					</div>
				</div>

				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
						data-accordion="false">
						<!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
						<li class="nav-item">
							<a href="<?php echo site_url('dashboard');?>" class="nav-link">
								<i class="nav-icon fas fa-tachometer-alt"></i>
								<p>
									Dashboard
								</p>
							</a>
						</li>
						<?php if($this->session->userdata('sebagai') == "admin"){ ?>
						<li class="nav-item">
							<a href="<?php echo site_url('siswa') ?>" class="nav-link">
								<i class="fas fa-users nav-icon"></i>
								<p>Calon Siswa</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo site_url('siswa/terima') ?>" class="nav-link">
								<i class="fas fa-user nav-icon"></i>
								<p>Siswa Diterima</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo site_url('pembayaran') ?>" class="nav-link">
								<i class="fas fa-money-bill-wave nav-icon"></i>
								<p>Pembayaran</p>
							</a>
						</li>
						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-file"></i>
								<p>
									Laporan
									<i class="right fas fa-angle-left"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="<?php echo site_url('laporan/pendaftaran') ?>" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Pendaftaran</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?php echo site_url('laporan/siswa') ?>" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Siswa Baru</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?php echo site_url('laporan/pembayaran') ?>" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Pembayaran</p>
									</a>
								</li>
							</ul>
						</li>
						<?php } 
						if ($this->session->userdata('sebagai') == 'siswa') { ?>
						<li class="nav-item">
							<a href="<?php echo site_url('siswa/view/'.$this->session->userdata('username')) ?>" class="nav-link">
								<i class="fas fa-users nav-icon"></i>
								<p>Data</p>
							</a>
						</li>
						<?php } else {
							echo "";
						} ?>
						<li class="nav-item">
							<a href="<?php echo site_url('outbox') ?>" class="nav-link">
								<i class="fas fa-users nav-icon"></i>
								<p>Outbox</p>
							</a>
						</li>
						<?php
						$username = $this->session->userdata('username');
						$datab = $this->db->query("SELECT * FROM status WHERE nis = '$username' AND keterangan = 'Diterima'")->num_rows();
						if ($datab == 1) { ?>
						<li class="nav-item">
							<a href="<?php echo site_url('pembayaran') ?>" class="nav-link">
								<i class="fas fa-money-bill-wave nav-icon"></i>
								<p>Pembayaran</p>
							</a>
						</li>
						<?php } else { } ?>
						<li class="nav-item">
							<a href="<?php echo site_url('login/logout') ?>" class="nav-link">
								<i class="fas fa-share-square nav-icon"></i>
								<p>Keluar</p>
							</a>
						</li>
					</ul>
				</nav>
				<!-- /.sidebar-menu -->
			</div>
			<!-- /.sidebar -->
		</aside>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<?php
			if(isset($_view) && $_view)
      	$this->load->view($_view);
  ?>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->
		<footer class="main-footer">
			<div class="float-right d-none d-sm-block">
				<b>Version</b> 1
			</div>
			<strong>Copyright &copy; 2020 <a href="#">SMA Baiturrahmah</a>.</strong> All rights
			reserved.
		</footer>

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->

	<!-- jQuery -->
	<script src="<?php echo site_url('plugins/jquery/jquery.min.js'); ?>"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.js"
		integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
	<!-- Bootstrap 4 -->
	<script src="<?php echo site_url('plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
	<!-- DataTables -->
	<script src="<?php echo site_url('plugins/datatables/jquery.dataTables.js'); ?>"></script>
	<script src="<?php echo site_url('plugins/datatables-bs4/js/dataTables.bootstrap4.js'); ?>"></script>
	<!-- AdminLTE App -->
	<script src="<?php echo site_url('dist/js/adminlte.min.js'); ?>"></script>
	<script src="<?php echo site_url('plugins/chosen/chosen.jquery.js'); ?>"></script>
	<!-- Datepicker -->
	<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
	<!-- page script -->
	<script type="text/javascript">
		$(function () {
			$(document).on('click', '[data-toggle="lightbox"]', function (event) {
				event.preventDefault();
				$(this).ekkoLightbox({
					alwaysShowClose: true
				});
			});
		})


		$(function () {
			$("#example1").DataTable({
				"language": {
					"sEmptyTable": "Tidak ada data yang tersedia pada tabel ini",
					"sProcessing": "Sedang memproses...",
					"sLengthMenu": "Tampilkan _MENU_ entri",
					"sZeroRecords": "Tidak ditemukan data yang sesuai",
					"sInfo": "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
					"sInfoEmpty": "Menampilkan 0 sampai 0 dari 0 entri",
					"sInfoFiltered": "(disaring dari _MAX_ entri keseluruhan)",
					"sInfoPostFix": "",
					"sSearch": "Cari:",
					"sUrl": "",
					"oPaginate": {
						"sFirst": "Pertama",
						"sPrevious": "Sebelumnya",
						"sNext": "Selanjutnya",
						"sLast": "Terakhir"
					}
				}
			});
		});

		$('#tgl_lahir').datepicker({
			uiLibrary: 'bootstrap4'
		});
		$('#tgl_berlaku_sim').datepicker({
			uiLibrary: 'bootstrap4'
		});
		$('#tanggal_pelatihan').datepicker({
			uiLibrary: 'bootstrap4'
		});
	</script>
</body>

</html>