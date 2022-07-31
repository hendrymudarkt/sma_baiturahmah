<section class="section">
	<div class="section-header">
		<div class="section-header-back">
			<a href="<?php echo site_url('dokumen') ?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
		</div>
		<h1>Data Dokumen</h1>
	</div>
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
					<h4>Flowchart</h4>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-striped" id="table-1">
							<thead>
								<tr>
									<th class="text-center">No</th>
									<th>Jenis Dokumen</th>
									<th>Judul</th>
									<th>Tgl Berlaku</th>
									<th>File</th>
									<th>Pemilik Dokumen</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody id="show_data">
							</tbody>
						</table>
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
<div class="modal fade" tabindex="-1" role="dialog" id="editModal">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit File</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form class="form-horizontal" enctype="multipart/form-data" id="fileUploadForm2">
				<div class="modal-body">
					<input type="hidden" name="id" id="id">
					<div class="form-group">
						<label for="judul">Judul</label>
						<input type="text" class="form-control" name="judul2" id="judul2" placeholder="judul">
					</div>
					<div class="form-group">
						<label for="tanggal">Tanggal Berlaku</label>
						<input type="date" class="form-control" name="tanggal2" id="tanggal2">
					</div>
					<div class="form-group">
						<label for="jenis_dokumen2">Jenis Dokumen</label>
						<select name="jenis_dokumen2" id="jenis_dokumen2" class="form-control">
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
						<label for="files2" id="image-label">File</label>
						<input type="file" name="files2" id="files2" />
					</div>
				</div>
				<div class="modal-footer bg-whitesmoke br">
					<button type="submit" class="btn btn-primary" id="btn_update">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!--MODAL HAPUS-->
<div class="modal fade" id="removeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">Hapus Pengguna</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form class="form-horizontal">
				<div class="modal-body">

					<input type="hidden" name="id" id="textid" value="">
					<div class="alert alert-warning">
						<p>Apakah Anda yakin mau menghapus pengguna ini?</p>
					</div>

				</div>
				<div class="modal-footer">
					<button class="btn_hapus btn btn-danger" id="btn_hapus">Ya</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!--END MODAL HAPUS-->
<script src="<?php echo site_url('dist/js/jquery.min.js'); ?>"></script>
<script type="text/javascript">
	$(document).ready(function () {
		function reload_table(){
			$(window).error(function(){
				return true;
			});
			$('#example1').DataTable().ajax.reload();
		}
		tampil_data_pengguna();

		function tampil_data_pengguna() {
			urll = '<?php echo site_url('dokumen/view/') ?>';
			$.ajax({
				type: 'GET',
				url: '<?php echo site_url("dokumen/data_fc") ?>',
				async: true,
				dataType: 'json',
				success: function (data) {
					var html = '';
					var i;
					var no = 1;
					for (i = 0; i < data.length; i++) {
						html += '<tr>' +
							'<td align="center">' + no++ + '</td>' +
							'<td>' + data[i].jenis_dokumen + '</td>' +
							'<td>' + data[i].judul + '</td>' +
							'<td>' + data[i].tanggal + '</td>' +
							'<td><a href="' + urll + data[i].id_dokumen + '" data="' +
							data[i].id_dokumen +
							'" class="btn btn-icon btn-sm btn-success"><i class="fas fa-eye"></i> Lihat</a> </td>' +
							'<td>' + data[i].owner + '</td>' +
							'<td width="15%">' +
							'<a href="javascript:;" data="' +
							data[i].id_dokumen +
							'" class="btn btn-icon btn-sm btn-success item_edit"><i class="fas fa-edit"></i> Edit</a>' +
							' ' +
							'<a href="javascript:;" data="' +
							data[i].id_dokumen +
							'" class="btn btn-icon btn-sm btn-danger item_hapus"><i class="fas fa-times"></i> Hapus</a>' +
							'</td>' +
							'</tr>';
					}
					$('#show_data').html(html);
				}

			});
		}

		//GET UPDATE
		$('#show_data').on('click', '.item_edit', function () {
			var id = $(this).attr('data');
			$.ajax({
				type: "GET",
				url: "<?php echo site_url('dokumen/get_dokumen')?>",
				dataType: "JSON",
				data: {
					id_dokumen: id
				},
				success: function (data) {
					$.each(data, function (id, judul, file) {
						$('#editModal').modal('show');
						$('[name="id"]').val(data.id_dokumen);
						$('[name="judul2"]').val(data.judul);
						$('[name="tanggal2"]').val(data.judul);
						$('[name="jenis_dokumen2"]').val(data.jenis_dokumen);
						$('[name="file2"]').val(data.file);
					});
				}
			});
			return false;
		});

		//GET HAPUS
		$('#show_data').on('click', '.item_hapus', function () {
			var id = $(this).attr('data');
			$('#removeModal').modal('show');
			$('[name="id"]').val(id);
		});

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
					$('[name="jenis_dokumen"]').val("");
					$('[name="files"]').val("");
					$('#addModal').modal('hide');
					tampil_data_pengguna();
				}
			});
			return false;
		});

		//Update Pengguna
		$('#btn_update').on('click', function () {
			$.ajax({
				type: "POST",
				url: "<?php echo site_url('dokumen/edit')?>",
				dataType: "JSON",
				data: {
					id: $('#id').val(),
					judul: $('#judul2').val(),
					jenis_dokumen: $('#jenis_dokumen2').val(),
					tanggal: $('#tanggal2').val(),
					username: $('#file2').val(),
				},
				success: function (data) {
					$('[name="id"]').val("");
					$('[name="judul2"]').val("");
					$('[name="file2"]').val("");
					$('[name="tanggal2"]').val("");
					$('[name="jenis_dokumen2"]').val("");
					$('#editModal').modal('hide');
					tampil_data_pengguna();
				}
			});
			return false;
		});

		//Hapus Pengguna
		$('#btn_hapus').on('click', function () {
			var id = $('#textid').val();
			$.ajax({
				type: "POST",
				url: "<?php echo site_url('dokumen/remove')?>",
				dataType: "JSON",
				data: {
					id_dokumen: id
				},
				success: function (data) {
					$('#removeModal').modal('hide');
					tampil_data_pengguna();
				}
			});
			reload_table();
			return false;
		});

	});

</script>
