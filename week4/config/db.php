<?php
$dsn = 'mysql:localhost;dbname=laravellogin';
$username = 'root';
$password = '12345678';

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Connection failed: ' . $e->getMessage());
}
?>
