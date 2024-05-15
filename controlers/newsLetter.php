<?php

require_once("../unitils/connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email-address'];
    $stmt = "INSERT INTO newsletteremail (email) VALUES ('$email')";
    $emailInsrt = $db->prepare($stmt);
    $emailInsrt->execute();
    header("Location: ../index.php");
}

?>