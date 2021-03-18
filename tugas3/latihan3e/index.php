<!-- 
Rafi Nuril Akbar Firmansyah
203040135
Jam Pratikum 13:00
github.com/rafinuril
-->

<?php

$products = [

    [
        "picture" => "1.png",
        "name" => "Dark Gray Short",
        "brand" => "Broodis",
        "description" => "Original Dark Grey Short, made of full cotton and comfortable to wear",
        "category" => "Shirt",
        "price" => 185000
    ],
    [
        "picture" => "4.png",
        "name" => "Austin Gray",
        "brand" => "Broodis",
        "description" => "Original Austin Grey Flannel, made of flannel fabric and comfortable to wear",
        "category" => "Flannel",
        "price" => 195000
    ],
    [
        "picture" => "5.png",
        "name" => "Bro Do Trainer",
        "brand" => "Bro Do",
        "description" => "Original Bro Do Trainer shoes, sporty style and casual shoes",
        "category" => "Shoes",
        "price" => 265000
    ],
    [
        "picture" => "3.png",
        "name" => "Gentle Black Long",
        "brand" => "Broodis",
        "description" => "Original Gentle Black Long, made of full cotton and comfortable to wear",
        "category" => "Long Shirt",
        "price" => 225000
    ],
    [
        "picture" => "6.png",
        "name" => "VTG V.2 Olive",
        "brand" => "Bro Do",
        "description" => "Original VTG V.2 Olive Shoes, elegant style and casual shoes",
        "category" => "Shoes",
        "price" => 375000
    ],
    [
        "picture" => "7.png",
        "name" => "Signature Navy Short",
        "brand" => "Kyran",
        "description" => "Original Signature Navy Short Pants, for comfortable and enjoyment",
        "category" => "Pants",
        "price" => 126000
    ],
    [
        "picture" => "8.png",
        "name" => "Oversized Clothes",
        "brand" => "Kyran",
        "description" => "Original Oversized Clothes, made of cotton combed 30s and comfortable to wear",
        "category" => "Clothes",
        "price" => 65000
    ],
    [
        "picture" => "9.png",
        "name" => "Malta Blast",
        "brand" => "Osgood",
        "description" => "Original Malta Blast Sandals, made adventure, travelling and protect the feet",
        "category" => "Sandals",
        "price" => 315000
    ],
    [
        "picture" => "10.png",
        "name" => "Stripy Polo",
        "brand" => "Prepp Studio",
        "description" => "Original Stripy Polo Clothes, made of full cotton and comfortable to wear",
        "category" => "Clothes",
        "price" => 199000
    ],
    [
        "picture" => "2.png",
        "name" => "Clean White Long",
        "brand" => "Broodis",
        "description" => "Original Clean White Long, made of full cotton and comfortable to wear",
        "category" => "Long Shirt",
        "price" => 225000
    ],

];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3 E</title>

    <link rel="stylesheet" href="styles/main.css">
</head>

<body>

    <div class="container mx-auto my-20">
        <h4 class="text-center text-lg font-medium text-gray-500 uppercase tracking-wider mb-6">Data Semua Barang</h4>
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        #
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Name Product
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Brand
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Description
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Category
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Price
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <?php $i = 1; ?>
                                <?php foreach ($products as $product) : ?>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900 font-medium"><?= $i ?></div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <a href="img/<?= $product["picture"] ?>"><img class="h-10 w-10 rounded-full" src="img/<?= $product["picture"] ?>" alt=""></a>
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        <?= $product["name"] ?>
                                                    </div>
                                                    <div class="text-sm text-gray-500">
                                                        From Indonesia
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900 font-medium"><?= $product["brand"] ?></div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-500"><?= $product["description"] ?></div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <?php if ($product["category"] == "Shirt") : ?>
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                    <?= $product["category"] ?>
                                                </span>
                                            <?php elseif ($product["category"] == "Shoes") : ?>
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                                    <?= $product["category"] ?>
                                                </span>
                                            <?php elseif ($product["category"] == "Flannel") : ?>
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-indigo-100 text-indigo-800">
                                                    <?= $product["category"] ?>
                                                </span>
                                            <?php elseif ($product["category"] == "Clothes") : ?>
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                                    <?= $product["category"] ?>
                                                </span>
                                            <?php elseif ($product["category"] == "Long Shirt") : ?>
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                                    <?= $product["category"] ?>
                                                </span>
                                            <?php elseif ($product["category"] == "Sandals") : ?>
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-purple-100 text-purple-800">
                                                    <?= $product["category"] ?>
                                                </span>
                                            <?php elseif ($product["category"] == "Pants") : ?>
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">
                                                    <?= $product["category"] ?>
                                                </span>
                                            <?php endif; ?>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            Rp. <?= $product["price"] ?>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>