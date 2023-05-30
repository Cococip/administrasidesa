<!DOCTYPE html>
<html lang="en">

<head>
	<title>CETAK SURAT</title>
	<style type="text/css">
		body {font-family: arial; background-color: #ccc;}
		.rangkasurat {width: 900px; margin: 0 auto; background-color: #fff; height: 500px;padding: 20px;}
		.table {border-bottom: 5px solid #000;padding: 2px;}
		.tengah {text-align: center;,line-height: 5px;}
	</style>
</head>

<body>
	<div class="rankasurat">
	<table width="100%" class="table">
		<tr>
			<td><img src="/sidawa/assets/dist/img/jkt.png" width="120px"></td>
			<td class="tengah">
				<h2>RUKUN TENANGGA 006/013</h2>
				<h3>KELURAHAN DURI KOSAMBI KECAMATAN CENGKARENG
				<br>KOTA ADMINISTRASI JAKARTA BARAT 11750</h3>
				<h5> Seketriat Jl H Sanusi RT 006/013 Kel Duri Kosambi Cengkareng HP 0815 1372 7718</h5>
			</td>
		</tr>
	</table>
	</div>
</body>
	<center>
		<h4>
			<u>SURAT KETARANGAN PENGANTAR</u>
		</h4>
		<h4>No Surat :
			<?php echo $row->id_warga ?>/SKD/0<?php echo $row->rt ?>/<?php echo $row->rw ?>/JB/
			<?php echo $tgl ?>
		</h4>
	</center>
	<p>Yang bertandatangan dibawah ini, pengurus RT 0<?php echo $row->rt ?>/<?php echo $row->rw ?> Kelurahan Duri Kosambi Kecamatan Cengkareng Kota Administrasi Jakarta Barat Dengan ini menerangkan :</P>
	<table>
		<tbody>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>
					<?php echo $row->nama; ?>
				</td>
			</tr>
			<tr>
				<td>Jenis Jelamin</td>
				<td>:</td>
				<td>
					<?php echo $row->jk; ?>
				</td>
			</tr>
			<tr>
				<td>TTL</td>
				<td>:</td>
				<td>
					<?php echo $row->tempat_lahir; ?>/
					<?php echo $row->tgl_lahir; ?>
				</td>
			</tr>
			<tr>
				<td>NIK</td>
				<td>:</td>
				<td>
					<?php echo $row->nik; ?>
				</td>
			</tr>
			<tr>
				<td>Agama</td>
				<td>:</td>
				<td>
					<?php echo $row->agama; ?>
				</td>
			</tr>
			<tr>
				<td>Status Kawin</td>
				<td>:</td>
				<td>
					<?php echo $row->kawin; ?> kawin
				</td>
			</tr>
			<tr>
				<td>Tempat Tinggal</td>
				<td>:</td>
				<td>
					<?php echo $row->kelurahan; ?>,RT 0<?php echo $row->rt ?>/RW <?php echo $row->rw ?>
				</td>
			</tr>
			<tr>
				<td>Keperluan</td>
				<td>:</td>
				<td>
					<input type="checkbox" name="">Melamar Pekerjaan<br>
					<input type="checkbox" name="">Membuat KTP Baru<br>
					<input type="checkbox" name="">Membuat KK Baru<br>
					<input type="checkbox" name="">Membuat Akta Kelahiran<br>
					<input type="checkbox" name="">Membuat Akta Kematian<br>
					<input type="checkbox" name="">Mengurus Surat Nikah<br>
					<input type="checkbox" name="">Membuat SKCK Kepolisian<br>
					<input type="checkbox" name="">Membuat SKU<br>
				</td>
			</tr>
			<tr>
				<td>Keterangan</td>
				<td>:</td>
				<td>
					..................................................................................................................................................................................<br>
					..................................................................................................................................................................................
					..................................................................................................................................................................................<br>
					..................................................................................................................................................................................
					
				</td>
			</tr>
			
		</tbody>
	</table>
	<p>Demikian keterangan ini kami berikan agar dapat dipergunakan sebagaimana Mestinya.</P>
	<br>
	<p align="right">
		Jakarta Barat,
		<?php echo $tgl; ?>
		<br> Ketua RT 0<?php echo $row->rt ?>/RW <?php echo $row->rw ?>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>(..................................)
	</p>


	<script>
		window.print();
	</script>

</body>

</html>