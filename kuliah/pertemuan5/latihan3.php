<?php  
$mahasiswa = [
	["Rafi Nuril Akbar F", "203040135", "Teknik Informatika", "rafinafirmansyah29@gmail.com"],
	["Doddy Ferdiansyah", "203040130", "Teknik Informatika", "dodyferdiansyah@gmail.com"],
	["Erik", "203040140", "Teknik Informatika", "erik@gmail.com"]
];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<?php foreach( $mahasiswa as $mhs ) : ?>
<ul>
	<li>Nama : <?= $mhs[0]; ?></li>
	<li>NRP : <?= $mhs[1]; ?></li>
	<li>Jurusan : <?= $mhs[2]; ?></li>
	<li>Email : <?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>
</body>
</html>