<?php

function getPage()
{
    if (isset($_GET['page'])) {
        if (file_exists("resources/views/" . $_GET['page'] . ".view.php")) {
            return "resources/views/" . $_GET['page'] . ".view.php";
        } else {
            return "resources/views/errors/404.view.php";
        }
    }

    return "./resources/views/home.view.php";
}


function isAdmin()
{
    return isset($_SESSION['loggedInUser']) && $_SESSION['loggedInUser']['admin'] == 1 ? true : false;
}

/**
 * Create an article in the database.
 *
 * @param string $title The title of the article
 * @param string $author The author of the article
 * @param string $authorURL The URL of the author
 * @param string $content The content of the article
 * @param string $tag The tag for the article
 * @param PDO $db The PDO database connection
 * @return void
 */

function createArticle($title, $author, $authorURL, $content, $tag, $db)
{
    $insertQuery = "INSERT INTO articles (title, author, authorURL, content, tag, date) VALUES (?, ?, ?, ?, ?, NOW())";

    try {
        $insertStatement = $db->prepare($insertQuery);
        $params = [$title, $author, $authorURL, $content, $tag];
        $insertStatement->execute($params);

        echo "Product {$title} is toegevoegd aan de database" . PHP_EOL;
    } catch (PDOException $e) {
        throw new PDOException('Error executing database query: ' . $e->getMessage());
    }
}

/**
 * Create a category in the database.
 *
 * @param string $name The name of the category
 * @param PDO $db The PDO database connection
 * @return void
 */

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

/**
 * Create a user in the database.
 *
 * @param string $firstname The first name of the user
 * @param string $lastname The last name of the user
 * @param string $email The email of the user
 * @param string $password The password of the user
 * @param string $country The country of the user
 * @param bool $isAdmin Whether the user is an admin
 * @param PDO $db The PDO database connection
 * @return void
 */

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

/**
 * Create a product in the database.
 *
 * @param string $name The name of the product
 * @param string $description The description of the product
 * @param float $price The price of the product
 * @param int $stock The stock quantity of the product
 * @param int $categoryId The ID of the category the product belongs to
 * @param string $imageURL The URL of the product image
 * @param PDO $db The PDO database connection
 * @return void
 */

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
