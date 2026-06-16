<?php
function connectDB() {
    $host = 'localhost';
    $db   = 'prak501';
    $user = 'root'; // Sesuaikan user database kamu
    $pass = '';     // Sesuaikan password database kamu
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    try {
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (\PDOException $e) {
        die("Koneksi gagal: " . $e->getMessage());
    }
}
?>