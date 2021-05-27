<?php  
	$connect = mysqli_connect('localhost','root','','pw_tubes_203040135');

	if(!$connect) {
		echo "gagal terhubung ke database";
	}
?>