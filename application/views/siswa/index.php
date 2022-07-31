<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Calon Siswa</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active">Calon Siswa</li>
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
					<h3 class="card-title">Data Calon Siswa</h3>
					<div class="float-right">
					<a href="<?php echo site_url('siswa/add') ?>" class="btn btn-primary btn-sm"
						title="Tambah"><i class="far fa-plus-square"></i></a>
					</div>
				</div>
				<!-- /.card-header -->
				<div class="card-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th class="text-center">No</th>
								<th>NIS</th>
								<th>Nama</th>
								<th>Tempat, Tgl Lahir</th>
								<th>Jenis Kelamin</th>
								<th>Nomor Hp</th>
								<th>Sekolah Asal</th>
								<th>Aksi</th>
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
								<td align="center">
									<a href="<?php echo site_url('siswa/edit/'.$s['nis']); ?>"
										class="btn btn-info btn-xs" title="Edit"><i class="fa fa-edit"></i></a>
									<a href="<?php echo site_url('siswa/remove/'.$s['nis']); ?>"
										onclick="javascriuser: return confirm('Anda yakin untuk hapus data ini?')"
										class="btn btn-danger btn-xs" title="hapus"><i
											class="fa fa-trash"></i></a>
									<a href="<?php echo site_url('siswa/view/'.$s['nis']); ?>"
										class="btn btn-success btn-xs" title="Lihat"><i class="fa fa-eye"></i></a>
								</td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>