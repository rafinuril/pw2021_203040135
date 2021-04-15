<!-- 
RAFI NURIL AKBAR FIRMANSYAH
203040135
JAM PRAKTIKUM 13:00 
-->

<?php

// Mengecek apakah ada id yang dikirimkan
// Jika tidak maka akan dikembalikan ke halaman index
if (!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}

require 'functions.php';

// Mengambil id dari url
$id = $_GET['id'];

// Melakukan query dengan parameter id yang diambil dari url
$products = query("SELECT * FROM products WHERE id = $id")[0];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Products</title>

    <link rel="stylesheet" href="../css/dist.css">
</head>

<body>

    <div class="container mx-auto my-20">
        <a href="../index.php">
            <button type="button" class="mb-3 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Back to Home
            </button>
        </a>
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    Detail of Products
                </h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">
                    You can see the detail of products.
                </p>
            </div>
            <div class="border-t border-gray-200">
                <dl>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Picture
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            <img src="../assets/img/<?= $products["picture"] ?>" class="rounded">
                        </dd>
                    </div>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Name
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            <?= $products["name"] ?>
                        </dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Brand
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            <?= $products["brand"] ?>
                        </dd>
                    </div>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Description
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            <?= $products["description"] ?>
                        </dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <?php if ($products["category"] == "Shirt") : ?>
                            <dt class="text-sm font-medium text-gray-500">
                                Category
                            </dt>
                            <dd class="mt-1 text-sm sm:mt-0 sm:col-span-2">
                                <span class="px-2 inline-flex leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    <?= $products["category"] ?>
                                </span>
                            </dd>
                        <?php elseif ($products["category"] == "Shoes") : ?>
                            <dt class="text-sm font-medium text-gray-500">
                                Category
                            </dt>
                            <dd class="mt-1 text-sm sm:mt-0 sm:col-span-2">
                                <span class="px-2 inline-flex leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                    <?= $products["category"] ?>
                                </span>
                            </dd>
                        <?php elseif ($products["category"] == "Flannel") : ?>
                            <dt class="text-sm font-medium text-gray-500">
                                Category
                            </dt>
                            <dd class="mt-1 text-sm sm:mt-0 sm:col-span-2">
                                <span class="px-2 inline-flex leading-5 font-semibold rounded-full bg-indigo-100 text-indigo-800">
                                    <?= $products["category"] ?>
                                </span>
                            </dd>
                        <?php elseif ($products["category"] == "Clothes") : ?>
                            <dt class="text-sm font-medium text-gray-500">
                                Category
                            </dt>
                            <dd class="mt-1 text-sm sm:mt-0 sm:col-span-2">
                                <span class="px-2 inline-flex leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                    <?= $products["category"] ?>
                                </span>
                            </dd>
                        <?php elseif ($products["category"] == "Long Shirt") : ?>
                            <dt class="text-sm font-medium text-gray-500">
                                Category
                            </dt>
                            <dd class="mt-1 text-sm sm:mt-0 sm:col-span-2">
                                <span class="px-2 inline-flex leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                    <?= $products["category"] ?>
                                </span>
                            </dd>
                        <?php elseif ($products["category"] == "Sandals") : ?>
                            <dt class="text-sm font-medium text-gray-500">
                                Category
                            </dt>
                            <dd class="mt-1 text-sm sm:mt-0 sm:col-span-2">
                                <span class="px-2 inline-flex leading-5 font-semibold rounded-full bg-purple-100 text-purple-800">
                                    <?= $products["category"] ?>
                                </span>
                            </dd>
                        <?php elseif ($products["category"] == "Pants") : ?>
                            <dt class="text-sm font-medium text-gray-500">
                                Category
                            </dt>
                            <dd class="mt-1 text-sm sm:mt-0 sm:col-span-2">
                                <span class="px-2 inline-flex leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">
                                    <?= $products["category"] ?>
                                </span>
                            </dd>
                        <?php endif; ?>
                    </div>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Price
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            Rp. <?= $products["price"] ?>
                        </dd>
                    </div>
                </dl>
            </div>
        </div>

    </div>

</body>

</html>