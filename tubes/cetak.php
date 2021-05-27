<!DOCTYPE html>
<html>
<head>
	<title>Data Karyawan</title>
</head>
<body>
	<div style="margin: 0 auto; width: 90%">
		<h2 align="center">Data Karyawan</h2>
		<table align="center" border="1" cellpadding="0" width="100%">
				<td align="center">No</td>
				<td align="center">NIK</td>
				<td align="center">Nama Karyawan</td>
				<td align="center">Jabatan</td>
				<td align="center">Tanggal Masuk</td>
				<td align="center">Divisi</td>
			</tr>
			<?php  
				include'koneksi.php';
				$no = 1;
				$tampil = mysqli_query($connect,"SELECT * FROM tbl_karyawan");
				if (mysqli_num_rows($tampil)>0) {
					while($hasil = mysqli_fetch_array($tampil)) {
			?>
			<tr align="center">
				<td><?php echo $no++ ?></td>
				<td><?php echo $hasil['NIK'] ?></td>
				<td><?php echo $hasil['nama_karyawan'] ?></td>
				<td><?php echo $hasil['jabatan'] ?></td>
				<td><?php echo $hasil['tgl_masuk'] ?></td>
				<td><?php echo $hasil['divisi'] ?></td>
			</tr>
			<?php }}else{ ?>
				<tr>
					<td colspan="7" align="center">Data Kosong</td>
				</tr>
			<?php } ?>
		</table>
		<h3 align="right">Penanggung Jawab</h3>
		<br>
		<br>
		<br>
		<h4 align="right">Rafi Nuril Akbar F</h4>
	</div>
</body>
</html>