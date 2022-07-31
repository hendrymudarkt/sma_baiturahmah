<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Insiden dan Ketidaksesuaian</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active">Insiden dan Ketidaksesuaian</li>
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
					<h3 class="card-title">Data Insiden dan Ketidaksesuaian</h3>
					<div class="float-right">
						<a href="#" data-toggle="modal" data-target="#addModal" class="btn btn-primary btn-sm"
							title="Tambah"><i class="far fa-plus-square"></i></a>
					</div>
				</div>
				<!-- /.card-header -->
				<div class="card-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th class="text-center">No</th>
								<th>Tanggal</th>
								<th>Area</th>
								<th>Insiden</th>
								<th>Penjelasan</th>
								<th>Tipe</th>
								<th>Dibuat</th>
								<th>Ditujukan</th>
								<th>Status</th>
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
</section>

<div class="modal fade" tabindex="-1" role="dialog" id="addModal">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Insiden dan Ketidaksesuaian</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form class="form-horizontal" enctype="multipart/form-data" id="fileUploadForm" action="<?php echo site_url('insiden/add') ?>" method="post">
				<div class="modal-body">
					<label for="tanggal">Tanggal</label>
					<input type="date" class="form-control" name="tanggal" id="tanggal">

					<label for="area">Area</label>
					<input type="text" class="form-control" name="area" id="area">

					<label for="insiden">Insiden</label>
					<select name="insiden" id="insiden" class="form-control">
						<option value="NULL">...</option>
						<option value="Major/Kritikal">Major/Kritikal</option>
						<option value="Insiden K3">Insiden K3</option>
						<option value="Komplain">Komplain</option>
						<option value="Temuan Audit/Inspeksi">Temuan Audit/Inspeksi</option>
					</select><br>

					<label for="penjelasan">Penjelasan</label>
					<input type="text" name="penjelasan" class="form-control"><br>

					<div class="custom-file">
						<input type="file" class="custom-file-input" id="customFile" name="files">
						<label class="custom-file-label" for="customFile">Pilih file/photo</label>
					</div><br>

					<label for="tipe">Tipe</label>
					<select name="tipe" id="tipe" class="form-control">
						<option value="NULL">...</option>
						<option value="Major/Kritikal">Major/Kritikal</option>
						<option value="Minor">Minor</option>
						<option value="Observasi">Observasi</option>
					</select>

					<label for="dibuat">Dibuat Oleh:</label>
					<input type="text" class="form-control" name="dibuat" id="dibuat">

					<label for="bagian">Bagian</label>
					<input type="text" class="form-control" name="bagian" id="bagian">

					<label for="ditujukan">Ditujukan</label>
					<input type="text" class="form-control" name="ditujukan" id="ditujukan">
				</div>
				<div class="modal-footer bg-whitesmoke br">
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>
<div class="modal fade" tabindex="-1" role="dialog" id="editModal">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Insiden dan Ketidaksesuaian</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form class="form-horizontal" enctype="multipart/form-data" id="fileUploadForm">
				<div class="modal-body">
					<label for="tanggal">Tanggal</label>
					<input type="date" class="form-control" name="tanggal2" id="tanggal">

					<label for="area">Area</label>
					<input type="text" class="form-control" name="area2" id="area">

					<label for="insiden">Insiden</label>
					<select name="insiden2" id="insiden" class="form-control">
						<option value="NULL">...</option>
						<option value="Major/Kritikal">Major/Kritikal</option>
						<option value="Insiden K3">Insiden K3</option>
						<option value="Komplain">Komplain</option>
						<option value="Temuan Audit/Inspeksi">Temuan Audit/Inspeksi</option>
					</select><br>

					<label for="penjelasan">Penjelasan</label>
					<input type="text" class="form-control" name="penjelasan2"><br>

					<div class="custom-file">
						<input type="file" class="custom-file-input" id="customFile" name="files2">
						<label class="custom-file-label" for="customFile">Pilih file/photo</label>
					</div><br>

					<label for="tipe">Tipe</label>
					<select name="tipe2" id="tipe" class="form-control">
						<option value="NULL">...</option>
						<option value="Major/Kritikal">Major/Kritikal</option>
						<option value="Minor">Minor</option>
						<option value="Observasi">Observasi</option>
					</select>

					<label for="dibuat">Dibuat Oleh:</label>
					<input type="text" class="form-control" name="dibuat2" id="dibuat">

					<label for="bagian">Bagian</label>
					<input type="text" class="form-control" name="bagian2" id="bagian">

					<label for="ditujukan">Ditujukan</label>
					<input type="text" class="form-control" name="ditujukan2" id="ditujukan">
				</div>
				<div class="modal-footer bg-whitesmoke br">
					<button type="submit" class="btn btn-primary" id="btn_updatei">Simpan</button>
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
				<h4 class="modal-title" id="myModalLabel">Hapus insiden</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form class="form-horizontal">
				<div class="modal-body">

					<input type="hidden" name="id" id="textid" value="">
					<div class="alert alert-warning">
						<p>Apakah Anda yakin mau menghapus insiden ini?</p>
					</div>

				</div>
				<div class="modal-footer">
					<button class="btn_hapus btn btn-danger" id="btn_hapusi">Ya</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!--END MODAL HAPUS-->
<script src="<?php echo site_url('dist/js/jquery.min.js'); ?>"></script>
<script type="text/javascript">
	$(document).ready(function () {
		function reload_table() {
			$(window).error(function () {
				return true;
			});
			$('#example1').DataTable().ajax.reload();
		}
		tampil_data_insiden();

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

		function tampil_data_insiden() {
			$.ajax({
				type: 'GET',
				url: '<?php echo site_url("insiden/data_insiden") ?>',
				async: false,
				dataType: 'json',
				success: function (data) {
					var html = '';
					var url_confirm = '<?php echo site_url("insiden/confirm/") ?>';
					var url_detail = '<?php echo site_url("insiden/detail/") ?>';
					var i;
					var no = 1;
					for (i = 0; i < data.length; i++) {
						if (data[i].status == "Progress") {
							html += '<tr>' +
							'<td align="center">' + no++ + '</td>' +
							'<td>' + data[i].tanggal + '</td>' +
							'<td>' + data[i].area + '</td>' +
							'<td>' + data[i].insiden + '</td>' +
							'<td>' + data[i].penjelasan + '</td>' +
							'<td>' + data[i].tipe + '</td>' +
							'<td>' + data[i].dibuat + '</td>' +
							'<td>' + data[i].ditujukan + '</td>' +
							'<td>' + data[i].status + '</td>' +
							'<td align="center" style="text-align:right;">' +
							'<a href="javascript:;" data="' +
							data[i].id +
							'" class="btn btn-icon btn-sm btn-success item_edit"><i class="far fa-edit"></i></a>' +
							' ' +
							'<a href="javascript:;" data="' +
							data[i].id +
							'" class="btn btn-icon btn-sm btn-danger item_hapus"><i class="far fa-trash-alt"></i></a> ' +
							'<a href="'+ url_confirm + data[i].id + '" class="btn btn-icon btn-sm btn-default"><i class="far fa-check-square"></i></a> </td>' +
							'</tr>';
						}else{
							html += '<tr>' +
							'<td align="center">' + no++ + '</td>' +
							'<td>' + data[i].tanggal + '</td>' +
							'<td>' + data[i].area + '</td>' +
							'<td>' + data[i].insiden + '</td>' +
							'<td>' + data[i].penjelasan + '</td>' +
							'<td>' + data[i].tipe + '</td>' +
							'<td>' + data[i].dibuat + '</td>' +
							'<td>' + data[i].ditujukan + '</td>' +
							'<td>' + data[i].status + '</td>' +
							'<td align="center" style="text-align:right;">' +
							'<a href="javascript:;" data="' +
							data[i].id +
							'" class="btn btn-icon btn-sm btn-success item_edit"><i class="far fa-edit"></i></a>' +
							' ' +
							'<a href="javascript:;" data="' +
							data[i].id +
							'" class="btn btn-icon btn-sm btn-danger item_hapus"><i class="far fa-trash-alt"></i></a> ' +
							'<a href="'+ url_detail + data[i].id + '" class="btn btn-icon btn-sm btn-default"><i class="far fa-eye"></i></a> </td>' +
							'</tr>';
						}
						
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
				url: "<?php echo site_url('insiden/get_insiden')?>",
				dataType: "JSON",
				data: {
					id: id
				},
				success: function (data) {
					$.each(data, function (id, tanggal, area, insiden, file, penjelasan, tipe, dibuat, bagian, ditujukan) {
						$('#editModal').modal('show');
						$('[name="id"]').val(data.id);
						$('[name="tanggal2"]').val(data.tanggal);
						$('[name="area2"]').val(data.area);
						$('[name="insiden2"]').val(data.insiden);
						$('[name="file2"]').val(data.file);
						$('[name="penjelasan2"]').val(data.penjelasan);
						$('[name="tipe2"]').val(data.tipe);
						$('[name="dibuat2"]').val(data.dibuat);
						$('[name="bagian2"]').val(data.bagian);
						$('[name="ditujukan2"]').val(data.ditujukan);
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

		//Simpan insiden
		// $(document).ready(function () {
		// 	//Simpan Pengguna
		// 	$('#btn_simpan_insiden').on('click', function () {
		// 		var form = $('#fileUploadForm')[0];
		// 		var data = new FormData(form);
		// 		$.ajax({
		// 			type: "POST",
		// 			enctype: 'multipart/form-data',
		// 			processData: false, // Important!
		// 			contentType: false,
		// 			cache: false,
		// 			url: "<?php echo site_url('insiden/add')?>",
		// 			dataType: "JSON",
		// 			data: data,
		// 			success: function (data) {
		// 				$('[name="tanggal"]').val("");
		// 				$('[name="area"]').val("");
		// 				$('[name="insiden"]').val("");
		// 				$('[name="file"]').val("");
		// 				$('[name="penjelasan"]').val("");
		// 				$('[name="tipe"]').val("");
		// 				$('[name="dibuat"]').val("");
		// 				$('[name="bagian"]').val("");
		// 				$('[name="ditujukan"]').val("");
		// 				$('#addModal').modal('hide');
		// 				window.location.reload(true); 
		// 			}
		// 		});
		// 		return false;
		// 	});

		// });
		// $('#btn_simpan').on('click', function () {
		// 	$.ajax({
		// 		type: "POST",
		// 		url: "<?php echo site_url('insiden/add')?>",
		// 		dataType: "JSON",
		// 		data: {
		// 			tanggal: $('#tanggal').val(),
		// 			area: $('#area').val(),
		// 			insiden: $('#insiden').val(),
		// 			file: $('#file').val(),
		// 			penjelasan: $('#penjelasan').val(),
		// 			tipe: $('#tipe').val(),
		// 			dibuat: $('#dibuat').val(),
		// 			bagian: $('#bagian').val(),
		// 			ditujakan: $('#ditujukan').val()
		// 		},
		// 		success: function (data) {
					
		// 			tampil_data_insiden();
		// 		}
		// 	});
		// 	return false;
		// });

		//Update insiden
		$('#btn_updatei').on('click', function () {
			$.ajax({
				type: "POST",
				url: "<?php echo site_url('insiden/edit')?>",
				dataType: "JSON",
				data: {
					id: $('#id').val(),
					tanggal: $('#tanggal2').val(),
					area: $('#area2').val(),
					insiden: $('#insiden2').val(),
					file: $('#files2').val(),
					penjelasan: $('#penjelasan2').val(),
					tipe: $('#tipe2').val(),
					dibuat: $('#dibuat2').val(),
					bagian: $('#bagian2').val(),
					ditujukan: $('#ditujukan2').val()
				},
				success: function (data) {
					$('[name="id"]').val("");
					$('[name="tanggal2"]').val("");
					$('[name="area2"]').val("");
					$('[name="insiden2"]').val("");
					$('[name="files2"]').val("");
					$('[name="penjelasan2"]').val("");
					$('[name="tipe2"]').val("");
					$('[name="dibuat2"]').val("");
					$('[name="bagian2"]').val("");
					$('[name="ditujukan2"]').val("");
					$('#editModal').modal('hide');
					tampil_data_insiden();
				}
			});
			return false;
		});

		//Hapus insiden
		$('#btn_hapusi').on('click', function () {
			var id = $('#textid').val();
			$.ajax({
				type: "POST",
				url: "<?php echo site_url('insiden/remove')?>",
				dataType: "JSON",
				data: {
					id: id
				},
				success: function (data) {
					$('#removeModal').modal('hide');
					tampil_data_insiden();
				}
			});
			reload_table();
			return false;
		});

	});
</script>