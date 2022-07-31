<?php
function tgl_indo($tanggal){
	$bulan = array (
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', $tanggal);
	
	// variabel pecahkan 0 = tanggal
	// variabel pecahkan 1 = bulan
	// variabel pecahkan 2 = tahun
 
	return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}
?>
<section class="section">
	<div class="section-header">
		<h1>Demo Dokumen</h1>
	</div>
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
					<h4>Tambah Demo</h4>
				</div>
				<div class="card-body">
					<form method="post" action="<?php echo site_url('dokumen/tambah_demo') ?>">
					<?php 
						$data = $this->db->query("SELECT max(id) as maxKode FROM demo");
						foreach ($data->result() as $row) {
							$kode = $row->maxKode;
						};
						$noUrut = (int) substr($kode, 3, 3);
						$noUrut++;
					?>
					<input type="hidden" name="id" value="<?php echo sprintf("%03s", $noUrut) ?>">
					<table width="100%">
						<tr>
							<td width="15%">
								<img src="<?php echo site_url('dist/img/sinergi.png') ?>" alt="logo" width="200">
							</td>
							<td align="center">
								<h2>Sinergi Consulting</h2>
								<h5>18 Office Park. Lt 10 A, Jl. TB. Simatupang, Jakarta Selatan 12190</h5>
								<h6>Telepon: 021-2222-5438  |  Email: cs@sinergisatusolusi.co.id</h6>
							</td>
						</tr>
					</table><hr style="border-top: 3px double #8c8b8b;">
					<div class="float-right">Jakarta, <?php echo tgl_indo(date('Y-m-d')) ?></div>
					<table>
						<tr>
							<td>Kepada Yth.,</td>
						</tr>
						<tr>
							<td>Personalia PT. Sinergi Consulting</td>
						</tr>
						<tr>
							<td>Di Jakarta</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
						</tr>
						<tr>
							<td>Hal : Surat Izin Cuti Kerja</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
						</tr>
						<tr>
							<td>Dengan Hormat,</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
						</tr>
						<tr>
							<td>Yang bertanda tangan di bawah ini,</td>
						</tr>
					</table>
					<table width="40%">
						<tr>
							<td width="15%">&nbsp;</td>
							<td width="30%">NIK</td>
							<td>:</td>
							<td><?php echo $demo['nik'] ?></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>Nama</td>
							<td>:</td>
							<td><?php echo $demo['nama'] ?></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>No Hp</td>
							<td>:</td>
							<td><?php echo $demo['no_hp'] ?></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>Jabatan</td>
							<td>:</td>
							<td><?php echo $demo['jabatan'] ?></td>
						</tr>
					</table><br>
					<table width="100%">
						<tr>
							<td><font align="justify"><?php echo $demo['alasan'] ?></font></td>
						</tr>
					</table><br>
					<div class="float-right">
						<table>
							<tr>
								<td style="text-align:center">Hormat Saya,</td>
							</tr>
							<tr>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td style="text-align:center">(<?php echo $demo['nama'] ?>)</td>
							</tr>
						</table>
					</div>
					<div class="float-right">
						<?php
							if ($this->session->userdata('level') == 3 && $demo['status'] == 'pending') {
								echo "";
							}
							else if($demo['status'] == 'pending'){ ?>
								<a href="<?php echo site_url('dokumen/confirm/'.$demo['id']); ?>" class="btn btn-success"><span class="fa fa-check"></span> Setujui</a>
								<a href="<?php echo site_url('dokumen/unconfirm/'.$demo['id']); ?>" class="btn btn-danger"><span class="fa fa-times"></span> Tidak Setuju</a>
							<?php }else{
								echo "";
							}
						?>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
