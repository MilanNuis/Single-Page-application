<?php

try {
    $dsn = "mysql:host=localhost;dbname=deepdive";
    $db = new PDO($dsn, "bit_academy", "bit_academy");

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit;
}
