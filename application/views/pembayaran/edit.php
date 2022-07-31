<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Pembayaran</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Pembayaran</a></li>
					<li class="breadcrumb-item active">Edit Pembayaran</li>
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
				</div>
				<!-- /.card-header -->
				<div class="card-body">
                    <?php echo form_open_multipart('pembayaran/edit/'.$pembayaran['id']) ?>
                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                        <div class="row clearfix">
                            <div class="col-md-3">
                                <label for="nis"></label>
                                <input type="text" class="form-control" name="nis" id="nis" placeholder="NIS" readonly value="<?php echo $pembayaran['nis'] ?>">
                            </div>
                            <div class="col-md-3">
                                <label for="nama_bank"></label>
                                <input type="text" class="form-control" name="nama_bank" id="nama_bank" placeholder="Nama Bank" value="<?php echo $pembayaran['nama_bank'] ?>">
                            </div>
                            <div class="col-md-3">
                                <label for="rekening"></label>
                                <input type="text" class="form-control" name="rekening" id="rekening" placeholder="Nomor Rekening" value="<?php echo $pembayaran['rekening'] ?>">
                            </div>
                            <div class="col-md-3">
                                <label for="rekening_tujuan"></label>
                                <input type="text" class="form-control" name="rekening_tujuan" id="rekening_tujuan" placeholder="Nomor Rekening Tujuan (Sekolah)" value="<?php echo $pembayaran['rekening_tujuan'] ?>>
                            </div>
                            <div class="col-md-3">
                                <label for="jumlah"></label>
                                <input type="text" class="form-control" name="jumlah" id="jumlah" placeholder="Jumlah Transfer" value="<?php echo $pembayaran['jumlah_transfer'] ?>">
                            </div>
                            <div class="col-md-3">
                                <br>
                                <input class="form-control" name="tgl_transfer" id="tgl_lahir" placeholder="Tanggal Transfer" value="<?php echo $pembayaran['tgl_transfer'] ?>">
                            </div>
                            <div class="col-md-3">
                                <br>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile" name="bukti_pembayaran">
                                    <label class="custom-file-label" for="customFile">Bukti Pembayaran</label>
                                </div>
                                <img src="<?php echo site_url('bukti/'.$pembayaran['bukti_pembayaran']) ?>" alt="">
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