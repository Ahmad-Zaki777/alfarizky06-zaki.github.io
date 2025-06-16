<?php
// Konfigurasi database
$host = 'localhost';
$dbname = 'db_toko'; // Ganti dengan nama database Anda
$username = 'root'; // Ganti dengan username database Anda
$password = ''; // Ganti dengan password database Anda

// Membuat koneksi
try {
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
    $pdo = new PDO($dsn, $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Mode error
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Mode pengambilan data
        PDO::ATTR_PERSISTENT => false // Tidak menggunakan koneksi persisten
    ]);
} catch (PDOException $e) {
    die('Koneksi gagal: ' . $e->getMessage());
}
?>