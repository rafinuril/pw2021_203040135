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
    mysqli_select_db($conn, "tubes");

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
