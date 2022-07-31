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
					<li class="breadcrumb-item active">Edit Calon Siswa</li>
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
				</div>
				<!-- /.card-header -->
				<div class="card-body">
                    <?php echo form_open_multipart('siswa/edit/'.$siswa['nis']) ?>
                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                        <div class="row clearfix">
                            <div class="col-md-3">
                                <label for="nis"></label>
                                <input type="text" class="form-control" name="nis" id="nis" placeholder="NIS" value="<?php echo $siswa['nis'] ?>">
                            </div>
                            <div class="col-md-3">
                                <label for="nama"></label>
                                <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?php echo $siswa['nama'] ?>">
                            </div>
                            <div class="col-md-3">
                                <label for="tmpt_lahir"></label>
                                <input type="text" class="form-control" name="tmpt_lahir" id="tmpt_lahir" placeholder="Tempat Lahir" value="<?php echo $siswa['tmpt_lahir'] ?>">
                            </div>
                            <div class="col-md-3">
                                <br>
                                <input class="form-control" name="tgl_lahir" id="tgl_lahir" placeholder="Tanggal Lahir" value="<?php echo $siswa['tgl_lahir'] ?>">
                            </div>
                            <div class="col-md-6">
                                <label for="alamat_sekarang"></label>
                                <input type="text" class="form-control" name="alamat_sekarang" id="alamat_sekarang" placeholder="Alamat Sekarang" value="<?php echo $siswa['alamat_sekarang'] ?>">
                            </div>
                            <div class="col-md-6">
                                <label for="alamat_asal"></label>
                                <input type="text" class="form-control" name="alamat_asal" id="alamat_asal" placeholder="Alamat Asal" value="<?php echo $siswa['alamat_asal'] ?>">
                            </div>
                            <div class="col-md-3">
                                <label for="jenis_kelamin"></label>
                                <select name="jenis_kelamin" class="form-control">
                                    <option value="<?php echo $siswa['jenis_kelamin'] ?>"><?php echo $siswa['jenis_kelamin'] ?></option>
                                    <option value="L">L</option>
                                    <option value="P">P</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="no_hp"></label>
                                <input type="number" class="form-control" name="no_hp" id="no_hp" placeholder="Nomor Hp" value="<?php echo $siswa['no_hp'] ?>">
                            </div>
                            <div class="col-md-3">
                                <label for="agama"></label>
                                <select name="agama" class="form-control">
                                    <option value="<?php echo $siswa['agama'] ?>"><?php echo $siswa['agama'] ?></option>
                                    <option value="Islam">Islam</option>
                                    <option value="Katholik">Katholik</option>
                                    <option value="Protestan">Protestan</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Buddha">Buddha</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="sekolah_asal"></label>
                                <input type="text" class="form-control" name="sekolah_asal" id="sekolah_asal" placeholder="Sekolah Asal" value="<?php echo $siswa['sekolah_asal'] ?>">
                            </div>
                            <div class="col-md-3">
                                <label for="nilai"></label>
                                <input type="text" class="form-control" name="nilai" id="nilai" placeholder="Nilai Rata-rata" value="<?php echo $siswa['nilai'] ?>">
                            </div>
                            <div class="col-md-3">
                                <br>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile" name="photo">
                                    <label class="custom-file-label" for="customFile">Photo</label>
                                </div>
                                <small><?php echo $siswa['photo'] ?></small>
                            </div>
                            <div><br><br><br><br></div>
                            <div class="col-md-12">
                                <label for="">Data Orangtua</label>
                            </div>
                            <div class="col-md-4">
                                <label for="nama_ayah"></label>
                                <input type="text" class="form-control" name="nama_ayah" id="nama_ayah" placeholder="Nama Ayah" value="<?php echo $siswa['nama_ayah'] ?>">
                            </div>
                            <div class="col-md-4">
                                <label for="pekerjaan_ayah"></label>
                                <input type="text" class="form-control" name="pekerjaan_ayah" id="pekerjaan_ayah" placeholder="Pekerjaan Ayah" value="<?php echo $siswa['pekerjaan_ayah'] ?>">
                            </div>
                            <div class="col-md-4">
                                <label for="pendidikan_ayah"></label>
                                <input type="pendidikan_ayah" class="form-control" name="pendidikan_ayah" id="pendidikan_ayah" placeholder="Pendidikan Ayah" value="<?php echo $siswa['pendidikan_ayah'] ?>">
                            </div>
                            <div class="col-md-4">
                                <label for="nama_ibu"></label>
                                <input type="text" class="form-control" name="nama_ibu" id="nama_ibu" placeholder="Nama Ibu" value="<?php echo $siswa['nama_ibu'] ?>">
                            </div>
                            <div class="col-md-4">
                                <label for="pekerjaan_ibu"></label>
                                <input type="text" class="form-control" name="pekerjaan_ibu" id="pekerjaan_ibu" placeholder="Pekerjaan Ibu" value="<?php echo $siswa['pekerjaan_ibu'] ?>">
                            </div>
                            <div class="col-md-4">
                                <label for="pendidikan_ibu"></label>
                                <input type="pendidikan_ibu" class="form-control" name="pendidikan_ibu" id="pendidikan_ibu" placeholder="Pendidikan Ibu" value="<?php echo $siswa['pendidikan_ibu'] ?>">
                            </div>
                        </div>
                </div>
                <div class="card-footer">
                    <input type="submit" name="simpan" class="btn btn-primary" value="Simpan">
                    <?php echo form_close() ?>
                </div>
			</div>
		</div>
	</div>
</section>