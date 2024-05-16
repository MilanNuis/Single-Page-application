<?php

require_once('../unitils/connection.php');

function createUser($firstname, $lastname, $email, $password, $country, $isAdmin, $db)
{
    $insertQuery = "INSERT INTO customers (firstName, lastName, email, password, country, isAdmin, created_at) VALUES (?, ?, ?, ?, ?, ?, NOW())";

    try {
        $insertStatement = $db->prepare($insertQuery);
        $insertStatement->execute([$firstname, $lastname, $email, $password, $country, $isAdmin]);
    } catch (PDOException $e) {
        throw new PDOException('Er is iets fout gegaan bij het uitvoeren van de database query', 0, $e);
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $hashedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);

    createUser(
        $_POST['firstname'],
        $_POST['lastname'],
        $_POST['email'],
        $hashedPassword,
        $_POST['country'],
        false,
        $db
    );

    header("Location: ../?page=login");
}
