<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Insiden</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Insiden</a></li>
					<li class="breadcrumb-item active">Konfirmasi Insiden</li>
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
					<h3 class="card-title">Data Insiden</h3>
				</div>
				<!-- /.card-header -->
				<div class="card-body">
                    <table class="table table-striped table-bordered">
                        <tr>
                            <th rowspan="10"><?php
							$file_ext = pathinfo($insiden['file'], PATHINFO_EXTENSION);
							if ($file_ext == "jpg" || $file_ext == "png") {
							    echo "<center><img src='".base_url("lampiran/".$insiden['file'])."' width='300' height='300'></center>";
							} else{
							    echo "<center><embed src='".base_url("lampiran/".$insiden['file'])."' type='application/pdf' width='100%' height='300'></center>";
							} ?></th>
						</tr>
						<tr>
						    <th>Tanggal</th>
							<th>:</th>
							<th><?php echo date('d-m-Y', strtotime($insiden['tanggal'])) ?></th>
						</tr>
						<tr>
						    <th>Area</th>
							<th>:</th>
							<th><?php echo $insiden['area'] ?></th>
						</tr>
						<tr>
						    <th>Insiden</th>
							<th>:</th>
							<th><?php echo $insiden['insiden'] ?></th>
						</tr>
						<tr>
						    <th>Penjelasan</th>
							<th>:</th>
							<th><?php echo $insiden['penjelasan'] ?></th>
						</tr>
						<tr>
						    <th>Tipe</th>
							<th>:</th>
							<th><?php echo $insiden['tipe'] ?></th>
						</tr>
						<tr>
						    <th>Dibuat</th>
							<th>:</th>
							<th><?php echo $insiden['dibuat'] ?></th>
						</tr>
						<tr>
						    <th>Bagian</th>
							<th>:</th>
							<th><?php echo $insiden['bagian'] ?></th>
						</tr>
						<tr>
						    <th>Ditujukan</th>
							<th>:</th>
							<th><?php echo $insiden['ditujukan'] ?></th>
						</tr>
						<tr>
						    <th>Status</th>
							<th>:</th>
							<th><?php echo $insiden['status'] ?></th>
						</tr>
                    </table>
                    <?php if ($insiden['status'] == 'Selesai') {
                        $sql = $this->db->query("SELECT * FROM stat_insiden WHERE id_insiden='$insiden[id]'");
                        foreach ($sql->result() as $row): ?><br><br><br>
                    <table class="table table-striped table-bordered">
                        <tr>
                            <th rowspan="5"><?php
							$file_ext = pathinfo($row->file, PATHINFO_EXTENSION);
							if ($file_ext == "jpg" || $file_ext == "png") {
							    echo "<center><img src='".base_url("lampiran/".$row->file)."' width='300' height='300'></center>";
							} else{
							    echo "<center><embed src='".base_url("lampiran/".$row->file)."' type='application/pdf' width='100%' height='300'></center>";
							} ?></th>
                        </tr>
                        <tr>
						    <th>Akar Masalah</th>
							<th>:</th>
							<th><?php echo $row->akar_masalah ?></th>
						</tr>
                        <tr>
						    <th>Koreksi (Perbaikan Sementara)</th>
							<th>:</th>
							<th><?php echo $row->koreksi ?></th>
						</tr>
                        <tr>
						    <th>Perbaikan (Perbaikan Permanen)</th>
							<th>:</th>
							<th><?php echo $row->perbaikan ?></th>
						</tr>
						<tr>
						    <th>Tanggal Implementasi</th>
							<th>:</th>
							<th><?php echo date('d-m-Y', strtotime($row->tanggal)) ?></th>
						</tr>
                    </table>
                        <?php endforeach; }else { echo ''; } ?>
				</div>
			</div>
		</div>
	</div>
</section>