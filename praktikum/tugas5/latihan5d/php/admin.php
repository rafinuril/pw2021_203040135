<!-- 
RAFI NURIL AKBAR FIRMANSYAH
203040135
JAM PRAKTIKUM 13:00 
-->

<?php

// Menghubungkan dengan file php lainnya
require 'functions.php';

// Melakukan query
$products = query("SELECT * FROM products");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Admin</title>

  <link rel="stylesheet" href="../css/dist.css">
</head>

<body>

  <div class="container mx-auto my-20">
    <h4 class="text-center text-lg font-medium text-gray-500 uppercase tracking-wider mb-6">Data Semua Barang</h4>
    <div class="flex flex-col">
      <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
          <a href="tambah.php">
            <button type="button" class="mb-3 py-2 px-4 font-semibold rounded-lg shadow-md text-white text-sm bg-indigo-500 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
              Add product
            </button>
          </a>
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
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Options
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
                          <a href="../assets/img/<?= $product["picture"] ?>"><img class="h-10 w-10 rounded-full" src="../assets/img/<?= $product["picture"] ?>" alt=""></a>
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
                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                      <a href="ubah.php?id=<?= $product["id"]; ?>">
                        <button class="mr-1 py-2 px-4 font-semibold rounded-lg shadow-md text-white bg-green-500 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                          Edit
                        </button>
                      </a>
                      <a href="hapus.php?id=<?= $product["id"]; ?>" onclick="return confirm('Yakin?')">
                        <button class="py-2 px-4 font-semibold rounded-lg shadow-md text-white bg-red-500 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                          Delete
                        </button>
                      </a>
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