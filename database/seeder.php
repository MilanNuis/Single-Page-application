<?php

require_once('../unitils/connection.php');

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
        'firstname' => 'John',
        'lastname' => 'Doe',
        'email' => 'john@example.com',
        'password' => password_hash('secret123', PASSWORD_DEFAULT),
        'country' => 'Netherlands',
        'isAdmin' => false,
    ],
    [
        'firstname' => 'Jane',
        'lastname' => 'Smith',
        'email' => 'jane@example.com',
        'password' => password_hash('qwerty456', PASSWORD_DEFAULT),
        'country' => 'United States',
        'isAdmin' => true,
    ],
    [
        'firstname' => 'Alice',
        'lastname' => 'Johnson',
        'email' => 'alice@example.com',
        'password' => password_hash('p@ssw0rd', PASSWORD_DEFAULT),
        'country' => 'Canada',
        'isAdmin' => false,
    ],
];

$products = [
    [
        "name" => "School Robot",
        "price" => 199.50,
        "stock" => 10,
        "categoryId" => 2,
        "imageURL" => "https://i.imgur.com/pLzJtlT.png"
    ],
    [
        "name" => "Gigo diverse technieksets 2-16 jaarGigo diverse technieksets",
        "price" => 405.50,
        "stock" => 5,
        "categoryId" => 2,
        "imageURL" => "https://i.imgur.com/6Ah7DUH.png"
    ],
    [
        "name" => "Robot Boek",
        "price" => 259.50,
        "stock" => 6,
        "categoryId" => 1,
        "imageURL" => "https://i.imgur.com/hZHDHxk.png"
    ],
];

$categorys = [
    [
        "name" => "Robots"
    ],
    [
        "name" => "Books"
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

foreach ($categorys as $category) {
    createCategory($category['name'], $db);
}

foreach ($products as $product) {
    createProduct(
        $product['name'],
        $product['price'],
        $product['stock'],
        $product['categoryId'],
        $product['imageURL'],
        $db
    );
}
