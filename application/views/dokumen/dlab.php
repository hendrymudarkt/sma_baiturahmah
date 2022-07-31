<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Dokumen Laboratorium</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active">Dokumen Laboratorium</li>
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
				<a href="<?php echo site_url('dokumen/km_dlab') ?>" class="info-box-icon bg-info"><i class="far fa-copy"></i></a>

				<div class="info-box-content">
					<span class="info-box-text">Manual dan Kebijakan</span>
			        <span class="info-box-number"><?php $datab = $this->db->query("SELECT id_dokumen FROM dokumen WHERE jenis_dokumen = 'Manual dan Kebijakan' AND kategori = 'Dokumen Laboratorium'"); echo $datab->num_rows(); ?></span>
				</div>
				<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
			</div>
			<!-- /.col -->
			<div class="col-md-4 col-sm-6 col-12">
				<div class="info-box">
				<a href="<?php echo site_url('dokumen/pr_dlab') ?>" class="info-box-icon bg-success"><i class="far fa-copy"></i></a>

				<div class="info-box-content">
					<span class="info-box-text">Prosedur</span>
			    	<span class="info-box-number"><?php $datab = $this->db->query("SELECT id_dokumen FROM dokumen WHERE jenis_dokumen = 'Prosedur' AND kategori = 'Dokumen Laboratorium'"); echo $datab->num_rows(); ?></span>
				</div>
				<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
			</div>
			<!-- /.col -->
			<div class="col-md-4 col-sm-6 col-12">
				<div class="info-box">
				<a href="<?php echo site_url('dokumen/ik_dlab') ?>" class="info-box-icon bg-warning"><i class="far fa-copy"></i></a>

				<div class="info-box-content">
					<span class="info-box-text">Instruksi Kerja</span>
			        <span class="info-box-number"><?php $datab = $this->db->query("SELECT id_dokumen FROM dokumen WHERE jenis_dokumen = 'Instruksi Kerja' AND kategori = 'Dokumen Laboratorium'"); echo $datab->num_rows(); ?></span>
				</div>
				<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
			</div>
			<!-- /.col -->
			<div class="col-md-4 col-sm-6 col-12">
				<div class="info-box">
				<a href="<?php echo site_url('dokumen/fr_dlab') ?>" class="info-box-icon bg-danger"><i class="far fa-copy"></i></a>

				<div class="info-box-content">
					<span class="info-box-text">Formulir</span>
			        <span class="info-box-number"><?php $datab = $this->db->query("SELECT id_dokumen FROM dokumen WHERE jenis_dokumen = 'Formulir' AND kategori = 'Dokumen Laboratorium'"); echo $datab->num_rows(); ?></span>
				</div>
				<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
			</div>
			<!-- /.col -->
			<div class="col-md-4 col-sm-6 col-12">
				<div class="info-box">
				<a href="<?php echo site_url('dokumen/ed_dlab') ?>" class="info-box-icon bg-gray"><i class="far fa-copy"></i></a>

				<div class="info-box-content">
					<span class="info-box-text">Dokumen Eksternal</span>
			    	<span class="info-box-number"><?php $datab = $this->db->query("SELECT id_dokumen FROM dokumen WHERE jenis_dokumen = 'Dokumen Eksternal' AND kategori = 'Dokumen Laboratorium'"); echo $datab->num_rows(); ?></span>
				</div>
				<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
			</div>
			<!-- /.col -->
			<div class="col-md-4 col-sm-6 col-12">
				<div class="info-box">
				<a href="<?php echo site_url('dokumen/rg_dlab') ?>" class="info-box-icon bg-purple"><i class="far fa-copy"></i></a>

				<div class="info-box-content">
					<span class="info-box-text">Regulasi</span>
			        <span class="info-box-number"><?php $datab = $this->db->query("SELECT id_dokumen FROM dokumen WHERE jenis_dokumen = 'Regulasi' AND kategori = 'Dokumen Laboratorium'"); echo $datab->num_rows(); ?></span>
				</div>
				<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
			</div>
			<!-- /.col -->
		</div>
	</div>
</section>
