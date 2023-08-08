<?php
$host = "127.0.0.1";
$user = "root";
$password = "06022003";
$database = "Teki";

try {
    $PDO = new PDO("mysql:host=$host;database=$database", $user, $password);
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo ("erro " . $e->getMessage());
}
?>