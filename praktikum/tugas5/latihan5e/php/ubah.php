<!-- 
RAFI NURIL AKBAR FIRMANSYAH
203040135
JAM PRAKTIKUM 13:00 
-->

<?php

// Menghubungkan dengan file php lainnya
require 'functions.php';

// ambil id url
$id = $_GET["id"];

// query data product berdasarkan id
$product = query("SELECT * FROM products WHERE id = $id")[0];

// cek submit sudah ditekan apa belum
if (isset($_POST["submit"])) {

  // cek apakah data berhasil diubah atau tidak
  if (ubah($_POST) > 0) {
    echo "
          <script>
              alert('Data berhasil diubah');
              document.location.href = 'admin.php';
          </script>
      ";
  } else {
    echo "
          <script>
              alert('Data gagal diubah');
              document.location.href = 'admin.php';
          </script>
      ";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Ubah Data</title>

  <link rel="stylesheet" href="../css/dist.css">
</head>

<body>

  <div class="container mx-auto my-20">
    <div class="mt-10 sm:mt-0">
      <div class="md:grid md:grid-cols-2 md:gap-6">
        <div class="md:col-span-1">
          <div class="px-4 sm:px-0">
            <h3 class="text-lg font-medium leading-6 text-gray-900">Update data product</h3>
            <p class="mt-1 text-sm text-gray-600">
              All data must be filled in correctly and accordingly
            </p>
          </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
          <form action="" method="POST">
            <div class="shadow overflow-hidden sm:rounded-md">
              <div class="px-4 py-5 bg-white sm:p-6">
                <div class="grid grid-cols-6 gap-6">
                  <div class="col-span-6 sm:col-span-3">
                    <input type="hidden" name="id" value="<?= $product["id"] ?>">
                    <label for="name_product" class="block text-sm font-medium text-gray-700">Name product</label>
                    <input type="text" name="name" id="name_product" autocomplete="given-name" class="px-4 py-3 mt-1 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md" value="<?= $product["name"] ?>">
                  </div>

                  <div class="col-span-6 sm:col-span-3">
                    <label for="brand" class="block text-sm font-medium text-gray-700">Brand</label>
                    <input type="text" name="brand" id="brand" autocomplete="family-name" class="px-4 py-3 mt-1 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md" value="<?= $product["brand"] ?>">
                  </div>

                  <div class="col-span-6 sm:col-span-6">
                    <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="px-4 py-3 mt-1 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md"><?= $product["description"] ?></textarea>
                  </div>

                  <div class="col-span-6 sm:col-span-3">
                    <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                    <input type="number" name="price" id="price" autocomplete="family-name" class="px-4 py-3 mt-1 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md" value="<?= $product["price"] ?>">
                  </div>

                  <div class="col-span-6 sm:col-span-3">
                    <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                    <select id="category" name="category" autocomplete="category" class="mt-1 block w-full px-4 py-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                      <option>Shirt</option>
                      <option>Long Shirt</option>
                      <option>Flannel</option>
                      <option>Shoes</option>
                      <option>Pants</option>
                      <option>Clothes</option>
                      <option>Sandals</option>
                    </select>
                  </div>

                  <!-- <div class="col-span-12 sm:col-span-6">
                    <label class="block text-sm font-medium text-gray-700">
                      Picture
                    </label>
                    <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                      <div class="space-y-1 text-center">
                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                          <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <div class="flex text-sm text-gray-600">
                          <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                            <span>Upload a file</span>
                            <input id="file-upload" name="picture" type="file" class="sr-only">
                          </label>
                          <p class="pl-1">or drag and drop</p>
                        </div>
                        <p class="text-xs text-gray-500">
                          PNG, JPG, GIF up to 10MB
                        </p>
                      </div>
                    </div>
                  </div> -->

                  <div class="col-span-6 sm:col-span-6">
                    <label for="picture" class="block text-sm font-medium text-gray-700">Picture</label>
                    <input type="text" name="picture" id="picture" class="px-4 py-3 mt-1 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md" value="<?= $product["picture"] ?>">
                  </div>
                </div>

              </div>
            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
              <button type="submit" name="submit" class="inline-flex justify-center mr-1 py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Update
              </button>
              <a href="admin.php" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-400 hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400">
                Back
              </a>
            </div>
        </div>
        </form>
      </div>
    </div>
  </div>
  </div>

</body>

</html>