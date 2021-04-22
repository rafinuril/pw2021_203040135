<!-- 
RAFI NURIL AKBAR F
203040135
JAM PRAKTIKUM 13:00 
-->

<?php

// Fungsi untuk melakukan koneksi ke database
function koneksi()
{
    // Melakukan koneksi ke database
    $conn = mysqli_connect("localhost", "root", "");

    // Memilih database
    mysqli_select_db($conn, "pw_tubes_203040135");

    return $conn;
}

// Fungsi untuk melakukan query dan memasukan array kedalamnya
function query($sql)
{
    $conn = koneksi();

    // Query dari database
    $result = mysqli_query($conn, $sql);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function tambah($data)
{
    $conn = koneksi();

    $picture = htmlspecialchars($data["picture"]);
    $name = htmlspecialchars($data["name"]);
    $brand = htmlspecialchars($data["brand"]);
    $description = htmlspecialchars($data["description"]);
    $category = htmlspecialchars($data["category"]);
    $price = htmlspecialchars($data["price"]);

    $query = "INSERT INTO products
                VALUES 
                ('', '$picture', '$name', '$brand', '$description', '$category', '$price')
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = koneksi();

    mysqli_query($conn, "DELETE FROM products WHERE id  = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi();

    $id = htmlspecialchars($data["id"]);
    $picture = htmlspecialchars($data["picture"]);
    $name = htmlspecialchars($data["name"]);
    $brand = htmlspecialchars($data["brand"]);
    $description = htmlspecialchars($data["description"]);
    $category = htmlspecialchars($data["category"]);
    $price = htmlspecialchars($data["price"]);

    $query = "UPDATE products SET
            picture = '$picture',
            name = '$name', 
            brand = '$brand', 
            description = '$description', 
            category = '$category',
            price = '$price'
            WHERE id = $id
    ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function register($data)
{
    $conn = koneksi();
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    // cek username sudah ada apa belum
    $result  = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>
          alert('Username already used');
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
