<?php

// Retrieve database credentials from environment variables

try {
    $dsn = "mysql:host=" . $_ENV['DB_HOST'] . ";dbname=" . $_ENV["DB_NAME"] . ";charset=utf8mb4";
    $db = new PDO($dsn, $_ENV['DB_USER'], $_ENV['DB_PASSWORD']);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
