<?php 

/* 
---------------------------
Array Associative
Keynya adalah string yang dibuat sendiri
---------------------------
contoh sederhana
$mahasiswa = [
    "nama" => "Kalam", 
    "nrp" => "203040123",
    "email" => "kalam",
    "jurusan" => "Teknik Informatika"
];
echo $mahasiswa["jurusan"];
---------------------------
contoh multidimensi
$mahasiswa = [
    [
        "nama" => "Rafi Nuril", 
        "nrp" => "203040135", 
        "jurusan" => "Teknik Informatika", 
        "email" => "rafinafirmansyah29@gmail.com"
    ],
    [
        "nama" => "Zulfikar", 
        "nrp" => "203010453", 
        "jurusan" => "Teknik Industri", 
        "email" => "zull@gmail.com"
    ],
    [
        "nama" => "Ferdin", 
        "nrp" => "203030111", 
        "jurusan" => "Teknik Mesin", 
        "email" => "din@gmail.com"
    ]
];
            indexnya    indexnya string
                \       |
echo $mahasiswa[1]["nama"];
---------------------------
*/

$films = [
    [
        "judul" => "Godzilla vs Kong", 
        "sutradara" => "Adam Wingard", 
        "rilis" => "2021", 
        "genre" => "Sci-fi Action",
        "gambar" => "monster.jpg"
    ],
    [
        "judul" => "Tenet", 
        "sutradara" => "Christoper Nolan", 
        "rilis" => "2020", 
        "genre" => "Sci-fi Action",
        "gambar" => "tenet.jpg"
    ],
    [
        "judul" => "Avenger End Game", 
        "sutradara" => "Kevin Feige", 
        "rilis" => "2019", 
        "genre" => "Sci-fi Action",
        "gambar" => "avenger.jpg"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>

<h1>Daftar Film</h1>

<?php foreach( $films as $film ) : ?>
    <ul>
        <li>
            <img src="img/<?= $film["gambar"]; ?>">
        </li>
        <li>Judul : <?= $film["judul"] ?></li>
        <li>Sutradara : <?= $film["sutradara"] ?></li>
        <li>Rilis : <?= $film["rilis"] ?></li>
        <li>Genre : <?= $film["genre"] ?></li>
    </ul>
<?php endforeach ?>
    
</body>
</html>