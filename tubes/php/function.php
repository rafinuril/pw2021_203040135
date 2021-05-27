<?php
//fungsi untuk melakukan koneksi ke database
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040135");

    return $conn;
}

//function untuk melakukan query dan memasukannya ke dalam array
function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, $sql);
    $row = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function upload()
{
    $nama_file = $_FILES['gambar']['name'];
    $tipe_file = $_FILES['gambar']['type'];
    $ukuran_file = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmp_file = $_FILES['gambar']['tmp_name'];


    // ketika tidak ada gambar yang di pilih
    if ($error == 4) {
        //     echo "<script>
        //             alert('pilih gambar terlebih dahulu!');
        //         </script>";
        // } else {
        //     echo "data gagal di tambahkan!";
        return 'nophoto.png';
    }

    // cek ekstensi file
    $daftar_gambar = ['jpg', 'jpeg', 'png'];
    $ekstensi_file = explode('.', $nama_file);
    $ekstensi_file = strtolower(end($ekstensi_file));
    if (!in_array($ekstensi_file, $daftar_gambar)) {
        echo "<script>
            alert('yang anda pilih bukan gambar!');
        </script>";
        return false;
    }

    // cek type file
    if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
        echo "<script>
        alert('yang anda pilih bukan gambar!');
    </script>";
        return false;
    }

    // cek ukuran file
    // maksimal 5Mb == 5000000 
    if ($ukuran_file > 500000) {
        echo "<script>
        alert('gambar yang anda pilih terlalu besar!');
    </script>";
        return false;
    }

    // lolos pengecekan
    // siap upload file
    // generate nama file baru
    $nama_file_baru = uniqid();
    $nama_file_baru .= '.';
    $nama_file_baru .= $ekstensi_file;
    move_uploaded_file($tmp_file, '../assets/gambar/' . $nama_file_baru);

    return $nama_file_baru;
}



// fungsi untuk menambahkan data di dalam database
function tambah($buku)
{
    $conn = koneksi();

    // $gambar = htmlspecialchars($anim['gambar']);
    $Judul = htmlspecialchars($buku['Judul']);
    $Pengarang = htmlspecialchars($buku['Pengarang']);
    $Terbit = htmlspecialchars($buku['Terbit']);
    $Dimensi = htmlspecialchars($buku['Dimensi']);
    $ISBN = htmlspecialchars($buku['ISBN']);

    // upload gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    // if ($gambar == 'nophoto.png') {
    //     $gambar = $gambar_lama;
    // }

    $query = "INSERT INTO buku
                VALUES
             ('', '$gambar', '$Judul', '$Pengarang', '$Terbit', '$Dimensi', '$ISBN')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// fungsi untuk menghapus data di dalam database



function hapus($id)
{
    $conn = koneksi();

    // menghapus gambar di folder gambar
    $anim = query("SELECT * FROM buku WHERE id = $id")[0];
    if ($buku['gambar'] != 'nophoto.png') {
        unlink('../assets/gambar/' . $buku['gambar']);
    }


    mysqli_query($conn, "DELETE FROM buku WHERE id = $id") or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function ubah($buku)
{
    $conn = koneksi();

    $id = htmlspecialchars($buku["id"]);
    $gambar_lama = htmlspecialchars($buku["gambar_lama"]);
    $Judul = htmlspecialchars($buku["Judul"]);
    $Pengarang = htmlspecialchars($buku["Pengarang"]);
    $Terbit = htmlspecialchars($buku["Terbit"]);
    $Dimensi = htmlspecialchars($buku["Dimensi"]);
    $ISBN = htmlspecialchars($buku["ISBN"]);

    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    if ($gambar == 'nophoto.png') {
        $gambar = $gambar_lama;
    }


    $query = "UPDATE anime SET
				gambar = '$gambar',
				Judul = '$Judul',
				Pengarang = '$Pengarang',
                Terbit = '$Terbit',
				Dimensi = '$Dimensi',
				ISBN = '$ISBN'
			  WHERE id = '$id'
			";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword)
{

    $conn = koneksi();

    $query = "SELECT * FROM buku
    WHERE 
    Judul LIKE '%$keyword%' OR
    Pengarang LIKE '%$keyword%' OR
    Terbit LIKE '%$keyword%' OR
    Dimensi LIKE '%$keyword%' OR
    ISBN LIKE '%$keyword%'
    ";


    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}


function login($data)
{
    $conn = koneksi();

    $username = htmlspecialchars($data['username']);
    $password = htmlspecialchars($data['password']);

    // cek dulu username 
    if ($user = query("SELECT * FROM user WHERE username = '$username'")) {
        // cek password
        if (password_verify($password, $user['password'])) {
            // set session
            $_SESSION['login'] = true;

            header("Location: index.php");
            exit;
        }
    }
    return [
        'error' => true,
        'pesan' => 'Username / Password Salah!'
    ];
}

function registrasi($buku)
{
    $conn = koneksi();
    $username = strtolower(stripcslashes($anim["username"]));
    $password = mysqli_real_escape_string($conn, $anim["password"]);

    // cek username sudah ada atau belum

    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('username sudah dipakai');
            </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambah user baru
    $query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}