<?php

require_once('../unitils/connection.php');

function createProduct($name, $description, $price, $stock, $categoryId, $imageURL, $db)
{
    $insertQuery = "INSERT INTO products (name, description, price, stock, category, imageURL) VALUES (?, ?, ?, ?, ?, ?)";

    try {
        $insertStatement = $db->prepare($insertQuery);
        $params = [$name, $description, $price, $stock, $categoryId, $imageURL];
        $insertStatement->execute($params);

        echo "Product {$name} is toegevoegd aan de database" . PHP_EOL;
    } catch (PDOException $e) {
        throw new PDOException('Error executing database query: ' . $e->getMessage());
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    createProduct($_POST['productname'], $_POST['description'], $_POST['price'], $_POST['voorraad'], $_POST['category'], $_POST['imgurl'], $db);

    header("Location: ../?page=admin");
}
