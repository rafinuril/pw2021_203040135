<!-- 
RAFI NURIL AKBAR F
203040135
JAM PRAKTIKUM 13:00 
-->

<?php

// Menghubungkan dengan file php lainnya
require 'php/functions.php';

if (isset($_GET["cari"])) {
    $keyword = $_GET["keyword"];

    $products = query("SELECT * FROM products 
                  WHERE 
                  name LIKE '%$keyword%'
    ");
} else {
    $products = query("SELECT * FROM products");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 6 C</title>

    <link rel="stylesheet" href="css/dist.css">
</head>

<body>

    <div class="container mx-auto my-20">
        <a href="php/login.php">
            <button type="button" class="mb-3 py-2 px-4 font-semibold rounded-lg shadow-md text-white text-sm bg-indigo-500 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Go to admin page
            </button>
        </a>

        <form action="" method="GET" class="mb-3">
            <input type="text" name="keyword" class="px-4 py-3 mt-1 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 w-11/12 shadow-sm sm:text-sm border border-gray-300 rounded-md" placeholder="Search data here">
            <button type="submit" name="cari" class="mb-3 py-3 px-4 font-semibold rounded-lg shadow-md text-white text-sm bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                Search
            </button>
        </form>
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
                    <?php if (empty($products)) : ?>
                        <tr>
                            <td>
                                <h3>Data tidak ditemukan</h3>
                            </td>
                        </tr>
                    <?php else : ?>
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
                            <?php endif; ?>
                </dl>
            </div>
        </div>
    </div>

</body>

</html>