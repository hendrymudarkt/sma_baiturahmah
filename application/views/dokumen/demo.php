<section class="section">
	<div class="section-header">
		<h1>Demo Dokumen</h1>
	</div>
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
					<h4>Demo</h4>
					<div class="card-header-action">
						<?php if($this->session->userdata('level') == 1){
							echo "";
						} else{ ?>
						<a href="<?php echo site_url('dokumen/tambah_demo') ?>" class="btn btn-primary">
							<i class="fas fa-plus"></i> Tambah
						</a>
						<?php } ?>
					</div>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-striped" id="mydata">
							<thead>
								<tr>
									<th class="text-center">No</th>
									<th>Tgl Dibuat</th>
									<th>NIK</th>
									<th>Nama</th>
									<th>No Hp</th>
									<th>Jabatan</th>
									<th>Detail</th>
									<th>Status</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; foreach($demo as $d): ?>
								<tr>
									<td><?php echo $no++ ?></td>
									<td><?php echo date('H:i:s d-m-Y', strtotime($d['created_at'])) ?></td>
									<td><?php echo $d['nik'] ?></td>
									<td><?php echo $d['nama'] ?></td>
									<td><?php echo $d['no_hp'] ?></td>
									<td><?php echo $d['jabatan'] ?></td>
									<td><a href="<?php echo site_url('dokumen/view_demo/'.$d['id']) ?>" class="btn btn-icon btn-sm btn-primary"><i class="fas fa-eye"></i> Lihat</a></td>
									<td><?php echo ucwords($d['status']) ?></td>
								</tr>
									<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<script src="<?php echo site_url('dist/js/jquery.min.js'); ?>"></script>
<script type="text/javascript">
	$(document).ready(function () {
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

	});

</script>
