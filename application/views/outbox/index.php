<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Outbox</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active">Outbox</li>
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
					<h3 class="card-title">Data Outbox</h3>
				</div>
				<!-- /.card-header -->
				<div class="card-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th class="text-center">No</th>
								<th>Terkirim</th>
								<th>Nomor</th>
								<th>Pesan</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1;
							foreach ($outbox as $s): ?>
							<tr>
								<td><?php echo $no++ ?></td>
								<td><?php echo $s['DeliveriDateTime'] ?></td>
								<td><?php echo $s['DestinationNumber'] ?></td>
								<td><?php echo $s['TextDecoded'] ?></td>
								<td><?php echo $s['Status'] ?></td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>