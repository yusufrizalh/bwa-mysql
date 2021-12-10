<?php

$dbHost = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "db_bwa";

try {
    $dbConnection = new PDO("mysql:host={$dbHost}; dbname={$dbName}", $dbUser, $dbPassword);
    $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Database connection is successful";
} catch (PDOException $e) {
    echo $e->getMessage();
}
