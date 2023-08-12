<?php
$host = "containers-us-west-58.railway.app:7418/railway";
$user = "root";
$password = "WhE4Yx1WyqberwnnVDgG";
$database = "railway";

try {
    $PDO = new PDO("mysql:host=$host;database=$database", $user, $password);
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo ("erro " . $e->getMessage());
}
?>