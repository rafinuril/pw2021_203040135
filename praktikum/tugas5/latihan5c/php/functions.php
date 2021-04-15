<!-- 
RAFI NURIL AKBAR FIRMANSYAH
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
