<?php 
	include'koneksi.php';
	if(isset($_GET['NIK'])) {
		$hapus = mysqli_query($connect,"DELETE FROM tbl_karyawan WHERE NIK = '".$_GET['NIK']."'");
		header('location:index.php');
	}
 ?>