<section class="section">
	<div class="section-header">
		<h1>Dokumen</h1>
	</div>
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
					<h4>Kategori Dokumen</h4>
					<div class="card-header-action">
						<?php if($this->session->userdata('level') == 3){
							echo "";
						} else{ ?>
							<button class="btn btn-primary" data-toggle="modal" data-target="#addModal"><i
								class="fas fa-plus"></i>
							Tambah</button>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-3 col-md-6 col-sm-6 col-12">
			<div class="card card-statistic-1">
				<a href="<?php echo site_url('dokumen/dm') ?>">
					<div class="card-icon bg-primary">
						<i class="far fa-file"></i>
					</div>
				</a>
				<div class="card-wrap">
					<div class="card-header">
						<h4>Dokumen Mutu</h4>
					</div>
					<div class="card-body">
						<font size="2">(ISO 9001:2015)</font>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-6 col-12">
			<div class="card card-statistic-1">
				<a href="<?php echo site_url('dokumen/dk3') ?>">
					<div class="card-icon bg-danger">
						<i class="far fa-file"></i>
					</div>
				</a>
				<div class="card-wrap">
					<div class="card-header">
						<h4>Dokumen<br>K3</h4>
					</div>
					<div class="card-body">
						<font size="2">(ISO 45001:2018)</font>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-6 col-12">
			<div class="card card-statistic-1">
				<a href="<?php echo site_url('dokumen/dl') ?>">
					<div class="card-icon bg-warning">
						<i class="far fa-file"></i>
					</div>
				</a>
				<div class="card-wrap">
					<div class="card-header">
						<h4>Dokumen Lingkungan</h4>
					</div>
					<div class="card-body">
						<font size="2">(ISO 14001:2015)</font>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-6 col-12">
			<div class="card card-statistic-1">
				<a href="<?php echo site_url('dokumen/dlab') ?>">
					<div class="card-icon bg-success">
						<i class="fas fa-file"></i>
					</div>
				</a>
				<div class="card-wrap">
					<div class="card-header">
						<h4>Dokumen Laboratorium</h4>
					</div>
					<div class="card-body">
						<font size="2">(ISO 17025:2015)</font>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="modal fade" tabindex="-1" role="dialog" id="addModal">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Tambah Dokumen</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form class="form-horizontal" enctype="multipart/form-data" id="fileUploadForm">
				<div class="modal-body">
					<div class="form-group">
						<label for="judul">Judul</label>
						<input type="text" class="form-control" name="judul" id="judul" placeholder="judul">
					</div>
					<div class="form-group">
						<label for="tanggal">Tanggal Berlaku</label>
						<input type="date" class="form-control" name="tanggal" id="tanggal">
					</div>
					<div class="form-group">
						<label for="kategori">Kategori Dokumen</label>
						<select name="kategori" id="kategori" class="form-control">
							<option value="NULL">...</option>
							<option value="Dokumen Mutu">Dokumen Mutu</option>
							<option value="Dokumen K3">Dokumen K3</option>
							<option value="Dokumen Lingkungan">Dokumen Lingkungan</option>
							<option value="Dokumen Laboratorium">Dokumen Laboratorium</option>
						</select>
					</div>
					<div class="form-group">
						<label for="jenis_dokumen">Jenis Dokumen</label>
						<select name="jenis_dokumen" id="jenis_dokumen" class="form-control">
							<option value="NULL">...</option>
							<option value="Manual dan Ketentuan">Manual dan Ketentuan</option>
							<option value="Prosedur">Prosedur</option>
							<option value="Instruksi Kerja">Instruksi Kerja</option>
							<option value="Formulir">Formulir</option>
							<option value="Eksternal Dokumen">Eksternal Dokumen</option>
							<option value="Regulasi">Regulasi</option>
							<option value="Flowchart">Flowchart</option>
						</select>
					</div>
					<div class="form-group">
						<label for="files" id="image-label">File</label>
						<input type="file" name="files" id="files" />
					</div>
				</div>
				<div class="modal-footer bg-whitesmoke br">
					<button type="submit" class="btn btn-primary" id="btn_simpan">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>
<script src="<?php echo site_url('dist/js/jquery.min.js'); ?>"></script>
<script type="text/javascript">
	$(document).ready(function () {
		//Simpan Pengguna
		$('#btn_simpan').on('click', function () {
			var form = $('#fileUploadForm')[0];
			var data = new FormData(form);
			$.ajax({
				type: "POST",
				enctype: 'multipart/form-data',
				processData: false, // Important!
				contentType: false,
				cache: false,
				url: "<?php echo site_url('dokumen/add')?>",
				dataType: "JSON",
				data: data,
				success: function (data) {
					alert("Berhasil upload file.");
					$('[name="judul"]').val("");
					$('[name="kategori"]').val("");
					$('[name="jenis_dokumen"]').val("");
					$('[name="files"]').val("");
					$('#addModal').modal('hide');
				}
			});
			return false;
		});

	});

</script>
