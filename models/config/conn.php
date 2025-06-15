<?php
$host = 'localhost'; // ✅ add this if not defined
$db_name = 'your_db_name';
$username = 'your_username';
$password = 'your_password';

try {
    $dsn = "mysql:host=$host;dbname=$db_name;charset=utf8mb4";
    $pdo = new PDO($dsn, $username, $password);
    // Optional: set error mode
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage(); // ✅ use . instead of +
    exit;
}
?>