<?php
try {
    $dsn = "mysql:host=$host;dbname=$db_name";
    $pdo = new PDO($dsn, $username, $password);

} catch (PDOException $e) {
    echo "connection failed" + $e->getMessage();
}