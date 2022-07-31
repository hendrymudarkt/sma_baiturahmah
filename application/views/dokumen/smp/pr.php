<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Prosedur</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Dokumen SMP</a></li>
					<li class="breadcrumb-item active">Prosedur</li>
				</ol>
			</div>
		</div>
	</div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h3 class="card-title">Data Prosedur</h3>
				</div>
				<!-- /.card-header -->
				<div class="card-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th class="text-center">No</th>
								<th>Jenis Dokumen</th>
								<th>Judul</th>
								<th>Tgl Berlaku</th>
								<?php if($this->session->userdata('level') == 1){
									echo "";
								} else {
									echo "<th>File</th>";
								} ?>
								<th>Pemilik Dokumen</th>
								<?php if($this->session->userdata('level') == 1){
									echo "<th>Aksi</th>";
								} else {
									echo "";
								} ?>
							</tr>
						</thead>
						<tbody id="show_data"></tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>

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
						<label for="kategori2">Kategori Dokumen</label>
						<select name="kategori2" id="kategori2" class="form-control">
							<option value="NULL">...</option>
							<option value="Dokumen Integrasi">Dokumen Integrasi</option>
							<option value="Dokumen SMK3">Dokumen SMK3</option>
							<option value="Dokumen Laboratorium">Dokumen Laboratorium</option>
							<option value="Dokumen SMP">Dokumen SMP</option>
						</select>
					</div>
					<div class="form-group">
						<label for="jenis_dokumen2">Jenis Dokumen</label>
						<select name="jenis_dokumen2" id="jenis_dokumen2" class="form-control">
							<option value="NULL">...</option>
							<option value="Manual dan Kebijakan">Manual dan Kebijakan</option>
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

		$('#mydata').dataTable({
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

		function tampil_data_pengguna() {
			urll = '<?php echo site_url('dokumen/view/') ?>';
			$.ajax({
				type: 'GET',
				url: '<?php echo site_url("dokumen/data_pr_smp") ?>',
				async: false,
				dataType: 'json',
				success: function (data) {
					var html = '';
					var i;
					var no = 1;
					for (i = 0; i < data.length; i++) {
						<?php if($this->session->userdata('level') == 1){ ?>
						html += '<tr>' +
							'<td align="center">' + no++ + '</td>' +
							'<td>' + data[i].jenis_dokumen + '</td>' +
							'<td>' + data[i].judul + '</td>' +
							'<td>' + data[i].tanggal + '</td>' +
							'<td>' + data[i].owner + '</td>' +
							'<td align="center">' +
							'<a href="javascript:;" data="' +
							data[i].id_dokumen +
							'" class="btn btn-icon btn-sm btn-success item_edit"><i class="far fa-edit"></i></a>' +
							' ' +
							'<a href="javascript:;" data="' +
							data[i].id_dokumen +
							'" class="btn btn-icon btn-sm btn-danger item_hapus"><i class="far fa-trash-alt"></i></a>' +
							' <a href="' + urll + data[i].file + '" data="' +
							data[i].id_dokumen +
							'" class="btn btn-icon btn-sm btn-primary"><i class="far fa-eye"></i></a>'
							'</td>' +
							'</tr>';
						<?php } else { ?>
							html += '<tr>' +
							'<td align="center">' + no++ + '</td>' +
							'<td>' + data[i].jenis_dokumen + '</td>' +
							'<td>' + data[i].judul + '</td>' +
							'<td>' + data[i].tanggal + '</td>' +
							'<td><a href="' + urll + data[i].file + '" data="' +
							data[i].id_dokumen +
							'" class="btn btn-icon btn-sm btn-primary"><i class="fas fa-eye"></i> Download</a> </td>' +
							'<td>' + data[i].owner + '</td>' +
							'</tr>';
						<?php } ?>
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
						$('[name="tanggal2"]').val(data.tanggal);
						$('[name="kategori2"]').val(data.kategori);
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
					kategori: $('#kategori2').val(),
					tanggal: $('#tanggal2').val(),
					username: $('#file2').val(),
				},
				success: function (data) {
					$('[name="id"]').val("");
					$('[name="judul2"]').val("");
					$('[name="file2"]').val("");
					$('[name="tanggal2"]').val("");
					$('[name="kategori2"]').val("");
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
