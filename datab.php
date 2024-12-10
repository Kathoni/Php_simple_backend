<?php
$host = 'localhost';
$dbname = 'my_app1';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;databname=$databname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
