<?php
$serverName = 'localhost';
$userName = 'root';
$password = "";
$dbname = "ecommerce_shop";
// Create connection
try {
    $conn = new PDO("mysql:host=$serverName; dbname=$dbname", $userName, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
