<?php
/*
    Rafi Nuril Akbar Firmansyah
    203040135
    Jumat 13.00, 05 Februari 2021
    latihan 2A Praktikum PW
    https://github.com/rafinuril/pw2021_203040135
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2C Praktikum PW</title>

    <style>
        .salmon {
            background-color: salmon;
            height: 50px;
            width: 50px;
            line-height: 50px;
            text-align: center;
            margin-bottom: 3px;
            border-radius: 50px;
            display: inline-block;
            border: 2px solid black;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <?php

    function tumpukanBola($tumpukan)
    {
        for ($i = 1; $i <= $tumpukan; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo "<div class=salmon>$i</div>";
            }
            echo "<br>";
        }
    }

    echo tumpukanBola(5);

    ?>

</body>

</html>