<?php
require_once("./unitils/connection.php");

$sql = "SELECT * FROM products";
$result = $db->query($sql)


?>
<div class="bg-white">
  <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
    <h2 class="text-2xl font-bold tracking-tight text-gray-900">Robotica</h2>

    <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
      <!-- <div class="group relative">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
          <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-gray-700">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                Starterset Robotica
              </a>
            </h3>
            <p class="mt-1 text-sm text-gray-500">LEGO</p>
          </div>
          <p class="text-sm font-medium text-gray-900">$80</p>
        </div>
      </div> -->

      <?php
      while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $productName = htmlspecialchars($row["name"]);
        $productPrice = number_format($row["price"], 2);
        $productImageURL = $row["imageURL"];
        $productCategory = $row["category"];

        echo '<div class="group relative">';
        echo '<div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">';
        echo '<img src="' . $productImageURL . '" alt="' . $productName . '" class="h-full w-full object-cover object-center lg:h-full lg:w-full">';
        echo '</div>';
        echo '<div class="mt-4 flex justify-between">';
        echo '<div>';
        echo '<h3 class="text-sm text-gray-700">';
        echo '<a href="#">';
        echo '<span aria-hidden="true" class="absolute inset-0"></span>';
        echo $productName;
        echo '</a>';
        echo '</h3>';
        echo '<p class="mt-1 text-sm text-gray-500">Categorie: ' . $productCategory . '</p>';
        echo '</div>';
        echo '<p class="text-sm font-medium text-gray-900">$' . $productPrice . '</p>';
        echo '</div>';
        echo '</div>';
      }
      ?>

    </div>
  </div>
</div>