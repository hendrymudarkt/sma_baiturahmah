<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Dokumen SMK3L</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active">Dokumen SMK3L</li>
				</ol>
			</div>
		</div>
	</div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
<div class="container-fluid">
		<div class="row">
			<div class="col-md-4 col-sm-6 col-12">
				<div class="info-box">
				<a href="<?php echo site_url('dokumen/km_k3') ?>" class="info-box-icon bg-info"><i class="far fa-copy"></i></a>

				<div class="info-box-content">
					<span class="info-box-text">Manual dan Kebijakan</span>
			        <span class="info-box-number"><?php $datab = $this->db->query("SELECT id_dokumen FROM dokumen WHERE jenis_dokumen = 'Manual dan Kebijakan' AND kategori = 'Dokumen SMK3'"); echo $datab->num_rows(); ?></span>
				</div>
				<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
			</div>
			<!-- /.col -->
			<div class="col-md-4 col-sm-6 col-12">
				<div class="info-box">
				<a href="<?php echo site_url('dokumen/pr_k3') ?>" class="info-box-icon bg-success"><i class="far fa-copy"></i></a>

				<div class="info-box-content">
					<span class="info-box-text">Prosedur</span>
			    	<span class="info-box-number"><?php $datab = $this->db->query("SELECT id_dokumen FROM dokumen WHERE jenis_dokumen = 'Prosedur' AND kategori = 'Dokumen SMK3'"); echo $datab->num_rows(); ?></span>
				</div>
				<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
			</div>
			<!-- /.col -->
			<div class="col-md-4 col-sm-6 col-12">
				<div class="info-box">
				<a href="<?php echo site_url('dokumen/ik_k3') ?>" class="info-box-icon bg-warning"><i class="far fa-copy"></i></a>

				<div class="info-box-content">
					<span class="info-box-text">Instruksi Kerja</span>
			        <span class="info-box-number"><?php $datab = $this->db->query("SELECT id_dokumen FROM dokumen WHERE jenis_dokumen = 'Instruksi Kerja' AND kategori = 'Dokumen SMK3'"); echo $datab->num_rows(); ?></span>
				</div>
				<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
			</div>
			<!-- /.col -->
			<div class="col-md-4 col-sm-6 col-12">
				<div class="info-box">
				<a href="<?php echo site_url('dokumen/fr_k3') ?>" class="info-box-icon bg-danger"><i class="far fa-copy"></i></a>

				<div class="info-box-content">
					<span class="info-box-text">Formulir</span>
			        <span class="info-box-number"><?php $datab = $this->db->query("SELECT id_dokumen FROM dokumen WHERE jenis_dokumen = 'Formulir' AND kategori = 'Dokumen SMK3'"); echo $datab->num_rows(); ?></span>
				</div>
				<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
			</div>
			<!-- /.col -->
			<div class="col-md-4 col-sm-6 col-12">
				<div class="info-box">
				<a href="<?php echo site_url('dokumen/ed_k3') ?>" class="info-box-icon bg-gray"><i class="far fa-copy"></i></a>

				<div class="info-box-content">
					<span class="info-box-text">Dokumen Eksternal</span>
			    	<span class="info-box-number"><?php $datab = $this->db->query("SELECT id_dokumen FROM dokumen WHERE jenis_dokumen = 'Dokumen Eksternal' AND kategori = 'Dokumen SMK3'"); echo $datab->num_rows(); ?></span>
				</div>
				<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
			</div>
			<!-- /.col -->
			<div class="col-md-4 col-sm-6 col-12">
				<div class="info-box">
				<a href="<?php echo site_url('dokumen/rg_k3') ?>" class="info-box-icon bg-purple"><i class="far fa-copy"></i></a>

				<div class="info-box-content">
					<span class="info-box-text">Regulasi</span>
			        <span class="info-box-number"><?php $datab = $this->db->query("SELECT id_dokumen FROM dokumen WHERE jenis_dokumen = 'Regulasi' AND kategori = 'Dokumen SMK3'"); echo $datab->num_rows(); ?></span>
				</div>
				<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
			</div>
			<!-- /.col -->
		</div>
	</div>
</section>
