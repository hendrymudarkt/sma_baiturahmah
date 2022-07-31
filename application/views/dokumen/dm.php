<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Dokumen Mutu</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active">Dokumen Mutu</li>
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
				<a href="<?php echo site_url('dokumen/km') ?>" class="info-box-icon bg-info"><i class="far fa-copy"></i></a>

				<div class="info-box-content">
					<span class="info-box-text">Ketentuan dan Manual</span>
			        <span class="info-box-number"><?php $datab = $this->db->query("SELECT id_dokumen FROM dokumen WHERE jenis_dokumen = 'Ketentuan dan Manual' AND kategori = 'Dokumen Mutu'"); echo $datab->num_rows(); ?></span>
				</div>
				<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
			</div>
			<!-- /.col -->
			<div class="col-md-4 col-sm-6 col-12">
				<div class="info-box">
				<a href="<?php echo site_url('dokumen/pr') ?>" class="info-box-icon bg-success"><i class="far fa-copy"></i></a>

				<div class="info-box-content">
					<span class="info-box-text">Dokumen Prosedur</span>
			    	<span class="info-box-number"><?php $datab = $this->db->query("SELECT id_dokumen FROM dokumen WHERE jenis_dokumen = 'Prosedur' AND kategori = 'Dokumen Mutu'"); echo $datab->num_rows(); ?></span>
				</div>
				<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
			</div>
			<!-- /.col -->
			<div class="col-md-4 col-sm-6 col-12">
				<div class="info-box">
				<a href="<?php echo site_url('dokumen/ik') ?>" class="info-box-icon bg-warning"><i class="far fa-copy"></i></a>

				<div class="info-box-content">
					<span class="info-box-text">Dokumen Instruksi Kerja</span>
			        <span class="info-box-number"><?php $datab = $this->db->query("SELECT id_dokumen FROM dokumen WHERE jenis_dokumen = 'Instruksi Kerja' AND kategori = 'Dokumen Mutu'"); echo $datab->num_rows(); ?></span>
				</div>
				<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
			</div>
			<!-- /.col -->
			<div class="col-md-4 col-sm-6 col-12">
				<div class="info-box">
				<a href="<?php echo site_url('dokumen/fr') ?>" class="info-box-icon bg-danger"><i class="far fa-copy"></i></a>

				<div class="info-box-content">
					<span class="info-box-text">Formulir</span>
			        <span class="info-box-number"><?php $datab = $this->db->query("SELECT id_dokumen FROM dokumen WHERE jenis_dokumen = 'Formulir' AND kategori = 'Dokumen Mutu'"); echo $datab->num_rows(); ?></span>
				</div>
				<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
			</div>
			<!-- /.col -->
			<div class="col-md-4 col-sm-6 col-12">
				<div class="info-box">
				<a href="<?php echo site_url('dokumen/ed') ?>" class="info-box-icon bg-gray"><i class="far fa-copy"></i></a>

				<div class="info-box-content">
					<span class="info-box-text">Dokumen Eksternal</span>
			    	<span class="info-box-number"><?php $datab = $this->db->query("SELECT id_dokumen FROM dokumen WHERE jenis_dokumen = 'Eksternal' AND kategori = 'Dokumen Mutu'"); echo $datab->num_rows(); ?></span>
				</div>
				<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
			</div>
			<!-- /.col -->
			<div class="col-md-4 col-sm-6 col-12">
				<div class="info-box">
				<a href="<?php echo site_url('dokumen/rg') ?>" class="info-box-icon bg-purple"><i class="far fa-copy"></i></a>

				<div class="info-box-content">
					<span class="info-box-text">Regulasi</span>
			        <span class="info-box-number"><?php $datab = $this->db->query("SELECT id_dokumen FROM dokumen WHERE jenis_dokumen = 'Regulasi' AND kategori = 'Dokumen Mutu'"); echo $datab->num_rows(); ?></span>
				</div>
				<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
			</div>
			<!-- /.col -->
		</div>
	</div>
</section>
