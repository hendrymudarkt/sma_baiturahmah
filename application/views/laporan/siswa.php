<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Siswa Diterima</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active">Siswa Diterima</li>
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
					<h3 class="card-title">Data Siswa Diterima</h3>
				</div>
				<!-- /.card-header -->
				<div class="card-body">
					<table id="example12" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th class="text-center">No</th>
								<th>NIS</th>
								<th>Nama</th>
								<th>Tempat, Tgl Lahir</th>
								<th>Jenis Kelamin</th>
								<th>Nomor Hp</th>
								<th>Sekolah Asal</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1;
                            foreach ($siswa as $s): ?>
							<tr>
								<td><?php echo $no++ ?></td>
								<td><?php echo $s['nis'] ?></td>
								<td><?php echo $s['nama'] ?></td>
								<td><?php echo $s['tmpt_lahir'].", ".date('d/m/Y', strtotime($s['tgl_lahir'])) ?></td>
								<td><?php echo $s['jenis_kelamin'] ?></td>
								<td><?php echo $s['no_hp'] ?></td>
								<td><?php echo $s['sekolah_asal'] ?></td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>