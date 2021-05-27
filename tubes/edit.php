<?php
include'koneksi.php';
$edit = mysqli_query($connect,"SELECT * FROM tbl_karyawan WHERE NIK = '".$_GET['NIK']."'");
$result = mysqli_fetch_array($edit);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halam Input Data Karyawan</title>
</head>
<body>
	<h2 style="padding: 1px 20px;">Input Data Karyawan</h2>
	<form action="" method="POST">
		<table style="padding: 1px 20px">
			<tr>
				<td>NIK</td>
				<td>:</td>
				<td><input type="text" name="NIK" placeholder="NIK"></td>
			</tr>
			<tr>
				<td>Nama Karyawan</td>
				<td>:</td>
				<td><input type="text" name="nama_karyawan" placeholder="Nama Karyawan"></td>
			</tr>
			<tr>
				<td>Jabatan</td>
				<td>:</td>
				<td><input type="text" name="jabatan" placeholder="Jabatan"></td>
			</tr>
			<tr>
				<td>Tanggal Masuk</td>
				<td>:</td>
				<td><input type="date" name="tgl_masuk" placeholder="Tanggal Masuk"></td>
			</tr>
			<tr>
				<td>Divisi</td>
				<td>:</td>
				<td><input type="text" name="divisi" placeholder="Divisi"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="simpan" value="Simpan"></td>
			</tr>
		</table>
	</form>
	<?php 
		include'koneksi.php';
		if(isset($_POST["simpan"])) {
			$NIK = $_POST['NIK'];
			$nama_karyawan = $_POST['nama_karyawan'];
			$jabatan = $_POST['jabatan'];
			$tgl_masuk = $_POST['tgl_masuk'];
			$divisi = $_POST['divisi'];
			$input = "INSERT INTO tbl_karyawan values ('$NIK','$nama_karyawan','$jabatan','$tgl_masuk','$divisi')";
			mysqli_query($connect,$input);
			header('location:index.php');
		}
	 ?>
</body>
</html>