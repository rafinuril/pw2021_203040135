<!-- 
RAFI NURIL AKBAR FIRMANSYAH
203040135
JAM PRAKTIKUM 13:00 
-->

<?php

// Menghubungkan dengan file php lainnya
require 'php/functions.php';

// Melakukan query
$products = query("SELECT * FROM products");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 5 B</title>

    <link rel="stylesheet" href="css/dist.css">
</head>

<body>

    <div class="container mx-auto my-20">
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    Product Name List
                </h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">
                    Click a name to see the details.
                </p>
            </div>
            <div class="border-t border-gray-200">
                <dl>
                    <?php foreach ($products as $product) : ?>
                        <?php if ($product["id"] % 2 == 0) : ?>
                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <?php else : ?>
                                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <?php endif; ?>
                                <dt class="text-sm font-medium text-gray-500">
                                    Name of Products
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    <a href="php/detail.php?id=<?= $product['id'] ?>">
                                        <?= $product["name"] ?>
                                    </a>
                                </dd>
                                </div>
                            <?php endforeach; ?>
                </dl>
            </div>
        </div>
    </div>

</body>

</html>