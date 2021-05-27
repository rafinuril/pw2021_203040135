<?php 
	session_start();
	include'koneksi.php';
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Halaman Login Karyawan</title>
 	<link rel="stylesheet" type="text/css" href="login.css">
 </head>
 <body>
 	<div id="utama">
 		<div id="header">
 			Halaman Login Karyawan
 		</div>
 		<div id="inputan">
 			<form action="index.php" method="post">
 				<div>
 					<input type="text" name="username" placeholder="username" class="log" />
 				</div>
 				<div style="margin-top: 10px;">
 					<input type="password" name="password" placeholder="Password" class="log" />
 				</div>
 				<div style="margin-top: 10px;">
 					<input type="submit" name="login" value="Login" class="lg">
 				</div>
 			</form>
 			<?php 
 				if (isset($_POST['login'])) {
 					$user = @$_POST['username'];
 					$pass = @$_POST['password'];
 					$qry = mysqli_query($conn, "select * from tbl_karyawan where username='$user' and password = md5('$pass')");
 					$cek = mysqli_num_rows($qry);
 					if ($cek==1) {
 						$_SESSION['userweb']=$user;
 						header("location:index.php");
 						exit;
 					} else {
 						?><script type="text/javascript">alert("Username / Password Salah");</script> <?php
 					}
 				}
 			 ?>
 		</div>
 	</div>
 </body>
 </html>