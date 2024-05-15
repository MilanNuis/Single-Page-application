<?php

session_start();
require_once('../unitils/connection.php');

$invalidLogin = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $stmt = $db->prepare("SELECT * FROM customers WHERE email = :email AND password = :wachtwoord");

    $stmt->bindParam(':email', $_POST['email']);
    $stmt->bindParam(':wachtwoord', $_POST['password']);

    $stmt->execute();
    $data = $stmt->fetchAll();

    if ($data) {
        header('location: ../index.php');
        $_SESSION['loggedInUser'] = 1;
        exit();
    } else {
        $_SESSION['loggedInUser'] = 2;
        header('location: ../?page=login');
    }
}

?>