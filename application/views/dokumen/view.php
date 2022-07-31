<section class="section">
	<div class="section-header">
		<h1>Preview Dokumen</h1>
	</div>
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
					<h4>Detail Dokumen</h4>
					<div class="card-header-action">
						
					</div>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-striped table-bordered">
							<tr>
								<th rowspan="8"><center><embed src="<?php echo site_url("lampiran/".$dokumen['file']) ?>" type="application/pdf" width="100%" height="300"></center></th>
							</tr>
							<tr>
								<th>Judul</th>
								<th>:</th>
								<th><?php echo $dokumen['judul'] ?></th>
							</tr>
							<tr>
								<th>Tanggal Berlaku</th>
								<th>:</th>
								<th><?php echo date('d-m-Y', strtotime($dokumen['tanggal'])) ?></th>
							</tr>
							<tr>
								<th>Pemilik Dokumen</th>
								<th>:</th>
								<th><?php echo $dokumen['owner'] ?></th>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
