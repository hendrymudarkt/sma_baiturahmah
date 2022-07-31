<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Dashboard</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active">Dashboard</li>
				</ol>
			</div>
		</div>
	</div><!-- /.container-fluid -->
</section>

<?php if($this->session->userdata('sebagai') == "admin"){ ?>
<!-- Main content -->
<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-info">
					<div class="inner">
						<h3><?php $datab = $this->db->query("SELECT nis FROM siswa"); echo $datab->num_rows(); ?></h3>

						<p>Siswa Mendaftar</p>
					</div>
					<div class="icon">
						<i class="ion ion-person"></i>
					</div>
					<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<!-- ./col -->
			<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-success">
					<div class="inner">
						<h3><?php $datab = $this->db->query("SELECT id FROM status WHERE keterangan = 'Diterima'"); echo $datab->num_rows(); ?></h3>

						<p>Siswa Diterima</p>
					</div>
					<div class="icon">
						<i class="ion ion-person-add"></i>
					</div>
					<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<!-- ./col -->
			<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-warning">
					<div class="inner">
						<h3><?php $datab = $this->db->query("SELECT id FROM pembayaran WHERE status = 'Pending'"); echo $datab->num_rows(); ?>
						</h3>

						<p>Pembayaran Pending</p>
					</div>
					<div class="icon">
						<i class="ion ion-cash"></i>
					</div>
					<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<!-- ./col -->
			<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-danger">
					<div class="inner">
						<h3><?php $datab = $this->db->query("SELECT id FROM pembayaran WHERE status = 'Diterima'"); echo $datab->num_rows(); ?>
						</h3>

						<p>Pembayaran Diterima</p>
					</div>
					<div class="icon">
						<i class="ion ion-checkmark"></i>
					</div>
					<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<!-- ./col -->
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<center>
					<h2>Selamat Datang di Dashboard SMA Baiturrahmah</h2>
				</center>
			</div>
		</div>
	</div>
</section>
<?php } else{ ?>
<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card card-default">
					<div class="card-header">
						<h3 class="card-title">
							<i class="fas fa-bullhorn"></i>
							Pengumuman
						</h3>
					</div>
					<!-- /.card-header -->
					<div class="card-body">
						<?php
						$username = $this->session->userdata('username');
						$datab = $this->db->query("SELECT * FROM status WHERE nis = '$username'")->row_array();
						if ($datab['keterangan'] == "Diterima") { ?>
						<div class="callout callout-success">
							<h5>Selamat Anda telah dinyatakan Lulus</h5>
							<p>Anda telah dinyatakan lulus, silahkan melakukan pembayaran ke rekening yang telah disediakan sesuai dengan nominal.</p>
						</div>
						<?php } else if ($datab['keterangan'] == "Diterima") { ?>
							<div class="callout callout-danger">
							<h5>Mohon maaf anda dinyatakan tidak Lulus</h5>
							<p>Mohon maaf anda dinyatakan tidak Lulus karena tidak memenuhi persyaratan, tetap semangat dan jangan menyerah :).</p>
						</div>
						<?php } else { 
							$nis = $this->session->userdata('nis');
							$qry = $this->db->query("SELECT nis FROM status WHERE nis = '$nis'")->row_array();
							echo $qry['nis'];
							if ($qry['nis'] == '') { ?>
								<div class="callout callout-info">
									<h5>Menunggu Pengumuman</h5>
									<p>Silahkan menunggu pengumuman.</p>
								</div>
						<?php } } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php } ?>