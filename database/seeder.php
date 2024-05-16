<?php

require_once('../unitils/connection.php');

$tables = ['products', 'customers'];

foreach ($tables as $table) {
    $sql = "TRUNCATE TABLE $table";
    $db->exec($sql);
    echo "Tabel $table geleegd.", PHP_EOL;
}

function createUser($firstname, $lastname, $email, $password, $country, $isAdmin, $db)
{
    $insertQuery = "INSERT INTO customers (firstName, lastName, email, password, country, isAdmin, created_at) VALUES (?, ?, ?, ?, ?, ?, NOW())";

    try {
        $insertStatement = $db->prepare($insertQuery);
        $insertStatement->execute([$firstname, $lastname, $email, $password, $country, $isAdmin]);

        echo "Gebruiker {$firstname} {$lastname} toegevoegd aan de database.", PHP_EOL;
    } catch (PDOException $e) {
        throw new PDOException('Er is iets fout gegaan bij het uitvoeren van de database query', 0, $e);
    }
}

function createProduct($name, $price, $stock, $categoryId, $imageURL, $db)
{
    $insertQuery = "INSERT INTO products (name, price, stock, category, imageURL) VALUES (?, ?, ?, ?, ?)";

    try {
        $insertStatement = $db->prepare($insertQuery);
        $params = [$name, $price, $stock, $categoryId, $imageURL];
        $insertStatement->execute($params);

        echo "Product {$name} is toegevoegd aan de database" . PHP_EOL;
    } catch (PDOException $e) {
        throw new PDOException('Error executing database query: ' . $e->getMessage());
    }
}



function createCategory($name, $db)
{
    $insertQuery = "INSERT INTO categories (name) VALUES (?)";

    try {
        $insertStatement = $db->prepare($insertQuery);
        $insertStatement->execute([$name]);

        echo "Category {$name} is toegevoegd aan de database", PHP_EOL;
    } catch (PDOException $e) {
        throw new PDOException('Er is iets fout gegaan bij het uitvoeren van de database query' . $e->getMessage());
        die();
    };
}

$users = [
    [
        'firstname' => 'admin',
        'lastname' => 'account',
        'email' => 'admin@gmail.com',
        'password' => password_hash('admin', PASSWORD_DEFAULT),
        'country' => 'Netherlands',
        'isAdmin' => true,
    ],
    [
        'firstname' => 'gebruiker',
        'lastname' => 'voorbeeld',
        'email' => 'gebruiker@gmail.com',
        'password' => password_hash('gebruiker', PASSWORD_DEFAULT),
        'country' => 'Netherlands',
        'isAdmin' => false,
    ],
];

$products = [
    [
        "name" => "School Robot",
        "price" => 199.50,
        "stock" => 10,
        "category" => "Robotica",
        "imageURL" => "https://i.imgur.com/pLzJtlT.png"
    ],
    [
        "name" => "Gigo diverse technieksets 2-16 jaar Gigo diverse technieksets",
        "price" => 405.50,
        "stock" => 5,
        "category" => "Techniek",
        "imageURL" => "https://i.imgur.com/6Ah7DUH.png"
    ],
    [
        "name" => "Robot Boek",
        "price" => 259.50,
        "stock" => 6,
        "category" => "Boeken",
        "imageURL" => "https://i.imgur.com/hZHDHxk.png"
    ],
];

foreach ($users as $user) {
    createUser(
        $user['firstname'],
        $user['lastname'],
        $user['email'],
        $user['password'],
        $user['country'],
        $user['isAdmin'],
        $db
    );
}

foreach ($products as $product) {
    createProduct(
        $product['name'],
        $product['price'],
        $product['stock'],
        $product['category'],
        $product['imageURL'],
        $db
    );
}
