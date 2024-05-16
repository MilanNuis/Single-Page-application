<?php

session_start();

require_once('../unitils/connection.php');

$invalidLogin = 0;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $stmt = $db->prepare("SELECT * FROM customers WHERE email = :email");

    $stmt->bindParam(':email', $_POST['email']);

    $stmt->execute();
    $data = $stmt->fetch();
    if ($data) {
        if (password_verify($_POST['password'], $data['password'])) {
            header('location: ../?page=home');
            $_SESSION['loggedInUser'] = 1;
        } else {
            $_SESSION['loggedInUser'] = 2;
            header('location: ../?page=login');
        }
        exit();
    } else {
        $_SESSION['loggedInUser'] = 2;
        header('location: ../?page=login');
    }
}
