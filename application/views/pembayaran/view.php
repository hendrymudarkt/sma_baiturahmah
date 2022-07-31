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
					<li class="breadcrumb-item active">Data Pembayaran</li>
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
								<th rowspan="11"><center><a href="<?php echo site_url('bukti/'.$pembayaran['bukti_pembayaran']) ?>"><img src="<?php echo site_url('bukti/'.$pembayaran['bukti_pembayaran']) ?>" width="200" height="200"></a></center></th>
							</tr>
							<tr>
								<th>NIS</th>
								<th>:</th>
								<th><?php echo $pembayaran['nis'] ?></th>
							</tr>
							<tr>
								<th>Nama Bank</th>
								<th>:</th>
								<th><?php echo $pembayaran['nama_bank'] ?></th>
							</tr>
							<tr>
								<th>Rekening</th>
								<th>:</th>
								<th><?php echo $pembayaran['rekening'] ?></th>
                            </tr>
							<tr>
								<th>Rekening Tujuan</th>
								<th>:</th>
								<th><?php echo $pembayaran['rekening_tujuan'] ?></th>
                            </tr>
                            <tr>
								<th>Jumlah Transfer</th>
								<th>:</th>
								<th><?php echo "Rp. ".number_format($pembayaran['jumlah']) ?></th>
							</tr>
                            <tr>
								<th>Tanggal Transfer</th>
								<th>:</th>
								<th><?php echo date('d-m-Y', strtotime($pembayaran['tgl_transfer'])) ?></th>
							</tr>
                            <tr>
								<th>Status</th>
								<th>:</th>
								<th><?php echo $pembayaran['status'] ?></th>
							</tr>
                        </table>
					</div>
				</div>
			</div>
			<div class="card-footer">
				<?php echo form_open('pembayaran/diterima/'.$pembayaran['id']) ?>
					<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
					<input type="hidden" name="nis" value="<?php echo $pembayaran['nis'] ?>">
					<a href="<?php echo site_url('pembayaran/index'); ?>" class="btn btn-default"><span class="fa fa-arrow-left"></span> Kembali</a>
					<?php
					if ($pembayaran['status'] == "Diterima") {
						echo "";
					}else{ ?>
						<button type="submit" class="btn btn-success float-right" onclick="javascriuser: return confirm('Anda yakin untuk menerima pembayaran ini?')"><span class="fa fa-check"></span> Terima</button>
					<?php } ?>
				<?php echo form_close() ?>
			</div>
		</div>
    </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->