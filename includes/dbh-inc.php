<?php

$dsn = "mysql:host=localhost;dbname=myfirstdatabase";
//Deafult log-in for XAMPP localhost/phpmyadmin
$dbusername = "root";
$dbpassword = "";

try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection FAILED: " . $e->getMessage();
}

