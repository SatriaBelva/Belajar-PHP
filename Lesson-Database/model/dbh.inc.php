<?php

$dsn = "mysql:host=localhost;dbname=belajar_php";
$dbusername = "root";
$dbpassword = "";

try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOEXCEPTION $e) {
    echo "ERROR: Could not connect " . $e->getMessage();
}