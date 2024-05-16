<?php
require_once("./unitils/connection.php");

$category = "";

if (isset($_GET['categorie'])) {
  $category = $_GET['categorie'];
}

$sql = "SELECT * FROM products WHERE category = :category";
$stmt = $db->prepare($sql);

$stmt->bindParam(':category', $category);

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<div class="bg-white">
  <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
    <h2 class="text-2xl font-bold tracking-tight text-gray-900"><?= ucfirst($category) . "onderwijs" ?></h2>

    <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
      <?php
      for ($i = 0; $i < count($results); $i++) {
        $row = $results[$i];
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
        echo '<a href="?page=product&id=' . $row['id'] . '">';
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