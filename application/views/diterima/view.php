<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Calon Siswa</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Calon Siswa</a></li>
					<li class="breadcrumb-item active">Data Calon Siswa</li>
				</ol>
			</div>
		</div>
	</div><!-- /.container-fluid -->
</section>


<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
      	<div class="card">
			<div class="card-body">
				<div class="row clearfix">
					<div class="col-md-12">
						<table class="table table-striped table-bordered">
							<tr>
								<th rowspan="11"><center><img src="<?php echo site_url('photo/'.$siswa['photo']) ?>" width="200" height="200"></center></th>
							</tr>
							<tr>
								<th>NIS</th>
								<th>:</th>
								<th><?php echo $siswa['nis'] ?></th>
							</tr>
							<tr>
								<th>Nama</th>
								<th>:</th>
								<th><?php echo $siswa['nama'] ?></th>
							</tr>
							<tr>
								<th>Tempat, Tgl Lahir</th>
								<th>:</th>
								<th><?php echo $siswa['tmpt_lahir'].", ".date('d-m-Y', strtotime($siswa['tgl_lahir'])) ?></th>
                            </tr>
                            <tr>
								<th>Jenis Kelamin</th>
								<th>:</th>
								<th><?php echo $siswa['jenis_kelamin'] ?></th>
							</tr>
                            <tr>
								<th>Alamat Asal</th>
								<th>:</th>
								<th><?php echo $siswa['alamat_asal'] ?></th>
							</tr>
                            <tr>
								<th>Alamat Sekarang</th>
								<th>:</th>
								<th><?php echo $siswa['alamat_sekarang'] ?></th>
							</tr>
                            <tr>
								<th>No Hp</th>
								<th>:</th>
								<th><?php echo $siswa['no_hp'] ?></th>
							</tr>
                            <tr>
								<th>Agama</th>
								<th>:</th>
								<th><?php echo $siswa['agama'] ?></th>
							</tr>
                            <tr>
								<th>Sekolah Asal</th>
								<th>:</th>
								<th><?php echo $siswa['sekolah_asal'] ?></th>
							</tr>
                            <tr>
								<th>Nilai Rata-rata</th>
								<th>:</th>
								<th><?php echo $siswa['nilai'] ?></th>
							</tr>
                        </table>
                        <table class="table table-striped table-bordered">
                            <tr>
								<th>Nama Ayah</th>
								<th>:</th>
								<th><?php echo $siswa['nama_ayah'] ?></th>
							</tr>
                            <tr>
								<th>Pekerjaan Ayah</th>
								<th>:</th>
								<th><?php echo $siswa['pekerjaan_ayah'] ?></th>
							</tr>
                            <tr>
								<th>Pendidikan Ayah</th>
								<th>:</th>
								<th><?php echo $siswa['pendidikan_ayah'] ?></th>
							</tr>
                            <tr>
								<th>Nama Ibu</th>
								<th>:</th>
								<th><?php echo $siswa['nama_ibu'] ?></th>
							</tr>
                            <tr>
								<th>Pekerjaan Ibu</th>
								<th>:</th>
								<th><?php echo $siswa['pekerjaan_ibu'] ?></th>
							</tr>
                            <tr>
								<th>Pendidikan Ibu</th>
								<th>:</th>
								<th><?php echo $siswa['pendidikan_ibu'] ?></th>
							</tr>
                        </table>
					</div>
				</div>
			</div>
			<div class="card-footer">
            <a href="<?php echo site_url('siswa/terima'); ?>" class="btn btn-default"><span class="fa fa-arrow-left"></span> Kembali</a> 
			</div>
		</div>
    </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->