<?php

// $host = "localhost:/var/run/mysqld/mysqld.sock";
$host = "127.0.0.1";
$user = "root";
$password = "06022003eln68";
$database = "DB_tomdosom";

try {
    $PDO = new PDO("mysql:host=$host;database=$dbname", $user, $password);
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo ("vencemo");
} catch (PDOException $e) {
    echo ("vencemossssssssss" . $e->getMessage());
}


// define('MYSQL_HOST', 'localhost');
// define('MYSQL_USER', 'root');
// define('MYSQL_PASSWORD', '06022003eln68');
// define('MYSQL_DB_NAME', 'DB_tomdosom');
// try {
//     $PDO = new PDO('mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD);
// } catch (PDOException $e) {
//     echo 'Erro aosssssss conectar com o MySQL: ' . $e->getMessage();
// }
