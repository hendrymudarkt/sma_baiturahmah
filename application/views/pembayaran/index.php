<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Pembayaran</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active">Pembayaran</li>
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
					<h3 class="card-title">Data Pembayaran</h3>
					<div class="float-right">
					<a href="<?php echo site_url('pembayaran/add') ?>" class="btn btn-primary btn-sm"
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
								<th>Nama Bank</th>
								<th>Rekening</th>
								<th>Rekening Tujuan</th>
								<th>Jumlah Transfer</th>
								<th>Tgl Transfer</th>
								<th>Bukti Pembayaran</th>
								<th>Status</th>
								<?php
								if ($this->session->userdata('sebagai') != "admin") {
									echo "";
								}else{ ?>
								<th>Aksi</th>
								<?php } ?>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1;
							foreach ($pembayaran as $s): ?>
							<tr>
								<td><?php echo $no++ ?></td>
								<td><?php echo $s['nis'] ?></td>
								<td><?php echo $s['nama_bank'] ?></td>
								<td><?php echo $s['rekening'] ?></td>
								<td><?php echo $s['rekening_tujuan'] ?></td>
								<td><?php echo "Rp. ".number_format($s['jumlah']) ?></td>
								<td><?php echo date('d-m-Y', strtotime($s['tgl_transfer'])) ?></td>
								<td><center><a href="<?php echo site_url('bukti/'.$s['bukti_pembayaran']) ?>"><img src="<?php echo site_url('bukti/'.$s['bukti_pembayaran']) ?>" height="100px" width="100px"></a></center></td>
								<td><?php echo $s['status'] ?></td>
								<?php
								if ($this->session->userdata('sebagai') != "admin") {
									echo "";
								}else{ ?>
								<td align="center">
									<!-- <a href="<?php echo site_url('pembayaran/edit/'.$s['nis']); ?>"
										class="btn btn-info btn-xs" title="Edit"><i class="fa fa-edit"></i></a>
									<a href="<?php echo site_url('pembayaran/remove/'.$s['nis']); ?>"
										onclick="javascriuser: return confirm('Anda yakin untuk hapus data ini?')"
										class="btn btn-danger btn-xs" title="hapus"><i
											class="fa fa-trash"></i></a> -->
									<a href="<?php echo site_url('pembayaran/view/'.$s['id']); ?>"
										class="btn btn-success btn-xs" title="Lihat"><i class="fa fa-eye"></i></a>
								</td>
								<?php } ?>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>