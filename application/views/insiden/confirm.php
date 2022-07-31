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
                    <form action="<?php echo site_url('insiden/confirm/'.$insiden['id']) ?>" method="post" enctype="multipart/form-data">
                        <div class="row clearfix">
                            <div class="col-md-6">
                                <input type="hidden" class="form-control" name="id_insiden" id="id_insiden" value="<?php echo $insiden['id'] ?>">
                                <label for="akar_masalah">Akar Masalah</label>
                                <input type="text" class="form-control" name="akar_masalah" id="akar_masalah" placeholder="Akar Masalah">
                            </div>
                            <div class="col-md-6">
                                <label for="koreksi">Koreksi (Tindakan Sementara)</label>
                                <input type="text" class="form-control" name="koreksi" id="koreksi" placeholder="Koreksi (Tindakan Sementara)">
                            </div>
                            <div class="col-md-6">
                                <label for="perbaikan">Perbaikan (Tindakan Permanen)</label>
                                <input type="text" class="form-control" name="perbaikan" id="perbaikan" placeholder="Perbaikan (Tindakan Permanen)">
                            </div>
                            <div class="col-md-3">
                                <label for="tanggal">Tanggal Implementasi</label>
                                <input type="date" class="form-control" name="tanggal" id="tanggal" placeholder="Tanggal Implementasi">
                            </div>
                            <div class="col-md-3">
                                <label for="files">Upload Dokumen/Photo</label>
                                <input type="file" class="form-control" name="files" id="files">
                            </div>
                        </div>
                        <div class="modal-footer bg-whitesmoke br">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>  
                    </form>
				</div>
			</div>
		</div>
	</div>
</section>