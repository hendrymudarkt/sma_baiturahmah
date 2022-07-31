<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Kategori</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Pengaturan</a></li>
					<li class="breadcrumb-item active">Kategori</li>
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
				<h3 class="card-title">Data Kategori</h3>
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
							<th>Nama</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody id="show_data">
					</tbody>
				</table>
			</div>
			<!-- /.card-body -->
		</div>
		</div>
		<!-- /.card -->

		<!-- /.col -->
	</div>
	<!-- /.row -->
</section>
<div class="modal fade" tabindex="-1" role="dialog" id="addModal">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Tambah Kategori</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form class="form-horizontal" enctype="multipart/form-data" id="fileUploadForm">
				<div class="modal-body">
					<label for="nama">Nama</label>
					<input type="text" class="form-control" name="nama" id="nama" placeholder="Nama">
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
				<h5 class="modal-title">Edit Kategori</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form class="form-horizontal" enctype="multipart/form-data" id="fileUploadForm2">
				<div class="modal-body">
					<input type="hidden" name="id" id="id">
					<label for="nama">Nama</label>
					<input type="text" class="form-control" name="nama2" id="nama2" placeholder="Nama">
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
				<h4 class="modal-title" id="myModalLabel">Hapus kategori</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form class="form-horizontal">
				<div class="modal-body">

					<input type="hidden" name="id" id="textid" value="">
					<div class="alert alert-warning">
						<p>Apakah Anda yakin mau menghapus kategori ini?</p>
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
		tampil_data_kategori();

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
				url: "<?php echo site_url('kategori/add')?>",
				dataType: "JSON",
				data: data,
				success: function (data) {
					alert("Berhasil tambah kategori.");
					$('[name="nama"]').val("");
					$('#addModal').modal('hide');
					tampil_data_kategori();
				}
			});
			return false;
		});

		function tampil_data_kategori() {
			$.ajax({
				type: 'GET',
				url: '<?php echo site_url("kategori/data_kategori") ?>',
				async: false,
				dataType: 'json',
				success: function (data) {
					var html = '';
					var i;
					var no = 1;
					for (i = 0; i < data.length; i++) {
						<?php
						if ($this->session->userdata('level') == 1) {
						?>
							html += '<tr>' +
								'<td align="center">' + no++ + '</td>' +
								'<td>' + data[i].nama + '</td>' +
								'<td width="15%" align="center">' +
								'<a href="javascript:;" data="' +
								data[i].id +
								'" class="btn btn-icon btn-sm btn-info item_edit" title="Edit"><i class="far fa-edit"></i></a>' +
								' ' +
								'<a href="javascript:;" data="' +
								data[i].id +
								'" class="btn btn-icon btn-sm btn-danger item_hapus" title="Hapus"><i class="far fa-trash-alt"></i></a>' +
								'</td>' +
								'</tr>';
							<?php
						} else {
							?>
							html += '<tr>' +
								'<td align="center">' + no++ + '</td>' +
								'<td>' + data[i].nama + '</td>';
								<?php
						} ?>
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
				url: "<?php echo site_url('kategori/get_kategori')?>",
				dataType: "JSON",
				data: {
					id: id
				},
				success: function (data) {
					$.each(data, function (id, nama) {
						$('#editModal').modal('show');
						$('[name="id"]').val(data.id);
						$('[name="nama2"]').val(data.nama);
						tampil_data_kategori();
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

		//Update
		$('#btn_update').on('click', function () {
			$.ajax({
				type: "POST",
				url: "<?php echo site_url('kategori/edit')?>",
				dataType: "JSON",
				data: {
					id: $('#id').val(),
					nama: $('#nama2').val()
				},
				success: function (data) {
					$('[name="id"]').val("");
					$('[name="nama2"]').val("");
					$('#editModal').modal('hide');
					tampil_data_kategori();
				}
			});
			return false;
		});

		//Hapus
		$('#btn_hapus').on('click', function () {
			var id = $('#textid').val();
			$.ajax({
				type: "POST",
				url: "<?php echo site_url('kategori/remove')?>",
				dataType: "JSON",
				data: {
					id: id
				},
				success: function (data) {
					$('#removeModal').modal('hide');
					tampil_data_kategori();
				}
			});
			return false;
		});

	});

</script>
